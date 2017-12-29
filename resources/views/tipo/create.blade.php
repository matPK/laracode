@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">

                <div class="box-body">

                    <form class="form-horizontal registration-form" novalidate method="POST" action="{{ route('tipo.store') }}">
                        {{ csrf_field() }}


                        <div class="form-group">
                            <label for="Pagamento_Descricao">Descrição:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-text-width"></i>
                                </div> 
                                <input class="form-control " type="text" name="Pagamento_Descricao" id="Pagamento_Descricao" required placeholder="Digite o nome do usuário" />
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


                        <input type="submit" value="enviar" class="btn btn-primary btn-block">
                        <a class="btn btn-danger btn-block" href="{{route('tipo.index')}}">Voltar</a>

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection




