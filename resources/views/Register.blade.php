<html>
　　<head>
　　　　<meta http-equiv="content-type" content="text/html; charset=utf-8">
       <title>Register</title>　
    </head>
<body>
    <h1>Register</h1>
    <hr>
    <div align="center">
         <table border="0">
            <form action="/view/Login" method="get">
            @csrf
            <tr>
                <th>
                   Name
                </th>
                <td>
                  <input type="text" name="name" value="" size="24">
                </td>
             </tr>
             <tr>
                <th>
                   E-Mail Address
                </th>
                <td>
                  <input type="text" name="mail" value="" size="24">
                </td>
             </tr>
             <tr>
               <th>
                   Password
               </th>
               <td>
                  <input type="password" name="passwaord" value="" size="24">
               </td>
             </tr>
             <tr>
               <th>
                   Confirm Password
               </th>
               <td>
                  <input type="password" name="confirm_passwaord" value="" size="24">
               </td>
             </tr>
             <tr>
                <td colspan="2">
                  <input type="submit" value="register">
                </td>
              </tr>
            </form>
        </table>
    <div>
</body>
</html>
