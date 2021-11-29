<?php


include('conexao.php');




$sql = "select * from tbaluno";




$resultado = $con->query($sql);








    while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){


       


     


        echo $linha['idaluno']."<br>";


        echo $linha['aluno']."<br>";


        echo $linha['turma']."<br>";


        echo $linha['mensalidade']."<br>";


        echo "<button>Editar</button> | <button>Apagar</button>";


        echo "<hr>";