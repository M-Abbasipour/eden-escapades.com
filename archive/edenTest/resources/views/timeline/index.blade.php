@extends('templates.default')

@section('title')
Your timeline
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <form role="form" action="{{ route('status.post') }}" method="post">
                <div class="form-group {{$errors->has('status') ? 'has-error' : ''}}">
                <textarea placeholder="What's up {{ Auth::user()->getFirstNameOrUsername() }}?" name="status" class="form-control" rows="2"></textarea>
                    
                    @if($errors->has('status'))
                        <span class="help-block">{{ $errors->first('status') }}</span>
                    @endif
                    
                </div>
                <button type="submit" class="btn btn-default">Update status</button>
                
                <!-- Laravel Token -->
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5">
        <!-- Timeline statuses and replies -->
            @if (!$statuses->count())
                <p>Not yet</p>
            @else
                @foreach ($statuses as $status)
                    <div class="media">
                        <a class="pull-left" href="{{ route('profile.index', ['username' => $status->user->username]) }}">
                            <img class="media-object" alt="{{ $status->user->getNameOrUsername() }}" src="{{ $status->user->getAvatarUrl() }}">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="{{ route('profile.index', ['username' => $status->user->username]) }}">{{ $status->user->getNameOrUsername() }}</a></h4>
                            <p>{{ $status->body }}</p>
                            <ul class="list-inline">
                                <li>{{ $status->created_at->diffForHumans() }}</li>
                                <li><a href="#">Like</a></li>
                                <li><span data-toggle="collapse" data-target="#demo">Reply</span></li>
                                <li>10 likes</li>
                            </ul>
                            
                           @foreach($status->replies as $reply)
                            <div class="media">
                                <a class="pull-left" href="{{ route('profile.index', ['username' => $reply->user->username]) }}">
                                    <img class="media-object" alt="{{ $reply->user->getNameOrUsername() }}" src="{{ $reply->user->getAvatarUrl() }}">
                                </a>
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="#">{{ $reply->user->getNameORUsername() }}</a></h5>
                                    <p>{{ $reply->body }}</p>
                                    <ul class="list-inline">
                                        <li>{{ $status->created_at->diffForHumans() }}</li>
                                        <li><a href="#">Like</a></li>
                                        <li><span data-toggle="collapse" data-target="#demo">Reply</span></li>
                                        <li>4 likes</li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach

                            <form role="form" action="{{ route('status.reply', ['statusId' => $status->id]) }}" method="post" class="collapse" id="demo">
                                <div class="form-group {{$errors->has("reply-{$status->id}") ? ' has-error' : ''}}">
                                    <textarea name="reply-{{ $status->id }}" class="form-control" rows="2" placeholder="Reply to this status"></textarea>
                                    
                                @if($errors->has("reply-{$status->id}"))
                                    <span class="help-block">{{ $errors->first("reply-{$status->id}") }}</span>
                                @endif
                                    
                                </div>
                                <input type="submit" value="Reply" class="btn btn-default btn-sm">
                                
                                 <!-- Laravel Token -->
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                            </form>
                        </div>
                    </div>
                @endforeach
            
                {!! $statuses->render() !!}
            
            @endif
        </div>
    </div>
@endsection