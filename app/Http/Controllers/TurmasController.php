<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;

class TurmasController extends Controller
{
    public function index() {
        return Turma::all();
    }

    public function store(Request $request) {
        $turma = Turma::create($request->all());
        return $turma;
    }

    public function update(Turma $turma, Request $request) {
        $turma->update($request->all());
        return $turma;
    }

    public function destroy(Turma $turma) {
        $turma->delete();
        return 'Okay';
    }
}
