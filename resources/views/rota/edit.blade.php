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

                <form class="form-horizontal registration-form"  method="POST" action="{{ route('rota.update', $rot->Rota_ID) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}


                    <div class="form-group">
                        <label for="Rota_Nome">Nome:</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input class="form-control" value="{{ $rot->Rota_Nome  }}"  type="text" name="Rota_Nome" id="Rota_Nome" required placeholder="Digite o nome da Rota" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Rota_Descricao">Descrição:</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-sort-desc"></i>
                            </div>                        
                            <input class="form-control" value="{{ $rot->Rota_Descricao  }}"  type="text" name="Rota_Descricao" id="Rota_Descricao" required placeholder="Digite a descrição" />
                        </div>    
                    </div>


                    <div class="form-group">
                        <label for="Rota_Status">Status:</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check"></i>
                            </div>                        
                            <select class="form-control" name="Rota_Status">
                                @if($rot->Rota_Status)
                                    <option value="{{ $rot->Rota_Status = 1  }}">Ativo</option>
                                @elseif($rot->Rota_Status == 0)
                                    <option value="{{ $rot->Rota_Status = 0  }}">Inativo</option>
                                @endif


                                @if(!$rot->Rota_Status)
                                    <option value="{{ $rot->Rota_Status = 1  }}">Ativo</option>
                                @elseif(!$rot->Rota_Status == 0)
                                    <option value="{{ $rot->Rota_Status = 0  }}">Inativo</option>
                                @endif
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
                            <input class="form-control"  value="{{ $rot->Rota_Diaria  }}" type="text" name="Rota_Diaria" id="Rota_Diaria" required placeholder="Digite a diária" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Rota_Extra">Extra:</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-plus"></i>
                            </div>
                            <input class="form-control" value="{{ $rot->Rota_Extra  }}"  type="text" name="Rota_Extra" id="Rota_Extra" required placeholder="Digite extra" />
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
                                @foreach($oper as $o)
                                    <option value="{{ $o->Operacao_ID }}">{{ $o->Operacao_Descricao }}</option>
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
                                <option value="">Seleciona o pagamento</option>
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
</div>
@endsection



