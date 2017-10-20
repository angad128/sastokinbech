<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Users extends Model
{
	protected $table = 'tbl_users';

	public function saveUser($name,$imageName,$email,$password,$district,$city,$address1,$address2,$contact){
		$this->name = $name;
		$this->image = $imageName;
		$this->email = $email;
		$this->password = $password;
		$this->district = $district;
		$this->city = $city;
		$this->address1 = $address1;
		$this->address2 = $address2;
		$this->contact = $contact;
		return $this->save();
	}

	public function getUser($email,$password){
		return $this->where(['email'=>$email,'password'=>$password])->get();
	}
	public function getUserById($id){
		return $this->where('user_id',$id)->get();
	}

	public function updateUser($id,$name,$email,$district,$city,$address1,$address2,$contact){
		return $this->where('user_id',$id)->update(['name'=>$name,'email'=>$email,'district'=>$district,'city'=>$city,'address1'=>$address1,'address2'=>$address2,'contact'=>$contact]);
	}

	public function updateprofileImage($id,$image){
		return $this->where('user_id',$id)->update(['image'=>$image]);
	}
}