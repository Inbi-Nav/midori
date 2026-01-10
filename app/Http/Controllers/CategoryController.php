<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }
    
    public function show($id) {
        $categories = Category::find($id);
        if ($categories) {
            return response()->json($categories);
        } else {
            return response()->json(['message' => 'Categoria no encontrada'], 404);
        }
    }
}