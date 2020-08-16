<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instituciones;
use DB;
class ReportesController extends Controller
{

    public function index()
    {

    	return view("reportes.index");

    }

    public function institutes(){
    	$ins = DB::select("SELECT * FROM institutes i join users u on i.USU_ID=u.ID ");
    	return view('reportes.institutes')
    	->with('ins',$ins)
    	;
    }
    public function contacts(){
    	$con = DB::select("SELECT * FROM institutes i JOIN ins_contacts ic ON i.INS_ID=ic.INS_ID order by i.INS_DESCRIPCION ");
    	return view('reportes.contacts')
    	->with('con',$con)
    	;
    }

    public function comunications(){
    	    $comunicaciones=DB::select("SELECT * FROM comunicatios c 
            join ins_contacts ic on c.CON_ID=ic.CON_ID 
            join institutes i on i.INS_ID=ic.INS_ID 
            ");
    	return view('reportes.comunications')
    	->with('comunicaciones',$comunicaciones)
    	;
    }


}
