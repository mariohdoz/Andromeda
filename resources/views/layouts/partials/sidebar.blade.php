<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <section class="sidebar">
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-list-alt '></i> <span>Listado de herramientas</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-cogs '></i> <span>Gestión de herramientas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li class="active"><a href="{{ url('home') }}"><i class='fa fa-plus '></i><span>Ingresar herramienta</span></a></li>
                  <li class="active"><a href="{{ url('home') }}"><i class='fa fa-pencil '></i><span>Modificar herramienta</span></a></li>
                  <li class="active"><a href="{{ url('home') }}"><i class='fa fa-minus  '></i><span>Eliminar herramienta</span></a></li>
                  <li class="active"><a href="{{ url('home') }}"><i class='fa fa-cog '></i><span>Tipos de herramientas</span></a></li>
                </ul>
            </li>
            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
