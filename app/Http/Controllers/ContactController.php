<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CallRequest;
use App\View\Components\AppLayout;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);

        // Create a new call request
        $callRequest = new CallRequest;
        $callRequest->name = $request->name;
        $callRequest->phone = $request->phone;
        $callRequest->save();

        $lastPart = last(explode('/', session('_previous')['url']));
        if ($lastPart == 'contacts') {
            $lastPart .= '.index';
        } elseif ($lastPart == 'localhost') {
            $lastPart = 'main';
        }
        // dd($lastPart);

        // Redirect back with a success message
        // return view('contacts')->with('success','success is setted');

        // return view($lastPart)->with('view', $lastPart);
        return redirect()->route($lastPart)->with('success','Наш менеджер скоро Вам перезвонит.');
    }
}
