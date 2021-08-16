@extends('layouts.app')

@section('content')
<div class="container">
            
    <form action="/p" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="col-8 offset-2">
            <!--div class for posting a new post --> 
        <div class="row">
            <h1>ADD NEW POST</h1>
        </div>
    
        <div class="form-group row">
          <label for="caption">Post Caption</label>
          <input 
          method="POST"
          type="text" 
          name="caption" 
          id="caption" 
          class="form-control @error('caption') is-invalid @enderror"
          value="{{old('caption')}}"
          autocomplete="caption"
          autofocus 
          >

         @error('caption')
         
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>

         @enderror   


        </div> 
        


        <!-- div class for uploading image -->
        <div class="row">

                <label for="image">Post Image</label>
                <input method="POST" type="file" name="image" id="image" class="form-control-file">


                    @error('image')
                    
                        
                            <strong>{{ $message }}</strong>
                        
                    @enderror   
        </div>

        <div class="row pt-4">

            <button type="submit" method="POST" class="btn btn-primary">Add New Post</button>


        </div>

    </div>
        

    </form>
    

</div>
@endsection
