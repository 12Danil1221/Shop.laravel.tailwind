<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TovarStoreRequest;
use App\Models\BuyTovar;
use App\Models\Tovar;
use Illuminate\Http\Request;

class TovarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tovars = Tovar::all();
        return view('admin.tovar', compact('tovars'));
    }

    public function show(Tovar $tovar)
    {

        return view('admin.show', compact('tovar'));
    }
    public function edit(Tovar $tovar)
    {


    }

    public function update(TovarStoreRequest $request, Tovar $tovar)
    {

    }
}
