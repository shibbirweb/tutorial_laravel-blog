<x-guest-layout>
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ url('/') }}" class="h1">
                    <x-common.site-name-guest />
                </a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
                <form action="{{ route('password.email') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <x-form.input-group name="email" type="email" icon="fas fa-envelope" required />
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <x-form.button block primary>Request new password</x-form.button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mt-3 mb-1">
                    <a href="{{ route('login') }}">Login</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
</x-guest-layout>
