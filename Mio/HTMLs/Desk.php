<?php
require '../PHPs/ConsultaCli.php';
require '../PHPs/ConsultaPre.php';
require '../PHPs/ConsultaPag.php';
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <title>Proyecto</title>
    <link href="../CSS's/Login.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../Mio/CSS's/mainEdit.css"/>
    <noscript>
        <link rel="stylesheet" href="../../assets/css/noscript.css"/>
    </noscript>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">
    <!-- Nav -->
    <nav id="nav">
        <ul>
            <li><a href="#intro" class="active" style="color:gray; text-decoration:none">Home</a></li>
            <li><a href="#1ra" style="color: gray; text-decoration:none">Clientes</a></li>
            <li><a href="#2da" style="color:gray; text-decoration:none">Prestamos</a></li>
            <li><a href="#3ra" style="color:gray; text-decoration:none">Pagos</a></li>
            <li><a href="#4ta" style="color:gray; text-decoration:none">Cuenta</a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">

        <!-- Escritorio -->
        <section id="intro" class="main">
            <br><br><br><br>
            <div class="spotlight">
                <div class="content">
                    <header class="major">
                        <h2>Bienvenido</h2>
                    </header>
                    <p>-Registra Clientes <br> -Realiza Prestamos <br> -Administar Pagos <br> Puedes Navegar Por El Menu
                        Superior</p>
                </div>
                <span class="image"><img
                            src="https://cuidatufuturo.com/wp-content/uploads/2019/08/z-19-08-26-16-08-08-art.jpg"
                            alt=""/></span>
            </div>
        </section>
        <br><br><br><br><br><br><br><br>

        <!-- 1ra Section -->
        <section id="1ra" class="main special">
            <header class="major">
                <h2>Clientes</h2>
            </header>
            <ul class="features">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-box clearfix">
                            <div class="main-box-body clearfix">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-condensed table-hover">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Numero De Cliente</th>
                                            <th>Edad</th>
                                            <th>Telefono</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($query as $row){
                                        ?>
                                        <tr>
                                            <th id="1-1"><?php echo $row['Nombre'] ?></th>
                                            <th id="1-2"><?php echo $row['NumeroCliente'] ?></th>
                                            <th id="1-3"><?php echo $row['Edad'] ?></th>
                                            <th id="1-4"><?php echo $row['Telefono'] ?></th>
                                        </tr>
                                        </tbody>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                    <h2>
                                        <a href="#Cliente" style="color: gray; text-decoration:none">
                                            <button class="btn btn-success"><i class="fa fa-plus-circle"></i> Nuevo</button>
                                        </a>
                                    </h2>
                                    <h2>
                                        <form class="login__form" action="../PHPs/EliminarCli.php" method="post">
                                            <label>Eliminar Cliente</label>
                                            <select name="FormUno" class="form-control">
                                                <?php
                                                foreach ($query as $option){
                                                    ?>
                                                    <option value="<?php echo $option['Nombre']?>"><?php echo $option['Nombre']?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                            <input type="submit" class="btn btn-danger" value="Eliminar">
                                        </form>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </section>

        <!-- Second Section -->
        <section id="2da" class="main special">
            <header class="major">
                <h2>Prestamos</h2>
            </header>
            <ul class="features">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-box clearfix">
                            <div class="main-box-body clearfix">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-condensed table-hover">
                                        <thead>
                                        <tr>
                                            <th>Clientes</th>
                                            <th>Monto</th>
                                            <th>Fecha</th>
                                            <th>Interes</th>
                                            <th>Plazo</th>
                                            <th>Estado</th>
                                            <th>Pagos</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($queryPre as $rowPre){
                                        ?>
                                        <tr>
                                            <th id="2-1"><?php echo $rowPre['Cliente']?></th>
                                            <th id="2-2"><?php echo $rowPre['Monto']?></th>
                                            <th id="2-3"><?php echo $rowPre['Fecha']?></th>
                                            <th id="2-4"><?php echo $rowPre['Intereses']?></th>
                                            <th id="2-5"><?php echo $rowPre['Plazo']?></th>
                                            <th id="2-6" style="color: limegreen"><?php echo $rowPre['Estado']?></th>
                                            <th id="2-7"><?php echo $rowPre['Pagos']?></th>
                                            <th id="2-8"><?php echo $rowPre['Total']?></th>
                                        </tr>
                                        </tbody>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                    <h2 class="box-title">
                                        <a href="#Prestamo" style="color: gray; text-decoration:none">
                                            <button class="btn btn-success"><i class="fa fa-plus-circle"></i> Nuevo</button>
                                        </a>
                                    </h2>
                                    <h2>
                                        <form class="login__form" action="../PHPs/EliminarPre.php" method="post">
                                            <label>Eliminar Prestamo</label>
                                            <select name="FormDos" class="form-control">
                                                <?php
                                                foreach ($queryPre as $rowPre){
                                                    ?>
                                                    <option value="<?php echo $option['Cliente']?>"><?php echo $option['Cliente']?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                            <input type="submit" class="btn btn-danger" value="Eliminar">
                                        </form>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </section>

        <!-- 3ra Section -->
        <section id="3ra" class="main special">
            <header class="major">
                <h2>Pagos</h2>
            </header>
            <ul class="features">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-box clearfix">
                            <div class="main-box-body clearfix">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-condensed table-hover">
                                        <thead>
                                        <tr>
                                            <th>Cliente</th>
                                            <th>Fecha</th>
                                            <th>Monto</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($queryPag as $rowPag){
                                        ?>
                                        <tr>
                                            <th id="3-1"><?php echo $rowPag['Cliente']?></th>
                                            <th id="3-2"><?php echo $rowPag['Fecha']?></th>
                                            <th id="3-3"><?php echo $rowPag['Monto']?></th>
                                        </tr>
                                        </tbody>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                    <h2 class="box-title">
                                        <a href="#Pago" style="color: gray; text-decoration:none">
                                            <button class="btn btn-success"><i class="fa fa-plus-circle"></i> Nuevo</button>
                                        </a>
                                    </h2>
                                    <h2>
                                        <form class="login__form" action="../PHPs/EliminarPag.php" method="post">
                                            <label>Eliminar Pago</label>
                                            <select name="FormTres" class="form-control">
                                                <?php
                                                foreach ($queryPag as $rowPag){
                                                    ?>
                                                    <option value="<?php echo $option['Cliente']?>"><?php echo $option['Cliente']?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                            <input type="submit" class="btn btn-danger" value="Eliminar">
                                        </form>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </section>

        <!-- Ingresar Cliente-->
        <section id="Cliente" class="main special">
            <header class="major">
                <h2>Registrar Cliente</h2>
            </header>
            <ul class="features">
                <form class="login__form" action="../PHPs/GuardarCli.php" method="post">
                    <div class="main-box-body clearfix">
                        <div class="row">
                            <div class="form-group col-md-12 col-sm-8 col-xs-12">
                                <label>Nombre</label>
                                <input name="UnoNom" type="text" id="UnoNom" class="form-control" placeholder="Nombre"
                                       maxlength="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 col-sm-8 col-xs-12">
                                <label>Numero De Cliente</label>
                                <input name="UnoNdC" type="text" id="UnoNdC" class="form-control"
                                       placeholder="Numero De Cliente" maxlength="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 col-sm-8 col-xs-12">
                                <label>Edad</label>
                                <input name="UnoEda" type="text" id="UnoEda" class="form-control" placeholder="Edad"
                                       maxlength="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 col-sm-8 col-xs-12">
                                <label>Telefono</label>
                                <input name="UnoNum" type="text" id="UnoNum" class="form-control" placeholder="Telefono"
                                       maxlength="50">
                            </div>
                        </div>
                        <br>
                        <div class="form-group col-xs-12">
                            <a href="#1ra" style="color: gray; text-decoration:none">
                                <input type="submit" class="btn btn-primary" onclick="agregarCliente()" value="Guardar">
                            </a>
                            <a href="#1ra" style="color: gray; text-decoration:none">
                                <button class="btn btn-danger" type="button">Cancelar</button>
                            </a>
                        </div>
                    </div>
                </form>
            </ul>
        </section>

        <!-- Ingresar Prestamo-->
        <section id="Prestamo" class="main special">
            <header class="major">
                <h2>Registrar Prestamo</h2>
            </header>
            <br>
            <ul class="features">
                <form class="login__form" action="../PHPs/GuardarPre.php" method="post">
                    <div class="main-box-body clearfix">
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label>Cliente</label>
                                <input type="hidden">
                                <select name="DosNom" id="selectElementUno" class="form-control">
                                <?php
                                foreach ($query as $option){
                                ?>
                                    <option value="<?php echo $option['Nombre']?>"><?php echo $option['Nombre']?></option>
                                <?php
                                }
                                ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label>Monto</label>
                                <input name="DosMon" id="DosMon" type="text" class="form-control" placeholder="Monto"
                                       required>
                                <input type="hidden">
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label>Pagos</label>
                                <select name="DosPag" id="DosPag" class="form-control select-picker" required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label>Plazo</label>
                                <select name="DosPla" id="DosPla" class="form-control select-picker" required>
                                    <option value="Dia">Dia</option>
                                    <option value="Semana">Semana</option>
                                    <option value="Quincena">Quincena</option>
                                    <option value="Mes">Mes</option>
                                </select>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <a href="#2da" style="color: gray; text-decoration:none">
                                    <input type="submit" class="btn btn-primary" onclick="agregarPrestamos()"
                                           value="Guardar">
                                </a>
                                <a href="#2da" style="color: gray; text-decoration:none">
                                    <button class="btn btn-danger" type="button">Cancelar</button>
                                </a>
                            </div>
                        </div>
                        <br><br><br>
                    </div>
                </form>
            </ul>
        </section>

        <!-- Ingresar Pago -->
        <section id="Pago" class="main special">
            <header class="major">
                <h2>Registrar Cliente</h2>
            </header>
            <ul class="features">
                <form class="login__form" action="../PHPs/GuardarPag.php" method="post">
                    <div class="main-box-body clearfix">
                        <div class="row">
                            <div class="form-group col-sm-12 col-xs-12">
                                <label>Cliente</label>
                                <input type="hidden" required>
                                <select name="TresNom" id="selectElementDos" class="form-control">
                                    <?php
                                    foreach ($query as $option){
                                        ?>
                                        <option value="<?php echo $option['Nombre']?>"><?php echo $option['Nombre']?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-xs-12">
                                <label>Monto</label>
                                <input name="TresMon" id="TresMon" type="text" class="form-control" placeholder="Monto"
                                       required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group col-xs-12">
                            <center>
                                <a href="#3ra" style="color: gray; text-decoration:none">
                                    <input type="submit" class="btn btn-primary" onclick="agregarPago()" value="Guardar">
                                </a>
                                <a href="#3ra" style="color: gray; text-decoration:none">
                                    <button class="btn btn-danger" type="button"></i>Cancelar</button>
                                </a>
                            </center>
                        </div>
                        <br><br><br><br><br><br>
                    </div>
                </form>
            </ul>
        </section>

        <!-- 4ta Seccion -->
        <section id="4ta" class="main special">
            <header class="major">
                <h2>Admin</h2>
                <p>¿Desea Salir?</p>
            </header>
            <footer class="major">
                <ul class="actions special">
                    <a href="../../index.php" style="text-decoration:none">
                        <button class="btn btn-danger" type="button"><i class="fa fa-arrow-circle-left"></i> Salir
                        </button>
                    </a>
                </ul>
            </footer>
        </section>
    </div>
    <br>
    <center><p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p></center>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/jquery.scrollex.min.js"></script>
<script src="../../assets/js/jquery.scrolly.min.js"></script>
<script src="../../assets/js/browser.min.js"></script>
<script src="../../assets/js/breakpoints.min.js"></script>
<script src="../../assets/js/util.js"></script>
<script src="../../assets/js/main.js"></script>
<script src="../JS's/main.js"></script>
</body>
</html>