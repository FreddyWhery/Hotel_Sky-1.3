<?php
switch ($_REQUEST["acaoa"]){
case 'cadastrarreservar':

$nome=$_POST["nome"];
$contacto=$_POST["contacto"];
$nomequarto=$_POST["nomequarto"];
$datareser=$_POST["datareser"];
$dataentrada=$_POST["dataentrada"];
$datasaída=$_POST["datasaída"];

$sql = "INSERT INTO cadastrarreservar(nome, contacto, nomequarto, datareser, dataentrada, datasaída) VALUE ('{$nome}', '{$contacto}', '{$nomequarto}', '{$datareser}', '{$dataentrada}', '{$datasaída}')";
$res=$conn->query($sql);
if($res==true){

    print"<script>alert('Cadastro de Nova Reserva com Sucesso.');</script>";
    print"<script>location.href='?page=Produto2';</script>";
}else{

    print"<script>alert('Erro de Cadastro de Nova Reserva.');</script>";
    print"<script>location.href='?page=Produto2';</script>";

}

    break;

    case 'editarreservar':

        $nome=$_POST["nome"];
        $contacto=$_POST["contacto"];
        $nomequarto=$_POST["nomequarto"];
        $datareser=$_POST["datareser"];
        $dataentrada=$_POST["dataentrada"];
        $datasaída=$_POST["datasaída"];

        $sql = "UPDATE cadastrarreservar SET nome='{$nome}',contacto='{$contacto}',nomequarto='{$nomequarto}',datareser='{$datareser}',dataentrada='{$dataentrada}',datasaída='{$datasaída}' WHERE id_Reserv=".$_REQUEST["id_Reserv"];

$res=$conn->query($sql);
if($res==true){

    print"<script>alert('Edição da Reserva feita com Sucesso.');</script>";
    print"<script>location.href='?page=listarreservar';</script>";
}else{

    print"<script>alert('Erro na Edição de Reserva.');</script>";
    print"<script>location.href='?page=listarreservar';</script>";

}

        break;

        case 'excluirreservar':

$sql= "DELETE FROM cadastrarreservar WHERE id_Reserv=".$_REQUEST["id_Reserv"];

$res=$conn->query($sql);
if($res==true){

    print"<script>alert('Reserva Excluída com Sucesso.');</script>";
    print"<script>location.href='?page=listarreservar';</script>";
}else{

    print"<script>alert('Reserva Não Excluída.');</script>";
    print"<script>location.href='?page=listarreservar';</script>";

}


            break;
}
