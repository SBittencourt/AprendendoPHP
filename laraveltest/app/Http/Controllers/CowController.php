<?php

namespace App\Http\Controllers;

use App\Models\Cow;
use App\Models\User;
use Illuminate\Http\Request;

class CowController extends Controller
{
    public function index()
    {
        $cows = Cow::with('user')->get();
        return view('cows.index', compact('cows'));
    }


    public function create()
    {
        $users = User::all();
        return view('cows.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'birthday' => 'required|date',
            'user_id' => 'required|exists:users,id',
        ]);

        Cow::create($validated);

        return redirect()->route('cows.index');
    }

    public function edit(Cow $cow)
    {
        $users = User::all();
        return view('cows.edit', compact('cow', 'users'));
    }

    
    public function update(Request $request, Cow $cow)
    {
        $validated = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'birthday' => 'required|date',
            'user_id' => 'required|exists:users,id',
        ]);

        $cow->update($validated);

        return redirect()->route('cows.index');
    }

    public function destroy(Cow $cow)
    {
        $cow->delete();

        return redirect()->route('cows.index');
    }
}
