<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use DB;
use App\Category;
use App\Http\Requests\StoreProduct;
use App\Product;
use App\CategoryParent; 
use Illuminate\Support\Facades\Storage;
use App\Post;

class HomeController extends Controller
{
    
    public function __construct()
    {
       // $this->middleware('auth');
    } 
    
    public function index()
    {
        return view('frontend/index');
    }
	
	
	function send(Request $request)
    { 
		$validator = \Validator::make($request->all(), [
           'Name'     =>  'required',
           'Phone'  =>  'required',
           'Email' =>  'required|email',
		   
		   'created_at'=>now(), 'updated_at'=>now()
        ]); 
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        } 
        $data = array(
            'name'      =>  $request->Name,
            'email'     =>   $request->Email,
			'mobile_number'  =>   $request->Phone,
			'created_at'=>now(),
			'updated_at'=>now()
        );
		
		DB::table('contacts')->insert($data);
       return response()->json(['success'=>'Data has been successfully Submitted']);
     Mail::to('nitish.sha772@gmail.com')->send(new SendMail($data));
     //return back()->with('success', 'Thanks for contacting us!');
	
    }
	public function blog()
    { 
	     $categories = Category::with('childrens')->get();
        $blogs = Product::with('categories')->paginate(5);
        return view('frontend.blog', compact('categories','blogs'));
    } 
	   public function signleblog(Product $product)
	   {
		  $approvecomments= DB::table('posts')->select("*")->where("status",1)->orderBy("ID", "asc")->get(); 
		 
          return view('frontend.singleblog', compact('product','approvecomments')); 
		  
		  // $slug = $product->slug;
		  //   $product = DB::table('products')
			//->where('slug','=',$slug)
			//->select('*')
			//->get();
			
		//$approvecomments = Post::where('status','=',1)->get(); 
		//return view('frontend.singleblog', compact('product','approvecomments')); 
		
		  
      }
	  
	public function ourclinic()
	{
		  return view('frontend/our-clinic');
		
	}
	
	  public function howitwork()
	{
		  return view('frontend/howitworks');
		
	}
      public function myesalaw()
	{
		  return view('frontend/myesalaw');
		
	}
	
	public function store(Product $product, Request $request)
    {
        $post=new Post();
        $post->title=$request->get('title');
		$post->post_id=$request->get('comment_id');
        $post->description=$request->get('description');
        $post->save();
		 return back()->with('message', "comment  has been successfully Submitted");
	// return view('frontend.singleblog', compact('product'));
    }
	
	
	public function alaska(){
		
		 return view('frontend/alaska-airlines-esa-pet-policy');
	}
	public function united(){
		
		 return view('frontend/how-to-fly-united-airlines-with-an-emotional-support-animal-letter');
	}
	public function american(){
		
		 return view('frontend/american-airlines-emotional-support-animal');
	}
	public function delta(){
		
		 return view('frontend/delta-airlines-emotional-support-animal');
	}
	public function southwest(){
		
		 return view('frontend/southwest-airlines-esa-pet-policy');
	}
	public function jetblue(){
		
		 return view('frontend/jetblue-emotional-support-animal-policy');
	}
	public function guide(){ 
		 return view('frontend/how-to-get-esa-letter');
	}
	
	public function esa_vs_service_animal(){ 
		 return view('frontend/esa-vs-service-animal');
	}
	public function emotional_support_cat(){ 
		 return view('frontend/how-to-register-an-emotional-support-cat');
	}
	public function emotional_support_dog(){ 
		 return view('frontend/how-to-register-an-emotional-support-dog');
	}
	
	
	public function fly_with_dog(){ 
		 return view('frontend/how-to-fly-with-a-dog');
	}
	
		public function esa_laws_california(){ 
		 return view('frontend/esa-laws-california');
	}
		public function certify_emotional_support_dog(){ 
		 return view('frontend/how-to-certify-an-emotional-support-dog');
	}
		public function fair_housing_act(){ 
		 return view('frontend/emotional-support-animal-for-fair-housing-act');
	}
		public function emotional_support_dog_vest(){ 
		 return view('frontend/emotional-support-dog-vest');
	}
	
	public function best_emotional_support_dog_breeds(){ 
		 return view('frontend/best-emotional-support-dog-breeds');
	}
	
		
}