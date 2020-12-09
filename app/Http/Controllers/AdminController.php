<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Contact;


class AdminController extends Controller
{
    public function __construct(){
    	
    }
    public function dashboard(){
    	return view('admin.dashboard');
    }
	
	 public function contactlisting()
    {
		
	  $contact = DB::table('contacts')->paginate(10);
	
      return view('admin.contacts.contactlisting', compact('contact')); 
    }

public function commentlisting()
    {
        $posts=\DB::table('posts')->paginate(5);
        return view('admin.moderate.index',compact('posts'));
    }
    public function edit($id)
    {
        $post = \DB::table('posts')->where('id', $id)->first();
        return view('admin.moderate.edit', compact('post', 'id'));
    }
    public function update(Request $request, $id)
    {
        switch($request->get('approve'))
        {
            case 0:
                Post::postpone($id);
                break;
            case 1:
                Post::approve($id);
                break;
            case 2:
                Post::reject($id);
                break;
            case 3:
                Post::postpone($id);
                break;
            default:    
                break;

        }
        return redirect('admin/postview');
    }
}