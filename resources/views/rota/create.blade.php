@extends('adminlte::page')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">

            <div class="box-body">

                <form class="form-horizontal registration-form" novalidate method="POST" action="{{ route('rota.store') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="Rota_Nome">Nome:</label>
                        
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input class="form-control" type="text" name="Rota_Nome" id="Rota_Nome" required placeholder="Nome" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Rota_Descricao">Descrição:</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-sort-desc"></i>
                            </div>
                            <input class="form-control" type="text" name="Rota_Descricao" id="Rota_Descricao" required placeholder="Descricao" />
                        </div>
                    </div>

                 
                    <div class="form-group">
                        <label for="Rota_Status">Status:</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check"></i>
                            </div>
                            <select class="form-control" name="Rota_Status">
                                <option value="1">Inativo</option>
                                <option value="0">Ativo</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="Rota_Diaria">Diaria:</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa  fa-sun-o
"></i>
                            </div>
                            <input class="form-control" type="text" name="Rota_Diaria" id="Rota_Diaria" required placeholder="Diaria" />
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="Rota_Extra">Extra:</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-plus
"></i>
                            </div>
                            <input class="form-control" type="text" name="Rota_Extra" id="Rota_Extra" required placeholder="Extra" />
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="Operacao_ID">Operação</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-cogs
"></i>
                            </div>
                            <select class="form-control" name="Operacao_ID">
                                @foreach($oper as $p)
                                    <option value="{{ $p->Operacao_ID }}">{{ $p->Operacao_Descricao }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                   

                    <div class="form-group">
                        <label for="Operacao_ID">Pagamento</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-money
"></i>
                            </div>
                            <select class="form-control" name="Pagamento_ID">
                                @foreach($tip as $t)
                                    <option value="{{ $t->Pagamento_ID }}">{{ $t->Pagamento_Descricao }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <input type="submit" value="Enviar" class="btn btn-primary btn-block">
                    <a class="btn btn-danger btn-block" href="{{route('rota.index')}}">Voltar</a>

                </form>

            </div>
        </div>
    </div>
@endsection




