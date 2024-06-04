<?php include 'includes/head.php';?>
<?php include 'includes/header.php';?>

<section class="workers-banner login">
    <div class="container">
        <div class="workers-banner-text">
            <h3>Login</h3>
        </div>
    </div>
</section>



<section class="login-form">
	<div class="container">
		<div class="login-form-selector">
			<ul>
	            <li>
	                <button data-target="ohid">OHID Login</button>
	            </li>
	            <li>
	                <button data-target="e-account">BWX e-account Login</button>
	            </li>
	            <li>
	                <button data-target="employee-login">Employee Login</button>
	            </li>
        	</ul>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="login-form-content" id="ohid">
					<h4>OHID Login</h4>
					<form>
						<label>Email:</label>
						<input type="email" name="">
						<br>
						<label>Password::</label>
						<input type="password:" name="">
						<button>Login</button>
					</form>
				</div>

				<div class="login-form-content" id="e-account">
					<h4>BWX e-account Login</h4>
					<form>
						<label>Email:</label>
						<input type="email" name="">
						<br>
						<label>Password::</label>
						<input type="password:" name="">
						<button>Login</button>
					</form>
				</div>

				<div class="login-form-content" id="employee-login">
					<h4>Employee Login</h4>
					<form>
						<label>Email:</label>
						<input type="email" name="">
						<br>
						<label>Password::</label>
						<input type="password:" name="">
						<button>Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include 'includes/footer.php';?>
<?php include 'includes/scripts.php';?>