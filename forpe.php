<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sugerencias</title>

    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<form action="insertar2.php" method="POST" id="form">
        <div class="form">
            <h1>Sugerencias</h1>

                <input type="hidden" name="id" id="id" ><span class="barra"></span>
            <div class="grupo">
                <input type="text" name="Pelicula" id="Pelicula" required pattern="[a-z]{1,15}" placeholder="solo acepta letras minusculas"><span class="barra"></span>
                <label for="Pelicula">Pelicula</label>
            </div>
            <div class="grupo">
                <input type="text" name="Genero" id="Genero" required pattern="[a-z]{1,15}"  placeholder="solo acepta letras minusculas" ><span class="barra"></span>
                <label for="Genero">Genero</label>
            </div>
            <div class="grupo">
                <input type="text" name="Link" id="Link" required ><span class="barra"></span>
                <label for="Link">Link</label>
            </div>
            
            <button type="submit">Registrarse</button>
             <p class="warnings" id="warnings"></p>

            <a href="sasa.html"><input type="button" value="Regresar"></a>
        </div>

    </form>
    
</body>
<script src="valpe.js">
    </script>
</html>

