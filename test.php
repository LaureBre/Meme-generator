<!-- HTML forms provide three methods of encoding.

    application/x-www-form-urlencoded (the default)
    multipart/form-data
    text/plain

use multipart/form-data when your form includes any <input type="file"> elements
-->

<script type="text/javascript">
  $(function(){
    $('#image').src = $_POST['file'];
    $('#src').html = $_POST['file'];
  });
</script>

<?php


  if (isset($_POST['soumettre'])) {

      if (getimagesize($_FILES['file']['tmp_name']) == false) {
        echo "Choisissez une image au format jpg ou png";
      }
      else {
        $image = addslashes($_FILES['file']['tmp_name']);
        $name = addslashes($_FILES['file']['name']);
        $image = file_get_contents($image);
        error_log($name . ' ' . $image);
        $image = base64_encode($image);
        saveImage($name, $image);
      }
  }

  include "param.php";

  function saveImage($name, $image)
  {

    try {
          // $conn = new PDO("mysql:host=localhost;dbname=Memes", 'eole', 'CorioMySQL&1');

          $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          // echo "Connected successfully";

          $qry = $conn->prepare("INSERT INTO Image (srcImage, fileImage)
                                 VALUES (:name, :image)");

          $qry->bindParam(':name', $name);
          $qry->bindParam(':image', $image);

          $qry->execute();
          $ligne = $qry->fetch();

          if ($ligne) {
            echo 'success';
          }
          else {
            echo 'echec';
          }
        }

    catch(PDOException $e)
        {
          $raison = $e->getMessage();
          if (strstr($raison, '[23000]')) {
            echo "<em>Entrée déjà existante.</em>";
          }
          else {
            echo "<em>L'insertion a échoué. </em>";
          }
        }
          displayImage();
    }

  function displayImage() {
    try {
          $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          // echo "Connected successfully";

          $qry = $conn->prepare("SELECT * FROM Image WHERE idImage = max(idImage)");

          $qry->execute();
          $ligne = $qry->fetch();
          if ($ligne = $result->fetch()) {
            echo '<img height="300" width="300" src="data:file;base64,"' . $ligne['fileImage'] . '">';
          }
          else {
            echo ('erreur');
          }
        }

    catch(PDOException $e)
        {
          $raison = $e->getMessage();
          if (strstr($raison, '[23000]')) {
            echo "<em>Entrée déjà existante.</em>";
          }
          else {
            echo "<em>L'insertion a échoué. </em>";
            echo $raison;
          }
        }

    // $result = mysql_query($qry, $conn);
    // $ligne= mysql_fetch_array($result);
    // echo '<img height="300" width="300" src="data:file;base64,"'.$ligne[3].'">';

    $conn = null;
  }
 ?>
