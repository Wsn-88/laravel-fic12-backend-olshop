<div class="main-sidebar sidebar-style-2 bg-dark">
    <aside id="sidebar-wrapper bg-dark">
        {{-- <div class="sidebar-brand ">
            <a href="{{ url('dashboard', []) }}">Online Shop</a>

        </div> --}}
        {{-- <div class="sidebar-brand sidebar-brand-sm">
            <img src="{{ asset('img/logos.png') }}" class="rounded-circle" alt="img"
                style=" width: 50%;margin-left: auto; margin-right: auto;display: block;">
        </div> --}}
        <ul class="sidebar-menu">
            <a class="navbar-brand" href="{{ url('dashboard') }}">
                <img src="{{ asset('img/logos.png') }}" class="rounded-circle" alt="img"
                    style=" width: 50%;margin-left: auto; margin-right: auto;display: block;">
            </a>

            <li class="nav-item">
                <a href="{{ url('dashboard') }}" class="nav-link"><i
                        class="fa-solid fa-house"></i><span><b>Dashboard</b></span></a>
            </li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fa-solid fa-user"></i><span><b>Users</b></span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link bg-dark" href="{{ route('user.index') }}">All User</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fa-solid fa-tag"></i><span><b>Category</b></span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link bg-dark" href="{{ route('category.index') }}">All Category</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fa-brands fa-product-hunt"></i><span><b>Product</b></span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link bg-dark" href="{{ route('product.index') }}">All Product</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
