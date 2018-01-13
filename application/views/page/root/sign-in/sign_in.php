<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<article>
    <div class="page-header">
        <h1> 로그인 페이지 </h1>
    </div>

    <div class="well">
        <div class="container">
            <form method="post" action="sign-in/process">
                <div class="input-group input-sign">
                    <span class="input-group-addon"> <span class="glyphicon glyphicon-user"> </span> </span>
                    <input type="text" class="form-control" placeholder="아이디" name="signInId">
                </div>
                <br>
                <div class="input-group input-sign">
                    <span class="input-group-addon"> <span class="glyphicon glyphicon-lock"> </span> </span>
                    <input type="password" class="form-control" placeholder="패스워드" name="signInPass">
                </div>
                <br>
                <input type="submit" class="btn btn" value="제출" name="submit">
            </form>
        </div>
    </div>
</article>