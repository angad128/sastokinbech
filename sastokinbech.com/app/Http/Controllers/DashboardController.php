<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adds;
use App\Users;
use App\Counters;


class DashboardController extends Controller
{
    public function home()
    {	

    	$add = new Adds();
    	$latest_add_data = $add->getlatestadddata();
    	$computer_data = $add->getaddbycategory('Computer & Peripherals');
    	$mobile_data = $add->getaddbycategory('Mobile & Accessories');
    	$electronics_data = $add->getaddbycategory('Consumer Electronics');
        $feature_item = $add->getfeatureitem();

        $counte = new Counters();
        $most_viewed_data = $counte->getMostHitItem();
        
        $new_data = array();
        foreach ($most_viewed_data as $key => $value) {
            $most_viewed_data = $add->getAddsById($value['product_id']);
            $new_data = array_merge($new_data, $most_viewed_data->toArray());
         }
    	$all_data = Adds::paginate(8);
    	return view('frontend.home',['latest_add_data'=>$latest_add_data,'computer_data'=>$computer_data,'mobile_data'=>$mobile_data,'electronics_data'=>$electronics_data,'all_data'=>$all_data,'feature_item'=>$feature_item,'most_viewed_data'=>$new_data]);
    	
    }
  

    public function getaddbycategory($category)
    {	
       
    	$add = new Adds();
    	$add_data = $add->getaddbycategory($category);
    	$page_title = $category;
    	return view('frontend.category_view',['add_data'=>$add_data,'page_title'=>$page_title]);
        
    }
    
    public function getaddbysubcategory($data,$id)
    {	
    	$add = new Adds();
    	$add_data = $add->getaddbysubcategory($id);
    	$page_title = $data. ":" .$id;
    	return view('frontend.category_view',['add_data'=>$add_data,'page_title'=>$page_title]);
    }

    public function getadddetails($id)
    {
        $add = new Adds();
        $add_data = $add->getAddsById($id); 
        if(count($add_data)==1){
            $id = $add_data[0]['user_id'];
            $user = new Users();
            $user_data = $user->getUserById($id); 
             if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION["view_count"] =  $user_data;
            $product_id = $add_data[0]['id'];
            
           

           
            if (isset($_SESSION['view_count'])) {
                    $counte = new Counters();
                    //print_r($product_id);exit();
                    $count = $counte->getcount($product_id);
                    //print_r($count);exit();
                    if (isset($count[0])) {
                        $counter = $count[0]['count'];                       
                    }else{
                        
                        $count_data = $counte->saveincounter($product_id);
                        $counter = 1;
                        //print_r($count);exit();
                    }
                    $count_data = $counte->counter($product_id,$counter);
                }          
        }
        return view('frontend.add_view',['add_data'=>$add_data,'user_data'=>$user_data]);
        
    }



    public function faq()
    {
        return view('frontend.faq');
    }
   
    
}
