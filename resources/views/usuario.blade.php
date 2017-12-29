@extends('adminlte::page')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                        <!-- /.box-header -->
                        <div class="box-header">
                            <h3 class="box-title">Usuarios</h3>
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
                                                    <th class="sorting_desc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" aria-sort="descending">Nome</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Status</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Perfil</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Editar</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Excluir</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($usu as $u)
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">{{ $u->name  }}</td>
                                                        <td class="">
                                                            @if($u->status)
                                                            Ativo
                                                            @else
                                                            Inativo
                                                            @endif
                                                        </td>
                                                        <td class="">
                                                            @foreach($perf as $p)
                                                                @if($u->perfil_id == $p->Perfil_ID)
                                                                {{ $p->Perfil_Descricao}}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td class="">
                                                            <a class="btn btn-xs btn-primary " href="{{route('usuario.edit', $u->id)}}">Editar</a>
                                                        </td>
                                                        <td class="">
                                                            <form action="{{ route('usuario.destroy', $u->id) }}" method="POST">
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
                        </div>

                        {!! $usu->render() !!}


            </div>


                    <a class="btn btn-primary btn-block" href="{{route('usuario.create')}}">Criar</a>

                </div>
            </div>
        </div>
    </div>






    @endsection


