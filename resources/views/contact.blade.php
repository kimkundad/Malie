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
                    <h2>CONTACT WITH US</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing</p>
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
                            <h2>Contact</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                            <ul>
                                <li><i class="icon lotus-icon-location"></i> 225 Beach Street, Australian</li>
                                <li><i class="icon lotus-icon-phone"></i> +61 2 6854 8496</li>
                                <li><i class="icon fa fa-envelope-o"></i> lotushotel@gmail.com</li>
                            </ul>
                        </div>

                        <div class="contact-location">
                            <a class="btn-collapse" data-toggle="collapse" href="#location">OTHER LOCATION <span class="fa fa-angle-down"></span></a>
                            <div class="collapse" id="location">
                                <div class="location-group">
                                    <h6>NORTH AMERICA</h6>
                                    <span>Caribbean, French West Indies</span>

                                    <!-- ITEM -->
                                    <div class="location-item" data-location="39.0926986,-94.5747324">
                                        <div class="img">
                                            <img src="images/contact/img-1.jpg" alt="">
                                            <i class="fa  fa-map-marker"></i>
                                        </div>
                                        <div class="text">
                                            <address>PO Box 4077, 2584 St Martin, CEDEX, French West Indies</address>
                                            <p>
                                                Tel: 858 634 8975 <br>
                                                Fax: +1 212 854 7039
                                            </p>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="location-item" data-location="39.0912284,-94.5743515">
                                        <div class="img">
                                            <img src="images/contact/img-2.jpg" alt="">
                                            <i class="fa  fa-map-marker"></i>
                                        </div>
                                        <div class="text">
                                            <address>PO Box 4077, 2584 St Martin, CEDEX, French West Indies</address>
                                            <p>
                                                Tel: 858 634 8975 <br>
                                                Fax: +1 212 854 7039
                                            </p>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                </div>
                            </div>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.9058651228743!2d100.05505667828884!3d9.510953683569896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3054f195a5d0f2f9%3A0xa542095004139b08!2z4LmA4Lif4Li04Lij4LmM4LiqIOC4muC4seC4h-C4geC4sOC5guC4pSDguJrguLXguIog4Lij4Li14Liq4Lit4Lij4LmM4LiX!5e0!3m2!1sth!2sth!4v1706524848451!5m2!1sth!2sth" height="470"></iframe>
        </div>
    </section>
    <!-- END / MAP -->
    
    <script src='https://www.google.com/recaptcha/api.js?hl=th'></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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