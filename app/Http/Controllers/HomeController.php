<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
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
        ->whereNotIn('images.cat_id', [3, 6])
        ->get();
      $data['images'] = $images;

      $category = category::whereNotIn('id', [3, 6])->orderby('sort', 'asc')->get();
      $data['category'] = $category;

      return view('gallery', $data);
    }

    public function add_myorders(Request $request){

           if (!$this->verifyRecaptcha($request)) {
             return response()->json([
               'data' => [
                 'status' => 100,
                 'msg' => 'Please confirm that you are not a robot.'
               ]
             ]);
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
           $objs->save();

          $details = [
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'note' => $request['note'],
            'departure' => $request['departure'],
            'arrive' => $request['arrive'],
            'children' => $request['children'],
            'pets' => $request['pets'],
            'adults' => $request['adults'],
            ];

           $my_email = 'contact@villamaliesamui.com';

          // The booking is already saved, so a mail failure must not break the response.
          try {
            \Mail::to($request['email'])->send(new \App\Mail\SendMail($details));
          } catch (\Throwable $e) {
            Log::error('Booking mail to customer failed: '.$e->getMessage());
          }
          try {
            \Mail::to($my_email)->send(new \App\Mail\SendMail2($details));
          } catch (\Throwable $e) {
            Log::error('Booking mail to admin failed: '.$e->getMessage());
          }


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

      $data['children'] = $request->children;
      $data['pets'] = $request->pets;
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

    public function about(){

      $images = DB::table('images')->select(
        'images.*',
        'images.id as id_q',
        'categories.*',
        )
        ->leftjoin('categories', 'categories.id',  'images.cat_id')
        ->whereIn('images.cat_id', [6])
        ->limit(12)
        ->get();

      $data['images'] = $images;

      return view('about', $data);
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
      $category = category::whereNotIn('id', [3, 6])->orderby('sort', 'asc')->get();
      $data['category'] = $category;

      $images = DB::table('images')->select(
        'images.*',
        'images.id as id_q',
        'categories.*',
        )
        ->leftjoin('categories', 'categories.id',  'images.cat_id')
        ->whereNotIn('images.cat_id', [3, 6])
        ->inRandomOrder()
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

    if(!$this->verifyRecaptcha($request)) {

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
           $objs->type = $request['type'];
           $objs->messenger = $request['massage'];
           $objs->save();

        return response()->json([
            'data' => [
              'status' => 200,
              'msg' => 'This user is verified by recaptcha.'
            ]
          ]);
            }
    }

    /**
     * Verify a reCAPTCHA v2 token (g-recaptcha-response) with Google.
     */
    private function verifyRecaptcha(Request $request)
    {
      $token = $request->input('g-recaptcha-response');

      if (empty($token)) {
        return false;
      }

      try {
        $response = Http::asForm()->timeout(10)->post('https://www.google.com/recaptcha/api/siteverify', [
          'secret' => config('services.recaptcha.secret'),
          'response' => $token,
          'remoteip' => $request->ip(),
        ]);

        return $response->successful() && $response->json('success') === true;
      } catch (\Throwable $e) {
        Log::warning('reCAPTCHA verify error: '.$e->getMessage());
        return false;
      }
    }
}
