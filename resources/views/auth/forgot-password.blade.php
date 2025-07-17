 @include('components.header')
 
     <div class="container py-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow p-4 rounded-4">
                    <h2 class="mb-3 text-center text-warning">Forgot Password</h2>

                    <p class="text-center mb-4">
                        Forgot your password? No problem. Just let us know your email address and we’ll email you a password reset link.
                    </p>

                    @if (session('status'))
                        <div class="alert alert-success text-center">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input id="email" type="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-warning w-100">
                            Email Password Reset Link
                        </button>
                    </form>

                    <div class="text-center mt-3">
                        <a href="{{ route('login') }}">Back to Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')