// SHOW AND HIDE CAROUSEL

function showDiv() {
    var x = document.getElementById("hiddenDiv");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }

  function hideDiv() {
    var x = document.getElementById("hiddenDiv");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
