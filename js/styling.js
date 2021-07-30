//styling version 1.2

// Image Background info
const body = document.querySelector("#Body");
const footer = document.querySelector("#Footer");
const igLink = document.querySelector("#IG");
//background photo stuff.
photoCredit = [
  "Stephan Seeber",
  "Eberhard Grossgasteiger",
  "Eberhard Grossgasteiger",
  "Trace Hudson",
  "Simon Matzinger",
  "Ian Beckley",
  "Simon Matzinger",
];

photoIGLink = [
  "https://www.instagram.com/Stywo/",
  "https://www.instagram.com/eberhard_grossgasteiger/",
  "https://www.instagram.com/eberhard_grossgasteiger/",
  "https://instagram.com/tracehudson_/",
  "https://www.instagram.com/simonmatzinger/",
  "https://instagram.com/bklyphoto/",
  "https://www.instagram.com/simonmatzinger/",
];

//Select from list of images
totalImages = 7;
selection = String(Math.floor(Math.random() * totalImages));

//Background Image
imageString =
  "background-image: url('img/backgrounds/" + selection + ".webp');";
localStorage.setItem("Image String", imageString);
image = false;

function imageBG() {
  // called within Styling
  footerText =
    "<div class = 'row'><div><div style = 'margin: 10px; padding: 5px;'><p id = 'Footer'><a href = 'https://donate.wikimedia.org/w/index.php?title=Special:LandingPage&country=US&uselang=en&utm_medium=donatewiki_page&utm_source=Ways_to_Give&utm_campaign=donate_now_btn'><img src = 'img/wiki.png' height = '75px' width = '75px' style = 'border-radius: 3px; margin-left:5px;' ></a>Most main typing content is sourced from Wikipedia. Please consider donating to maintain its great library of knowledge. <br><br><a id = 'IG'></a></p><p><a class = 'spare' href = 'FBPrivacyandTermsofService.php' style = 'padding:5px;'> &ensp; Click here for the Terms of Service and our Facebook Privacy Policy</a></p></div></div></div>";
  //body.setAttribute("style", imageString);
  body.style.backgroundImage = "url('img/backgrounds/" + selection + ".webp";

  //IG Link and Footer Text
  //Add new jpg image, add name of photographer, add their ig link.
  igLink.innerHTML =
    "<img src = 'img/ig.png' height = '40px' style = 'border-radius: 3px; margin-left:5px;'>";
  igLink.setAttribute("href", photoIGLink[selection]);

  if (!image) {
    footer.innerHTML =
      footer.innerHTML +
      "Like this beautiful image from photographer " +
      photoCredit[selection] +
      "? Click the IG link to checkout their portfolio!";
  }
  image = true;
}

style();

function style() {
  //text color
  if (
    localStorage.getItem("Text Color") !== null &&
    localStorage.getItem("Text Color") !== "reset" &&
    localStorage.getItem("Text Color") !== ""
  ) {
    let TextColor = "color: " + localStorage.getItem("Text Color") + ";";

    let all = document.getElementsByClassName("body");
    for (var c = 0; c < all.length; c++) {
      all[c].style.color = localStorage.getItem("Text Color");
    }

    let all1 = document.getElementsByClassName("nav-link");
    for (var c = 0; c < all1.length; c++) {
      //all1[c].setAttribute('style', TextColor);
      all1[c].style.color = localStorage.getItem("Text Color");
    }

    let all2 = document.getElementsByClassName("btn1");
    for (var c = 0; c < all2.length; c++) {
      all2[c].setAttribute("style", TextColor);
    }

    let all3 = document.getElementsByClassName("spare");
    for (var c = 0; c < all3.length; c++) {
      all3[c].setAttribute("style", TextColor);
    }
  } else {
    localStorage.setItem("Text Color", "white");
    style();
  }
  //var all = document.getElementsByClassName('someClass');
  //for (var i = 0; i < all.length; i++) {
  //   all[i].style.color = 'red';
  //}

  //Box Color
  if (
    localStorage.getItem("Box Color") !== null &&
    localStorage.getItem("Box Color") !== "reset" &&
    localStorage.getItem("Box Color") !== ""
  ) {
    let BoxColor =
      "background-color: " + localStorage.getItem("Box Color") + ";";

    var all = document.getElementsByClassName("mainBoxes");
    for (var c = 0; c < all.length; c++) {
      all[c].setAttribute("style", BoxColor);
    }

    let all1 = document.getElementsByClassName("Nav");
    for (var c = 0; c < all1.length; c++) {
      //all1[c].setAttribute('style', TextColor);
      all1[c].setAttribute("style", BoxColor);
    }

    let all2 = document.getElementsByClassName("btn1");
    for (var c = 0; c < all2.length; c++) {
      all2[c].setAttribute("style", BoxColor);
    }
    // modal
    let all3 = document.getElementsByClassName("modal-content");
    for (var c = 0; c < all3.length; c++) {
      all3[c].setAttribute("style", BoxColor);
    }
  } else {
    localStorage.setItem("Box Color", "#171F24");
    style();
  }

  //Highlight Color
  if (
    localStorage.getItem("Highlight") !== null &&
    localStorage.getItem("Highlight") !== "reset"
  ) {
    let all = document.getElementsByClassName("highlightColor");
    for (var c = 0; c < all.length; c++) {
      all[c].style.color = localStorage.getItem("Highlight");
    }

    all = document.getElementsByClassName("highlightColor2");
    for (var c = 0; c < all.length; c++) {
      all[c].style.backgroundColor = localStorage.getItem("Highlight");
    }
  } else {
    localStorage.setItem("Highlight", "green");
  }

  //Background Color
  if (
    localStorage.getItem("BG Color") !== null &&
    localStorage.getItem("BG Color") !== "reset" &&
    localStorage.getItem("BG Color") !== ""
  ) {
    body.style.backgroundImage = null;
    document.getElementById("Body").style.backgroundColor =
      localStorage.getItem("BG Color");
  } else {
    if (localStorage.getItem("BG Color") === "Image") {
      imageBG();
    } else {
      document.getElementById("Body").style.backgroundColor = "#121212";
    }
  }
  
  //Logo
  if (localStorage.getItem("Logo Color") === "false") {
    document.getElementById("Logo").src= "img\\Logo\\SF_logo_black.png"; 
    if(document.getElementById("LogoColorWrite") !== null){
      document.getElementById("LogoColorWrite").innerHTML = "Black"; 
    }  
  }else{
    document.getElementById("Logo").src= "img\\Logo\\SF_logo_white1.png";
    if(document.getElementById("LogoColorWrite") !== null){
      document.getElementById("LogoColorWrite").innerHTML = "White"; 
    }
    
  }
}

function setDarkMode() {
  localStorage.setItem("Text Color", "white");
  localStorage.setItem("BG Color", "#121212");
  localStorage.setItem("Box Color", "#171F24");
  localStorage.setItem("Highlight", "green");
  style();

  //set color boxes to theme colors
  getTextColor.value = "white";
  getBoxColor.value = "#121212";
  getBGColor.value = "#171F24";
  getHighlight.value = "green";
}

function setLightMode() {
  localStorage.setItem("Text Color", "black");
  localStorage.setItem("BG Color", "white");
  localStorage.setItem("Box Color", "white");
  localStorage.setItem("Highlight", "purple");
  style();

  //set color boxes to theme colors
  getTextColor.value = "black";
  getBoxColor.value = "white";
  getBGColor.value = "white";
  getHighlight.value = "purple";
}
