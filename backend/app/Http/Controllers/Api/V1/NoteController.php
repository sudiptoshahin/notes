<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\V1\StoreNoteRequest;
use App\Http\Requests\V1\UpdateNoteRequest;
use App\Models\Note;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\NoteResource;
use App\Http\Resources\V1\NoteCollection;
use App\Utilities\Filters\V1\NoteFilter;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Shows all notes with filterd notes
     * with its associated users
     */
    public function index(Request $request)
    {
        $filter = new NoteFilter();
        $filterParams = $filter->transform($request);

        $notes = Note::where($filterParams);

        return new NoteCollection($notes->paginate()->appends($request->query()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoteRequest $request)
    {
        return new NoteResource(Note::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return new NoteResource($note);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNoteRequest $request, Note $note)
    {
        $isNoteUpdated = $note->update($request->all());

        if($isNoteUpdated == true) {
            return response()->json([
                'status' => 'success',
                'code' => 200,
                'message' => $note->title. ' is updated successfully!'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}
