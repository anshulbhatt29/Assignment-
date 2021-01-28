<!DOCTYPE html>
<html>
<style>
        table,th,td{
            border:1px solid black;
            border-collapse:collapse;
        }
        </style>
<body>
    <table>
        <tr>
            <th><?php if(isset($_POST['submit'])){ echo "Name";}?></th>
            <th><?php if(isset($_POST['submit'])){echo "Email";}?></th>
            <th><?php if(isset($_POST['submit'])){echo "Contact";}?></th>
            <th><?php if(isset($_POST['submit'])){echo "City";}?></th>
            <th><?php if(isset($_POST['submit'])){echo "course";}?></th>
            <th><?php if(isset($_POST['submit'])){echo"Interests";}?></th>
</tr>
<tr>

    <td> <?php  if(isset($_POST['submit'])){echo $_POST["Name"];} ?></td>
    <td> <?php  if(isset($_POST['submit'])){
        $e=$_POST["Email"];
        if(!filter_var($e,FILTER_VALIDATE_EMAIL))
        {
            echo $_POST["Email"];
          
        }
        else
        echo "Invalid Input";
        } ?></td>
    <td> <?php  if(isset($_POST['submit'])){ echo $_POST["contact"];} ?></td>
    <td> <?php  if(isset($_POST['submit'])){echo $_POST["city"]; }?></td>
    <td> <?php if(isset($_POST['submit'])){ echo $_POST["course"];} ?></td>
    <td><?php
     if(isset($_POST['submit'])){
    $count=count($_POST['Interests1']);
    if($count>2){
        $count--;
        foreach($_POST['Interests1'] as $checked){
            echo $checked ;
            if($count)
            echo ',';
            $count--;
        }
}
else{
    echo "Minimum 3 and max 5 checkboxes should be selected";
}
     }
    ?></td>
</tr>
</table>
<form action="inde.php" method="post">
<label>NAME:</label><br>
<input type="text" name="Name" required><br>
<label>E-Mail:</label><br>
<input type="email" name="Email" required><br>
<label>Contact_No:</label><br>
<input type="tel" name="contact" pattern="[0-9]{2}[0-9]{4}[0-9]{4}" required><br>
<label>City:</label><br>
<select name="city" required>
    <option value="Dehradun">Dehradun</option>
    <option value="Pune">Pune</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Other">Other</option>
</select><br>
<label>course:</label><br>
<select name="course" required>
    <option value="BTECH">BTECH</option>
    <option value="IT">IT</option>
    <option value="BSC">BSC</option>
    <option value="BCOM">BCOM</option>
    </select><br>
    <label >Interests:</label><br>
    <input type="checkbox" name="Interests1[]" value="Cricket">
    <label>Cricket</label>
    <input type="checkbox" name="Interests1[]" value="Coding">
    <label>Coding</label>
    <input type="checkbox" name="Interests1[]" value="Anime">
    <label>Anime</label>
    <input type="checkbox" name="Interests1[]" value="Music">
    <label>Music</label>
    <input type="checkbox" name="Interests1[]" value="Imagining">
    <label>Imagining</label><br>
    <input type="submit" name="submit">
</form>
</body>
</html>
