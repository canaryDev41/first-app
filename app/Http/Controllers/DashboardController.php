<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        $users = User::all();
        return view('index', compact('categories','products','users'));
    }
}
