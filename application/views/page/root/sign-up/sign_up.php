<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<article>
    <div class="page-header">
        <h1> 회원가입 페이지 </h1>
    </div>

    <div class="well">
        <div class="container">
            <form method="post" action="sign-up/process">
                <div class="input-group input-sign">
                    <span class="input-group-addon"> <span class="glyphicon glyphicon-user"> </span> </span>
                    <input type="text" class="form-control" placeholder="아이디" name="signUpId">
                </div>
                <br>
                <div class="input-group input-sign">
                    <span class="input-group-addon"> <span class="glyphicon glyphicon-lock"> </span> </span>
                    <input type="password" class="form-control" placeholder="패스워드" name="signUpPass">
                </div>
                <br>
                <div class="input-group input-sign">
                    <span class="input-group-addon"> <span class="glyphicon glyphicon-lock"> </span> </span>
                    <input type="password" class="form-control" placeholder="패스워드확인" name="signUpPassV">
                </div>
                <br>
                <div class="input-group input-sign">
                    <span class="input-group-addon"> <span class="glyphicon glyphicon-envelope"> </span> </span>
                    <input type="email" class="form-control" placeholder="이메일" name="signUpEmail">
                </div>
                <br>
                <div class="input-group input-sign">
                    <span class="input-group-addon"> <span class="glyphicon glyphicon-heart"> </span> </span>
                    <input type="email" class="form-control" placeholder="성별 : 누를 때 마다 성별이 바뀝니다." name="signUpGender" readonly
                           onclick="gender_click()">
                </div>
                <br>
                <div class="input-group input-sign">
                    <span class="input-group-addon"> <span class="glyphicon glyphicon-envelope"> </span> </span>
                    <input type="date" class="form-control" placeholder="생일" name="signUpBirthDate">
                </div>
                <br>
                <input type="submit" class="btn btn" value="제출" name="submit">
            </form>
        </div>
    </div>
</article>