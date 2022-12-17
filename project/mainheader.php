<html>
<head>
  <link rel="stylesheet" href="styles/mystyle.css">
  <script>
    var hasError = false;
    function validateGender()
    {
      var gen = document.querySelector('input[name="gender"]:checked');
      if(gen == null)
      {
        return false;
      }
      return true;
    }
    function get(id)
    {
      return document.getElementById(id);
    }
    function validate()
    {
      refresh();
      if(get("name").value == "")
      {
        hasError=true;
        get("err_name").innerHTML = "*Name Req";
      }
      else if (get("name").value.length<=3) {
        hasError=true;
        get("err_name").innerHTML = "*Name must be > 3 char";
      }
      if (get("username").value == "") {
        hasError=true;
        get("err_username").innerHTML = "*Username Req";
      }
      else if (get("username").value.length<=4) {
        hasError=true;
        get("err_username").innerHTML = "*Username must be > 4 char";
      }
      if (get("email").value == "") {
        hasError=true;
        get("err_email").innerHTML = "*Email Req";
      }
      if (get("phone").value == "") {
        hasError=true;
        get("err_phone").innerHTML = "*Phone Req";
      }
      if (get("address").value == "") {
        hasError=true;
        get("err_address").innerHTML = "*Address Req";
      }
      if (get("degree").value == "") {
        hasError=true;
        get("err_degree").innerHTML = "*Degree Req";
      }
      if (get("birthdate").selectedIndex == 0) {
        hasError=true;
        get("err_birthdate").innerHTML = "*Birth Date Req";
      }
      if (get("birthmonth").selectedIndex == 0) {
        hasError=true;
        get("err_birthmonth").innerHTML = "*Birth Month Req";
      }
      if (get("birthyear").selectedIndex == 0) {
        hasError=true;
        get("err_birthyear").innerHTML = "*Birth Year Req";
      }
      if (get("password").value == "") {
        hasError=true;
        get("err_password").innerHTML = "*Password Req";
      }
      else if (get("password").value.lenght<3) {
        hasError=true;
        get("err_password").innerHTML = "*Name must be higher than 3 number";
      }
      if (get("confirmpassword").value == "") {
        hasError=true;
        get("err_confirmpassword").innerHTML = "*Confirmpassword Req";
      }
      if(!validateGender())
      {
        hasError=true;
        get("err_gender").innerHTML = "*Gender Req";
      }
      /*if (!get("male").checked && !get("female").checked) {
        hasError=true;
        get("err_gender").innerHTML = "*Gender Req";
      }*/
      return !hasError;
    }
    function refresh()
    {
      hasError=false;
      get("err_name").innerHTML ="";
      get("err_username").innerHTML ="";
      get("err_email").innerHTML = "";
      get("err_phone").innerHTML ="";
      get("err_address").innerHTML ="";
      get("err_degree").innerHTML ="";
      get("err_birthdate").innerHTML ="";
      get("err_birthmonth").innerHTML ="";
      get("err_birthyear").innerHTML ="";
      get("err_password").innerHTML ="";
      get("err_gender").innerHTML ="";
      get("err_confirmpassword").innerHTML ="";
    }
  </script>
</head>
  <body>
    <div class="sticky">
      <b>COVID-19</b>
      </div>
      <div>
        <a href="Homepage.php" style="background-color: #4CAF50;
        border: none;
        border-radius: 30px;
        color: white;
        padding: 10px 20px;
        text-align: right;
        text-decoration: none;
        display: inline-block;
        margin: 4px 2px;">Home</a>
        <a href="logindoctor.php" style="background-color: red;
        border: none;
        border-radius: 30px;
        color: white;
        padding: 10px 20px;
        text-align: right;
        text-decoration: none;
        display: inline-block;">Logout</a>
      </div>
