function validate()
{
  if(!areEqual() && lessThan())
  {
    alert("The passwords do not match.\nPasswords must have 8 or more characters");
  }
  else if(!areEqual() && !lessThan())
  {
    alert("The passwords do not match.");
  }
  else if(areEqual() && lessThan())
  {
    alert("The password must have 8 or more characters");
  }
  else
  {
    alert("password works");
  }
}

function areEqual()
{
  return (document.getElementById("password1").value == document.getElementById("password2").value)
}

function lessThan()
{
  return (document.getElementById("password1").value.length < 8)
}