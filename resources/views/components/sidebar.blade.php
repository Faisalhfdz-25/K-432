<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">POS | K-432</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">K-432</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            {{-- <li class="nav-item dropdown {{ $type_menu === 'dashboard' ? 'active' : '' }}"> --}}
                <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('home') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('home') }}">General Dashboard</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Data Master</li>
            {{-- <li class="nav-item dropdown {{ $type_menu === 'layout' ? 'active' : '' }}"> --}}
                <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"
                    data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Data Master</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('products') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('products.index') }}">Products Management</a>
                    </li>
                    <li class="{{ Request::is('categories') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('categories.index') }}">Categories Management</a>
                    </li>
                    <li class="{{ Request::is('user') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('user.index') }}">Users Management</a>
                    </li>
                </ul>
            </li>
                
           
           
            
        
    </aside>
</div>
