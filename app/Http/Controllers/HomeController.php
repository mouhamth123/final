<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

//Use \App\Image;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
//use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\User;

use Intervention\Image\ImageServiceProvider;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Intervention\Image\ImageManager;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        dd($user);
        
        $image = DB::table('images')->where('user_id',$user->id )->get();
        return view('home',compact('user','image'));
    }




       public function update_avatar(Request $request)
    {
            $user = Auth::user();
 $image = DB::table('images')->where('user_id',$user->id )->get();

 //      dd($image);
       
        if($request->has('avatar')){
            $images = $request->avatar;
          //  dd($image);
            $filename= time().'_'.$images;
           //dd($filename);
            \App\Image::make($images)->resize(300,300)->save('public/uploads/avatars/'.$filename);
            

            $user= Auth::user();
            $user->avatar=$filename;
            $user->save();
         }
            return view('home',compact('image','user'));
       
}
public function indexe(){

        $this->authorize('admin');
        //$imag=\App\Image::orderBy('created_at', 'DESC')->get();
       $image = \App\Image::orderBy('created_at', 'DESC')->get();
        $categories= \App\Category::get();
        return view('image.image', compact('image','categories'));
     }


           public function store(request $request)
        {
           $request->validate([
               "nom_image"=>"required|max:300|min:5",
               "description"=>"required",
               "images" => ' image | mimes:jpeg,png,jpg,gif | max: 2048'
           ]);
           $imag = new \App\Image();
        
           //On verfie si une image est envoyée
           $imag->nom_image = $request->input('nom_image');
           $imag->description = $request->input('description');
           $imag->user_id= $request->user()->id;
           $imag->categories_id = $request->input('categories_id');

           if($request->has('images')){
            //On enregistre l'image dans un dossier
            $image = $request->file('images');
            
            //Nous enregistrerons nos fichiers dans /uploads/images dans public
            $folder = '/uploads/images/';
            //Nous allons definir le nom de notre image en combinant le nom du produit et un timestamp
            $image_name = Str::slug($request->input('nom_image')).'_'.time();
            //Nous allons enregistrer le chemin complet de l'image dans la BD
            $imag->images = $folder.$image_name.'.'.$image->getClientOriginalExtension();
            
            //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la methode uploadImage();
            $this->uploadImage($image, $folder, 'public', $image_name);
        }
           $imag->save();
           return redirect(route('Images.index'));
        }

         public function create()
     {
        $image=new \App\Image();
        $categories = \App\Category::pluck('nom_cat','id');
      return view('image.create',compact('image','categories'));
     }
     public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
    $name = !is_null($filename) ? $filename : str_random('25');
    $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
 
    return $file;
 }


   public function edit($id)
{
   $image=\App\Image::find($id);//on recupere le produit
   $categories=\App\Category::pluck('nom_cat','id');
return view('image.edit', compact('image','categories'));
}



 public function update(Request $request, $id)
{
   $data = $request->validate([
      'nom_image'   => 'required',
      'description' => 'required',
      'images' => 'nullable | image | mimes:jpeg,png,jpg,gif | max:2048'
   ]);
   $product = \App\Image::find($id);
   if($product){
       if($request->has('images')){
           //On enregistre l'image dans une variable
           $image = $request->file('images');
           if(file_exists(public_path().$product->images))//On verifie si le fichier existe
               Storage::delete(asset($product->images));//On le supprime alors
           //Nous enregistrerons nos fichiers dans /uploads/images dans public
           $folder = '/uploads/images/';
           $image_name = Str::slug($request->input('nom_image')).'_'.time();
           $product->images = $folder.$image_name.'.'.$image->getClientOriginalExtension();
           //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la méthode uploadImage();
           $this->uploadImage($image, $folder, 'public', $image_name);
       }
       $product->nom_image  = $request->input('nom_image');
       //$product->price = $request->input('price');
       $product->description = $request->input('description');
       $product->categories_id = $request->input('categories_id');

       $product->save();
   }
   return redirect()->route('Images.index')->with(['success' => "
Updated image successfully"]);

}



 public function destroy($id)
{
   $image = \App\Image::find($id);
   if($image)
       $image->delete();
   return back()->with(['success' => "delated image successfully"]);
}


 public function show($id)
 {
    $image=\App\Image::find($id);//on recupere le produit
    ($image->images);
    $file = public_path().$image->images;
    $headers = array('Content-Type: application/pdf',);
    return Response::download($file);
    //return Storage::download('image_1576787968.jpg');
 }
       public function users()
    {
        $u= DB::table('users')->where('type','simple' )->get();
        //dd($u);
        return view('user',compact('u'));
    } 

}