<?php
/**
 * Created By: AJAY
 * Date:30-04-2022
 */

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * View Product
     */
    public function viewProducts()
    {
        $products = Product::active()
                        ->where(function ($q){
                            if(\request()->filled('search')){
                                    $q->where('product_name', 'LIKE', '%' . request('search') . '%');
                            }
                        })->get();;

        return view('customer.products.lists',compact('products'));
    }
}
