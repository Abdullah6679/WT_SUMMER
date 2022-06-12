<html>
    <head>
        <title>Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1>
     <form action="../control/process.php" method="POST">
         <table>
             
         <tr>
             <td>First Name:</td>

       <td> <input type="text"  name="firstname"></td></tr>

       <tr>
           <td>Last Name:</td> 
       <td> <input type="text"  name="lastname"></td></tr>
       <tr>
           <td>Age:</td> 
       <td> <input type="text"  name="age"></td>
    </tr>
       

       <tr>
           <td>Designation:</td>
       <td><input type="checkbox" name="des" value="Junior Programmer ">Junior Programmer
       <input type="checkbox" name="des" value="Senior Programmer ">Senior Programmer 
       <input type="checkbox" name="des" value="Project Lead">Project Lead</td>
    </tr>
        

        <tr>
            <td>Preferred Language:</td>
       <td><input type="checkbox" name="pref" value="Java " >Java 
       <input type="checkbox" name="pref" value="PHP">PHP 
       <input type="checkbox" name="pref"value="C++" >C++</td>
    </tr>

       <tr>
           <td>Email:</td> 
       <td> <input type="text"  name="male"></td></tr>
       <tr><td>Password:</td> 
       <td> <input type="password"  name="password"></td></tr>
       <tr><td>Please choose file </td>
        <td><input type="file"  name="id"></td>
    </tr>
       
       <tr>
            <td><input type="submit" value="Submit">
        <input type="submit" value="Reset"></td> 
    </tr>

</table>

</form>

</body>
</html>