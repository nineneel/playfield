<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/dashboard/products*') ? 'active' : '' }}"
                    href="/admin/dashboard/products">
                    <i data-feather="shopping-bag" class="align-text-bottom"></i>
                    Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/dashboard/facilities*') ? 'active' : '' }}"
                    href="/admin/dashboard/facilities">
                    <i data-feather="package" class="align-text-bottom"></i>
                    Facilities
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/dashboard/photos*') ? 'active' : '' }}"
                    href="/admin/dashboard/photos">
                    <i data-feather="image" class="align-text-bottom"></i>
                    Galery
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/dashboard/tags*') ? 'active' : '' }}"
                    href="/admin/dashboard/tags">
                    <i data-feather="tag" class="align-text-bottom"></i>
                    Tags
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/dashboard/orders*') ? 'active' : '' }}"
                    href="/admin/dashboard/orders">
                    <i data-feather="shopping-cart" class="align-text-bottom"></i>
                    Orders
                </a>
            </li>
        </ul>
    </div>
</nav>
