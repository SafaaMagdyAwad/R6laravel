<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone_id',
    ];

    public function phone(){
        return $this->belongsTo(Phone::class);
    }
}
