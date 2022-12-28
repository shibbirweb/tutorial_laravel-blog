<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard.index') }}" class="brand-link">
        <img src="{{ Vite::template('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel d-flex align-items-center mt-3 mb-3 pb-3">
            <div class="image">
                <img src="{{ Vite::template('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                <form id="logout-from" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="button" id="logout-btn" class="btn btn-xs btn-outline-info">
                        <i class="fas fa-sign-out-alt"></i>
                        Sign Out
                    </button>

                    @push('script')
                        <script>
                            const logoutForm = document.querySelector('#logout-from')
                            const logoutBtn = document.querySelector('#logout-btn')
                            logoutBtn.addEventListener('click', function(event) {
                                event.preventDefault()
                                Swal.fire({
                                    title: 'Are you sure want to sign out?',
                                    showCancelButton: true,
                                    confirmButtonText: 'Yes',
                                    cancelButtonText: `No`,
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        logoutForm.submit();
                                    }
                                })
                            })
                        </script>
                    @endpush
                </form>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <x-sidebar class="mt-2">
            <x-sidebar.item name="Dashboard" icon="fas fa-tachometer-alt" :isActive="Route::is('dashboard.index')" :to="route('dashboard.index')" />
            <x-sidebar.item name="Post" icon="far fa-clipboard" :isActive="Route::is('dashboard.post.index') or Route::is('dashboard.post.create')">
                <x-sidebar.item name="Create New" :to="route('dashboard.post.create')" :isActive="Route::is('dashboard.post.create')" />
                <x-sidebar.item name="View All" :to="route('dashboard.post.index')" :isActive="Route::is('dashboard.post.index')" />
            </x-sidebar.item>
        </x-sidebar>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
