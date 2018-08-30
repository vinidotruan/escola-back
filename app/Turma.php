<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Model\Aluno;
use App\Model\Professor;

class Turma extends Model
{
    protected $fillable = ['nome'];

    public function alunos() {
        return $this->belongsToMany(Aluno::class, 'aluno_turma', 'turma_id', 'aluno_id');
    }

    public function professores() {
        return $this->belongsToMany(Professor::class, 'professor_turma', 'turma_id', 'professor_id');
    }
        

}
