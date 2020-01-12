@extends("layouts.apps")
@section("content")
<br><br><br><br><br><br><br><br>
<div class="container">
       <div><p><a href="/image">{{__('Enregistrement d\'un produit')}}</a></p></div>
       <div class="container">


       @if($errors->any())
   @foreach($errors->all() as $error)
       <div class="alert alert-danger">{{$error}}</div>
   @endforeach
@endif

           <form action="{{route('ajouter_image')}}" method="post" enctype="multipart/form-data" >
               @csrf
            
               <div>
                   <input type="text" name="nom_image" class="form-control" placeholder="le nom de l'image">
                </div><br>
           
           
                <div> <textarea name="description" id="description" cols="80" class="form-control" placeholder="La description">{{$image->description}}</textarea> </div><br>
                     
                <div>
   <select name="categories_id" id="categories_id" class="form-control">
      
       @foreach($categories as $key => $value)
           <option value="{{$key}}" {{ $key == $image->categories_id ? 'selected="selected"':''}} >{{$value}}</option>
       @endforeach
   </select><br>
</div>
<div><input type="file" name="images" class="form-control"></div>


               <div>
               <br>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
               <br>
           </form> 

           @endsection
           
