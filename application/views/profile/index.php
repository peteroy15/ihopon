
<div class="span7">
	<div class="profile-main">
		<div class="profile-main-header">
			<h1>Dashboard</h1>
			<hr>
			<ul class="dashboard-menu">
				<li><a href="#"><i class="ss-box"></i>All</a></li>
				<li><a href="#"><i class="ss-navigate"></i>Driving</a></li>
				<li><a href="#"><i class="ss-user"></i>Passenger</a></li>
				<li><a href="#"><i class="ss-star"></i>Favorites</a></li>
			</ul>
			<div class="clear"></div>
			
			<div class="string-separator-top floatLeft"></div>
			<div class="string-separator-top floatRight"></div>
			<div class="clear"></div>
		</div><!-- end of .profile-main-header -->
		<div class="profile-main-content">
		<?php foreach ($profile as $ride_item): ?>
		<h3><?php echo $ride_item['role'] ?></h3>

		<p>Type: <strong><?php echo $ride_item['type'] ?> </strong>
			<?php if ($ride_item['role'] == 'Driver'){ ?>
			/ Seats: <strong><?php echo $ride_item['seats'] ?> </strong> / Cost:
			<strong><?php echo $ride_item['price'] ?> </strong>
			<?php } ?></p>

		<p><strong>From:</strong>
			<?php echo $ride_item['from'] ?>
			<br> <strong>To:</strong>
			<?php echo $ride_item['to'] ?></p>

		<?php if ($ride_item['type'] == 'Daily' || $ride_item['type'] == 'Weekly'){ ?>
		<p><strong>Departure time:</strong>
			<?php echo $ride_item['hourLeave'] ?>
			<br> <strong>Return time:</strong>
			<?php echo $ride_item['hourReturn'] ?></p>
		<?php } ?>

		<?php if ($ride_item['type'] == 'One time only'){ ?>
		<p><strong>Departure date:</strong>
			<?php echo $ride_item['dateLeave'] ?>
			<br> <strong>Return date:</strong>
			<?php echo $ride_item['dateReturn'] ?></p>
		<?php } ?>

		<p><a href="profile/<?php echo $ride_item['id'] ?>">View</a> |
			<a href="profile/editRide/<?php echo $ride_item['id'] ?>">Edit</a> | 
			<a href="profile/deleteRide/<?php echo $ride_item['id'] ?>">Delete</a></p>

		<hr>

		<?php endforeach ?>
		</div><!-- end of .profile-main-content -->
	</div><!-- end of .profile-main -->
</div><!-- end of .span7 -->
<div class="span3">
	<div class="profile-sidebar">
		<form>
			<input class="sidebar-search" type="search" value="Search Your Dashboard" />
		</form>
	</div>
</div>