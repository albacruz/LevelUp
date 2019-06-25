function myFunction(id){
  
  document.getElementById("Kurs_id").value = id;


}

function myFunction3(id){
  
  document.getElementById("ang_id").value = id;


}



function myFunction2() {
  // Get the checkbox
  var button = document.getElementsByClassName("option");
  // Get the output text
  var text = document.getElementById("actions");
  var text2 = document.getElementById("actions2");

  
  text.style.display = "block";
  text2.style.display = "none";
}


function validate(){

  var x = document.forms["myForm"]["Postleitzahl"].value;
  var ercp=/(^([0-9]{5,5})|^)$/;
  ercp.test(x) ? true : false;

  if (!(ercp.test(x))) {
    alert("Invalid Postleitzahl");
    return false;
  }
}