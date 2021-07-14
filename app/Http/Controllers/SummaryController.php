<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;
use App\Models\Task;

class SummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // SELECT sites.area, tasks.vendor, COUNT(*) as jumlah_task FROM sites JOIN tasks ON sites.id = tasks.siteid GROUP BY sites.area, tasks.vendor;
        $summary1 = Site::join('tasks', 'sites.id', '=', 'tasks.siteid')
            ->select('sites.area', 'tasks.vendor', Site::raw('COUNT(*) as jumlah_task'))
            ->groupBy('sites.area', 'tasks.vendor')
            ->get();
        // SELECT sites.area, COUNT(*) as all_task FROM sites JOIN tasks ON sites.id = tasks.siteid GROUP BY sites.area;
        $summary3 = Site::join('tasks', 'sites.id', '=', 'tasks.siteid')
            ->select('sites.area', Site::raw('COUNT(*) as all_task'))
            ->groupBy('sites.area')
            ->get();

        $topheader = Task::distinct()->select('vendor')->orderBy('vendor')->get();
        $sideheader = Site::distinct()->select('area')->get();
        $summary2 = [];
        foreach ($topheader as $i => $vendor) {
            array_push($summary2, []);
            foreach ($sideheader as $j => $area) {
                $summary2[$j][$i] = Site::join('tasks', 'sites.id', '=', 'tasks.siteid')->where('sites.area', $area->area)->where('tasks.vendor', $vendor->vendor)->count();
            }
        }

        return view('summary.index', compact('summary1', 'summary2', 'summary3', 'topheader', 'sideheader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
