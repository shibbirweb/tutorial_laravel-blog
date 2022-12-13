<x-guest-layout>
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ url('/') }}" class="h1">
                    <x-common.site-name-guest />
                </a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">You are only one step a way from your new password, recover your password now.
                </p>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="mb-3">
                        <x-form.input-group name="email" type="email" :value="$request->email" icon="fas fa-envelope"
                            required readonly />
                    </div>
                    <div class="mb-3">
                        <x-form.input-group name="password" type="password" icon="fas fa-lock" required />
                    </div>
                    <div class="mb-3">
                        <x-form.input-group name="password_confirmation" type="password" icon="fas fa-lock"
                            placeholder="Retype password" required />
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <x-form.button block primary>Change password</x-form.button>
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
