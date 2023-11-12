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
$id=$_GET["id"];
$id1=$_GET["id1"];

$question="";
$opt1="";
$opt2="";
$opt3="";
$opt4="";
$answer="";

$res=mysqli_query($link,"select * from questions where id=$id");
while($row=mysqli_fetch_array($res))
{
    $question=$row["question"];
    $opt1=$row["opt1"];
    $opt2=$row["opt2"];
    $opt3=$row["opt3"];
    $opt4=$row["opt4"];
    $answer=$row["answer"];


}

?>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Modificar pregunta</h1>
                </div>
            </div>
        </div>

    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body">

                            <div class="col-lg-12">
                                <form name="form1" action="" method="post" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-header"><strong>Modificar preguntas con texto</strong>

                                        </div>
                                        <div class="card-body card-block">
                                            <div class="form-group"><label for="company"
                                                                           class=" form-control-label">Añadir pregunta
                                                </label><input type="text" name="question"
                                                               placeholder="Agrega una pregunta"
                                                               class="form-control" value="<?php echo $question; ?>" required>
                                            </div>
                                            <div class="form-group"><label for="company"
                                                                           class=" form-control-label">Agregar Opc.1
                                                </label><input type="text" name="opt1"
                                                               placeholder="Agregar Opc.1"
                                                               class="form-control" value="<?php echo $opt1; ?>" required>
                                            </div>

                                            <div class="form-group"><label for="company"
                                                                           class=" form-control-label">Agregar Opc.2
                                                </label><input type="text" name="opt2"
                                                               placeholder="Agregar Opc.2"
                                                               class="form-control" value="<?php echo $opt2; ?>" required>
                                            </div>

                                            <div class="form-group"><label for="company"
                                                                           class=" form-control-label">Agregar Opc.3
                                                </label><input type="text" name="opt3"
                                                               placeholder="Agregar Opc.3"
                                                               class="form-control" value="<?php echo $opt3; ?>" required>
                                            </div>

                                            <div class="form-group"><label for="company"
                                                                           class=" form-control-label">Agregar Opc.4
                                                </label><input type="text" name="opt4"
                                                               placeholder="Agregar Opc.4"
                                                               class="form-control" value="<?php echo $opt4; ?>" required>
                                            </div>

                                            <div class="form-group"><label for="company"
                                                                           class=" form-control-label">Añadir respuesta
                                                </label><input type="text" name="answer"
                                                               placeholder="Añadir respuesta"
                                                               class="form-control" value="<?php echo $answer; ?>" required>
                                            </div>

                                            <div class="form-group">

                                                <input type="submit" name="submit1" value="Modificar respuesta"
                                                       class="btn btn-success">

                                            </div>

                                        </div>
                                    </div>

                                    </form>

                            </div>

                        </div>
                    </div>

                </div>
                <!--/.col-->


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->


<?php
if(isset($_POST["submit1"]))
{
    mysqli_query($link,"update questions set question='$_POST[question]',opt1='$_POST[opt1]',opt2='$_POST[opt2]',opt3='$_POST[opt3]',opt4='$_POST[opt4]',answer='$_POST[answer]' where id=$id");

    ?>
    <script type="text/javascript">
        window.location="add_edit_questions.php?id=<?php echo $id1 ?>";
    </script>
    <?php


}

?>


<?php
include "footer.php";
?>