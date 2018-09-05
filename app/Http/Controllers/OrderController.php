<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderDetail;
use App\Shipping;
use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
    public function manageOrder(){
        $orders = DB::table('orders')
                        ->join('customers', 'orders.customer_id', '=', 'customers.id')
                        ->join('payments', 'orders.id', '=', 'payments.order_id')
                        ->select('orders.*', 'orders.created_at', 'customers.first_name', 'customers.last_name', 'payments.payment_type','payments.payment_status')
                        ->orderBy('orders.id', 'desc')
                        ->get();
        return view('Admin.order.manage-order', ['orders' => $orders]);
    }
    public function viewOrderDetails($id){
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $orderDetails = OrderDetail::where('order_id', $id)->get();

        return view('Admin.order.view-order', [
            'order' => $order,
            'customer' => $customer,
            'shipping' => $shipping,
            'orderDetails' => $orderDetails
        ]);
    }
}
