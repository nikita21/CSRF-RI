var map;
var geocoder;
var bounds = new google.maps.LatLngBounds();

var directionsDisplay;
var directionsService = new google.maps.DirectionsService();

var destinationIcon = 'https://chart.googleapis.com/chart?chst=d_map_pin_letter&chld=D|FF0000|000000';
var originIcon = 'https://chart.googleapis.com/chart?chst=d_map_pin_letter&chld=O|FFFF00|000000';

/* This function first checks if the request is from post_page (x=1) where user gives the from,to,etc. or
 * from other pages (x=0) where {{post}} from,to,etc. are already stored in database
 * It also check is 'from' is equal to 'to' if it is then it gives an alert,clears the 'to' field and gives focus to it, resets map.
 * Finally it calcuates route and prints it on the page :) 
 */
function checkSame() {
    var start = document.getElementById('fro').value;
    var end = document.getElementById('to').value;
    if(start == end){
      alert("From and To Locations can't be same!");
      setTimeout(function()
        {
          document.getElementById("to").value="";
          document.getElementById("to").focus();
          initialize();
        }, 100);
    }
    else if (document.getElementById("datetime").value == "")
    {
        alert("Please enter a valid date & time");
    }
    else {
        document.getElementById("postform").submit();
    }
}
function calcRoute(x) {
  var waypts = [];
  if(x==1){
    var start = document.getElementById('fro').value;
    var end = document.getElementById('to').value;
    var waypt1 = document.getElementById('point1').value;
    var waypt2 = document.getElementById('point2').value;
  }else{
    {% if post is defined %}
      var start = "{{ post.fro }}";
      var end =   "{{ post.to }}";
      var waypt1 = "{{ post.point1 }}";
      var waypt2 = "{{ post.point2 }}"; 
    {% endif %}
    }
  if(waypt1 != ""){
      waypts.push({location:waypt1, stopover:true});
    }
  if(waypt2 != ""){
      waypts.push({location:waypt2, stopover:true});
    }
  if(start != "" && end != ""){
    var request = {
        origin:start,
        destination:end,
        waypoints:waypts,
        optimizeWaypoints:true,
        travelMode: google.maps.TravelMode.DRIVING,
        provideRouteAlternatives: false
        
    };
    directionsService.route(request, function(response, status) {
      if (status == google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(response);
        if(x==1){
          var route = response.routes[0];
          var summaryPanel = document.getElementById('directions_panel');
          summaryPanel.innerHTML = '';
          // For each route, display summary information.
          for (var i = 0; i < route.legs.length; i++) {
          var routeSegment = i + 1;
          summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment + '</b><br>';
          summaryPanel.innerHTML += route.legs[i].start_address.substring(0,route.legs[i].start_address.indexOf(',')) + ' to ';
          summaryPanel.innerHTML += route.legs[i].end_address.substring(0,route.legs[i].end_address.indexOf(',')) +'<br>';
          summaryPanel.innerHTML += 'Estimated Distance : ' + route.legs[i].distance.text+'<br>';
          summaryPanel.innerHTML += 'Estimated Time : ' + route.legs[i].duration.text + '<hr>';
          }
        }
      }
    });
  }
}

// Function to calculate dustance

// function calculateDistances(o1,d1) {
//   origin1 = o1;
//   destinationA = d1;
//   var service = new google.maps.DistanceMatrixService();
//   service.getDistanceMatrix(
//     {
//       origins: [origin1],
//       destinations: [destinationA],
//       travelMode: google.maps.TravelMode.DRIVING,
//       unitSystem: google.maps.UnitSystem.METRIC,
//       avoidHighways: false,
//       avoidTolls: false
//     }, callback);
// }

// function callback(response, status) {
//   if (status != google.maps.DistanceMatrixStatus.OK) {
//     alert('Error was: ' + status);
//   } else {
//     var origins = response.originAddresses;
//     var destinations = response.destinationAddresses;
//     var outputDiv = document.getElementById('outputDiv');
//     outputDiv.innerHTML = '';
    // deleteOverlays();

    // for (var i = 0; i < origins.length; i++) {
    //   var results = response.rows[i].elements;
    //   addMarker(origins[i], false);
    //   for (var j = 0; j < results.length; j++) {
    //     addMarker(destinations[j], true);
    //     outputDiv.innerHTML += origins[i] + ' to ' + destinations[j]
    //         + ': ' + results[j].distance.text + ' in '
    //         + results[j].duration.text + '<br>';
    //   }
    // }
//   }
// }

// function addMarker(location, isDestination) {
//   var icon;
//   if (isDestination) {
//     icon = destinationIcon;
//   } else {
//     icon = originIcon;
//   }
//   geocoder.geocode({'address': location}, function(results, status) {
//     if (status == google.maps.GeocoderStatus.OK) {
//       bounds.extend(results[0].geometry.location);
//       map.fitBounds(bounds);
//       var marker = new google.maps.Marker({
//         map: map,
//         position: results[0].geometry.location,
//         icon: icon
//       });
//       markersArray.push(marker);
//     } else {
//       alert('Geocode was not successful for the following reason: '
//         + status);
//     }
//   });
// }

// function deleteOverlays() {
//   for (var i = 0; i < markersArray.length; i++) {
//     markersArray[i].setMap(null);
//   }
//   markersArray = [];
// }