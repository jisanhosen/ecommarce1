<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderDetail;
use App\Payment;
use App\Shipping;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Session;

class CheckoutController extends Controller
{
    public function index(){
        return view('FrontEnd.checkout.register');
    }
    public function saveCustomerInfo(Request $request){
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->phone_number = $request->phone_number;
        $customer->address = $request->address;
        $customer->save();

        $customerId = $customer->id;

        Session::put('customerId', $customerId);
        Session::put('customerName', $request->first_name.' '.$request->last_name);

        return redirect('/shipping-info');
    }
    public function shippingInfo(){
        $customerId = Session::get('customerId');
        $customerInfo = Customer::find($customerId);
        return view('FrontEnd.checkout.shipping-info', ['customerInfo' => $customerInfo]);
    }
    public function saveShippingInfo(Request $request){
        $shipping = new Shipping();
        $shipping->full_name = $request->full_name;
        $shipping->email = $request->email;
        $shipping->phone_number = $request->phone_number;
        $shipping->address = $request->address;
        $shipping->save();

        $shippingId = $shipping->id;

        Session::put('shippingId', $shippingId);
        return redirect('/payment-info');

    }
    public function selectPaymentInfo(){
        return view('FrontEnd.checkout.payment-info');
    }
    public function saveOrderInfo(Request $request){
        $paymentType = $request->payment_type;
        if($paymentType == 'Cash On Delivery'){
            $order = new Order();
            $order->customer_id = Session::get('customerId');
            $order->shipping_id = Session::get('shippingId');
            $order->order_total = Session::get('order_total');
            $order->save();
            $orderId = $order->id;
            Session::put('orderId', $orderId);

            $payment = new Payment();
            $payment->order_id = Session::get('orderId');
            $payment->payment_type = $paymentType;
            $payment->save();

            $cartProducts = Cart::content();
            foreach ($cartProducts as $cartProduct){
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = Session::get('orderId');
                $orderDetail->product_id = $cartProduct->id;
                $orderDetail->product_name = $cartProduct->name;
                $orderDetail->product_price = $cartProduct->price;
                $orderDetail->product_quantity = $cartProduct->qty;
                $orderDetail->save();
            }
            Cart::destroy();
            return redirect('/complete-order');

        }elseif ($paymentType == 'Bkash'){
            return $paymentType;
        }elseif ($paymentType == 'Paypal'){
            return $paymentType;
        }elseif ($paymentType == 'Visa'){
            return $paymentType;
        }elseif ($paymentType == 'Mastercard'){
            return $paymentType;
        }
    }
    public function completeOrderInfo(){
        return view('FrontEnd.checkout.complete-order');
    }
}
