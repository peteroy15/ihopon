

<script language="javascript">

var s1 = <?php echo $ride_item['fromLat']; ?>;
var s2 = <?php echo $ride_item['fromLong']; ?>;
var d1 = <?php echo $ride_item['toLat']; ?>;
var d2 = <?php echo $ride_item['toLong']; ?>;

var origine = new google.maps.LatLng(s1,s2);
var destination = new google.maps.LatLng(d1,d2);
var marker;
var map;

function initialize() {
  var mapOptions = {
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: origine
  };
  

  map = new google.maps.Map(document.getElementById("map_canvas"),
      mapOptions);
	  
	  

  marker1 = new google.maps.Marker({
    map:map,
    draggable:false,
    animation: google.maps.Animation.DROP,
    position: origine
  });
  marker2 = new google.maps.Marker({
    map:map,
    draggable:false,
    animation: google.maps.Animation.DROP,
    position: destination
  });
  google.maps.event.addListener(marker1, 'click', toggleBounce);
  google.maps.event.addListener(marker2, 'click', toggleBounce);
}
	
	

function toggleBounce() {

  if (marker.getAnimation() != null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
</script>


<h2>View Ride</h2>
<div id="map_canvas"></div>
	<p><strong>User:</strong> <?php echo $ride_item['user']; ?><br />
    <strong>Ride Type:</strong> <?php echo $ride_item['type']; ?></p>
    
<?php if ($ride_item['role'] == 'Passenger'){ ?>
    <h3>You are looking for a ride...</h3>
<?php } else { ?>
	<h3>You are offering a ride...</h3>
<?php } ?>
    
    <p><strong>From:</strong> <?php echo $ride_item['from']; ?><br />
    <strong>To:</strong> <?php echo $ride_item['to']; ?></p>
    
    <h4>Departure</h4>
    <?php if ($ride_item['type'] == 'One time only'){ ?>
    <p><strong>Date:</strong> <?php echo $ride_item['dateLeave']; ?></p>
    <?php } if ($ride_item['role'] == 'Driver' || $ride_item['type'] == 'Daily'){ ?>
    <p><strong>Time:</strong> <?php echo $ride_item['hourLeave']; ?></p><?php } ?>
    
    <h4>Returning</h4>
    <?php if ($ride_item['type'] == 'One time only'){ ?>
    <p><strong>Date:</strong> <?php echo $ride_item['dateReturn']; ?></p>
    <?php } if ($ride_item['role'] == 'Driver' || $ride_item['type'] == 'Daily'){ ?>
    <p><strong>Time:</strong> <?php echo $ride_item['hourReturn']; ?></p>
    
	
    
    <h4>Days of Week</h4>
	<?php } if ($ride_item['type'] != 'One time only'){ ?>
   <p> Sunday: <input type="checkbox" name="sunday" value="Sunday" <?php if($ride_item['sunday'] != '0'){ ?> checked="checked" <?php } ?> disabled="disabled" /><br />
    Monday: <input type="checkbox" name="monday" value="monday" <?php if($ride_item['monday'] != '0'){ ?> checked="checked" <?php } ?> disabled="disabled" /><br />
    Tuesday: <input type="checkbox" name="tuesday" value="tuesday" <?php if($ride_item['tuesday'] != '0'){ ?> checked="checked" <?php } ?> disabled="disabled" /><br />
    Wednesday: <input type="checkbox" name="wednesday" value="wednesday" <?php if($ride_item['wednesday'] != '0'){ ?> checked="checked" <?php } ?> disabled="disabled" /><br />
    Thursday: <input type="checkbox" name="thursday" value="thursday" <?php if($ride_item['thursday'] != '0'){ ?> checked="checked" <?php } ?> disabled="disabled" /><br />
    Friday: <input type="checkbox" name="friday" value="friday" <?php if($ride_item['friday'] != '0'){ ?> checked="checked" <?php } ?> disabled="disabled" /><br />
    Saturday: <input type="checkbox" name="saturday" value="saturday" <?php if($ride_item['saturday'] != '0'){ ?> checked="checked" <?php } ?> disabled="disabled" /></p>
    
	<?php } if ($ride_item['role'] == 'Driver'){ ?>
    <p><strong>Price:</strong> <?php echo $ride_item['price']; ?></p>
    
	<p><strong>Number of seats: </strong><?php echo $ride_item['seats']; ?></p>
    
    <p><strong>Comments/Notes:</strong><br />
    <?php echo $ride_item['comment']; ?></p>
    
	<?php } ?>
	
<p><a href="editRide/<?php echo $ride_item['id'] ?>">Edit</a> | <a href="deleteRide/<?php echo $ride_item['id'] ?>">Delete</a></p>
