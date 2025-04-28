<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Choice;
class ChoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    if ($request->has('chapter_id')) {
        return response()->json(
            Choice::where('chapter_id', $request->input('chapter_id'))->get()
        );
    }
    return response()->json(Choice::all());
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoryRequest $request, $id)

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
