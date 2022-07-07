<?php
  include 'includes/header.php';
  include 'map/locations_model.php';
?>
  <div class="heading" style="text-align:center;margin:20px 0">CONFIRM MAPPING</div>
    <div id="map"></div>

    <div style="display: none" id="form">
      <table class="map1">
          <tr>
              <input name="id" type='hidden' id='id'/>
              <td><a>Description:</a></td>
              <td><textarea disabled id='description' placeholder='Description'></textarea></td>
          </tr>
          <tr>
              <td><b>Confirm Location ?:</b></td>
              <td><input id='confirmed' type='checkbox' name='confirmed'></td>
          </tr>
          <tr>
              <td><b>Delete ?:</b></td>
              <td><input id='deleteData' type='checkbox' name='deleteData'></td>
          </tr>

          <tr>
              <td></td>
              <td><input type='button' value='Confirm' onclick='saveData()'style="margin-right: 2px;"/><input type='button' value='Delete' onclick='deleteData()'/></td>
          </tr>
      </table>
    </div>
    
  
<footer>
  <center>
    <div>Copyright © <?php echo date('Y');?> CDRRMO</div>
    <div>All rights reserved.</div>
  </center>
</footer>
</body>
</html>
<style>
    #map {
        height: 100%;
    }
    #map a,#map b{color:#000;}
    #map td{border:none;}
</style>
<script async defer src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyAeji5o5yGuXQNLLJmuogHbbuRGXmeNXUY&callback=initMap"></script>
<script>
    var map;
    var marker;
    var infowindow;
    var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
    var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;
    var locations = <?php get_all_locations() ?>;

    function initMap() {
        var philippines = {lat: 14.0642, lng: 121.3233};
        infowindow = new google.maps.InfoWindow();
        map = new google.maps.Map(document.getElementById('map'), {
            center: philippines,
            zoom: 12
        });


        var i ; var confirmed = 0;
        for (i = 0; i < locations.length; i++) {

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon :   locations[i][4] === '1' ?  red_icon  : purple_icon,
                html: document.getElementById('form')
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    confirmed =  locations[i][4] === '1' ?  'checked'  :  0;
                    $("#confirmed").prop(confirmed,locations[i][4]);
                    $("#id").val(locations[i][0]);
                    $("#description").val(locations[i][3]);
                    $("#form").show();
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }

    function saveData() {
        var confirmed = document.getElementById('confirmed').checked ? 1 : 0;
        var id = document.getElementById('id').value;
        var url = 'map/locations_model.php?confirm_location&id=' + id + '&confirmed=' + confirmed ;
        downloadUrl(url, function(data, responseCode) {
            if (responseCode === 200  && data.length > 1) {
                infowindow.close();
                window.location.reload(true);
            }else{
                infowindow.setContent("<div style='color: purple; font-size: 25px;'>Inserting Errors</div>");
            }
        });
    }

    function deleteData() {
        var deleteData = document.getElementById('deleteData').checked ? 1 : 0;
        var id = document.getElementById('id').value;
        var url = 'map/locations_model.php?delete_location&id=' + id;
        downloadUrl(url, function(data, responseCode) {
            if (responseCode === 200  && data.length > 1) {
                infowindow.close();
                window.location.reload(true);
            }else{
                infowindow.setContent("<div style='color: purple; font-size: 25px;'>Deletion Errors</div>");
            }
        });
    }


    function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
            if (request.readyState == 4) {
                callback(request.responseText, request.status);
            }
        };

        request.open('GET', url, true);
        request.send(null);
    }


</script>
