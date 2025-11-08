<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Add
use App\Models\Main\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Project::with('status')->orderBy('id', 'asc')->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
        ]);

        $item = Project::create([
            'name' => $fields['name'],
        ]);

        $response =[
            'status' => 'success',
            'message' => 'Project created successfully',
            'item' => $item
        ];
        return response($response, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Project::with('status')->find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $fields = $request->validate([
            'name' => 'required|string',
        ]);

        $item = Project::where('id', $id)->update([
            'name' => $fields['name'],
        ]);

        return response([
            'status' => 'success',
            'message' => 'Project updated successfully',
            'data' => $item
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Project::find($id);
        $item->delete();

        $response =[
            'message' => 'Project removed successfully',
            'item' => $item
        ];
        return response($response, 201);
    }
}
