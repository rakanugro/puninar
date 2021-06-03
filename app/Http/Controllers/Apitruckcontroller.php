<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\power_unit;

class Apitruckcontroller extends Controller
{
    //

    public function createData(Request $request)

    {

    	power_unit::create([

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

    	return response()->json([

    			'status' => 'ok',
    			'code' => 200,
    			'response' => 'success',
    			'message' => ' success create data ',
    			'result' => ''

    	],200);

    }

    public function getData()
    {
    	$power_units = power_unit::all();

    	return response()->json($power_unit);

    }

    public function updateData(Request $request, $ID_POWER_UNIT)
    {

    	power_unit::findOrfail($ID_POWER_UNIT)->update([

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

    	return response()->json([

    			'status' => 'ok',
    			'code' => 200,
    			'response' => 'success',
    			'message' => ' success update data ',
    			'result' => ''

    	],200);

    }

    public function deleteData($ID_POWER_UNIT)
    {

    	power_unit::destroy($ID_POWER_UNIT);

    	return response()->json([

    		'status' => 'ok',
    			'code' => 200,
    			'response' => 'success',
    			'message' => ' success Delete data',
    			'result' => ''



    	],200);

    }

}
