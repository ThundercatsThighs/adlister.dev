<br>
<!-- switch -->
<div style="text-align: center">
	<input type="image" src="../img/ts_button.png" class="new">
	<input type="image" src="../img/ts_button2.png" class="login">
</div>
<?php require_once 'login.php' ?>
<div class="row"  id ="loginPage">
	<div class="col s12 z-depth-6 card-panel">
		<section id="signup">
			<div class="row newUser">
				<h1 class="section-title" style="text-align: center">Signup...if you dare...</h1>
				<div class="col-md-6 col-md-offset-3">
					<p>Please fill out the information below so we can create your account.</p>
					<?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
	                <div class="alert alert-danger">
	                    <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
	                </div>
	                <?php unset($_SESSION['ERROR_MESSAGE']); ?>
		            <?php endif; ?>
		            <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
	                <div class="alert alert-success">
	                    <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
	                </div>
	                <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
	            	<?php endif; ?>
					<form method="POST" action="" data-validation data-required-message="This field is required">
							<div class="row margin">
	                        	<div class="input-field col s12">
							    	<input type="text" class="form-control" id="name" name="name" placeholder="Full Name" data-required>
								</div>
							</div>
						<div class="row margin">
	                        <div class="input-field col s12">						
							    <input type="text" class="form-control" id="email" name="email" placeholder="Email" data-required>
							</div>
						</div>
						<div class="row margin">
	                        <div class="input-field col s12">
							    <input type="text" class="form-control" id="username" name="username" placeholder="Username" data-required>
							</div>
						</div>
						<div class="row margin">
	                        <div class="input-field col s12">
							    <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<button type="submit" class="waves-effect waves-black btn-flat">Signup</button>
							</div>
							<br>
							<!-- <div class="col-sm-6">
								<button class="waves-effect waves-black btn-flat">Go To Login</button>
							</div> -->
						</div>
					</form>
				</div>
			</div>
		</section>
	</div>
</div>