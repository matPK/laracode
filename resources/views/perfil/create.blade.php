@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">


                <div class="box-body">

                    <form class="form-horizontal registration-form" novalidate method="POST" action="{{ route('perfil.store') }}">
                        {{ csrf_field() }}


                        <div class="form-group">
                            <label for="Perfil_Descricao">Descrição:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-sort-desc"></i>
                                </div>

                                <input class="form-control " type="text" name="Perfil_Descricao" id="Perfil_Descricao" required placeholder="Digite a descrição do perfil" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Perfil_Status">Perfil</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa fa-check"></i>
                                </div>
                                <select class="form-control" name="Perfil_Status">
                                    <option value="{{ $perf->Perfil_Status = 1  }}">Ativo</option>
                                    <option value="{{ $perf->Perfil_Status = 0  }}">Inativo</option>
                                </select>
                            </div>
                        </div>

                        <input type="submit" value="Enviar" class="btn btn-primary btn-block">
                        <a class="btn btn-danger btn-block" href="{{route('perfil.index')}}">Voltar</a>

                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection




