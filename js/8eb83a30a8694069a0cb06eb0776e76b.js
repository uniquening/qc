function phpjs_img(input_id,view_id)
{var extend="type=img&input="+input_id+"&view="+view_id;var url=get_url("open",extend);Layer.init(url,550,400);return true;}
function phpjs_clear_img(input_id,view_id)
{getid(input_id).value="";getid(view_id).innerHTML="<img src='img/nopic.gif' />";return true;}
function phpjs_video(input_id,view_id)
{var extend="type=video&input="+input_id+"&view="+view_id;var url=get_url("open",extend);Layer.init(url,550,400);return true;}
function phpjs_clear_video(input_id,view_id)
{getid(input_id).value="";getid(view_id).innerHTML="";return true;}
function phpjs_download(input_id,view_id)
{var extend="type=download&input="+input_id+"&view="+view_id;var url=get_url("open",extend);Layer.init(url,550,400);return true;}
function phpjs_clear_download(input_id,view_id)
{getid(input_id).value="";getid(view_id).innerHTML="";return true;}
function phpjs_preview(id,pretype)
{var extend="id="+id+"&";if(pretype&&pretype!="undefined")
{extend+="pretype="+pretype+"&";}
var url=get_url("open,preview",extend);Layer.init(url,550,400);return true;}
function phpjs_parent_opt(val,id,fid)
{if(!id||id=="undefined")
{return false;}
var extend="fid="+fid+"&";getid(id).value=val;if(val&&val!="undefined")
{extend+="val="+EncodeUtf8(val)+"&";}
var url=get_url("datalink,ajax_opt",extend);var msg=ajax_get(url);if(!msg)
{alert("操作有误");return false;}
var array=JSON.parse(msg);if(array["error"])
{getid("_opt_parent_"+id).innerHTML=array["error"];return true;}
if(array["parent"]&&array["parent"]!="undefined")
{getid("_opt_parent_"+id).innerHTML=array["parent"];}
if(array["son"]&&array["son"]!="undefined")
{getid("_opt_son_"+id).innerHTML=array["son"];}
else
{getid("_opt_son_"+id).innerHTML="";}
return true;}
function phpjs_son_opt(val,id)
{getid(id).value=val;return true;}
function phpjs_parent_becate(val,id,fid)
{if(!id||id=="undefined")
{return false;}
var extend="fid="+fid+"&";getid(id).value=val;if(val&&val!="undefined")
{extend+="val="+EncodeUtf8(val)+"&";}
var url=get_url("list,ajax_becate",extend);var msg=ajax_get(url);if(!msg)
{alert("操作有误");return false;}
var array=JSON.parse(msg);if(array["error"])
{getid("_opt_parent_"+id).innerHTML=array["error"];return true;}
if(array["parent"]&&array["parent"]!="undefined")
{getid("_opt_parent_"+id).innerHTML=array["parent"];}
else
{getid("_opt_parent_"+id).innerHTML="";}
return true;}
function phpjs_son_becate(val,id)
{getid(id).value=val;return true;}
function phpjs_parent_bemod(val,id,fid)
{if(!id||id=="undefined")
{return false;}
var extend="fid="+fid+"&";getid(id).value=val;if(val&&val!="undefined")
{extend+="val="+EncodeUtf8(val)+"&";}
var url=get_url("list,ajax_bemod",extend);var msg=ajax_get(url);if(!msg)
{alert("操作有误");return false;}
var array=JSON.parse(msg);if(array["error"])
{getid("_opt_parent_"+id).innerHTML=array["error"];return true;}
if(array["parent"]&&array["parent"]!="undefined")
{getid("_opt_parent_"+id).innerHTML=array["parent"];}
else
{getid("_opt_parent_"+id).innerHTML="";}
return true;}
function phpjs_son_bemod(val,id)
{getid(id).value=val;return true;}
function phpjs_fck_img(id)
{var extend="fck_id="+id+"&type=img";var url=get_url("open,fck",extend);var Editor=FCKeditorAPI.GetInstance(id);var EditorType=FCK_EDITMODE_WYSIWYG;if(Editor.EditMode!=EditorType)
{alert("请取消源码查看，使用可视化编辑器");return false;}
Layer.init(url,550,400);return true;}
function phpjs_fck_download(id)
{var extend="fck_id="+id+"&type=download";var url=get_url("open,fck",extend);var Editor=FCKeditorAPI.GetInstance(id);var EditorType=FCK_EDITMODE_WYSIWYG;if(Editor.EditMode!=EditorType)
{alert("请取消源码查看，使用可视化编辑器");return false;}
Layer.init(url,550,400);return true;}
function phpjs_fck_video(id)
{var extend="fck_id="+id+"&type=video";var url=get_url("open,fck",extend);var Editor=FCKeditorAPI.GetInstance(id);var EditorType=FCK_EDITMODE_WYSIWYG;if(Editor.EditMode!=EditorType)
{alert("请取消源码查看，使用可视化编辑器");return false;}
Layer.init(url,550,400);return true;}
function phpjs_viewpic(n_vid,input)
{var input_view="_view_"+input;if(!n_vid||n_vid==""||n_vid=="undefined")
{getid(input_view).innerHTML="<img src='img/nopic.gif' />";return true;}
var url=get_url('open,ajax_preview_img')+"idstring="+n_vid;var msg=get_ajax(url);if(msg=="empty")
{phpjs_viewpic("",input_view);return true;}
var array=JSON.parse(msg);var length_array=array.length;var p_html='<table><tr>';for(var i=0;i<length_array;i++)
{var tmp_i=i+1;var srcurl=array[i]["url"];if(!srcurl||srcurl==""||srcurl=="undefined")
{srcurl="img/nopic.gif";}
p_html+='<td><img src="'+srcurl+'" class="hand" onclick="phpjs_preview(\''+array[i]["id"]+'\')" /></td>';if(tmp_i%8=="")
{p_html+="</tr><tr>";}}
p_html+="</tr></table>";getid(input_view).innerHTML=p_html;return true;}
function phpjs_viewdown(id,input)
{var input_view="_view_"+input;if(!id||id==""||id=="undefined")
{return false;}
var viewhtml='<input type="button" value="详情" class="button" onclick="phpjs_preview(\''+id+'\',\'download\')"> 附件ID：'+id+' <img src="img/download.gif" align="absmiddle" /> ';getid(input_view).innerHTML=viewhtml;return true;}
function phpjs_viewvideo(id,input)
{var input_view="_view_"+input;if(!id||id==""||id=="undefined")
{return false;}
var viewhtml='<input type="button" value="预览" class="button" onclick="phpjs_preview(\''+id+'\')"> 影音ID：'+id+' <img src="img/video.gif" align="absmiddle" /> ';getid(input_view).innerHTML=viewhtml;return true;}
function phpjs_onepic(vid)
{var extend="input="+vid;var url=get_url("open,img",extend);Layer.init(url,550,400);return true;}
function phpjs_onepic_view(vid)
{var url=getid(vid).value;if(!url)
{alert("没有相关图片信息！");return false;}
Layer.init(url,550,400);return true;}
function phpjs_onepic_clear(vid)
{getid(vid).value="";return true;}
;;(function(window,document,$){var isInputSupported='placeholder'in document.createElement('input');var isTextareaSupported='placeholder'in document.createElement('textarea');var prototype=$.fn;var valHooks=$.valHooks;var propHooks=$.propHooks;var hooks;var placeholder;if(isInputSupported&&isTextareaSupported){placeholder=prototype.placeholder=function(){return this;};placeholder.input=placeholder.textarea=true;}else{placeholder=prototype.placeholder=function(){var $this=this;$this.filter((isInputSupported?'textarea':':input')+'[placeholder]').not('.placeholder').bind({'focus.placeholder':clearPlaceholder,'blur.placeholder':setPlaceholder}).data('placeholder-enabled',true).trigger('blur.placeholder');return $this;};placeholder.input=isInputSupported;placeholder.textarea=isTextareaSupported;hooks={'get':function(element){var $element=$(element);var $passwordInput=$element.data('placeholder-password');if($passwordInput){return $passwordInput[0].value;}
return $element.data('placeholder-enabled')&&$element.hasClass('placeholder')?'':element.value;},'set':function(element,value){var $element=$(element);var $passwordInput=$element.data('placeholder-password');if($passwordInput){return $passwordInput[0].value=value;}
if(!$element.data('placeholder-enabled')){return element.value=value;}
if(value==''){element.value=value;if(element!=safeActiveElement()){setPlaceholder.call(element);}}else if($element.hasClass('placeholder')){clearPlaceholder.call(element,true,value)||(element.value=value);}else{element.value=value;}
return $element;}};if(!isInputSupported){valHooks.input=hooks;propHooks.value=hooks;}
if(!isTextareaSupported){valHooks.textarea=hooks;propHooks.value=hooks;}
$(function(){$(document).delegate('form','submit.placeholder',function(){var $inputs=$('.placeholder',this).each(clearPlaceholder);setTimeout(function(){$inputs.each(setPlaceholder);},10);});});$(window).bind('beforeunload.placeholder',function(){$('.placeholder').each(function(){this.value='';});});}
function args(elem){var newAttrs={};var rinlinejQuery=/^jQuery\d+$/;$.each(elem.attributes,function(i,attr){if(attr.specified&&!rinlinejQuery.test(attr.name)){newAttrs[attr.name]=attr.value;}});return newAttrs;}
function clearPlaceholder(event,value){var input=this;var $input=$(input);if(input.value==$input.attr('placeholder')&&$input.hasClass('placeholder')){if($input.data('placeholder-password')){$input=$input.hide().next().show().attr('id',$input.removeAttr('id').data('placeholder-id'));if(event===true){return $input[0].value=value;}
$input.focus();}else{input.value='';$input.removeClass('placeholder');input==safeActiveElement()&&input.select();}}}
function setPlaceholder(){var $replacement;var input=this;var $input=$(input);var id=this.id;if(input.value==''){if(input.type=='password'){if(!$input.data('placeholder-textinput')){try{$replacement=$input.clone().attr({'type':'text'});}catch(e){$replacement=$('<input>').attr($.extend(args(this),{'type':'text'}));}
$replacement.removeAttr('name').data({'placeholder-password':$input,'placeholder-id':id}).bind('focus.placeholder',clearPlaceholder);$input.data({'placeholder-textinput':$replacement,'placeholder-id':id}).before($replacement);}
$input=$input.removeAttr('id').hide().prev().attr('id',id).show();}
$input.addClass('placeholder');$input[0].value=$input.attr('placeholder');}else{$input.removeClass('placeholder');}}
function safeActiveElement(){try{return document.activeElement;}catch(err){}}}(this,document,jQuery));