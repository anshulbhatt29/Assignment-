<!DOCTYPE html>
<html>
<style>
        table,th,td{
            border:1px solid black;
        }
</style>
<body>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>City</th>
            <th>Course</th>
            <th>Interests</th>
</tr>
<tr>
    <td> <?php echo $_POST["Name"]; ?></td>
    <td> <?php echo $_POST["Email"]; ?></td>
    <td> <?php echo $_POST["contact"]; ?></td>
    <td> <?php echo $_POST["city"]; ?></td>
    <td> <?php echo $_POST["course"]; ?></td>
</tr>
</table>
<form action="inde.php" method="post">
<label>NAME:</label><br>
<input type="text" name="Name" required><br>
<label>E-Mail:</label><br>
<input type="email" name="Email" required><br>
<label>Contact_No:</label><br>
<input type="tel" name="contact" required><br>
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
    <input type="checkbox" name="Interests1" value="Cricket">
    <label>Cricket</label>
    <input type="checkbox" name="Interests2" value="Coding">
    <label>Coding</label>
    <input type="checkbox" name="Interests3" value="Anime">
    <label>Anime</label>
    <input type="checkbox" name="Interests4" value="Music">
    <label>Music</label>
    <input type="checkbox" name="Interests5" value="Imagining">
    <label>Imagining</label>
    <label>Submit</label><br>
    <input type="submit" name="submit">
</form>
</body>
</html>
