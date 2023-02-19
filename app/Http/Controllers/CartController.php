<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller{
    
    public function addToCart($evt, $id1 = null, $id2 = null){
        if ($evt === 'lab') {
            $data =  DB::table('lab_package')->where([
                ['lab_id', '=', $id2],
                ['subtest_id', '=', $id1],
            ])->first();

            $lab = Lab::find($id2);
            $subtest = SubTest::find($id1);
            $cart = session()->get('cart', []);

            if (isset($cart[$id2])) {
                     $cart[$id2] = [
                                "name" => $subtest->sub_test_name,
                                "price" => $data->price,
                                "lab_name" => $lab->lab_name,
                                "quantity" => 1
                            ];
            } 
            else {

                $cart[$id2] = [
                    "name" => $subtest->sub_test_name,
                    "price" => $data->price,
                    "lab_name" => $lab->lab_name,
                    "quantity" => 1
                ];
            
            }
            session()->put('cart', $cart);
            return redirect()->back();
                        
        
        } else {

            $package = Package::with('parenttest')->findOrFail($id1);
            $lab =   Lab::where(['id' => $package->lab_name])->first();

            //dd($package);
            $cart = session()->get('cart', []);

            if (isset($cart[$id1])) {

                $cart[$id1]['quantity']++;
            } else {

                $cart[$id1] = [
                    "name" =>  $package->package_name,
                    "price" => $package->price,
                    "lab_name" => $lab->lab_name,
                    "quantity" => 1
                ];
            }
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product add to cart successfully!');
        }

        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    public function cart()
    {
        return view('cart');
    }

}
