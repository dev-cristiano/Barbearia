<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Enterprise;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();

        return view('layouts/employees/index',  compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enterprises = Enterprise::where('user_id', Auth::id())->get();
        dd($enterprises);
        return view('layouts/employees/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse|RedirectResponse
    {
       $validator = Validator::make($request->all(), [
           'full_name' => ['required', 'string', 'max:255'],
           'email' => ['required', 'string', 'email', 'max:255', 'unique:employees'],
           'phone' => ['required', 'string', 'min:10', 'max:11', 'unique:employees'],
           'cpf' => ['required', 'string', 'min:11', 'max:11', 'unique:employees'],
           'specialties' => ['required'],
           'enterprise_id' => ['required', 'integer'],
       ]);

       if ($validator->fails()) {
           return response()->json($validator->errors(), 400);
       }

       Employee::create($validator->validate());

       return redirect()->route('employees.index')->with('success', 'Employee Added Successfully');
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
    public function edit(string $id)
    {
        $employee = Employee::findOrFail($id);
        return view('layouts/employees/edit',  compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
