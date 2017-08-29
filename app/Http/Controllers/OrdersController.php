<?php

namespace App\Http\Controllers;

use App\Order;
use App\Cocktail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cocktails = Cocktail::all();
        return view('orders.create', compact('cocktails'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $cocktails = $order->cocktails()->get();
        return view('orders.show', compact('cocktails', 'order'));
    }


    public function store(Request $request){

        $this->validate($request, array(
            'cocktail_id' => 'required',
        ));

        $order = new Order();
        $order->user_id = Auth::id();
        $order->cocktail_id = $request->cocktail_id;

        $cocktail = Cocktail::find($request->cocktail_id);
        $order->total = $cocktail->price;

        $order->save();

        Session::flash('message', 'Order successfully placed!');

        return view('orders.show', compact('order'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();

        Session::flash('message', 'Drink successfully removed from queue!');
        return redirect()->route('orders.index');
    }
}
