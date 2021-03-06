@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Início</div>
                    <div class="panel-body col-md-offset-2">
                        <div class="col-md-3">
                            <a href="{{route('products.index')}}">
                                <div class="well well-sm text-center">
                                    <span style="font-size: 55px;" class="glyphicon glyphicon-briefcase"></span>
                                    <p>Produtos</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{route('clients.index')}}">
                                <div class="well well-sm text-center">
                                    <span style="font-size: 55px;" class="glyphicon glyphicon-user"></span>
                                    <p>Clientes</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{route('rents.index')}}">
                                <div class="well well-sm text-center">
                                    <span style="font-size: 55px;" class="glyphicon glyphicon-shopping-cart"></span>
                                    <p>Aluguéis</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
