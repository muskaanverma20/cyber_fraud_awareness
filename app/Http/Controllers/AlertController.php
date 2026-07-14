<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | SHOW ALERT PAGE
    |--------------------------------------------------------------------------
    */

    public function index(Request $request)
    {
        $search = $request->input('search');
        $type   = $request->input('type', 'all');

        $query = Alert::query();

        /*
        |--------------------------------------------------------------------------
        | SEARCH
        |--------------------------------------------------------------------------
        */

        if (!empty($search)) {

            $query->where(function ($q) use ($search) {

                $q->where('title', 'LIKE', "%{$search}%")
                  ->orWhere('description', 'LIKE', "%{$search}%")
                  ->orWhere('type', 'LIKE', "%{$search}%");

            });

        }

        /*
        |--------------------------------------------------------------------------
        | FILTER BY TYPE
        |--------------------------------------------------------------------------
        */

        if ($type != 'all' && !empty($type)) {

            $query->where('type', $type);

        }

        /*
        |--------------------------------------------------------------------------
        | LATEST ALERTS
        |--------------------------------------------------------------------------
        */

        $alerts = $query
                    ->orderBy('alert_date', 'desc')
                    ->latest()
                    ->get();

        return view('alerts', compact(

            'alerts',
            'search',
            'type'

        ));
    }

    /*
    |--------------------------------------------------------------------------
    | CREATE ALERT
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([

            'title'       => 'required|string|max:255',

            'description' => 'required|string',

            'type'        => 'required|string|max:255',

            'risk_level'  => 'required|in:low,medium,high',

            'alert_date'  => 'required|date',

        ]);

        Alert::create([

            'title'       => $request->title,

            'description' => $request->description,

            'type'        => $request->type,

            'risk_level'  => $request->risk_level,

            'alert_date'  => $request->alert_date,

        ]);

        return redirect()
                ->route('alerts')
                ->with('success', 'Alert Created Successfully.');
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE ALERT
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, Alert $alert)
    {
        $request->validate([

            'title'       => 'required|string|max:255',

            'description' => 'required|string',

            'type'        => 'required|string|max:255',

            'risk_level'  => 'required|in:low,medium,high',

            'alert_date'  => 'required|date',

        ]);

        $alert->update([

            'title'       => $request->title,

            'description' => $request->description,

            'type'        => $request->type,

            'risk_level'  => $request->risk_level,

            'alert_date'  => $request->alert_date,

        ]);

        return redirect()
                ->route('alerts')
                ->with('success', 'Alert Updated Successfully.');
    }

    /*
    |--------------------------------------------------------------------------
    | DELETE ALERT
    |--------------------------------------------------------------------------
    */

    public function destroy(Alert $alert)
    {
        $alert->delete();

        return redirect()
                ->route('alerts')
                ->with('success', 'Alert Deleted Successfully.');
    }
}