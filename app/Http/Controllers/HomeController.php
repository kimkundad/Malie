<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\Support\Facades\DB;
use App\Models\news;
use App\Models\slideshow;
use App\Models\subscribe;
use App\Models\review;
use App\Models\category;
use App\Models\images;
use App\Models\order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function room(){

      $gallery = images::where('cat_id', 3)->where('status', 1)->get();
      $data['gallery'] = $gallery;

      return view('room', $data);
    }

    public function blog(){

      $objs = news::where('status', 1)->where('type', 0)->whereDate('startdate', '<=', date("Y-m-d"))->orderby('id', 'desc')->paginate(15);
        $objs->setPath('');
        return view('blog', compact('objs'));

    }

    public function blog_detail($id){

      $objs = news::find($id);
      $data['u'] = $objs;

      return view('blog_detail', $data);

    }

    public function gallery(){

      $images = DB::table('images')->select(
        'images.*',
        'images.id as id_q',
        'categories.*',
        )
        ->leftjoin('categories', 'categories.id',  'images.cat_id')
        ->where('images.status', 1)
        ->get();
      $data['images'] = $images;

      $category = category::whereNotIn('id', [3])->get();
      $data['category'] = $category;

      return view('gallery', $data);
    }

    public function add_myorders(Request $request){


           $objs = new order();
           $objs->first_name = $request['first_name'];
           $objs->last_name = $request['last_name'];
           $objs->phone = $request['phone'];
           $objs->email = $request['email'];
           $objs->note = $request['note'];
           $objs->arrive = $request['arrive'];
           $objs->departure = $request['departure'];
           $objs->adults = $request['adults'];
           $objs->save();

           $message = "ลูกค้าติดต่อจองที่พัก ชื่อ : ". $request['first_name'] ." นามสกุล : ".$request['last_name'].", ".$request['email'].", ".$request['phone'].", ในวันที่ : ".$request['arrive'];
          $lineapi = env('line_token');

          $mms =  trim($message);
          $chOne = curl_init();
          curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
          curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
          curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
          curl_setopt($chOne, CURLOPT_POST, 1);
          curl_setopt($chOne, CURLOPT_POSTFIELDS, "message=$mms");
          curl_setopt($chOne, CURLOPT_FOLLOWLOCATION, 1);
          $headers = array('Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'',);
          curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
          curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
          $result = curl_exec($chOne);
          if(curl_error($chOne)){
          echo 'error:' . curl_error($chOne);
          }else{
          $result_ = json_decode($result, true);
          }
          curl_close($chOne);

          $details = [
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'note' => $request['note'],
            'departure' => $request['departure'],
            'arrive' => $request['arrive'],
            ];

           $my_email = 'contact@villamaliesamui.com';

          \Mail::to($request['email'])->send(new \App\Mail\SendMail($details));
          \Mail::to($my_email)->send(new \App\Mail\SendMail2($details));


           return response()->json([
            'data' => [
              'status' => 200,
              'msg' => 'This user is verified by recaptcha.'
            ]
          ]);

    }

    public function check_out(Request $request){

      $arrive = date("Y-m-d", strtotime($request->arrive));
      $data['arrive'] = $arrive;
      if($request->departure){
        $departure = date("Y-m-d", strtotime($request->departure));
      $data['departure'] = $departure;
      }else{
        $data['departure'] = null;
      }
      if($request->adults){
      $data['adults'] = $request->adults;
      }else{
        $data['adults'] = null;
      }

      return view('check_out', $data);

    }

    public function reservation(){

      $objs = DB::table('dateorders')->select(
        'dateorders.*',
        'dateorders.id as id_q',
        'orders.*',
        )
        ->leftjoin('orders', 'orders.id',  'dateorders.order_id')
        ->where('dateorders.date_status', 1)
        ->get();

        $data['objs'] = $objs;

        $order = DB::table('dateorders')
        ->where('dateorders.date_status', 1)
        ->where('dateorder', '>=', date('Y-m-d'))
        ->get();

        $data['order'] = $order;

        return view('reservation', $data);

    }

    public function index()
    {

      $blog = news::where('status', 1)->where('type', 0)->whereDate('startdate', '<=', date("Y-m-d"))->orderby('id', 'desc')->limit(3)->get();
      $data['blog'] = $blog;
      $pack = news::where('status', 1)->where('type', 1)->whereDate('startdate', '<=', date("Y-m-d"))->orderby('id', 'desc')->limit(2)->get();
      $data['pack'] = $pack;
      $slide = slideshow::where('status', 1)->get();
      $data['slide'] = $slide;
      $review = review::where('status', 1)->get();
      $data['review'] = $review;
      $category = category::whereNotIn('id', [3])->get();
      $data['category'] = $category;

      $images = DB::table('images')->select(
        'images.*',
        'images.id as id_q',
        'categories.*',
        )
        ->leftjoin('categories', 'categories.id',  'images.cat_id')
        ->limit(12)
        ->get();
      $data['images'] = $images;

      $order = DB::table('dateorders')
        ->where('dateorders.date_status', 1)
        ->where('dateorder', '>=', date('Y-m-d'))
        ->get();

        $data['order'] = $order;

        return view('welcome', $data);
    }

    public function add_subscribe(Request $request){

      $email = $request['email'];
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);
   

      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $check_mail = subscribe::where('email', $request['email'])->count();

        if($check_mail == 0){

          $objs = new subscribe();
           $objs->email = $request['email'];
           $objs->save();

          return response()->json([
            'data' => [
              'status' => 200,
              'msg' => 'The system has successfully sent the message.!'
            ]
          ]);

        }else{

          return response()->json([
            'data' => [
              'status' => 100,
              'msg' => 'Your email is already in the system.'
            ]
          ]);

        }

      }else{

        return response()->json([
          'data' => [
            'status' => 100,
            'msg' => 'Your email format is incorrect.'
          ]
        ]);

      }

    }

    public function add_contact(Request $request){
        

      
        $secret=env('reCAPTCHA');
    //  $response = $request['captcha'];

      $captcha = "";
      if (isset($request["g-recaptcha-response"]))
        $captcha = $request["g-recaptcha-response"];

    //  $verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response");
      $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER["REMOTE_ADDR"]), true);
      //$captcha_success=json_decode($verify);

    //  dd($captcha_success);

    if($response["success"] == false) {

        return response()->json([
          'data' => [
            'status' => 100,
            'msg' => 'This user was not verified by recaptcha_1.'
          ]
        ]);

      }else{

           $objs = new contact();
           $objs->name = $request['name'];
           $objs->email = $request['email'];
           $objs->phone = $request['phone'];
           $objs->messenger = $request['massage'];
           $objs->save();


        $message = "ข้อความจากหน้าติดต่อ หัวข้อติดต่อ : ชื่อผู้ติดต่อ : ".$request['name'].", ".$request['email'].", ".$request['phone'].", ข้อความ : ".$request['massage'];
        $lineapi = env('line_token');

        $mms =  trim($message);
        $chOne = curl_init();
        curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
        curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($chOne, CURLOPT_POST, 1);
        curl_setopt($chOne, CURLOPT_POSTFIELDS, "message=$mms");
        curl_setopt($chOne, CURLOPT_FOLLOWLOCATION, 1);
        $headers = array('Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'',);
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($chOne);
        if(curl_error($chOne)){
        echo 'error:' . curl_error($chOne);
        }else{
        $result_ = json_decode($result, true);
    //    echo "status : ".$result_['status'];
    //    echo "message : ". $result_['message'];
        }
        curl_close($chOne);
  

        return response()->json([
            'data' => [
              'status' => 200,
              'msg' => 'This user is verified by recaptcha.'
            ]
          ]);
            }
    }
}
