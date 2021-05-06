function myFunc() {
  var text1 = document.getElementById("1R");
  var text2 = document.getElementById("1G");
  var text3 = document.getElementById("1B");
  var code1="#" + text1.value.toString(2) + text2.value.toString(2) + text3.value.toString(2);

    document.getElementsByTagName('h2')[0].style.backgroundColor = code1;
    document.getElementsByTagName('h2')[0].style.color = code1;

  document.querySelector("#1R").value = "";
  document.querySelector("#1G").value = "";
  document.querySelector("#1B").value = "";
  document.querySelector("#1L").value = "";

}

function myFunc2() //add upload to DB
{
  var text1 = document.getElementById("1R");
    var red = text1.value.toString(3);
  var text2 = document.getElementById("1G");
    var green = text2.value.toString(3);
  var text3 = document.getElementById("1B");
    var blue = text3.value.toString(3);
  var text4 = document.getElementById("1L");
    var brightness = text4.value.toString(3);
    var hexcode=text1.value.toString(2) + text2.value.toString(2) + text3.value.toString(2);

    //GET USER INFO
    //UPLOAD red, green, blue, brightness, and hexcode to relevant user in DB

  alert("Your color #" + hexcode + " with brightness " + brightness + " was successfully uploaded to the database.");
}
