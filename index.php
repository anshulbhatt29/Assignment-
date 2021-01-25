<?php
if (isset($_POST['submit'])) {
    $interest = $_POST['interest'];
    if (sizeof($interest) < 3||sizeof($interest)>5) {
        echo "At least select any 3 and at max 5 Interests.";}}

    ?>
<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
  var k = document.forms["MY FORM"]["name"].value;
  if (k == "") {
    alert("Name must be filled out");
    return false;
  }
  var l = document.forms["MYFORM"]["contact"].value;
  if (l.length!=10) {
    alert("length must be 10");
    return false;
  }
  
}
</script>
</head>
<body>

<form name="MyFORM" action="test.php" onsubmit="return validateForm()" method="post">
  Name: <input type="text" name="name"><br>
  EMAIL<input type="email" name="email" required ><br>
  CONTACT<input type="text" name="contact" ><br>
  CITY<select  name="City" >
                 <option>Dehradun</option>
                 <option>Pune</option>
                 <option>Mumbai</option>
                 <option>Bangalore</option>
                 <option>Others</option>
                 </select><br>
        COURSE<select name="Course" >
               <option>BTECH</option>
                 <option>BCA</option>
                 <option>MCA</option>
                 <option>Others</option>
                 </select><br>
                 INTERESTS
        Coding<input type="checkbox" name="interest[]" value="Programming">
        cricket<input type="checkbox" name="interest[]" value="Cricket">
        Fotball<input type="checkbox" name="interest[]" value="Football">
        Watching<input type="checkbox" name="interest[]" value="Reading">
        Swimminginput type="checkbox" name="interest[]" value="Singing">
        Walking<input type="checkbox" name="interest[]" value="Paiting">
        <br>


  <input type="submit" value="Submit">
</form>

</body>
</html>