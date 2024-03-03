<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\dateorder;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objs = order::orderby('id', 'desc')->paginate(15);
        $objs->setPath('');
        return view('admin.order.index', compact('objs'));
    }

    public function api_post_status_order(Request $request){

        $user = order::findOrFail($request->user_id);

              if($user->status == 1){
                  $user->status = 0;
              } else {
                  $user->status = 1;
              }


      return response()->json([
      'data' => [
        'success' => $user->save(),
      ]
    ]);

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
        $data['url'] = url('admin/order');
        return view('admin.order.create', $data);
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
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'arrive' => 'required'
           ]);

           $status = 0;
            if(isset($request['status'])){
                if($request['status'] == 1){
                    $status = 1;
                }
            }

           $objs = new order();
           $objs->first_name = $request['first_name'];
           $objs->last_name = $request['last_name'];
           $objs->phone = $request['phone'];
           $objs->email = $request['email'];
           $objs->note = $request['note'];
           $objs->arrive = $request['arrive'];
           $objs->departure = $request['departure'];
           $objs->adults = $request['adults'];
           $objs->children = $request['children'];
           $objs->pets = $request['pets'];
           $objs->status = $status;
           $objs->save();

           if($status == 1){

                if($request['arrive'] && $request['departure']){

                    $step = '+1 day';
                    $output_format = 'Y-m-d';
                    $current = strtotime($request['arrive']);
                    $last = strtotime($request['departure']);

                    while( $current <= $last ) {

                        $dates = date($output_format, $current);

                        $obj = new dateorder();
                        $obj->order_id = $objs->id;
                        $obj->dateorder = $dates;
                        $obj->date_status = 1;
                        $obj->save();

                        $current = strtotime($step, $current);
                    }

                }

           }

           return redirect(url('admin/order'))->with('add_success','เพิ่ม เสร็จเรียบร้อยแล้ว');
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
        $objs = order::find($id);
        $data['url'] = url('admin/order/'.$id);
        $data['method'] = "put";
        $data['objs'] = $objs;
        return view('admin.order.edit', $data);
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
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'arrive' => 'required'
           ]);

           $status = 0;
            if(isset($request['status'])){
                if($request['status'] == 1){
                    $status = 1;
                }
            }


            $objs = order::find($id);
            $objs->first_name = $request['first_name'];
           $objs->last_name = $request['last_name'];
           $objs->phone = $request['phone'];
           $objs->email = $request['email'];
           $objs->note = $request['note'];
           $objs->arrive = $request['arrive'];
           $objs->departure = $request['departure'];
           $objs->adults = $request['adults'];
           $objs->children = $request['children'];
           $objs->pets = $request['pets'];
           $objs->status = $status;
           $objs->save();


           if($status == 1){

            if($request['arrive'] && $request['departure']){

                DB::table('dateorders')
                ->where('order_id', $id)
                ->delete();

                $step = '+1 day';
                $output_format = 'Y-m-d';
                $current = strtotime($request['arrive']);
                $last = strtotime($request['departure']);

                while( $current <= $last ) {

                    $dates = date($output_format, $current);

                    $obj = new dateorder();
                    $obj->order_id = $objs->id;
                    $obj->dateorder = $dates;
                    $obj->date_status = 1;
                    $obj->save();

                    $current = strtotime($step, $current);
                }

            }

       }else{

        DB::table('dateorders')
            ->where('order_id', $id)
            ->update(['date_status' => 0]);

       }


            return redirect(url('admin/order/'.$id.'/edit'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del_order($id)
    {
        //
        $obj = order::find($id);
        $obj->delete();

        return redirect(url('admin/order/'))->with('del_success','คุณทำการลบอสังหา สำเร็จ');
    }
}
