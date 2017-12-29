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

                <form class="form-horizontal registration-form"  method="POST" action="{{ route('tipo.update', $tip->Pagamento_ID) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}


                    <div class="form-group">
                        <label for="Pagamento_Descricao">Descrição:</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-text-width"></i>
                            </div>
                            <input class="form-control" value="{{$tip->Pagamento_Descricao}}"  type="text" name="Pagamento_Descricao" id="Pagamento_Descricao" required placeholder="Digite a descrição do pagamento" />
                        </div>
                    </div>




                    <div class="form-group">
                        <label for="Pagamento_Status">Status</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-sort-desc"></i>
                            </div>
                            <select class="form-control" name="Pagamento_Status">
                                <option value="{{ $tip->Pagamento_Status = 1  }}">Ativo</option>
                                <option value="{{ $tip->Pagamento_Status = 0  }}">Inativo</option>
                            </select>
                        </div>
                    </div>



                    <input type="submit" value="Enviar" class="btn btn-primary btn-block">
                    <a class="btn btn-danger btn-block" href="{{route('tipo.index')}}">Voltar</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection




