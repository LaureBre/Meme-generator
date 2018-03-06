<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Memes</title>
  <link rel="icon" href="img/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <header>
    <h1>Memes creation</h1>
  </header>



  <main>

      <form action="" method="POST" enctype="multipart/form-data">

        <?php
          include "test.php";
        ?>

        <!-- LEFT PART : text -->
        <div class="divText block">
          <p>
            <input type="text" name="url" placeholder="image URL">
            or
            <input type="file" name="file">
            <!-- <select name="src">
              <option value="">from list</option>
            </select> -->
          </p>

          <!-- First Text -->
          <p class="show">
            <textarea name="text1" class="text" placeholder="Text"></textarea>
          </p>
          <p class="tinies hidden">
            <input type="color" name="color1" class="tiny">
            <input type="color" name="border-color1" class="tiny">
            <input type="checkbox" name="border1" class="tiny">
            <input type="number" name="border-width1" placeholder="2" class="tiny">
            <!-- button open parameters -->
            <button type="button" name="param1" class="tiny">
                <object data="img/param.svg" type="image/svg+xml">
                  <img src="img/param.png" />
                </object>
            </button>
            <button type="button" class="tiny">+</button>
          </p>

          <!-- Second Text -->
          <p class="hidden">
            <textarea name="text2" class="text" placeholder="Text"></textarea>
          </p>
          <p class="tinies hidden">
            <input type="color" name="color2" class="tiny">
            <input type="color" name="border-color2" class="tiny">
            <input type="checkbox" name="border2" class="tiny">
            <input type="number" name="border-width2" placeholder="2" class="tiny">
            <!-- button open parameters -->
            <button type="button" name="param2" class="tiny">
                <object data="img/param.svg" type="image/svg+xml">
                  <img src="img/param.png" />
                </object>
            </button>
            <button type="button" class="tiny add">+</button>
          </p>

          <!-- Third Text -->
          <p>
            <textarea name="text3" class="text" placeholder="Text"></textarea>
          </p>
          <p class="tinies hidden">
            <input type="color" name="color3" class="tiny">
            <input type="color" name="border-color3" class="tiny">
            <input type="checkbox" name="border3" class="tiny">
            <input type="number" name="border-width3" placeholder="2" class="tiny">
            <!-- button open parameters -->
            <button type="button" name="param3" class="tiny">
                <object data="img/param.svg" type="image/svg+xml" class="tiny">
                  <img src="img/param.png"  class="tiny"/>
                </object>
            </button>
            <button type="button" class="tiny minus">-</button>
          </p>

          <!-- Params -->
          <div class="settings hidden" id="settings1">
            <!-- font-family -->
            <p>
              <select name="font-family">
                <option value="Montserrat">Montserrat</option>
                <option value="Rubik">Rubik</option>
              </select>
            </p>
            <p>
              <input type="checkbox" value="bold">Bold
              <input type="checkbox" value="italic">Italic
            </p>
            <p>
              <span>
                <input type="radio" name="align" id="left" value="left">
                  <object data="img/align-left.svg" type="image/svg+xml" class="tiny">
                    <img src="img/align-left.png"  class="tiny"/>
                  </object>
              </span>
              <span>
                <input type="radio" name="align" value="center" id="center" checked>
                <object data="img/align-center.svg" type="image/svg+xml" class="tiny">
                  <img src="img/align-center.png"  class="tiny"/>
                </object>
              </span>
              <span>
                <input type="radio" name="align" id="right" value="right">
                <object data="img/align-right.svg" type="image/svg+xml" class="tiny">
                  <img src="img/align-right.png"  class="tiny"/>
                </object>
              </span>
          </p>
          </div>

        </div>

        <!-- RIGHT PART : image -->
        <div class="divImage block">
          <p>
            <span id="src"></span>
          </p>
          <div id="pImage">
            <!-- <img src="" alt="your image" id="image"> -->
          </div>

          <button type="submit" name="soumettre">Envoyer</button>
        </div>
      </form>
  </main>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</body>
</html>
