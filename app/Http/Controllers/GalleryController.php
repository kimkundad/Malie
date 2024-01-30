<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\images;
use App\Models\category;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objs = images::paginate(30);
        $objs = DB::table('images')->select(
            'images.*',
            'images.id as id_q',
            'categories.*',
            )
            ->leftjoin('categories', 'categories.id',  'images.cat_id')
            ->paginate(15);

        $objs->setPath('');
        $data['objs'] = $objs;
        return view('admin.gallery.index', compact('objs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $objs = category::all();
        $data['method'] = "post";
        $data['objs'] = $objs;
        $data['url'] = url('admin/gallery');
        return view('admin.gallery.create', $data);
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
            'cat_id' => 'required',
            'image' => 'required'
           ]);

           $image = $request->file('image');
            $img = Image::make($image->getRealPath());
            $img->resize(800, 800, function ($constraint) {
            $constraint->aspectRatio();
            });
            $img->stream();
            Storage::disk('do_spaces')->put('malie/gallery/'.$image->hashName(), $img, 'public');

            $objs = new images();
           $objs->cat_id = $request['cat_id'];
           $objs->image = $image->hashName();
           $objs->save();

           return redirect(url('admin/gallery'))->with('add_success','เพิ่ม เสร็จเรียบร้อยแล้ว');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $objs = DB::table('images')
            ->where('id', $id)
            ->first();

            if(isset($objs->image)){
                $storage = Storage::disk('do_spaces');
                $storage->delete('malie/gallery/' . $objs->image, 'public');
            }

        $obj = images::find($id);
        $obj->delete();

        return redirect(url('admin/gallery/'))->with('del_success','คุณทำการลบอสังหา สำเร็จ');
    }
}
