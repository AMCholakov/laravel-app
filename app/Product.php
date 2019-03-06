<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
}
