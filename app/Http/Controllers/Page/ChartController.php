<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Chart;
use App\Models\Material;
use Illuminate\Http\Request;

class ChartController extends Controller
{
   public function index(){
   //   $charts=Chart::with('material')->get();
   //   return view('page.chart.index',compact('charts'));
    // $data = Chart::join('materials', 'charts.material_id', '=', 'materials.id')
    //     ->select('materials.etat', 'materials.created_at')
    //     ->get();
    // return view('page.chart.index', compact('data'));
    $falseCount = Material::where('etats', false)->count();
$trueCount = Material::where('etats', true)->count();
    return view('welcome',compact('trueCount', 'falseCount' ));
   }
}
