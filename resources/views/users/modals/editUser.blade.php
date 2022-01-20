<div class="modal fade" id="modalEditUser" tabindex="-1" aria-labelledby="modalEditUser" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditUserLabel">{{ __('home.edit') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body js-form-edit-user js-form-fields">

                <div class="row mb-3">
                    <label for="firstName" class="col-md-4 col-form-label text-md-end">{{ __('home.firstName') }}</label>

                    <div class="col-md-6">
                        <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror"
                            name="first_name" value="{{ old('firstName') }}" required autocomplete="first_name" autofocus>

                        @error('firstName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="lastName" class="col-md-4 col-form-label text-md-end">{{ __('home.lastName') }}</label>

                    <div class="col-md-6">
                        <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror"
                            name="last_name" value="{{ old('lastName') }}" required autocomplete="first_name" autofocus>

                        @error('lastName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('home.email') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">{{ __('auth.close') }}</button>
                <button type="submit" class="btn btn-primary js-edit-user" data-id="">{{ __('home.edit') }}</button>
            </div>
        </div>
    </div>
</div>
