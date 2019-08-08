<?php

namespace App\Http\Controllers\Admin;

use App\Article_keyword;
use App\Filemanager;
use App\Lang;
use App\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.setting');
    }
    public function getsetting()
    {

        $filemanagerids = Filemanager::all();

        $keywords = Article_keyword::where('setting', true)->get();
        $setting = Setting::all();
        $keywordarray = array();
        foreach ($keywords as $key=>$value){
            $keywordarray[$key] = $value['keyword'];
        }
        $setting[0]['keywords'] = $keywordarray;

        $langs = Lang::all();


        return [$setting , $filemanagerids, $langs];

    }

    public function savelogoimage(Request $request)
    {

        $image = new ImageManager();
        Storage::disk('media')->delete('/media/cite/logo.png');
        $image->make($request->logoimage->getRealPath())->save(public_path() . '/media/cite/logo.png');


        return [rand(100,999)];
    }

    public function savebannerimage(Request $request)
    {

        $image = new ImageManager();
        Storage::disk('media')->delete('/media/cite/banner.png');
        $image->make($request->bannerimage->getRealPath())->save(public_path() . '/media/cite/banner.png');


        return [rand(100,999)];
    }

    public function savesetting(Request $request)
    {
        $setting = $request->setting;

        $save = Setting::where('id', 1)->first();
        if(is_null($save)){
            $save = new Setting();
        }
        $save->mobile = $setting['mobile'];
        $save->tellphone = $setting['tellphone'];
        $save->fax = $setting['fax'];
        $save->email = $setting['email'];
        $save->address = $setting['address'];
        $save->aboutus = $setting['aboutus'];
        $save->company_name = $setting['company_name'];
        $save->company_name_en = $setting['company_name_en'];
        $save->header_description = $setting['header_description'];
        $save->aboutus_all = $setting['aboutus_all'];

        $save->save();

        $newkeywords = array();
        Article_keyword::where('setting', true)->delete();

        if ($setting['keywords'] != null){
            foreach ($setting['keywords'] as $key => $value) {
                $newkeywords[$key]['setting'] = true;
                $newkeywords[$key]['keyword'] = $value;
            }
            Article_keyword::insert($newkeywords);
        }

    }

}
