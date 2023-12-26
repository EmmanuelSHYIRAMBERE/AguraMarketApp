<?php

namespace App\Http\Controllers;

use App\Models\Cart;

use App\Models\Order;

use Illuminate\Support\Facades\Auth;

use Session;
use Stripe;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function stripe($totalprice)
    {


        return view('payment.stripe', compact('totalprice'));

    }
     public function stripePost(Request $request, $totalprice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $totalprice,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Thanks for payment." 
        ]);

        $user=Auth::user();
    
            $userid=$user->id;

            $data=cart::where('user_id','=',$userid)->get();

            foreach($data as $data)
            {
                $order= new order;
                $order->name=$data->name;
                $order->email=$data->email;
                $order->phone=$data->phone;
                $order->address=$data->address;
                $order->user_id=$data->user_id;

                $order->product_title=$data->product_title;
                $order->quantity=$data->quantity;
                $order->price=$data->price;
                $order->image=$data->image;
                $order->product_id=$data->product_id;

                $order->payment_status='Paid';
                $order->delivery_status='processing';

                $order->save();


                $cart_id=$data->id;
                $cart=cart::find($cart_id);

                $cart->delete();
            }
      
        Session::flash('success', 'Products paid successful! Thank you for shopping with us.');
              
        return back();
    }
}
