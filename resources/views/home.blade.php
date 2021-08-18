@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
            
        <div class="col-3 p-5">
                <img src="/img/logo.png" class="w-100 rounded-circle">
        </div>
    
    <div class="col-9 p-5">
        
                    <div class="d-flex justify-content-between align-items-baseline">
                            <div class="col-9 p-5">
                                <div class="d-flex align-items-center pb-4">
                                <h1>{{$id->username}} </h1>
                                </div>
                            </div>
                            <a href="/p/create" method="post" class="btn btn-primary">Add New Post</a>
                    </div>            


            <div class="d-flex">
                <div class="pr-5"><strong>{{$id->posts->count()}}</strong> POST</div>
                <div class="pr-5"><strong>100K </strong>FOLLOWERS</div>
                <div class="pr-5"><strong>1M </strong>FOLLOWING</div>
            </div>

                
            
            <div class="pt-4 font-weight-bold">{{ $id->profile->title }}</div>
            <div>{{ $id->profile->description }}</div>
            <div><a href="summertimesaga.com">{{ $id->profile->url }}</a></div>
    
                
        </div>

    </div> 

             
         
         <!--accessing posts image on storage-->
         @foreach ($id->posts as $post)
          
        <div class="row">
            
            <div class="col-4 pb-3">
                <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
            </div>
            
        @endforeach
            
        </div>

</div>
@endsection
