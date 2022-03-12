@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Status</h3></div>
                    {{-- @if($status > '0) --}}
                    <div class="panel-heading">Page {{ $status->currentPage() }} of {{ $status->lastPage() }}</div>
                        @foreach ($status as $st)
                            <div class="panel-body">
                                <li style="list-style-type:disc">
                                    <a href="{{ route('status.show', $st->id ) }}"><b>{{ $st->sname }}</b><br>
                                        
                                    </a>
                                </li>
                            </div>
                        @endforeach
                </div>
                <div class="text-center">
                    {!! $status->links() !!}
                </div>
                {{-- @endif --}}
            </div>
        </div>
    </div>
@endsection