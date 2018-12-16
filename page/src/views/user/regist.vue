<template>
    <div>
        <!--SIGN UP-->
        <h1>注册 Auction </h1>
        <div class="login-form">
            <div class="close"></div>
            <div class="head-info">
                <label class="lbl-1"> </label>
                <label class="lbl-2"> </label>
                <label class="lbl-3"> </label>
            </div>
            <div class="clear"></div>
            <div class="avtar">
                <img src="@/assets/images/avtar.png"/>
            </div>
            <form>
                <input type="text" class="text" name="uName" placeholder="昵称" onfocus="this.value = '';"
                       onblur="if (this.value == '') {this.value = '昵称';}">
                <div class="key">
                    <input type="password" placeholder="密码" name="uPassword" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = '密码';}">
                </div>
            </form>
            <div class="signin">
                <input type="submit" value="注册">
            </div>
        </div>
        <div class="copy-rights">
            <p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/"
                                                                                        target="_blank" title="ģ��֮��">ģ��֮��</a>
                - Collect from <a href="" title="��ҳģ��" target="_blank">��ҳģ��</a></p>
        </div>

    </div>
</template>

<style scoped="scoped">
    @import '../../assets/css/user.css';

    .login-form {
        width: 90%;
        margin: 10% auto 0 auto;
    }
</style>
