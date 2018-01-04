<?php //form_test_view.php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>for test view</title>
</head>
<body>
    <h1>form으로 parameter 넘기기</h1>
    <?php
    $attributes = array('method'=>'post','id'=>'myform');
    echo form_open('formreceive',$attributes); ?>
        문자열 입력1 : <input type="text" name="str1"><br>
        문자열 입력2 : <input type="text" name="str2"><br>
        <input type="submit" name="submit">
    <?php echo form_close(); ?>
</body>
</html>