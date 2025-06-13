<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Validator;
use \Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use App\Models\Enterprise;
use Illuminate\Validation\Rule;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): string
    {
        $enterprises = Enterprise::all()->where('user_id', '=', Auth::user()->id);
        return view('layouts/enterprises/index',  compact('enterprises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): string
    {
        $enterprises = Enterprise::all();
        return view('layouts/enterprises/create',  compact('enterprises'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'fantasy_name' => ['required', 'string', 'max:255'],
            'cnpj' => ['required', 'string', 'min:14' , 'max:14'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Enterprise::class],
            'phone' => ['required', 'string', 'max:11'],
            'status' => ['required', 'boolean', 'in:0,1'],
            'user_id' => ['required', 'integer'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        Enterprise::create($validator->validate());

        return redirect()->route('enterprises.index')->with('message', 'Enterprise Cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): string
    {
        $enterprise = Enterprise::findOrFail($id);
        return view('layouts/enterprises/edit',  compact('enterprise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'fantasy_name' => ['required', 'string', 'max:255'],
            'cnpj' => ['required', 'string', 'min:14', 'max:14'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(Enterprise::class)->ignore($id)],
            'phone' => ['required', 'string', 'max:11'],
            'status' => ['required', 'boolean', 'in:0,1'],
            'user_id' => ['required', 'integer'],
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $enterprise = Enterprise::findOrFail($id);
        $enterprise->update($validator->validate());

        return redirect()->route('enterprises.index')->with('message', 'Enterprise Atualizado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
       $enterprise = Enterprise::findOrFail($id);
       $enterprise->delete();

       return redirect()->route('enterprises.index')->with('message', 'Enterprise Deletado com Sucesso!');
    }
}
