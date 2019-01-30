<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\link;

class LinksController extends Controller
{
    public function index() {

        $links = Link::all();

        return view('links', ['links' => $links]);

    }

    public function showLinksForm() {

            return view('link_toevoegen');
    }

    public function handleLinksForm(Request $request, Link $link) {


        $validated = $this->validate($request,[
            'title'               => 'required|min:8',
            'description'         => 'required',
            'url'                 => 'required|url'

        ]);

        $link->fill([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'url' => $validated['url']
        ]);

        $link->save();

        return redirect()->route('links');
    }
}
