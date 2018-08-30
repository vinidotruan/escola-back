<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;

class ProfessoresController extends Controller
{
    public function index() {
        return Professor::all();
    }

    public function store(Request $request) {
        $professor = Professor::create($request->all());
        return $professor;
    }

    public function update(Professor $professor, Request $request) {
        $professor->update($request->all());
        return $professor;
    }

    public function destroy(Professor $professor) {
        $professor->delete();
        return 'Deletado com sucesso';
    }

    public function turma(Professor $professor, Request $turma) {
        $professor->turmas()->attach($request->turmaId);
    }

}
