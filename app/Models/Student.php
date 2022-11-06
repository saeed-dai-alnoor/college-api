<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phone', 'student_id'
    ];
    protected $primaryKey = 'student_id';
    public $incrementing = false;
    protected $keyType = 'int';
}
