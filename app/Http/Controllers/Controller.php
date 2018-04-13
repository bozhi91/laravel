<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;
use Illuminate\Container\Container as App;
use App\Repositories\User\UserRepository;
use App\Src\User\User;

class Controller extends BaseController
{
	public function viewRegisters(){

		//Initializes the user repository.
		$userRepo = new UserRepository(App::getInstance());

		//get all users
		$user = $userRepo->selectAll();
		return view('viewRegisters')->with('users', $user);
	}

	public function createRegister(){
		//Initializes the user repository.
		$userRepo = new UserRepository(App::getInstance());

		//check if user exists first. Search user by email.
		$user = $userRepo->getUserByEmail($_POST['email']);
		if($user!=null){
			//Error Message
			return view('newRegForm')->with('error', true);
		}

		else{
			//Creates a new user and then returns ALL the registers to the view
			$user = new User($_POST);
			$user = $userRepo->create($user);
			$user = $userRepo->selectAll();

			return view('viewRegisters')->with(['users'=>$user,'error'=>false]);
		}
	}
}
