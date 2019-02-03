<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    public function store(Request $request)
    {
        Task::create($request->all());

        return (['message' => 'Contatto aggiunto con successo']);
    }
}
