$(document).ready(function (e) {            

      var mySwiper = new Swiper('.swiper-container1', {    //初始化焦点图1
          pagination: '.pagination1',
          loop: true,
          autoplay: 2000,
          paginationClickable: true,
          onSlideChangeStart: function () {
              //回调函数
          }
      });
      var mySwiper = new Swiper('.swiper-container2', {    //初始化焦点图2
          pagination: '.pagination2',
          loop: true,
          autoplay: 2000,
          paginationClickable: true,
          onSlideChangeStart: function () {
              //回调函数
          }
      });
	$(".numkeyboard").numkeyboard({ 	//初始化虚拟键盘
	
		});


//验证码发送
 $('#send').click(function(){
 	var phone=$('#phone').val();
 	
     
 	if (phone==''||!( /^([0-9]{11})?$/).test(phone)) {    		//验证手机号是否为11位
 		alert('手机号不合法');
 	}
 	else{
 		settime(this);

 	}
 	
 })

	var countdown=60; 		//验证码倒计时
	function settime(obj) { 
    if (countdown == 0) { 
        obj.removeAttribute("disabled");    
        obj.value="发送验证码"; 
        countdown = 60; 
        return;
    } else { 
        obj.setAttribute("disabled", true); 
        obj.value= countdown + "秒后重发"; 
        countdown--; 
    } 
setTimeout(function() { 
    settime(obj) }
    ,1000) 	
} 


$('.test1').focus(function(){
	this.placeholder='';
})
$('.test1').blur(function(){
	if (this.placeholder=='') {
		this.placeholder='请输入手机号码';
	}	
})
$('.test2').click(function(){
	this.placeholder='';
})
$('.test2').blur(function(){
	if (this.placeholder=='') {
		this.placeholder='请输入验证码';
	}	
})

/*下一步*/
$('#next').click(function(){
  $('.next').css('display','none');
  $('#auth_keybord7724').css('height','17rem');
  $('#next').css('display','none');
  $('#sure').css('display','block');
  $('.mui-numbox').css('display','block');
  $('#auth_keybord_menu').html('当前最高价为￥147000');
})
});