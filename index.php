<?php
include_once('funcionalidades.php');
$result = resultado();
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Formulario Siiniga</title> 
<!--- Son los enlaces de dan el diseño a la pagina-->
   <link rel="stylesheet" href="css/reset.min.css">
      <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class = "h1" align = "center"><h1>FORMULARIO SIINIGA</h1></div>
        <div align = "center">
               <!--- Aquí empieza el formulario-->
                <form class="cf" method = "POST" action = "altas.php" >
                          <div class="half left cf"><h1>Datos obligatorios </h1></div>
                            <input type="text" id="numsin" name = "numsin" placeholder="Numero de Siiniga">
                            <input type="text" id="arete" name = "arete" placeholder="Arete Campaña">
                            <input type="date" id="fecha" name = "fecha" placeholder="Fecha" value = <?php echo date("d-m-Y");?> >
                    <!---<br><br>-->
                            <input type="text" id="sx" name = "sx" placeholder="Sexo H/M">
                            <input type="text" id="rz" name = "rz" placeholder="Raza">
                            <input type="text" id="rc" name = "rc" placeholder="Especificar raza/cruza"><br>
                          
                     <div align = "center">
                            <h1>Raza o numero de Siiniga </h1>
                         <!--- </div>
                             <div class=center cf> -->
                               <input type="text" id="empadre" name = "empadre" placeholder="Empadre">
                               <input type="text" id="mami" name = "mami" placeholder="Madre">
                               <input type="text" id="papi" name = "papi" placeholder="Padre">
                             </div>    
                 <!--- Este es el boton que guardara los datos-->
                        <br><input type="submit" value="Guardar" id="input-submit">
                </form>
        </div>    
           
          <!--- Aquí empieza la tabla-->
          <br><br><br>
    <div align = "center"><h1>TABLA DE REGISTROS</h1></div><br><br>
        <div align = "center">
           <table border="3" id = "tab">
              <thead class="">
                <tr >
                      <th colspan="6">DATOS OBLIGATORIOS</th>
                      <th colspan="1"></th>
                      <th colspan="2">RAZA Ó No. SINIIGA</th>
                </tr>
                <tr>
                      <th class="text-center">No. SINIIGA<  /th>
                      <th class="text-center">ARETE CAMPAÑA</th>
                      <th class="text-center">FECHA NACIMIENTO</th>
                      <th class="text-center">SEXO H/M</th>
                      <th class="text-center">RAZA</th>
                      <th class="text-center">ESPECIFICAR RAZA/CRUZA</th>
                      <th class="text-center">EMPADRE</th>
                      <th class="text-center">PADRE</th>
                      <th class="text-center">MADRE</th>
                </tr>
              </thead>
                    <?php while ($datos = $result->fetch_assoc()) { ?>
                <tbody>
                      <th class="text-center"> <?php echo $datos['numsin']; ?> </th>
                      <th class="text-center"> <?php echo $datos['arete']; ?> </th>
                      <th class="text-center"> <?php echo $datos['fecha']; ?> </th>
                      <th class="text-center"> <?php echo $datos['sx']; ?> </th>
                      <th class="text-center"> <?php echo $datos['rz']; ?> </th>
                      <th class="text-center"> <?php echo $datos['rc']; ?> </th>
                      <th class="text-center"> <?php echo $datos['empadre']; ?> </th>
                      <th class="text-center"> <?php echo $datos['mami']; ?> </th>
                      <th class="text-center"> <?php echo $datos['papi']; ?> </th>
                </tbody>
                    <?php } ?>
             </table>
        </div>
  </body>
</html>