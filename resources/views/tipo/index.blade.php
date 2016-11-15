@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')


<div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Tipos de herramientas</h3>
            <div class="box-tools">
              <button type="button" class="btn btn-primary">Ingresar</button>
            </div>

          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover table-striped">
              <tr>
                <th>Tipo</th>
                <th>Marca</th>
                <th>Modelo</th>
              </tr>
              @foreach ($tipo as $tipo)
              <tr>
                <td>{{$tipo->tipotipo}}</td>
                <td>{{$tipo->modelotipo}}</td>
                <td>{{$tipo->marcatipo}}</td>
              </tr>
              @endforeach
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>

@endsection
