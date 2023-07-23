<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'category_id'];

    public function childcarelog()
    {
        return $this->hasOne(ChildcareLog::class);
    }
}
