<x-guest-layout>
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ url('/') }}" class="h1">
                    <x-common.site-name-guest />
                </a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Coming soon</p>

                @env('local')
                @if (Route::has('login'))
                    <p class="mb-1">
                        <a href="{{ route('login') }}" class="btn btn-block btn-primary">Login</a>
                    </p>
                @endif
                @endenv

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

</x-guest-layout>
