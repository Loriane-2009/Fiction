<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Story;


class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Story::all());
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
        $story = Story::find($id);

        if (!$story) {
            abort(404, 'Story not found.');
        }
    
        return response()->json($story);
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
