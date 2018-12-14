// JavaScript Document

$(document).ready(function(e) {
	$(".shilist span").click(function(e) {
        var v=$(this).attr("data-v");
		$(this).parent(".shilist").hide();
		$(this).parent(".shilist").prev(".v").attr("data-v",v);
		$(this).parent(".shilist").prev(".v").text($(this).text());
    });
    $(".huxing1 , .city").hover(function(){
		$(this).css("z-index","999");
		$(this).find(".shilist").show();
	},function(){
		$(this).find(".shilist").hide();
		$(this).css("z-index","0");
	});
	
	$(".fengge span").click(function(e) {
        $(".fengge span").removeClass("ion");
        $(".fengge span").removeClass("ioff");
		$(".fengge span").addClass("ioff");	
		$(this).removeClass("ioff");	
		$(this).addClass("ion");
		$("#fengge").text($(this).text());
    });
	$(".taoxi span").click(function(e) {
        $(".taoxi span").removeClass("ion");
        $(".taoxi span").removeClass("ioff");
		$(".taoxi span").addClass("ioff");	
		$(this).removeClass("ioff");	
		$(this).addClass("ion");
		$("#taoxi").text($(this).text());
    });
	
	function getQueryString(name) {
		var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
		var r = window.location.search.substr(1).match(reg);
		if (r != null) return unescape(r[2]); return null;
    }
	var cityid=null;
	cityid=getQueryString("cityid");
		if(cityid){  
			var selcity=$(".city .shilist").find("[data-v='"+cityid+"']").text();
			if(selcity!=""){
				$("#citys").text(selcity);
				$("#citys").attr("data-v",cityid);
			}
	}
	function getcode(){
		//if (!che()) {
		//	return false;
		//}
		
		$('#verifyimg').attr('src', $('#verifyimg').attr("src")+ "?" + Math.random());
                                
		
	}
	$("#bjbtn").click(function(e) {        
		getcode();
    });
	function setnum(){
		$("#bjbtn").text(num+"秒后获取");
		 
		num=num-1;
		if(num==0){
			clearInterval(timer);
			$("#bjbtn").text("获取验证码");
			$("#bjbtn").bind("click",1,check);
			$("#bjbtn").removeAttr("style");
			num=60;
		}
	}

	var num=60;
	var timer;
	function che() {
		if ($("#mj").val() == "") {
			alert("请输入面积！");
			$("#mj").focus();
			return false;
		}
		if ($("#citys").attr("data-v") == "0") {
			alert("请选择装修城市！");			 
			return false;
		}
		if ($("#chenghu").val() == "") {
			alert("请输入您的称呼！");
			$("#chenghu").focus();
			return false;
		}
		if ($("#shouji").val() == "") {
			alert("为了您能够准确获得报价，确定不是恶意软件攻击，请您输入手机号获取验证码。！");
			$("#shouji").focus();
			return false;
		}
		if (! (/^1[3|4|5|7|8][0-9]\d{7,8}$/.test($("#shouji").val()))) {
			alert("输入的手机号码错误！");
			$("#shouji").val("");
			$("#shouji").focus();
			return false;
		}
		
		return true;
	}
	$("#savebtn").click(function(e) {
        save();
    });

	function save() {
		if (!che()) {
			return false;
		}
		if ($("#code").val() == "") {
			alert("请输入验证码！");
			$("#code").focus();
			return false;
		}
		var con = "";
		var taoxi = $("#taoxi").text();
		
		con = "户型：" + $("#shiv").attr("data-v")+"室"+$("#ting").attr("data-v")+"厅"+$("#wei").attr("data-v") + "卫  面积：" + $("#mj").val() + " 小区信息：" + $("#xq").val() + " 称呼：" + $("#chenghu").val() + " 套系：" + taoxi + " 装修风格：" + $("#fengge").text() + " 手机号："+ $("#shouji").val();
		
		var url = $("#testform").attr("action");

		$("#content").val(con);

		
		$.post(url,$("#testform").serialize(),
				function(data, status) {
					
					if (data.status == 0) {
						alert(data.info);
						getcode();
						return false;
					}
					if (data.status == 1) {
						var mj = parseInt($("#mj").val());
						var tx =$("#taoxi").text() == "悦享家" ? '588': '888';
						var sum = 0;
						var wsj = $("#wei").attr("data-v");
						var cityid=$("#citys").attr("data-v");
						
						sum = danjia * mj;
						
						alert("根据您的信息，您装修的初步费用为：" + parseInt(sum) + "元。如有疑问 请使用人工报价");
						$("#jiage").text(parseInt(sum));
						
						$("#testform")[0].reset();
						
					}
				});
	}
	
});