<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <main>
    <section>
      <header>
        <h1>Formulario</h1>
      </header>
      <form action="p.php" method="get">
        <input type="number" name="edad">
        <label for="idFN">Nombre</label>
        <input type="text" id="idFN" name="nombre">
        <input type="submit" name="enviar" value="enviar">
        <input type="text" name="tel[]">
        <input type="text" name="tel[]">
      </form>

    </section>
  </main>
</body>

</html>