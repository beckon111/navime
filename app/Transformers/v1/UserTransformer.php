<?php

namespace App\Transformers\V1;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{

    public function transform(User $user){
        return [
            'id' => (int) $user->id,
            'email' => $user->email,
            'name', => $user->name,
            'avatar' => $user->avatar
        ];
    }

}