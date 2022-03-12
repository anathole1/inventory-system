@extends('layouts.app')

@section('title', '| Edit Status')

@section('content')
<div class="row">

    <div class="col-md-8 col-md-offset-2">

        <h1>Edit Status</h1>
        <hr>
            {{ Form::model($st, array('route' => array('status.update', $st->id), 'method' => 'PUT')) }}
            <div class="form-group">
            {{ Form::label('sname', 'Status name') }}
            {{ Form::text('sname', null, array('class' => 'form-control')) }}<br>

            {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}
    </div>
    </div>
</div>

@endsection