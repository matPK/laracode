@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">


                <div class="box-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <h4><i class="icon fa fa-ban"></i> Erro!</h4>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal registration-form"  method="POST" action="{{ route('perfil.update', $perf->Perfil_ID) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}


                        <div class="form-group">
                            <label for="Perfil_Descricao">Descrição:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-sort-desc"></i>
                                </div>

                                <input class="form-control" value="{{$perf->Perfil_Descricao}}"  type="text" name="Perfil_Descricao" id="Perfil_Descricao" required placeholder="Digite o nome do perfil" />
                            </div>   
                        </div>





                        <div class="form-group">
                            <label for="Perfil_Status">Perfil</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa fa-check"></i>
                                </div>
                                <select class="form-control" name="Perfil_Status">
                                    @if($perf->Perfil_Status)
                                        <option value="{{ $perf->Perfil_Status = 1  }}">Ativo</option>
                                    @elseif($perf->Perfil_Status == 0)
                                        <option value="{{ $perf->Perfil_Status = 0  }}">Inativo</option>
                                    @endif


                                        @if(!$perf->Perfil_Status)
                                            <option value="{{ $perf->Perfil_Status = 1  }}">Ativo</option>
                                        @elseif(!$perf->Perfil_Status == 0)
                                            <option value="{{ $perf->Perfil_Status = 0  }}">Inativo</option>
                                        @endif



                                </select>
                            </div>
                        </div>







                        <input type="submit" value="Enviar" class="btn btn-primary btn-block">
                        <a class="btn btn-danger btn-block" href="{{route('perfil.index')}}">Voltar</a>

                    </form>
                </div>
            </div>

        </div>
    @endsection




