@extends('layouts.app')




@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Clientes</div>

                    <div class="panel-body">

                        <table class="table">
                            <tr>

                                <td>Cliente_ID</td>
                                <td>Cliente_Nome</td>
                                <td>Cliente_Status</td>
                                <td>Operacao_ID</td>
                            </tr>

                            @foreach($data as $d)
                                <tr>

                                    <td>{{ $d->Cliente_ID  }}</td>
                                    <td>{{ $d->Cliente_Nome }}</td>
                                    <td>{{ $d->Cliente_Status }}</td>
                                    <td>{{ $d->Operacao_ID }}</td>
                                </tr>
                            @endforeach
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


