<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

use App\Http\Requests\Enterprise\StoreEnterpriseRequest;
use App\Http\Requests\Enterprise\UpdateEnterpriseRequest;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Http\RedirectResponse;

use App\Models\Enterprise;

class EnterpriseController extends Controller
{
    public function index(): View
    {
        $enterprises = Enterprise::where('user_id', Auth::id())->get();

        return view('layouts.enterprises.index', compact('enterprises'));
    }

    public function create(): string
    {
        $enterprises = Enterprise::all();
        return view('layouts.enterprises.create',  compact('enterprises'));
    }

    public function store(StoreEnterpriseRequest $request): RedirectResponse
    {
        Enterprise::create($request->validated());
        return redirect()
            ->route('enterprises.index')
            ->with('message', 'Enterprise Created Successfully!');
    }

    public function edit(string $id): string
    {
        $enterprise = Enterprise::findOrFail($id);
        return view('layouts.enterprises.edit',  compact('enterprise'));
    }

    public function update(UpdateEnterpriseRequest $request, Enterprise $enterprise): RedirectResponse
    {
        $enterprise->update($request->validated());
        return redirect()
            ->route('enterprises.index')
            ->with('message', 'Enterprise Success Update!');
    }

    public function destroy(string $id): RedirectResponse
    {
       $enterprise = Enterprise::findOrFail($id);
       $enterprise->delete();

       return redirect()->route('enterprises.index')->with('message', 'Enterprise Deleted Successfully!');
    }
}
