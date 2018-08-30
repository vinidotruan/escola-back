<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Model\Turma;

class Aluno extends Model
{

    public function turmas() {
        return $this->belongsToMany(Turma::class, 'aluno_turma', 'aluno_id', 'turma_id');
    }
}
