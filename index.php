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

      <form action="" method="POST" id="loadImage" enctype="multipart/form-data">

        <!-- LEFT PART : text -->
        <div class="divText block">
          <p>
            <input type="text" name="url" placeholder="image URL">
            <button type="submit" name="subImage">Submit</button>
            <p class="hidden">&nbsp;or&nbsp;
              <input type="file" name="file">
            </p>
            <!-- <select name="src">
              <option value="">from list</option>
            </select> -->
          </p>

      </form>

      <form action="" method="POST" id="options">

          <!-- First Text -->
          <div id="divText1" class="show divText">
            <p>
              <textarea id="text1" name="text1" class="text" placeholder="Text"></textarea>
            </p>
            <p class="tinies">
              <input type="color" id="text-color1" name="color1" class="tiny text-color">
              <input type="number" step=2 min=1 max=151 id="text-size1" name="text-size1" class="tiny text-size">
              <input type="checkbox" id="border1" name="border1" class="tiny border">
              <input type="color" id="border-color1" name="border-color1" class="hidden">
              <input type="number" id="border-width1" name="border-width1" placeholder="2" class="hidden">
              <!-- button open parameters -->
              <button type="button" name="param1" id="toggleParam1" class="tiny toggleParams">
                  <object data="img/param.svg" type="image/svg+xml">
                    <img src="img/param.png" />
                  </object>
              </button>
              <button type="button" id="addText2" class="next tiny">+</button>
            </p>
          </div>

          <!-- Params -->
          <div class="settings hidden" id="settings1">
            <!-- font-family -->
            <p>
              <select name="font-family">
                <option value="Montserrat">Montserrat</option>
                <option value="Rubik">Rubik</option>
              </select>
              <input type="checkbox" value="bold">Bold
              <input type="checkbox" value="italic">Italic
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
                <object data="img/align-right.svg" type="image/svg+xml">
                  <img src="img/align-right.png"/>
                </object>
              </span>
          </p>
          </div>

          <!-- Second Text -->
          <div id="divText2" class="hidden divText">
            <p>
              <textarea id="text2" name="text2" class="text" placeholder="Text"></textarea>
            </p>
            <p class="tinies">
              <input type="color" id="text-color2" name="color2" class="tiny text-color">
              <input type="number" step=2 min=1 max=151 id="text-size2" name="text-size2" class="tiny text-size">
              <input type="checkbox" id="border2" name="border2" class="tiny border">
              <input type="color" id="border-color2" name="border-color2" class="hidden">
              <input type="number" id="border-width2" name="border-width2" placeholder="2" class="hidden">
              <!-- button open parameters -->
              <button type="button" name="param2" id="toggleParam2" class="tiny toggleParams">
                  <object data="img/param.svg" type="image/svg+xml">
                    <img src="img/param.png" />
                  </object>
              </button>
              <button type="button" id="hideText2" class="tiny previous">-</button>
              <button type="button" id="addText3" class="next tiny">+</button>
            </p>
          </div>
          <!-- Params -->
          <div class="settings hidden" id="settings2">
            <!-- font-family -->
            <p>
              <select name="font-family">
                <option value="Montserrat">Montserrat</option>
                <option value="Rubik">Rubik</option>
              </select>
              <input type="checkbox" value="bold">Bold
              <input type="checkbox" value="italic">Italic
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

          <!-- Third Text -->
          <div id="divText3" class="hidden divText">
            <p>
              <textarea id="text3" name="text3" class="text" placeholder="Text"></textarea>
            </p>
            <p class="tinies">
              <input type="color" id="text-color3" name="color3" class="tiny text-color">
              <input type="number" step=2 min=1 max=151 id="text-size3" name="text-size3" class="tiny text-size">
              <input type="checkbox" id="border3" name="border3" class="tiny border">
              <input type="color" id="border-color3" name="border-color3" class="hidden">
              <input type="number" id="border-width3" name="border-width3" placeholder="2" class="hidden">
              <!-- button open parameters -->
              <button type="button" name="param3" id="toggleParam3" class="tiny toggleParams">
                  <object data="img/param.svg" type="image/svg+xml">
                    <img src="img/param.png"/>
                  </object>
              </button>
              <button type="button" id="hideText3" class="tiny previous">-</button>
            </p>
          </div>

          <!-- Params -->
          <div class="settings hidden" id="settings3">
            <!-- font-family -->
            <p>
              <select name="font-family">
                <option value="Montserrat">Montserrat</option>
                <option value="Rubik">Rubik</option>
              </select>
              <input type="checkbox" value="bold">Bold
              <input type="checkbox" value="italic">Italic
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

          <button type="submit" name="subOptions">Envoyer</button>

        </div>

        <!-- RIGHT PART : image -->
        <div class="divImage block">
          <p>
            <span id="src"></span>
          </p>
          <div id="pImage">

            <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
              <?php
                // include "test.php";
              ?> -->
            <img src="img/placeholder.png" alt="your image" id="image">
            <p id="showText1" class="hidden">Text</p>
            <p id="showText2" class="hidden">Text</p>
            <p id="showText3" class="hidden">Text</p>
          </div>

          <br>
        </div>
      </form>
  </main>

  <script src="js/event.js" type="text/javascript"></script>

</body>
</html>
