@if(count($replies))
    <h3>Replies :</h3>

            <div class="well">
                <form class="form-inline" action={{$thread->path(). "/reply"}} method="post" id="reply" >
                    {{csrf_field()}}
                    <div class="form-group">
                        <textarea id="usermsg" name="reply" class="form-control" rows="1" cols="80" style="resize: none" placeholder="Say somthing..." required>
                        </textarea>
                        @if(!Auth::check())
                            <br>
                            <p> please <a href="/login">login</a> to reply.</p>
                        @endif
                    </div>
                </form>
            </div>

            <div class="panel panel-default">

                @foreach($replies as $reply)
                    <div class="panel-body">
                        <div class="well">
                            <a href="{{$reply->owner->path()}}"> {{$reply->owner->name}}: </a>
                            {{$reply->body}}
                            <br>
                            <small>{{ $reply->created_at->diffForHumans()}}</small>
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                                {{-- <span class="badge">42</span>--}}
                                <span class="label label-success">30</span>
                            <span class="glyphicon glyphicon-thumbs-down"></spanclass>
                        </div>

                    </div>
                @endforeach

            </div>
            


@endif