<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;




class CurrencyController extends Controller
{

    public function index($id)
    {
        $order = Order::findorFail($id);
        $price = $order->price;
        return view('Currency.Currency')->with('price', $price);
    }

    public function exchangeCurrency(Request $request)
    {

        $amount = ($request->amount) ? ($request->amount) : (1);

        $apikey = 'd1ded944220ca6b0c442';

        $to_Currency = 'USD';
        $from_Currency = urlencode($request->from_currency);
        $query =  "{$from_Currency}_{$to_Currency}";

        // change to the free URL if you're using the free version
        $json = file_get_contents("http://free.currencyconverterapi.com/api/v5/convert?q={$query}&compact=y&apiKey={$apikey}");

        $obj = json_decode($json, true);

        $val = $obj["$query"];

        $total = $val['val'] *   $amount;

        $formatValue = number_format($total, 2, '.', '');

        $data = "$amount $from_Currency = $to_Currency $formatValue";

        echo $data;
        die;
    }
}
