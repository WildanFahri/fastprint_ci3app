<!DOCTYPE html>
<html lang="en">
<!-- <?php var_dump($output) ?> -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<title>Form Login</title>
</head>

<body>
	<div class="container">
		<div class="row mt-3">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-header" style="text-align: center;">
						Form Login
					</div>
					<img class="mx-auto" width="35%" src="<?= base_url(); ?>/assets/img/logo_login.png">
					<?php if (!empty($output)) : ?>
						<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
							<strong>
								<?= $output ?>
							</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php endif ?>
					<div class="card-body">
						<form action="" method="post">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" class="form-control" name="username" id="username">
								<small class="form-text text-danger"><?= form_error('username'); ?></small>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password" id="password">
								<small class="form-text text-danger"><?= form_error('password'); ?></small>
							</div>
							<button type="submit" name="login" class="btn btn-primary float-right">Login</button>
						</form>

					</div>
				</div>

			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>