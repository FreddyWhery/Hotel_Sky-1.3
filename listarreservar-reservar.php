<h1 class="text-center display-4">Listar Reservas</h1>
<?php

$sql="SELECT * FROM cadastrarreservar";
$res=$conn->query($sql);
$qtd=$res->num_rows;

if($qtd>0){
    print "<table class='table table-hover table-striped table-bordered'>";

    print"<tr>";

print "<th>Código da Reserva</th>";
print "<th>Nome do Cliente</th>";
print "<th>Contacto</th>";

print "<th>Nome do Quarto</th>";
print "<th>Data Actual</th>";
print "<th>Data de Entrada</th>";
print "<th>Data de Saída</th>";

print "<th>Ações do ADM</th>";

print"</tr>";

while($row=$res->fetch_object()){
    print"<tr>";

print "<td>".$row->id_Reserv."</td>";
print "<td>".$row->nome."</td>";
print "<td>".$row->contacto."</td>";

print "<td>".$row->nomequarto."</td>";
print "<td>".$row->datareser."</td>";
print "<td>".$row->dataentrada."</td>";
print "<td>".$row->datasaída."</td>";

print "<td>

<button onclick=\"location.href='?page=editarreservar&id_Reserv=".$row->id_Reserv."';\" class='btn btn-success'>Editar</button>
<button onclick=\"if(confirm('Tem certeza que deseja Excluir?')){location.href='?page=salvarreservar&acaoa=excluirreservar&id_Reserv=".$row->id_Reserv."';}else{false;}\" class='btn btn-danger'>Excluir</button>


</td>";

print"</tr>";

}
print "</table>";
}else{

print"<p class='alert alert-danger'>Não foi possível encontrar nenhuma reserva!</p>";

}

?>