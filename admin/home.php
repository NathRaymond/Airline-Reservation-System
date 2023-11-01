<style>
	/* Style for the card container */
	.card-container {
		display: grid;
		grid-template-columns: repeat(3, 1fr);
		/* 2 columns */
		grid-gap: 20px;
		/* Spacing between cards */
	}

	/* Style for individual cards */
	.newcard {
		background-color: #ffffff;
		border: 1px solid #e0e0e0;
		border-radius: 5px;
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		padding: 15px;
		text-align: center;
	}

	/* Style for card titles */
	.card-title {
		font-size: 20px;
		font-weight: bold;
		margin-bottom: 10px;
	}

	/* Style for card content */
	.card-content {
		font-size: 16px;
	}
</style>


<div class="containe-fluid">

	<div class="row">
		<div class="col-lg-12">

		</div>
	</div>

	<div class="row mt-3 ml-3 mr-3">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body" style="font-size:18px; font-weight:bold; color:indigo">
					<?php echo "Welcome back ".($_SESSION['login_type'] == 3 ? "Dr. ".$_SESSION['login_name'].','.$_SESSION['login_name_pref'] : $_SESSION['login_name'])."!"  ?>

				</div>
				<hr>
				<div class="row">
				</div>
			</div>
			<div class="card-container" style="padding: 10px;">
			<?php
			include 'db_connect.php';
			$users = $conn->query("SELECT * FROM users order by name asc");
			$total_records = $users->num_rows; // Get the total number of records
			?>
			
			<?php
				include 'db_connect.php';
				$admin = $conn->query("SELECT * FROM users WHERE type = 1 ORDER BY name ASC");
				$total_admin_records = $admin->num_rows; // Get the total number of records
			?>

			<?php
			include 'db_connect.php';
			$airlines = $conn->query("SELECT * FROM airlines_list");
			$total_airline_records = $airlines->num_rows; // Get the total number of records
			?>

			<?php
			include 'db_connect.php';
			$airport = $conn->query("SELECT * FROM airport_list");
			$total_airport_records = $airport->num_rows; // Get the total number of records
			?>

			<?php
			include 'db_connect.php';
			$booked_light = $conn->query("SELECT * FROM booked_flight");
			$total_booked_records = $booked_light->num_rows; // Get the total number of records
			?>

			<?php
			include 'db_connect.php';
			$flight = $conn->query("SELECT * FROM flight_list");
			$total_flight_records = $flight->num_rows; // Get the total number of records
			?>

			<div class="newcard" style="background-color: indigo; color: white;">
				<div class="card-title">Total Users</div>
				<div class="card-content">
					<?php echo $total_records; ?>
				</div>
			</div>


				<div class="newcard" style="background-color:indigo; color:white">
					<div class="card-title">Total Admin</div>
					<div class="card-content">
					<?php echo $total_admin_records; ?>
					</div>
				</div>

				<div class="newcard" style="background-color:indigo; color:white">
					<div class="card-title">Total Airline List</div>
					<div class="card-content">
					<?php echo $total_airline_records; ?>
					</div>
				</div>

				<div class="newcard" style="background-color:indigo; color:white">
					<div class="card-title">Total Airport List</div>
					<div class="card-content">
					<?php echo $total_airport_records; ?>
					</div>
				</div>

				<div class="newcard" style="background-color:indigo; color:white">
					<div class="card-title">Total Booked Flight</div>
					<div class="card-content">
					<?php echo $total_booked_records; ?>
					</div>
				</div>

				<div class="newcard" style="background-color:indigo; color:white">
					<div class="card-title">Total Flight List</div>
					<div class="card-content">
					<?php echo $total_flight_records; ?>
					</div>
				</div>
				
			</div>
		</div>
	</div>

</div>
<script>

</script>