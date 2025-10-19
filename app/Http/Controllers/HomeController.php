<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::featured()->ordered()->get();
        return view('index', compact('projects'));
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        Contact::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Mensagem enviada com sucesso!'
        ]);
    }
}
