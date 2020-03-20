<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DynamicDependentController extends Controller
{
     /**
      * fetch the Main Cities "Parent cities"
      */
    public function oblast()
    {
        $oblast= DB::table('t_koatuu_tree')
                   ->where('ter_type_id','0')->get();

      return view('register')->with('oblast', $oblast);

    }

    /** fetch smaller Cities for main parent 
     * 
     */
    public function grabGorodFromOblast(Request $request)
    {
        
        $data =  DB::table('t_koatuu_tree')
                ->where('reg_id',$request->reg_id )
                ->where('ter_type_id',1)
                ->get();

        return Response()->json($data);
    }
    
   /**
    * fetching Districts form the above citites
    */
    public function grabRaionFromGorad(Request $request)
    {

        $data =  DB::table('t_koatuu_tree')
                ->where('reg_id',$request->reg_id )
                ->where('ter_type_id',$request->ter_type_id)
                ->get();

        return Response()->json($data);
    }
    


}
