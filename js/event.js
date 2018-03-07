var param = document.getElementsByClassName('toggleParams');
var addText2 = document.getElementById('addText2');
var addText3 = document.getElementById('addText3');
var hideText3 = document.getElementById('hideText3');
var hideText2 = document.getElementById('hideText2');
var toggleParam1 = document.getElementById('toggleParam1');
var toggleParam2 = document.getElementById('toggleParam2');
var toggleParam3 = document.getElementById('toggleParam3');
var border1 = document.getElementById('border1');
var border2 = document.getElementById('border2');
var border3 = document.getElementById('border3');
var borderColor1 = document.getElementById('border-color1');
var borderColor2 = document.getElementById('border-color2');
var borderColor3 = document.getElementById('border-color3');
var borderWidth1 = document.getElementById('border-width1');
var borderWidth2 = document.getElementById('border-width2');
var borderWidth3 = document.getElementById('border-width3');
var text1 = document.getElementById('text1');
var text2 = document.getElementById('text2');
var text3 = document.getElementById('text3');
var showText1 = document.getElementById('showText1');
var showText2 = document.getElementById('showText2');
var showText3 = document.getElementById('showText3');


    text1.addEventListener('keyup', function() {
      showText1.className = 'show';
      showText1.innerHTML = text1.value;
    });

    text2.addEventListener('keyup', function() {
      showText2.className = 'show';
      showText2.innerHTML = text2.value;
    });

    text3.addEventListener('keyup', function() {
      showText3.className = 'show';
      showText3.innerHTML = text3.value;
    });

    border1.addEventListener('click', function() {
      if (border1.checked == true) {
        borderColor1.className = 'tiny border-color show';
        borderWidth1.className = 'tiny border-width show';
      }
      else {
        borderColor1.className = 'hidden';
        borderWidth1.className = 'hidden';
      }
    });

    border2.addEventListener('click', function() {
      if (border2.checked == true) {
        borderColor2.className = 'tiny border-color show';
        borderWidth2.className = 'tiny border-width show';
      }
      else {
        borderColor2.className = 'hidden';
        borderWidth2.className = 'hidden';
      }
    });

    border3.addEventListener('click', function() {
      if (border3.checked == true) {
        borderColor3.className = 'tiny border-color show';
        borderWidth3.className = 'tiny border-width show';
      }
      else {
        borderColor3.className = 'hidden';
        borderWidth3.className = 'hidden';
      }
    });

    addText2.addEventListener('click', function() {
      divText2.className = 'show';
    });

    addText3.addEventListener('click', function() {
      divText3.className = 'show';
    });

    hideText3.addEventListener('click', function() {
      divText3.className = 'hidden';
      settings3.className = 'hidden';
    });

    hideText2.addEventListener('click', function() {
      divText2.className = 'hidden';
      settings2.className = 'hidden';
    });

    toggleParam1.addEventListener('click', function() {
      settings1.className = 'show';
      settings2.className = 'hidden';
      settings3.className = 'hidden';
    });

    toggleParam2.addEventListener('click', function() {
      settings2.className = 'show';
      settings1.className = 'hidden';
      settings3.className = 'hidden';
    });

    toggleParam3.addEventListener('click', function() {
      settings3.className = 'show';
      settings1.className = 'hidden';
      settings2.className = 'hidden';
    });
