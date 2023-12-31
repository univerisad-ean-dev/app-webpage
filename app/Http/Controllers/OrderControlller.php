<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderControlller extends Controller
{

    function index()
    {
        $orders = DB::table('orders')
            ->join('type_order', 'orders.type_order_id', '=', 'type_order.id')
            ->join('pet_type', 'orders.pet_type_id', '=', 'pet_type.id')
            ->join('cities', 'orders.city_id', '=', 'cities.id')
            ->select('orders.*', 'type_order.name as type_order_name', 'pet_type.name as pet_type_name',
                'cities.name as city_name')
            ->get();

        $totalOrder = DB::table('orders')->where('status', 1)->sum('total');
        $donations = DB::table('donations')->sum('amount');
        $ordersCount = DB::table('orders')->where('status', 1)->count();
        return view('dashboard', compact('orders', 'totalOrder', 'donations', 'ordersCount'));
    }

    function save(OrderRequest $request)
    {

        $order = DB::table('orders')->insert([
            'type_order_id' => $request->type_order_id,
            'pet_type_id' => $request->pet_type_id,
            'city_id' => $request->city_id,
            'name' => $request->name,
            'cc' => $request->cc,
            'email' => $request->email,
            'date' => $request->date,
            'total' => $request->total,
            'payment_method' => $request->payment_method,
            'status' => rand(1, 3),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return response()->json([
            'message' => 'Order created successfully'
        ], 201);
    }

    function saveDonation(Request $request)
    {

        DB::table('donations')->insert([
            'amount' => $request->amount,
            'city_id' => $request->city_id,
            'name' => $request->name,
            'email' => $request->email,
            'status' => 1,
            'payment_method' => $request->payment_method,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return response()->json([
            'message' => 'Donation created successfully'
        ], 201);
    }
}
