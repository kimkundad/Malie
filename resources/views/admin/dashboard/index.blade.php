@extends('admin.layouts.template')



@section('stylesheet')

<link href="{{ url('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />

@stop('stylesheet')

@section('content')

    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            ภาพโดยรวมเว็บไซต์</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ url('dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">ดูสถิติต่างๆ</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">

                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">


                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title fw-bold">ปฏิทินการจองที่พัก</h2>

                        </div>
                        <div class="card-body">
                            <div id="kt_docs_fullcalendar_basic"></div>
                        </div>
                    </div>



                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        <div id="kt_app_footer" class="app-footer">
            <!--begin::Footer container-->
            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2024&copy;</span>
                    <a href="" target="_blank" class="text-gray-800 text-hover-primary">ที่พักพูลวิลล่า Malie เกาะสมุย (Villa Malie Koh Samui)</a>
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                    <!-- <li class="menu-item">
                        <a href="{{ url('about') }}" target="_blank" class="menu-link px-2">เกี่ยวกับวงษ์พาณิชย์</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('contatermct') }}" target="_blank" class="menu-link px-2">นโยบายส่วนบุคคล</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('contact') }}" target="_blank" class="menu-link px-2">ติดต่อเรา</a>
                    </li> -->
                </ul>
                <!--end::Menu-->
            </div>
            <!--end::Footer container-->
        </div>
        <!--end::Footer-->
    </div>

@endsection

@section('scripts')

<script src="{{ url('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function(){
      $("input:checkbox").change(function() {
        var user_id = $(this).closest('tr').attr('id');

        $.ajax({
                type:'POST',
                url:'{{url('api/api_post_status_contact')}}',
                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                data: { "user_id" : user_id },
                success: function(data){
                  if(data.data.success){


                    Swal.fire({
                        text: "ระบบได้ทำการอัพเดทข้อมูลสำเร็จ!",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });



                  }
                }
            });
        });
    });
    </script>



<script type="text/javascript">

"use strict";

// Class definition
var KTGeneralFullCalendarEventsDemos = function() {
	// Private functions

	var exampleBackgroundEvents = function() {
		// Define colors
		var green = KTUtil.getCssVariableValue('--bs-active-success');
		var red = KTUtil.getCssVariableValue('--bs-active-danger');

		// Initialize Fullcalendar -- for more info please visit the official site: https://fullcalendar.io/demos
		var calendarEl = document.getElementById('kt_docs_fullcalendar_basic');

		var calendar = new FullCalendar.Calendar(calendarEl, {
			headerToolbar: {
				left: 'prev,next today',
				center: 'title',
				right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
			},
			initialDate: '{{ date('Y-m-d') }}',
			navLinks: true, // can click day/week names to navigate views
			businessHours: true, // display business hours
			editable: true,
			selectable: true,
            eventClick: function(info) {
                var eventObj = info.event;
                alert('ชื่อผู้จอง: ' + info.event.title + ' เบอร์ติดต่อ: ' + info.event.extendedProps.description );
            },
			events: [
                @if(isset($objs))
                @foreach($objs as $u)
                @if(isset( $u->first_name ))
                {
					title: '{{ $u->first_name }}'+' {{ $u->phone }} ' + '{{$u->id}}',
					start: '{{ $u->dateorder }}',
                    color: '{{ $u->color }}',
                    description: '{{ $u->phone }}',
					constraint: 'availableForMeeting'
				},
                @endif
                @endforeach
                @endif
			],
		});

		calendar.render();
	}

	return {
		// Public Functions
		init: function() {
			exampleBackgroundEvents();
		}
	};
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
	KTGeneralFullCalendarEventsDemos.init();
});

</script>

@stop('scripts')
