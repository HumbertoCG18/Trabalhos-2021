<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Calculadora IMC</title>
<link href="enc/estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="content">
    
    <div id="calculadora">
    	<!--Formulario-->
        <form name="calc" method="get" enctype="multipart/form-data" action="processa.php" class="form">
        	
            <fieldset class="f">
            	
                <label>
                <span class="span">Seu Peso</span>
                <br/>
                <input type="text" name="peso" class="in" />
                </label>
                
                <br/>

                <label>
                <span class="span">Sua Altura (Use Pontuação: 1.99 Em METROS)</span>
                <br/>
                <input type="text" name="altura" class="in"/>
                </label>

                <br/>

                <label>
                <span class="span">Sua Idade</span>
                <br/>
                <input type="text" name="idade" class="in"/>
                </label>
                
                <input type="submit" name="envia" value="IMC!" class="btn">
            
            </fieldset>
        
        </form>
    </div>
</div>    
</body>
</html>