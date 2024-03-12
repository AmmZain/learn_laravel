<!DOCTYPE html>
<html>
<head>
<style>
header {
  background-color: #668;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}



</style>

<title>Student Form</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>


<body>
<div class="container" style="text-align: left;">


  <br>
     <header><h1>Student Form</h1> </header>
     <div class="container" style="text-align: center; background-color:#E8E8E8;">
     <br><br>
    <label for="fname">Name</label><br>
    <input type="text" id="name" name="name" style="width: 300px;"><br><br>
    <label for="lname">Matric</label><br>
    <input type="text" id="matric" name="matric" style="width: 300px;"><br><br>
    
    <table style="width:30%; margin: 0 auto; text-align:center;">

      <tr>
        <th><label for="lname">Gender</label><br>
        <select name="gen" id="gen">
            <option value="male">Male</option>
            <option value="fmale">Female</option>
        </select><br><br>
        </th>

        <th><label for="lname">Image</label><br>
        <button type="submit">Upload</button><br><br>
        </th>
      </tr>
    </table><br>
    
    <button class="btn btn-primary" type="submit">Submit</button><br><br><br><br>
</div>
</div>



</body>
</html>