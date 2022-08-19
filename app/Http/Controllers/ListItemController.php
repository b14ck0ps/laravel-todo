<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\ListItem;

class ListItemController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'listItems' => ListItem::where('is_completed', 0)->get(),
        ]);
    }
    public function markComplete($id)
    {
        $listItem = ListItem::find($id);
        $listItem->is_completed = 1;
        $listItem->save();
        return redirect('/');
    }
    public function saveItem(Request $request)
    {
        $newItem = new ListItem();
        $newItem->name = $request->listItem;
        $newItem->is_completed = 0;
        $newItem->save();
        // Log::info(json_encode($request->all()));
        return redirect('/');
    }
}
