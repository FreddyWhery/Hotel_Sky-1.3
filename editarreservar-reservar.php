<h1 class="text-center display-4">Editar Reservas</h1>

<?php

$sql="SELECT * FROM cadastrarreservar WHERE id_Reserv=".$_REQUEST["id_Reserv"];
$res=$conn->query($sql);
$row=$res->fetch_object();

?>

<form action="?page=salvarreservar" method="POST">

<input type="hidden" name="acaoa" value="editarreservar">
<input type="hidden" name="id_Reserv" value="<?php print $row->id_Reserv; ?>">

<div class="mb-3"> 
<input type="text" placeholder="Digite o Nome" maxlength="30" name="nome" class="form-control" value="<?php print $row->nome; ?>" required>
</div>

<div class="mb-3"> 
    <input type="text" placeholder="Contacto" maxlength="9" name="contacto" class="form-control" value="<?php print $row->contacto; ?>" required>
</div>

<div class="mb-3">
<input type="text" placeholder="Nome do Quarto" maxlength="30" name="nomequarto" class="form-control" value="<?php print $row->nomequarto; ?>" required>
</div>

<div class="mb-3"> 
<label>Data Actual</label> 
<input type="date" maxlength="12" name="datareser" class="form-control" value="<?php print $row->datareser; ?>" required>
</div>

<div class="mb-3"> 
<label>Data de Entrada</label> 
<input type="date" maxlength="12" name="dataentrada" class="form-control" value="<?php print $row->dataentrada; ?>" required>
</div>

<div class="mb-3"> 
<label>Data de Saída</label> 
<input type="date" maxlength="12" name="datasaída" class="form-control" value="<?php print $row->datasaída; ?>" required>
</div>

<div class="mb-3"> 
<button type="submit" class="btn btn-danger">Editar Reserva</button>
</div>
</form>