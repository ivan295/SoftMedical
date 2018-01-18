<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <form action="#" method="get" class="sidebar-form">

        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">OPCIONES</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview"><a href="#"><i class='fa fa-user'></i> <span>Persona</span></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/tipoPersona/create') }}"><i class='fa fa-add'></i>Tipo</a></li>
                    <li><a href="{{ url('admin/Persona/create') }}"><i class='fa fa-new'></i>Nueva</a></li>
                </ul>
            </li>


            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
