<aside class="sidebar">
    <ul class="nav-links">
        <li class="{{ request()->routeIs('admin-overview') ? 'active' : '' }}">
            <a href="{{ route('admin-overview') }}">
                <i class="fas fa-tachometer-alt"></i> <span class="nav-text">Dashboard</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('products-management') ? 'active' : '' }}">
            <a href="{{ route('products-management') }}">
                <i class="fas fa-shopping-bag"></i> <span class="nav-text">Products</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('orders-management') ? 'active' : '' }}">
            <a href="{{ route('orders-management') }}">
                <i class="fas fa-list"></i> <span class="nav-text">Orders</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('farmers-management') ? 'active' : '' }}">
            <a href="{{ route('farmers-management') }}">
                <i class="fas fa-tractor"></i> <span class="nav-text">Farmers</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('customers-management') ? 'active' : '' }}">
            <a href="{{ route('customers-management') }}">
                <i class="fas fa-users"></i> <span class="nav-text">Customers</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('analytics-dashboard') ? 'active' : '' }}">
            <a href="{{ route('analytics-dashboard') }}">
                <i class="fas fa-chart-line"></i> <span class="nav-text">Analytics</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('discounts-management') ? 'active' : '' }}">
            <a href="{{ route('discounts-management') }}">
                <i class="fas fa-tags"></i> <span class="nav-text">Discounts</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('support-management') ? 'active' : '' }}">
            <a href="{{ route('support-management') }}">
                <i class="fas fa-comments"></i> <span class="nav-text">Support</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('settings') ? 'active' : '' }}">
            <a href="{{ route('settings') }}">
                <i class="fas fa-cog"></i> <span class="nav-text">Settings</span>
            </a>
        </li>
    </ul>

</aside>
