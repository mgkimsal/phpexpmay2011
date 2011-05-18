<?php

class user {

	public $imageName;
	const imagePath = "/userimages/";
	static $path = "/images";

	// $imagePath is same for all users based on the user class 
	// $imageName is specific to each user object instance

	public function getImageUrl() { 
//		return user::$path; /// <--- notice the $ in front of the static var
		return user::imagePath . $this->imageName;
	}

}
