<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview menu-open">
                <a href="dashboard-v1">
                    <i class="fa fa-dashboard"></i> <span>Dashboard Admin</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{!! url('/slide') !!}"><i class="fa fa-circle-o"></i>Slide</a></li>
                    <li class="active"><a href="{!! url('/about') !!}"><i class="fa fa-circle-o"></i> About</a></li>
                    <li class="active"><a href="{!! url('/contact') !!}"><i class="fa fa-circle-o"></i> Contact</a></li>
                    <li class="active"><a href="{!! url('/news') !!}"><i class="fa fa-circle-o"></i> News</a></li>
                    <li class="active"><a href="{!! url('/vision') !!}"><i class="fa fa-circle-o"></i> Visi Misi</a></li>
                    <li class="active"><a href="{!! url('/product') !!}"><i class="fa fa-circle-o"></i> Product</a></li>
                    <li class="active"><a href="{!! url('/category') !!}"><i class="fa fa-circle-o"></i> Category</a></li>
                    <li class="active"><a href="{!! url('/clien') !!}"><i class="fa fa-circle-o"></i> Client</a></li>
                    <li class="active"><a href="{!! url('/carrer') !!}"><i class="fa fa-circle-o"></i> Carrer</a></li>
                    <li class="active"><a href="{!! url('/manage') !!}"><i class="fa fa-circle-o"></i> User</a></li>
                </ul>
            </li>
    </section>
    <!-- /.sidebar -->
</aside>
