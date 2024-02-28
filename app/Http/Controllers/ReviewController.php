<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\review;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objs = review::paginate(30);
        $objs->setPath('');
        $data['objs'] = $objs;
        return view('admin.review.index', compact('objs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['method'] = "post";
        $data['url'] = url('admin/review');
        return view('admin.review.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'msg' => 'required',
            'image' => 'required'
           ]);

        $status = 0;
        if(isset($request['status'])){
            if($request['status'] == 1){
                $status = 1;
            }
        }

        $image = $request->file('image');
          $img = Image::make($image->getRealPath());
          $img->resize(500, 500, function ($constraint) {
          $constraint->aspectRatio();
          });
        $img->stream();
        Storage::disk('do_spaces')->put('malie/review/'.$image->hashName(), $img, 'public');

           $objs = new review();
           $objs->name = $request['name'];
           $objs->msg = $request['msg'];
           $objs->position = $request['position'];
           $objs->image = $image->hashName();
           $objs->status = $status;
           $objs->save();

           return redirect(url('admin/review'))->with('add_success','เพิ่ม เสร็จเรียบร้อยแล้ว');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $objs = review::find($id);
        $data['url'] = url('admin/review/'.$id);
        $data['method'] = "put";
        $data['objs'] = $objs;
        return view('admin.review.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $this->validate($request, [
            'name' => 'required',
            'msg' => 'required',
           ]);

        $status = 0;
        if(isset($request['status'])){
            if($request['status'] == 1){
                $status = 1;
            }
        }

        $image = $request->file('image');

        if($image == NULL){

            $objs = review::find($id);
            $objs->name = $request['name'];
            $objs->msg = $request['msg'];
            $objs->position = $request['position'];
            $objs->status = $status;
           $objs->save();

        }else{

            $img = DB::table('reviews')
            ->where('id', $id)
            ->first();

        //   dd($img->image);

          $storage = Storage::disk('do_spaces');
          $storage->delete('malie/review/' . $img->image, 'public');

          $img = Image::make($image->getRealPath());
          $img->resize(500, 500, function ($constraint) {
          $constraint->aspectRatio();
          });
        $img->stream();
        Storage::disk('do_spaces')->put('malie/review/'.$image->hashName(), $img, 'public');

          $objs = review::find($id);
          $objs->name = $request['name'];
           $objs->msg = $request['msg'];
           $objs->position = $request['position'];
           $objs->image = $image->hashName();
           $objs->status = $status;
           $objs->save();

        }

        return redirect(url('admin/review/'.$id.'/edit'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del_review($id)
    {
        //
        $objs = DB::table('reviews')
            ->where('id', $id)
            ->first();

            if(isset($objs->image)){
                $storage = Storage::disk('do_spaces');
                $storage->delete('malie/review/' . $objs->image, 'public');
            }

        $obj = review::find($id);
        $obj->delete();

        return redirect(url('admin/review/'))->with('del_success','คุณทำการลบอสังหา สำเร็จ');
    }
}
