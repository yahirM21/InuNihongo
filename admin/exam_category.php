<?php
session_start();
include "header.php";
include "../connection.php";

if(!isset($_SESSION["admin"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php

}

?>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Agregar cuestionario</h1>
                </div>
            </div>
        </div>

    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <form name="form1" action="" method="post">
                        <div class="card-body">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header"><strong>Agregar cuestionario</strong>

                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group"><label for="company"
                                                                       class=" form-control-label">Nuevo cuestionario
                                                </label><input type="text" name="examname"
                                                                       placeholder="Agrega un nuevo cuestionario"
                                                                       class="form-control" required>
                                        </div>
                                        <div class="form-group"><label for="vat" class=" form-control-label">Tiempo de cuestionario
                                                 </label><input
                                                type="text"  placeholder="Tiempo de cuestionario en minutos" class="form-control" name="examtime" required></div>

                                        <div class="form-group">

                                            <input type="submit" name="submit1" value="Agregar cuestionario" class="btn btn-success">

                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Cuestionarios</strong>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nombre de cuestionario</th>
                                                <th scope="col">Tiempo de cuestionario</th>
                                                <th scope="col">Editar</th>
                                                <th scope="col">Borrar</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php
                                            $count=0;
                                            $res=mysqli_query($link,"select * from exam_category");
                                            while($row=mysqli_fetch_array($res))
                                            {
                                           $count=$count+1;
                                                ?>
                                                <tr>
                                                    <th scope="row"><?php echo $count; ?></th>
                                                    <td><?php echo $row["category"]; ?></td>
                                                    <td><?php echo $row["exam_time_in_minutes"]; ?></td>
                                                    <td><a href="edit_exam.php?id=<?php echo $row["id"]; ?>">Editar</a></td>
                                                    <td><a href="delete.php?id=<?php echo $row["id"]; ?>">Borrar</a></td>
                                                </tr>

                                                <?php

                                            }

                                            ?>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>
                        </form>
                    </div>

                </div>
                <!--/.col-->


            </div>
        </div>
        <!-- .animated -->
    </div><!-- .content -->

<?php
if(isset($_POST["submit1"]))
{
    mysqli_query($link,"insert into exam_category values(NULL,'$_POST[examname]','$_POST[examtime]')") or die(mysqli_error($link));

    ?>
    <script type="text/javascript">
        alert("exam added successfully");
        window.location.href=window.location.href;
    </script>
    <?php

}

?>


<?php
include "footer.php";
?>