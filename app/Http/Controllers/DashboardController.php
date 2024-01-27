<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\news;

class DashboardController extends Controller
{
    //

    public function index(){

        $view = news::sum('view');

        $objs = DB::table('contacts')
            ->whereDate('contacts.created_at', date('Y-m-d'))
            ->paginate(15);

            $objs->setPath('');
      
        $data['sum'] = 1;
        return view('admin.dashboard.index', compact('objs','view'	));
    }


}
