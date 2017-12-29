@extends('adminlte::page')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">

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

                <form class="form-horizontal registration-form"  method="POST" action="{{ route('usuario.update', $usu->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}


                    <div class="form-group">
                        <label for="name">Nome:</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input class="form-control" value="{{$usu->name}}"  type="text" name="name" id="name" required placeholder="Digite o nome do usuário" />
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="email">Email:</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <input type="text" value="{{$usu->email}}" class="form-control" name="email" id="email" required placeholder="Digite seu email" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check"></i>
                            </div>
                            <select class="form-control" name="status">
                                @if($usu->status)
                                <option value="{{ $usu->status = 1  }}">Ativo</option>
                                @elseif($usu->status == 0)
                                <option value="{{ $usu->status = 0  }}">Inativo</option>
                                @endif


                                @if(!$usu->status)
                                    <option value="{{ $usu->status = 1  }}">Ativo</option>
                                @elseif(!$usu->status == 0)
                                    <option value="{{ $usu->status = 0  }}">Inativo</option>
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">Senha:</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-key"></i>
                            </div>
                            <input class="form-control" value="{{$usu->password}}" type="password" name="password" id="password" required placeholder="Digite uma senha" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="perfil_id">Perfil</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-users"></i>
                            </div>
                            <select class="form-control" name="perfil_id">
                                @foreach($perf as $p)
                                    @if($usu->perfil_id == $p->Perfil_ID )
                                        <option selected="selected" value="{{ $usu->perfil_id  }}">{{$p->Perfil_Descricao}}</option>
                                    @elseif($usu->perfil_id != $p->Perfil_ID )
                                        <option value="{{ $p->Perfil_ID }}">{{ $p->Perfil_Descricao }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="status">Operações</label>
                        <div class="input-group-addon">
                            <i class="fa fa-users"></i>
                        </div>

                        <div class="input-group">


                            @foreach($oper as $o)
                                @foreach($usop as $us)

                                        @if($o->Operacao_Status == 1 && $usu->perfil_id == 1 && $us->id_user == $usu->id)

                                        <br />
                                        <br />

                                        <input type="checkbox"  name="{{ $usu->perfil_id  }}" value="{{ $o->Operacao_ID  }}"/>


                                            {{ $o->Operacao_Status }}  {{ $o->Operacao_Descricao }}
                                        @endif




                                @endforeach
                            @endforeach












                            <!--
                                //oreach($usop as $us)
                                   <input type="checkbox" name="{//{ $us->id_user  }}" value="{//{ $us->id_operacao  }}"/>teste
                               /ndforeach
-->



                        </div>
                    </div>





                    <input type="submit" value="Enviar" class="btn btn-primary btn-block">
                    <a class="btn btn-danger btn-block" href="{{route('usuario.index')}}">Voltar</a>

                    </form>
                </div>
            </div>

        </div>
    @endsection




/