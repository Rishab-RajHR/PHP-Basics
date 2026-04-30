<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Examples of FILES</title>
</head>
<body>
    <h1>Example of $_FILES Method</h1>
     <form action="userdata.php" method="post" enctype="multipart/form-data">

     <table align="center" border="1">
         <tr>
            <th colspan="2" align="center"> Upload your file from here </th>
         </tr>
         <tr>
            <td> $_FILES example</td>
            <td> <input type="file" name="userfile" value="Upload" /></td>
         </tr>
         <td colspan="2" align="center"><input type="submit" /></td>
     </table>
     </form>
</body>
</html>