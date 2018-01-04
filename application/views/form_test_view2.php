<?php //form_test_view.php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>for test view</title>
</head>
<body>
    <h1>form으로 parameter 넘기기</h1>
    <form action="formreceive" method="post" id="myform">
        문자열 입력1 : <input type="text" name="str1"><br>
        문자열 입력2 : <input type="text" name="str2"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>