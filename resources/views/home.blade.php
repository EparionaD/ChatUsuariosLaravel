@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1>Chat con usuarios registrados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <iframe class="col" src="{{ url('/mensajes') }}" frameborder="0" height="400px"></iframe>
                <iframe class="col px-0" src="{{ url('/mensajes/create') }}" frameborder="0" height="70px"></iframe>
            </div>
        </div>
    </div>
@endsection