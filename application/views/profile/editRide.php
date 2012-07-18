
<h2>Edit Ride</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('profile/updateRide') ?>

	<input type="hidden" name="id" value="<?php echo $ride_item['id'] ?>" />
	<input type="hidden" name="user" value="<?php echo $ride_item['user']; ?>" />
    <input type="hidden" name="type" value="<?php echo $ride_item['type']; ?>" />
    <input type="hidden" name="role" value="<?php echo $ride_item['role']; ?>" />

 <p>You are...</p>

 <p><input type="radio" name="role" value="Driver" id="role_0" <?php if ($ride_item['role'] == 'Driver'){ ?> checked="checked" <?php } ?> /> Driver<br />
    <input type="radio" name="role" value="Passenger" id="role_1" <?php if ($ride_item['role'] == 'Passenger'){ ?> checked="checked" <?php } ?> /> Passenger</p>
    
    <p>From:<br />
<input id="from" type="text" value="<?php echo $ride_item['from']; ?>" size="60" name="from" /></p>
    <div class="noDisplay">
    <div id="map_canvas"></div>
        <input id="fromLat" type="text" name="fromLat" value="<?php echo $ride_item['fromLat']; ?>" />
        <input id="fromLong" type="text" name="fromLong" value="<?php echo $ride_item['fromLong']; ?>" />
    </div>
  

    <p>
      To:<br />
      <input id="to" type="text" value="<?php echo $ride_item['to']; ?>" size="60" name="to" /></p>
    
    <div class="noDisplay">
       <input id="toLat" type="text" name="toLat" value="<?php echo $ride_item['toLat']; ?>" />
       <input id="toLong" type="text" name="toLong" value="<?php echo $ride_item['toLat']; ?>" />
   </div>
    
    
<h4>Departure:</h4>
    <?php if ($ride_item['type'] == 'One time only'){ ?>
    <p>Date: <input type="text" name="dateLeave" value="<?php echo $ride_item['dateLeave']; ?>" /></p>
    <?php } if ($ride_item['role'] == 'Driver' || $ride_item['type'] == 'Daily'){ ?>
    <p>Time: <input type="text" name="hourLeave" value="<?php echo $ride_item['hourLeave']; ?>" /></p><?php } ?>
    
    <h4>Returning:</h4>
    <?php if ($ride_item['type'] == 'One time only'){ ?>
    <p>Date: <input type="text" name="dateReturn" value="<?php echo $ride_item['dateReturn']; ?>" /></p>
    <?php } if ($ride_item['role'] == 'Driver' || $ride_item['type'] == 'Daily'){ ?>
    <p>Time: <input type="text" name="hourReturn" value="<?php echo $ride_item['hourReturn']; ?>" /></p>
	
	<?php } if ($ride_item['type'] != 'One time only'){ ?>
   <p> Sunday: <input type="checkbox" name="sunday" value="Sunday" <?php if($ride_item['sunday'] != '0'){ ?> checked="checked" <?php } ?> /><br />
    Monday: <input type="checkbox" name="monday" value="monday" <?php if($ride_item['monday'] != '0'){ ?> checked="checked" <?php } ?> /><br />
    Tuesday: <input type="checkbox" name="tuesday" value="tuesday" <?php if($ride_item['tuesday'] != '0'){ ?> checked="checked" <?php } ?> /><br />
    Wednesday: <input type="checkbox" name="wednesday" value="wednesday" <?php if($ride_item['wednesday'] != '0'){ ?> checked="checked" <?php } ?> /><br />
    Thursday: <input type="checkbox" name="thursday" value="thursday" <?php if($ride_item['thursday'] != '0'){ ?> checked="checked" <?php } ?> /><br />
    Friday: <input type="checkbox" name="friday" value="friday" <?php if($ride_item['friday'] != '0'){ ?> checked="checked" <?php } ?> /><br />
    Saturday: <input type="checkbox" name="saturday" value="saturday" <?php if($ride_item['saturday'] != '0'){ ?> checked="checked" <?php } ?> /></p>
    
	<?php } if ($ride_item['role'] == 'Driver'){ ?>
    <p><strong>Price:</strong> <input type="text" name="price" size="3" value="<?php echo $ride_item['price']; ?>" /><br />
<strong>Number of seats: </strong>
    <input type="text" name="seats" size="3" value="<?php echo $ride_item['seats']; ?>" /></p>
    
    <p><strong>Comments/Notes:</strong><br />
    <textarea name="comment" rows="5" cols="30" /><?php echo $ride_item['comment']; ?></textarea></p>
    
	<?php } ?>
	
	<input type="submit" name="submit" value="Save" /> 

</form>
