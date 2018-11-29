<template>
    <div>
        <h1>注册</h1>
        <div class="login-form">

            <div class="clear"></div>
            <div class="avtar"><img src="@/assets/images/avtar.png"/></div>
            <form>

                <input type="text" v-model="form.uName" class="text" name="uName" value="Username" onFocus="this.value = '';"
                       onBlur="if (this.value == '') {this.value = 'Username';}">

                <input type="text" v-model="form.uPassword" class="text" name="uPassword" value="Password" onFocus="this.value = '';"
                       onBlur="if (this.value == '') {this.value = 'Password';}">



            </form>
            <div class="signin">
                <input @click.prevent="regist" type="submit" value="注册" style="width: 50%; float: left;  border-bottom-right-radius: 0;">
                <div style="width: 50%;background-color: deeppink;height: 70.4px;  border-bottom-right-radius: 15px;float: right;font-size: 30px;padding: 18px 0;line-height:100%;box-sizing: border-box;margin-top: 1.5px">
                    <a href="/login.html" style="color:black;">登录</a>
                </div>
            </div>
        </div>
        <div class="copy-rights">
            <!-- 	<p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://www.17sucai.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p> -->
        </div>
    </div>
</template>

<script>
    import { Toast } from 'we-vue'

    export default {
        data(){
            return {
                form:{
                    uName:'',
                    uPassword:''
                }
            }
        },
        methods:{
            regist(){

                // 判断input 是否为空
                if( this.form.uName.trim() !== '' && this.form.uPassword.trim() !== '' ){
                    this.axios.post('http://127.0.0.1:9999/api/registeres', this.form ).then((res) => {
                        if( res.data.status_code === 200 ){
                            window.location = '/login.html'
                        }else{
                            Toast.fail({
                                duration:1000,
                                message:res.data.errors
                            })
                        }

                    })

                }

            }
        }

    }

</script>

<style scoped>
    @import '../../assets/css/form.css';
    .login-form{
        margin-top: 10%;
    }
    input[type="text"]{
        margin-top: 1em;
    }
    input[type="submit"]:hover {
        background:#3ea751;
    }
</style>