<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Rapport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RapportController extends Controller
{
    public function index(){
        $rapports=Rapport::with('material','user','etablisement')->get();
        return view('page.rapport.index',compact('rapports'));
    }
    public function downloadPDF($id){
        $rapport=Rapport::find($id);
        $pdf=PDF::loadView('page.rapport.index.pdf'.compact($rapport));
        return $pdf->download('rapport.pdf');
    }
//     public function downloadPDF(Rapport $rapports)
// {
//     $path_file=public_path()."image".$rapports->location;
//     return response()->download($path_file);
// }
// public function download()
//     {
//         // Fetch the data from the table
//         $data = DB::table('your_table')->get();

//         // Convert the data to a CSV string
//         $csvData = $this->convertToCsv($data);

//         // Generate the response with CSV content
//         $response = new Response($csvData);
//         $response->header('Content-Type', 'text/csv');
//         $response->header('Content-Disposition', 'attachment; filename="data.csv"');

//         return $response;
//     }

//     private function convertToCsv($data)
//     {
//         $output = '';

//         // Create the CSV content
//         foreach ($data as $row) {
//             $output .= implode(',', (array)$row) . "\n";
//         }

//         return $output;
//     }
}
