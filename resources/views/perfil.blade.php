@extends('adminlte::page')




@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-header">
                        <h3 class="box-title">Perfil</h3>
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
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Descrição</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Editar</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Excluir</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($perf as $p)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{ $p->Perfil_Descricao  }}</td>
                                                    <td>
                                                        @if($p->Perfil_Status == 1)
                                                            Ativo
                                                        @elseif($p->Perfil_Status == 0)
                                                            Inativo
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-xs btn-primary " href="{{route('perfil.edit', $p->Perfil_ID)}}">Editar</a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('perfil.destroy', $p->Perfil_ID) }}" method="POST">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type='submit' class="btn btn-xs btn-danger" data-method="delete" href="#">Excluir</button>
                                                        </form>
                                                        <!-- <a class="btn btn-danger"  href="{//{route('usuario.destroy', //$u//->Usuario_ID)}}">Excluir</a> -->
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {!! $perf->render() !!}
                    </div>

                    <a class="btn btn-primary btn-block" href="{{route('perfil.create')}}">Criar</a>
                </div>
            </div>
        </div>
    </div>
@endsection


