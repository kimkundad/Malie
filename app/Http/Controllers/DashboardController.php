<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\news;

class DashboardController extends Controller
{
    //

    public function index(){

        $objs = DB::table('dateorders')->select(
            'dateorders.*',
            'dateorders.id as id_q',
            'orders.*',
            )
            ->leftjoin('orders', 'orders.id',  'dateorders.order_id')
            ->where('dateorders.date_status', 1)
            ->get();

           // dd($objs);


        return view('admin.dashboard.index', compact('objs'	));
    }


}
