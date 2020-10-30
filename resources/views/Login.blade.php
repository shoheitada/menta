<html>
　　<head>
　　　　<meta http-equiv="content-type" content="text/html; charset=utf-8">
       <title>Login</title>　
    </head>
<body>
    <h1>Login</h1>
    <hr>
    <div align="center">
         <table border="0">
            <form action="/view/Register" method="post">
            @csrf
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
                  <input type="passwaord" name="passwaord" value="" size="24">
               </td>
             </tr>
             <tr>
                <td colspan="2">
                  <input type="submit"  value="Login">
                </td>
              </tr>
            </form>
        </table>
    <div>
</body>
</html>
