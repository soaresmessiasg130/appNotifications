<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
  public function getAll ()
  {
    $notifications = Notification::all ();

    return $notifications;
  }

  public function getAllLight ()
  {
    $notifications = Notification::all (
      [
        'title',
        'desc'
      ]
    );

    return $notifications;
  }

  public function getById ($id)
  {
    // $notification = Notification::where (
    //   'id',
    //   $id
    // ) -> first ();

    $notification = Notification::find ($id);

    return $notification;
  }
}
