@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href='registroClientes' style="padding-left: 300px"> Registrar Clientes</a></div>
                <div class="card-header"><a href='listaClientes' style="padding-left: 300px"> Listagem Clientes</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{$st->message}}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
