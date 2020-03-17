@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        

                        <a href="" class="btn btn-secondary">Academia</a>
                        <a href="" class="btn btn-secondary">Colegio</a>
                        <a href="" class="btn btn-secondary">Profesor</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection