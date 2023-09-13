<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CrudEvents;

class CalenderController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {  
            $data = CrudEvents::whereDate('event_start', '>=', $request->start)
                ->whereDate('event_end',   '<=', $request->end)
                ->get(['id', 'employee_name', 'project_name', 'event_start', 'event_end']);
            return response()->json($data);
        }
        return view('register-events');
    }

    public function calendarEvents(Request $request)
    {
        switch ($request->type) {
           case 'create':
              $event = CrudEvents::create([
                  'employee_name' => $request->employee_name,
                  'project_name' => $request->project_name,
                  'event_start' => $request->event_start,
                  'event_end' => $request->event_end,
              ]);

              return response()->json($event);
              break;
  
           case 'edit':
              $event = CrudEvents::find($request->id)->update([
                  'employee_name' => $request->employee_name,
                  'project_name' => $request->project_name,
                  'event_start' => $request->event_start,
                  'event_end' => $request->event_end,
              ]);
 
              return response()->json($event);
              break;

           case 'delete':
              $event = CrudEvents::find($request->id)->delete();

              return response()->json($event);
             break;
 
           default:
             # ...
             break;
        }
    }
}