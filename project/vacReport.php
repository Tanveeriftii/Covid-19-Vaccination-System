 <?php
 session_start();
  require_once 'controllers/vacRController.php';
 ?>
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
       function vacreport()
       {
         refresh();
         if(get("docname").value == "")
         {
           hasError = true;
           get("err_docname").innerHTML = "*Name Req";
         }
         else if (get("docname").value.length<=3) {
           hasError=true;
           get("err_docname").innerHTML = "*Name must be > 3 char";
         }
         if(get("docuname").value == "")
         {
           hasError = true;
           get("err_docuname").innerHTML = "*Username Req";
         }
         else if (get("docuname").value.length<=4) {
           hasError=true;
           get("err_docuname").innerHTML = "*Name must be > 4 char";
         }
         if(get("age").value == "")
         {
           hasError = true;
           get("err_age").innerHTML = "*Age Req";
         }
         if(get("vaccinedose").value == "")
         {
           hasError = true;
           get("err_vaccinedose").innerHTML = "*Vaccine Dose Req";
         }
         if(get("vaccinedate").selectedIndex == 0)
         {
           hasError = true;
           get("err_vaccinedate").innerHTML = "*Vaccine Date Req";
         }
         if(get("vaccinemonth").selectedIndex == 0)
         {
           hasError = true;
           get("err_vaccinemonth").innerHTML = "*Vaccine Month Req";
         }
         if(get("vaccineyear").selectedIndex == 0)
         {
           hasError = true;
           get("err_vaccineyear").innerHTML = "*Vaccine Year Req";
         }
         if(get("vaccinehour").selectedIndex == 0)
         {
           hasError = true;
           get("err_vaccinehour").innerHTML = "*Vaccine Hour Req";
         }
         if(get("vaccinemin").selectedIndex == 0)
         {
           hasError = true;
           get("err_vaccinemin").innerHTML = "*Vaccine Minute Req";
         }
         if(get("ampm").selectedIndex == 0)
         {
           hasError = true;
           get("err_ampm").innerHTML = "*AM/PM Req";
         }
         if(!validateGender())
         {
           hasError=true;
           get("err_gender").innerHTML = "*Gender Req";
         }
         return !hasError;
       }
       function refresh()
       {
         hasError = false;
         get("err_docname").innerHTML ="";
         get("err_docuname").innerHTML ="";
         get("err_age").innerHTML ="";
         get("err_gender").innerHTML ="";
         get("err_vaccinedose").innerHTML ="";
         get("err_vaccinedate").innerHTML ="";
         get("err_vaccinemonth").innerHTML ="";
         get("err_vaccineyear").innerHTML ="";
         get("err_vaccinehour").innerHTML ="";
         get("err_vaccinemin").innerHTML ="";
         get("err_ampm").innerHTML ="";
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
         <a href="login.php" style="background-color: red;
         border: none;
         border-radius: 30px;
         color: white;
         padding: 10px 20px;
         text-align: right;
         text-decoration: none;
         display: inline-block;">Login</a>
       </div>
     <fieldset class="v1">
       <form action="" onsubmit="return vacreport()" method="post">
           <h3 align="center" class="v2"><u>Doctor <?php echo $_SESSION["loggeddoc"]; ?> </u></h3>
           <h5 align="center" class="v3">Please submit your vaccine report</h5>
           <h5><?php echo $err_db; ?></h5>
           <p align="center">
             <table>
               <tr>
                 <td align="right">Doctor Name:</td>
                 <td><input id="docname" type="text" name="docname" value="<?php echo $docname; ?> "> </td>
                 <td><span id="err_docname"><?php echo $err_docname; ?> </span> </td>
               </tr>
               <tr>
                 <td align="right">Doctor Username:</td>
                 <td><input id="docuname" type="text" name="docuname" value="<?php echo $docuname; ?>"> </td>
                 <td><span id="err_docuname"><?php echo $err_docuname; ?></span> </td>
               </tr>
               <tr>
                 <td align="right">Doctor Age:</td>
                 <td><input id="age" type="text" name="age" value="<?php echo $age; ?>"></td>
                 <td><span id="err_age"><?php echo $err_age; ?></span></td>
               </tr>
               <tr>
     					<td align="right">Gender</td>
     					<td>: <input type="radio" id="male" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" id="female" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
               <td><span id="err_gender"> <?php echo $err_gender;?> </span></td>
     				</tr>
             <tr>
               <td align="right">Vaccine Dose Number:</td>
               <td><input id="vaccinedose" type="text" name="vaccinedose" value="<?php echo $vaccinedose; ?> "></td>
               <td><span id="err_vaccinedose"><?php echo $err_vaccinedose; ?> </span> </td>
             </tr>
             <tr><td align="right">Vaccination Date:
   					</td>
   					<td>
   					<select id="vaccinedate" name="vaccinedate">
   					 <option selected disabled >--Day--</option>
   					<?php for($i=1;$i<=31;$i++) echo "<option>$i</option>"; ?>
   					</select>
             <span id="err_vaccinedate"><?php echo $err_vaccinedate;?></span>

   					<select id="vaccinemonth" name="vaccinemonth">
   					 <option selected disabled >--Month--</option>
   					<option>January</option>
   					<option>February</option>
   					<option>March</option>
   					<option>April</option>
   					<option>May</option>
   					<option>June</option>
   					<option>July</option>
   					<option>August</option>
   					<option>September</option>
   					<option>October</option>
   					<option>November</option>
   					<option>December</option>
   					</select>
             <span id="err_vaccinemonth"><?php echo $err_vaccinemonth;?></span>


   					<select id="vaccineyear" name="vaccineyear">
   					 <option selected disabled >--Year--</option>
   					<?php for($i=2020;$i<=2021;$i++) echo "<option>$i</option>"; ?>
   					</select>
             <span id="err_vaccineyear"><?php echo $err_vaccineyear;?></span>
   					</td> </tr>
             <tr><td align="right">Vaccination Time:
   					</td>
   					<td>
   					<select id="vaccinehour" name="vaccinehour">
   					 <option selected disabled >--Hours--</option>
   					<?php for($i=1;$i<=12;$i++) echo "<option>$i</option>"; ?>
   					</select>
             <span id="err_vaccinehour"><?php echo $err_vaccinehour;?></span>
             <select id="vaccinemin" name="vaccinemin">
   					 <option selected disabled >--Min--</option>
   					<?php for($i=0;$i<=60;$i++) echo "<option>$i</option>"; ?>
   					</select>
             <span id="err_vaccinemin"><?php echo $err_vaccinemin;?></span>

   					<select id="ampm" name="ampm">
   					 <option selected disabled >--AM/PM--</option>
              <option>AM</option>
   					<option>PM</option>
   					</select>
             <span id="err_ampm"><?php echo $err_ampm;?></span>

   					</td>
             </tr>
             <td></td><td></td><td></td><td></td><td></td><td></td>
             <tr>
               <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
             </tr>

             </table>
           </p>
       </form>
     </fieldset>
   </body>
 </html>
