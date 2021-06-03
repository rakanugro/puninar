<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class Puninarcontroller extends Controller
{
    //
    public function index()
    {

    	$title = 'halaman utama';

    	return view('halaman_utama',compact('title'));
    }

    public function truck()
    {
    	$title = 'Data Truck';

    	$truck = DB::table('power_unit')->orderBy('ID_POWER_UNIT','desc')->get();

    	$corporation = DB::table('corporation')->orderBy('ID_CORPORATION','desc')->get();

    	$location = DB::table('location')->orderBy('ID_LOCATION','desc')->get();

    	$power_unit_type = DB::table('power_unit_type')->orderBy('ID_POWER_UNIT_TYPE','desc')->get();


    	return view('data_truck',compact('title','truck','corporation','location','power_unit_type'));
    }

    public function truck_store(Request $request)
    {

    	DB::table('power_unit')->insert([

    		'POWER_UNIT_NUM' => $request->POWER_UNIT_NUM,
    		'DESCRIPTION' => $request->DESCRIPTION,
    		'ID_CORPORATION' => $request->ID_CORPORATION,
    		'ID_LOCATION' => $request->ID_LOCATION,
    		'ID_POWER_UNIT_TYPE' => $request->ID_POWER_UNIT_TYPE,
    		'IS_ACTIVE' => $request->IS_ACTIVE,
    		'INSERT_USER' => $request->INSERT_USER,
    		'INSERT_DATE' => $request->INSERT_DATE,
    		'UPDATE_USER' => $request->UPDATE_USER,
    		'UPDATE_DATE' => $request->UPDATE_DATE

    	]);

    	return redirect('/truck');

    }

    public function truck_edit($ID_POWER_UNIT)
    {

    	$title = 'Edit Truck';

    	$truck =	DB::table('power_unit')->where('ID_POWER_UNIT',$ID_POWER_UNIT)->get();

    	$corporation = DB::table('corporation')->orderBy('ID_CORPORATION','desc')->get();

    	$location = DB::table('location')->orderBy('ID_LOCATION','desc')->get();

    	$power_unit_type = DB::table('power_unit_type')->orderBy('ID_POWER_UNIT_TYPE','desc')->get();

    	return view('edit_truck',compact('title','truck','corporation','location','power_unit_type'));

    }

    public function truck_update(Request $request)
    {

    	DB::table('power_unit')->where('ID_POWER_UNIT',$request->ID_POWER_UNIT)->update([

    		'POWER_UNIT_NUM' => $request->POWER_UNIT_NUM,
    		'DESCRIPTION' => $request->DESCRIPTION,
    		'ID_CORPORATION' => $request->ID_CORPORATION,
    		'ID_LOCATION' => $request->ID_LOCATION,
    		'ID_POWER_UNIT_TYPE' => $request->ID_POWER_UNIT_TYPE,
    		'IS_ACTIVE' => $request->IS_ACTIVE,
    		'INSERT_USER' => $request->INSERT_USER,
    		'INSERT_DATE' => $request->INSERT_DATE,
    		'UPDATE_USER' => $request->UPDATE_USER,
    		'UPDATE_DATE' => $request->UPDATE_DATE

    	]);

    	return redirect('/truck');

    }

    public function truck_delete($ID_POWER_UNIT)
    {

    		DB::table('power_unit')->where('ID_POWER_UNIT',$ID_POWER_UNIT)->delete();

    		return redirect('truck');

    }



}
