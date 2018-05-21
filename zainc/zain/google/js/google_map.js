
 var googleGetPath = 'php/get_google_details.php';


$(document).ready(function () {
	
      initialize(0,0);
	  getLocation(website_id);
	   
});




function initialize(lat, lng){
	
	
	
	var latlng = new google.maps.LatLng( lat, lng); 
			var myOptions = { 
			  //disableDefaultUI: true,
			  zoom: 16, 
			  center: latlng,
				mapTypeControl: false,
				streetViewControl:false,
				scaleControl: true, 
				scaleControlOptions: { 
					 position: google.maps.ControlPosition.TOP_RIGHT 
				  },
			  mapTypeId: google.maps.MapTypeId.ROADMAP,
			}; 
			
			map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 
		
}



function addNewMarker(thisPoint, thisTitle){
	
	  var marker = new google.maps.Marker({
				map: map,
				icon: "/google/car.png",
				title: thisTitle,
				position: thisPoint
			  });
			  
	map.setCenter(thisPoint);
	
}

function getLocation(website_id){
	
	$.post(googleGetPath, {website_id: website_id} ,function(response) {
		checkResponse(response);
	}, 'json');

}

function checkResponse(thisData){

	switch(thisData[0].RESULT){
		case "SUCCESS":
			delete thisData[0].RESULT;
			setupDealerMapPosition(thisData);
			break;
		case "ERROR":	
			alert(thisData[0].RESULT);
			break;	
		}
		
 }

function setupDealerMapPosition(thisData){
	
		
		if(thisData[0].grid_reference_east == null || thisData[0].grid_reference_north == null){
			thisData[0].grid_reference_east=0;
			thisData[0].grid_reference_north=0;
		}
		
		if(thisData[0].postcode == null){
			thisData[0].postcode="";
		}
		
	    var lat = thisData[0].grid_reference_east;
		var lng = thisData[0].grid_reference_north;
		var postCode = thisData[0].postcode;
		var zoomLevel = parseInt(thisData[0].zoom_level);
		
		if(lat.length > 0 && lng.length > 0){
			var point = new google.maps.LatLng(parseFloat(lat),parseFloat(lng));
			addNewMarker(point, thisData[0].name);
		}else if(postCode.length > 0){
			//setLocation(postCode);
		}else{
			//setLocation("ST42SA"); // Set to ClickDealer in Stoke.
		}
		
		if(zoomLevel == 0){
			zoomLevel=16;
		}
	
		map.setZoom(zoomLevel); 
	
}

function setLocation(address) {
	var geocoder = new google.maps.Geocoder();
	geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
	  addNewMarker(results[0].geometry.location,address);

    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
};



















