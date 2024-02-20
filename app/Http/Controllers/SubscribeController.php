<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\subscribe;

class SubscribeController extends Controller
{
    //
    public function index(){

        $objs = subscribe::paginate(30);
        $objs->setPath('');
        $data['objs'] = $objs;
        return view('admin.subscribe.index', compact('objs'));

    }

    public function del_subscribe($id){

        $obj = subscribe::find($id);
        $obj->delete();

        return redirect(url('admin/subscribe/'))->with('del_success','คุณทำการลบอสังหา สำเร็จ');
    }
}
