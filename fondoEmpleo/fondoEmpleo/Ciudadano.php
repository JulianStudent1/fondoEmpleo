<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hrplus portal de empleo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div>
        <center><img src="img/fondoEmpleo.jpg"></center>
    </div><br><br>

    <form class="row g-3 needs-validation" novalidate>
        <!--Datos personales-->
        <hr>
        <h2>Datos personales</h2>
        <div class="col-md-4">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Nombre" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="Apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="Apellidos" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="Cedula" class="form-label">Número de cédula</label>
            <input type="number" class="form-control" id="Cedula" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="Telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="Telefono" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="Correo" class="form-label">Correo</label>
            <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="email" class="form-control" id="Correo" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                Please choose an email
            </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="Direccion" class="form-label">Dirección de residencia</label>
            <input type="text" class="form-control" id="Direccion" required>
            <div class="invalid-feedback">
            Please provide a valid city.
            </div>
        </div>
        <div class="col-md-4">
            <label for="Perfil" class="form-label">Perfil o cargo</label>
            <input type="text" class="form-control" id="Perfil" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-14">
            <label for="SobreMi" class="form-label">Sobre mi</label>
            <input type="text" class="form-control" id="SobreMi" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <!--Experiencia laboral-->
        <hr>
        <h2>Experiencia laboral</h2>
        <div class="col-md-4">
            <label for="NombreEmpresaUna" class="form-label">Nombre de la última</label>
            <input type="text" class="form-control" id="NombreEmpresaUna" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-8">
            <label for="FuncionesEmpresaUna" class="form-label">Funciones</label>
            <input type="text" class="form-control" id="FuncionesEmpresaUna" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="NombreEmpresaDos" class="form-label">Nombre de la penúltima</label>
            <input type="text" class="form-control" id="NombreEmpresaDos" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>  
        <div class="col-md-8">
            <label for="FuncionesEmpresaDos" class="form-label">Funciones</label>
            <input type="text" class="form-control" id="FuncionesEmpresaDos" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>      
        <div class="col-md-4">
            <label for="NombreEmpresaTres" class="form-label">Nombre de la antepenúltima</label>
            <input type="text" class="form-control" id="NombreEmpresaTres" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-8">
            <label for="FuncionesEmpresaTres" class="form-label">Funciones</label>
            <input type="text" class="form-control" id="FuncionesEmpresaTres" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <!--Formación-->
        <hr>
        <h2>Formación</h2>
        <div class="col-md-4">
            <label for="NombreInstitucionUna" class="form-label">Nombre de la última</label>
            <input type="text" class="form-control" id="NombreInstitucionUna" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-8">
            <label for="TituloUna" class="form-label">Título obtenido</label>
            <input type="text" class="form-control" id="TituloUna" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="NombreInstitucionDos" class="form-label">Nombre de la penúltima</label>
            <input type="text" class="form-control" id="NombreInstitucionDos" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>  
        <div class="col-md-8">
            <label for="TituloDos" class="form-label">Título obtenido</label>
            <input type="text" class="form-control" id="TituloDos" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>      
        <div class="col-md-4">
            <label for="NombreInstitucionTres" class="form-label">Nombre de la antepenúltima</label>
            <input type="text" class="form-control" id="NombreInstitucionTres" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-8">
            <label for="TituloTres" class="form-label">Título obtenido</label>
            <input type="text" class="form-control" id="TituloTres" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <!--Idioma-->
        <hr>
        <h2>Idiomas</h2>
        <div class="col-md-4">
            <label for="IdiomaUno" class="form-label">Idioma nativo</label>
            <input type="text" class="form-control" id="IdiomaUno" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="IdiomaDos" class="form-label">Primer idioma extrangero</label>
            <input type="text" class="form-control" id="IdiomaDos" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="IdiomaTres" class="form-label">Segundo idioma extrangero</label>
            <input type="text" class="form-control" id="IdiomaTres" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <!--Complementos-->
        <hr>
        <h2>Complementos</h2>
        <div class="col-md-4">
            <label for="Conocimiento" class="form-label">Conocimientos</label>
            <input type="text" class="form-control" id="Conocimiento" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="Intereses" class="form-label">Intereses</label>
            <input type="text" class="form-control" id="Intereses" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="Habilidades" class="form-label">Habilidades</label>
            <input type="text" class="form-control" id="Habilidades" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <!--Botón de envio-->
        <hr>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Registrar hoja de vida</button>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>