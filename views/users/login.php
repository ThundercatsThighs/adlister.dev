<div class="row">
	<div class="col s12 z-depth-6 card-panel">
        <section id="login">
            <div class="row loginUser">
                <h1 class="section-title">We knew you'd return...</h1>
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
    			<p>Login with your email/username and password</p>
				<form method="POST" action="" data-validation data-required-message="This field is required">
					<div class="row margin">
                        <div class="input-field col s12">
					       <input type="text" class="form-control" id="email_user" name="email_user" placeholder="Email or Username" data-required>
                        </div>
					</div>
                    <div class="row margin">
                        <div class="input-field col s12">
					       <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
                        </div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<button type="submit" class="waves-effect waves-black btn-flat">Login</button>
						</div>
						<!-- <div class="col-sm-6">
							<button class="loginUser waves-effect waves-black btn-flat">Go To Signup</button>
						</div> -->
					</div>
				</form>
    		</div>
        </section>
    </div>
</div>