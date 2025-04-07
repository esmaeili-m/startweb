<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Price extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    protected $casts =[
      'features' => 'array'
    ];

    public function price_parent()
    {
        return $this->hasOne(Price::class,'id','parent_id');
    }
}
