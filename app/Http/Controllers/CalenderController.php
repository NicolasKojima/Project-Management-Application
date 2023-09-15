<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CrudEvents; 

class CalenderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = CrudEvents::whereDate('event_start', '>=', $request->start)
                ->whereDate('event_end', '<=', $request->end)
                ->get()
                ->map(function ($event) {
                    return [
                        'id' => $event->id,
                        'title' => $event->employee_name . ' - ' . $event->project_name,
                        'start' => $event->event_start,
                        'end' => $event->event_end,
                    ];
                });
            return response()->json($data);
        }
        return view('schedule');
    }

    public function calendarEvents(Request $request)
    {
        switch ($request->type) {
            case 'create':
                $event = new CrudEvents(); // Use the model to create a new event
                $event->employee_name = $request->employee_name;
                $event->project_name = $request->project_name;
                $event->event_start = $request->event_start;
                $event->event_end = $request->event_end;
                $event->user_id = auth()->user()->id; // Associate the event with the logged-in user
                $event->save();

                return response()->json($event);
                break;

            case 'edit':
                $event = CrudEvents::find($request->id);
                $event->employee_name = $request->employee_name;
                $event->project_name = $request->project_name;
                $event->event_start = $request->event_start;
                $event->event_end = $request->event_end;
                $event->save();

                return response()->json($event);
                break;

            case 'delete':
                $event = CrudEvents::find($request->id);
                $event->delete();

                return response()->json($event);
                break;

            default:
                // Handle other cases or errors here
                break;
        }
    }
}
