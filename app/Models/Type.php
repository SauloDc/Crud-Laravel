<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'description',
    ];

    public function Products(){
        return $this->hasMany(Product::class);
    }

}
