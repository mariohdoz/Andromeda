<!-- Content Header (Page header) -->
<section class="content-header">
    <!-- Lo que dice arribita-->
    <h1>
        @yield('contentheader_title', 'Contenido')
        <small>@yield('contentheader_description')</small>
    </h1>
    <!-- niveles-->
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>

        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>
