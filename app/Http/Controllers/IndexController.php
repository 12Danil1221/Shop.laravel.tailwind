<?php

namespace App\Http\Controllers;

use App\Http\Requests\TovarStoreRequest;
use App\Http\Requests\BuyTovarStoreRequest;
use App\Models\BuyTovar;
use App\Models\Status;
use App\Models\Tovar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tovars = Tovar::all();
        return view('index', compact('tovars'));

    }

    public function geolocation()
    {
        return view('geolocation');
    }

    public function zayavky()
    {
        $buy_tovars = BuyTovar::all();
        return view('tovarbuy.zayavky', compact('buy_tovars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tovars = Tovar::all();
        $buy_tovars = BuyTovar::all();


        return view('tovar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TovarStoreRequest $request)
    {
        $image = $request->file('image')->store('public/musichouse');

        Tovar::create([
            'image' => $image,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tovar $tovar)
    {

        return view('tovar.show', compact('tovar'));
    }

    public function Buy(Request $request, BuyTovar $buy_tovar, Tovar $tovar, Status $status)
    {
        $statuses = Status::all();

        $buy_tovars = BuyTovar::all();

        return view('tovarbuy.buy', compact('tovar', 'buy_tovars', 'statuses'));
    }

    public function stepOne(BuyTovarStoreRequest $request, BuyTovar $buy_tovar, Status $status)
    {

        $data = request()->validate([
            'col' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'tovarname' => 'required',

        ]);
        BuyTovar::create($data);

        return to_route('index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tovar $tovar)
    {
        return view('admin.edit', compact('tovar'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Tovar $tovar, TovarStoreRequest $request)
    {
        $image = $request->file('image')->store('public/musichouse');

        $tovar->update([
            'image' => $image,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('index');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tovar $tovar)
    {
        $tovar->delete();

        return to_route('index');
    }
}
