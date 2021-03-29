<html>
    <body>
        <?php
        $testeArray = array();
        $testeArray[] = array("codigoDoCliente" => 0, "email" => 'ramon@gmail.com', "senha" => "aasdas", "cep" => "99999-999", "telefone" => "99999-9999");
        $testeArray[] = array("codigoDoCliente" => 1, "email" => 'fulano@gmail.com', "senha" => "aasda1", "cep" => "99999-998", "telefone" => "99999-9998");
        $testeArray[] = array("codigoDoCliente" => 2, "email" => 'ciclano@gmail.com', "senha" => "aasda2", "cep" => "99999-997", "telefone" => "99999-9997");
        $testeArray[] = array("codigoDoCliente" => 2, "email" => 'feliciano@gmail.com', "senha" => "aasda3", "cep" => "99999-996", "telefone" => "99999-9996");
        $testeArray[] = array("codigoDoCliente" => 2, "email" => 'coelho@gmail.com', "senha" => "aasda4", "cep" => "99999-995", "telefone" => "99999-9995");
        
        
        
        echo "<pre>";
        print_r($testeArray);
        echo "</pre>";
        ?>

        <table>
            <tr>
                <th> CodigoDoCliente </th>
                <th> Email </th>
                <th> Endereco </th>
                <th> CEP </th>
                <th> Telefone </th>
            </tr>
            <?php
            foreach($testeArray as $teste){
            ?>
            <tr>
                <td> <?php echo $teste["codigoDoCliente"] ?> </td>
                <td> <?php echo $teste["email"] ?> </td>
                <td> <?php echo $teste["senha"] ?> </td>
                <td> <?php echo $teste["cep"] ?> </td>
                <td> <?php echo $teste["telefone"] ?> </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </body>
</html>