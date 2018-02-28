</div>

            </div>
          </div>
                    <!-- Main Container End -->


</div>
<!-- End page wrapper -->
<script>
    var resizefunc = [];
</script>
<?php if($jquery){ ?>
<!-- jQuery  -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
<?php } ?>

<?php if($jquery_knob){ ?>
<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
<![endif]-->
<script src="<?php echo base_url('assets/plugins/jquery-knob/jquery.knob.js'); ?>"></script>
<?php } ?>

<?php if($morris){ ?>
<!--Morris Chart-->
<script src="<?php echo base_url('assets/plugins/morris/morris.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/raphael/raphael-min.js'); ?>"></script>
<?php } ?>

<?php if(@$datepicker){ ?>
<!--datepicker Chart-->
<script src="<?php echo base_url('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
<?php } ?>

<?php if(@$select2){ ?>
<script src="<?php echo base_url('assets/plugins/select2/dist/js/select2.min.js"'); ?>" type="text/javascript"></script>
<?php } ?>

<?php if(@$switchery){ ?>
<script src="<?php echo base_url('assets/plugins/switchery/switchery.min.js'); ?>"  type="text/javascript"></script>
<?php } ?>
<!-- General Javascript --->
<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>

<?php if(@$select2){ ?>
<script src="<?php echo base_url('assets/plugins/custombox/dist/custombox.min.js"'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/custombox/dist/legacy.min.js"'); ?>" type="text/javascript"></script>
<?php } ?>

<?php if($page){ ?>
  <!--Page script-->
  <script src="<?php echo base_url('assets/pages/'.$page.'.js'); ?>"></script>
<?php } ?>
<!-- Load jQuery from CDN so can run demo immediately -->
<script src="<?php echo base_url('assets/plugins/intl-tel-input/js/intlTelInput.min.js"'); ?>">></script>
<script>

  $(document).ready(function() {
   $(".disabled_link").click(function() {
     alert('Not Activated yet');
     return false;
   });
});
</script>
<?php if(@$js){ ?>
  <!--Page script-->
  <script><?php echo $js; ?></script>
<?php } ?>



    <script>
      var map;

      function initMap() {
      var directionsService = new google.maps.DirectionsService;
      var directionsDisplay = new google.maps.DirectionsRenderer;
      map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 25.2786062, lng: 51.5309482},
        zoom: 14
      });
      directionsDisplay.setMap(map);

      document.getElementById('submit').addEventListener('click', function() {
        calculateAndDisplayRoute(directionsService, directionsDisplay);
      });
    }


    function calculateAndDisplayRoute(directionsService, directionsDisplay) {
      var waypts = [
        {location: {lat: 25.299179, lng: 51.4959735}, stopover: true},
        {location: {lat:25.2991838, lng: 51.4992994}, stopover: true},
        {location: {lat:25.283566, lng: 51.5044396}, stopover: true},
        {location: {lat:25.2683081, lng: 51.5132849}, stopover: true}
      ];

      console.log(waypts);
      directionsService.route({
        origin: {lat: 25.2770174, lng: 51.452827},
        destination: {lat: 25.2770174, lng: 51.452827},
        waypoints: waypts,
        optimizeWaypoints: true,
        travelMode: 'DRIVING'
      }, function(response, status) {
        if (status === 'OK') {
          directionsDisplay.setDirections(response);
          var route = response.routes[0];

          for (var i = 0; i < route.legs.length; i++) {
            var routeSegment = i + 1;

          }
        } else {
          window.alert('Directions request failed due to ' + status);
        }
      });
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANqbBcDWvBP7P9OWwladEy52QSjs0fni8&callback=initMap"
    async defer></script>

</body>
</html>
