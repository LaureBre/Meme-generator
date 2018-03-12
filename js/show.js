
// INITIAL SETTINGS function

  function init() {
    border1.checked = false;
    border2.checked = false;
    border3.checked = false;
    style1[0].checked = false;
    style1[1].checked = false;
    style2[0].checked = false;
    style2[1].checked = false;
    style3[0].checked = false;
    style3[1].checked = false;
    left1.checked = false;
    center1.checked = true;
    right1.checked = false;
    left2.checked = false;
    center2.checked = true;
    right2.checked = false;
    left3.checked = false;
    center3.checked = true;
    right3.checked = false;

    textColor1.value = '#'+Math.floor(Math.random()*16777215).toString(16);
    text1.value = '';
    textSize1.value = 50;
    boxText1.style.color = textColor1.value;
    boxText1.style.font = "50px Arial";
    textColor2.value = '#'+Math.floor(Math.random()*16777215).toString(16);
    text2.value = '';
    textSize2.value = 50;
    boxText2.style.color = textColor2.value;
    boxText2.style.font = "50px Arial";
    textColor3.value = '#'+Math.floor(Math.random()*16777215).toString(16);
    text3.value = '';
    textSize3.value = 50;
    boxText3.style.color = textColor3.value;
    boxText3.style.font = "50px Arial";
  }

////////// toggling OPTIONS \\\\\\\\\\\\

  // more TEXT input

  addText2.addEventListener('click', function() {
    divText2.className = 'show';
    // divText2.style.top = image.style.height
  });

  addText3.addEventListener('click', function() {
    divText3.className = 'show';
  });

  hideText3.addEventListener('click', function() {
    divText3.className = 'hide';
    settings3.className = 'hide';
    divText3.value = '';
  });

  hideText2.addEventListener('click', function() {
    divText2.className = 'hide';
    settings2.className = 'hide';
    divText2.value = '';
  });


// PARAMETERS related to certain text input

    toggleParam1.addEventListener('click', function() {
      if (settings1.className == 'settings show') {
          settings1.className = 'settings hide';
      }
      else {
        settings1.className = 'settings show';
      }
      settings2.className = 'settings hide';
      settings3.className = 'settings hide';
    });

    toggleParam2.addEventListener('click', function() {
      if (settings2.className == 'settings show') {
          settings2.className = 'settings hide';
      }
      else {
        settings2.className = 'settings show';
      }
      settings1.className = 'settings hide';
      settings3.className = 'settings hide';
    });

    toggleParam3.addEventListener('click', function() {
      if (settings3.className == 'settings show') {
          settings3.className = 'settings hide';
      }
      else {
        settings3.className = 'settings show';
      }
      settings1.className = 'settings hide';
      settings2.className = 'settings hide';
    });
