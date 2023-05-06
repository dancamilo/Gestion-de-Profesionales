<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
  <h2>Información personal</h2>
  <div>
    <label for="foto">Foto:</label>
    <input type="file" id="foto" name="foto">
  </div>
  <div>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">
  </div>
  <div>
    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido">
  </div>
  <div>
    <label for="cargo">Cargo empresarial:</label>
    <input type="text" id="cargo" name="cargo">
  </div>
  <div>
    <label for="info-academica">Información académica:</label>
    <textarea id="info-academica" name="info-academica"></textarea>
  </div>
  <button type="button">Agregar</button>

  <h2>Experiencia laboral</h2>
  <div>
    <label for="empresa">Empresa:</label>
    <input type="text" id="empresa" name="empresa">
  </div>
  <div>
    <label for="cargo-actual">Cargo actual:</label>
    <input type="text" id="cargo-actual" name="cargo-actual">
  </div>
  <div>
    <label for="periodo">Periodo:</label>
    <input type="text" id="periodo" name="periodo">
  </div>
  <div>
    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion"></textarea>
  </div>
  <button type="button">Agregar</button>

  <h2>Rol en la empresa</h2>
  <div>
    <label for="rol">Rol:</label>
    <input type="text" id="rol" name="rol">
  </div>
  <div>
    <label for="horario">Horario:</label>
    <input type="text" id="horario" name="horario">
  </div>
  <button type="button">Agregar</button>

  <h2>Documentos</h2>
  <div>
    <label for="documentos">Subir documentos:</label>
    <input type="file" id="documentos" name="documentos" multiple>
  </div>
  <button type="button">Agregar</button>

  <button type="submit">Guardar perfil</button>
</form>

</body>
</html>l