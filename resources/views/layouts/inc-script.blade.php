    
    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="{{ url('home/js/lib/jquery-1.11.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('home/js/lib/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('home/js/lib/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('home/js/lib/bootstrap-select.js') }}"></script>
    <script type="text/javascript" src="{{ url('home/js/lib/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('home/js/lib/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('home/js/lib/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('home/js/lib/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ url('home/js/lib/jquery.appear.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('home/js/lib/jquery.countTo.js') }}"></script>
    <script type="text/javascript" src="{{ url('home/js/lib/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('home/js/lib/jquery.parallax-1.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ url('home/js/lib/jquery.magnific-popup.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
    <!-- validate -->
    <script type="text/javascript" src="{{ url('home/js/lib/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('home/js/lib/jquery.validate.min.js') }}"></script>
    <!-- Custom jQuery -->
    <script type="text/javascript" src="{{ url('home/js/scripts.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>

        $(document).on('click','#get_subscribe',function (event) {
              event.preventDefault();
              
              var form = $('#subscribeForm')[0];
              var formData = new FormData(form);
              var email = document.getElementById("subscribeForm_email").value;

              if(email == ''){
                swal("กรูณา ป้อนข้อมูลให้ครบถ้วน");
                }else{

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="token"]').attr('value')
                        }
                    });
                    $.ajax({
          url: "{{url('/api/add_subscribe')}}",
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
                $("#subscribeForm_email").val('');
            
              }else{
                
                swal(data.data.msg);
              }
          },
          error: function () {
          }
      });

                }

        });


            </script>

    