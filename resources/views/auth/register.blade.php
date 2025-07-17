 
@include('components.header')
 
 <div class="container py-5  mt-5 mb-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow p-4 rounded-4">
                    <h2 class="mb-4 text-center text-primary">Register</h2>

                    @if (session('status'))
                        <div class="alert alert-success text-center">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input id="name" class="form-control @error('name') is-invalid @enderror"
                                   type="text" name="name" value="{{ old('name') }}" required autofocus>
                            @error('name')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input id="email" class="form-control @error('email') is-invalid @enderror"
                                   type="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" class="form-control @error('password') is-invalid @enderror"
                                   type="password" name="password" required autocomplete="new-password">
                            @error('password')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input id="password_confirmation" class="form-control"
                                   type="password" name="password_confirmation" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </form>

                    <p class="mt-3 text-center">
                        Already have an account? <a href="{{ route('login') }}">Login here</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
  @include('components.footer')