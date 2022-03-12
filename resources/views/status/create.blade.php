@extends('layouts.app')

@section('title', '| Create New Status')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <h1>Create New Status</h1>
        <hr>

    {{-- Using the Laravel HTML Form Collective to create our form --}}
        {{ Form::open(array('route' => 'status.store')) }}

        <div class="form-group">
            {{ Form::label('sname', 'Status Name') }}
            {{ Form::text('sname', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::submit('Create Status', array('class' => 'btn btn-success btn-lg btn-block')) }}
            {{ Form::close() }}
        </div>
        </div>
    </div>

@endsection