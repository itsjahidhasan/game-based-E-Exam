

function question1() {
  console.log("okay");
  if (document.getElementById("Que1") !== undefined) {
    if (document.getElementById("Que1").style.display == "block") {
      document.getElementById("Que1").style.display = "none";
      document.getElementById("Que2").style.display = "block";
      document.getElementById("game").style.display = "block";
      document.getElementById("question").style.display = "none";
      
    } else {
      document.getElementById("Que1").style.display = "block";
      document.getElementById("Que2").style.display = "none";
      
    }
  }
}
function question2() {
  console.log("okay");
  if (document.getElementById("Que2") !== undefined) {
    if (document.getElementById("Que2").style.display == "block") {
      document.getElementById("Que2").style.display = "none";
      document.getElementById("Que3").style.display = "block";
      document.getElementById("game").style.display = "block";
      document.getElementById("question").style.display = "none";
      
    } else {
      document.getElementById("Que2").style.display = "block";
      document.getElementById("Que3").style.display = "none";
      
    }
  }
}