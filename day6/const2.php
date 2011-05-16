<?php

class user {

	public $imageName;
	const imagePath = "/userimages/";


	// $imagePath is same for all users based on the user class 
	// $imageName is specific to each user object instance

	public function getImageUrl() { 
		return user::imagePath . $this->imageName;
	}

}
