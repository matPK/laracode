@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">

                 <div class="box-body">
                    <form class="form-horizontal registration-form" novalidate method="POST" action="{{ route('store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="CNPJ">CNPJ</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-sort-desc"></i>
                                </div>
                                <input class="form-control" type="text" name="CNPJ" id="CNPJ" required placeholder="CNPJ" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Cliente_ID">
                                ID do Cliente
                            </label>
                            <input class="form-control" type="text" name="Cliente_ID" id="Cliente_ID" required placeholder="Cliente_ID" />
                        </div>


                        <input type="submit" value="enviar" class="btn btn-danger btn-lg col-md-offset-5">
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection




