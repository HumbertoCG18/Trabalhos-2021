<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-sacle=1.0">
        </head>

    <body>

            <div id="box">
            
                <h1>Login</h1>
        <form action="processa.php" method="post">
        <ul>
            <li>
            <label>Nome: </label>
                <input type="text" name="nome" placeholder="Username" required>
            </li>

            <li>
            <label>E-mail: </label>
            <input type="email" name="email" placeholder="E-mail" required>
            </li>

            <li>
            <label>Cidade: </label>
                <input type="text" name="cidade" placeholder="City" required>
            </li>

            <label for="estado">Escolha um estado: </label>
                <select name="estado">
                    <option value="acre">AC</option>
                    <option value="alagoas">AL</option>
                    <option value="amapa">AP</option>
                    <option value="amazonas">AM</option>
                    <option value="bahia">BA</option>
                    <option value="ceara">CE</option>
                    <option value="distritofederal">DF</option>
                    <option value="espiritosanto">ES</option>
                    <option value="goias">GO</option>
                    <option value="maranhao">MA</option>
                    <option value="matogrosso">MT</option>
                    <option value="matogrossosul">MS</option>
                    <option value="minasgerais">MG</option>
                    <option value="para">PA</option>
                    <option value="paraiba">PB</option>
                    <option value="parana">PR</option>
                    <option value="pernambuco">PE</option>
                    <option value="piaui">PI</option>
                    <option value="riodejaneiro">RJ</option>
                    <option value="riograndenorte">RN</option>
                    <option value="riograndedosul">RS</option>
                    <option value="rondonia">RO</option>
                    <option value="roraima">RR</option>
                    <option value="santacatarina">SC</option>
                    <option value="saopaulo">SP</option>
                    <option value="sergipe">SE</option>
                    <option value="tocantins">TO</option>
                </select>

            
                <br>

                    <p>Digite sua opinião sobre o site no espaço abaixo:</p>
                        <textarea rows="4" cols="50" name="mensagem">
                        </textarea>
            <li><input type="submit"></li>
        </ul>
        </form>

    
    </body>
</html>
