<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupTest extends Model
{
    protected $guarded = [];
    protected $table = 'parent_tests';

    protected $fillable=['parent_test_name','sub_tests','status'];

    public function subtest(){
        
        return $this->belongsToMany(SubTest::class,'sub_tests','id');
    }

}
