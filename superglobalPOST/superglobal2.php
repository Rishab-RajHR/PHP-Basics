<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Example of Post Method</title>
</head>
<body>

  <form action="userdata.php" method="post">
      
    <table border="1" align="center" width="60%" >
        <tr>
              <td> Name </td>
              <td> <input type="text" placeholder="Enter Your Name" name="name" /></td>
        </tr>
        <tr>
              <td> Address </td>
              <td> <textarea placeholder="Enter Your Address" name="address" ></textarea></td>
        </tr>

        <tr>
           <td> Gender </td>
           <td> Male <input type="radio" name="gender" value="Male"/>Female <input type="radio" name="gender" value="Female" /></td>
        </tr>

        <tr>
           <td> Password </td>
           <td><input type="password" name="passwd"/></td>
        </tr>

        <tr>
           <tr>
              <td colspan="2"  align="center"> <input type="submit" value="submit" /></td>
           </tr>
        </tr>

    </table>
  </form>
  
</body>
</html>