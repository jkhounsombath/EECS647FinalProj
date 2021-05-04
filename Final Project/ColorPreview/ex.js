function myFunc() {
  var text1 = document.getElementById("1R");
  var text2 = document.getElementById("1G");
  var text3 = document.getElementById("1B");
  var code1="#" + text1.value.toString(2) + text2.value.toString(2) + text3.value.toString(2);


    alert("Color Code: " + code1 + ".");
    document.getElementsByTagName('h2')[0].style.backgroundColor = code1;
    document.getElementsByTagName('h2')[0].style.color = code1;

  document.querySelector("#1R").value = "";
  document.querySelector("#1G").value = "";
  document.querySelector("#1B").value = "";
  document.querySelector("#2R").value = "";
  document.querySelector("#2G").value = "";
  document.querySelector("#2B").value = "";

}

function myFunc2()
{
  var text1 = document.getElementById("1R");
  var text2 = document.getElementById("1G");
  var text3 = document.getElementById("1B");
  var code1="#" + text1.value.toString(2) + text2.value.toString(2) + text3.value.toString(2);
  alert("Your color " + code1 + " was successfully uploaded to the database.");
}
