<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;
session_start();

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Session::get('id');
        if($id==NULL){
          
            return Redirect::to('/admin_panel')->send();

      }
        
        $navbar=view('admin.part.sidebar');
        $content=view('admin.part.content');
        
        return view('admin.admin_master')
                 ->with('navbar',$navbar)
                 ->with('content',$content);
    }
    /**
     * Start View All Category Here
     */
    public function manageSection(){
        $id=Session::get('id');
        if($id==NULL){
          
            return Redirect::to('/admin_panel')->send();

      }
      $cat_info=DB::table('tbl_category')->get();
        
        $navbar=view('admin.part.sidebar');
        $content=view('admin.part.manage')->with('all_category_info',$cat_info);
        
        return view('admin.admin_master')
                 ->with('navbar',$navbar)
                 ->with('content',$content);
    }
     /**
     * End View All Category Here
     */



     /**
     * Start View Add Category Here
     */
    public function addP(){
        $id=Session::get('id');
        if($id==NULL){
          
            return Redirect::to('/admin_panel')->send();

      }
        
        $navbar=view('admin.part.sidebar');
        $content=view('admin.part.addP');
        
        return view('admin.admin_master')
                 ->with('navbar',$navbar)
                 ->with('content',$content);
    }
     /**
     * End  All Category Here
     */


      /**
     * Start Action of Add Category Here
     */
    public function save_category(Request $request){
        $data=array();
        $data['category_name']=$request->category_name;
        $data['category_description']=$request->category_description;
        $data['publication_status']=$request->publication_status;
        DB::table('tbl_category')->insert($data);
       Session::put('message','Save Category Information Successfully');

        return Redirect::to('/addP.java');
    }

     /**
     * End Action of Add Category Here
     */


      /**
     * Start Unpublished Category Here
     */
    public function unpublished_category($category_id){
         DB::table('tbl_category')
        ->where('category_id', $category_id)
        ->update(['publication_status' => 0]);
        return Redirect::to('/manage.java');
    }
     /**
     * End Unpublished Category Here
     */


     /**
     * Start Published Category Here
     */
    public function published_category($category_id){
        DB::table('tbl_category')
       ->where('category_id', $category_id)
       ->update(['publication_status' => 1]);
       return Redirect::to('/manage.java');
   }

    /**
     * End Publish Category Here
     */

    /**
     * Delete Category Start Here
     */
   public function delete_category($category_id){
       
    DB::table('tbl_category')->where('category_id', $category_id)->delete();
    
   return Redirect::to('/manage.java');
}
 /**
     * Delete Category End Here
     */


      /**
     * Edit  Category Start Here
     */

public function edit_category($category_id){
     
    $id=Session::get('id');
    if($id==NULL){
      
        return Redirect::to('/admin_panel')->send();

  }
  $cat_info=DB::table('tbl_category')
  ->where('category_id', $category_id)->first();
    
    $navbar=view('admin.part.sidebar');
    $content=view('admin.part.edit_cat')->with('all_category_info',$cat_info);
    
    return view('admin.admin_master')
             ->with('navbar',$navbar)
             ->with('content',$content);

}

 /**
     * Delete Category End Here
     */




/**
 * Category Update Section Start;
 */
public function update_category(Request $request){
    
    $affected = DB::table('tbl_category')
    ->where('category_id', $request->category_id)
    ->update(['category_name' => $request->category_name,'category_description' => $request->category_description,'publication_status' => $request->publication_status]);
    return Redirect::to('/manage.java');
    
}
/**
 * Category Update Section End;
 */
  

 /**
  * Add Blog Section Start 
  */
public function addBlog(){

    $id=Session::get('id');
        if($id==NULL){
          
            return Redirect::to('/admin_panel')->send();

      }
      
      $cat_info=DB::table('tbl_category')->get();
        $navbar=view('admin.part.sidebar');
        $content=view('admin.part.addBlog')->with('all_category_info',$cat_info);

        
        return view('admin.admin_master')
                 ->with('navbar',$navbar)
                 ->with('content',$content);
    
        

}
  /**
  * Add Blog Section Start ends
  */



   /**
     * Start Action of Add Category Here
     */
    public function save_blog(Request $request){
        $data=array();
        $data['category_id']=$request->category_id;
        $data['blog_title']=$request->blog_title;
        $data['blog_short_description']=$request->blog_short_description;
        $data['blog_long_description']=$request->blog_long_description;
        $data['blog_image']=$request->blog_image;
        $data['publication_status']=$request->publication_status;
       
        DB::table('tbl_blog')->insert($data);
       Session::put('message','Your Blog Information Successfully');

        return Redirect::to('/addBlog');
    }

     /**
     * End Action of Add Category Here
     */



    public function logout(){
        Session::put('admin_name',null);
        Session::put('id',null);
       
        return Redirect::to('/admin_panel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
