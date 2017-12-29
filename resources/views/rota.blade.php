@extends('adminlte::page')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-header">
                        <h3 class="box-title">Rotas</h3>
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
                                    <table  class="table" role="grid" aria-describedby="example2_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_desc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" aria-sort="descending">Nome</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Descricao</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Diaria</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Extra</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Operacao</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Pagamento</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Editar</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Excluir</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($rot as $r)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{ $r->Rota_Nome  }}</td>
                                                <td>{{ $r->Rota_Descricao  }}</td>
                                                <td>
                                                    @if($r->Rota_Status == 1 )
                                                        Ativo
                                                    @else
                                                        Inativo
                                                    @endif
                                                </td>
                                                <td>{{ $r->Rota_Diaria  }}</td>
                                                <td>{{ $r->Rota_Extra }}</td>
                                                <td>
                                                    @foreach($oper as $o)
                                                        @if($r->Operacao_ID == $o->Operacao_ID)
                                                            {{ $o->Operacao_Descricao}}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($tip as $t)
                                                        @if($r->Pagamento_ID == $t->Pagamento_ID)
                                                            {{ $t->Pagamento_Descricao}}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a class="btn btn-xs btn-primary" href="{{route('rota.edit', $r->Rota_ID)}}">Editar</a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('rota.destroy', $r->Rota_ID) }}" method="POST">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type='submit' class="btn btn-xs btn-danger" data-method="delete" href="#">Excluir</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>

                        {!! $rot->render() !!}
                        </div>
                    </div>                   


                    <a class="btn btn-primary btn-block" href="{{route('rota.create')}}">Criar</a>
                </div>
            </div>
        </div>
    </div>
@endsection


