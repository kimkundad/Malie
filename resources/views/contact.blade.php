@extends('layouts.template2')

    @section('title')
    ติดต่อเรา ที่พักพูลวิลล่า Malie เกาะสมุย (Villa Malie Kor Samui)
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
iframe {
    border: 0;
    max-width: 100%;
    width: 100%;
}
    </style>

    @stop('stylesheet')

    @section('content')

   <!-- SUB BANNER -->
   <section class="section-sub-banner bg-9">
        <div class="sub-banner">
            <div class="container">
                <div class="text text-center">
                    <h2>
                        @if(session()->get('locale') == 'en')
                    CONTACT WITH US
                    @else
                    ติดต่อกับเรา
                    @endif
                    </h2>
                    @if(session()->get('locale') == 'en')
                    <p>Convenient and fast booking with support
                        Before booking and after booking a house</p>
                    @else
                    <p>จองสะดวก รวดเร็ว พร้อม support
                        ก่อนจอง และหลังจองบ้านพัก</p>
                    @endif
                </div>
            </div>

        </div>
    </section>
    <!-- END / SUB BANNER -->

    <!-- CONTACT -->
    <section class="section-contact">
        <div class="container">
            <div class="contact">  
                <div class="row">

                    <div class="col-md-6 col-lg-5">

                        <div class="text">
                            <h2>@if(session()->get('locale') == 'en')
                                CONTACT
                                @else
                                ติดต่อเรา
                                @endif</h2>
                                    @if(session()->get('locale') == 'en')
                                    <p>Convenient and fast booking with support
                                        Before booking and after booking a house Stay safe. Get the right house
                                        Ready to have an admin answer questions that customers have quickly and promptly.
                                        Confirmed from reviews of our customers.</p>
                                    @else
                                    <p>จองสะดวก รวดเร็ว พร้อม support
                                        ก่อนจองและหลังจองบ้านพัก เข้าพักได้อย่างปลอดภัย ได้บ้านที่ตรงปก
                                        พร้อมมีแอดมินตอบคำถามที่ลูกค้าสงสัยได้รวดเร็ว ทันใจ
                                        คอนเฟิร์มจากรีวิวของลูกค้าของเรา</p>
                                    @endif
                            <ul>
                                <li><i class="icon lotus-icon-location"></i> 
                                    @if(session()->get('locale') == 'en')
                                    20/125 The Bay Ridge (Villa 2) Surat Thani
                                    @else
                                    20/125 The Bay Ridge (Villa 2) สุราษฎร์ธานี
                                    @endif
                                </li>
                                <li><i class="icon lotus-icon-phone"></i> <a href="tel:{{ get_phone() }}">{{ get_phone() }}</a></li>
                                <li><i class="icon fa fa-envelope-o"></i> <a href="mailto:{{ get_email() }}">{{ get_email() }}</a></li>
                            </ul>
                        </div>

                        

                    </div>

                    <div class="col-md-6 col-lg-6 col-lg-offset-1">
                        <div class="contact-form">
                            <form id="contactForm" action="send_mail_contact.php" method="post"> 
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="field-text"  name="name" id='name' placeholder="Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="field-text" name="email" id='email' placeholder="Email">
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="text" class="field-text" name="phone" id='phone' placeholder="phone number">
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="g-recaptcha" data-sitekey="6LdQnlkUAAAAAOfsIz7o-U6JSgrSMseulLvu7lI8"></div>
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea cols="30" rows="10" name="message"  class="field-textarea" id='massage' placeholder="Write what do you want"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <button id="btnSendData" class="awe-btn awe-btn-13">SEND</button>
                                    </div>
                                </div>
                                <div id="contact-content"></div>
                            </form>
                        </div>
                    </div>

                </div>  
            </div>
        </div>
    </section>
    <!-- END / CONTACT -->

    <!-- MAP -->
    <section class="section-map">
        <h1 class="element-invisible">Map</h1>
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3934.3290995401935!2d100.06300347502551!3d9.566872990517542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOcKwMzQnMDAuNyJOIDEwMMKwMDMnNTYuMSJF!5e0!3m2!1sen!2sth!4v1706783769751!5m2!1sen!2sth" height="470"></iframe>
        </div>
    </section>
    <!-- END / MAP -->
    
    <script src='https://www.google.com/recaptcha/api.js?hl=th'></script>
    

    @endsection

    @section('scripts')
    
        <script>

$(document).on('click','#btnSendData',function (event) {
      event.preventDefault();
      
      var form = $('#contactForm')[0];
      var formData = new FormData(form);
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var msg = document.getElementById("massage").value;
      var phone = document.getElementById("phone").value;
        console.log(formData)

    if(name == '' || msg == '' || email == '' || phone == ''){
      swal("กรูณา ป้อนข้อมูลให้ครบถ้วน");
    }else{
      
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="token"]').attr('value')
        }
    });
      $.ajax({
          url: "{{url('/api/add_contact')}}",
          headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
          data: formData,
          processData: false,
          contentType: false,
          cache:false,
          type: 'POST',
          success: function (data) {
          //  console.log(data.data.status)
              if(data.data.status == 200){
                swal("Good job!", "The system has successfully sent the message.!", "success");
                $('#success_popup').modal('show');
                $("#name").val('');
                $("#massage").val('');
                $("#email").val('');
                $("#phone").val('');
              setTimeout(function(){
                //    window.location.replace("{{url('clients/success_payment/')}}/"+data.data.value);
              }, 3000);
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