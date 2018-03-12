var submit = document.getElementById('subImage');
var image = document.getElementById('image');
var getUrl = document.getElementById('get-url');
var url = document.getElementById('url');
var imgWidth = 0;
var imgHeigth = 0;

var borderColor1 = document.getElementById('border-color1');
var borderColor2 = document.getElementById('border-color2');
var borderColor3 = document.getElementById('border-color3');
var borderWidth1 = document.getElementById('border-width1');
var borderWidth2 = document.getElementById('border-width2');
var borderWidth3 = document.getElementById('border-width3');
var text1 = document.getElementById('text1');
var text2 = document.getElementById('text2');
var text3 = document.getElementById('text3');
var divShowText = document.getElementById('showText');
var showText1 = document.getElementById('showText1');
var showText2 = document.getElementById('showText2');
var showText3 = document.getElementById('showText3');
var boxText1 = document.getElementById('box-text1');
var boxText2 = document.getElementById('box-text2');
var boxText3 = document.getElementById('box-text3');
var textColor1 = document.getElementById('text-color1');
var textColor2 = document.getElementById('text-color2');
var textColor3 = document.getElementById('text-color3');
var textSize1 = document.getElementById('text-size1');
var textSize2 = document.getElementById('text-size2');
var textSize3 = document.getElementById('text-size3');
var style1 = document.getElementsByClassName('style1');
var style2 = document.getElementsByClassName('style2');
var style3 = document.getElementsByClassName('style3');
var weigthText1 = '';
var styleText1 = '';
var weigthText2 = '';
var styleText2 = '';
var weigthText3 = '';
var styleText3 = '';
var family1 = document.getElementById('font-family1');
var family2 = document.getElementById('font-family2');
var family3 = document.getElementById('font-family3');
var left1 = document.getElementById('left1');
var center1 = document.getElementById('center1');
var right1 = document.getElementById('right1');
var left2 = document.getElementById('left2');
var center2 = document.getElementById('center2');
var right2 = document.getElementById('right2');
var left3 = document.getElementById('left3');
var center3 = document.getElementById('center3');
var right3 = document.getElementById('right3');
var xTxt1 = boxText1.offsetLeft;
var yTxt1 = showText1.offsetTop;
var xTxt2 = boxText2.offsetLeft;
var yTxt2 = showText2.offsetTop;
var xTxt3 = boxText3.offsetLeft;
var yTxt3 = showText3.offsetTop;
var variables = document.getElementById('variables');

var send = document.getElementById('send');

    if (getUrl) {
      url.value = getUrl.innerHTML;
      setImage();
    }

    init();

    function setImage() {
      image.src = url.value;
      imgWidth = image.clientWidth;
      imgHeigth = image.clientHeight;
      divShowText.style.width = imgWidth + "px";
      divShowText.style.height = imgHeigth + "px";
    }

    text1.addEventListener('keyup', function() {
      showText1.className = 'visible showText-p';
      showText1.style.width = image.clientWidth;
      boxText1.style.left = imgWidth / 2 - boxText1.clientWidth / 2;
      boxText1.style.color = textColor1.value;
      boxText1.innerHTML = text1.value;
      border1.disabled = false;
      variables.innerHTML = "['$xTxt1'=>" + xTxt1 + ", $yTxt1'=>" + yTxt1 +
                            ", $xTxt2'=>" + xTxt2 + ", $yTxt2'=>" + yTxt2 +
                            ", $xTxt3'=>" + xTxt3 + ", $yTxt3'=>" + yTxt3 + "']";
      console.log(variables);

    });

    text2.addEventListener('keyup', function() {
      showText2.className = 'visible showText-p';
      showText2.style.width = image.clientWidth;
      border2.disabled = false;
      boxText2.style.color = textColor2.value;
      boxText2.innerHTML = text2.value;
    });

    text3.addEventListener('keyup', function() {
      showText3.className = 'visible showText-p';
      showText3.style.width = image.clientWidth;
      border3.disabled = false;
      boxText3.style.color = textColor3.value;
      boxText3.innerHTML = text3.value;
    });

// BORDERS

    border1.addEventListener('click', function() {
      if (border1.checked == true) {
        borderColor1.className = 'tiny border-color show';
        borderWidth1.className = 'tiny border-width show';
        borderColor1.value = '#'+Math.floor(Math.random()*16777215).toString(16);
        borderWidth1.value = Math.floor(Math.random() * 10);
        updateBorder(1);
      }
      else {
        borderColor1.className = 'hide';
        borderWidth1.className = 'hide';
      }
    });

    border2.addEventListener('click', function() {
      if (border2.checked == true) {
        borderColor2.className = 'tiny border-color show';
        borderWidth2.className = 'tiny border-width show';
        borderColor2.value = borderColor1.value;
        updateBorder(2);
      }
      else {
        borderColor2.className = 'hide';
        borderWidth2.className = 'hide';
      }
    });

    border3.addEventListener('click', function() {
      if (border3.checked == true) {
        borderColor3.className = 'tiny border-color show';
        borderWidth3.className = 'tiny border-width show';
        borderColor3.value = borderColor2.value;
        updateBorder(3);
      }
      else {
        borderColor3.className = 'hide';
        borderWidth3.className = 'hide';
      }
    });

    borderColor1.addEventListener('change', function() {
      updateBorder(1);
    });
    borderColor2.addEventListener('change', function() {
      updateBorder(2);
    });
    borderColor3.addEventListener('change', function() {
      updateBorder(3);
    });

    borderWidth1.addEventListener('change', function() {
      updateBorder(1);
    });
    borderWidth2.addEventListener('change', function() {
      updateBorder(2);
    });
    borderWidth3.addEventListener('change', function() {
      updateBorder(3);
    });


// text COLOR

    textColor1.addEventListener('change', function() {
      boxText1.style.color = textColor1.value;
    });

    textColor2.addEventListener('change', function() {
      boxText2.style.color = textColor2.value;
    });

    textColor3.addEventListener('change', function() {
      boxText3.style.color = textColor3.value;
    });

// FONT-SIZE

    textSize1.addEventListener('change', function() {
      updateText(1);
    });
    textSize2.addEventListener('change', function() {
      updateText(2);
    });
    textSize3.addEventListener('change', function() {
      updateText(3);
    });

// Font FAMILY

    family1.addEventListener('change', function() {
      updateText(1);
    });
    family2.addEventListener('change', function() {
      updateText(2);
    });
    family3.addEventListener('change', function() {
      updateText(3);
    });

// BOLD ITALIC styles

    style1[0].addEventListener('click', function() {
      if (style1[0].checked) {
        weigthText1 = "bold";
      }
      else {
        weigthText1 = 'normal';
      }
      boxText1.style.fontWeight = weigthText1;
    });

    style1[1].addEventListener('click', function() {
      if (style1[1].checked) {
        styleText1 = 'italic';
      }
      else {
        styleText1 = 'normal';
      }
      boxText1.style.fontStyle = styleText1;
    });


    style2[0].addEventListener('click', function() {
      if (style2[0].checked) {
        weigthText2 = "bold";
      }
      else {
        weigthText2 = 'normal';
      }
      boxText2.style.fontWeight = weigthText2;
    });

    style2[1].addEventListener('click', function() {
      if (style2[1].checked) {
        styleText2 = 'italic';
      }
      else {
        styleText2 = 'normal';
      }
      boxText2.style.fontStyle = styleText2;
    });

    style3[0].addEventListener('click', function() {
      if (style3[0].checked) {
        weigthText3 = "bold";
      }
      else {
        weigthText3 = 'normal';
      }
      boxText3.style.fontWeight = weigthText3;
    });

    style3[1].addEventListener('click', function() {
      if (style3[1].checked) {
        styleText3 = 'italic';
      }
      else {
        styleText3 = 'normal';
      }
      boxText3.style.fontStyle = styleText3;
    });


    function updateBorder(x) {
      switch (x) {
        case 1:
          boxText1.style.border = borderWidth1.value + "px solid " + borderColor1.value;
          break;
        case 2:
          boxText2.style.border = borderWidth2.value + "px solid " + borderColor2.value;
          break;
        case 3:
          boxText3.style.border = borderWidth3.value + "px solid " + borderColor3.value;
          break;
      }
    }

    function updateText(x) {
      switch (x) {
        case 1:
          boxText1.style.font = styleText1 + " " + weigthText1 + " " +  textSize1.value + "px" + ' ' + family1.value;
          break;
        case 2:
          boxText2.style.font = styleText2 + " " + weigthText2 + " " +  textSize2.value + "px" + ' ' + family2.value;
          break;
        case 3:
          boxText3.style.font = styleText3 + " " + weigthText3 + " " +  textSize3.value + "px" + ' ' + family3.value;
          break;
      }

    }
