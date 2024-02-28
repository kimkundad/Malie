<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\setting;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    //
    public function index(){
        $id = 1;
        $objs = setting::find($id);
        $data['objs'] = $objs;
        return view('admin.setting.index', $data);
    }


    public function post_setting(Request $request){

        $img = DB::table('settings')
          ->where('id', 1)
          ->first();

          $image = $request->file('facebook_image');

          $filename = null;
          $id = 1;
          if($image){
                
    
              $img = Image::make($image->getRealPath());
              $img->resize(1200, 630, function ($constraint) {
              $constraint->aspectRatio();
              });
              $img->stream();
              Storage::disk('do_spaces')->put('malie/setting/'.$image->hashName(), $img, 'public');
  

              $objs = setting::find($id);
            $objs->name_website = $request['name_website'];
            $objs->facebook = $request['facebook'];
            $objs->facebook_url = $request['facebook_url'];
            $objs->facebook_title = $request['facebook_title'];
            $objs->facebook_detail = $request['facebook_detail'];
            $objs->facebook_title_en = $request['facebook_title_en'];
            $objs->facebook_detail_en = $request['facebook_detail_en'];
            $objs->line_oa = $request['line_oa'];
            $objs->line_oa_url = $request['line_oa_url'];
            $objs->phone = $request['phone'];
            $objs->email = $request['email'];
            $objs->banner_his = $request['fax'];
            $objs->banner_point = $request['phone2'];
            $objs->facebook_image = $image->hashName();
            $objs->youtube = $request['youtube'];
            $objs->address_en = $request['address_en'];
            $objs->address = $request['address'];
            $objs->save();


          }else{

            $objs = setting::find($id);
            $objs->name_website = $request['name_website'];
            $objs->facebook = $request['facebook'];
            $objs->facebook_url = $request['facebook_url'];
            $objs->facebook_title = $request['facebook_title'];
            $objs->facebook_detail = $request['facebook_detail'];
            $objs->facebook_title_en = $request['facebook_title_en'];
            $objs->facebook_detail_en = $request['facebook_detail_en'];
            $objs->line_oa = $request['line_oa'];
            $objs->line_oa_url = $request['line_oa_url'];
            $objs->phone = $request['phone'];
            $objs->email = $request['email'];
            $objs->banner_his = $request['fax'];
            $objs->banner_point = $request['phone2'];
            $objs->youtube = $request['youtube'];
            $objs->address_en = $request['address_en'];
            $objs->address = $request['address'];
            $objs->save();

          }

            return redirect(url('admin/setting/'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');

    }


}
