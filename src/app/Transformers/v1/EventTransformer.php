<?php

namespace App\Transformers\V1;

use App\Event;
use League\Fractal\TransformerAbstract;

class OrderTransformer extends TransformerAbstract
{

    public function transform(Event $event){
        return [
            'id' => (int) $event->id,
            'longitude' => (int) $event->longitude,
            'atitude' => $event->atitude,
            'description' => $event->description,
            'updated_at' => $event->updated_at,
            'created_at' => $event->created_at,
        ];
    }

}