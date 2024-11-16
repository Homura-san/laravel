<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ToDoTasksController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        session()->push('todotasks', $id);

        return redirect() -> route('clients.index'); 
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * 
     */
    public function destroy($id){
        $ids = session('todotasks');
    
        $ids = array_filter($ids, function ($value) use ($id) {
            return $value != $id;
        });
    
        session(['todotasks' => $ids]);
        return redirect() -> route('clients.index');
    }
    
}
