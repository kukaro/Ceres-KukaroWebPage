<?php //form_test_view.php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>for test view</title>
</head>
<body>
    <h1>form으로 parameter 넘기기</h1>
    <?php echo form_open('formtest/getvalue'); ?>
        문자열 입력 : <input type="text" name="str"><br>
        <input type="submit" name="submit">
    <?php echo form_close(); ?>
</body>
</html>