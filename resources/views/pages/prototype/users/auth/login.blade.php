<!-- Login Start -->
<div class="container-fluid p-5">
    <div class="mb-5 text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px; margin: auto;">
        <h5 class="section-title">Welcome Back</h5>
        <h1 class="display-3">Login</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="bg-light rounded p-5 shadow">

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="form-floating mb-3">
                        <input
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            id="email"
                            name="email"
                            placeholder="name@example.com"
                            value="{{ old('email') }}"
                            required
                        >
                        <label for="email">Email Address</label>

                        @error('email')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-floating mb-3">
                        <input
                            type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            id="password"
                            name="password"
                            placeholder="Password"
                            required
                        >
                        <label for="password">Password</label>

                        @error('password')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Remember + Forgot -->
                    <div class="d-flex justify-content-between mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label" for="remember">
                                Remember Me
                            </label>
                        </div>

                        <a href="{{ route('password.request') }}" class="text-primary">
                            Forgot Password?
                        </a>
                    </div>

                    <!-- Button -->
                    <button class="btn btn-primary w-100 py-3" type="submit">
                        Login
                    </button>

                    <!-- Register -->
                    <p class="text-center mt-3 mb-0">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="text-primary">Sign up</a>
                    </p>

                </form>

            </div>
        </div>
    </div>
</div>
<!-- Login End -->
