<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function notifications()
    {
        $notifications = Event::where(['to_id' => Auth::user()->id, 'read' => 0])->orderBy('id', 'DESC')->get();
        return response()->json(['result' => 'success', 'data' => $notifications]);
    }

    public function notificationsClient()
    {
        $notifications = Event::where([ 'client_read' => 0])->with(['schedule'])
//            ->whereHas('schedule', function ($query) {
//            $query->where([
//                'status_id' => 6,
//            ]);
//        })
            ->whereHas('schedule.company', function ($query) {
            $query->where([
                'user_id' => Auth::user()->id,
            ]);
        })->orderBy('id', 'DESC')->get();
        return response()->json(['result' => 'success', 'data' => $notifications]);
    }

    public function SingleNotifications($id)
    {
        $event = Event::where('id', $id)->first();
        $event->read = 1;
        $event->save();
        return response()->json(['result' => 'success', 'message' => 'Done']);
    }

}
