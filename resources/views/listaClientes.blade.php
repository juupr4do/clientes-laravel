@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href='home' style="padding-left: 300px"> Voltar</a></div>

                <table class='table'>
                    <th> Name </th>
                    <th> Endereço </th>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td> {{ $cliente->name}} </td>
                                <td> {{ $cliente->email}} </td>
                            <tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>