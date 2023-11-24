@extends('administrator.authentication.main')

@section('content')
    <div class="brand-logo">
        <img src="{{ template_admin('images/logo-dark.svg') }}">
    </div>
    <h4>Hello! let's get started</h4>
    <h6 class="font-weight-light">Sign in to continue.</h6>
    <form class="pt-3" method="POST" action="{{ route('admin.loginProses') }}" id="form">
        @csrf
        @method('POST')
        <div class="form-group">
            <input type="email" name="email" class="form-control form-control-lg" id="inputEmail" placeholder="Email"
                data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change"
                data-parsley-error-message="Masukan alamat email yang valid." autocomplete="off" autofocus>
            <div class="" style="color: #dc3545" id="accessErrorEmail"></div>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control form-control-lg" id="inputPassword"
                placeholder="Password" data-parsley-required="true" data-parsley-minlength="8" data-parsley-trigger="change"
                data-parsley-error-message="Password harus memiliki setidaknya 8 karakter.">
            <div class="" style="color: #dc3545" id="accessErrorPassword"></div>
        </div>
        <div class="mt-3">
            <button type="submit" id="formSubmit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                tabindex="4">
                <span class="indicator-label">SIGN IN</span>
                <span class="indicator-progress" style="display: none;">
                    Tunggu Sebentar...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>
        </div>
        <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
                <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input" disabled> Keep me signed in </label>
            </div>
            <a href="#" class="auth-link text-black">Forgot password?</a>
        </div>
        {{-- <div class="mb-2">
            <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                <i class="mdi mdi-facebook mr-2"></i>Connect using facebook </button>
        </div> --}}
        <div class="text-center mt-4 font-weight-light">
            {{ array_key_exists('footer_app_admin', $settings) ? $settings['footer_app_admin'] : '' }}
        </div>
    </form>
@endsection


@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            //validate parsley form
            const form = document.getElementById("form");
            const validator = $(form).parsley();

            const submitButton = document.getElementById("formSubmit");

            // form.addEventListener('keydown', function(e) {
            //     if (e.key === 'Enter') {
            //         e.preventDefault();
            //     }
            // });

            submitButton.addEventListener("click", async function(e) {
                e.preventDefault();

                indicatorBlock();


                // Perform remote validation
                const remoteValidationResultEmail = await validateRemoteEmail();
                const inputEmail = $("#inputEmail");
                const accessErrorEmail = $("#accessErrorEmail");
                if (!remoteValidationResultEmail.valid) {
                    // Remote validation failed, display the error message
                    accessErrorEmail.addClass('invalid-feedback');
                    inputEmail.addClass('is-invalid');

                    accessErrorEmail.text(remoteValidationResultEmail
                        .errorMessage); // Set the error message from the response
                    indicatorNone();

                    return;
                } else {
                    accessErrorEmail.removeClass('invalid-feedback');
                    inputEmail.removeClass('is-invalid');
                    accessErrorEmail.text('');
                }

                // Perform remote validation
                const remoteValidationResultPassword = await validateRemotePassword();
                const inputPassword = $("#inputPassword");
                const accessErrorPassword = $("#accessErrorPassword");
                if (!remoteValidationResultPassword.valid) {
                    // Remote validation failed, display the error message
                    accessErrorPassword.addClass('invalid-feedback');
                    inputPassword.addClass('is-invalid');

                    accessErrorPassword.text(remoteValidationResultPassword
                        .errorMessage); // Set the error message from the response
                    indicatorNone();

                    return;
                } else {
                    accessErrorPassword.removeClass('invalid-feedback');
                    inputPassword.removeClass('is-invalid');
                    accessErrorPassword.text('');
                }

                // Validate the form using Parsley
                if ($(form).parsley().validate()) {
                    indicatorSubmit();
                    // Submit the form
                    form.submit();
                } else {
                    // Handle validation errors
                    const validationErrors = [];
                    $(form).find(':input').each(function() {
                        indicatorNone();

                        const field = $(this);
                        if (!field.parsley().isValid()) {
                            const attrName = field.attr('name');
                            const errorMessage = field.parsley().getErrorsMessages().join(
                                ', ');
                            validationErrors.push(attrName + ': ' + errorMessage);
                        }
                    });
                    console.log("Validation errors:", validationErrors.join('\n'));
                }
            });

            function indicatorSubmit() {
                submitButton.querySelector('.indicator-label').style.display =
                    'inline-block';
                submitButton.querySelector('.indicator-progress').style.display =
                    'none';
            }

            function indicatorNone() {
                submitButton.querySelector('.indicator-label').style.display =
                    'inline-block';
                submitButton.querySelector('.indicator-progress').style.display =
                    'none';
                submitButton.disabled = false;
            }

            function indicatorBlock() {
                // Disable the submit button and show the "Please wait..." message
                submitButton.disabled = true;
                submitButton.querySelector('.indicator-label').style.display = 'none';
                submitButton.querySelector('.indicator-progress').style.display =
                    'inline-block';
            }

            async function validateRemotePassword() {
                const inputEmail = $('#inputEmail');
                const inputPassword = $('#inputPassword');
                const remoteValidationUrl = "{{ route('admin.login.checkPassword') }}";
                const csrfToken = "{{ csrf_token() }}";

                try {
                    const response = await $.ajax({
                        method: "POST",
                        url: remoteValidationUrl,
                        data: {
                            _token: csrfToken,
                            email: inputEmail.val(),
                            password: inputPassword.val()
                        }
                    });

                    // Assuming the response is JSON and contains a "valid" key
                    return {
                        valid: response.valid === true,
                        errorMessage: response.message
                    };
                } catch (error) {
                    console.error("Remote validation error:", error);
                    return {
                        valid: false,
                        errorMessage: "An error occurred during validation."
                    };
                }
            }

            async function validateRemoteEmail() {
                const inputEmail = $('#inputEmail');
                const remoteValidationUrl = "{{ route('admin.login.checkEmail') }}";
                const csrfToken = "{{ csrf_token() }}";

                try {
                    const response = await $.ajax({
                        method: "POST",
                        url: remoteValidationUrl,
                        data: {
                            _token: csrfToken,
                            email: inputEmail.val()
                        }
                    });

                    // Assuming the response is JSON and contains a "valid" key
                    return {
                        valid: response.valid === true,
                        errorMessage: response.message
                    };
                } catch (error) {
                    console.error("Remote validation error:", error);
                    return {
                        valid: false,
                        errorMessage: "An error occurred during validation."
                    };
                }
            }
        });
    </script>
@endpush
