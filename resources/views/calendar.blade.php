<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">



                    <head>
                        <title>Calendario anual</title>
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
                    </head>

                    <body>

                        <div class="container">
                            <div class="jumbotron">
                                <div class="container text-center">
                                    <header>

                                        <div class="p-5 text-center bg-image" style="
                        background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/059.webp');
                        height: 300px;
                        margin-top: 58px;
                      ">
                                            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                                                <div class="d-flex justify-content-center align-items-center h-100">
                                                    <div class="text-white">
                                                        <h1 class="mb-3">Administrar Calendario</h1>
                                                        <h4 class="mb-3">Club atletismo El Gaitero</h4>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </header>
                                </div>
                            </div>
                            <div id='calendar'></div>

                        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@2.9.0/dist/lang/es.js"></script>
    <script src='fullcalendar/fullcalendar.js'></script>
    <script src='fullcalendar/lang/es.js'></script>
    <script src='lib/moment.js'></script>
    <script src='lib/jquery-ui.custom-datepicker.js'></script>
    <script src='fullcalendar/fullcalendar.js'></script>
    <script src='fullcalendar/lang-all.js'></script>
    <script>

        $(document).ready(function() {
            

                                var SITEURL = "{{ url('/') }}";

                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });

            var calendar = $('#calendar').fullCalendar({
                timeZone: 'local',
                locale: 'es',
                editable: true,
                events: SITEURL + "/fullcalendar",
                displayEventTime: false,
                editable: true,
                lang: 'es',
                
                eventRender: function(event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                selectable: true,
                selectHelper: true,
                select: async function(start, end, allDay) {
                    let title;
                    await swal({
                        text: 'Introduzca un evento',
                        content:"input",
                        button:{
                            text:"Aceptar"
                        }
                    })
                    .then(inputValue => {
                        if (!inputValue) throw null;
                        title = inputValue;
                    });
                    
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
                            },
                            type: "POST",
                            success: function(data) {
                                
                                displayMessage("Evento creado correctamente");

                                                    calendar.fullCalendar('renderEvent', {
                                                        id: data.id,
                                                        title: title,
                                                        start: start,
                                                        end: end,
                                                        allDay: allDay
                                                    }, true);

                                                    calendar.fullCalendar('unselect');
                                                }
                                            });
                                        };
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
                                        var deleteMsg = swal({
                                            title: "Evento creado!",
                                            text: "",
                                            icon: "success",
                                        });
                                        if (deleteMsg) {
                                            $.ajax({
                                                type: "POST",
                                                url: SITEURL + '/fullcalendar-ajax',
                                                data: {
                                                    id: event.id,
                                                    type: 'delete'
                                                },
                                                success: function(response) {
                                                    calendar.fullCalendar('removeEvents', event.id);
                                                    swal({
                                                            title: "Borrar evento",
                                                            text: "¿Estas seguro? Si eliminas el evento tendrás que volver a crearlo",
                                                            icon: "warning",
                                                            buttons: true,
                                                            dangerMode: true,
                                                        })
                                                        .then((willDelete) => {
                                                            if (willDelete) {
                                                                swal("Tu evento ha sido eliminado", {
                                                                    icon: "success",
                                                                });
                                                            } else {
                                                                swal("No has eliminado el evento");
                                                            }
                                                        });
                                                }
                                            });
                                        }
                                    }

                                });

                            });

                            function displayMessage(message) {
                                toastr.success(message, 'Event');
                            }
                        </script>
                </div>
                </body>


            </div>
        </div>
    </div>
    </div>
</x-app-layout>

<style>

    .jumbotron{
        background-color: transparent
    }
</style>