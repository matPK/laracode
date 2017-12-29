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

                                <td>id</td>
                                <td>created_at</td>
                                <td>updated_at</td>

                            </tr>

                            @foreach($data as $d)
                                <tr>

                                    <td>{{ $d->id  }}</td>
                                    <td>{{ $d->created_at }}</td>
                                    <td>{{ $d->updated_at }}</td>

                                </tr>
                            @endforeach
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


