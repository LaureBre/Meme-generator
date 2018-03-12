<?php
  session_start();
  $url = $_SESSION['url'];

  $text1 = $_SESSION['text1'];
  $text2 = $_SESSION['text2'];
  $text3 = $_SESSION['text3'];

  $fontSize1 = $_SESSION['textSize1'];
  $fontSize2 = $_SESSION['textSize2'];
  $fontSize3 = $_SESSION['textSize3'];
  $textColor1 = hexdec(str_replace("#", "", $_SESSION['textColor1']));
  $textColor2 = hexdec(str_replace("#", "", $_SESSION['textColor2']));
  $textColor3 = hexdec(str_replace("#", "", $_SESSION['textColor3']));
  // style[0] bold ou normal : booléen ; style[1] italic ou normal : booléen
  $style1 = $_SESSION['style1'];
  $style2 = $_SESSION['style2'];
  $style3 = $_SESSION['style3'];
  // En fonction du style (normal, bold, italic, bold italic), on va donner une police différente
  $fontFamily1 = strtolower($_SESSION['fontFamily1']);
  // Certaines fonts dans notre interface comportent plusieurs mots : on ne veut garder que le premier
  $words = explode(" ", $fontFamily1);
  // Pour la font Courier, son fichier .ttf est nommé cour.ttf
  if ($words[0] == "courier") {
    $fontFamily1 = "cour";
  }
  else {
    $fontFamily1 = $words[0];
  }
  $fontFamily2 = strtolower($_SESSION['fontFamily2']);
  if ($words[0] == "courier") {
    $fontFamily2 = "cour";
  }
  else {
    $fontFamily2 = $words[0];
  }
  $fontFamily3 = strtolower($_SESSION['fontFamily3']);
  if ($words[0] == "courier") {
    $fontFamily3 = "cour";
  }
  else {
    $fontFamily3 = $words[0];
  }

  // On construit le chemin de la font en fonction de son style
  putenv('GDFONTPATH=' . realpath('.'));
  // Pour indiquer à la librairie de ne pas chercher la font dans son propre dossier
  if (($style1[0] == false) && ($style1[1] == false)) { // font normale
    $fontFile1 = 'fonts/' . $words[0];
  }
  elseif (($style1[0] == true) && ($style1[1] == false)) { // font bold
    $fontFile1 = 'fonts/' . $words[0] . "bd";
  }
  if (($style1[0] == false) && ($style1[1] == true)) { // font italic
    $fontFile1 = 'fonts/' . $words[0] . "i";
  }
  if (($style1[0] == true) && ($style1[1] == true)) { // font bold italic
    $fontFile1 = 'fonts/' . $words[0] . "bi";
  }

  // $extension = end(explode(".", $url)); // ne marchait pas, je ne sais pas pourquoi
  $extension = pathinfo($url, PATHINFO_EXTENSION); // ATTENTION : ne fonctionne pas avec les urls des moteurs de recherche avec GET

  if ($extension == "png") {
    // On crée une variable de ressource pour contenir l'image originelle
    $source = imagecreatefrompng($url);
    header('Content-type: image/png');
  }
  elseif (($extension == "jpg") || ($extension == "jpeg")) {
    $source = imagecreatefromjpeg($url);
    header('Content-type: image/jpeg');
  }
  elseif ($extension == "gif") {
    $source = imagecreatefromgif($url);
    header('Content-type: image/gif');
  }

  // header( "refresh:10; url=index.php" ); // 2ème header complètemet différent fait tout planter, pas bonne idée

  // On récupère la largeur et la hauteur de l'image
  list($w, $h) = getimagesize($url);

  // On peut changer la largeur et la hauteur en sortie :
  if ($w > 400) {
    $img_width = 400;
    $img_height = (int)($h * $img_width / $w); // règle de trois pour ratio
  }
  else {
    $img_width = $w;
    $img_height = $h;
  }

// Crée une variable de ressource pour l'image cible
  $cible = imagecreatetruecolor($img_width, $img_height);

// destination, taille de police, angle de rotation, coordonnées, couleur, font-family, texte-lui-même)
  imagefttext ($cible, $fontSize1, 0, 0, 0, $textColor1, $fontFile1, $text1);

// destination, source, coordonnées cible x y, coordonnées source x y, largeur hauteur image cible, largeur hauteur image source
  imagecopyresized($cible, $source, 0, 0, 0, 0, $img_width, $img_height, $w, $h);

  // $urlCreation  = $_SERVER['DOCUMENT_ROOT'] . '/img/' . rand() . 'thumb.png';

  if ($extension == "png") {
    $urlCreation  = 'img/crea' . rand() . '.png';
    saveCreation($url, $urlCreation );
    imagepng($cible, $urlCreation );
    // imagepng($cible);
  }
  elseif (($extension == "jpg") || ($extension == "jpeg")) {
    $urlCreation  = 'img/crea' . rand() . '.jpeg';
    saveCreation($url, $urlCreation );
    imagejpeg($cible, $urlCreation );
    // imagejpeg($cible);
  }
  elseif ($extension == "gif") {
    $urlCreation  = 'img/crea' . rand() . '.gif';
    saveCreation($url, $urlCreation );
    imagegif($cible, $urlCreation );
    // imagegif($cible);
  }

  imagedestroy($cible);

  // $color = imagecolorallocate();
  // $truc = imagefttext('https://gifsdomi.files.wordpress.com/2012/06/gif-arobase-1.jpg?w=1000&h=', 16, 45, 0, 20, 16711680, )a

function saveCreation($url, $urlCreation ) {

  include "param.php";

  try {
      // CONNEXION
          $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // PREMIERE REQUETE : INSERTION URL IMAGE ORIGINELLE
          $qryInsertImage = $conn->prepare("INSERT INTO Image (srcImage)
                                                   VALUES (:image)    ");
          $qryInsertImage->bindParam(':image', $url);

          $qryInsertImage->execute();
          // Surtout pas de fetch : on insère, on ne consulte pas.

      // DEUXIEME REQUETE : RECUPERE L'ID de l'IMAGE ORIGINELLE
          $qryGetImageId = $conn->prepare("SELECT idImage FROM Image
                                                          WHERE srcImage = :idImage ");

          $qryGetImageId->bindParam(':idImage', $url);
          $qryGetImageId->execute();
          // Ici fetch pour récupérer la valeur
          $selectIdImage = $qryGetImageId->fetch();

            // Si on a bien récupéré quelque chose...
            if($selectIdImage) {

                // $selectIdImage->idImage ne marche pas, pourquoi ??! du coup 1er élément de l'array : $selectIdImage[0]

                $qryCreation = $conn->prepare("INSERT INTO Creation (idImage, srcCreation)
                                                      VALUES (:idImageO, :creation);");

                // On passe l'id qu'on a récupéré auparavant et le chemin de l'image
                $qryCreation->bindParam(':idImageO', $selectIdImage[0]);
                $qryCreation->bindParam(':creation', $urlCreation );

                $qryCreation->execute();
            }
            else {
                error_log('echec');
            }
        }

    catch(PDOException $e)
        {
          $raison = $e->getMessage();
          error_log("PDOException : " . $raison);
        }
      }
?>
