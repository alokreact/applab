<?php

namespace App\MOdels;

use Illuminate\Database\Eloquent\Model;

use App\Models\Package;

class Lab extends Model
{
    protected $guarded = [];

    protected $fillable = ['lab_name','address1','state', 'city','pin','phone','image','status'];

    public function getParentTest(){
        return $this->hasOne (ParentTest::class, 'id', 'parent_test_id');
    }

    public function subtest(){

        return $this->belongsToMany(SubTest::class,'lab_package')
                     ->withPivot(['price']);
    }

}
