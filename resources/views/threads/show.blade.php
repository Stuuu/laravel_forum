@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">{{ $thread->title }}</div>

                <div class="panel-body">
                    
                    
                            
                        <div class="body">
                            {{$thread->body}}
                        </div>
                        
                        
                    

                </div>
            </div>
        </div>
    </div>


    <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach($thread->replies as $reply)
                    <div class="panel panel-default">         
                    <div class="panel-heading">
                        <a href="#">
                            {{ $reply->owner->name }}
                        </a>
                         said 
                        {{ $reply->created_at->diffForHumans() }}...
                    </div> 
                        <div class="panel-body">
                                <div class="body">
                                    {{$reply->body}}
                                </div>
                        </div>
                </div>
                @endforeach
        </div>
</div>
@endsection