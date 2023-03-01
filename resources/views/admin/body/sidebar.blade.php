<aside class="main-sidebar sidebar-dark-primary elevation-4">

    @php
    $id = Auth::user()->id;
    $adminData = App\Models\User::find($id);
    @endphp
    <a href="{{ url('dashboard') }}" class="brand-link">
        <span class="brand-text font-weight-light">Hello {{ Auth::user() -> name }}</span>
    </a>

    <div
        class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
                role="menu" data-accordion="false">

                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('all.products') }}"
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add.product') }}"
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('user.logout') }}"
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

</aside>