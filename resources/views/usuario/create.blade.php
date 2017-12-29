@extends('adminlte::page')

@section('content')
    <div class="container">           
        <div class="row">    
            <div class="col-xs-12 col-md-12">

                <div class="box-body">

                        <form class="form-horizontal registration-form" novalidate method="POST" action="{{ route('usuario.store') }}">
                            {{ csrf_field() }}       


                            <div class="form-group">
                                <label for="name">Nome:</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>                                                                     
                                    <input type="text" class="form-control" name="name" id="name" required placeholder="Digite o nome do usuário" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <input type="text" class="form-control" name="email" id="email" required placeholder="Digite seu email" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <select class="form-control" name="status">
                                        <option value="1">Ativo</option>
                                        <option value="0">Inativo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password">Senha:</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-key"></i>
                                    </div>
                                    <input class="form-control" type="password" name="password" id="password" required placeholder="Digite uma senha" />
                                </div>
                            </div>




                            <div class="form-group">
                                <label for="Perfil_ID">Perfil</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <select class="form-control" name="perfil_id">
                                        <option value="">Escolha</option>
                                        @foreach($perf as $p)
                                            <option value="{{ $p->Perfil_ID }}">{{ $p->Perfil_Descricao }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

























                            <input type="submit" value="Enviar" class="btn btn-primary btn-block">
                            <a class="btn btn-danger btn-block" href="{{route('usuario.index')}}">Voltar</a>

                        </form>
                </div>   
            </div>  
        </div>
    </div>













@endsection




