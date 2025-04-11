<?php
    require_once "../factory/conexao.php";
    if($_POST['cxbusca'] != ""){
       $conn = new Caminho;
       $query = "select * from tbcliente
       where cliente = :id"; 

       $buscar=$conn->getConn()->
       prepare($query);
       
       $buscar->
       bindParam(':id',$_POST['cxbusca'],
       PDO::PARAM_STR);

       $buscar->execute();
       
       if($buscar->rowcount()){
        echo "<script>
        alert('Cliente encontrado!');
        </script>";
       }else{
          echo "<script>
            alert('Cliente não encontrado!');
            window.location.href='../view/cadClient.php';
          </script>";
       }
    }else{
        echo "Dados incompleto";
    }
?>

<div id="cxcliente">
    <?php
 $linha = $buscar->fetch(PDO::FETCH_ASSOC);
 echo "<h1>Cliente encontrado:</h1>";
 echo "<p>Código: " . $linha['codcli'] . "</p>";
 echo "<p>Cliente: " . $linha['cliente'] . "</p>";
 echo "<p>CPF: " . $linha['cpf'] . "</p>";
 echo "<p>Código do Vendedor: " . $linha['codvendedor'] . "</p>";
    ?>
</div>