<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Turma;

class Professor extends Model
{
    protected $fillable = ['nome', 'sobrenome', 'data_nascimento'];
    protected $table = 'professores';

    public function turmas() {
        return $this->belongsToMany(Turma::class, 'professor_turma', 'professor_id', 'turma_id');
    }
}
