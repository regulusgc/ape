<?php
/**
 * Created by PhpStorm.
 * User: Regulus
 * Date: 29/08/2018
 * Time: 5:19 PM
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <title>Personas</title>
</head>
<body>
<nav>
    <div style="background-color: #000000 " >



    </div>
</nav>
<div class="container">

    <form class="well form-horizontal" action=" ../formulito/InsertarPersonaIn.php" method="post"  id="contact_form">
        <fieldset>

            <!-- Form Name -->
            <legend>Personas</legend>





            <!-- Text input-->


            <div class="form-group">
                <label class="col-md-4 control-label">Primer Nombre</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="Nombre" placeholder="Primer Nombre" class="form-control"  type="text" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Segundo Nombre</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="segundo" placeholder="Segundo Nombre" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" >Primer Apellido</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="apellido" placeholder="Primer Apellido" class="form-control"  type="text"required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" >Segundo Apellido</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="segundoape" placeholder="Segundo Apellido" class="form-control"  type="text" >
                    </div>
                </div>
            </div>


            <!-- Text input-->

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Telefono #</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input name="phone" placeholder="(845)555-1212" class="form-control" type="text" required>
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Direccion</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="address" placeholder="Direccion" class="form-control" type="text" required>
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Numero de Identificacion</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="dpi" placeholder="Numero" class="form-control"  type="text" required>
                    </div>
                </div>
            </div>

            <!-- Select Basic -->

            <div class="form-group">
                <label class="col-md-4 control-label">Fecha de Nacimiento</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input name="birthday" placeholder="Fecha" class="form-control"  type="date" required>
                    </div>
                </div>
            </div>

            <!-- Text input-->



            <!-- Success message -->
            <div class="alert alert-success" role="alert" id="success_message"> <i class="glyphicon glyphicon-thumbs-up"></i>
               USTED ESTA AQUI BAJO SU PROPIO RIESGO</div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
                </div>
                <div class="col-md-3">

                </div>
            </div>

        </fieldset>
    </form>
</div>
</div><!-- /.container -->
</body>
</html>



