<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="#" target="_blank">
            <img src="{{ asset('dist/admin/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">{{ Auth::user()->name }}</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::is('category.category') ? 'active bg-gradient-primary' : '' }}"
                    href="{{ route('category.category') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Danh mục sản phẩm</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white{{ Route::is('menus.menu') ? 'active bg-gradient-primary' : '' }}"
                    href="{{ route('menus.menu') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-bars"></i>
                    </div>
                    <span class="nav-link-text ms-1">Quản lý Menus</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::is('products.product') ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('products.product') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <span class="nav-link-text ms-1">Quản lý sản phẩm</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::is('blogs.blog') ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('blogs.blog') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <span class="nav-link-text ms-1">Quản lý Bài viết(Tin Tức)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::is('sliders.slider') ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('sliders.slider') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-bars"></i>
                    </div>
                    <span class="nav-link-text ms-1">Quản lý Silder</span>
                </a>
            </li>
             <li class="nav-item">
                <a class="nav-link text-white {{ Route::is('sliders.slider') ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('sliders.slider') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-bars"></i>
                    </div>
                    <span class="nav-link-text ms-1">Quản lý Đơn hàng</span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('menus.menu') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-bars"></i>
                    </div>
                    <span class="nav-link-text ms-1">Menus</span>
                </a>
            </li> --}}
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ Route::is('settings.setting') ? 'active bg-gradient-primary' : '' }}"
                    href="{{ route('settings.setting') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-cog opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Setting</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::is('users.user') ? 'active bg-gradient-primary' : '' }}"
                    href="{{ route('users.user') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Danh sách Nhân viên</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::is('roles.role') ? 'active bg-gradient-primary' : '' }}"
                    href="{{ route('roles.role') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-cog opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Danh sách Vai Trò</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::is('permissions.create') ? 'active bg-gradient-primary' : '' }}"
                    href="{{ route('permissions.create') }}">
                    {{-- <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-cog opacity-10"></i>
                    </div> --}}
                    <span class="nav-link-text ms-1">Tạo dữ liệu bảng Permission</span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link text-white " href=".pages/profile.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('logout') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">login</i>
                    </div>
                    <span class="nav-link-text ms-1">Sign In</span>
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::is('logout') ? 'active bg-gradient-primary' : '' }}" href="{{ route('logout') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">login</i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Up</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
