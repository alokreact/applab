<?php

namespace App\MOdels;

use Illuminate\Database\Eloquent\Model;

use App\Models\Package;

class Lab extends Model
{
    protected $guarded = [];


    public function getParentTest()
    {
        return $this->hasOne (ParentTest::class, 'id', 'parent_test_id');
    }

    public function getSubtest(){

        return $this->belongsToMany(SubTest::class, 'lab_package','lab_id','subtest_id');
    }

}
