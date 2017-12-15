<?php

namespace App\Http\Controllers\Api\V1\Users;

use App\Http\Controllers\Api\ApiController;
use App\Transformers\V1\UserTransformer;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Dingo\Api\Http\Request;
use Illuminate\Foundation\Testing\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class RegisterController extends ApiController
{
    protected function rules(){
        return [
            'name' => 'required|string|max:255',
            'avatar' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ];
    }

    public function register(Request $request){

        $this->validate($request,$this->rules(),[],[],'not valid data');

        $user->save();

        return $this->response()->item($user, new UserTransformer());
    }
}