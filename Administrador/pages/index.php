
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gestion</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <title></title>
    </head>
    <body>
      
        <!-- Grey with black text -->
<nav nav class="navbar navbar-expand-sm bg-dark navbar-dark"">
   <a class="navbar-brand" href="#">
    <img src="../../img/colegio.png" alt="Logo" style="width:40px;">
  </a>
   <ul class="navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="">Usuarios</a>
    </li>
  <ul class="navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="">Docentes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">Estudiantes</a>
    </li>
     <li class="nav-item">
        <a class="nav-link" href="">Materias</a>
    </li>
     <li class="nav-item">
       <a href="cerrar_sesion.php"><button class="btn btn-danger col col align-self-end"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar Sesion</button></a>
            
    </li>
  
        
  
     </ul>
</nav>
 
        <br>
      
        <div class="container">
 <h1 style="color:blue;text-align:center;">LISTADO DE USUARIOS</h1>
          
  <div class="content" style="text-align:center;">
   <div class="justify-content-center">
    <div class="col-auto mt-5">
  <table class="table table-dark table-hover">
      <tr>
       
       <th width="20%">id usuario</th>  
       <th width="20%">Nombre</th>  
       <th width="20%">Apellido</th>  
       <th width="20%">Usuario</th>
       <th width="20%">Perfil</th>
       <th width="20%">Estado</th>      
       <th width="10%">Editar</th>  
       <th width="10%">Eliminar</th>  
      
      </tr>
            <tbody>


  <?php
 require_once('../../Conexion.php');
require_once('../modelos/administrador.php');
  $obj = new Administrador();
  //$datos = $obj->buscarconsultorio($bus);
  $datos = $obj->getadmin();


  foreach ($datos as $key){
      
                ?>
                
                    <tr>
                        <td><?php echo $key["id_usuario"] ?></td>
                        <td><?php echo $key["Nombreusu"] ?></td>
                        <td><?php echo $key["Apellidousu"] ?></td>
                        <td><?php echo $key["Usuario"] ?></td>
                        <td><?php echo $key["Perfil"] ?></td>
                        <td><?php echo $key["Estado"] ?></td>
                       <td> <a href="FeditarDatospacientes.php?id=?" class="btn btn-success">Actualizar</a>

                       </td>
                        
                        <td>
                         <td> <a href="FeditarDatospacientes.php?id=?" class="btn btn-success">Eliminar</a>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    
        </div>
        </div>
        </div>

       
    </body>
</html>
