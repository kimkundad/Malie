@extends('layouts.template2')

    @section('title')
    CHECKOUT ที่พักพูลวิลล่า Malie เกาะสมุย (Villa Malie Koh Samui)
    @stop

    @section('og')
    
    @stop('og')

    @section('stylesheet')

    <style>
        .center-block {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.checkout .checkout_cartinfo p {
    margin-bottom: 0;
    margin-top: 5px;
    font-weight: bold;
    font-size: 16px;
    font-family: 'Montserrat';
    color: #000;
}
    </style>

    @stop('stylesheet')

    @section('content')


    <!-- SUB BANNER -->
    <section class="section-sub-banner bg-9">
        <div class="awe-overlay"></div>
        <div class="sub-banner">
            <div class="container">
                
                @if(session()->get('locale') == 'en')
                <div class="text text-center">
                    <h2>Confirm booking information</h2>
                    <p>You will be required to confirm your booking information to use the service.</p>
                </div>
                @else
                <div class="text text-center">
                    <h2>ยืนยันข้อมูลการจอง</h2>
                    <p>ท่านจะต้องยืนยันข้อมูลการจองสำหรับการใช้บริการ</p>
                </div>
                @endif
            </div>

        </div>

    </section>
    <!-- END / SUB BANNER -->
    
    <!-- ABOUT -->
    <section class="section-about">
        <div class="container">

            <div class="checkout">

                <div class="row">
                    <div class="col-md-6">
                        @if(session()->get('locale') == 'en')
                        <div class="checkout_head">
                            <h3>booking details</h3>
                            <span>Please fill in your booking information.</span>
                        </div>
                        @else
                        <div class="checkout_head">
                            <h3>ข้อมูลการจอง</h3>
                            <span>กรูณากรอกข้อมูลการจองของคุณ</span>
                        </div>
                        @endif
                        <form class="ps-form--contact-us" id="contactFormxx">
                        <div class="checkout_form">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6">
                                    <label>First Name*</label>
                                    <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" class="field-text">
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <label>Last Name*</label>
                                    <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" class="field-text">
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <label>Email Address*</label>
                                    <input type="text" name="email" id="email" value="{{ old('email') }}" class="field-text">
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <label>Phone*</label>
                                    <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="field-text">
                                    <input type="hidden" name="arrive" id="arrive" value="{{ $arrive }}" class="field-text">
                                    <input type="hidden" name="departure" id="departure" value="{{ $departure }}" class="field-text">
                                    <input type="hidden" name="adults" id="adults" value="{{ $adults }}" class="field-text">
                                </div>
                                <div class="col-xs-12 col-sm-12">
                                    <label>Order Notes</label>
                                    <textarea class="field-textarea" name="note" id="note" placeholder="Notes about your order, eg. special notes for delivery">{{ old('note') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </form>

                    </div>
                    <div class="col-md-6">
                        <div class="checkout_form checkout_margin">
                            <div class="checkout_cartinfo">
                                <p><span>วันที่จอง:</span> {{ $arrive }} - {{ $departure }}</p>
                                <p><span>จำนวนคน:</span> {{ $adults }}</p>
                            </div>
                            <div class="checkout_option">
                                <ul>
                                    <li>
                                        <input type="radio" class="radio payment-methor" name="payment">
                                        <h6>ข้อตกลงและเงื่อนไข (Terms & Conditions)</h6><br>
                                        <a class="text-primary" href="{{ url('/term_condition') }}">ฉันยอมรับเงื่อนไขทุกประการตามข้อตกลงนี้ และตามนโยบายข้อมูลส่วนบุคคลของบริษัท</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="checkout_btn">
                                <a id="btn_submitx" class="awe-btn awe-btn-13 btn-order">PLACE ORDER</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END / ABOUT -->

  


    @endsection

    @section('scripts')
    
        <script>


$(document).on('click','#btn_submitx',function (event) {
      event.preventDefault();
      
      var form = $('#contactFormxx')[0];
      var formData = new FormData(form);
      var first_name = document.getElementById("first_name").value;
      var last_name = document.getElementById("last_name").value;
      var phone = document.getElementById("phone").value;
      var email = document.getElementById("email").value;
      var note = document.getElementById("note").value;
      var arrive = document.getElementById("arrive").value;
      var departure = document.getElementById("departure").value;
      var adults = document.getElementById("adults").value;

      if(first_name == '' || last_name == '' || phone == '' || email == '' || arrive == ''){
      swal("Please enter information completely.");
    }else{

        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="token"]').attr('value')
        }
    });
      $.ajax({
          url: "{{url('/api/add_myorders')}}",
          headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
          data: formData,
          processData: false,
          contentType: false,
          cache:false,
          type: 'POST',
          success: function (data) {
          //  console.log(data.data.status)
              if(data.data.status == 200){
                setTimeout(function(){
                    $.LoadingOverlay("hide");
                }, 0);

                swal("Good job!", "The system has successfully sent the message.!", "success");
       
                $("#first_name").val('');
                $("#last_name").val('');
                $("#email").val('');
                $("#phone").val('');
                $("#note").val('');

                setTimeout(function(){
                        window.location.replace("{{url('/')}}");
                }, 4000);
              }else{
               
                swal("กรูณา ป้อนข้อมูลให้ครบถ้วน");
              }
          },
          error: function () {
          }
      });

    }

});
    
        </script>
    
    @stop('scripts')