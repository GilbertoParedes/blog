<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <!-- admin section styles -->
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/admin/bootstrap.min.css') }}" rel="stylesheet">
    <!--external css-->
    <!-- <link href="{{ asset('css/admin/font-awesome.css') }}" rel="stylesheet" /> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/zabuto_calendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/jquery.gritter.css') }}" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/style-responsive.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('css/admin/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/bootstrap-fileupload.css') }}" rel="stylesheet">

</head>
<body>

    <section id="container">

        @include('admin.partials.header')
        @yield('content')
        @include('admin.partials.footer')
    
    </section>
    <script src="{{ asset('js/admin/jquery.min.js') }}"></script>

    <script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ asset('js/admin/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('js/admin/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('js/admin/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/admin/jquery.sparkline.js') }}"></script>
    <!--common script for all pages-->
    <script src="{{ asset('js/admin/common-scripts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/jquery.gritter.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/gritter-conf.js') }}"></script>
    <!--script for this page-->
    <script src="{{ asset('js/admin/sparkline-chart.js') }}"></script>
    <script src="{{ asset('js/admin/zabuto_calendar.js') }}"></script>
    <script defer src="{{ asset('js/admin/all.js') }}"></script>
    <script src="{{ asset('js/admin/Chart.js') }}"></script>
    <script src="{{ asset('js/admin/jquery-ui-1.9.2.custom.min.js') }}"></script>
    <script src="{{ asset('js/admin/bootstrap-fileupload.js') }}"></script>

    <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>

</body>
</html>