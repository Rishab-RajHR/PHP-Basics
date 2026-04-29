<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exm</title>
</head>
<body>

  <form action="userdata.php" method="get">
      
    <table>
        <tr>
              <td> Name </td>
              <td> <input type="text" placeholder="Enter Your Name"/></td>
        </tr>
        <tr>
              <td> Address </td>
              <td> <textarea placeholder="Enter Your Name"></textarea></td>
        </tr>
        <tr>
              <td> Address </td>
              <td> <textarea placeholder="Enter Your Address"></textarea></td>
        </tr>

        <tr>
           <td> Gender </td>
           <td> Male <input type="radio" name="gender" />Female <input type="radio" name="gender" /></td>
        </tr>

        <tr>
           <tr>
              <td colspan="2"> <input type="submit" value="submit" /></td>
           </tr>
        </tr>

    </table>
  </form>
  
</body>
</html>