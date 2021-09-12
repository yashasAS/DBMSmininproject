<!DOCTYPE html>
<html>
<head>
  <title>form</title><style>
  body{background: lightblue;}
  form{
  padding-top:100px;
  text-align: center;
  font-size:20px;

 }
 div.sep1{
  padding-top:400px;
 margin-bottom: 10px;
  width:10%;
  height:15%;
  float:left;
  padding-top:40px;
    background:lightblue;


 }

 div.sep{
  float:left;
  padding-left: 100px;
  padding-right: 100px;
  padding-bottom: 100px;

  border:solid green round 2px;
  margin-left:390px;
  text-align: center;
   background:lightblue;
 }

#submit{
      height:40px;
      width: 90px;
  }
</style>


</head>
<body>
<form action="project.php" method="post">
  <div class="sep" >
   <h1> Login  </h1>
   <br><br>

Enter your AirPort ID:
<input type="text" name="username" required>
<br><br>
Enter Your password:
<input type ="password" name="password" required>
<br><br>
<input type="submit" id="submit" value="submit"> </div>
 </form>

   <div class="sep1">
  <h2> New User ! </h2>
  <h2> SignUp Here</h2>
  <br> <a href="signup.html"> <h3>Click here</h3></a>
  </div>


</body>
</html>
