<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelPermit;

class ModelPermitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = ModelPermit::latest()->get();
        return view('models_permits.index',compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('models_permits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|max:100'
        ]);

        ModelPermit::create([
            'model_name' => $request->input('name'),
            'desc' => $request->input('description'),
        ]);
        return to_route('models.index')->with('success','Model has been successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModelPermit $model)
    {
        return view('models_permits.edit',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModelPermit $model)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|max:100'
        ]);

        $model->update([
            'model_name' => $request->input('name'),
            'desc' => $request->input('description'),
        ]);

        return to_route('models.index')->with('success','Model has been successfully Updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModelPermit $model)
    {
        $model->delete();
        return to_route('models.index')->with('error','Model deleted successfully.');
    }
}
