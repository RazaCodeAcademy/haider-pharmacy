@php
    $title = app()->view->getSections()['title'];
    $sub_title = app()->view->getSections()['sub_title'] ?? '';
  @endphp

<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{{ asset('/public/assets/images/user.png') }}" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Haseeb Rasool</div>
                <div class="email">haseeb.rasool@gmail.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="active">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="header">Components</li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons">business</i>
                        <span>POS</span>
                    </a>
                </li>
                <li>
                    <a href="pages/changelogs.html">
                        <i class="material-icons">shopping_cart</i>
                        <span>Sales</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle {{ $title == 'Categories' ? 'toggled' : '' }}">
                        <i class="material-icons">list</i>
                        <span>Categories</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ $sub_title == 'create' ? 'active' : '' }}">
                            <a href="{{ route('categories.createCategory') }}">Add New</a>
                        </li>
                        <li class="{{ $sub_title == 'all-categories' ? 'active' : '' }}">
                            <a href="{{ route('categories.getAllCategories') }}">Categories List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">store</i>
                        <span>Brands</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/ui/alerts.html">Add New</a>
                        </li>
                        <li>
                            <a href="pages/ui/animations.html">Brands List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">group_work</i>
                        <span>Medicines</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/ui/alerts.html">Add New</a>
                        </li>
                        <li>
                            <a href="pages/ui/animations.html">Medicines List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">pie_chart</i>
                        <span>Stock</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/ui/alerts.html">Add New</a>
                        </li>
                        <li>
                            <a href="pages/ui/animations.html">Stock List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">people</i>
                        <span>Users</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/ui/alerts.html">Add New</a>
                        </li>
                        <li>
                            <a href="pages/ui/animations.html">Users List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="pages/changelogs.html">
                        <i class="material-icons">report</i>
                        <span>Reports</span>
                    </a>
                </li>
                <li>
                    <a href="pages/changelogs.html">
                        <i class="material-icons">settings</i>
                        <span>Setting</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->

         {{-- footer included --}}
         @include('backend.layouts.footer')

    </aside>
    <!-- #END# Left Sidebar -->
</section>