@extends('layouts.template2')

    @section('title')
    ตารางการจองที่พักพูลวิลล่า Malie เกาะสมุย (Villa Malie Kor Samui)
    @stop

    @section('og')
    
    @stop('og')

    @section('stylesheet')

    <link href="{{ url('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />

    <style>
        .center-block {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
    </style>

    @stop('stylesheet')

    @section('content')

    <!-- SUB BANNER -->
    <section class="section-sub-banner bg-9">

        <div class="awe-overlay"></div>

        <div class="sub-banner">
            <div class="container">
                <div class="text text-center">
                    @if(session()->get('locale') == 'en')
                        <h2>RESERVATION</h2>
                        <p>Pool Villa Reservation Schedule</p>
                    @else
                        <h2>ตารางการจอง</h2>
                        <p>ค้นหาวันที่สามารถจองที่พักได้</p>
                    @endif
                    
                </div>
            </div>

        </div>

    </section>
    <!-- END / SUB BANNER -->

    <!-- RESERVATION -->
    <section class="section-reservation-page bg-white">

        <div class="container">
            <div class="reservation-page">
                
                <!-- STEP -->
                <div class="reservation_step">
                    <ul>
                        @if(session()->get('locale') == 'en')
                        <li class="active"><a href="#">  Reservation schedule for Pool Villa Malie Koh Samui (Villa Malie Kor Samui)</a></li>
                        @else
                        <li class="active"><a href="#">  ตารางการจองพักพูลวิลล่า Malie เกาะสมุย (Villa Malie Kor Samui)</a></li>
                        @endif
                        
                    </ul>
                </div>
                <!-- END / STEP -->

                <div class="row">
                    
                    <div class="col-md-4 col-lg-3">

                        <div class="reservation-sidebar">

                            <!-- SIDEBAR AVAILBBILITY -->
                            <div class="reservation-sidebar_availability bg-gray">
                                <form id="ajax-form-search-room" action="{{ url('/check_out') }}" method="get">

                                <!-- HEADING -->
                                <h2 class="reservation-heading">YOUR RESERVATION</h2>
                                <!-- END / HEADING -->

                                <h6 class="check_availability_title">your stay dates</h6>
                                    
                                <div class="check_availability-field">
                                    <label>Arrive</label>
                                    <input type="text" name="arrive" class="awe-calendar awe-input from" placeholder="Arrive">
                                </div>
                                
                                <div class="check_availability-field">
                                    <label>Depature</label>
                                    <input type="text" name="departure" class="awe-calendar awe-input to" placeholder="Depature">
                                </div>
                                
                                <h6 class="check_availability_title">GUest</h6>
                                
                                <div class="check_availability-field">
                                    <label>All guests</label>
                                    <select class="awe-select" name="adults">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                    </select>
                                </div>

                                <button type="submit" class="awe-btn awe-btn-13">CHECK AVAILABLE</button>
                                </form>
                            </div>
                            <!-- END / SIDEBAR AVAILBBILITY -->

                        </div>

                    </div>
                    
                    <div class="col-md-8 col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <br>
                                <div id="kt_docs_fullcalendar_basic"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </section>
    <!-- END / RESERVATION -->


    @endsection



    @section('scripts')

    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.11/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.11/index.global.min.js'></script>
    
    <script type="text/javascript">

document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('kt_docs_fullcalendar_basic');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
				left: 'prev,next today',
				center: 'title',
				right: ''
			},
			initialDate: '{{ date('Y-m-d') }}',
			navLinks: true, // can click day/week names to navigate views
			businessHours: true, // display business hours
			editable: true,
			selectable: true,
			events: [
                @if(isset($objs))
                @foreach($objs as $u)
                {
					title: ' จองแล้ว ',
					start: '{{ $u->dateorder }}',
                    description: '{{ $u->phone }}',
					constraint: 'availableForMeeting'
				},
                @endforeach
                @endif
			],
        });
        calendar.render();
      });



       
       
        
        </script>


<script>

    /* Datepicker */
DatePicker();
function DatePicker() {
    $(".awe-calendar:not(.from, .to)").datepicker({
        prevText: '<i class="lotus-icon-left-arrow"></i>',
        nextText: '<i class="lotus-icon-right-arrow"></i>',
        buttonImageOnly: false,
    });

    var highlightedDays = [
        @if(isset($order))
        @foreach($order as $u)
        '{{ $u->dateorder }}', 
        @endforeach
        @endif
    ];

    // var highlightedDays = [
    //     '2024-02-26', 
    //     '2024-02-28', 
    //     '2024-03-28'
    // ];

    /* Datepicker from - to */
    $(".awe-calendar.from").datepicker({
        prevText: '<i class="lotus-icon-left-arrow"></i>',
        nextText: '<i class="lotus-icon-right-arrow"></i>',
        beforeShowDay: function(date) {
            var dateString = jQuery.datepicker.formatDate('yy-mm-dd', date);
            // Check if the date should be highlighted
            if ($.inArray(dateString, highlightedDays) !== -1) {
              return [false, 'highlighted-day'];
            }
            // Check if the date should be disabled
            else if ($.inArray(dateString, highlightedDays) !== -1) {
              return [false, 'disabled'];
            }
            return [true, ''];
           },
        buttonImageOnly: false,
        minDate: 0,
        onClose: function (selectedDate) {
            var newDate = new Date(selectedDate),
                tomorrow = new Date(newDate.getTime() + 24 * 60 * 60 * 1000),
                nextDate = (tomorrow.getMonth() + 1) + '/' + tomorrow.getDate() + '/' + tomorrow.getFullYear();
            $(".awe-calendar.to").datepicker("option", "minDate", nextDate).focus();
        }
    });
    $(".awe-calendar.to").datepicker({
        prevText: '<i class="lotus-icon-left-arrow"></i>',
        nextText: '<i class="lotus-icon-right-arrow"></i>',
        beforeShowDay: function(date) {
            var dateString = jQuery.datepicker.formatDate('yy-mm-dd', date);
            // Check if the date should be highlighted
            if ($.inArray(dateString, highlightedDays) !== -1) {
              return [false, 'highlighted-day'];
            }
            // Check if the date should be disabled
            else if ($.inArray(dateString, highlightedDays) !== -1) {
              return [false, 'disabled'];
            }
            return [true, ''];
           },
        buttonImageOnly: false,
        minDate: 0,
        onClose: function (selectedDate) {
            //$(".awe-calendar.from").datepicker( "option", "maxDate", selectedDate );
        }
    });
}


</script>
    
    @stop('scripts')