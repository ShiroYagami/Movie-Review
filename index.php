<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrot</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

    <form action="insertar.php" method="POST" id="form">
        <div class="form">
            <h1>Registro</h1>

                <input type="hidden" name="id" id="id" ><span class="barra"></span>
            <div class="grupo">
                <input type="text" name="name" id="name" required pattern="[a-z]{1,15}" placeholder="solo acepta letras minusculas"><span class="barra"></span>
                <label for="name">usuario</label>
            </div>
            <div class="grupo">
                <input type="email" name="email" id="email" ><span class="barra"></span>
                <label for="email">Email</labe>
                    </div>
            <div class="grupo">
                <input type="password" name="password" id="password" required pattern=".{5,10}" placeholder="Entre 5 y 10 caracteres"><span class="barra"></span>
                <label for="password">Password</label>
            </div>
            
            <button type="submit">Registrarse</button>
    <a href="sasa.html"><input type="button" value="Regresar"></a>
            <p class="warnings" id="warnings"></p>
        </div>
    </form>


    <script src="val.js">
    </script>
</body>
</html>