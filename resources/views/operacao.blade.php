@extends('adminlte::page')




@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-header">
                        <h3 class="box-title">Operação</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6">

                                </div><div class="col-sm-6">

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <table  class="table" role="grid" aria-describedby="example2_info">
                                        <thead>
                                            <tr role="row">
                                                <td class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Descricao</td>
                                                <td class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Status</td>
                                                <td class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Editar</td>
                                                <td class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Status</td>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @foreach($oper as $o)

                                                <tr role="row" class="odd">
                                                    <td>{{ $o->Operacao_Descricao  }}</td>
                                                    <td>
                                                        @if($o->Operacao_Status == 1)
                                                            Ativo
                                                        @elseif($o->Operacao_Status == 0)
                                                            Inativo
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-xs btn-primary" href="{{route('operacao.edit', $o->Operacao_ID)}}">Editar</a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('operacao.destroy', $o->Operacao_ID) }}" method="POST">
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
                        </div>
                        {!! $oper->render() !!}
                    </div>

                    <a class="btn btn-primary btn-block" href="{{route('operacao.create')}}">Criar</a>
                </div>
            </div>
        </div>
    </div>
@endsection


