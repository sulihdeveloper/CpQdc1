<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
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
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard Admin</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{!! url('/slide') !!}"><i class="fa fa-circle-o"></i> Gambar Slide</a></li>
                    <li class="active"><a href="{!! url('/about') !!}"><i class="fa fa-circle-o"></i> Abaout</a></li>
                    <li class="active"><a href="{!! url('/contact') !!}"><i class="fa fa-circle-o"></i> Contact</a></li>
                    <li class="active"><a href="{!! url('/#') !!}"><i class="fa fa-circle-o"></i> News</a></li>
                    <li class="active"><a href="{!! url('/vision') !!}"><i class="fa fa-circle-o"></i> Visi Misi</a></li>
                    <li><a href="{!! url('/product') !!}"><i class="fa fa-circle-o"></i> Product</a></li>
                    <li class="active"><a href="{!! url('/category') !!}"><i class="fa fa-circle-o"></i> Category</a></li>
                    <li class="active"><a href="{!! url('/manage') !!}"><i class="fa fa-circle-o"></i> Manager</a></li>
                </ul>
            </li>
    </section>
    <!-- /.sidebar -->
</aside>