<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

use Session;
use App\Product;
use App\ProductCategory;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function sixseven()
    {
        $product_categories = ProductCategory::orderBy('id')->get();
        $tproducts = Product::orderBy('id')->get();
        $products = DB::table('product_categories')
                    ->join('products', 'product_categories.id', '=', 'products.category_id')
                    ->select('product_categories.id', 'product_categories.name', DB::raw('COUNT(products.id) as Jumlah_Product'))
                    ->groupBy('products.category_id', 'product_categories.id', 'product_categories.name')->get();

        
        return view('sixseven', compact('products', 'product_categories', 'tproducts'));
    }

    public function numbertwo(){
        return view('numbertwo');
    }


    public function soal2(Request $request){
        
        $username = $request->username;

        $this->validate($request, [
            'username' => 'required|max:8' 
        ]);

        if (preg_match("/[a-z]{5}_[A-Z]{2}/", $username)) {
            Session::flash('flash_message','Validasi berhasil!');

            return redirect()->route('numbertwo');
        } else if(preg_match("/[a-z]{5}.[A-Z]{2}/", $username)){
            Session::flash('flash_message','Validasi berhasil!');

            return redirect()->route('numbertwo');
        }
        else {
            Session::flash('flash_error','Validasi gagal!');
            return redirect()->route('numbertwo');
        }


    }
}
