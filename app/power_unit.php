<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class power_unit extends Model
{
    //

    protected $fillable = [

    	'POWER_UNIT_NUM','DESCRIPTION','ID_CORPORATION','ID_LOCATION','ID_POWER_UNIT_TYPE','IS_ACTIVE','INSERT_USER','INSERT_DATE','UPDATE_USER','UPDATE_DATE'

    ];
}
