<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Memes</title>
  <link rel="icon" href="img/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates|Mina" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <!-- <script src="js/send.js" type="text/javascript" async></script> -->
  <script src="js/event.js" type="text/javascript" async></script>
</head>
<body>

  <header>
    <h1>Memes creation</h1>
  </header>



  <main>

      <form action="" method="POST" id="loadImage"> <!--enctype="multipart/form-data"> -->

        <!-- LEFT PART : text -->
        <div class="divText block">
          <p class="line">
            <input type="text" id="url" name="url" placeholder="image URL">
            <button type="submit" id="subImage" name="subImage">Submit</button>
            <p class="line hide">&nbsp;or&nbsp;
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
            <p class="line">
              <textarea id="text1" name="text1" class="text" placeholder="Text"></textarea>
            </p>
            <p class="line tinies">
              <input type="color" id="text-color1" name="color1" class="tiny text-color">
              <input type="number" min=1 max=151 value=50 id="text-size1" name="text-size1" class="tiny text-size">
              <!-- button open parameters -->
              <button type="button" name="param1" id="toggleParam1" class="tiny toggleParams">
                <object data="img/param.svg" type="image/svg+xml">
                  <img src="img/param.png" />
                </object>
              </button>
              <input type="checkbox" id="border1" name="border1" class="tiny border" disabled>
              <input type="color" id="border-color1" name="border-color1" class="hide">
              <input type="number" id="border-width1" name="border-width1" min=0 max=20 placeholder="2" class="hide">
              <button type="button" id="addText2" class="next tiny">+</button>
            </p>
          </div>

          <!-- Params -->
          <div class="settings hide" id="settings1">
            <!-- font-family -->
            <p class="line">
              <select name="font-family1" id="font-family1">
                <option value="Arial">Arial</option>
                <!-- <option value="Arial Black">Arial Black</option>
                <option value="Comic Sans MS">Comic Sans MS</option> -->
                <option value="Courier New">Courier New</option>
                <!-- <option value="Georgia">Georgia</option>
                <option value="Impact">Impact</option>
                <option value="Lucida Console">Lucida Console</option>
                <option value="Lucida Sans Console">Lucida Sans Console</option>
                <option value="Palatino Linotype, Book Antiqua">Palatino Linotype, Book Antiqua</option>
                <option value="Tahoma">Tahoma</option> -->
                <option value="Times New Roman">Times New Roman</option>
                <!-- <option value="Trebuchet MS">Trebuchet MS</option>
                <option value="Verdana">Verdana</option>
                <option value="MS Sans Serif">MS Sans Serif</option>
                <option value="MS Serif">MS Serif</option>
                <option value="Symbol">Symbol</option>
                <option value="Webdings">Webdings</option> -->
              </select>
              <input type="checkbox" class="style1" name="style1" value="bold">Bold
              <input type="checkbox" class="style1" name="style1" value="italic">Italic
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
                  <img src="img/align-right.png"/>
                </object>
              </span>
          </p>
          </div>

          <!-- Second Text -->
          <div id="divText2" class="hide divText">
            <p class="line">
              <textarea id="text2" name="text2" class="text" placeholder="Text"></textarea>
            </p>
            <p class="line tinies">
              <input type="color" id="text-color2" name="color2" class="tiny text-color">
              <input type="number"  min=1 max=151 value=50 id="text-size2" name="text-size2" class="tiny text-size">
              <!-- button open parameters -->
              <button type="button" name="param2" id="toggleParam2" class="tiny toggleParams">
                <object data="img/param.svg" type="image/svg+xml">
                  <img src="img/param.png" />
                </object>
              </button>
              <input type="checkbox" id="border2" name="border2" class="tiny border" disabled>
              <input type="color" id="border-color2" name="border-color2" class="hide">
              <input type="number" id="border-width2" name="border-width2" min=1 max=20 placeholder="2" class="hide">
              <button type="button" id="hideText2" class="tiny previous">-</button>
              <button type="button" id="addText3" class="next tiny">+</button>
            </p>
          </div>
          <!-- Params -->
          <div class="settings hide" id="settings2">
            <!-- font-family -->
            <p class="line">
              <select name="font-family2" id="font-family2">
                <option value="Montserrat">Montserrat</option>
                <option value="Rubik">Rubik</option>
              </select>
              <input type="checkbox" class="style2" name="style2" value="bold">Bold
              <input type="checkbox" class="style2" name="style2" value="italic">Italic
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
          <div id="divText3" class="hide divText">
            <p class="line">
              <textarea id="text3" name="text3" class="text" placeholder="Text"></textarea>
            </p>
            <p class="line tinies">
              <input type="color" id="text-color3" name="color3" class="tiny text-color">
              <input type="number"  min=1 max=151 value=50 id="text-size3" name="text-size3" class="tiny text-size">
              <!-- button open parameters -->
              <button type="button" name="param3" id="toggleParam3" class="tiny toggleParams">
                <object data="img/param.svg" type="image/svg+xml">
                  <img src="img/param.png"/>
                </object>
              </button>
              <input type="checkbox" id="border3" name="border3" class="tiny border" disabled>
              <input type="color" id="border-color3" name="border-color3" class="hide">
              <input type="number" id="border-width3" name="border-width3" placeholder="2" min=0 max=20 class="hide">
              <button type="button" id="hideText3" class="tiny previous">-</button>
            </p>
          </div>

          <!-- Params -->
          <div class="settings hide" id="settings3">
            <!-- font-family -->
            <p class="line">
              <select name="font-family3" id="font-family3">
                <option value="Montserrat">Montserrat</option>
                <option value="Rubik">Rubik</option>
              </select>
              <input type="checkbox" class="style3" name="style3" value="bold">Bold
              <input type="checkbox" class="style3" name="style3" value="italic">Italic
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

          <button type="submit" id="send" name="subOptions">Send</button>

        </div>

        <!-- RIGHT PART : image -->
        <div class="divImage block">
          <div id="pImage">

            <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
              <?php
                // include "test.php";
              ?> -->
            <img src="img/placeholder.png" alt="your image" id="image">
            <div id="conteneur">
              <div id="showText">
                <div id="showText1" class="hidden">
                  <p id="box-text1" class="box-text">Top text</p>
                </div>
                <div id="showText2" class="hidden">
                  <p id="box-text2" class="box-text">Central text</p>
                </div>
                <div id="showText3" class="hidden">
                  <p id="box-text3" class="box-text">Bottom text</p>
                </div>
              </div>
            </div>
          </div>

          <p id="variables" hidden></p>

          <br>
        </div>
      </form>
  </main>


</body>
</html>
