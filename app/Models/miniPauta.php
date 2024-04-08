<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class miniPauta extends Model
{
    use HasFactory;
    protected $fillable = ['id_prof','id_disc','id_trim','id_turma'];
}
