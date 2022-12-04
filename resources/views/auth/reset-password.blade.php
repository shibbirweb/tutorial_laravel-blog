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
                            <button type="submit" class="btn btn-primary btn-block">Change password</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mt-3 mb-1">
                    <a href="login.html">Login</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->


    {{-- <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="h-20 w-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email', $request->email)"
                    required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="mt-1 block w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="mt-1 block w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="mt-4 flex items-center justify-end">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card> --}}
</x-guest-layout>
