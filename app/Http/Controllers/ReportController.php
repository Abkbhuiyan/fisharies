<?php

namespace App\Http\Controllers;

use App\BuyHistory;
use App\Project;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function info(){
        $data['projects'] = Project::orderBy('id','DESC')->get();

        $buy = BuyHistory::all();
        foreach ($data['projects'] as $key=>$item) {
            $data['projects'][$key]->total_cost=0;
        }
        foreach ($buy as $b){
           foreach ($data['projects'] as $p){
               if($b->project_id == $p->id){
                   $p->total_cost += $b->price;
               }
           }
        }

        return view('admin.report.costInfo',$data);
    }

    public function details($id){
       $data['project'] = Project::findOrFail($id);

        $data['buys'] = BuyHistory::where('project_id',$id)->get();
        $abc = $data['buys']->sum('price');
        $data['tc'] = $abc;
        return view('admin.report.costDetails',$data);
    }
}
