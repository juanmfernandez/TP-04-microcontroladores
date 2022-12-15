<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga MySQL</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <script type="text/javascript" src="./js/index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>

<body>

    <div class="form_send">
        <form id="form_temp" method="POST" >
            <h1 class="animate__animated animate__backInLeft">Temp & humedad</h1>
            <p>temperatura <input type="text" placeholder="Temperatura" name="temperatura"></p>
            <p>humedad<input type="text" placeholder="Humedad" name="humedad"></p>
            <p>Api Key <input type="text" placeholder="API key" name="api_key"></p>
        </form>
        <button class="send" onclick="javascript:sendData()" >Enviar</button>
        <div id="result" class="result"></div>    
    </div>

</body>

</html>