<p>HELLO TP2 INFO</p>

<table class="table table-bordered">
	<thead>
		<tr>
			<td>Nom</td>
			<td>Prénom</td>
			<td>Date de naissance</td>
			<td>Adresse</td>
			<td>Code postal</td>
			<td>Numero de telephone</td>
			<td>Statut</td>
		</tr>
	</thead>
	<tbody>
<?php foreach (App::getInstance()->getTable("client")->toutSaufMarital($_POST['id']) as $utilisateur): ?>

<tr>
				<td><?= $utilisateur->nom; ?></td>
				<td><?= $utilisateur->prenom; ?></td>
				<td><?= $utilisateur->date_de_naissance; ?></td>
				<td><?= $utilisateur->adresse; ?></td>
				<td><?= $utilisateur->code_postal; ?></td> <!-- service au lieu de services.id-->
				<td><?= $utilisateur->numero_de_telephone; ?></td>
				<td><?= $utilisateur->statut; ?></td>
</tr>

<?php endforeach ?>

	</tbody>
</table>
<hr><hr>
<form action="index.php?p=tp2.addCredit" method="post">
<input type="hidden" name="id" value="<?= $_POST['id']; ?>">
<input type="submit" name="transfereId" value="Ajouter un crédit à cette personne">
</form>

<h1>Crédit du client</h1>
<?php foreach (App::getInstance()->getTable("credit")->monCredit($_POST['id']) as $infoCredit): ?>
<tr>
	Organisme : <td><?= $infoCredit->organisme; ?></td></br>
	Montant du crédit : <td><?= $infoCredit->montant; ?></td>€
</tr>
<?php endforeach ?>