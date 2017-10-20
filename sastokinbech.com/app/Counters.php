<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Counters extends Model
{
	protected $table = 'tbl_counters';

	public function getcount($id)
	{
		return $this->where(['product_id'=>$id])->get();
	}

	public function counter($product_id,$count)
	{	
		$this->product_id = $product_id;
		$this->count =$count++;
		return $this->where('product_id',$product_id)->update(['count'=>$count]);
		

	}

	public function saveincounter($product_id)
	{
		$this->product_id = $product_id;
		$this->count = 1;
		return $this->save();
	}

	public function getMostHitItem()
	{
		return $this->orderBy('count','desc')->limit(5)->get();
		//print_r($data); exit();
	}
	

}
