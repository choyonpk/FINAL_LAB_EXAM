<html>
  <head>
    <title> Add Employee </title>
  </head>

  <body>
    <form method="post">
@csrf
      <table>
        <tr>
          <td> Employee Name: </td>
          <td><input type="text" name="name"> <td>
        </tr>
        <tr>
          <td> Username: </td>
          <td><input type="text" name="uname"> <td>
        </tr>
        <tr>
          <td> Contact: </td>
          <td><input type="text" name="contact"> <td>
        </tr>
       
        <tr>
          <td> Password: </td>
          <td><input type="text" name="pass"> <td>
        </tr>
        <tr>
          <td colspan="2" align="middle"><input type="submit" name="add" value="ADD"></td>
        </tr>
      </table>
    </form>
  </body>

</html>