<?php
	include_once("header.php");
?>

	<main>
		<div class="hero_home version_1">
			<div class="content">
				<h3>Find a Doctor!</h3>
				<p>Health Is Our First Moto. Health Is Wealth
				</p>
				<form method="post">
					<div id="custom-search-input">
						
						<ul>
							<li>
								<input type="radio" id="doctor" name="radio_search" value="doctor" checked>
								<label for="doctor">Doctor</label>
							</li>
							<li>
								<input type="radio" id="caretaker" name="radio_search" value="caretaker">
								<label for="caretaker">CareTaker</label>
							</li>
							<li>
								<input type="radio" id="blood banks" name="radio_search" value="blood banks">
								<label for="blood banks">Blood Banks</label>
							</li>
							<li>
								<input type="radio" id="laboratory" name="radio_search" value="laboratory" >
								<label for="laboratory">Laboratory</label>
							</li>
							<li>
								<input type="radio" id="sugical items" name="radio_search" value="sugical items">
								<label for="sugical items">Sugical Items</label>
							</li>
							<li>
								<input type="radio" id="medicines" name="radio_search" value="medicines">
								<label for="medicines">Medicines</label>
							</li>
						</ul>
					</div>
				</form>
			</div>
		</div>
		<!-- /Hero -->

		<div class="container margin_120_95">
			<div class="main_title">
				<h2>Discover the <strong>online</strong> appointment!</h2>
				<p></p>
			</div>
			<div class="row add_bottom_30">
				<div class="col-lg-4">
					<div class="box_feat" id="icon_1">
						<span></span>
						<h3>Find a Doctor</h3>
						<p></p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_2">
						<span></span>
						<h3>View profile</h3>
						<p></p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_3">
						<h3>Book a visit</h3>
						<p></p>
					</div>
				</div>
			</div>
			<!-- /row -->
			<p class="text-center"><a href="#" class="btn_1 medium">Find Doctor</a></p>

		</div>
		<!-- /container -->

	
		<!-- /white_bg -->
		
		<!-- /app_section -->
	</main>
	<!-- /main content -->



<?php
	include_once("footer.php");
?>