<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Report;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::whereHas('reports', function ($query) {
            $query->where('status', 'disetujui');
        })->with(['reports' => function ($q) {
            $q->where('status', 'disetujui');
        }])->get();
        return view('items.index',compact('items'));
    }
}
