@extends('adminlte::page')


@section('content')
   <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-header">
                        <h3 class="box-title">Tipo de Pagamento</h3>
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body table-responsive no-padding">
                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6">

                                </div>
                                <div class="col-sm-6">

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-12">

                                    <table class="table" role="grid" aria-describedby="example2_info">
                                        <thead>
                                            <tr role="row">
                                                <th>Pagamento_Descricao</th>
                                                <th>Status</th>
                                                <th>Editar</th>
                                                <th>Excluir</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($tip as $t)
                                                <tr role="row" class="odd">
                                                    <td>{{ $t->Pagamento_Descricao  }}</td>
                                                    <td>
                                                        @if($t->Pagamento_Status)
                                                            Ativo
                                                        @else
                                                            Inativo
                                                        @endif
                                                    </td>                                    
                                                    <td>
                                                        <a class="btn btn-xs btn-primary " href="{{route('tipo.edit', $t->Pagamento_ID)}}">Editar</a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('tipo.destroy', $t->Pagamento_ID) }}" method="POST">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type='submit' class="btn btn-xs btn-danger" data-method="delete" href="#">Excluir</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    {!! $tip->render() !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="btn btn-primary btn-block" href="{{route('tipo.create')}}">Criar</a>

                </div>
            </div>
        </div>
    </div>
@endsection