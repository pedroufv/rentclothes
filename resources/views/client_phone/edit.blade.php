@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Endereço</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('client_phone.store', ['client' => $client->id, 'phone' => $phone->id]) }}">
                        {{ csrf_field() }}
                        @include('partials.phone.edit', ['errors'=> $errors])
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Salvar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
