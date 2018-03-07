var param = document.getElementsByClassName('toggleParams');
var addText2 = document.getElementById('addText2');
var addText3 = document.getElementById('addText3');
var hideText3 = document.getElementById('hideText3');
var hideText2 = document.getElementById('hideText2');
var toggleParam1 = document.getElementById('toggleParam1');
var toggleParam2 = document.getElementById('toggleParam2');
var toggleParam3 = document.getElementById('toggleParam3');


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
