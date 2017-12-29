@extends('adminlte::page')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Usuarios</div>

                    <div class="panel-body">

                        <table class="table">
                            <tr>
                                <td>CNPJ</td>
                                <td>Cliente_ID</td>
                            </tr>

                            @foreach($data as $d)
                                <tr>
                                    <td>{{ $d->CNPJ  }}</td>
                                    <td>{{ $d->Cliente_ID  }}</td>
                                </tr>
                            @endforeach
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


