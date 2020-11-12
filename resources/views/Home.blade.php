<html>
　　<head>
　　　　<meta http-equiv="content-type" content="text/html; charset=utf-8">
       <title>Home</title>　
    </head>
<body>
    <h1>Home</h1>
    <input type="submit" style="position: absolute; right: 100px; top: 80px"
     name="btn_logout" value="ログアウト：{{$data['name']}}">
    <hr>
    <div align="center">
         <table border="0">
            <form action="" method="post">
            @csrf
            <tr>  
             You are logged in!            
            <tr>
            <div></div>
            </form>
        </table>
    <div>
</body>
</html>
