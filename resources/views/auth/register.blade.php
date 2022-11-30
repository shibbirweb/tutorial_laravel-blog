<x-guest-layout>
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ url('/') }}" class="h1">
                    <x-common.site-name-guest />
                </a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Register a new membership</p>

                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <x-form.input-group name="name" icon="fas fa-user" placeholder="Full name"/>
                    </div>

                    <div class="mb-3">
                        <x-form.input-group name="email" type="email" icon="fas fa-envelope" />
                    </div>

                    <div class="mb-3">
                        <x-form.input-group name="phone" icon="fas fa-phone" />
                    </div>

                    <div class="mb-3">
                        <x-form.input-group name="password" type="password" icon="fas fa-lock" />
                    </div>

                    <div class="mb-3">
                        <x-form.input-group name="password_confirmation" type="password" icon="fas fa-lock"
                            placeholder="Retype password" />
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div>

                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
                @endif
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
</x-guest-layout>
