<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    function index() {
        $datos['estudiantes'] = Estudiante::get();
        return view('estudiantes.index', $datos);
    }
}
