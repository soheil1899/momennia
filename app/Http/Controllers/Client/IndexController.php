<?php

namespace App\Http\Controllers\Client;

use App\Article;
use App\Article_keyword;
use App\Contactus;
use App\Customer;
use App\Image;
use App\Setting;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $setting = Setting::where('id' , 1)->first();
        $description = Article_keyword::where('setting' , true)->get();
        $slider = Slider::select('id')->where('publish', true)->first();
        $slider = Image::where('slider_id', $slider['id'])->get();
        return view('index', compact( 'slider', 'setting', 'description'));
    }



    public function contactus()
    {
        $setting = Setting::where('id' , 1)->first();
        $description = Article_keyword::where('setting' , true)->get();

        return view('contactus', compact('setting', 'description'));
    }
    public function savemessage(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'family' => 'required',
            'email' => 'required | email',
            'mobile' => 'required | min:11 | max:11',
            'address' => 'required',
            'message' => 'required | min:5',
        ]);


        $save = new Contactus();
        $save->name = $request->name;
        $save->family = $request->family;
        $save->email = $request->email;
        $save->mobile = $request->mobile;
        $save->address = $request->address;
        $save->message = $request->message;

        $save->save();
    }

    public function customer()
    {
        $description = Article_keyword::where('setting' , true)->get();

        $customers = Customer::all();
        $setting = Setting::where('id' , 1)->first();
        return view('customer', compact('setting', 'customers', 'description'));
    }


    public function rotbeh()
    {
        $description = Article_keyword::where('setting' , true)->get();

        $setting = Setting::where('id' , 1)->first();
        return view('rotbeh', compact('setting', 'description'));
    }
    public function sabt()
    {
        $description = Article_keyword::where('setting' , true)->get();

        $setting = Setting::where('id' , 1)->first();
        return view('sabt', compact('setting', 'description'));
    }
    public function hesabresi()
    {
        $description = Article_keyword::where('setting' , true)->get();

        $setting = Setting::where('id' , 1)->first();
        return view('hesabresi', compact('setting', 'description'));
    }
    public function hoghoghi()
    {
        $description = Article_keyword::where('setting' , true)->get();

        $setting = Setting::where('id' , 1)->first();
        return view('hoghoghi', compact('setting', 'description'));
    }
    public function other()
    {
        $description = Article_keyword::where('setting' , true)->get();

        $setting = Setting::where('id' , 1)->first();
        return view('other', compact('setting', 'description'));
    }


}
