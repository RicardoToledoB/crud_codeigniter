<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>CRUD CODEIGNITER</title>

        <link href="/code/public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/code/public/bootstrap/css/blog.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>

        <div class="blog-masthead">
            <div class="container">
                <nav class="blog-nav">
                    <a class="blog-nav-item active" href="#">Home</a>
                    <a class="blog-nav-item" href="#">Usuarios</a>
                    <a class="blog-nav-item" href="#">Ciudades</a>
                    <a class="blog-nav-item" href="#">Paises</a>
                    <a class="blog-nav-item" href="#">Acerca De</a>
                </nav>
            </div>
        </div>

        <div class="container">

            <div class="blog-header">
                <h3 class="blog-title">Crud codeigniter</h3>
                <p class="lead blog-description">Ejemplo codeignier y Bootstrap.</p>
            </div>

            <div class="row">

                <div class="col-sm-12 blog-main">

                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">Modulo Ciudades</div>
                        <div class="panel-body">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Nueva Ciudad</button>
                        </div>

                        <!-- Table -->
                        <table class="table table-striped table-hover" id="tblciudades">
                            

                        </table>
                    </div>

                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Nueva Ciudad</h4>
                        </div>
                        <form action="../ciudades/add" method="POST" id="NuevaCiudad">

                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="nombre">Nombre Ciudad</label>
                                    <input type="nombre" class="form-control" id="nombre" name="nombre" placeholder="Nombre Ciudad">
                                </div>
                                <div class="form-group">
                                    <label for="pais_id">Pais id</label>
                                    <select class="form-control" id="pais_id" name="pais_id">


                                    </select>
                                    <!--<input type="pais_id" class="form-control" id="pais_id" name="pais_id" placeholder="Pais Id">-->
                                </div>
                                <div class="form-group">
                                    <label for="estado">Estado</label>
                                    <select class="form-control" id="estado" name="estado">
                                        <option>Activo</option>
                                        <option>Pasivo</option>

                                    </select>
                                </div>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <button type="submit" id="add" class="btn btn-primary" >Save changes</button>
                                <!-- <input type="submit" value="Regisrar" />-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div><!-- /.container -->

        <footer class="blog-footer">
            <p>Ejemplo <a href="http://getbootstrap.com">Bootstrap</a> by Ricardo Toledo.</p>

        </footer>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="/code/public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
            cargar_paises();
            cargar_ciudades();
            $("#add").click(function (e) {
                $.ajax({
                url: $('form#NuevaCiudad').attr('action'),
                        method: $('form#NuevaCiudad').attr('method'),
                        data: $('form#NuevaCiudad').serializeArray()
                }).success(function (data) {
                        console.log("ALGO:" + data);
                        $('#myModal').modal('hide');
                        cargar_ciudades();
                }).fail(function (response, textStatus, errorThrown) {
                        console.log(errorThrown);
                });
                        e.preventDefault();
            });
            function cargar_paises() {
                    var baseurl = 'http://localhost:8888/code/';
                            $.get(baseurl + 'index.php/ciudades/listado_paises', function (data) {
                            console.log(data);
                                    var result = JSON.parse(data);
                                    $.each(result, function (i, val) {
                                    console.log(val);
                                            $("#pais_id").append('<option value=' + val.pais_id + '>' + val.nombre + '</option>');
                                    });
                            });
            }
            function cargar_ciudades(){
                    
                    var baseurl = 'http://localhost:8888/code/';
                    $.get(baseurl + 'index.php/ciudades/listado_ciudades', function (data) {
                    //console.log(data);
                    $("#tblciudades").append('<thead><tr><th>Id</th><th>Nombre</th><th>Pais id</th><th> Estado </th><th> Accion </th></tr></thead>');
                    var result = JSON.parse(data);
                    $("#tblciudades").append('<tbody>');
                        $.each(result, function (i, val) {
                                    $("#tblciudades").append('<tr>\n\
                                        <td>'+ val.ciudad_id+'</td>\n\
                                        <td>'+val.nombre+'</td>\n\
                                        <td>'+val.pais_id+'</td>\n\
                                        <td>'+val.estado+'</td>\n\
                                        <td>\n\
                                            <button type="button" class="btn btn-success btn-xs">Edit</button>\n\
                                            <button type="button" class="btn btn-info btn-xs">View</button>\n\
                                            <button type="button" class="btn btn-danger btn-xs">Delete</button>\n\
                                        </td>\n\
                                        </tr>');
                    });
                    $("#tblciudades").append('</tbody>');
                });
            }
        });
        </script>

    </body>
</html>