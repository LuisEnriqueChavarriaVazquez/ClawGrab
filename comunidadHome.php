<?php
include './componentesInterfaz/A_headerData.php';
?>

<section class="z-depth-2">
    <nav class="colorNavLight nav-extended">
        <div class="nav-wrapper">
            <a href="./home.php" data-target="mobile-demo" class="sidenav-trigger show-on-large"><i class="material-icons">arrow_back</i></a>
            <span class="titleNav flow-text"><?php echo $_OPT1 ?></span>
        </div>
    </nav>
</section>

<form action="#" class="right formAyuda blue-grey darken-4">
    <div class="switch  boxAyuda">
        <label class="white-text">
            <?php echo $_COMM1 ?>
            <input type="checkbox" value="1">
            <span class="lever"></span>
            <?php echo $_COMM2 ?>
        </label>
    </div>
</form>

<style>

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: white;
  opacity: 1; /* Firefox */
}

</style>

<section style="width: 100%;" class="boxBuscadorMine">
    <form method="post" class="buscardorPersonalizado z-depth-3">
        <input type="text" name="PalabraClave" class="textbox" placeholder="<?php echo $_COMM8 ?>">
        <input title="Search" value="🔍" type="submit" class="button">
    </form>
</section>
    
<!-- Tap Target Structure -->
<div class="tap-target blue-grey darken-4" data-target="menu">
    <div class="tap-target-content white-text">
        <h5><?php echo $_COMM3 ?></h5>
        <p><?php echo $_COMM4 ?></p>
    </div>
</div>



<?php

if (!empty($_POST)) {
    $aKeyword = explode(" ", $_POST['PalabraClave']);
    $query = "SELECT * FROM compartircodigo WHERE Palabra_Clave_1 like '%" . $aKeyword[0] . "%' OR Palabra_Clave_2 like '%" . $aKeyword[0] . "%' OR Palabra_Clave_3 like '%" . $aKeyword[0] . "%'";
    $result = $conn->query($query);
    $contenido = "";
    
    if (mysqli_num_rows($result) > 0) {
        $row_count = 0;

        echo "<section class='bodyStyleBlack'>";
        while ($row = $result->fetch_assoc()) {
            $row_count++;
            //echo "<tr><td>".$row_count." </td><td>". $row['Palabra_Clave_1'] . "</td><td>". $row['Palabra_Clave_2'] . "</td></tr>";
            $contenido = $row['NombreArchivo'];
            echo "
                <div class='holeCardDescarga z-depth-3'>
                <div class='tituloCardDescarga'>
                    <div class='truncate'>" .
                $row['Nombre'];
            echo " </div>
                    <div>
                        <div class='chip truncate'>" .
                $row['Palabra_Clave_1'];
            echo "</div>
                        <div class='chip truncate'>" .
                $row['Palabra_Clave_2'];
            echo "</div>
                        <div class='chip truncate'>" .
                $row['Palabra_Clave_3'];
            echo "</div>
                    </div>
                </div>
                <a href=uploads/"; echo $contenido;  echo">
                <div class='buttonDownloadCard waves-effect waves-light'>
                    <i class='material-icons'>cloud_download</i> &nbsp;&nbsp;
                    <span>"; echo $_COMM5; echo"</span>
                </div>
                </a>
            </div>
            ";
        }
        echo "
            
            </section>
            
        ";
    } else {
        echo "<br><br><br>   
            <div class='row'>
            <div class='col s12 m6'>
            <div class='card red darken-4'>
                <div class='card-content white-text'>
                <span class='card-title'>"; echo $_COMM6; echo"</span>
                <p>"; echo $_COMM7; echo"</p>
                </div>
            </div>
            </div>
            </div>
        ";
    }
}

?>



<div class='fixed-action-btn direction-top'>
    <a id="menu" class='btn-floating waves-effect btn-large btnFloatingComunidad' href='formSubirProyecto.php'>
        <i class='large material-icons'>cloud_upload</i>
    </a>
</div>

<?php
include './componentesInterfaz/A_footerData.php';
?>