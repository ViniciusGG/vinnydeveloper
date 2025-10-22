<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::featured()->ordered()->get();
        return view('index', compact('projects'));
    }

    public function storeContact(ContactRequest $request): JsonResponse
    {
        try {
            $contact = Contact::create($request->validated());
            Mail::to('vinicius1663.vg@gmail.com')->send(new ContactMail($request->validated()));

            return response()->json([
                'success' => true,
                'message' => 'Mensagem enviada com sucesso! Entraremos em contato em breve.'
            ]);
            Log::info('Contato enviado com sucesso: ' . $request->all());
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            Log::error('Erro ao salvar contato: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Erro interno do servidor. Tente novamente mais tarde.'
            ], 500);
        }
    }
}
