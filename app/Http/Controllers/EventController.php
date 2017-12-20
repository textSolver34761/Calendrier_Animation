<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Calendar;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index()
    {
        $events = [];
        $data = Event::all();

        foreach ($data as $value) {
            $events[] = Calendar::event(
                $value->title,
                true,
                new \DateTime($value->start_date),
                new \DateTime($value->end_date.' +1 day')
            );
        }

        $calendar = Calendar::addEvents($events);

        return view('mycalender', /*compact('calendar')*/['events' => $data]);
    }
}
