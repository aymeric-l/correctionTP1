<?php 
if(isset($_POST['ajoutCredit'])){
	if(!empty($_POST['organisme']) && !empty($_POST['montant'])){
		App::getInstance()->getTable('credit')->create([
        "organisme" => $_POST['organisme'],
        "montant" => $_POST['montant'],
        "idClients" => $_POST['id']]);
        header('Location: index.php?p=tp2');
	}
}

?>

<h1>AJOUT CREDIT TP2</h1>

<form action="index.php?p=tp2.addCredit" method="post">
	<input type="text" name="organisme" placeholder="Organisme">
	<input type="text" name="montant" placeholder="Montant">
	<input type="hidden" name="id" value="<?= $_POST['id']; ?>">
	<input type="submit" name="ajoutCredit">
</form>