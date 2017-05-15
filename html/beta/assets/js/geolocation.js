
$(document).ready(function(){
      function writeAddressName(latLng) {
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({
          "location": latLng
        },
        function(results, status) {
          if (status == google.maps.GeocoderStatus.OK)
          {
        //find country name
             for (var i=0; i<results[0].address_components.length; i++) {
            for (var b=0;b<results[0].address_components[i].types.length;b++) {
            //there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
                if (results[0].address_components[i].types[b] == "administrative_area_level_1") {
                    //this is the object you are looking for
                    city= results[0].address_components[i];

                    if(city.long_name == 'Chandigarh' || city.long_name == 'Jaipur' || city.long_name == 'Delhi' || city.long_name == 'Agra')
                    {
                        $('#sel2').focus();
                        $('#sl2').focus();
                        if(city.long_name == 'Delhi'){
                        document.getElementById('sel1').value = 'Delhi';
                        document.getElementById("address").innerHTML = 'Delhi';
                        document.getElementById("addround").innerHTML = 'Delhi';
                        document.getElementById("sel2").options[1].disabled = true;
                        document.getElementById('sl1').value = 'Delhi';
                        document.getElementById("sl2").options[1].disabled = true;
                        }
                        else if(city.long_name == 'Chandigarh'){
                        document.getElementById('sel1').value = 'Chandigarh';
                        document.getElementById("address").innerHTML = 'Chandigarh';
                        document.getElementById("addround").innerHTML = 'Chandigarh';
                        document.getElementById("sel2").options[2].disabled = true;
                        document.getElementById('sl1').value = 'Chandigarh';
                        document.getElementById("sl2").options[2].disabled = true;
                        }
                        else if(city.long_name == 'Jaipur'){
                        document.getElementById('sel1').value = 'Jaipur';
                        document.getElementById("address").innerHTML = 'Jaipur';
                        document.getElementById("addround").innerHTML = 'Jaipur';
                        document.getElementById("sel2").options[3].disabled = true;
                        document.getElementById('sl1').value = 'Jaipur';
                        document.getElementById("sl2").options[3].disabled = true;
                        }
                        else if(city.long_name == 'Agra'){
                        document.getElementById('sel1').value = 'Agra';
                        document.getElementById("address").innerHTML = 'Agra';
                        document.getElementById("addround").innerHTML = 'Agra';
                        document.getElementById("sel2").options[4].disabled = true;
                        document.getElementById('sl1').value = 'Agra';
                        document.getElementById("sl2").options[4].disabled = true;
                        }
                    }
                    else
                    {
                        $('#address').focus();
                        document.getElementById("address").innerHTML = "pickup city";
                        document.getElementById("address").focus();
                    }
                    break;
                }
            }
        }
          }
          else
            document.getElementById("error").innerHTML += "Unable to retrieve your address" + "<br />";
        });
      }

      function geolocationSuccess(position) {
        var userLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
        // Write the formatted address
        writeAddressName(userLatLng);
      }

      function geolocationError(positionError) {
        document.getElementById("error").innerHTML += "Error: " + positionError.message + "<br />";
      }

      function geolocateUser() {
        // If the browser supports the Geolocation API
        if (navigator.geolocation)
        {
          var positionOptions = {
            enableHighAccuracy: true,
            timeout: 10 * 1000 // 10 seconds
          };
          navigator.geolocation.getCurrentPosition(geolocationSuccess, geolocationError, positionOptions);
        }
        else
          document.getElementById("error").innerHTML += "Your browser doesn't support the Geolocation API";
      }

      window.onload = geolocateUser;

      //date picker




    });
