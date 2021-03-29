<?php  include('classes/Cliente.php') ?>
<h2> Formulario </h2>
<form method="post">
Email: <input type = "text" name = "email" size = 32 maxlenght = 20/>
<br/>
Senha: <input type = "password" name = "senha" size = 32 maxlenght = 10/>
<br/>
CEP:     <input type = "text" name = "CEP" size = 32 maxlenght = 20/>
<br/>
<br/>
Você é um robo? <input type = "Radio" name = "resposta" value = "True"/> Sim <input type = "Radio" name = "resposta" value = "False"/> Não
<br/>
Tem certeza? <Select name = "Resposta">
    <option value = "True"> Absoluta </option>
    <option value = "False"> Talvez eu seja </option>           
</Select>
<br/>
<br/>
<input type = "submit" name = "botaoEnviar" value = "Cadastrar"/> 



<h1>
    CADASTRO NOVO CLIENTE:
</h1>

<?php
    $cliente = new Cliente();
    $cliente->SetCodigo($_POST['codigoDoCliente']);  
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cep =  $_POST["CEP"];      
?>

<h2>
    Email: <?php echo $cliente->GetCodigo(); ?> <br/> 
    Senha: <?php echo $senha; ?>  <br/>
    Cep: <?php echo $cep; ?>   
</h2>