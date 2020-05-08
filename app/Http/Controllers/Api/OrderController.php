<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\OrderProduct;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
	  * Checkout pizza
	  * @param \Illuminate\Http\Request;
	  * @return \Illuminate\Http\Response
    */
    public function checkout(Request $request){

    	$client_info =  $request->data;
    	$cart = $request->cart;
    	$validator = Validator::make($client_info, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:55',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:40',
        ]);

        if ($validator->fails()) {
            $response = [
                'message' => $validator->messages()->first()
            ];
            return response()->json($response, 400);  //400 bad request
        }
        $order = Order::create([
            'fullname' => $client_info['name'],
            'email' =>  $client_info['email'],
            'address' =>  $client_info['address'],
            'city' =>  $client_info['city'],
            'postal_code' =>  $client_info['postal_code'],
            'country' =>  $client_info['country'],
            'phone' =>  $client_info['phone'],
            'currency' => 'usd',

        ]);
        if ($order) {
        	  $this->fillOrderProduct($order->id,$cart);
              return response()->json([
                    'message' => 'Client Information inserted succesfuly!',
              ], 200);
        }


    }

    /**
	  * Insert correnspondent data into order_products
	  *
	  * @param $order_id int
	  * @param $cart object
	  * @return \Illuminate\Http\Response
    */
    private function fillOrderProduct($order_id, $cart)
    {
    	$orderProducts = [];
   		foreach ($cart as $key => $item) {
        $orderProducts[] = [
            'product_id' =>$item['product']['id'],
            'order_id' => $order_id,
            'quantity' => $item['quantity'],
            'price' => $item['product']['price'],
        ];
    	}
    	OrderProduct::insert($orderProducts);
    }
}
