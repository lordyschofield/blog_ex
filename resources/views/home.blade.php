@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row background-grey">

            <div class="col-3 p-5">
                <img src="/img/logo.png" class="w-100 rounded-circle">
            </div>

            <div class="col-9 p-5">
                <div class="d-flex align-items-center pb-4">
                <h1>{{$id->username}} </h1>
                </div>
            
            <div class="d-flex">
                <div class="pr-5"><strong>24K </strong>POST</div>
                <div class="pr-5"><strong>100K </strong>FOLLOWERS</div>
                <div class="pr-5"><strong>1M </strong>FOLLOWING</div>


            </div>    
            
            <div class="pt-4 font-weight-bold">Summertime Saga</div>
            <div>This is a sample description</div>
            <div><a href="summertimesaga.com">summertimesaga.com</a></div>
    

            </div>

            </div>

        <div class="row">

            <div class="col-4">
                <img src="img/post1.png" class="w-100 h-50 ">
            </div>
            <div class="col-4">
                <img src="img/post2.png" class="w-100 h-50 ">
            </div>
            <div class="col-4">
                <img src="img/post3.png" class="w-100 h-50 ">
            </div>
            <div class="col-4">
                <img src="img/post4.png" class="w-100 h-50 ">
            </div>
            <div class="col-4">
                <img src="img/post5.png" class="w-100 h-50 ">
            </div>
            <div class="col-4">
                <img src="img/post6.png" class="w-100 h-50 ">
            </div>


        </div>

</div>
@endsection
