/* 
* numkeyboard 1.0 
* Copyright (c) 2014 BowenLuo http://www.luobo.com/ 
* Date: 2014-06-08
*	Example:$(".numkeyboard").numkeyboard();

*/ 

(function($){ 
$.fn.numkeyboard = function(options){ 
var defaults = { 

} 
var options = $.extend(defaults, options); 
var keyboardRadix = options.keyboardRadix;
if(keyboardRadix<300){
	keyboardRadix=300;
}
var numkeyboardcount = 0;
var activeinputele;
this.each(function(){ 	
	numkeyboardcount++;
	//添加唯一的数字键盘
	
	//元素选择器
	
	var inputele = $(this);
	var keyboard = $('#auth_keybord7724');
	var keyboard_exit = keyboard.children('div:first');
	var keyboard_menu = keyboard.children('div:eq(1)');
	var keyboard_buttonul = $('#number_list');
	var keyboard_buttonli = keyboard_buttonul.children('li');
	var keyboard_button = keyboard_buttonli.children('button');
	//元素css样式控制

	keyboard_exit.click(function(){   //点击关闭按钮
		exit(options.clickeve);
		
	});	
	$('#btn').click(function(){
		if(keyboard.css("display")=="none"){
			keyboard.css({"display":"block"});
			
		}
	})

	inputele.focus(function(event){     
		activeinputele = $(this);
		var p = GetScreenPosition(this);
	});
		
	if(options.clickeve){
		inputele.click(function(){	
		activeinputele = $(this);
		var p = GetScreenPosition(this);
		if(keyboard.css("display")=="none"){
			keyboard.css({"display":"block"});
			
		}});
	}	
	
	if(numkeyboardcount<2){
		for(var i=0;i<keyboard_button.length;i++){
			numbuttonclick(i);
		}
	}		
	function randomOnlyId(){
		var tempRandom = String(Date.now());
		var tempRandomLength = tempRandom.length;
		tempRandom = tempRandom.substring(tempRandomLength-5,tempRandomLength-1);
		var randomId = "auth_keybord"+tempRandom;
		if($("#randomId").length>0){
			randomOnlyId()
		}else{
			return randomId;
		}
	}
	
	function getElem(id) {
      return document.getElementById(id);
    }
	
	function numbuttonclick(buttonnum){
		keyboard_buttonli.children('button:eq('+buttonnum+')').click(function(e){
			
			var buttontext = keyboard_buttonli.children('button:eq('+buttonnum+')').text();				
			if(buttontext/1){
				clickkey(buttontext/1);
			}else{
				if(buttontext=="0"){
					clickkey(0);
				}
				if(buttontext=="退格"){
					backspace();
				}
				if(buttontext=="清除"){
					keyclear();
				}
			}				
		})
	}
	
	function keyclear(){				//清除
		 activeinputele.val("");
	}
	function backspace(){       		 //退格
		var inputtext = activeinputele.val();
		if(inputtext.length>0){
			inputtext = inputtext.substring(0,inputtext.length-1);
			activeinputele.val(inputtext);
		}	
	}	
	function clickkey(num){				 	//	提示文字	
		var inputtext = activeinputele.val();
		inputtext = inputtext+num;		
		 activeinputele.val(inputtext);
	}	
	
	function exit(){		
		keyboard.css({"display":"none"});
	}
	
	function GetScreenPosition(object) {
		var position = {};			
		position.x = object.offsetLeft;
		position.y = object.offsetTop;
		while (object.offsetParent) {
			position.x = position.x + object.offsetParent.offsetLeft;
			position.y = position.y + object.offsetParent.offsetTop;
			if (object == document.getElementsByTagName("body")[0]) {
				break;
			}
			else{
				object = object.offsetParent;
			}
		}
		return position;
	}
	

	


        function getT3d(elem, ename) {
            var elem = elem[0];
            var str1 = elem.style.webkitTransform;
            if (str1 == "") return "0";
            str1 = str1.replace("translate3d(", "");
            str1 = str1.replace(")", "");
            var carr = str1.split(",");

            if (ename == "x") return carr[0];
            else if (ename == "y") return carr[1];
            else if (ename == "z") return carr[2];
            else return "";
        }
    
}); 
}; 
})(jQuery); 