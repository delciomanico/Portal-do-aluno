<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nota extends Model
{
    use HasFactory;
    protected $fillable = ['id_mini','id_aluno','mac','p1','p2'];
}
