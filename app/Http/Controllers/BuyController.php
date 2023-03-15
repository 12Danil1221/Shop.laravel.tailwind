<?php

namespace App\Http\Controllers;

use App\Http\Requests\TovarStoreRequest;
use App\Http\Requests\BuyTovarStoreRequest;
use App\Models\BuyTovar;
use App\Models\Status;
use App\Models\Tovar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tovars = Tovar::all();
        $users = User::all();


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function Buy(Request $request, BuyTovar $buy_tovar, Tovar $tovar)
    {
        $buy_tovars = BuyTovar::all();

        return view('tovarbuy.buy', compact('tovar', 'buy_tovar'));
    }

    public function stepOne(BuyTovarStoreRequest $request, BuyTovar $buy_tovar)
    {

        $data = request()->validate([
            'col' => 'required',
            'tel' => 'required',
            'email' => 'required',
        ]);
        BuyTovar::create($data);

        return to_route('index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(BuyTovar $buy_tovar)
    {

        return view('admin.edit2', compact('buy_tovar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(BuyTovarStoreRequest $request, BuyTovar $buy_tovar)
    {
        $buy_tovar->update([
            'col' => $request->col,
            'tel' => $request->tel,
            'email' => $request->email,
        ]);

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuyTovar $buy_tovar)
    {
        $buy_tovar->delete();

        return to_route('index');
    }
}
