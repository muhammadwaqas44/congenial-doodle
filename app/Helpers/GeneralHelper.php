<?php
/**
 * Created by PhpStorm.
 * User: Waqas Rana
 * Date: 2/6/2020
 * Time: 1:50 PM
 */

namespace App\Helpers;


use App\Event;

class GeneralHelper
{
    static function saveEvent($toId, $userId, $scheduleId, $type, $message)
    {
        $notification = new Event();
        $notification->user_id = $userId;
        $notification->type = $type;
        $notification->message = $message;
        $notification->schedule_id = $scheduleId;
        $notification->to_id = $toId;
        $notification->save();
    }
}
