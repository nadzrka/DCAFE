<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    // Define the table if it's not the default plural form of the model name
    protected $table = 'menu_items';

    // Define which attributes are mass assignable
    protected $fillable = ['name', 'price', 'image'];

    public function showMenu()
{
    $menuitems = MenuItem::all(); // Retrieve all menu items from the database
    return view('your-view-name', compact('menuitems'));
}
}
