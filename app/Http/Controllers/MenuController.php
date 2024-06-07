<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem; // Assuming you have a MenuItem model

class MenuController extends Controller
{

    public function index()
    {
        $menuItems = MenuItem::all(); // Fetch all menu items from the database

        return view('menu.index', compact('menuItems'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Search the menu items based on the query
        $menuItems = MenuItem::where('name', 'LIKE', "%{$query}%")
                            ->orWhere('description', 'LIKE', "%{$query}%")
                            ->get();

        // Return the search results as JSON
        return response()->json($menuItems);
    }
}
