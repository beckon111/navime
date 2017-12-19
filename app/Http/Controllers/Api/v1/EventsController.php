<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Event;
use App\Transformers\V1\EventTransformer;
use Dingo\Api\Http\Request as DingoRequest;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;


class EventsController extends ApiController
{

    public function __construct()
    {
        $this->middleware('api.auth');
    }


    public function rules(){
        return [
            //'json' => 'required|string',
        ];
    }

    /**
     * @return \Dingo\Api\Http\Response
     */
    public function getAllEvents(){

        // TODO : config file
        $events = $this->guard()->user()->events()->paginate(15);

        return $this->response()->paginator($events, new EventTransformer());
    }


    /**
     * @param DingoRequest $request
     * @return \Dingo\Api\Http\Response
     */
    public function createEvent(DingoRequest $request){
        $this->validate($request,$this->rules());

        $event = Event::create($request->all());
        $event->user()->associate($this->guard()->user());

        $event->save();

        return $this->response()->created();
    }


    /**
     * @param Event $event
     * @return \Dingo\Api\Http\Response
     */
    public function updateEvent(Event $event){
        if ($this->guard()->user()->cant('using',$event))
            throw new AccessDeniedHttpException('Your can`t update not your event');

        $this->validate($request = Request::instance(),$this->rules());

        $event->json = $request->input('json');
        $event->save();

        return $this->response()->noContent();
    }


    /**
     * @param Event $event
     * @return \Dingo\Api\Http\Response
     */
    public function getEvent(Event $order){
        if ($this->guard()->user()->cant('using',$order))
            throw new AccessDeniedHttpException('Your can`t get not your event');

        $event->load('user');
        return $this->response()->item($order, new EventTransformer());
    }


    /**
     * @param Event $event
     * @return \Dingo\Api\Http\Response
     */
    public function deleteEvent(Event $event){
        if ($this->guard()->user()->cant('using',$event))
            throw new AccessDeniedHttpException('Your can`t delete not your event');

        $event->delete();

        return $this->response()->noContent();
    }


}
