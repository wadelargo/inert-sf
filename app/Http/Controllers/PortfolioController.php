<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return Inertia::render('portfolios', ['portfolios' => $portfolios]);
    }

    public function create()
    {
        return Inertia::render('create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_url' => 'required|url',
        ]);

        Portfolio::create($request->all());

        return redirect('/portfolios');
    }

}
