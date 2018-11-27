<template>
    <div>
        <h1>登录</h1>
        <div class="login-form">

            <div class="clear"></div>
            <div class="avtar"><img src="@/assets/images/avtar.png"/></div>
            <form>

                <input type="text" class="text" name="uName" value="Username" onFocus="this.value = '';"
                       onBlur="if (this.value == '') {this.value = 'Username';}">

                <input type="text" class="text" name="uPassword" value="Password" onFocus="this.value = '';"
                       onBlur="if (this.value == '') {this.value = 'Password';}">



            </form>
            <div class="signin"><input type="submit" value="Login"></div>
        </div>
        <div class="copy-rights">
            <!-- 	<p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://www.17sucai.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p> -->
        </div>
    </div>
</template>
<style>
    @import '../../assets/css/form.css';
    .login-form{
        margin-top: 10%;
    }
    input[type="text"]{
        margin-top: 1em;
    }
</style>