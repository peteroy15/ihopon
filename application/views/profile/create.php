<div class="span7">
<div class="profile-main">

<h1>Create Ride</h1>


<!-- STEP 3 Start -->
<?php if ($title == 'Create a ride - Step three'){ ?>

<h3>How much will you charge?</h3>

<?php echo validation_errors(); ?>

<?php echo form_open('profile/createRide') ?>

	<input type="hidden" name="user" value="<?php echo $ride_item['user']; ?>" />
    <input type="hidden" name="role" value="<?php echo $ride_item['role']; ?>" />
    <input type="hidden" name="from" value="<?php echo $ride_item['from']; ?>" />
    <input type="hidden" name="fromLat" value="<?php echo $ride_item['fromLat']; ?>" />
    <input type="hidden" name="fromLong" value="<?php echo $ride_item['fromLong']; ?>" />
    <input type="hidden" name="to" value="<?php echo $ride_item['to']; ?>" />
    <input type="hidden" name="toLat" value="<?php echo $ride_item['toLat']; ?>" />
    <input type="hidden" name="toLong" value="<?php echo $ride_item['toLong']; ?>" />
    <input type="hidden" name="dateLeave" value="<?php echo $ride_item['dateLeave']; ?>" />
    <input type="hidden" name="hourLeave" value="<?php echo $ride_item['hourLeave']; ?>" />
    <input type="hidden" name="dateReturn" value="<?php echo $ride_item['dateReturn']; ?>" />
    <input type="hidden" name="hourReturn" value="<?php echo $ride_item['hourReturn']; ?>" />
    <input type="hidden" name="sunday" value="<?php echo $ride_item['sunday']; ?>" />
    <input type="hidden" name="monday" value="<?php echo $ride_item['monday']; ?>" />
    <input type="hidden" name="tuesday" value="<?php echo $ride_item['tuesday']; ?>" />
    <input type="hidden" name="wednesday" value="<?php echo $ride_item['wednesday']; ?>" />
    <input type="hidden" name="thursday" value="<?php echo $ride_item['thursday']; ?>" />
    <input type="hidden" name="friday" value="<?php echo $ride_item['friday']; ?>" />
    <input type="hidden" name="saturday" value="<?php echo $ride_item['saturday']; ?>" />
    <input type="hidden" name="type" value="<?php echo $ride_item['type']; ?>" />
    
    <p>Price: <input type="text" name="price" placeholder="6" size="6">$</p>
    
    <h3>How many seats?</h3>
    
	<p>Seats: <input type="text" name="seats" placeholder="2" size="3" /></p>
    
    <h3>Comments/Notes</h3>
    
    <p><textarea rows="5" cols="30" name="comment"></textarea></p>
    
	<input type="submit" name="submit" value="Create" /> 

</form>
<!-- STEP 3 End -->

<!-- STEP 2 Start -->
<?php } else if ($title == 'Create a ride - Step two'){ ?>

<h3>Ride Details</h3>

<?php if ($ride_item['role'] == 'Passenger'){
echo form_open('profile/createRide');
} 
else { 
echo form_open('profile/createStepTwo');
} ?>

    <input type="hidden" name="user" value="<?php echo $ride_item['user']; ?>" />
    <input type="hidden" name="role" value="<?php echo $ride_item['role']; ?>" />
    <input type="hidden" name="from" value="<?php echo $ride_item['from']; ?>" />
    <input type="hidden" name="fromLat" value="<?php echo $ride_item['fromLat']; ?>" />
    <input type="hidden" name="fromLong" value="<?php echo $ride_item['fromLong']; ?>" />
    <input type="hidden" name="to" value="<?php echo $ride_item['to']; ?>" />
    <input type="hidden" name="toLat" value="<?php echo $ride_item['toLat']; ?>" />
    <input type="hidden" name="toLong" value="<?php echo $ride_item['toLong']; ?>" />
    <input type="hidden" name="type" value="<?php echo $ride_item['type']; ?>" />
   

<?php if ($ride_item['type'] == 'One time only'){ ?>
<h4>Departure Details</h4>
Date: <input type="text" name="dateLeave" size="20" placeholder="YYYY-MM-DD">
<br /><?php } ?>


<?php if ($ride_item['type'] == 'One time only' && $ride_item['role'] == 'Driver'){ 
echo 'Time:'; 
} else if ($ride_item['type'] != 'One time only'){ 
echo 'From:'; 
}

if ($ride_item['role'] == 'Driver' || $ride_item['role'] == 'Passenger' && $ride_item['type'] == 'Daily'){  ?>
<select name="hourLeave" size="1">
<option value="0:00 AM">0:00 AM</option> <option value="0:30 AM">0:30 AM</option> <option value="1:00 AM">1:00 AM</option><option value="1:30 AM">1:30 AM</option> <option value="2:00 AM">2:00 AM</option> <option value="2:30 AM">2:30 AM</option><option value="3:00 AM">3:00 AM</option> <option value="3:30 AM">3:30 AM</option> <option value="4:00 AM">4:00 AM</option><option value="4:30 AM">4:30 AM</option> <option value="5:00 AM">5:00 AM</option> <option value="5:30 AM">5:30 AM</option><option value="6:00 AM">6:00 AM</option> <option value="6:30 AM">6:30 AM</option> <option value="7:00 AM">7:00 AM</option> <option value="7:30 AM">7:30 AM</option> <option value="8:00 AM" selected="selected AM">8:00 AM</option> <option value="8:30 AM">8:30 AM</option> <option value="9:00 AM">9:00 AM</option> <option value="9:30 AM">9:30 AM</option> <option value="10:00 AM">10:00 AM</option> <option value="10:30 AM">10:30 AM</option> <option value="11:00 AM">11:00 AM</option> <option value="11:30 AM">11:30 AM</option> <option value="12:00 PM">12:00 PM</option> <option value="12:30 PM">12:30 PM</option> <option value="1:00 PM">1:00 PM</option> <option value="1:30 PM">1:30 PM</option> <option value="2:00 PM">2:00 PM</option> <option value="2:30 PM">2:30 PM</option> <option value="3:00 PM">3:00 PM</option> <option value="3:30 PM">3:30 PM</option> <option value="4:00 PM">4:00 PM</option> <option value="4:30 PM">4:30 PM</option> <option value="5:00 PM">5:00 PM</option> <option value="5:30 PM">5:30 PM</option> <option value="6:00 PM">6:00 PM</option> <option value="6:30 PM">6:30 PM</option> <option value="7:00 PM">7:00 PM</option> <option value="7:30 PM">7:30 PM</option> <option value="8:00 PM">8:00 PM</option> <option value="8:30 PM">8:30 PM</option> <option value="9:00 PM">9:00 PM</option> <option value="9:30 PM">9:30 PM</option> <option value="10:00 PM">10:00 PM</option> <option value="10:30 PM">10:30 PM</option> <option value="11:00 PM">11:00 PM</option> <option value="11:30 PM">11:30 PM</option></select></p>


<?php }
if ($ride_item['type'] == 'One time only'){ ?>
<h4>Coming back?</h4>

    <input type="radio" name="comingBack" id="comingBack0" value="Yes" checked="checked" />Yes<br />
    <input type="radio" name="comingBack" id="comingBack1" value="No" />No</p>
    
    <p>Date: <input type="text" name="dateReturn" id="dateReturn" size="20" placeholder="YYYY-MM-DD"><br />
<?php } ?>
<?php if ($ride_item['type'] == 'One time only' && $ride_item['role'] == 'Driver'){ 
echo 'Time:'; 
} else if ($ride_item['type'] != 'One time only'){ 
echo 'To:'; 
}

if ($ride_item['role'] == 'Driver' || $ride_item['role'] == 'Passenger' && $ride_item['type'] == 'Daily'){  ?>
<select name="hourReturn" size="1">
<option value="0:00 AM">0:00 AM</option> <option value="0:30 AM">0:30 AM</option> <option value="1:00 AM">1:00 AM</option><option value="1:30 AM">1:30 AM</option> <option value="2:00 AM">2:00 AM</option> <option value="2:30 AM">2:30 AM</option><option value="3:00 AM">3:00 AM</option> <option value="3:30 AM">3:30 AM</option> <option value="4:00 AM">4:00 AM</option><option value="4:30 AM">4:30 AM</option> <option value="5:00 AM">5:00 AM</option> <option value="5:30 AM">5:30 AM</option><option value="6:00 AM">6:00 AM</option> <option value="6:30 AM">6:30 AM</option> <option value="7:00 AM">7:00 AM</option> <option value="7:30 AM">7:30 AM</option> <option value="8:00 AM">8:00 AM</option> <option value="8:30 AM">8:30 AM</option> <option value="9:00 AM">9:00 AM</option> <option value="9:30 AM">9:30 AM</option> <option value="10:00 AM">10:00 AM</option> <option value="10:30 AM">10:30 AM</option> <option value="11:00 AM">11:00 AM</option> <option value="11:30 AM">11:30 AM</option> <option value="12:00 PM">12:00 PM</option> <option value="12:30 PM">12:30 PM</option> <option value="1:00 PM">1:00 PM</option> <option value="1:30 PM">1:30 PM</option> <option value="2:00 PM">2:00 PM</option> <option value="2:30 PM">2:30 PM</option> <option value="3:00 PM">3:00 PM</option> <option value="3:30 PM">3:30 PM</option> <option value="4:00 PM" selected="selected">4:00 PM</option> <option value="4:30 PM">4:30 PM</option> <option value="5:00 PM">5:00 PM</option> <option value="5:30 PM">5:30 PM</option> <option value="6:00 PM">6:00 PM</option> <option value="6:30 PM">6:30 PM</option> <option value="7:00 PM">7:00 PM</option> <option value="7:30 PM">7:30 PM</option> <option value="8:00 PM">8:00 PM</option> <option value="8:30 PM">8:30 PM</option> <option value="9:00 PM">9:00 PM</option> <option value="9:30 PM">9:30 PM</option> <option value="10:00 PM">10:00 PM</option> <option value="10:30 PM">10:30 PM</option> <option value="11:00 PM">11:00 PM</option> <option value="11:30 PM">11:30 PM</option></select></p>

<?php } 
if ($ride_item['type'] == 'Daily' || $ride_item['type'] == 'Weekly'){ 
?>
 
<h4>Every...</h4>
<p>Sunday <input name="sunday" type="checkbox" value="Sunday"  /><br />
Monday <input name="monday" type="checkbox" value="Monday" /><br />
Tuesday <input name="tuesday" type="checkbox" value="Tuesday" /><br />
Wednesday <input name="wednesday" type="checkbox" value="Wednesday" /><br />
Thursday <input name="thursday" type="checkbox" value="Thursday" /><br />
Friday <input name="friday" type="checkbox" value="Friday" /><br />
Saturday <input name="saturday" type="checkbox" value="Saturday" /></p>
<?php } ?>
<p><input type="submit" name="submit" value="Next" /></p> 

</form>
<!-- STEP 2 End -->




<!-- STEP 1 Start -->
<?php } else if ($title == 'Create a ride'){ ?>

<?php echo validation_errors(); ?>

<h3>Destination</h3>

<?php echo form_open('profile/createStepOne') ?>

	<input type="hidden" name="user" value="Tester2012" />

    <p><input type="radio" name="role" value="Driver" id="role_0" checked="checked" /> Driver<br />
    <input type="radio" name="role" value="Passenger" id="role_1" /> Passenger</p>
    
    <p>From: <input id="from" type="text" name="from" placeholder="Type in an address" size="60" /></p>

    
    <div class="noDisplay">
        <input id="fromLat" type="text" name="fromLat" />
        <input id="fromLong" type="text" name="fromLong" />
    </div>
	

   <p>To: <input id="to" type="text" name="to" placeholder="Type in an address" size="60" /></p>

   <div class="noDisplay">
       <input id="toLat" type="text" name="toLat" />
       <input id="toLong" type="text" name="toLong" />
   </div>
  
     <p>Is this ride...</p>
<p><select name="type" size="1">
        <option value="One time only" selected="selected">One time only</option>
        <option value="Daily">Daily</option>
        <option value="Weekly">Weekly</option>
        <option value="Monthly">Monthly</option>
    </select></p>   
    <p><input type="submit" name="submit" value="Next" /></p> 

</form>
<!-- STEP 1 End -->
<?php } ?>

</div><!-- end of profile-main -->
</div><!-- end of .span7 -->

<div class="span3 map-container">
	<?php if ($title == 'Create a ride'){ ?>
	<div id="map_canvas"></div>
	<?php } ?>
</div>
 