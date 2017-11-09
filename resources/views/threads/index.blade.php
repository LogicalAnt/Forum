@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                   
                <div class="panel panel-default">
                    <div class="panel-heading">Threads

                        <div class="btn-group btn-group-xs" role="group" style="float: right;">
                                <button type="button" class="btn btn-primary"  onclick="location.href='/threads/create';">Open Thread</button>
                              
                        </div>

                    </div>
                    <div class="panel-body">
                        @foreach($threads as $thread)
                            <a href="{{$thread->path()}}"><h3>{{$thread->title}}</h3> </a>

                            <p>{!! $thread->body !!}</p>
                                <a href="{{$thread->owner->path()}}">
                                <span class="label label-info">
                                    {{$thread->owner->name}}</a>
                                </span>
                                </a>
                            <small>{{$thread->created_at->diffForHumans()}}</small>
                            <hr>
                        @endforeach
                    </div>
                    {{ $threads->links() }}
                </div>
            </div>
           @include('sidebar.sidePanel')
        </div>
    </div>
@endsection
