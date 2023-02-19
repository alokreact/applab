<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubTest extends Model
{
    protected $guarded = [];
    protected $table = 'sub_tests';

    public function parenttest(){

        return $this->belongsToMany(ParentTest::class,'parent_test_id','id');
    }
    public function getLab(){

        return $this->belongsToMany(Lab::class,'lab_package','sub_test_id','lab_id')->withPivot(['price']);;
    }

    public function organ(){

        return $this->belongsToMany(Organ::class,'organ_id','id');
    }
}
