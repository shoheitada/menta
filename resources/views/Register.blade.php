<html>
　　<head>
　　　　<meta http-equiv="content-type" content="text/html; charset=utf-8">
       <title>Register</title>　
    </head>
<body>
    <h1>Register</h1>
    <hr>
    @if($errors->any())
    @foreach($errors->all() as $error)
    <div>{{$error}}</div>
    @endforeach
    @endif
    <div align="center">
         <table border="0">
            <form action="/view/confirm" method="post">
            @csrf
            <tr>
                <th>
                   Name
                </th>
                <td>
                  <input type="text" name="name" value="post" size="24"/>
                </td>
             </tr>
             <tr>
                <th>
                   E-Mail Address
                </th>
                <td>
                  <input type="text" name="email" value="" size="24">
                </td>
             </tr>
             <tr>
               <th>
                   Password
               </th>
               <td>
                  <input type="password" name="password" value="" size="24">
               </td>
             </tr>
             <tr>
               <th>
                   Confirm Password
               </th>
               <td>
                  <input type="password" name="confirm_password" value="" size="24">
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