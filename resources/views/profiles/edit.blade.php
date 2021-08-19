@extends('layouts.app')

@section('content')
<div class="container">
            
    <form action="/profile/{{ $id->id }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PATCH');

        <div class="col-8 offset-2">

        <!--div for editing the profile --> 
        <div class="row">
            <h1>EDIT PROFILE</h1>
        </div>
    
        <div class="form-group row">
          <label for="title">TITLE</label>
          <input 
          method="POST"
          type="text" 
          name="title" 
          id="title" 
          class="form-control @error('title') is-invalid @enderror"
          value="{{old('title') ??  $id->profile->title}}"
          autocomplete="title"
          autofocus 
          >

         @error('title')
         
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>

         @enderror   


        </div> 
        
        <!-- div for editing description !-->

        <div class="form-group row">
          <label for="description">Description</label>
          <textarea name="description" id="" cols="30" rows="10" 
          class="form-control @error('description') is-invalid @enderror"
          autocomplete="description"
          autofocus 
          >{{old('description') ?? $id->profile->description}} </textarea>
          

         @error('description')
         
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>

         @enderror   


        </div> 
        

        <!--div for editing the profile --> 
       
        <div class="form-group row">
          <label for="url">URL/WEBSITE</label>
          <input 
          method="POST"
          type="text" 
          name="url" 
          id="url" 
          class="form-control @error('url') is-invalid @enderror"
          value="{{old('url')?? $id->profile->url}}"
          autocomplete="url"
          autofocus 
          >

         @error('url')
         
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>

         @enderror   


        </div> 
        




        
        
        <!-- div class for changing profile image -->
        <div class="row">

                <label for="image">Profile Image</label>
                <input method="POST" type="file" name="image" id="image" class="form-control-file">


                    @error('image')
                    
                        
                            <strong>{{ $message }}</strong>
                        
                    @enderror   
        </div>

        <div class="row pt-4">

            <button type="submit" method="POST" class="btn btn-primary">UPDATE PROFILE</button>


        </div>

    </div>
        

    </form>
    

</div>
@endsection
