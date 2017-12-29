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

                    <form class="form-horizontal registration-form"  method="POST" action="{{ route('operacao.update', $oper->Operacao_ID) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}


                        <div class="form-group">
                            <label for="Operacao_Descricao">Descrição:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-sort-desc"></i>
                                </div>
                                <input class="form-control" value="{{$oper->Operacao_Descricao}}"  type="text" name="Operacao_Descricao" id="Operacao_Descricao" required placeholder="Digite a descrição" />
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <label for="Operacao_Status">Operação:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <select class="form-control" name="Operacao_Status">
                                    <option value="{{ $oper->Operacao_Status = 1  }}">Ativo</option>
                                    <option value="{{ $oper->Operacao_Status = 0  }}">Inativo</option>
                                </select>
                            </div>
                        </div>



                        <input type="submit" value="Enviar" class="btn btn-primary btn-block">
                        <a class="btn btn-danger btn-block" href="{{route('operacao.index')}}">Voltar</a>

                    </form>
                </div>
            </div>
        </div>
</div>
@endsection




