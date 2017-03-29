<h2>Liste des utilisateurs</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<td>Nom, prénom</td>
			<td>Description</td>
			<td>action</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach (App::getInstance()->getTable("Service")->all() as $service): ?>
			<tr>
				<td><?= $service->nom_du_service; ?></td>
				<td><?= $service->description; ?></td>
				<td><form action="admin.php?p=services.delete" method="post">
						<input type="hidden" name="id" value="<?= $service->id; ?>">
						<input class="btn btn-danger" type="submit">
					</form>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>