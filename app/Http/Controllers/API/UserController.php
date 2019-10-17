<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public $successStatus = 200;
    
    public function getUserListByType($type)
    {
    	if(!empty($type)){

    		$user = User::where('type',$type)->get(); 
        	return response()->json(['success' => $user], $this->successStatus); 
    	}else{
        	return response()->json(['error' =>'Missing Parameter'], 401); 

    	}
    }
}
