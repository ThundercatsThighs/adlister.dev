<!-- login/signup user -->
<div class="container">

	<section id="login">

		<div class="row">

			<h1 class="section-title">Edit Account</h1>

			<div class="col-md-6 col-md-offset-3">

				<p>Please fill out the information below so we can update your account.</p>
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

				<!-- update users in db -->
	            
	            <?php if (!empty($_POST)) : ?>
	            <?php $var = User::findByUsernameOrEmail($_SESSION['IS_LOGGED_IN']) ?>
	            <?php var_dump($var->attributes); ?>
		            <?php 	$var->id=$var->attributes['id']; ?>
		            <?php 	$var->name=$_POST['name']; ?>
		            <?php	$var->email=$_POST['email']; ?>
		            <?php	$var->username=$_POST['username']; ?>	       
		            <?php 	$user->save(); ?>
	            <?php endif; ?>

				<form method="POST" action="" data-validation data-required-message="This field is required">
					<?php $user = Auth::user(); ?>
					<div class="form-group">
					    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= $user->name; ?>" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $user->email; ?>" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $user->username; ?>" data-required>
					</div>
					<input id="update" name="update" class="col offset-s8" type="submit" value="Update">

				</form>

			</div>

		</div>

	</section>

</div>