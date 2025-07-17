@include('components.header')

<div class="container py-5 mt-5 mb-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card shadow rounded-4">
                <div class="card-body p-4">
                    <h3 class="mb-4 text-center text-success">Login</h3>

                    @if (session('status'))
                        <div class="alert alert-success text-center">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(request('message') == 'login-first')
                        <div class="alert alert-warning">
                            Please login first to proceed to checkout.
                        </div>
                    @endif


                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            @error('password')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                                <label class="form-check-label" for="remember_me">Remember Me</label>
                            </div> -->

                        <button type="submit" class="btn btn-success w-100">Login</button>

                        <div class="text-center mt-3">
                            <a href="{{ route('password.request') }}">Forgot your password?</a>
                        </div>

                        <div class="text-center mt-2">
                            Don’t have an account? <a href="{{ route('register') }}">Register here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.footer')