<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class AdminMenuController extends Controller
{
    public function index()
    {
        return view('admin-menu');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        MenuItem::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => 'images/'.$imageName,
        ]);

        return redirect()->route('admin.menu.index')->with('success', 'Menu item created successfully.');
    }
}
