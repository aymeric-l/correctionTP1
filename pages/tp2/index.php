<h2>HELLO TP2</h2></br></br>
<a href="index.php?p=tp2.add">Ajouter un client</a>
<table class="table table-bordered">
	<thead>
		<tr>
			<td>Nom</td>
			<td>Prénom</td>
			<td>Info</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach (App::getInstance()->getTable("client")->nomPrenom() as $utilisateur): ?>
			<tr>
				<td><?= $utilisateur->nom; ?></td>
				<td><?= $utilisateur->prenom; ?></td>
				<td>
					<form action="index.php?p=tp2.info" method="post">
						<input type="text" name="id" value="<?= $utilisateur->id; ?>" style="display:none;">
						<input type="submit" name="idInfo" class="btn btn-danger">
					</form>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>