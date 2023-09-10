<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('resources/miscellaneous/avatar.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="{{ route('admindashboard') }}"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{ route('admindashboard') }}">
                    <i class="fa fa-dashboard"></i></i> <span>Dashboard</span>
                </a>
            </li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cube"></i> <span>Categories</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{ route('category.create') }}"><i class="fa fa-circle-o"></i>Add
                    Category</a></li>
                    <li><a href="{{ route('categories') }}"><i class="fa fa-circle-o"></i> Manage Categories</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-tag"></i> <span>Tags</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{ route('tag.create') }}"><i class="fa fa-circle-o"></i>Add
                    Tag</a></li>
                    <li><a href="{{ route('tags') }}"><i class="fa fa-circle-o"></i> Manage Tags</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pen-square"></i> <span>Post </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{ route('tag.create') }}"><i class="fa fa-circle-o"></i>Add
                    Post </a></li>
                    <li><a href="{{ route('tags') }}"><i class="fa fa-circle-o"></i> Manage Posts</a>
                    </li>
                </ul>
            </li>
           
            <li>
                <a href="{{ route('adminLogout') }}">
                    <i class="fa fa-sign-out"></i></i> <span>Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>