<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Status;

class ReportController extends Controller
{
    public function index(Request $request){
      
        $sort = $request->input('sort');
        if($sort != 'asc' && $sort != 'desc') {
            $sort = 'desc';
        }

       

        $status = $request->input('status');
        $validate = $request->validate([
            'status' => "exists:statuses,id"
        ]);
        if($validate){
            $reports = Report::where('status_id', $status)
            ->orderBy('created_at', $sort)
            ->paginate(5);
        } else {
            $reports = Report::orderBy('created_at', $sort)
            ->paginate(5);
        }

      

        $statuses = Status::all();
        return view('reports.index', compact('reports', 'statuses', 'sort', 'status'));
    }

    public function destroy(Report $report){
        $report -> delete();
        return redirect()->back();
    }

    public function store(Request $request, Report $report){
        $data = $request -> validate ([
            'number' => 'string',
            'description' => 'string',
        ]);
         $data['status_id'] = 1;

        $report->create($data);
        return redirect()->route('reports.index');
    }

    public function edit(Report $report){
        return view('reports.edit', compact('report'));
    }

     public function update(Request $request, Report $report){
        $data = $request -> validate ([
            'number' => 'string',
            'description' => 'string',
        ]);
        $report->update($data);
        return redirect()->route('reports.index');
    }
}
