<?php 
namespace App\Table; // nom du dossier actuel
use Core\Table\Table;

class CreditTable extends Table
{

	public function monCredit($id)
	{
		return $this->query("SELECT * FROM credits WHERE idClients =?", [$id]);
	}

}
?>