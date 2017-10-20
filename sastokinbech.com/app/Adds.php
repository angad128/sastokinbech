<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Adds extends Model
{
	protected $table = 'tbl_adds';

	public function saveAdds($user_id,$title,$category,$subcategory,$description,$imageName,$imageName2,$imageName3,$feature_item,$price,$status)
	{	
	

		$this->user_id = $user_id;
		$this->title = $title;
		$this->category = $category;
		$this->subcategory = $subcategory;
		$this->description = $description;
		$this->image = $imageName;
		$this->image2 = $imageName2;
		$this->image3 = $imageName3;
		$this->feature_item = $feature_item;
		$this->price = $price;
		$this->status = $status;
		return $this->save();
	}

	public function getAdds()
	{
		if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
		
		return $this->where('user_id',$_SESSION["user_data"]["user_id"])->get();
		

	}
	public function getAddsById($id){
		return $this->where('id',$id)->get();
	}

	public function updateAdds($id,$title,$category,$subcategory,$description,$imageName,$imageName2,$imageName3,$price,$status){
		
		return $this->where('id',$id)->update(['title'=>$title,'category'=>$category ,'subcategory'=>$subcategory,'description'=>$description,'image'=>$imageName,'image2'=>$imageName2,'image3'=>$imageName3,'price'=>$price,'status'=>$status]);
	}

		
	public function deleteAddbyId($id){
		return $this->where('id',$id)->delete();
	}

	public function getalladddata()
	{
		return $this->all();
	}

	public function getaddbycategory($id)
	{
		return $this->where('category',$id)->get();
	}
	
	public function getaddbysubcategory($id)
	{
		return $this->where('subcategory',$id)->get();
	}

	public function getlatestadddata()
	{
		return $this->orderBy('created_at','desc')->limit(8)->get();
	}
	public function getfeatureitem()
	{
		return $this->where('feature_item',"yes")->limit(6)->get();
	}
	

}


