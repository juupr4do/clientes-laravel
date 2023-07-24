@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href='home' style="padding-left: 300px"> Voltar</a></div>

                <div class="card-body">
                    @if (session()->get('st'))
                        <div class="alert alert-success" role="alert">
                            Sucesso ao registrar
                        </div>
                    @endif
                    {!! Form::open(['url'=>'salvar']) !!}
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::input('text','name', '', ['class'=>'form-control']) !!}
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::input('email','email', '', ['class'=>'form-control']) !!}
                    {!! Form::submit('Salvar') !!}
                    {!! Form::close() !!}
                    {{ csrf_field() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
