<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::latest()->get();
        return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = FacadesValidator::make($request->all(),[
            'name' => 'required|string|max:255',
            'message' => 'required',
        ],
        [
            'name.required' => 'Name is required',
            'message.required' => 'Message is required',
        ]);

        if (empty($request->name) && empty($request->message)) {
            return back()
                ->withErrors(['both' => 'Name & Message are required'])
                ->withInput();
        }

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        Message::create([
            'name' => $request->name,
            'message' => $request->message,
        ]);

        return redirect()
            ->route('messages.index')
            ->with([
                'success' => 'Message submitted successfully',
        ]);
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
        //
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
