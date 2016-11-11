@extends('layouts.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                <form action="{{ url('/register') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="{{ trans('adminlte_lang::message.fullname') }}" name="name" value="{{ old('name') }}"/>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email" value="{{ old('email') }}"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.retrypepassword') }}" name="password_confirmation"/>
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-1">
                    <label>
                        <div class="checkbox_register icheck">
                            <label>
                                <input type="checkbox" name="terms">
                            </label>
                        </div>
                    </label>
                </div><!-- /.col -->
                <div class="col-xs-6">
                    <div class="form-group">
                        <button type="button" class="btn btn-block btn-flat" data-toggle="modal" data-target="#termsModal">Términos y condiciones de uso</button>
                      </div>
                </div><!-- /.col -->
                <div class="col-xs-4 col-xs-push-1">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Registrarse</button>
                </div><!-- /.col -->
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
</div>

    @include('layouts.partials.scripts_auth')

    @include('auth.terms')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection
