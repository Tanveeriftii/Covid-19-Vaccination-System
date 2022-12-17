function get(id){
  return document.getElementById(id);
}
function checkUsername(e)
{
  var xhr = new XMLHttpRequest();
  xhr.open("GET","checkusername.php?username="+e.value,true);
  xhr.onreadystatechange=function()
  {
    if(this.readyState == 4 && this.status == 200)
    {
      if(this.responseText.trim() == "invalid"){
        get("err_username").innerHTML = "Username exists";
      }
      else {
        get("err_username").innerHTML = "";
      }
    }
  };
  xhr.send();
}
