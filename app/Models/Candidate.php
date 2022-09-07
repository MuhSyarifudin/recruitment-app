<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','phone','year','created_by','deleted_by','updated_by','deleted_at'];

    protected $hidden = ['created_by','updated_by','deleted_by','deleted_at'];

    protected $primaryKey = "id";
}
