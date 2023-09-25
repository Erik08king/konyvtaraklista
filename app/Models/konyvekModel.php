<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konyvekModel extends Model
{
    use HasFactory;
    public $table = "konyvek";
    public $primaryKey = "ko_id";
    public $timestamps = false;
    public $guarded = [];
}
