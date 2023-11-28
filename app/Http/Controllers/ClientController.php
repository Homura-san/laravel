<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CLientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = CLient::get();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:100', 'min:3'],
            'email' => ['required', 'email', 'unique:clients'],
            'age' => ['required', 'integer'],
            'photo' => ['required', 'mimes:jpeg,bmp,png']
        ]);
        $client = new Client;
        
        if ($request->hasFile('photo')){
            $client->photo = $request->photo->store('public');
        }

        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->age = $request->input('age');
        $client->save();

        return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = Client::findOrFail($id);

        if ($request->hasFile('photo')){
            $client->photo = $request->photo->store('public');
        }

        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->age = $request->input('age');
        $client->save();

        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::findOrFail($id);

        if ($client->delete()){
            return redirect()->route('clients.index');
        };
    }
}
