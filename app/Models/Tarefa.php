<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;
    protected $fillable = ['tarefa', 'data_limite', 'user_id', 'titulo'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
