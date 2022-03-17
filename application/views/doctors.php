<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>MSDoc challenge</title>
</head>

<body>

	<div id="container">
		<h1>Welcome to Doctors!</h1>

		<form action="<?= base_url('doctors/search') ?>" method="get" id="search">
			<label>Buscar <input type="text" name="term" value="<?= $this->input->get('term', true) ?>"></label>
			<button type="submit">Buscar</button>
		</form>
		<hr>
		<table>
			<tr>
				<th><a href="<?= base_url('doctors/order?field=name&orderby=DESC') ?>">name</a></th>
				<th><a href="<?= base_url('doctors/order?field=lastname&orderby=DESC') ?>">lastname</a></th>
				<th><a href="<?= base_url('doctors/order?field=crm&orderby=DESC') ?>">crm</a></th>
				<th><a href="<?= base_url('doctors/order?field=category&orderby=DESC') ?>">category</a></th>
			</tr>

			<?php foreach ($listDoctors as $doctor) : ?>
				<tr>
					<td><?= $doctor->name ?></td>
					<td><?= $doctor->lastname ?></td>
					<td><?= $doctor->crm ?></td>
					<td><?= $doctor->category ?></td>
				</tr>

			<?php endforeach; ?>
		</table>

	</div>
</body>

</html>