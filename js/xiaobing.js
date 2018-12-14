/***********成都龙兵科技*************/
/*****http://www.xbjianzhan.com******/
/************v0.1********************/

;(function($, window, document,undefined) {
    
	$pintuercheck=function(element,type,value){
		$pintu=value.replace(/(^\s*)|(\s*$)/g, "");
		switch(type){
			case "required":return /[^(^\s*)|(\s*$)]/.test($pintu);break;
			case "chinese":return /^[\u0391-\uFFE5]+$/.test($pintu);break;
			case "number":return /^\d+$/.test($pintu);break;
			case "integer":return /^[-\+]?\d+$/.test($pintu);break;
			case "plusinteger":return /^[+]?\d+$/.test($pintu);break;
			case "double":return /^[-\+]?\d+(\.\d+)?$/.test($pintu);break;
			case "plusdouble":return /^[+]?\d+(\.\d+)?$/.test($pintu);break;
			case "english":return /^[A-Za-z]+$/.test($pintu);break;
			case "username":return /^[a-z]\w{3,}$/i.test($pintu);break;
			case "mobile":return /^((\(\d{3}\))|(\d{3}\-))?13[0-9]\d{8}?$|15[0-9]\d{8}?$|170\d{8}?$|147\d{8}?$/.test($pintu);break;
			case "phone":return /^((\(\d{2,3}\))|(\d{3}\-))?(\(0\d{2,3}\)|0\d{2,3}-)?[1-9]\d{6,7}(\-\d{1,4})?$/.test($pintu);break;
			case "tel":return /^((\(\d{3}\))|(\d{3}\-))?13[0-9]\d{8}?$|15[0-9]\d{8}?$|170\d{8}?$|147\d{8}?$/.test($pintu) || /^((\(\d{2,3}\))|(\d{3}\-))?(\(0\d{2,3}\)|0\d{2,3}-)?[1-9]\d{6,7}(\-\d{1,4})?$/.test($pintu);break;
			case "email":return /^[^@]+@[^@]+\.[^@]+$/.test($pintu);break;
			case "url":return /^http:\/\/[A-Za-z0-9]+\.[A-Za-z0-9]+[\/=\?%\-&_~`@[\]\':+!]*([^<>\"\"])*$/.test($pintu);break;
			case "ip":return /^[\d\.]{7,15}$/.test($pintu);break;
			case "qq":return /^[1-9]\d{4,10}$/.test($pintu);break;
			case "currency":return /^\d+(\.\d+)?$/.test($pintu);break;
			case "zip":return /^[1-9]\d{5}$/.test($pintu);break;
			case "radio":
				var radio=element.closest('form').find('input[name="'+element.attr("name")+'"]:checked').length;
				return eval(radio==1);
				break;
			default:
				var $test=type.split('#');
				if($test.length>1){
					switch($test[0]){
						case "compare":
							return eval(Number($pintu)+$test[1]);
							break;
						case "regexp":
							return new RegExp($test[1],"gi").test($pintu);
							break;
						case "length":
							var $length;
							if(element.attr("type")=="checkbox"){
								$length=element.closest('form').find('input[name="'+element.attr("name")+'"]:checked').length;
							}else{
								$length=$pintu.replace(/[\u4e00-\u9fa5]/g,"***").length;
							}
							return eval($length+$test[1]);
							break;
						case "ajax":
							var $getdata;
							var $url=$test[1]+$pintu;
							$.ajaxSetup({async:false});
							$.getJSON($url,function(data){
								$getdata=data.getdata;
							});
							if($getdata=="true"){return true;}
							break;
						case "repeat":
							return $pintu==jQuery('input[name="'+$test[1]+'"]').eq(0).val();
							break;
						default:return true;break;
					}
					break;
				}else{
					return true;
				}
		}
	};
	
	

   
    $.fn.xbValidform = function(options) {
		var defaults = {
			'form': 'form',
			'formReset': 'form-reset'
		};
		var settings = $.extend({},defaults, options);//将一个空对象做为第一个参数
		
		
		$(settings.form + ' textarea, input, select').blur(function(){
			var e=$(this);
			
			if(e.attr("data-validate")){
				e.closest('.field').find(".input-help").remove();
				var $checkdata=e.attr("data-validate").split(',');
				var $checkvalue=e.val();
				var $checkstate=true;
				var $checktext="";
				if(e.attr("placeholder")==$checkvalue){  $checkvalue=""; }
				if($checkvalue!="" || e.attr("data-validate").indexOf("required")>=0){
					for(var i=0;i<$checkdata.length;i++){
						var $checktype=$checkdata[i].split(':');
						if(! $pintuercheck(e,$checktype[0],$checkvalue)){
							$checkstate=false;
							$checktext= $checktext + $checktype[1] + '\r' ;
						}
					}
				};
				e.attr("data-validate-checkstate",$checkstate);
				if(!$checkstate){
					//alert($checktext);
					layer.msg($checktext);
				}
			}
		});
			   
	   $(settings.form).submit(function(){
		   
		   var $form =  $(this);
		   
			$form.find('input[data-validate],textarea[data-validate],select[data-validate]').trigger("blur");
			
			var numError = $form.find('[data-validate-checkstate=false]').length;
			
			if(numError){
				return false;
			}
			
			//自动 ajax-post 提交表单
			if($form.hasClass('ajax-post')){
				//alert('ajax-post');
				var actionUrl = $form.attr('action');
				$.post(actionUrl,$form.serialize(),function(data){
					//{info: "留言成功!", status: 1, url: ""}
					if(data.status){
						//alert(data.info);
						$form[0].reset();
						layer.msg('提交成功!');
					}else{
						layer.msg(data.info);
					}
					//todo 当url不为空时跳转指定页面
					if (data.url) {
						location.href=data.url;
					}
					
					
				});
				
				
				return false;
			}
			
	
		});
		
		$(settings.formReset).click(function(){
			//alert('form-reset');
			layer.msg('form-reset');
		});
		
		
		
		
    }
	
	/**购物车管理**/
	$.fn.setAmount = function(options){
		var $this =  $(this);
		
		var defaults = {
			'numElement': '#buy-num',
			'minNum': 1,
			'maxNum': 99,
			'reduceElement':'#buy-reduce',
			'addElement':'#buy-add',
			'idElement':'#buy-id',
			'titleElement':'#buy-title',
			'coverElement':'#buy-cover',
			'priceElement':'#buy-price',
			'unitElement':'#buy-unit'
			
			
		};
		var settings = $.extend({},defaults, options);//将一个空对象做为第一个参数
		
		
		$(settings.reduceElement).click(function(){ 
			var num = parseInt($(settings.numElement).val()) - 1;
			if(num <= settings.minNum) {
				num = settings.minNum ;
			}
			$(settings.numElement).val(num);
		});
		$(settings.addElement).click(function(){ 
			var num = parseInt($(settings.numElement).val()) + 1;
			if(num <= settings.minNum) {
				num = settings.minNum ;
			}
			$(settings.numElement).val(num);

		});
		
		
		$this.click(function(){
			$.cookie.json = true;
			
			
			var objes = new Array() ,new_objes = new Array() , obj = {
				'id':$(settings.idElement).val(),
				'title':$(settings.titleElement).val(),
				'cover':$(settings.coverElement).val(),
				'price':$(settings.priceElement).val(),
				'num':$(settings.numElement).val(),
				'unit':$(settings.unitElement).val()
				} ;
				
			objes = $.cookie('shoppingcart');	
			if(objes == undefined)  objes = new Array();
			var length = objes.length ; 
			for(var i = 0;i < length ; i++ ){
				if(objes[i].id != obj.id ){
					new_objes.push(objes[i]);
				}
			}
			
			
			new_objes.push(obj);
			//alert(JSON.stringify(new_objes));
			
			$.cookie('shoppingcart', new_objes,{path: "/", domin:"*.6store.cn"});
			layer.msg('添加成功');
		});
		
		
		
	}
	
	
	
})(jQuery, window, document);



$(function(){
	
	
	$('.videojj').each(function(i){
		
		
		
		
		var videoId = $(this).attr('id');
		var vsrc = $(this).attr('vsrc');
		var vtitle = $(this).attr('vtitle');
		var vcover = $(this).attr('vcover');
		var vtype = $(this).attr('vtype'); //根据这个type可以定制打开方式  默认 直接显示, 弹出窗口模式
		
		//todo  显示方式
		
	   var ivaInstance = new Iva(
		 videoId,//父容器id或者父容器DOM对象，给父容器设置宽高640px*480px以上可以获得最佳的浏览体验；
		 {
		   appkey: 'EkipnU54b',//必填，请在控制台查看应用标识
		   live: false,//选填，是否是直播流，默认为false
		   video: vsrc,//必填，播放地址（http://www.tudou.com/programs/view/tM_vZCQy2uM/）或者资源地址（http://7xi4ig.com2.z0.glb.qiniucdn.com/shapuolang_ts.mp4）
		   title: vtitle,//选填，视频标题
		   cover: vcover,//选填，视频封面url
		   videoStartPrefixSeconds: 0,//选填，跳过片头，默认为0
		   videoEndPrefixSeconds: 0,//选填，跳过片尾，默认为0
		   /* 以下参数可以在“控制台->项目看板->应用管理->播放器设置”进行全局设置，前端设置可以覆盖全局设置 */
		   skinSelect: 0,//选填，播放器皮肤，可选0、1、2，默认为0，
		   autoplay: false,//选填，是否自动播放，默认为false
		   rightHand: true,//选填，是否开启右键菜单，默认为false
		   autoFormat: false,//选填，是否自动选择最高清晰度，默认为false
		   bubble: false,//选填，是否开启云泡功能，默认为true
		   jumpStep: 10,//选填，左右方向键快退快进的时间
		   tagTrack: false,//选填，云链是否跟踪，默认为false
		   tagShow: false,//选填，云链是否显示，默认为false
		   tagDuration: 5,//选填，云链显示时间，默认为5秒
		   tagFontSize: 16//选填，云链文字大小，默认为16像素
		 }
		);
	   
	   
	 });
	
	
	
	
	
});
