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
				<th>Name</th>
				<th>Lastname</th>
				<th>crm</th>
				<th>category</th>
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