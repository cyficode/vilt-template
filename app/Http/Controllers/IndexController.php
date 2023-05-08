<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return inertia('Index/Index', [
            'message' => 'Hello from Laravel',
        ]);
    }

    public function about()
    {
        return inertia('Index/About', [
            'message' => 'This is about page',
        ]);
    }

    public function flash() {
        return redirect()->route('home')
            ->with('success', 'This is a flash message styled with Tailwind CSS.');
    }
}
