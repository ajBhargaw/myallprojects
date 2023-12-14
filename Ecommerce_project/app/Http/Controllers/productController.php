<?php

namespace App\Http\Controllers;

use App\Models\card;
use App\Models\order;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class productController extends Controller
{
    public function index()
    {
        $data = product::all();
        return view('product', ['product' => $data]);
    }

    public function details($id)
    {
        $data = product::find($id);
        return view('detail',  ['product' => $data]);
    }

    public function addToCard(Request $req)
    {
        if ($req->session()->has('user')) {
            $card = new card;
            $card->user_id = $req->session()->get('user')['id'];
            $card->product_id = $req->product_id;
            $card->save();

            return redirect('/');
        } else {
            return redirect('login');
        }
    }

    static public function cartItem()
    {
        $userId = Session::get('user')['id'];
        return card::where('user_id', $userId)->count();
    }

    public function cartList()
    {
        if(session()->has('user')){
        $userid = Session::get('user')['id'];
        $products =  DB::table('cards')
            ->join('products', 'cards.product_id', '=', 'products.id')
            ->where('cards.user_id', $userid)
            ->select('products.*', 'cards.id as cart_id')
            ->get();

        return view('cartList', ['products' => $products]);
        }else{
            return redirect('/');
        }
    }

    public function removecart($id)
    {
        card::destroy($id);
        return redirect('cartList');
    }

    public function ordernow()
    {
        $userid = Session::get('user')['id'];
        $total =  DB::table('cards')
            ->join('products', 'cards.product_id', '=', 'product_id')
            ->where('cards.user_id', $userid)
            ->sum('products.price');

        return view('ordernow', ['total' => $total]);
    }

    public function orderplace(Request $reque)
    {
        $userid = Session::get('user')['id'];
        $allcart = card::where('user_id', $userid)->get();
        foreach ($allcart as $cart) {
            $order = new order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = 'pending';
            $order->payment_method = $reque->payment;
            $order->payment_status = 'pending';
            $order->address = $reque->address;
            $order->save();
            card::where('user_id', $userid)->delete();
        }
        $reque->input();
        return redirect('/');
    }


    public function myorders()
    {
        if (session()->has('user')) {
            $userid = Session::get('user')['id'];
            $orders =  DB::table('orders')
                ->join('products', 'orders.product_id', '=', 'products.id')
                ->where('orders.user_id', $userid)
                ->get();

            return view('myorders', ['orders' => $orders]);
        } else {
            return redirect('/');
        }
    }




    public function addproduct(Request $req)
    {
        $products = new product();

        $products->name = $req->productname;
        $products->price = $req->productprice;
        $products->category = $req->category;
        $products->description = $req->description;

        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images', $filename);

            $products->gallery = $filename;
        }

        $products->save();


        return redirect()->back()->with('status', 'product added successfully');
    }
}
