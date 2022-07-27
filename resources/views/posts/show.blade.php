@extends('layouts.app')

@section('content')
<div class="container">
        
    <div class="row">
        <div class="col-8">
                <img src="/storage/{{ $post->image }}" class="w-100 h-50">
        </div>


        <div class="col-4">

                <div class="d-flex align-items-lg-center">
                
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width:50px;">
                    </div>
                    <div>
                        <h5 class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->username }}</span></a>
                        </h5>
                        
                    </div>
                
                </div>
            <hr>
            <p>
                <span class="font-weight-bold"> <a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->username }}</span></a>
              </span>:  {{ $post->caption }}
              <a href="{{ url('delete/'.$post->id) }}" class="btn btn-danger btn-sm">Delete</a>
            </p>

            
            <div class="container">
                <div class="row bootstrap snippets bootdeys">
                    <div class="col-md-8 col-sm-12">
                        <div class="comment-wrapper">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    Comment panel
                                </div>
                                <div class="panel-body">
                                    <textarea class="form-control" placeholder="write a comment..." rows="3"></textarea>
                                    <br>
                                    <button type="button" class="btn btn-info pull-right">Post</button>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <ul class="media-list">
                                        <li class="media">
                                            <a href="#" class="pull-left">
                                                <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <span class="text-muted pull-right">
                                                    <small class="text-muted">30 min ago</small>
                                                </span>
                                                <strong class="text-success">@MartinoMont</strong>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Lorem ipsum dolor sit amet, <a href="#">#consecteturadipiscing </a>.
                                                </p>
                                            </div>
                                        </li>
                                        

                                    </ul>
                                </div>
                            </div>
                        </div>
                
                    </div>
                </div>
                </div>


        </div>

        



    </div>

        
</div>
@endsection
