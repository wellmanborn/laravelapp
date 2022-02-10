<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    protected $table = "weathers";

    use HasFactory;

    protected $fillable = ["time", "name", "longitude", "latitude", "temp", "pressure", "humidity",
        "temp_min","temp_max"];

    public function scopeFilter($query, $name = null){
        if($name != null)
            $query->where("name", $name);
    }
}
