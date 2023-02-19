<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Lab;

class Organ extends Model
{
    protected $guarded = [];
    protected $table ='organs';

    protected $fillable =['name','image'];

    public function subtest(){

        return $this->hasMany(SubTest::class,'organ_id');
    }
   
}
