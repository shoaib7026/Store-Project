@include('components.header')
 
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow p-4 rounded-4">
                    <h2 class="mb-4 text-center text-danger">Reset Password</h2>

                    <form method="POST" action="{{ route('password.store') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input id="email" type="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email', $email) }}" required autofocus>
                            @error('email')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">New Password</label>
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   name="password" required>
                            @error('password')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input id="password_confirmation" type="password"
                                   class="form-control @error('password_confirmation') is-invalid @enderror"
                                   name="password_confirmation" required>
                            @error('password_confirmation')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-danger w-100">Reset Password</button>
                    </form>

                    <p class="mt-3 text-center">
                        <a href="{{ route('login') }}">Back to Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

 @include('components.footer')