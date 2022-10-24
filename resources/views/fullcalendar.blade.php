@extends('layouts.main')
@section("title", "Calendario")
@section("content")


<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
            <div class="p-6 bg-white border-b border-gray-200">
<div class="container">
    <div class="jumbotron">
        <div class="container text-center">

        </div>
        <header>

            <div class="p-5 text-center bg-image" style="
                    background-image: url('https://images.pexels.com/photos/3905827/pexels-photo-3905827.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
                    height: 300px;
                    margin-top: 58px;
                  ">
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white">
                            <h1 class="mb-3">CALENDARIO ANUAL</h1>
                            <h4 class="mb-3">Club atletismo El Gaitero</h4>

                        </div>
                    </div>
                </div>
            </div>

        </header>
    </div>
</div>
          
        </div>
    <div class="mb-5" id='calendar'>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@2.9.0/dist/lang/es.js"></script>
<script>
    $(document).ready(function() {

        var SITEURL = "{{ url('/') }}";

        $.ajaxSetup({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),

            }

        });

        var calendar = $('#calendar').fullCalendar({

            timeZone: 'local',
            locale: 'es',
            editable: false,
            events: SITEURL + "/fullcalendar",
            displayEventTime: false,
            editable: false,



            eventRender: function(event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
            selectable: false,
            selectHelper: false,

            select: function(start, end, allDay) {
                var title = prompt('Event Title:');
                if (title) {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                    $.ajax({
                        url: SITEURL + "/fullcalendar-ajax",
                        data: {
                            title: title,
                            start: start,
                            end: end,
                            type: 'add'
                        }

                    });
                }
            },
            eventDrop: function(event, delta) {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

                $.ajax({
                    url: SITEURL + '/fullcalendar-ajax',
                    data: {
                        title: event.title,
                        start: start,
                        end: end,
                        id: event.id,
                        type: 'update'
                    },
                    type: "POST",
                    success: function(response) {
                        displayMessage("Event Updated Successfully");
                    }
                });
            },
            eventClick: function(event) {

                if (deleteMsg) {
                    $.ajax({
                        type: "POST",
                        url: SITEURL + '/fullcalendar-ajax',
                        data: {
                            id: event.id,
                            type: 'delete'
                        },

                    });
                }
            }

        });

    });

    function displayMessage(message) {
        toastr.success(message, 'Event');
    }
</script>

@endsection
