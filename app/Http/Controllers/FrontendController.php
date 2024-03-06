<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function getIndex() {
        $data = [];
        $data['banners'] = DB::table('banners')->select('banner_image')->where('status',1)->get();
        $data['categories'] = DB::table('categories')->select('id','name')->where('status',1)->get();
        $data['features'] = DB::table('products')->where('is_featured',1)->where('status',1)->take(4)->get();
        $data['promotions'] = DB::table('products')->where('promotion',1)->where('status',1)->take(4)->get();

        return view('frontend.home')->with('data', $data);
    }

    public function contactUs() {
        return view('frontend.contact-us');
    }

    public function contactUsPost(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'body' => 'required'
        ]);

        Mail::to($request->user())->send(new ContactMail($request));

    }

    public function products($id) {

        $category = DB::table('categories')->select('id','name')->where('id',$id)->first();
        $products = Product::where('categories_id',$id)->where('status',1)->paginate(2);
        return view('frontend.products')->with('products', $products)->with('category',$category);
    }
}
