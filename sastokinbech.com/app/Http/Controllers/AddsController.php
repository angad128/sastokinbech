<?php
 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Session;
use App\Adds;




class AddsController extends Controller
{
    public function viewadds()
    {   
        //$id = here goes user_id ; 
        $adds = new Adds();
        $add_data = $adds->getAdds();    
        return view('adds.view_adds',['add_data'=>$add_data]);
       
    
    }

    public function createadds()
    {
        return view('adds.create_adds');
    }

    public function postadds(Request $request)
    {   
         
       
        if ($request->hasFile('image')) {
            $ext = $request->image->getClientOriginalExtension();
            $randFileName = rand(100,100000);
            $imageName = $randFileName.'.'.$ext;
            $imagePath = public_path('upload/' . $request->category .'/'. $request->subcategory);
            $uploaded = $request->image->move( $imagePath ,$imageName);
        }
        if ($request->hasFile('image2')) {
            $ext = $request->image2->getClientOriginalExtension();
            $randFileName = rand(100,100000);
            $imageName2 = $randFileName.'.'.$ext;
            $imagePath2 = public_path('upload/image2/' . $request->category .'/'. $request->subcategory);
            $uploaded2 = $request->image2->move( $imagePath2 ,$imageName2);
        }else{
            $imageName2 = NULL;
        }
        if ($request->hasFile('image3')) {
            $ext = $request->image3->getClientOriginalExtension();
            $randFileName = rand(100,100000);
            $imageName3 = $randFileName.'.'.$ext;
            $imagePath3 = public_path('upload/image3/' . $request->category .'/'. $request->subcategory);
            $uploaded3 = $request->image3->move( $imagePath3 ,$imageName3);
        }else{
            $imageName3 = NULL;
        }
         $this->validate($request,[
            'title' => 'required|min:5',
            'description' => 'required',
            'price' => 'required',
            'status' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'feature_item' =>'required'
        ]);
        

        
        $add = new Adds;
        $add_data = $add->saveAdds($request->user_id,$request->title,$request->category,$request->subcategory,$request->description,$imageName,$imageName2,$imageName3,$request->feature_item,$request->price,$request->status);
        Session::flash('flash_message', 'New Adds is Posted!');
        return redirect()->route('adds.view_adds');

    }


    public function edit($id){
        $add = new Adds;
        $add_data = $add->getAddsById($id);
        return view('adds/edit_adds',['add_data'=>$add_data]);

    }


    public function update(Request $request, $id){
    
        
        if ($request->hasFile('image')) {
            $ext = $request->image->getClientOriginalExtension();
            $randFileName = rand(100,100000);
            $imageName = $randFileName.'.'.$ext;
            $imagePath = public_path('upload/' . $request->category .'/'. $request->subcategory );
            $uploaded = $request->image->move( $imagePath ,$imageName);
        }else{
            $image = DB::table('tbl_adds')->select('image')->where('id',$id)->get(); 
            
            foreach ($image as $key) {
                foreach ($key as $value) {
                    $imageName = $value;
                    //echo $imageName; 
                }
            }
        }
        if ($request->hasFile('image2')) {
            $ext = $request->image2->getClientOriginalExtension();
            $randFileName = rand(100,100000);
            $imageName2 = $randFileName.'.'.$ext;
            $imagePath2 = public_path('upload/image2/' . $request->category .'/'. $request->subcategory);
            $uploaded2 = $request->image2->move( $imagePath2 ,$imageName2);
        }else{
            $imageName2 = NULL;
        }
        if ($request->hasFile('image3')) {
            $ext = $request->image3->getClientOriginalExtension();
            $randFileName = rand(100,100000);
            $imageName3 = $randFileName.'.'.$ext;
            $imagePath3 = public_path('upload/image3/' . $request->category .'/'. $request->subcategory);
            $uploaded3 = $request->image3->move( $imagePath3 ,$imageName3);
        }else{
            $imageName3 = NUll;
        }
        if (empty($request->title)) {
            $title= DB::table('tbl_adds')->select('title')->where('id',$id)->get(); 
            //print_r($title);exit();
        }
        if (empty($request->status)) {
            $status= DB::table('tbl_adds')->select('status')->where('id',$id)->get(); 
        }
        $this->validate($request,[
            'title' => 'required|min:5',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required',       
        
            'subcategory' => 'required',
            'feature_item' =>'required'
        ]);

        $add =new Adds;
        $add_data = $add->updateAdds($id,$request->title,$request->category,$request->subcategory,$request->description,$imageName,$imageName2,$imageName3,$request->price,$request->status);
       
        if($add_data){
            Session::flash('flash_message', 'Add is sucessfully Edited!');
            return redirect()->route('adds.view_adds');
        }
    }

    public function delete($id){
        $add = new Adds;
        $add_data = $add->deleteAddbyId($id);  
        Session::flash('flash_message', 'Adds is sucessfully deleted!');
        return redirect()->route('adds.view_adds');
        
    }
}
