@extends('layouts.app')

@section('title', '| View Status')

@section('content')

<div class="container">

    <h1>{{ $st->sname }}</h1>
    <hr>
  
    {!! Form::open(['method' => 'DELETE', 'route' => ['status.destroy', $st->id] ]) !!}
    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
    @can('Edit Status')
    <a href="{{ route('status.edit', $st->id) }}" class="btn btn-info" role="button">Edit</a>
    @endcan
    @can('Delete Post')
    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    @endcan
    {!! Form::close() !!}

</div>

@endsection