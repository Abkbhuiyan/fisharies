<?php

namespace App\Http\Controllers;

use App\BuyHistory;
use App\Project;
use App\SellHistory;
use App\FishHealth;
use App\ProjectTank;
use App\FeedTank;
use App\MedicineTank;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function manage(){
        $data['projects'] = Project::all();

        return view('admin.report.index',$data);
    }

    public function generate(Request $request){
        $request->validate([
            'project_id' => 'required|numeric',
            'action' => 'required',
        ]);
        $action = $request->action;
        $project_id = $request->project_id;
        // dd($project_id);
        if ($action == 'summary'){
            $data['project'] = Project::findOrFail($project_id);

            $sales = SellHistory::where('project_id',$project_id)->get();
            $ts = $sales->sum(function ($t){
                return $t->unit_price * $t->weight;
            });
            $data['ts'] = $ts;

            $buys = BuyHistory::where('project_id',$project_id)->get();
            $ts = $buys->sum('price');
            $data['tc'] = $ts;


            return view('admin.report.summary',$data);
        }

        if ($action == 'sales'){
            $data['project'] = Project::findOrFail($project_id);

            $data['sells'] = SellHistory::where('project_id',$project_id)->get();
//            $abc = $data['buys']->sum('price');
            $ts = $data['sells']->sum(function ($t){
                return $t->unit_price * $t->weight;
            });
            $data['tc'] = $ts;
//            dd($ts);
            return view('admin.report.sellDetails',$data);
        }
        if ($action == 'health'){
            $data['project'] = Project::findOrFail($project_id);
            $healths =DB::select(DB::raw("SELECT tank.name, health.date, health.fish_amount, health.weight
            FROM tanks as tank, project_tanks as pt, fish_healths as health WHERE tank.id = pt.tank_id AND
            pt.id = health.project_tank_id AND pt.project_id = '$project_id'"));
           $data['healths'] = $healths;
            return view('admin.report.healthDetails',$data);
        }
        if ($action == 'feeding'){
            $data['project'] = Project::findOrFail($project_id);
            $data['feedHistories'] = FeedTank::with(['feed','tank'])->where('project_id',$project_id)->orderBy('id','DESC')
                ->get();
//            dd($data);
            return view('admin.report.feedDetails',$data);
        }
        if ($action == 'medication'){
            $data['project'] = Project::findOrFail($project_id);
            $data['medicineHistories'] = MedicineTank::with(['medicine','tank'])->where('project_id',$project_id)->orderBy('id','DESC')
                ->get();
            return view('admin.report.medicineDetails',$data);
        }
    }

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
