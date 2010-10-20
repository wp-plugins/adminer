<?php
/**
 * Changes for WP
 * is_mail() --> is_ad_email()
 * <body --> no javascript; only onload="bodyLoad();"
 * line 35: no sourceforge-url, change: in var jushRoot=''
 * line 968: remove: header("X-Frame-Options: deny");
 * Change String Optimisieren to Optimieren
 */

/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://php.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
*/error_reporting(6135);$ye=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($ye){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$b){$oe=filter_input_array(constant("INPUT$b"),FILTER_UNSAFE_RAW);if($oe){$$b=$oe;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAETMzEREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD///8BwP//AYB//wGAf/8BgH//AYB//wGAf/8BgH//AYAB/wGAAf8BgAH/AcAA/wH+AP8B/wD/Af+B/wH///8B");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tr:hover td,tr:hover th{background:#ddf;}pre{margin:1em 0 0;}.version{color:#777;font-size:67%;}.js .hidden{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>
document.body.className='js';function toggle(id){var el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}
function cookie(assign,days,params){var date=new Date();date.setDate(date.getDate()+days);document.cookie=assign+'; expires='+date+(params||'');}
function verifyVersion(protocol){cookie('adminer_version=0',1);var script=document.createElement('script');script.src=protocol+'://www.adminer.org/version.php';document.body.appendChild(script);}
function formCheck(el,name){var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)){elems[i].checked=el.checked;}}}
function formUncheck(id){document.getElementById(id).checked=false;}
function formChecked(el,name){var checked=0;var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)&&elems[i].checked){checked++;}}
return checked;}
function tableClick(event){var el=event.target||event.srcElement;while(!/^tr$/i.test(el.tagName)){if(/^(table|a|input|textarea)$/i.test(el.tagName)){return;}
el=el.parentNode;}
el=el.firstChild.firstChild;el.click&&el.click();el.onclick&&el.onclick();}
function setHtml(id,html){var el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html;}}}
function selectAddRow(field){var row=field.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[[0-9]+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[[0-9]+/,'$&1');inputs[0].value='';inputs[0].className='';}
field.parentNode.parentNode.appendChild(row);field.onchange=function(){};}
function selectDblClick(td,event,text){var pos=event.rangeOffset;var value=(td.firstChild.firstChild?td.firstChild.firstChild.data:(td.firstChild.alt?td.firstChild.alt:td.firstChild.data));var input=document.createElement(text?'textarea':'input');input.name=td.id;input.value=(value=='\u00A0'||td.getElementsByTagName('i').length?'':value);input.style.width=(td.clientWidth-14)+'px';if(text){var rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}
if(document.selection){var range=document.selection.createRange();range.moveToPoint(event.x,event.y);var range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}
td.innerHTML='';td.appendChild(input);input.focus();input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var range=document.selection.createRange();range.moveStart('character',pos);range.select();}
td.ondblclick=function(){};}
function bodyLoad(version,protocol){var jushRoot='';var script=document.createElement('script');script.src=jushRoot+'jush.js';script.onload=function(){if(window.jush){jush.create_links=' target="_blank"';jush.urls.sql[0]='http://dev.mysql.com/doc/refman/'+version+'/en/$key';jush.urls.sql_sqlset=jush.urls.sql[0];jush.urls.sqlset[0]=jush.urls.sql[0];jush.urls.sqlstatus[0]=jush.urls.sql[0];jush.urls.pgsql[0]='http://www.postgresql.org/docs/'+version+'/static/$key';jush.urls.pgsql_pgsqlset=jush.urls.pgsql[0];jush.urls.pgsqlset[0]='http://www.postgresql.org/docs/'+version+'/static/runtime-config-$key.html#GUC-$1';jush.style(jushRoot+'jush.css');if(window.jushLinks){jush.custom_links=jushLinks;}
jush.highlight_tag('pre',0);jush.highlight_tag('code');}};script.onreadystatechange=function(){if(/^(loaded|complete)$/.test(script.readyState)){script.onload();}};document.body.appendChild(script);}
function selectValue(select){return select.value||select.options[select.selectedIndex].text;}
function formField(form,name){for(var i=0;i<form.length;i++){if(form[i].name==name){return form[i];}}}
function typePassword(el,disable){try{el.type=(disable?'text':'password');}catch(e){}}
var added='.',rowCount;function reEscape(s){return s.replace(/[\[\]\\^$*+?.(){|}]/,'\\$&');}
function idfEscape(s){return s.replace(/`/,'``');}
function editingNameChange(field){var name=field.name.substr(0,field.name.length-7);var type=formField(field.form,name+'[type]');var opts=type.options;var table=reEscape(field.value);var column='';var match;if((match=/(.+)_(.+)/.exec(table))||(match=/(.*[a-z])([A-Z].*)/.exec(table))){table=match[1];column=match[2];}
var plural='(?:e?s)?';var tabCol=table+plural+'_?'+column;var re=new RegExp('(^'+idfEscape(table+plural)+'`'+idfEscape(column)+'$'
+'|^'+idfEscape(tabCol)+'`'
+'|^'+idfEscape(column+plural)+'`'+idfEscape(table)+'$'
+')|`'+idfEscape(tabCol)+'$','i');var candidate;for(var i=opts.length;i--;){if(!/`/.test(opts[i].value)){if(i==opts.length-2&&candidate&&!match[1]&&name=='fields[1]'){return false;}
break;}
if(match=re.exec(opts[i].value)){if(candidate){return false;}
candidate=i;}}
if(candidate){type.selectedIndex=candidate;type.onchange();}}
function editingAddRow(button,allowed,focus){if(allowed&&rowCount>=allowed){return false;}
var match=/([0-9]+)(\.[0-9]+)?/.exec(button.name);var x=match[0]+(match[2]?added.substr(match[2].length):added)+'1';var row=button.parentNode.parentNode;var row2=row.cloneNode(true);var tags=row.getElementsByTagName('select');var tags2=row2.getElementsByTagName('select');for(var i=0;i<tags.length;i++){tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);tags2[i].selectedIndex=tags[i].selectedIndex;}
tags=row.getElementsByTagName('input');tags2=row2.getElementsByTagName('input');var input=tags2[0];for(var i=0;i<tags.length;i++){if(tags[i].name=='auto_increment_col'){tags2[i].value=x;tags2[i].checked=false;}
tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);if(/\[(orig|field|comment|default)/.test(tags[i].name)){tags2[i].value='';}
if(/\[(has_default)/.test(tags[i].name)){tags2[i].checked=false;}}
tags[0].onchange=function(){editingNameChange(tags[0]);};row.parentNode.insertBefore(row2,row.nextSibling);if(focus){input.onchange=function(){editingNameChange(input);};input.focus();}
added+='0';rowCount++;return true;}
function editingRemoveRow(button){var field=formField(button.form,button.name.replace(/drop_col(.+)/,'fields$1[field]'));field.parentNode.removeChild(field);button.parentNode.parentNode.style.display='none';return true;}
var lastType='';function editingTypeChange(type){var name=type.name.substr(0,type.name.length-6);var text=selectValue(type);for(var i=0;i<type.form.elements.length;i++){var el=type.form.elements[i];if(el.name==name+'[length]'&&!((/(char|binary)$/.test(lastType)&&/(char|binary)$/.test(text))||(/(enum|set)$/.test(lastType)&&/(enum|set)$/.test(text)))){el.value='';}
if(lastType=='timestamp'&&el.name==name+'[has_default]'&&/timestamp/i.test(formField(type.form,name+'[default]').value)){el.checked=false;}
if(el.name==name+'[collation]'){el.className=(/(char|text|enum|set)$/.test(text)?'':'hidden');}
if(el.name==name+'[unsigned]'){el.className=(/(int|float|double|decimal)$/.test(text)?'':'hidden');}
if(el.name==name+'[on_delete]'){el.className=(/`/.test(text)?'':'hidden');}}}
function editingLengthFocus(field){var td=field.parentNode;if(/(enum|set)$/.test(selectValue(td.previousSibling.firstChild))){var edit=document.getElementById('enum-edit');var val=field.value;edit.value=(/^'.+','.+'$/.test(val)?val.substr(1,val.length-2).replace(/','/g,"\n").replace(/''/g,"'"):val);td.appendChild(edit);field.style.display='none';edit.style.display='inline';edit.focus();}}
function editingLengthBlur(edit){var field=edit.parentNode.firstChild;var val=edit.value;field.value=(/\n/.test(val)?"'"+val.replace(/\n+$/,'').replace(/'/g,"''").replace(/\n/g,"','")+"'":val);field.style.display='inline';edit.style.display='none';}
function columnShow(checked,column){var trs=document.getElementById('edit-fields').getElementsByTagName('tr');for(var i=0;i<trs.length;i++){trs[i].getElementsByTagName('td')[column].className=(checked?'':'hidden');}}
function partitionByChange(el){var partitionTable=/RANGE|LIST/.test(selectValue(el));el.form['partitions'].className=(partitionTable||!el.selectedIndex?'hidden':'');document.getElementById('partition-table').className=(partitionTable?'':'hidden');}
function partitionNameChange(el){var row=el.parentNode.parentNode.cloneNode(true);row.firstChild.firstChild.value='';el.parentNode.parentNode.parentNode.appendChild(row);el.onchange=function(){};}
function foreignAddRow(field){var row=field.parentNode.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/\]/,'1$&');selects[i].selectedIndex=0;}
field.parentNode.parentNode.parentNode.appendChild(row);field.onchange=function(){};}
function indexesAddRow(field){var row=field.parentNode.parentNode.cloneNode(true);var spans=row.getElementsByTagName('span');for(var i=0;i<spans.length-1;i++){row.removeChild(spans[i]);}
var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/indexes\[[0-9]+/,'$&1');selects[i].selectedIndex=0;}
var input=row.getElementsByTagName('input')[0];input.name=input.name.replace(/indexes\[[0-9]+/,'$&1');input.value='';field.parentNode.parentNode.parentNode.appendChild(row);field.onchange=function(){};}
function indexesAddColumn(field){var column=field.parentNode.cloneNode(true);var select=column.getElementsByTagName('select')[0];select.name=select.name.replace(/\]\[[0-9]+/,'$&1');select.selectedIndex=0;var input=column.getElementsByTagName('input')[0];input.name=input.name.replace(/\]\[[0-9]+/,'$&1');input.value='';field.parentNode.parentNode.appendChild(column);field.onchange=function(){};}
var that,x,y,em,tablePos;function schemaMousedown(el,event){that=el;x=event.clientX-el.offsetLeft;y=event.clientY-el.offsetTop;}
function schemaMousemove(ev){if(that!==undefined){ev=ev||event;var left=(ev.clientX-x)/em;var top=(ev.clientY-y)/em;var divs=that.getElementsByTagName('div');var lineSet={};for(var i=0;i<divs.length;i++){if(divs[i].className=='references'){var div2=document.getElementById((divs[i].id.substr(0,4)=='refs'?'refd':'refs')+divs[i].id.substr(4));var ref=(tablePos[divs[i].title]?tablePos[divs[i].title]:[div2.parentNode.offsetTop/em,0]);var left1=-1;var isTop=true;var id=divs[i].id.replace(/^ref.(.+)-.+/,'$1');if(divs[i].parentNode!=div2.parentNode){left1=Math.min(0,ref[1]-left)-1;divs[i].style.left=left1+'em';divs[i].getElementsByTagName('div')[0].style.width=-left1+'em';var left2=Math.min(0,left-ref[1])-1;div2.style.left=left2+'em';div2.getElementsByTagName('div')[0].style.width=-left2+'em';isTop=(div2.offsetTop+ref[0]*em>divs[i].offsetTop+top*em);}
if(!lineSet[id]){var line=document.getElementById(divs[i].id.replace(/^....(.+)-[0-9]+$/,'refl$1'));var shift=ev.clientY-y-that.offsetTop;line.style.left=(left+left1)+'em';if(isTop){line.style.top=(line.offsetTop+shift)/em+'em';}
if(divs[i].parentNode!=div2.parentNode){line=line.getElementsByTagName('div')[0];line.style.height=(line.offsetHeight+(isTop?-1:1)*shift)/em+'em';}
lineSet[id]=true;}}}
that.style.left=left+'em';that.style.top=top+'em';}}
function schemaMouseup(ev){if(that!==undefined){ev=ev||event;tablePos[that.firstChild.firstChild.firstChild.data]=[(ev.clientY-y)/em,(ev.clientX-x)/em];that=undefined;var s='';for(var key in tablePos){s+='_'+key+':'+Math.round(tablePos[key][0]*10000)/10000+'x'+Math.round(tablePos[key][1]*10000)/10000;}
cookie('adminer_schema='+encodeURIComponent(s.substr(1)),30,'; path="'+location.pathname+location.search+'"');}}
function textareaKeydown(target,event){if(event.keyCode==9&&!event.shiftKey&&!event.altKey&&!event.ctrlKey&&!event.metaKey){if(target.setSelectionRange){var start=target.selectionStart;target.value=target.value.substr(0,start)+'\t'+target.value.substr(target.selectionEnd);target.setSelectionRange(start+1,start+1);return false;}else if(target.createTextRange){document.selection.createRange().text='\t';return false;}}
if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey){target.form.submit();}
return true;}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;}}exit;}function
connection(){global$g;return$g;}function
idf_unescape($M){$qb=substr($M,-1);return
str_replace($qb.$qb,$qb,substr($M,1,-1));}function
escape_string($b){return
substr(q($b),1,-1);}function
remove_slashes($tb){if(get_magic_quotes_gpc()){while(list($c,$b)=each($tb)){foreach($b
as$La=>$v){unset($tb[$c][$La]);if(is_array($v)){$tb[$c][stripslashes($La)]=$v;$tb[]=&$tb[$c][stripslashes($La)];}else{$tb[$c][stripslashes($La)]=($ye?$v:stripslashes($v));}}}}}function
bracket_escape($M,$Ze=false){static$Ce=array(':'=>':1',']'=>':2','['=>':3');return
strtr($M,($Ze?array_flip($Ce):$Ce));}function
h($G){return
htmlspecialchars($G,ENT_QUOTES);}function
nbsp($G){return(trim($G)!=""?h($G):"&nbsp;");}function
nl_br($G){return
str_replace("\n","<br>",$G);}function
checkbox($f,$p,$Ga,$Ne="",$Qe=""){static$U=0;$U++;$e="<input type='checkbox'".($f?" name='$f' value='".h($p)."'":"").($Ga?" checked":"").($Qe?" onclick=\"$Qe\"":"")." id='checkbox-$U'>";return($Ne!=""?"<label for='checkbox-$U'>$e".h($Ne)."</label>":$e);}function
optionlist($bd,$Ye=null,$fe=false){$e="";foreach($bd
as$La=>$v){if(is_array($v)){$e.='<optgroup label="'.h($La).'">';}foreach((is_array($v)?$v:array($La=>$v))as$c=>$b){$e.='<option'.($fe||is_string($c)?' value="'.h($c).'"':'').(($fe||is_string($c)?(string)$c:$b)===$Ye?' selected':'').'>'.h($b);}if(is_array($v)){$e.='</optgroup>';}}return$e;}function
html_select($f,$bd,$p="",$Gb=true){if($Gb){return"<select name='".h($f)."'".(is_string($Gb)?" onchange=\"$Gb\"":"").">".optionlist($bd,$p)."</select>";}$e="";foreach($bd
as$c=>$b){$e.="<label><input type='radio' name='".h($f)."' value='".h($c)."'".($c==$p?" checked":"").">".h($b)."</label>";}return$e;}function
ini_bool($af){$b=ini_get($af);return(eregi('^(on|true|yes)$',$b)||(int)$b);}function
q($G){global$g;return$g->quote($G);}function
get_vals($j,$J=0){global$g;$e=array();$i=$g->query($j);if(is_object($i)){while($a=$i->fetch_row()){$e[]=$a[$J];}}return$e;}function
get_key_vals($j,$H=null){global$g;if(!is_object($H)){$H=$g;}$e=array();$i=$H->query($j);while($a=$i->fetch_row()){$e[$a[0]]=$a[1];}return$e;}function
get_rows($j,$H=null,$n="<p class='error'>"){global$g;if(!is_object($H)){$H=$g;}$e=array();$i=$H->query($j);if(is_object($i)){while($a=$i->fetch_assoc()){$e[]=$a;}}elseif(!$i&&$n&&(headers_sent()||ob_get_level())){echo$n.error()."\n";}return$e;}function
unique_array($a,$K){foreach($K
as$w){if(ereg("PRIMARY|UNIQUE",$w["type"])){$e=array();foreach($w["columns"]as$c){if(!isset($a[$c])){continue
2;}$e[$c]=$a[$c];}return$e;}}$e=array();foreach($a
as$c=>$b){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$c)){$e[$c]=$b;}}return$e;}function
where($s){$e=array();foreach((array)$s["where"]as$c=>$b){$e[]=idf_escape(bracket_escape($c,1)).(ereg('\\.',$b)?" LIKE ".exact_value(addcslashes($b,"%_")):" = ".exact_value($b));}foreach((array)$s["null"]as$c){$e[]=idf_escape($c)." IS NULL";}return
implode(" AND ",$e);}function
where_check($b){parse_str($b,$Ld);remove_slashes(array(&$Ld));return
where($Ld);}function
where_link($l,$J,$p,$Xe="="){return"&where%5B$l%5D%5Bcol%5D=".urlencode($J)."&where%5B$l%5D%5Bop%5D=".urlencode($Xe)."&where%5B$l%5D%5Bval%5D=".urlencode($p);}function
cookie($f,$p){global$ec;$oc=array($f,(ereg("\n",$p)?"":$p),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ec);if(version_compare(PHP_VERSION,'5.2.0')>=0){$oc[]=true;}return
call_user_func_array('setcookie',$oc);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($c){return$_SESSION[$c][DRIVER][SERVER][$_GET["username"]];}function
set_session($c,$b){$_SESSION[$c][DRIVER][SERVER][$_GET["username"]]=$b;}function
auth_url($Kb,$D,$Q){global$ja;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ja))."|username|".session_name()),$k);return"$k[1]?".(SID&&!$_COOKIE?SID."&":"").($Kb!="server"||$D!=""?urlencode($Kb)."=".urlencode($D)."&":"")."username=".urlencode($Q).($k[2]?"&$k[2]":"");}function
redirect($ka,$Ba=null){if(isset($Ba)){restart_session();$_SESSION["messages"][]=$Ba;}if(isset($ka)){header("Location: ".($ka!=""?$ka:"."));exit;}}function
query_redirect($j,$ka,$Ba,$Wc=true,$Ff=true,$Od=false){global$g,$n,$r;if($Ff){$Od=!$g->query($j);}$Dd="";if($j){$Dd=$r->messageQuery($j);}if($Od){$n=error().$Dd;return
false;}if($Wc){redirect($ka,$Ba.$Dd);}return
true;}function
queries($j=null){global$g;static$nb=array();if(!isset($j)){return
implode(";\n",$nb);}$nb[]=$j;return$g->query($j);}function
apply_queries($j,$E,$wf='table'){foreach($E
as$h){if(!queries("$j ".$wf($h))){return
false;}}return
true;}function
queries_redirect($ka,$Ba,$Wc){return
query_redirect(queries(),$ka,$Ba,$Wc,false,!$Wc);}function
remove_from_uri($cb=""){return
substr(preg_replace("~(?<=[?&])($cb".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($Y,$xf){return" ".($Y==$xf?$Y+1:'<a href="'.h(remove_from_uri("page").($Y?"&page=$Y":"")).'">'.($Y+1)."</a>");}function
get_file($c,$Jd=false){$pa=$_FILES[$c];if(!$pa||$pa["error"]){return$pa["error"];}return
file_get_contents($Jd&&ereg('\\.gz$',$pa["name"])?"compress.zlib://$pa[tmp_name]":($Jd&&ereg('\\.bz2$',$pa["name"])?"compress.bzip2://$pa[tmp_name]":$pa["tmp_name"]));}function
upload_error($n){$ae=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($n?lang(0).($ae?" ".lang(1,$ae):""):lang(2));}function
odd($e=' class="odd"'){static$l=0;if(!$e){$l=-1;}return($l++%
2?$e:'');}function
is_utf8($b){return(preg_match('~~u',$b)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$b));}function
shorten_utf8($G,$ca=80,$vf=""){if(!preg_match("(^([\t\r\n -\x{FFFF}]{0,$ca})($)?)u",$G,$k)){preg_match("(^([\t\r\n -~]{0,$ca})($)?)",$G,$k);}return
h($k[1]).$vf.(isset($k[2])?"":"<i>...</i>");}function
friendly_url($b){return
preg_replace('~[^a-z0-9_]~i','-',$b);}function
hidden_fields($tb,$uf=array()){while(list($c,$b)=each($tb)){if(is_array($b)){foreach($b
as$La=>$v){$tb[$c."[$La]"]=$v;}}elseif(!in_array($c,$uf)){echo'<input type="hidden" name="'.h($c).'" value="'.h($b).'">';}}}function
hidden_fields_get(){echo(SID&&!$_COOKIE?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($h){$e=array();foreach(foreign_keys($h)as$B){foreach($B["source"]as$b){$e[$b][]=$B;}}return$e;}function
enum_input($y,$Sa,$d,$p){preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$la);foreach($la[1]as$l=>$b){$b=stripcslashes(str_replace("''","'",$b));$Ga=(is_int($p)?$p==$l+1:(is_array($p)?in_array($l+1,$p):$p===$b));echo" <label><input type='$y'$Sa value='".($l+1)."'".($Ga?' checked':'').'>'.h($b).'</label>';}}function
input($d,$p,$O){global$T,$r,$_;$f=h(bracket_escape($d["field"]));echo"<td class='function'>";$V=(isset($_GET["select"])?array("orig"=>lang(3)):array())+$r->editFunctions($d);$Sa=" name='fields[$f]'";if($d["type"]=="enum"){echo
nbsp($V[""])."<td>".($V["orig"]?"<label><input type='radio'$Sa value='-1' checked><i>$V[orig]</i></label> ":""),$r->editInput($_GET["edit"],$d,$Sa,$p);enum_input("radio",$Sa,$d,$p);}else{$gb=0;foreach($V
as$c=>$b){if($c===""||!$b){break;}$gb++;}$Gb=($gb?" onchange=\"var f = this.form['function[".addcslashes($f,"\r\n'\\")."]']; if ($gb > f.selectedIndex) f.selectedIndex = $gb;\"":"");$Sa.=$Gb;echo(count($V)>1?html_select("function[$f]",$V,!isset($O)||in_array($O,$V)||isset($V[$O])?$O:""):nbsp(reset($V))).'<td>';$Xd=$r->editInput($_GET["edit"],$d,$Sa,$p);if($Xd!=""){echo$Xd;}elseif($d["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$la);foreach($la[1]as$l=>$b){$b=stripcslashes(str_replace("''","'",$b));$Ga=(is_int($p)?($p>>$l)&1:in_array($b,explode(",",$p),true));echo" <label><input type='checkbox' name='fields[$f][$l]' value='".(1<<$l)."'".($Ga?' checked':'')."$Gb>".h($b).'</label>';}}elseif(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$Gb>";}elseif(ereg('text|lob',$d["type"])){echo"<textarea ".($_!="sqlite"||ereg("\n",$p)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$Sa>".h($p).'</textarea>';}else{$jd=(!ereg('int',$d["type"])&&preg_match('~^([0-9]+)(,([0-9]+))?$~',$d["length"],$k)?((ereg("binary",$d["type"])?2:1)*$k[1]+($k[3]?1:0)+($k[2]&&!$d["unsigned"]?1:0)):($T[$d["type"]]?$T[$d["type"]]+($d["unsigned"]?0:1):0));echo"<input value='".h($p)."'".($jd?" maxlength='$jd'":"").(ereg('char|binary',$d["type"])&&$jd>20?" size='40'":"")."$Sa>";}}}function
process_input($d){global$r;$M=bracket_escape($d["field"]);$O=$_POST["function"][$M];$p=$_POST["fields"][$M];if($d["type"]=="enum"){if($p==-1){return
false;}if($p==""){return"NULL";}return
intval($p);}if($d["auto_increment"]&&$p==""){return
null;}if($O=="orig"){return
false;}if($O=="NULL"){return"NULL";}if($d["type"]=="set"){return
array_sum((array)$p);}if(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){$pa=get_file("fields-$M");if(!is_string($pa)){return
false;}return
q($pa);}return$r->processInput($d,$p,$O);}function
search_tables(){global$r,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$sa=false;foreach(table_status()as$h=>$I){$f=$r->tableName($I);if(isset($I["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($h,$_POST["tables"]))){$i=$g->query("SELECT".limit("1 FROM ".table($h)," WHERE ".implode(" AND ",$r->selectSearchProcess(fields($h),array())),1));if($i->fetch_row()){if(!$sa){echo"<ul>\n";$sa=true;}echo"<li><a href='".h(ME."select=".urlencode($h)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>".h($f)."</a>\n";}}}echo($sa?"</ul>":"<p class='message'>".lang(4))."\n";}function
dump_csv($a){foreach($a
as$c=>$b){if(preg_match("~[\"\n,;]~",$b)||$b===""){$a[$c]='"'.str_replace('"','""',$b).'"';}}echo
implode(($_POST["format"]=="csv"?",":";"),$a)."\n";}function
apply_sql_function($O,$J){return($O?($O=="unixepoch"?"DATETIME($J, '$O')":($O=="count distinct"?"COUNT(DISTINCT ":strtoupper("$O("))."$J)"):$J);}function
password_file(){$Yc=ini_get("upload_tmp_dir");if(!$Yc){if(function_exists('sys_get_temp_dir')){$Yc=sys_get_temp_dir();}else{$aa=@tempnam("","");if(!$aa){return
false;}$Yc=dirname($aa);unlink($aa);}}$aa="$Yc/adminer.key";$e=@file_get_contents($aa);if($e){return$e;}$Ka=@fopen($aa,"w");if($Ka){$e=md5(uniqid(mt_rand(),true));fwrite($Ka,$e);fclose($Ka);}return$e;}function
is_ad_email($sf){$ge='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$mc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$ia="$ge+(\\.$ge+)*@($mc?\\.)+$mc";return
preg_match("(^$ia(,\\s*$ia)*\$)i",$sf);}function
is_url($G){$mc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($mc?\\.)+$mc(:[0-9]+)?(/.*)?(\\?.*)?(#.*)?\$~i",$G,$k)?strtolower($k[1]):"");}function
print_fieldset($U,$tf,$yf=false){echo"<fieldset><legend><a href='#fieldset-$U' onclick=\"return !toggle('fieldset-$U');\">$tf</a></legend><div id='fieldset-$U'".($yf?"":" class='hidden'").">\n";}function
bold($G,$bf){return($bf?"<b>$G</b>":$G);}if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$ec=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$oc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ec);if(version_compare(PHP_VERSION,'5.2.0')>=0){$oc[]=true;}call_user_func_array('session_set_cookie_params',$oc);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);$Yb=array('en'=>'English','cs'=>'Čeština','sk'=>'Slovenčina','nl'=>'Nederlands','es'=>'Español','de'=>'Deutsch','fr'=>'Français','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','ru'=>'Русский язык','zh'=>'简体中文','zh-tw'=>'繁體中文','ja'=>'日本語','ta'=>'த‌மிழ்',);function
lang($M,$Zc=null){global$Wa,$ra;$Xb=$ra[$M];if(is_array($Xb)&&$Xb){$rc=($Zc==1||(!$Zc&&$Wa=='fr')?0:((!$Zc||$Zc>=5)&&ereg('cs|sk|ru',$Wa)?2:1));$Xb=$Xb[$rc];}$Me=func_get_args();array_shift($Me);return
vsprintf((isset($Xb)?$Xb:$M),$Me);}function
switch_lang(){global$Wa,$Yb;echo"<form action=''>\n<div id='lang'>";hidden_fields($_GET,array('lang'));echo
lang(5).": ".html_select("lang",$Yb,$Wa,"this.form.submit();")," <input type='submit' value='".lang(6)."' class='hidden'>\n","</div>\n</form>\n";}if(isset($_GET["lang"])){$_COOKIE["adminer_lang"]=$_GET["lang"];$_SESSION["lang"]=$_GET["lang"];}$Wa="en";if(isset($Yb[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$Wa=$_COOKIE["adminer_lang"];}elseif(isset($Yb[$_SESSION["lang"]])){$Wa=$_SESSION["lang"];}else{$Xc=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$la,PREG_SET_ORDER);foreach($la
as$k){$Xc[$k[1]]=(isset($k[3])?$k[3]:1);}arsort($Xc);foreach($Xc
as$c=>$ta){if(isset($Yb[$c])){$Wa=$c;break;}$c=preg_replace('~-.*~','',$c);if(!isset($Xc[$c])&&isset($Yb[$c])){$Wa=$c;break;}}}switch($Wa){case"cs":$ra=array('Nepodařilo se nahrát soubor.','Maximální povolená velikost souboru je %sB.','Soubor neexistuje.','původní','Žádné tabulky.','Jazyk','Vybrat','Soubor existuje.','Uživatelské typy','Čísla','Datum a čas','Řetězce','Binární','Síť','Geometrie','Seznamy','Systém','Server','Uživatel','Heslo','Přihlásit se','Trvalé přihlášení','Vypsat data','Zobrazit strukturu','Pozměnit pohled','Pozměnit tabulku','Nová položka','Stránka','poslední','Upravit',array('%d bajt','%d bajty','%d bajtů'),'Vypsat','Funkce','Agregace','Vyhledat','kdekoliv','Seřadit','sestupně','Limit','Délka textů','Akce','SQL příkaz','prázdné','otevřít','uložit','Export','Odhlásit','databáze','schéma','Vytvořit novou tabulku','vypsat','Žádná extenze','Není dostupná žádná z podporovaných PHP extenzí (%s).','Neplatný token CSRF. Odešlete formulář znovu.','Odhlášení proběhlo v pořádku.','Session proměnné musí být povolené.','Session vypršela, přihlašte se prosím znovu.','Neplatné přihlašovací údaje.','Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','Databáze','Nesprávná databáze.','Databáze byly odstraněny.','Vybrat databázi','Vytvořit novou databázi','Oprávnění','Seznam procesů','Proměnné','Stav','Verze %s: %s přes PHP extenzi %s','Přihlášen jako: %s','Porovnávání','Tabulky','Odstranit','Opravdu?','Žádné řádky.','Cizí klíče','porovnávání','Při smazání','Název sloupce','Název parametru','Typ','Délka','Volby','Auto Increment','Výchozí hodnoty','Komentář','Přidat další','Přesunout nahoru','Přesunout dolů','Odebrat','Pohled','Tabulka','Sloupec','Indexy','Pozměnit indexy','Zdroj','Cíl','Při změně','Změnit','Přidat cizí klíč','Triggery','Přidat trigger','Schéma databáze','Export','Výstup','Formát','Procedury a funkce','Události','Data','upravit','Vytvořit uživatele','Chyba v dotazu','%.3f s',array('%d řádek','%d řádky','%d řádků'),array('Příkaz proběhl v pořádku, byl změněn %d záznam.','Příkaz proběhl v pořádku, byly změněny %d záznamy.','Příkaz proběhl v pořádku, bylo změněno %d záznamů.'),'Žádné příkazy k vykonání.','Nahrání souboru','Nahrávání souborů není povoleno.','Provést','Zastavit při chybě','Ze serveru','Soubor %s na webovém serveru','Spustit soubor','Historie','Vyčistit','Položka byla smazána.','Položka byla aktualizována.','Položka%s byla vložena.','Vložit','Uložit','Uložit a pokračovat v editaci','Uložit a vložit další','Smazat','Tabulka byla odstraněna.','Tabulka byla změněna.','Tabulka byla vytvořena.','Vytvořit tabulku','Byl překročen maximální povolený počet polí. Zvyšte prosím %s a %s.','Název tabulky','úložiště','Rozdělit podle','Oddíly','Název oddílu','Hodnoty','Indexy byly změněny.','Typ indexu','Sloupec (délka)','Databáze byla odstraněna.','Databáze byla přejmenována.','Databáze byla vytvořena.','Databáze byla změněna.','Pozměnit databázi','Vytvořit databázi','Schéma bylo odstraněno.','Schéma bylo vytvořeno.','Schéma bylo změněno.','Pozměnit schéma','Vytvořit schéma','Zavolat',array('Procedura byla zavolána, byl změněn %d záznam.','Procedura byla zavolána, byly změněny %d záznamy.','Procedura byla zavolána, bylo změněno %d záznamů.'),'Cizí klíč byl odstraněn.','Cizí klíč byl změněn.','Cizí klíč byl vytvořen.','Zdrojové a cílové sloupce musí mít stejný datový typ, nad cílovými sloupci musí být definován index a odkazovaná data musí existovat.','Cizí klíč','Cílová tabulka','Změnit','Přidat sloupec','Pohled byl odstraněn.','Pohled byl změněn.','Pohled byl vytvořen.','Vytvořit pohled','Název','Událost byla odstraněna.','Událost byla změněna.','Událost byla vytvořena.','Pozměnit událost','Vytvořit událost','Začátek','Konec','Každých','Po dokončení zachovat','Procedura byla odstraněna.','Procedura byla změněna.','Procedura byla vytvořena.','Změnit funkci','Změnit proceduru','Vytvořit funkci','Vytvořit proceduru','Návratový typ','Sekvence byla odstraněna.','Sekvence byla vytvořena.','Sekvence byla změněna.','Pozměnit sekvenci','Vytvořit sekvenci','Typ byl odstraněn.','Typ byl vytvořen.','Pozměnit typ','Vytvořit typ','Trigger byl odstraněn.','Trigger byl změněn.','Trigger byl vytvořen.','Změnit trigger','Vytvořit trigger','Čas','Událost','Uživatel byl odstraněn.','Uživatel byl změněn.','Uživatel byl vytvořen.','Zahašované','Procedura','Povolit','Zakázat',array('Byl ukončen %d proces.','Byly ukončeny %d procesy.','Bylo ukončeno %d procesů.'),'Ukončit',array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),'Dvojklikněte na políčko, které chcete změnit.',array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),'Nepodařilo se vypsat tabulku','Vztahy','Ke změně této hodnoty zvyšte délku textů.','Ke změně této hodnoty použijte odkaz upravit.','celý výsledek','Klonovat','Import CSV','Import',' ','Tabulky byly vyprázdněny.','Tabulky byly přesunuty','Tabulky byly odstraněny.','Schéma','Tabulky a pohledy','Vyhledat data v tabulkách','Úložiště','Velikost dat','Velikost indexů','Volné místo','Řádků','%d celkem','Analyzovat','Optimalizovat','Zkontrolovat','Opravit','Vyprázdnit','Přesunout do jiné databáze','Přesunout','Sekvence','Plán','V daný čas','teď');break;case"de":$ra=array('Hochladen von Datei fehlgeschlagen.','Maximal erlaubte Dateigrösse ist %sB.','Datei existiert nicht.','Original','Keine Tabellen.','Sprache','Benutzung','Datei existiert schon.','Benutzer-definierte Typen','Zahlen','Datum oder Zeit','Zeichenketten','Binär','Netzwerk','Geometrie','Listen','Datenbank System','Server','Benutzer','Passwort','Login','Passwort speichern','Daten auswählen','Struktur anzeigen','View ändern','Tabelle ändern','Neuer Datensatz','Seite','letzte','Ändern',array('%d Byte','%d Bytes'),'Daten zeigen von','Funktionen','Agregationen','Suchen','beliebig','Ordnen','absteigend','Begrenzung','Textlänge','Aktion','SQL-Query','leer','anzeigen','Datei','Export','Abmelden','Datenbank','Schema','Neue Tabelle','zeigen','Keine Erweiterungen installiert','Keine der unterstützten PHP-Erweiterungen (%s) ist vorhanden.','CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.','Abmeldung erfolgreich.','Sitzungen müssen aktiviert sein.','Sitzungsdauer abgelaufen, bitte erneut anmelden.','Ungültige Anmelde-Informationen.','POST data zu gross. Reduzieren Sie die Grösse oder vergrössern Sie den Wert %s in der Konfiguration.','Datenbank','Datenbank ungültig.','Datenbanken entfernt.','Datenbank auswählen','Neue Datenbank','Rechte','Prozessliste','Variablen','Status','Version %s: %s, mit PHP-Erweiterung %s','Angemeldet als: %s','Collation','Tabellen','Entfernen','Sind Sie sicher ?','Keine Daten.','Fremdschlüssel','Kollation','ON DELETE','Spaltenname','Name des Parameters','Typ','Länge','Optionen','Auto-Inkrement','Vorgabewerte festlegen','Kommentar','Hinzufügen','Nach oben','Nach unten','Entfernen','View','Tabelle','Spalte','Indizes','Indizes ändern','Ursprung','Ziel','ON UPDATE','Ändern','Fremdschlüssel hinzufügen','Trigger','Trigger hinzufügen','Datenbankschema','Exportieren','Ergebnis','Format','Prozeduren','Ereignisse','Daten','ändern','Neuer Benutzer','Fehler in der SQL-Abfrage','%.3f s',array('%d Datensatz','%d Datensätze'),array('Abfrage ausgeführt, %d Datensatz betroffen.','Abfrage ausgeführt, %d Datensätze betroffen.'),'Kein Kommando vorhanden.','Datei importieren','Importieren von Dateien abgeschaltet.','Ausführen','Bei Fehler anhalten','Auf Server','Webserver Datei %s','Datei ausführen','History','Entleeren','Datensatz gelöscht.','Datensatz geändert.','Datensatz%s hinzugefügt.','Hinzufügen','Speichern','Speichern und weiter bearbeiten','Speichern und nächsten hinzufügen','Entfernen','Tabelle entfernt.','Tabelle geändert.','Tabelle erstellt.','Neue Tabelle erstellen','Die maximal erlaubte Anzahl der Felder ist überschritten. Bitte %s und %s erhöhen.','Name der Tabelle','Motor','Partitionieren um','Partitionen','Name der Partition','Werte','Indizes geändert.','Index-Typ','Spalte (Länge)','Datenbank entfernt.','Datenbank umbenannt.','Datenbank erstellt.','Datenbank geändert.','Datenbank ändern','Neue Datenbank','Schema wurde gelöscht.','Neues Schema erstellt.','Schema geändert.','Schema ändern','Neues Schema','Aufrufen',array('Kommando SQL ausgeführt, %d Datensatz betroffen.','Kommando SQL ausgeführt, %d Datensätze betroffen.'),'Fremdschlüssel entfernt.','Fremdschlüssel geändert.','Fremdschlüssel erstellt.','Spalten des Ursprungs und des Zieles müssen vom gleichen Datentyp sein, es muss unter den Zielspalten ein Index existieren und die referenzierten Daten müssen existieren.','Fremdschlüssel','Zieltabelle','Ändern','Spalte hinzufügen','View entfernt.','View geändert.','View erstellt.','Neue View erstellen','Name','Ereignis entfernt.','Ereignis geändert.','Ereignis erstellt.','Ereignis ändern','Ereignis erstellen','Start','Ende','Jede','Nach der Ausführung erhalten','Prozedur entfernt.','Prozedur geändert.','Prozedur erstellt.','Funktion ändern','Prozedur ändern','Neue Funktion','Neue Prozedur','Typ des Rückgabewertes','Sequenz gelöscht.','Neue Sequenz erstellt.','Sequenz geändert.','Sequenz ändern','Neue Sequenz','Typ gelöscht.','Typ erstellt.','Typ ändern','Typ erstellen','Trigger entfernt.','Trigger geändert.','Trigger erstellt.','Trigger ändern','Trigger hinzufügen','Zeitpunkt','Ereignis','Benutzer entfernt.','Benutzer geändert.','Benutzer erstellt.','Hashed','Rutine','Erlauben','Verbieten',array('%d Prozess gestoppt.','%d Prozesse gestoppt.'),'Anhalten',array('%d Artikel betroffen.','%d Artikel betroffen.'),'Doppelklick zum Bearbeiten des Wertes.',array('%d Datensatz importiert.','%d Datensätze wurden importiert.'),'Auswahl der Tabelle fehlgeschlagen','Relationen','Vergrössern Sie die Textlänge um den Wert ändern zu können.','Benutzen Sie den Link zum editieren dieses Wertes.','Gesamtergebnis','Klonen','Importiere CSV','Importieren',' ','Tabellen sind entleert worden (truncate).','Tabellen verschoben.','Tabellen wurden entfernt (drop).','Schema','Tabellen und Views','Suche in Tabellen','Motor','Datengrösse','Indexgrösse','Freier Bereich','Datensätze','%d insgesamt','Analysieren','Optimieren','Prüfen','Reparieren','Entleeren (truncate)','In andere Datenbank verschieben','Verschieben','Sequenz','Zeitplan','Zur angegebenen Zeit','Anhänge');break;case"en":$ra=array('Unable to upload a file.','Maximum allowed file size is %sB.','File does not exist.','original','No tables.','Language','Use','File exists.','User types','Numbers','Date and time','Strings','Binary','Network','Geometry','Lists','System','Server','Username','Password','Login','Permanent login','Select data','Show structure','Alter view','Alter table','New item','Page','last','Edit',array('%d byte','%d bytes'),'Select','Functions','Aggregation','Search','anywhere','Sort','descending','Limit','Text length','Action','SQL command','empty','open','save','Dump','Logout','database','schema','Create new table','select','No extension','None of the supported PHP extensions (%s) are available.','Invalid CSRF token. Send the form again.','Logout successful.','Session support must be enabled.','Session expired, please login again.','Invalid credentials.','Too big POST data. Reduce the data or increase the %s configuration directive.','Database','Invalid database.','Databases have been dropped.','Select database','Create new database','Privileges','Process list','Variables','Status','%s version: %s through PHP extension %s','Logged as: %s','Collation','Tables','Drop','Are you sure?','No rows.','Foreign keys','collation','ON DELETE','Column name','Parameter name','Type','Length','Options','Auto Increment','Default values','Comment','Add next','Move up','Move down','Remove','View','Table','Column','Indexes','Alter indexes','Source','Target','ON UPDATE','Alter','Add foreign key','Triggers','Add trigger','Database schema','Export','Output','Format','Routines','Events','Data','edit','Create user','Error in query','%.3f s',array('%d row','%d rows'),array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),'No commands to execute.','File upload','File uploads are disabled.','Execute','Stop on error','From server','Webserver file %s','Run file','History','Clear','Item has been deleted.','Item has been updated.','Item%s has been inserted.','Insert','Save','Save and continue edit','Save and insert next','Delete','Table has been dropped.','Table has been altered.','Table has been created.','Create table','Maximum number of allowed fields exceeded. Please increase %s and %s.','Table name','engine','Partition by','Partitions','Partition name','Values','Indexes have been altered.','Index Type','Column (length)','Database has been dropped.','Database has been renamed.','Database has been created.','Database has been altered.','Alter database','Create database','Schema has been dropped.','Schema has been created.','Schema has been altered.','Alter schema','Create schema','Call',array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),'Foreign key has been dropped.','Foreign key has been altered.','Foreign key has been created.','Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.','Foreign key','Target table','Change','Add column','View has been dropped.','View has been altered.','View has been created.','Create view','Name','Event has been dropped.','Event has been altered.','Event has been created.','Alter event','Create event','Start','End','Every','On completion preserve','Routine has been dropped.','Routine has been altered.','Routine has been created.','Alter function','Alter procedure','Create function','Create procedure','Return type','Sequence has been dropped.','Sequence has been created.','Sequence has been altered.','Alter sequence','Create sequence','Type has been dropped.','Type has been created.','Alter type','Create type','Trigger has been dropped.','Trigger has been altered.','Trigger has been created.','Alter trigger','Create trigger','Time','Event','User has been dropped.','User has been altered.','User has been created.','Hashed','Routine','Grant','Revoke',array('%d process has been killed.','%d processes have been killed.'),'Kill',array('%d item has been affected.','%d items have been affected.'),'Double click on a value to modify it.',array('%d row has been imported.','%d rows have been imported.'),'Unable to select the table','Relations','Increase text length to modify this value.','Use edit link to modify this value.','whole result','Clone','CSV Import','Import',',','Tables have been truncated.','Tables have been moved.','Tables have been dropped.','Schema','Tables and views','Search data in tables','Engine','Data Length','Index Length','Data Free','Rows','%d in total','Analyze','Optimize','Check','Repair','Truncate','Move to other database','Move','Sequences','Schedule','At given time',array('%d e-mail has been sent.','%d e-mails have been sent.'));break;case"es":$ra=array('No es posible importar archivo.','Tamaño máximo de archivo es %sB.','Archivo no existe.','original','No existen tablas.','Idioma','Usar','Archivo ya existe.','Tipos definido por el usuario','Números','Fecha y hora','Cadena','Binario','Red','Geometría','Listas','Motor de base de datos','Servidor','Usuario','Contraseña','Login','Guardar contraseña','Seleccionar datos','Mostrar estructura','Modificar vista','Modifique estructura','Nuevo Registro','Página','último','Modificar',array('%d byte','%d bytes'),'Mostrar','Funciones','Agregaciones','Condición','donde sea','Ordenar','descendiente','Limit','Longitud de texto','Acción','Comando SQL','ningúno','mostrar','archivo','Export','Logout','base de datos','esquema','Nueva tabla','registros','No hay extension','Ninguna de las extensiones PHP soportadas (%s) está disponible.','Token CSRF inválido. Vuelva a enviar los datos del formulario.','Salida exitosa.','Deben estar habilitadas las sesiones.','Sesión expirada, por favor ingrese su clave de nuevo.','Identificacion inválida.','POST data demasiado grande. Reduzca el tamaño o aumente la directiva de configuración %s.','Base de datos','Base de datos inválida.','Bases de datos eliminadas.','Seleccionar Base de datos','Ingrese nueva base de datos','Privilegios','Lista de procesos','Variables','Estado','Versión %s: %s a través de extensión PHP %s','Logeado como: %s','Colación','Tablas','Eliminar','Está seguro?','No existen registros.','Claves foráneas','colación','ON DELETE','Nombre de columna','Nombre de Parámetro','Tipo','Longitud','Opciones','Incremento automático','Valores predeterminados','Comentario','Agregar','Mover arriba','Mover abajo','Eliminar','Vistas','Tabla','Columna','Indices','Modificar indices','Origen','Destino','ON UPDATE','Modificar','Agregar clave foránea','Triggers','Agregar trigger','Esquema de base de datos','Exportar','Salida','Formato','Procedimientos','Eventos','Datos','modificar','Crear Usuario','Error en consulta','%.3f s',array('%d registro','%d registros'),array('Consulta ejecutada, %d registro afectado.','Consulta ejecutada, %d registros afectados.'),'No hay comando para ejecutar.','Importar archivo','Importación de archivos deshablilitado.','Ejecutar','Parar en caso de error','Desde servidor','Archivo de servidor web %s','Ejecutar Archivo','History','Vaciar','Registro eliminado.','Registro modificado.','Registro%s insertado.','Agregar','Guardar','Guardar y continuar editando','Guardar e insertar otro','Eliminar','Tabla eliminada.','Tabla modificada.','Tabla creada.','Cree tabla','Cantida máxima de campos permitidos excedidos. Por favor aumente %s y %s.','Nombre de la tabla','motor','Particionar por','Particiones','Nombre de Partición','Valores','Indices modificados.','Tipo de índice','Columna (longitud)','Base de datos eliminada.','Base de datos renombrada.','Base de datos creada.','Base de datos modificada.','Modificar Base de datos','Crear Base de datos','Esquema eliminado.','Esquema creado.','Esquema modificado.','Modificar esquema','Crear esquema','Llamar',array('Consulta ejecutada, %d registro afectado.','Consulta ejecutada, %d registros afectados.'),'Clave externa eliminada.','Clave externa modificada.','Clave externa creada.','Las columnas de origen y destino deben ser del mismo tipo, debe existir un índice entre las columnas del destino y el registro referenciado debe existir.','Clave externa','Tabla de destino','Modificar','Agregar columna','Vista eliminada.','Vista modificada.','Vista creada.','Cear vista','Nombre','Evento eliminado.','Evento modificado.','Evento creado.','Modificar Evento','Crear Evento','Inicio','Fin','Cada','Al completar preservar','Procedimiento eliminado.','Procedimiento modificado.','Procedimiento creado.','Modificar Función','Modificar procedimiento','Crear función','Crear procedimiento','Tipo de valor de regreso','Secuencia eliminada.','Secuencia creada.','Secuencia modificada.','Modificar secuencia','Crear secuencias','Tipo eliminado.','Tipo creado.','Modificar tipo','Crear tipo','Trigger eliminado.','Trigger modificado.','Trigger creado.','Modificar Trigger','Agregar Trigger','Tiempo','Evento','Usuario eliminado.','Usuario modificado.','Usuario creado.','Hash','Rutina','Conceder','Impedir',array('%d proceso detenido.','%d procesos detenidos.'),'Detener',array('%d ítem afectado.','%d itemes afectados.'),'Doble-clic sobre el valor para editarlo.',array('%d registro importado.','%d registros importados.'),'No es posible seleccionar la tabla','Relaciones','Aumente el tamaño del campo de texto para modificar este valor.','Utilice el enlace de modificar para realizar los cambios.','resultado completo','Clonar','Importar CSV','Importar',' ','Tablas vaciadas (truncate).','Se movieron las tablas.','Tablas eliminadas.','Esquema','Tablas y vistas','Buscar datos en tablas','Motor','Longitud de datos','Longitud de índice','Espacio libre','Registros','%d en total','Analizar','Optimizar','Comprobar','Reparar','Vaciar','Mover a otra base de datos','Mover','Secuencias','Agenda','A hora determinada','Adjuntos');break;case"et":$ra=array('Faili üleslaadimine pole võimalik.','Maksimaalne failisuurus %sB.','Faili ei leitud.','originaal','Tabeleid ei leitud.','Keel','Kasuta','Fail juba eksisteerib.','Kasutajatüübid','Numbrilised','Kuupäev ja kellaaeg','Tekstid','Binaar','Võrk (network)','Geomeetria','Listid','Andmebaasimootor','Server','Kasutajanimi','Parool','Logi sisse','Jäta mind meelde','Vaata andmeid','Näita struktuuri','Muuda vaadet (VIEW)','Muuda tabeli struktuuri','Lisa kirje','Lehekülg','viimane','Muuda',array('%d bait','%d baiti'),'Kuva','Funktsioonid','Liitmine','Otsi','vahet pole','Sorteeri','kahanevalt','Piira','Teksti pikkus','Tegevus','SQL-Päring','tühi','näita brauseris','salvesta failina','Ekspordi','Logi välja','andmebaas','struktuur','Loo uus tabel','kuva','Ei leitud laiendust','Serveris pole ühtegi toetatud PHP laiendustest (%s).','Sobimatu CSRF, palun postitage vorm uuesti.','Väljalogimine õnnestus.','Sessioonid peavad olema lubatud.','Sessioon on aegunud, palun logige uuesti sisse.','Ebakorrektsed andmed.','POST-andmete maht on liialt suur. Palun vähendage andmeid või suurendage %s php-seadet.','Andmebaas','Tundmatu andmebaas.','Andmebaasid on edukalt kustutatud.','Vali andmebaas','Loo uus andmebaas','Õigused','Protsesside nimekiri','Muutujad','Staatus','%s versioon: %s, kasutatud PHP moodul: %s','Sisse logitud: %s','Tähetabel','Tabelid','Kustuta','Kas oled kindel?','Sissekanded puuduvad.','Võõrvõtmed (foreign key)','tähetabel','ON DELETE','Veeru nimi','Parameetri nimi','Tüüp','Pikkus','Valikud','Automaatselt suurenev','Vaikimisi väärtused','Kommentaar','Lisa järgmine','Liiguta ülespoole','Liiguta allapoole','Eemalda','Vaata','Tabel','Veerg','Indeksid','Muuda indekseid','Allikas','Sihtkoht','ON UPDATE','Muuda','Lisa võõrvõti','Päästikud (trigger)','Lisa päästik (TRIGGER)','Andmebaasi skeem','Ekspordi','Väljund','Formaat','Protseduurid','Sündmused (EVENTS)','Andmed','muuda','Loo uus kasutaja','Päringus esines viga','%.3f s',array('%d rida','%d rida'),array('Päring õnnestus, mõjutatatud ridu: %d.','Päring õnnestus, mõjutatatud ridu: %d.'),'Käsk puudub.','Faili üleslaadimine','Failide üleslaadimine on keelatud.','Käivita','Peatuda vea esinemisel','Serverist','Fail serveris: %s','Käivita fail','Ajalugu','Puhasta','Kustutamine õnnestus.','Uuendamine õnnestus.','Kirje%s on edukalt lisatud.','Sisesta','Salvesta','Salvesta ja jätka muutmist','Salvesta ja lisa järgmine','Kustuta','Tabel on edukalt kustutatud.','Tabeli andmed on edukalt muudetud.','Tabel on edukalt loodud.','Loo uus tabel','Maksimaalne väljade arv ületatud. Palun suurendage %s ja %s.','Tabeli nimi','andmebaasimootor','Partitsiooni','Partitsioonid','Partitsiooni nimi','Väärtused','Indeksite andmed on edukalt uuendatud.','Indeksi tüüp','Veerg (pikkus)','Andmebaas on edukalt kustutatud.','Andmebaas on edukalt ümber nimetatud.','Andmebaas on edukalt loodud.','Andmebaasi struktuuri uuendamine õnnestus.','Muuda andmebaasi','Loo uus andmebaas','Struktuur on edukalt kustutatud.','Struktuur on edukalt loodud.','Struktuur on edukalt muudetud.','Muuda struktuuri','Loo struktuur','Käivita',array('Protseduur täideti edukalt, mõjutatud ridu: %d.','Protseduur täideti edukalt, mõjutatud ridu: %d.'),'Võõrvõti on edukalt kustutatud.','Võõrvõtme andmed on edukalt muudetud.','Võõrvõri on edukalt loodud.','Lähte- ja sihtveerud peavad eksisteerima ja omama sama andmetüüpi, sihtveergudel peab olema määratud indeks ning viidatud andmed peavad eksisteerima.','Võõrvõti','Siht-tabel','Muuda','Lisa veerg','Vaade (VIEW) on edukalt kustutatud.','Vaade (VIEW) on edukalt muudetud.','Vaade (VIEW) on edukalt loodud.','Loo uus vaade (VIEW)','Nimi','Sündmus on edukalt kustutatud.','Sündmuse andmed on edukalt uuendatud.','Sündmus on edukalt loodud.','Muuda sündmuse andmeid','Loo uus sündmus (EVENT)','Alusta','Lõpeta','Iga','Lõpetamisel jäta sündmus alles','Protseduur on edukalt kustutatud.','Protseduuri andmed on edukalt muudetud.','Protseduur on edukalt loodud.','Muuda funktsiooni','Muuda protseduuri','Loo uus funktsioon','Loo uus protseduur','Tagastustüüp','Jada on edukalt kustutatud.','Jada on edukalt loodud.','Jada on edukalt muudetud.','Muuda jada','Loo jada','Tüüp on edukalt kustutatud.','Tüüp on edukalt loodud.','Muuda tüüpi','Loo tüüp','Päästik on edukalt kustutatud.','Päästiku andmed on edukalt uuendatud.','Uus päästik on edukalt loodud.','Muuda päästiku andmeid','Loo uus päästik (TRIGGER)','Aeg','Sündmus','Kasutaja on edukalt kustutatud.','Kasutaja andmed on edukalt muudetud.','Kasutaja on edukalt lisatud.','Häshitud (Hashed)','Protseduur','Anna','Eemalda',array('Protsess on edukalt peatatud (%d).','Valitud protsessid (%d) on edukalt peatatud.'),'Peata',array('Mõjutatud kirjeid: %d.','Mõjutatud kirjeid: %d.'),'Väärtuse muutmiseks topelt-kliki sellel.',array('Imporditi %d rida.','Imporditi %d rida.'),'Tabeli valimine ebaõnnestus','Seosed','Väärtuse muutmiseks suurenda tekstiveeru pikkust.','Väärtuse muutmiseks kasuta muutmislinki.','Täielikud tulemused','Kloon','Impordi CSV','Impordi',',','Validud tabelid on edukalt tühjendatud.','Valitud tabelid on edukalt liigutatud.','Valitud tabelid on edukalt kustutatud.','Struktuur','Tabelid ja vaated','Otsi kogu andmebaasist','Implementatsioon','Andmete pikkus','Indeksi pikkus','Vaba ruumi','Ridu','Kokku: %d','Analüüsi','Optimeeri','Kontrolli','Paranda','Tühjenda','Liiguta teise andmebaasi','Liiguta','Jadad (sequences)','Ajakava','Antud ajahetkel','Manused');break;case"fr":$ra=array('Impossible d\'importer le fichier.','La taille maximale des fichiers est de %sB.','Le fichier est introuvable.','original','Aucune table.','Langue','Utiliser','Le fichier existe.','Types utilisateur','Nombres','Date et heure','Chaînes','Binaires','Réseau','Géométrie','Listes','Système','Serveur','Utilisateur','Mot de passe','Authentification','Authentification permanente','Afficher les données','Afficher la structure','Modifier une vue','Modifier la table','Nouvel élément','Page','dernière','Modifier',array('%d octet','%d octets'),'Select','Fonctions','Agrégation','Rechercher','n\'importe où','Trier','décroissant','Limite','Longueur du texte','Action','Requête SQL','vide','ouvrir','sauvegarder','Exporter','Déconnexion','base de données','schéma','Créer une nouvelle table','select','Extension introuvable','Aucune des extensions PHP supportées (%s) n\'est disponible.','Token CSRF invalide. Veuillez réenvoyer le formulaire.','Au revoir!','Veuillez activer les sessions.','Session expirée, veuillez vous authentifier à nouveau.','Authentification échouée.','Données POST trop grandes. Réduisez la taille des données ou augmentez la valeur de %s dans la configuration de PHP.','Base de données','Base de données invalide.','Les bases de données ont été supprimées.','Sélectionner la base de données','Créer une base de données','Privilèges','Liste des processus','Variables','Statut','Version de %s : %s via l\'extension PHP %s','Authentifié en tant que %s','Interclassement','Tables','Supprimer','Êtes-vous certain ?','Aucun résultat.','Clés étrangères','interclassement','ON DELETE','Nom de la colonne','Nom du paramètre','Type','Longueur','Options','Auto increment','Valeurs par défaut','Commentaire','Ajouter le prochain','Déplacer vers le haut','Déplacer vers le bas','Effacer','Vue','Table','Colonne','Index','Modifier les index','Source','Cible','ON UPDATE','Modifier','Ajouter une clé étrangère','Triggers','Ajouter un trigger','Schéma de la base de données','Exporter','Sortie','Format','Routines','Évènements','Données','modifier','Créer un utilisateur','Erreur dans la requête','%.3f s',array('%d ligne','%d lignes'),array('Requête exécutée avec succès, %d ligne modifiée.','Requête exécutée avec succès, %d lignes modifiées.'),'Aucune commande à exécuter.','Importer un fichier','L\'importation de fichier est désactivée.','Exécuter','Arrêter en cas d\'erreur','Depuis le serveur','Fichier %s du serveur Web','Exécuter le fichier','Historique','Effacer','L\'élément a été supprimé.','L\'élément a été modifié.','L\'élément%s a été inséré.','Insérer','Sauvegarder','Sauvegarder et continuer l\'édition','Sauvegarder et insérer le prochain','Effacer','La table a été effacée.','La table a été modifiée.','La table a été créée.','Créer une table','Le nombre maximum de champs est dépassé. Veuillez augmenter %s et %s.','Nom de la table','moteur','Partitionner par','Partitions','Nom de la partition','Valeurs','Index modifiés.','Type d\'index','Colonne (longueur)','La base de données a été supprimée.','La base de données a été renommée.','La base de données a été créée.','La base de données a été modifiée.','Modifier la base de données','Créer une base de données','Le schéma a été supprimé.','Le schéma a été créé.','Le schéma a été modifié.','Modifier le schéma','Créer un schéma','Appeler',array('La routine a été exécutée, %d ligne modifiée.','La routine a été exécutée, %d lignes modifiées.'),'La clé étrangère a été effacée.','La clé étrangère a été modifiée.','La clé étrangère a été créée.','Les colonnes de source et de destination doivent être du même type, il doit y avoir un index sur les colonnes de destination et les données référencées doivent exister.','Clé étrangère','Table visée','Modifier','Ajouter une colonne','La vue a été effacée.','La vue a été modifiée.','La vue a été créée.','Créer une vue','Nom','L\'évènement a été supprimé.','L\'évènement a été modifié.','L\'évènement a été créé.','Modifier un évènement','Créer un évènement','Démarrer','Terminer','Chaque','Conserver quand complété','La routine a été supprimée.','La routine a été modifiée.','La routine a été créée.','Modifier la fonction','Modifier la procédure','Créer une fonction','Créer une procédure','Type de retour','La séquence a été supprimée.','La séquence a été créée.','La séquence a été modifiée.','Modifier la séquence','Créer une séquence','Le type a été supprimé.','Le type a été créé.','Modifier le type','Créer un type','Le trigger a été supprimé.','Le trigger a été modifié.','Le trigger a été créé.','Modifier un trigger','Ajouter un trigger','Temps','Évènement','L\'utilisateur a été effacé.','L\'utilisateur a été modifié.','L\'utilisateur a été créé.','Haché','Routine','Grant','Revoke',array('%d processus a été arrêté.','%d processus ont été arrêtés.'),'Arrêter',array('%d élément a été modifié.','%d éléments ont été modifiés.'),'Double-cliquez sur une valeur pour la modifier.',array('%d ligne a été importée.','%d lignes ont été importées.'),'Impossible de sélectionner la table','Relations','Augmentez la longueur de texte affiché pour modifier cette valeur.','Utilisez le lien "modifier" pour modifier cette valeur.','résultat entier','Cloner','Importer CSV','Importer',',','Les tables ont été tronquées.','Les tables ont été déplacées.','Les tables ont été effacées.','Schéma','Tables et vues','Rechercher dans les tables','Moteur','Longueur des données','Longueur de l\'index','Espace inutilisé','Lignes','%d au total','Analyser','Optimiser','Vérifier','Réparer','Tronquer','Déplacer vers une autre base de données','Déplacer','Séquences','Horaire','À un moment précis','maintenant');break;case"hu":$ra=array('Nem tudom feltölteni a fájlt.','A maximális fájlméret %s B.','A fájl nem létezik.','eredeti','Nincs tábla.','Nyelv','Használ','A fájl létezik.','Felhasználói típus','Szám','Dátum és idő','Szöveg','Bináris','Hálózat','Geometria','Lista','Adatbázis','Szerver','Felhasználó','Jelszó','Belépés','Emlékezz rám','Tartalom','Struktúra','Nézet módosítása','Tábla módosítása','Új tétel','oldal','utoljára','Szerkeszt',array('%d bájt','%d bájt','%d bájt'),'Kiválaszt','Funkciók','Aggregálás','Keresés','bárhol','Sorba rendezés','csökkenő','korlát','Szöveg hossz','Művelet','SQL parancs','üres','megnyit','ment','Exportálás','Kilépés','adatbázis','schéma','Új tábla','kiválaszt','Nincs kiterjesztés','Nincs egy elérhető támogatott PHP kiterjesztés (%s) sem.','Érvénytelen CSRF azonosító. Küldd újra az űrlapot.','Sikeres kilépés.','A munkameneteknek (session) engedélyezve kell lennie.','Munkamenet lejárt, jelentkezz be újra.','Érvénytelen adatok.','Túl sok a POST adat! Csökkentsd az adat méretét, vagy növeld a %s beállítást.','Adatbázis','Érvénytelen adatbázis.','Adatbázis eldobva.','Adatbázis kiválasztása','Új adatbázis','Privilégiumok','Folyamatok','Változók','Állapot','%s verzió: %s, PHP: %s','Belépve: %s','Egybevetés','Táblák','Eldob','Biztos benne?','Nincs megjeleníthető eredmény.','Idegen kulcs','egybevetés','törléskor','Oszlop neve','Paraméter neve','Típus','Hossz','Opciók','Automatikus növelés','Alapértelmezett értékek','Megjegyzés','Következő hozzáadása','Felfelé','Lefelé','Eltávolítás','Nézet','Tábla','Oszlop','Indexek','Index módosítása','Forrás','Cél','frissítéskor','Módosítás','Idegen kulcs hozzadása','Trigger','Trigger hozzáadása','Adatbázis séma','Export','Kimenet','Formátum','Rutinok','Esemény','Adat','szerkeszt','Felhasználó hozzáadása','Hiba a lekérdezésben','%.3f másodperc',array('%d sor','%d sor','%d sor'),array('Lekérdezés sikeresen végrehajtva, %d sor érintett.','Lekérdezés sikeresen végrehajtva, %d sor érintett.','Lekérdezés sikeresen végrehajtva, %d sor érintett.'),'Nincs végrehajtható parancs.','Fájl feltöltése','A fájl feltöltés le van tiltva.','Végrehajt','Hiba esetén megáll','Szerverről','Webszerver fájl %s','Fájl futtatása','Történet','Törlés','A tétel törölve.','A tétel frissítve.','%s tétel beszúrva.','Beszúr','Mentés','Mentés és szerkesztés folytatása','Mentés és újat beszúr','Törlés','A tábla eldobva.','A tábla módosult.','A tábla létrejött.','Tábla létrehozása','A maximális mezőszámot elérted. Növeld meg ezeket: %s, %s','Tábla név','motor','Rozdělit podle','Particiók','Partició neve','Értékek','Az indexek megváltoztak.','Index típusa','Oszop (méret)','Az adatbázis eldobva.','Az adadtbázis átnevezve.','Az adatbázis létrejött.','Az adatbázis módosult.','Adatbázis módosítása','Adatbázis létrehozása','Séma eldobva.','Séma létrejött.','Séma módosult.','Séma módosítása','Séma létrehozása','Meghív',array('Rutin meghívva, %d sor érintett.','Rutin meghívva, %d sor érintett.','Rutin meghívva, %d sor érintett.'),'Idegen kulcs eldobva.','Idegen kulcs módosult.','Idegen kulcs létrejött.','A forrás és cél oszlopoknak azonos típusúak legyenek, a cél oszlopok indexeltek legyenek, és a hivatkozott adatnak léteznie kell.','Idegen kulcs','Cél tábla','Változtat','Oszlop hozzáadása','A nézet eldobva.','A nézet módosult.','A nézet létrejött.','Nézet létrehozása','Név','Az esemény eldobva.','Az esemény módosult.','Az esemény létrejött.','Esemény módosítása','Esemény létrehozása','Kezd','Vége','Minden','Befejezéskor megőrzi','A rutin eldobva,','A rutin módosult.','A rutin létrejött.','Funkció módosítása','Eljárás módosítása','Funkció létrehozása','Eljárás létrehozása','Visszatérési érték','Sorozat eldobva.','Sorozat létrejött.','Sorozat módosult.','Sorozat módosítása','Sorozat létrehozása','Típus eldobva.','Típus létrehozva.','Típus módosítása','Típus létrehozása','A trigger eldobva.','A trigger módosult.','A trigger létrejött.','Trigger módosítása','Trigger létrehozása','Idő','Esemény','A felhasználó eldobva.','A felhasználó módosult.','A felhasználó létrejött.','Hashed','Rutin','Engedélyezés','Visszavonás',array('%d folyamat leállítva.','%d folyamat leállítva.','%d folyamat leállítva.'),'Leállít',array('%d tétel érintett.','%d tétel érintett.','%d tétel érintett.'),'Kattints kétszer az értékre a szerkesztéshez.',array('%d sor importálva.','%d sor importálva','%d sor importálva'),'Nem tudom kiválasztani a táblát.','Reláció','Növeld a szöveg hosszát, hogy módosítani tudd ezt az értéket.','Használd a szerkesztés hivatkozást ezen érték módosításához.','összes eredményt mutatása','Klónoz','CSV importálása','Importálás',' ','A tábla felszabadítva.','Táblák áthelyezve','Táblák eldobva.','Schéma','Táblák és nézetek','Keresés a táblákban','Motor','Méret','Index hossz','Adat szabad','Oszlop','összesen %d','Elemzés','Optimalizál','Ellenőrzés','Javít','Felszabadít','Áthelyezés másik adatbázisba','Áthelyez','Sorozatok','Ütemzés','Megadott időben','most');break;case"it":$ra=array('Caricamento del file non riuscito.','La dimensione massima del file è %sB.','Il file non esiste.','originale','No tabelle.','Lingua','Usa','Il file esiste già.','Tipi definiti dall\'utente','Numeri','Data e ora','Stringhe','Binari','Rete','Geometria','Liste','Sistema','Server','Utente','Password','Autenticazione','Login permanente','Visualizza dati','Visualizza struttura','Modifica vista','Modifica tabella','Nuovo elemento','Pagina','ultima','Modifica',array('%d byte','%d bytes'),'Seleziona','Funzioni','Aggregazione','Cerca','ovunque','Ordina','discendente','Limite','Lunghezza testo','Azione','Comando SQL','vuoto','apri','salva','Dump','Esci','database','schema','Crea nuova tabella','seleziona','Estensioni non presenti','Nessuna delle estensioni PHP supportate (%s) disponibile.','Token CSRF non valido. Reinvia la richiesta.','Uscita effettuata con successo.','Le sessioni devono essere abilitate.','Sessione scaduta, autenticarsi di nuovo.','Credenziali non valide.','Troppi dati via POST. Ridurre i dati o aumentare la direttiva di configurazione %s.','Database','Database non valido.','Database eliminati.','Seleziona database','Crea nuovo database','Privilegi','Elenco processi','Variabili','Stato','Versione %s: %s via estensione PHP %s','Autenticato come: %s','Collazione','Tabelle','Elimina','Sicuro?','Nessuna riga.','Chiavi esterne','collazione','ON DELETE','Nome colonna','Nome parametro','Tipo','Lunghezza','Opzioni','Auto incremento','Valori predefiniti','Commento','Aggiungi altro','Sposta su','Sposta giu','Rimuovi','Vedi','Tabella','Colonna','Indici','Modifica indici','Sorgente','Obiettivo','ON UPDATE','Modifica','Aggiungi foreign key','Trigger','Aggiungi trigger','Schema database','Esporta','Risultato','Formato','Routine','Eventi','Dati','modifica','Crea utente','Errore nella query','%.3f s',array('%d riga','%d righe'),array('Esecuzione della query OK, %d riga interessata.','Esecuzione della query OK, %d righe interessate.'),'Nessun commando da eseguire.','Caricamento file','Caricamento file disabilitato.','Esegui','Stop su errore','Dal server','Webserver file %s','Esegui file','Storico','Pulisci','Elemento eliminato.','Elemento aggiornato.','Elemento%s inserito.','Inserisci','Salva','Salva e continua','Salva e inserisci un altro','Elimina','Tabella eliminata.','Tabella modificata.','Tabella creata.','Crea tabella','Troppi campi. Per favore aumentare %s e %s.','Nome tabella','motore','Partiziona per','Partizioni','Nome partizione','Valori','Indici modificati.','Tipo indice','Colonna (lunghezza)','Database eliminato.','Database rinominato.','Database creato.','Database modificato.','Modifica database','Crea database','Schema eliminato.','Schema creato.','Schema modificato.','Modifica schema','Crea schema','Chiama',array('Routine chiamata, %d riga interessata.','Routine chiamata, %d righe interessate.'),'Foreign key eliminata.','Foreign key modificata.','Foreign key creata.','Le colonne sorgente e destinazione devono essere dello stesso tipo e ci deve essere un indice sulla colonna di destinazione e sui dati referenziati.','Foreign key','Tabella obiettivo','Cambia','Aggiungi colonna','Vista eliminata.','Vista modificata.','Vista creata.','Crea vista','Nome','Evento eliminato.','Evento modificato.','Evento creato.','Modifica evento','Crea evento','Inizio','Fine','Ogni','Al termine preservare','Routine eliminata.','Routine modificata.','Routine creata.','Modifica funzione','Modifica procedura','Crea funzione','Crea procedura','Return type','Sequenza eliminata.','Sequenza creata.','Sequenza modificata.','Modifica sequenza','Crea sequenza','Tipo definito dall\'utente eliminato.','Tipo definito dall\'utente creato.','Modifica tipo definito dall\'utente','Crea tipo definito dall\'utente','Trigger eliminato.','Trigger modificato.','Trigger creato.','Modifica trigger','Crea trigger','Orario','Evento','Utente eliminato.','Utente modificato.','Utente creato.','Hashed','Routine','Permetti','Revoca',array('%d processo interrotto.','%d processi interrotti.'),'Interrompi',array('Il risultato consiste in %d elemento','Il risultato consiste in %d elementi'),'Fai doppio click su un valore per modificarlo.',array('%d riga importata.','%d righe importate.'),'Selezione della tabella non riuscita','Relazioni','Aumenta la lunghezza del testo per modificare questo valore.','Usa il link modifica per modificare questo valore.','intero risultato','Clona','Importa da CSV','Importa','.','Le tabelle sono state svuotate.','Le tabelle sono state spostate.','Le tabelle sono state eliminate.','Schema','Tabelle e viste','Cerca nelle tabelle','Motore','Lunghezza dato','Lunghezza indice','Dati liberi','Righe','%d in totale','Analizza','Ottimizza','Controlla','Ripara','Svuota','Sposta in altro database','Sposta','Sequenza','Pianifica','A tempo prestabilito','Allegati');break;case"ja":$ra=array('ファイルをアップロードできません','最大ファイルサイズ %sB','ファイルは存在しません','元','テーブルがありません。','言語','使用','ファイルが既に存在します','ユーザー定義型','数字','日時','文字列','バイナリ','ネットワーク型','ジオメトリ型','リスト','データベース種類','サーバ','ユーザ名','パスワード','ログイン','永続的にログイン','データ','構造','ビューを変更','テーブルの変更','項目の作成','ページ','最終','編集','%d バイト','選択','関数','集合','検索','任意','ソート','降順','制約','文字列の長さ','動作','SQLコマンド','空','開く','保存','ダンプ','ログアウト','データベース','スキーマ','テーブルを作成','選択','拡張機能がありません','PHPの拡張機能（%s）がセットアップされていません','不正なCSRFトークン。再送信してください','ログアウト','セッションを有効にしてください','セッションの期限切れ。ログインし直してください','不正なログイン','POSTデータが大きすぎます。データサイズを小さくするか %s 設定を大きくしてください','データベース','不正なデータベース','データベースを削除しました','データベースを選択してください','新規にデータベースを作成','権限','プロセス一覧','変数','状態','%sバージョン：%s、 PHP拡張機能 %s','ログ：%s','照合順序','テーブル','削除','実行しますか？','行がありません','外部キー','照合順序','ON DELETE','列名','参数名','型','長さ','設定','連番','規定値','コメント','追加','上','下','移除','ビュー','テーブル','列','索引','索引の変更','ソース','ターゲット','ON UPDATE','変更','外部キーを追加','トリガー','トリガーの追加','構造','エクスポート','出力','形式','ルーチン','イベント','データ','編集','ユーザを作成','クエリーのエラー','%.3f 秒','%d 行','クエリーを実行しました。%d 行を変更しました','実行するコマンドがありません','ファイルをアップロード','ファイルのアップロードが無効です','実行','エラーの場合は停止','サーバーから実行','Webサーバファイル %s','ファイルを実行','履歴','消去','項目を削除しました','項目を更新しました','%s項目を挿入しました','挿入','保存','保存して継続','保存／追加','削除','テーブルを削除しました','テーブルを変更しました','テーブルを作成しました','テーブルを作成','定義可能な最大フィールド数を越えました。%s と %s を増やしてください。','テーブル名','エンジン','パーティション','パーティション','パーティション名','値','索引を変更しました','索引の型','列（長さ）','データベースを削除しました','データベースの名前を変えました','データベースを作成しました','データベースを変更しました','データベースを変更','データベースを作成','スキーマを削除しました','スキーマを追加しました','スキーマを変更しました','スキーマ変更','スキーマ追加','呼出し','ルーチンを呼びました。%d 行を変更しました','外部キーを削除しました','外部キーを変更しました','外部キーを作成しました','ソースとターゲットの列は同じデータ型でなければなりません。ターゲット列に索引があり、データが存在しなければなりません。','外キー','テーブル','変更','列を追加','ビューを削除しました','ビューを変更しました','ビューを作成しました','ビューを作成','名称','削除しました','変更しました','作成しました','変更','作成','開始','終了','毎回','完成後に保存','ルーチンを作成','ルーチンを変更','ルーチンを作成','関数の変更','プロシージャの変更','関数の作成','プロシージャの作成','戻り値の型','シーケンスを削除しました','シーケンスを追加しました','シーケンスを変更しました','シーケンス変更','シーケンス作成','ユーザー定義型を削除しました','ユーザー定義型を追加しました','ユーザー定義型変更','ユーザー定義型作成','トリガーを削除しました','トリガーを変更しました','トリガーを追加しました','トリガーの変更','トリガーの作成','時間','イベント','ユーザを削除','ユーザを変更','ユーザを作成','Hashed','ルーチン','権限の付与','権限の取消し','%d プロセスを強制終了しました','強制終了','%d を更新しました','ダブルクリックして編集','%d 行をインポートしました','テーブルを選択できません','関係','編集枠を広げる','リンクを編集する','全結果','クローン','CSV インポート','インポート',',','テーブルをtruncateしました','テーブルを移動しました','テーブルを削除しました','スキーマ','テーブルとビュー','データを検索する','エンジン','データ長','索引長','空き','行数','合計 %d','分析','最適化','チェック','修復','Truncate','別のデータベースへ移動?','移動','シーケンス','スケジュール','指定時刻','現在の日時');break;case"nl":$ra=array('Onmogelijk bestand te uploaden.','Maximum toegelaten bestandsgrootte is %sB.','Bestand niet gevonden.','origineel','Geen tabellen.','Taal','Gebruik','Bestand bestaat reeds.','Gebruikersgedefiniëerde types','Getallen','Datum en tijd','Tekst','Binaire gegevens','Netwerk','Geometrie','Lijsten','Databasesysteem','Server','Gebruikersnaam','Wachtwoord','Inloggen','Blijf aangemeld','Gegevens selecteren','Toon structuur','View aanpassen','Tabel aanpassen','Nieuw item','Pagina','laatste','Bewerk',array('%d byte','%d bytes'),'Kies','Functies','Totalen','Zoeken','overal','Sorteren','Aflopend','Beperk','Tekst lengte','Acties','SQL opdracht','leeg','openen','opslaan','Exporteer','Uitloggen','database','schema','Nieuwe tabel','kies','Geen extensie','Geen geldige PHP extensies beschikbaar (%s).','Ongeldig CSRF token. Verstuur het formulier opnieuw.','Uitloggen geslaagd.','Sessies moeten geactiveerd zijn.','Uw sessie is verlopen. Gelieve opnieuw in te loggen.','Ongeldige logingegevens.','POST-data is te groot. Verklein de hoeveelheid data of verhoog de %s configuratie.','Database','Ongeldige database.','Databases verwijderd.','Database selecteren','Nieuwe database','Rechten','Proceslijst','Variabelen','Status','%s versie: %s met PHP extensie %s','Aangemeld als: %s','Collatie','Tabellen','Verwijderen','Weet u het zeker?','Geen rijen.','Foreign keys','collation','ON DELETE','Kolomnaam','Parameternaam','Type','Lengte','Opties','Auto nummering','Standaard waarden','Commentaar','Volgende toevoegen','Omhoog','Omlaag','Verwijderen','View','Tabel','Kolom','Indexen','Indexen aanpassen','Bron','Doel','ON UPDATE','Aanpassen','Foreign key aanmaken','Triggers','Trigger aanmaken','Database schema','Exporteren','Uitvoer','Formaat','Procedures','Events','Data','bewerk','Gebruiker aanmaken','Fout in query','%.3f s',array('%d rij','%d rijen'),array('Query uitgevoerd, %d rij geraakt.','Query uitgevoerd, %d rijen geraakt.'),'Geen opdrachten uit te voeren.','Bestand uploaden','Bestanden uploaden is uitgeschakeld.','Uitvoeren','Stoppen bij fout','Van server','Webserver bestand %s','Bestand uitvoeren','Geschiedenis','Wissen','Item verwijderd.','Item aangepast.','Item%s toegevoegd.','Toevoegen','Opslaan','Opslaan en verder bewerken','Opslaan, daarna toevoegen','Verwijderen','Tabel verwijderd.','Tabel aangepast.','Tabel aangemaakt.','Tabel aanmaken','Maximum aantal velden bereikt. Verhoog %s en %s.','Tabelnaam','engine','Partitioneren op','Partities','Partitie naam','Waarden','Index aangepast.','Index type','Kolom (lengte)','Database verwijderd.','Database hernoemd.','Database aangemaakt.','Database aangepast.','Database aanpassen','Database aanmaken','Schema verwijderd.','Schema aangemaakt.','Schema gewijzigd.','Schema wijzigen','Schema maken','Uitvoeren',array('Procedure uitgevoerd, %d rij geraakt.','Procedure uitgevoerd, %d rijen geraakt.'),'Foreign key verwijderd.','Foreign key aangepast.','Foreign key aangemaakt.','Bron- en doelkolommen moeten van hetzelfde data type zijn, er moet een index bestaan op de gekozen kolommen en er moet gerelateerde data bestaan.','Foreign key','Doeltabel','Veranderen','Kolom toevoegen','View verwijderd.','View aangepast.','View aangemaakt.','View aanmaken','Naam','Event werd verwijderd.','Event werd aangepast.','Event werd aangemaakt.','Event aanpassen','Event aanmaken','Start','Stop','Iedere','Bewaren na voltooiing','Procedure verwijderd.','Procedure aangepast.','Procedure aangemaakt.','Functie aanpassen','Procedure aanpassen','Functie aanmaken','Procedure aanmaken','Return type','Sequence verwijderd.','Sequence aangemaakt.','Sequence gewijzigd.','Sequence wijzigen','Sequence maken','Type verwijderd.','Type aangemaakt.','Type wijzigen','Type maken','Trigger verwijderd.','Trigger aangepast.','Trigger aangemaakt.','Trigger aanpassen','Trigger aanmaken','Time','Event','Gebruiker verwijderd.','Gebruiker aangepast.','Gebruiker aangemaakt.','Gehashed','Routine','Toekennen','Intrekken',array('%d proces gestopt.','%d processen gestopt.'),'Stoppen',array('%d item aangepast.','%d items aangepast.'),'Dubbelklik op een waarde om deze te bewerken.',array('%d rij werd geïmporteerd.','%d rijen werden geïmporteerd.'),'Onmogelijk tabel te selecteren','Relaties','Verhoog de lengte om deze waarde te bewerken.','Gebruik de link "bewerk" om deze waarde te wijzigen.','volledig resultaat','Dupliceer','CSV Import','Importeren','.','Tabellen werden geleegd.','Tabellen werden verplaatst.','Tabellen werden verwijderd.','Schema','Tabellen en views','Zoeken in database','Engine','Data lengte','Index lengte','Data Vrij','Rijen','%d in totaal','Analyseer','Optimaliseer','Controleer','Herstel','Legen','Verplaats naar andere database','Verplaats','Sequences','Schedule','Op aangegeven tijd','Bijlagen');break;case"ru":$ra=array('Не удалось загрузить файл на сервер.','Максимальный разрешенный размер файла - %sB.','Такого файла не существует.','исходный','В базе данных нет таблиц.','Язык','Выбрать','Файл уже существует.','Типы пользователей','Число','Дата и время','Строки','Двоичный тип','Сеть','Геометрия','Списки','Движок','Сервер','Имя пользователя','Пароль','Войти','Оставаться в системе','Выбрать','Показать структуру','Изменить представление','Изменить таблицу','Новая запись','Страница','последняя','Редактировать',array('%d байт','%d байта','%d байтов'),'Выбрать','Функции','Агрегация','Поиск','в любом месте','Сортировать','по убыванию','Лимит','Длина текста','Действие','SQL запрос','пусто','открыть','сохранить','Дамп','Выйти','база данных','схема','Создать новую таблицу','выбрать','Нет расширений','Не доступно ни одного расширения из поддерживаемых (%s).','Недействительный CSRF токен. Отправите форму ещё раз.','Вы успешно покинули систему.','Сессии должны быть включены.','Срок действия сесси истек, нужно снова войти в систему.','Неправильное имя пользователя или пароль.','Слишком большой объем POST-данных. Пошлите меньший объем данных или увеличьте параметр конфигурационной директивы %s.','База данных','Плохая база данных.','Базы данных удалены.','Выбрать базу данных','Создать новую базу данных','Полномочия','Список процессов','Переменные','Состояние','Версия %s: %s с PHP-расширением %s','Вы вошли как: %s','Режим сопоставления','Таблицы','Удалить','Вы уверены?','Нет записей.','Внешние ключи','режим сопоставления','При стирании','Название поля','Название параметра','Тип','Длина','Действие','Автоматическое приращение','Значения по умолчанию','Комментарий','Добавить еще','Переместить вверх','Переместить вниз','Удалить','Представление','Таблица','Колонка','Индексы','Изменить индексы','Источник','Цель','При обновлении','Изменить','Добавить внешний ключ','Триггеры','Добавить триггер','Схема базы данных','Експорт','Выходные данные','Формат','Хранимые процедуры и функции','События','Данные','редактировать','Создать пользователя','Ошибка в запросe','%.3f s',array('%d строка','%d строки','%d строк'),array('Запрос завершен, изменена %d запись.','Запрос завершен, изменены %d записи.','Запрос завершен, изменено %d записей.'),'Нет команд для выполнения.','Загрузить файл на сервер','Загрузка файлов на сервер запрещена.','Выполнить','Остановить при ошибке','С сервера','Файл %s на вебсервере','Запустить файл','История','Очистить','Запись удалена.','Запись обновлена.','Запись%s была вставлена.','Вставить','Сохранить','Сохранить и продолжить редактирование','Сохранить и вставить еще','Стереть','Таблица была удалена.','Таблица была изменена.','Таблица была создана.','Создать таблицу','Достигнуто максимальное значение количества доступных полей. Увеличьте %s и %s.','Название таблицы','тип','Разделить по','Разделы','Название раздела','Параметры','Индексы изменены.','Тип индекса','Колонка (длина)','База данных была удалена.','База данных была переименована.','База данных была создана.','База данных была изменена.','Изменить базу данных','Создать базу данных','Схема удалена.','Создана новая схема.','Схема изменена.','Изменить схему','Новая схема','Вызвать',array('Была вызвана процедура, %d запись была изменена.','Была вызвана процедура, %d записи было изменено.','Была вызвана процедура, %d записей было изменено.'),'Внешний ключ был удален.','Внешний ключ был изменен.','Внешний ключ был создан.','Колонки должны иметь одинаковые типы данных, в результирующей колонке должен быть индекс, данные для импорта должны существовать.','Внешний ключ','Результирующая таблица','Изменить','Добавить колонку','Представление было удалено.','Представление было изменено.','Представление было создано.','Создать представление','Название','Событие было удалено.','Событие было изменено.','Событие было создано.','Изменить событие','Создать событие','Начало','Конец','Каждые','После завершения сохранить','Процедура была удалена.','Процедура была изменена.','Процедура была создана.','Изменить функцию','Изменить процедуру','Создать функцию','Создать процедуру','Возвращаемый тип','«Последовательность» удалена.','Создана новая «последовательность».','«Последовательность» изменена.','Изменить «последовательность»','Создать «последовательность»','Тип удален.','Создан новый тип.','Изменить тип','Создать тип','Триггер был удален.','Триггер был изменен.','Триггер был создан.','Изменить триггер','Создать триггер','Время','Событие','Пользователь был удален.','Пользователь был изменен.','Пользователь был создан.','Хешировано','Процедура','Позволить','Запретить',array('Был завершен %d процесс.','Было завершено %d процесса.','Было завершёно %d процессов.'),'Завершить',array('Была изменена %d запись.','Были изменены %d записи.','Было изменено %d записей.'),'Кликни два раза по значению, чтобы его изменить.',array('Импортирована %d строка.','Импортировано %d строки.','Импортировано %d строк.'),'Не удалось получить данные из таблицы','Реляции','Увеличь длину текста, чтобы изменить это значение.','Изменить это значение можно с помощью ссылки «изменить».','весь результат','Клонировать','Импорт CSV','Импорт',' ','Таблицы были очищены.','Таблицы были перемещены.','Таблицы были удалены.','Схема','Таблицы и представления','Поиск в таблицах','Тип','Объём данных','Объём индексов','Свободное место','Строк','Всего %d','Анализировать','Оптимизировать','Проверить','Исправить','Очистить','Переместить в другою базу данных','Переместить','«Последовательности»','Расписание','В данное время','Прикрепленные файлы');break;case"sk":$ra=array('Súbor sa nepodarilo nahrať.','Maximálna povolená veľkosť súboru je %sB.','Súbor neexistuje.','originál','Žiadne tabuľky.','Jazyk','Vybrať','Súbor existuje.','Užívateľské typy','Čísla','Dátum a čas','Reťazce','Binárne','Sieť','Geometria','Zoznamy','Systém','Server','Používateľ','Heslo','Prihlásiť sa','Trvalé prihlásenie','Vypísať dáta','Zobraziť štruktúru','Zmeniť pohľad','Zmeniť tabuľku','Nová položka','Stránka','posledný','Upraviť',array('%d bajt','%d bajty','%d bajtov'),'Vypísať','Funkcie','Agregácia','Vyhľadať','kdekoľvek','Zotriediť','zostupne','Limit','Dĺžka textov','Akcia','SQL príkaz','prázdne','otvoriť','uložiť','Export','Odhlásiť','databáza','schéma','Vytvoriť novú tabuľku','vypísať','Žiadne rozšírenie','Nie je dostupné žiadne z podporovaných rozšírení (%s).','Neplatný token CSRF. Odošlite formulár znova.','Odhlásenie prebehlo v poriadku.','Session premenné musia byť povolené.','Session vypršala, prihláste sa prosím znova.','Neplatné prihlasovacie údaje.','Príliš veľké POST dáta. Zmenšite dáta alebo zvýšte hodnotu konfiguračej direktívy %s.','Databáza','Nesprávna databáza.','Databázy boli odstránené.','Vybrať databázu','Vytvoriť novú databázu','Oprávnenia','Zoznam procesov','Premenné','Stav','Verzia %s: %s cez PHP rozšírenie %s','Prihlásený ako: %s','Porovnávanie','Tabuľky','Odstrániť','Naozaj?','Žiadne riadky.','Cudzie kľúče','porovnávanie','ON DELETE','Názov stĺpca','Názov parametra','Typ','Dĺžka','Voľby','Auto Increment','Východzie hodnoty','Komentár','Pridať ďalší','Presunúť hore','Presunúť dolu','Odobrať','Pohľad','Tabuľka','Stĺpec','Indexy','Zmeniť indexy','Zdroj','Cieľ','ON UPDATE','Zmeniť','Pridať cudzí kľúč','Triggery','Pridať trigger','Schéma databázy','Export','Výstup','Formát','Procedúry','Udalosti','Dáta','upraviť','Vytvoriť používateľa','Chyba v dotaze','%.3f s',array('%d riadok','%d riadky','%d riadkov'),array('Príkaz prebehol v poriadku, bol zmenený %d záznam.','Príkaz prebehol v poriadku boli zmenené %d záznamy.','Príkaz prebehol v poriadku bolo zmenených %d záznamov.'),'Žiadne príkazy na vykonanie.','Nahranie súboru','Nahrávánie súborov nie je povolené.','Vykonať','Zastaviť pri chybe','Zo serveru','Súbor %s na webovom serveri','Spustiť súbor','História','Vyčistiť','Položka bola vymazaná.','Položka bola aktualizovaná.','Položka%s bola vložená.','Vložiť','Uložiť','Uložiť a pokračovať v úpravách','Uložiť a vložiť ďalší','Zmazať','Tabuľka bola odstránená.','Tabuľka bola zmenená.','Tabuľka bola vytvorená.','Vytvoriť tabuľku','Bol prekročený maximálny počet povolených polí. Zvýšte prosím %s a %s.','Názov tabuľky','úložisko','Rozdeliť podľa','Oddiely','Názov oddielu','Hodnoty','Indexy boli zmenené.','Typ indexu','Stĺpec (dĺžka)','Databáza bola odstránená.','Databáza bola premenovaná.','Databáza bola vytvorená.','Databáza bola zmenená.','Zmeniť databázu','Vytvoriť databázu','Schéma bola odstránená.','Schéma bola vytvorená.','Schéma bola zmenená.','Pozmeniť schému','Vytvoriť schému','Zavolať',array('Procedúra bola zavolaná, bol zmenený %d záznam.','Procedúra bola zavolaná, boli zmenené %d záznamy.','Procedúra bola zavolaná, bolo zmenených %d záznamov.'),'Cudzí kľúč bol odstránený.','Cudzí kľúč bol zmenený.','Cudzí kľúč bol vytvorený.','Zdrojové a cieľové stĺpce musia mať rovnaký datový typ, nad cieľovými stĺpcami musí byť definovaný index a odkazované dáta musia existovať.','Cudzí kľúč','Cieľová tabuľka','Zmeniť','Pridať stĺpec','Pohľad bol odstránený.','Pohľad bol zmenený.','Pohľad bol vytvorený.','Vytvoriť pohľad','Názov','Udalosť bola odstránená.','Udalosť bola zmenená.','Udalosť bola vytvorená.','Upraviť udalosť','Vytvoriť udalosť','Začiatok','Koniec','Každých','Po dokončení zachovat','Procedúra bola odstránená.','Procedúra bola zmenená.','Procedúra bola vytvorená.','Zmeniť funkciu','Zmeniť procedúru','Vytvoriť funkciu','Vytvoriť procedúru','Návratový typ','Sekvencia bola odstránená.','Sekvencia bola vytvorená.','Sekvencia bola zmenená.','Pozmeniť sekvenciu','Vytvoriť sekvenciu','Typ bol odstránený.','Typ bol vytvorený.','Pozmeniť typ','Vytvoriť typ','Trigger bol odstránený.','Trigger bol zmenený.','Trigger bol vytvorený.','Zmeniť trigger','Vytvoriť trigger','Čas','Udalosť','Používateľ bol odstránený.','Používateľ bol zmenený.','Používateľ bol vytvorený.','Zahašované','Procedúra','Povoliť','Zakázať',array('Bol ukončený %d proces.','Boli ukončené %d procesy.','Bolo ukončených %d procesov.'),'Ukončiť','%d položiek bolo ovplyvnených.','Dvojkliknite na políčko, ktoré chcete zmeniť.',array('Bol importovaný %d záznam.','Boli importované %d záznamy.','Bolo importovaných %d záznamov.'),'Tabuľku sa nepodarilo vypísať','Vzťahy','Pre zmenu tejto hodnoty zvýšte dĺžku textov.','Pre zmenu tejto hodnoty použite odkaz upraviť.','celý výsledok','Klonovať','Import CSV','Import',' ','Tabuľka bola vyprázdnená','Tabuľka bola presunutá','Tabuľka bola odstránená','Schéma','Tabuľky a pohľady','Vyhľadať dáta v tabuľkách','Typ','Veľkosť dát','Veľkosť indexu','Voľné miesto','Riadky','%d celkom','Analyzovať','Optimalizovať','Skontrolovať','Opraviť','Vyprázdniť','Presunúť do inej databázy','Presunúť','Sekvencia','Plán','V stanovený čas','Prílohy');break;case"ta":$ra=array('கோப்பை மேலேற்ற‌ம் (upload) செய்ய‌ இயல‌வில்லை.','கோப்பின் அதிக‌ப‌ட்ச‌ அள‌வு %sB.','கோப்பு இல்லை.','அச‌ல்','அட்ட‌வ‌ணை இல்லை.','மொழி','உப‌யோகி','கோப்பு உள்ள‌து.','ப‌ய‌னாள‌ர் வ‌கைக‌ள்','எண்க‌ள்','தேதி ம‌ற்றும் நேர‌ம்','ச‌ர‌ம் (String)','பைன‌ரி','நெட்வொர்க்','வ‌டிவ‌விய‌ல் (Geometry)','ப‌ட்டிய‌ல்','சிஸ்ட‌ம் (System)','வ‌ழ‌ங்கி (Server)','ப‌ய‌னாள‌ர் (User)','க‌ட‌வுச்சொல்','நுழை','நிர‌ந்த‌ர‌மாக‌ நுழைய‌வும்','த‌க‌வ‌லை தேர்வு செய்','க‌ட்ட‌மைப்பை காண்பிக்க‌வும்','தோற்ற‌த்தை மாற்று','அட்ட‌வ‌ணையை மாற்று','புதிய‌ உருப்ப‌டி','ப‌க்க‌ம்','க‌டைசி','தொகு',array('%d பைட்','%d பைட்டுக‌ள்'),'தேர்வு செய்','Functions','திர‌ள்வு (Aggregation)','தேடு','எங்காயினும்','த‌ர‌ம் பிரி','இற‌ங்குமுக‌மான‌','வ‌ர‌ம்பு','உரை நீள‌ம்','செய‌ல்','SQL க‌ட்ட‌ளை','வெறுமை (empty)','திற‌','சேமி','Dump','வெளியேறு','த‌க‌வ‌ல்த‌ள‌ம்','அமைப்புமுறை','புதிய‌ அட்ட‌வ‌ணையை உருவாக்கு','தேர்வு செய்','விரிவு (extensஇஒன்) இல்லை ','PHP ஆத‌ர‌வு விரிவுக‌ள் (%s) இல்லை.','CSRF டோக்க‌ன் செல்லாது. ப‌டிவ‌த்தை மீண்டும் அனுப்ப‌வும்.','வெற்றிக‌ர‌மாய் வெளியேறியாயிற்று.','செஷ‌ன் ஆத‌ர‌வு இய‌க்க‌ப்ப‌ட‌ வேண்டும்.','செஷ‌ன் காலாவ‌தியாகி விட்ட‌து. மீண்டும் நுழைய‌வும்.','ச‌ரியான‌ விப‌ர‌ங்க‌ள் இல்லை','மிக‌ அதிக‌மான‌ POST  த‌க‌வ‌ல். த‌க‌வ‌லை குறைக்க‌வும் அல்ல‌து %s வ‌டிவ‌மைப்பை (configuration directive) மாற்ற‌வும்.','த‌க‌வ‌ல்த‌ள‌ம்','த‌க‌வ‌ல்த‌ள‌ம் ச‌ரியானதல்ல‌.','த‌க‌வ‌ல் த‌ள‌ங்க‌ள் நீக்க‌ப்ப‌ட்டன‌.','த‌க‌வ‌ல்த‌ள‌த்தை தேர்வு செய்','புதிய‌ த‌க‌வ‌ல்த‌ள‌த்தை உருவாக்கு','ச‌லுகைக‌ள் / சிற‌ப்புரிமைக‌ள்','வேலைக‌ளின் ப‌ட்டி','மாறிலிக‌ள் (Variables)','நிக‌ழ்நிலை (Status)','%s ப‌திப்பு: %s through PHP extension %s','ப‌ய‌னாளர்: %s','கொலேச‌ன்','அட்ட‌வ‌ணை','நீக்கு','நிச்ச‌ய‌மாக‌ ?','வ‌ரிசை இல்லை.','வேற்று விசைக‌ள்','கொலேச‌ன்','ON DELETE','நெடுவ‌ரிசையின் பெய‌ர்','அள‌புரு (Parameter) பெய‌ர்','வ‌கை','நீளம்','வேண்டிய‌வ‌ற்றை ','ஏறுமான‌ம்','உள்ளிருக்கும் (Default) ம‌திப்புக‌ள் ','குறிப்பு','அடுத்த‌தை சேர்க்க‌வும்','மேலே ந‌க‌ர்த்து','கீழே நக‌ர்த்து','நீக்கு','தோற்றம்','அட்ட‌வ‌ணை','நெடுவ‌ரிசை','அக‌வ‌ரிசைக‌ள் (Index) ','அக‌வ‌ரிசையை (Index) மாற்று','மூல‌ம்','இல‌க்கு','ON UPDATE','மாற்று','வேற்று விசை சேர்க்க‌வும்','தூண்டுத‌ல்க‌ள்','தூண்டு விசையை சேர்','த‌க‌வ‌ல்த‌ள‌ அமைப்பு முறைக‌ள்','ஏற்றும‌தி','வெளியீடு','ஃபார்ம‌ட் (Format)','ரொட்டீன் ','நிக‌ழ்ச்சிக‌ள்','த‌க‌வ‌ல்','தொகு','ப‌ய‌னாள‌ரை உருவாக்கு','வின‌வ‌லில் த‌வ‌றுள்ள‌து.','%.3f s',array('%d வ‌ரிசை','%d வ‌ரிசைக‌ள்'),array('வின‌வ‌ல் செய‌ல்ப‌டுத்த‌ப்ப‌ட்ட‌து, %d வ‌ரிசை மாற்ற‌ப்ப‌ட்ட‌து.','வின‌வ‌ல் செய‌ல்ப‌டுத்த‌ப்ப‌ட்ட‌து, %d வ‌ரிசைக‌ள் மாற்றப்ப‌ட்ட‌ன‌.'),'செய‌ல் ப‌டுத்த‌ எந்த‌ க‌ட்ட‌ளைக‌ளும் இல்லை.','கோப்பை மேலேற்று (upload) ','கோப்புக‌ள் மேலேற்றம் (upload)முட‌க்க‌ப்ப‌ட்டுள்ள‌ன‌.','செய‌ல்ப‌டுத்து','பிழை ஏற்ப‌டின் நிற்க‌','செர்வ‌ரில் இருந்து','வெப் ச‌ர்வ‌ர் கோப்பு %s','கோப்பினை இய‌க்க‌வும்','வ‌ர‌லாறு','துடை (Clear)','உருப்படி நீக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி புதுப்பிக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி (Item) சேர்க்க‌ப்ப‌ட்ட‌து.','புகுத்து','சேமி','சேமித்த‌ பிற‌கு தொகுப்ப‌தை தொட‌ர‌வும்','சேமித்த‌ப் பின் அடுத்த‌தை புகுத்து','நீக்கு','அட்ட‌வ‌ணை நீக்க‌ப்ப‌ட்ட‌து','அட்ட‌வணை மாற்ற‌ப்ப‌ட்ட‌து.','அட்ட‌வ‌ணை உருவாக்க‌ப்ப‌ட்ட‌து.','அட்ட‌வ‌ணையை உருவாக்கு','அனும‌திக்க‌ப்ப‌ட்ட‌ அதிக‌ப‌ட்ச‌ கோப்புக‌ளின் எண்ணிக்கை மீற‌ப்ப‌ட்ட‌து. த‌ய‌வு செய்து %s ம‌ற்றும் %s யை அதிக‌ரிக்க‌வும்.','அட்ட‌வ‌ணைப் பெய‌ர்','எஞ்சின்','பிரித்த‌து','பிரிவுக‌ள்','பிரிவின் பெய‌ர்','ம‌திப்புக‌ள்','அக‌வ‌ரிசைக‌ள் (Indexes) மாற்ற‌ப்பட்ட‌து.','அக‌வ‌ரிசை வ‌கை (Index Type)','நெடுவ‌ரிசை (நீள‌ம்)','த‌க‌வ‌ல்த‌ள‌ம் நீக்க‌ப்ப‌ட்ட‌து.','த‌க‌வ‌ல்த‌ள‌ம் பெய‌ர் மாற்ற‌ப்ப‌ட்ட‌து.','த‌க‌வ‌ல்த‌ள‌ம் உருவாக்க‌ப்ப‌ட்ட‌து.','த‌க‌வ‌ல்த‌ள‌ம் மாற்ற‌ப்ப‌ட்ட‌து.','த‌க‌வ‌ல்த‌ள‌த்தை மாற்று','த‌க‌வ‌ல்த‌ள‌த்தை உருவாக்கு','அமைப்புமுறை நீக்க‌ப்ப‌ட்ட‌து.','அமைப்புமுறை உருவாக்க‌ப்ப‌ட்ட‌து.','அமைப்புமுறை மாற்ற‌ப்ப‌ட்ட‌து.','அமைப்புமுறையை மாற்று','அமைப்புமுறையை உருவாக்கு','அழை',array('ரொட்டீன்க‌ள் அழைக்க‌ப்பட்டுள்ள‌ன‌, %d வ‌ரிசை மாற்ற‌ம் அடைந்த‌து.','ரொட்டீன்க‌ள் அழைக்க‌ப்ப‌ட்டுள்ள‌ன‌, %d வ‌ரிசைக‌ள் மாற்றம் அடைந்துள்ள‌ன‌.'),'வேற்று விசை நீக்க‌ப்ப‌ட்ட‌து.','வேற்று விசை மாற்ற‌ப்ப‌ட்ட‌து.','வேற்று விசை உருவாக்க‌ப்ப‌ட்ட‌து.','இல‌க்கு நெடுவ‌ரிசையில் அக‌வ‌ரிசை (Index) ம‌ற்றும் குறிக்க‌ப்ப‌ட்ட‌ த‌க‌வல் (Referenced DATA) க‌ண்டிப்பாக‌ இருத்த‌ல் வேண்டும். மூல‌ நெடுவ‌ரிசை ம‌ற்றும் இலக்கு நெடுவ‌ரிசையின் த‌க‌வ‌ல் வ‌டிவ‌ம் (DATA TYPE) ஒன்றாக‌ இருக்க‌ வேண்டும்.','வேற்று விசை','அட்ட‌வ‌ணை இல‌க்கு','மாற்று','நெடு வ‌ரிசையை சேர்க்க‌வும்','தோற்ற‌ம் நீக்க‌ப்ப‌ட்ட‌து.','தோற்றம் மாற்றப்ப‌ட்ட‌து.','தோற்ற‌ம் உருவாக்க‌ப்ப‌ட்ட‌து.','தோற்றத்தை உருவாக்கு','பெய‌ர்','நிக‌ழ்ச்சி (Event) நீக்க‌ப்ப‌ட்ட‌து.','நிக‌ழ்ச்சி (Event) மாற்றப்ப‌ட்ட‌து.','நிக‌ழ்ச்சி (Event) உருவாக்க‌‌ப்ப‌ட்ட‌து.','நிக‌ழ்ச்சியை (Event) மாற்று','நிக‌ழ்ச்சியை (Event) உருவாக்கு','தொட‌ங்கு','முடி (வு)','ஒவ்வொரு','முடிந்த‌தின் பின் பாதுகாக்க‌வும்','ரொட்டீன் நீக்க‌ப்ப‌ட்ட‌து.','ரொட்டீன் மாற்ற‌ப்ப‌ட்டது.','ரொட்டீன் உருவாக்க‌ப்ப‌ட்ட‌து.','Function மாற்று','செய‌ல்முறையை மாற்று','Function உருவாக்கு','செய்முறையை உருவாக்கு','திரும்பு வ‌கை','வ‌ரிசைமுறை நீக்க‌ப்ப‌ட்ட‌து.','வ‌ரிசைமுறை உருவாக்க‌ப்ப‌ட்ட‌து.','வ‌ரிசைமுறை மாற்ற‌ப்ப‌ட்ட‌து.','வ‌ரிசைமுறையை மாற்று','வ‌ரிசைமுறையை உருவாக்கு','வ‌கை (type) நீக்க‌ப்ப‌ட்ட‌து.','வ‌கை (type) உருவாக்க‌ப்ப‌ட்ட‌து.','வ‌கையினை (type) மாற்று','வ‌கையை உருவாக்கு','தூண்டு விசை நீக்க‌ப்ப‌ட்ட‌து.','தூண்டு விசை மாற்ற‌ப்ப‌ட்ட‌து.','தூண்டு விசை உருவாக்க‌ப்ப‌ட்ட‌து.','தூண்டு விசையை மாற்று.','தூண்டு விசையை உருவாக்கு.','நேர‌ம்','நிக‌ழ்ச்சி','ப‌யனீட்டாள‌ர் நீக்க‌ப்ப‌ட்டார்.','ப‌யனீட்டாள‌ர் மாற்றப்ப‌ட்டார்.','ப‌ய‌னீட்டாள‌ர் உருவாக்க‌ப்ப‌ட்ட‌து.','Hashed','ரொட்டீன்','அனும‌திய‌ளி','இர‌த்துச்செய்',array('%d வேலை வ‌லுவில் நிறுத்த‌ப‌ட்ட‌து.','%d வேலைக‌ள் வ‌லுவில் நிறுத்த‌ப‌ட்ட‌ன‌.'),'வ‌லுவில் நிறுத்து',array('%d உருப்ப‌டி மாற்ற‌ம‌டைந்தது.','%d உருப்ப‌டிக‌ள் மாற்ற‌ம‌டைந்த‌ன‌.'),'ம‌திப்பினை மாற்ற அத‌ன் மீது இருமுறை சொடுக்க‌வும் (Double click).',array('%d வ‌ரிசை இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்ட‌து.','%d வ‌ரிசைக‌ள் இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்டன‌.'),'அட்ட‌வ‌ணையை தேர்வு செய்ய‌ முடிய‌வில்லை.','உற‌வுக‌ள் (Relations)','இந்த‌ ம‌திப்பினை மாற்ற, டெக்ஸ்ட் நீள‌த்தினை அதிக‌ரிக்க‌வும்.','இந்த‌ ம‌திப்பினை மாற்ற‌, தொகுப்பு இணைப்பினை உப‌யோகிக்க‌வும்.','முழுமையான‌ முடிவு','ந‌க‌லி (Clone)','இம்போர்ட் CSV','இற‌க்கும‌தி (Import)',',','அட்ட‌வ‌ணை குறைக்க‌ப்ப‌ட்ட‌து (truncated).','அட்ட‌வ‌ணை ந‌க‌ர்த்த‌ப்ப‌ட்ட‌து.','அட்ட‌வ‌ணை நீக்க‌ப்ப‌ட்ட‌து.','அமைப்புமுறை','அட்ட‌வ‌ணைக‌ளும் பார்வைக‌ளும்','த‌க‌வ‌லை அட்ட‌வ‌ணையில் தேடு','எஞ்சின் (Engine)','த‌க‌வ‌ல் நீள‌ம்','Index நீள‌ம்','Data Free','வ‌ரிசைக‌ள்','மொத்தம் %d ','நுணுகி ஆராய‌வும்','உக‌ப்பாக்கு (Optimize)','ப‌ரிசோதி','ப‌ழுது பார்','குறை (Truncate)','ம‌ற்ற‌ த‌க‌வ‌ல் தள‌த்திற்க்கு ந‌க‌ர்த்து','ந‌க‌ர்த்து','வ‌ரிசைமுறை','கால‌ அட்ட‌வ‌ணை','குறித்த‌ நேர‌த்தில்','இப்பொழுது');break;case"zh-tw":$ra=array('無法上傳檔案。','允許的檔案上限大小為%sB','檔案不存在','原始','沒有資料表。','語言','使用','檔案已存在。','使用者類型','數字','日期時間','字符串','二進制','網路','幾何','列表','資料庫系統','伺服器','帳號','密碼','登入','永久登入','選擇資料','秀出結構','更改檢視表','更改資料表','新建項','頁','最後一頁','編輯','%d byte(s)','選擇','函數','集合','搜尋','任意位置','排序','降冪','限定','Text 長度','動作','SQL命令','空值','打開','儲存','導入/導出','登出','資料庫','架構','建立新資料表','選擇','沒有 擴充模組','沒有任何支援的PHP擴充模組（%s）。','無效的 CSRF token。請重新發送表單。','登出成功。','Session 必須被啟用。','Session 已過期，請重新登入。','無效的憑證。','POST 資料太大。減少資料或者增加 %s 的設定值。','資料庫','無效的資料庫。','資料庫已刪除。','選擇資料庫','建立新資料庫','權限','進程列表','變數','狀態','%s版本：%s 透過PHP擴充模組 %s','登錄為：%s','校對','資料表','丟棄','你確定嗎？','沒有行。','外鍵','校對','ON DELETE','列名','參數名稱','類型','長度','選項','自動增加','預設值','註解','新增下一個','上移','下移','移除','檢視表','資料表','列','索引','更改索引','來源','目標','ON UPDATE','更改','新增外鍵','觸發器','建立觸發器','資料庫架構','匯出','輸出','格式','程序','事件','資料','編輯','建立使用者','查詢出錯','%.3f秒','%d行','執行查詢OK，%d行受影響','沒有命令可執行。','檔案上傳','檔案上傳被禁用。','執行','出錯時停止','從伺服器','網頁伺服器檔案 %s','執行檔案','歷史','清除','該項目已被刪除','已更新項目。','已插入項目%s。','插入','儲存','保存並繼續編輯','儲存並插入下一個','刪除','已經刪除資料表。','資料表已更改。','資料表已更改。','建立資料表表','超過最多允許的字段數量。請增加%s和%s 。','資料表名稱','引擎','分區類型','分區','分區名','值','已更改索引。','索引類型','列（長度）','資料庫已刪除。','已重新命名資料庫。','已建立資料庫。','已更改資料庫。','更改資料庫','建立資料庫','已刪除架構。','已建立架構。','已更改架構。','更改架構','建立架構','呼叫','程序已被執行，%d行被影響','已刪除外鍵。','已更改外鍵。','已建立外鍵。','源列和目標列必須具有相同的數據類型，在目標列上必須有一個索引並且引用的數據必須存在。','外鍵','目標資料表','更改','新增資料列','已丟棄檢視表。','已更改檢視表。','已建立檢視表。','建立檢視表','名稱','已丟棄事件。','已更改事件。','已建立事件。','更改事件','建立事件','開始','結束','每','在完成後保存','已丟棄程序。','已更改子程序。','已建立子程序。','更改函數','更改過程','建立函數','建立預存程序','返回類型','已刪除 sequence。','已建立 sequence。','已更改 sequence。','更改 sequence','建立 sequence','已刪除類型。','已建立類型。','更改類型','建立類型','已丟棄觸發器。','已更改觸發器。','已建立觸發器。','更改觸發器','建立觸發器','時間','事件','已丟棄使用者。','已更改使用者。','已建立使用者。','Hashed','程序','授權','廢除','%d 個 Process(es) 被終止','終止','%d個項目受到影響。','雙擊以進行修改。','%d行已導入。','無法選擇該資料表','關聯','增加字串長度來修改。','使用編輯連結來修改。','所有結果','複製','匯入 CSV','匯入',',','已清空資料表。','已轉移資料表。','已丟棄表。','架構','資料表和檢視表','在資料庫搜尋','引擎','資料長度','索引長度','資料空閒','行數','總共 %d 個','分析','優化','檢查','修復','清空','轉移到其它資料庫','轉移','Sequences','調度','在指定時間','附件');break;case"zh":$ra=array('不能上传文件。','最多允许的文件大小为 %sB','文件不存在。','原始','没有表。','语言','使用','文件已存在。','用户类型','数字','日期时间','字符串','二进制','网络','几何图形','列表','系统','服务器','用户名','密码','登录','保持登录','选择数据','显示结构','更改视图','更改表','新建项','页面','最后','编辑','%d 字节','选择','函数','集合','搜索','任意位置','排序','降序','限定','文本长度','动作','SQL命令','空','打开','保存','导出','注销','数据库','模式','创建新表','选择','没有扩展','没有支持的 PHP 扩展可用（%s）。','无效 CSRF 令牌。重新发送表单。','注销成功。','会话必须被启用。','会话已过期，请重新登录。','无效凭据。','太大的 POST 数据。减少数据或者增加 %s 配置命令。','数据库','无效数据库。','已丢弃数据库。','选择数据库','创建新数据库','权限','进程列表','变量','状态','%s 版本：%s 通过 PHP 扩展 %s','登录为：%s','校对','表','丢弃','你确定吗？','没有行。','外键','校对','ON DELETE','列名','参数名','类型','长度','选项','自动增量','默认值','注释','添加下一个','上移','下移','移除','视图','表','列','索引','更改索引','源','目标','ON UPDATE','更改','添加外键','触发器','创建触发器','数据库概要','导出','输出','格式','子程序','事件','数据','编辑','创建用户','查询出错','%.3f 秒','%d 行','执行查询OK，%d 行受影响。','没有命令执行。','文件上传','文件上传被禁用。','执行','出错时停止','来自服务器','Web服务器文件 %s','运行文件','历史','清除','已删除项目。','已更新项目。','已插入项目%s。','插入','保存','保存并继续编辑','保存并插入下一个','删除','已丢弃表。','已更改表。','已创建表。','创建表','超过最多允许的字段数量。请增加 %s 和 %s 。','表名','引擎','分区类型','分区','分区名','值','已更改索引。','索引类型','列（长度）','已丢弃数据库。','已重命名数据库。','已创建数据库。','已更改数据库。','更改数据库','创建数据库','已丢弃模式。','已创建模式。','已更改模式。','更改模式','创建模式','调用','子程序被调用，%d 行被影响。','已删除外键。','已更改外键。','已创建外键。','源列和目标列必须具有相同的数据类型，在目标列上必须有一个索引并且引用的数据必须存在。','外键','目标表','更改','增加列','已丢弃视图。','已更改视图。','已创建视图。','创建视图','名称','已丢弃事件。','已更改事件。','已创建事件。','更改事件','创建事件','开始','结束','每','完成后保存','已丢弃子程序。','已更改子程序。','已创建子程序。','更改函数','更改过程','创建函数','创建过程','返回类型','已丢弃序列。','已创建序列。','已更改序列。','更改序列','创建序列','已丢弃类型。','已创建类型。','更改类型','创建类型','已丢弃触发器。','已更改触发器。','已创建触发器。','更改触发器','创建触发器','时间','事件','已丢弃用户。','已更改用户。','已创建用户。','Hashed','子程序','授权','废除','%d 个进程被终止','终止','%d 个项目受到影响。','在值上双击类修改它。','%d 行已导入。','不能选择该表','关联信息','增加文本长度以修改该值。','使用编辑链接来修改该值。','所有结果','克隆','CSV 导入','导入',',','已清空表。','已转移表。','已丢弃表。','模式','表和视图','在表中搜索数据','引擎','数据长度','索引长度','数据空闲','行数','共计 %d','分析','优化','检查','修复','清空','转移到其它数据库','转移','序列','调度','在指定时间','附件');break;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($Df,$Q,$S,$Ef='auth_error'){set_exception_handler($Ef);parent::__construct($Df,$Q,$S);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($j,$bb=false){$i=parent::query($j);if(!$i){$Cf=$this->errorInfo();$this->error=$Cf[2];return
false;}$this->store_result($i);return$i;}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result($i=null){if(!$i){$i=$this->_result;}if($i->columnCount()){$i->num_rows=$i->rowCount();return$i;}$this->affected_rows=$i->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($j,$d=0){$i=$this->query($j);if(!$i){return
false;}$a=$i->fetch();return$a[$d];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$a=(object)$this->getColumnMeta($this->_offset++);$a->orgtable=$a->table;$a->orgname=$a->name;$a->charsetnr=(in_array("blob",$a->flags)?63:0);return$a;}}}$Ma=array();$ja=array();$Ma[]="SQLite";$Ma[]="SQLite3";$Ma[]="PDO_SQLite";if(extension_loaded("sqlite3")||extension_loaded("pdo_sqlite")){$ja["sqlite"]="SQLite 3";}if(extension_loaded("sqlite")||extension_loaded("pdo_sqlite")){$ja["sqlite2"]="SQLite 2";}if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite2"])?"sqlite":"sqlite3")){if(isset($_GET["sqlite2"])){class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($aa){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($aa);}function
query($j,$bb=false){$Bf=($bb?"unbufferedQuery":"query");$i=@$this->_link->$Bf($j,SQLITE_BOTH,$n);if(!$i){$this->error=$n;return
false;}elseif($i===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($i);}function
quote($G){return"'".sqlite_escape_string($G)."'";}function
store_result(){return$this->_result;}function
result($j,$d=0){$i=$this->query($j);if(!is_object($i)){return
false;}$a=$i->_result->fetch();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;if(method_exists($i,'numRows')){$this->num_rows=$i->numRows();}}function
fetch_assoc(){$a=$this->_result->fetch(SQLITE_ASSOC);if(!$a){return
false;}$e=array();foreach($a
as$c=>$b){$e[($c[0]=='"'?idf_unescape($c):$c)]=$b;}return$e;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$f=$this->_result->fieldName($this->_offset++);$ia='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($ia\\.)?$ia\$~",$f,$k)){$h=($k[3]!=""?$k[3]:idf_unescape($k[2]));$f=($k[5]!=""?$k[5]:idf_unescape($k[4]));}return(object)array("name"=>$f,"orgname"=>$f,"orgtable"=>$h,);}}}else{class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($aa){$this->_link=new
SQLite3($aa);$nd=$this->_link->version();$this->server_info=$nd["versionString"];}function
query($j){$i=@$this->_link->query($j);if(!$i){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($i->numColumns()){return
new
Min_Result($i);}$this->affected_rows=$this->_link->changes();return
true;}function
quote($G){return"'".$this->_link->escapeString($G)."'";}function
store_result(){return$this->_result;}function
result($j,$d=0){$i=$this->query($j);if(!is_object($i)){return
false;}$a=$i->_result->fetchArray();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$J=$this->_offset++;$y=$this->_result->columnType($J);return(object)array("name"=>$this->_result->columnName($J),"type"=>$y,"charsetnr"=>($y==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($aa){$this->dsn(DRIVER.":$aa","","");}}}class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($aa){if(is_readable($aa)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\]|:)",$aa)?$aa:dirname($_SERVER["SCRIPT_FILENAME"])."/$aa")." AS a")){$this->Min_SQLite($aa);return
true;}return
false;}function
multi_query($j){return$this->_result=$this->query($j);}function
next_result(){return
false;}}function
idf_escape($M){return'"'.str_replace('"','""',$M).'"';}function
table($M){return
idf_escape($M);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($j,$s,$N,$L=0,$Oa=" "){return" $j$s".(isset($N)?$Oa."LIMIT $N".($L?" OFFSET $L":""):"");}function
limit1($j,$s){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($j,$s,1):" $j$s");}function
db_collation($t,$X){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($z){return
array();}function
table_status($f=""){$e=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($f!=""?" AND name = ".q($f):""))as$a){$a["Auto_increment"]="";$e[$a["Name"]]=$a;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$a){$e[$a["name"]]["Auto_increment"]=$a["seq"];}return($f!=""?$e[$f]:$e);}function
is_view($I){return$I["Engine"]=="view";}function
fk_support($I){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($h,$ic=false){$e=array();foreach(get_rows("PRAGMA table_info(".table($h).")")as$a){$y=strtolower($a["type"]);$wa=$a["dflt_value"];$e[$a["name"]]=array("field"=>$a["name"],"type"=>(eregi("int",$y)?"integer":(eregi("char|clob|text",$y)?"text":(eregi("blob",$y)?"blob":(eregi("real|floa|doub",$y)?"real":"numeric")))),"full_type"=>$y,"default"=>(ereg("'(.*)'",$wa,$k)?str_replace("''","'",$k[1]):($wa=="NULL"?null:$wa)),"null"=>!$a["notnull"],"auto_increment"=>eregi('^integer$',$y)&&$a["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$a["pk"],);}return$e;}function
indexes($h,$H=null){$e=array();$Ia=array();foreach(fields($h)as$d){if($d["primary"]){$Ia[]=$d["field"];}}if($Ia){$e[""]=array("type"=>"PRIMARY","columns"=>$Ia,"lengths"=>array());}foreach(get_rows("PRAGMA index_list(".table($h).")")as$a){$e[$a["name"]]["type"]=($a["unique"]?"UNIQUE":"INDEX");$e[$a["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($a["name"]).")")as$Tc){$e[$a["name"]]["columns"][]=$Tc["name"];}}return$e;}function
foreign_keys($h){$e=array();foreach(get_rows("PRAGMA foreign_key_list(".table($h).")")as$a){$B=&$e[$a["id"]];if(!$B){$B=$a;}$B["source"][]=$a["from"];$B["target"][]=$a["to"];}return$e;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($f))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($t){return
false;}function
error(){global$g;return
h($g->error);}function
exact_value($b){return
q($b);}function
create_database($t,$R){global$g;if(file_exists($t)){$g->error=lang(7);return
false;}$x=new
Min_SQLite($t);$x->query('PRAGMA encoding = "UTF-8"');$x->query('CREATE TABLE adminer (i)');$x->query('DROP TABLE adminer');return
true;}function
drop_databases($z){global$g;$g->Min_SQLite(":memory:");foreach($z
as$t){if(!@unlink($t)){$g->error=lang(7);return
false;}}return
true;}function
rename_database($f,$R){global$g;$g->Min_SQLite(":memory:");$g->error=lang(7);return@rename(DB,$f);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($h,$f,$o,$db,$xa,$yb,$R,$Va,$vb){$u=array();foreach($o
as$d){if($d[1]){$u[]=($h!=""&&$d[0]==""?"ADD ":"  ").implode($d[1]);}}$u=array_merge($u,$db);if($h!=""){foreach($u
as$b){if(!queries("ALTER TABLE ".table($h)." $b")){return
false;}}if($h!=$f&&!queries("ALTER TABLE ".table($h)." RENAME TO ".table($f))){return
false;}}elseif(!queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$u)."\n)")){return
false;}if($Va){queries("UPDATE sqlite_sequence SET seq = $Va WHERE name = ".q($f));}return
true;}function
alter_indexes($h,$u){foreach($u
as$b){if(!queries(($b[2]?"DROP INDEX":"CREATE".($b[0]!="INDEX"?" UNIQUE":"")." INDEX ".idf_escape(uniqid($h."_"))." ON ".table($h))." $b[1]")){return
false;}}return
true;}function
truncate_tables($E){return
apply_queries("DELETE FROM",$E);}function
drop_views($Z){return
apply_queries("DROP VIEW",$Z);}function
drop_tables($E){return
apply_queries("DROP TABLE",$E);}function
move_tables($E,$Z,$qa){return
false;}function
trigger($f){global$g;preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($f)),$k);return
array("Timing"=>strtoupper($k[1]),"Event"=>strtoupper($k[2]),"Trigger"=>$f,"Statement"=>$k[3]);}function
triggers($h){$e=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($h))as$a){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$a["sql"],$k);$e[$a["name"]]=array($k[1],$k[2]);}return$e;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$y){}function
routines(){}function
begin(){return
queries("BEGIN");}function
insert_into($h,$q){return
queries("INSERT INTO ".table($h).($q?" (".implode(", ",array_keys($q)).")\nVALUES (".implode(", ",$q).")":"DEFAULT VALUES"));}function
insert_update($h,$q,$Ia){return
queries("REPLACE INTO ".table($h)." (".implode(", ",array_keys($q)).") VALUES (".implode(", ",$q).")");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$j){return$g->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($_f){return
true;}function
create_sql($h,$Va){global$g;return$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($h));}function
truncate_sql($h){return"DELETE FROM ".table($h);}function
use_sql($da){}function
trigger_sql($h,$W){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND name = ".q($h)));}function
show_variables(){global$g;$e=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$c){$e[$c]=$g->result("PRAGMA $c");}return$e;}function
show_status(){$e=array();foreach(get_vals("PRAGMA compile_options")as$Af){list($c,$b)=explode("=",$Af,2);$e[$c]=$b;}return$e;}function
support($rb){return
ereg('^(view|trigger|variables|status|dump)$',$rb);}$_="sqlite";$T=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Qa=array_keys($T);$sb=array();$dc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$V=array("hex","length","lower","round","unixepoch","upper");$wb=array("avg","count","count distinct","group_concat","max","min","sum");$bc=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Ma[]="PgSQL";$Ma[]="PDO_PgSQL";if(extension_loaded("pgsql")||extension_loaded("pdo_pgsql")){$ja["pgsql"]="PostgreSQL";}if(isset($_GET["pgsql"])){define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($rf,$n){if(ini_bool("html_errors")){$n=html_entity_decode(strip_tags($n));}$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($D,$Q,$S){set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($D,"'\\"))."' user='".addcslashes($Q,"'\\")."' password='".addcslashes($S,"'\\")."'";$this->_link=@pg_connect($this->_string.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":""),PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&DB!=""){$this->_database=false;$this->_link=@pg_connect($this->_string,PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$nd=pg_version($this->_link);$this->server_info=$nd["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($G){return"'".pg_escape_string($this->_link,$G)."'";}function
select_db($da){if($da==DB){return$this->_database;}$e=@pg_connect("$this->_string dbname='".addcslashes($da,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($e){$this->_link=$e;}return$e;}function
close(){$this->_link=@pg_connect($this->_string);}function
query($j,$bb=false){$i=@pg_query($this->_link,$j);if(!$i){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($i)){$this->affected_rows=pg_affected_rows($i);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$d=0){$i=$this->query($j);if(!$i){return
false;}return
pg_fetch_result($i->_result,0,$d);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;$this->num_rows=pg_num_rows($i);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$J=$this->_offset++;$e=new
stdClass;if(function_exists('pg_field_table')){$e->orgtable=pg_field_table($this->_result,$J);}$e->name=pg_field_name($this->_result,$J);$e->orgname=$e->name;$e->type=pg_field_type($this->_result,$J);$e->charsetnr=($e->type=="bytea"?63:0);return$e;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($D,$Q,$S){$G="pgsql:host='".str_replace(":","' port='",addcslashes($D,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn($G.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":""),$Q,$S);return
true;}function
select_db($da){return(DB==$da);}function
close(){}}}function
idf_escape($M){return'"'.str_replace('"','""',$M).'"';}function
table($M){return
idf_escape($M);}function
connect(){global$r;$g=new
Min_DB;$ya=$r->credentials();if($g->connect($ya[0],$ya[1],$ya[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database");}function
limit($j,$s,$N,$L=0,$Oa=" "){return" $j$s".(isset($N)?$Oa."LIMIT $N".($L?" OFFSET $L":""):"");}function
limit1($j,$s){return" $j$s";}function
db_collation($t,$X){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($z){return
array();}function
table_status($f=""){$e=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN '' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($f!=""?" AND relname = ".q($f):""))as$a){$e[$a["Name"]]=$a;}return($f!=""?$e[$f]:$e);}function
is_view($I){return$I["Engine"]=="view";}function
fk_support($I){return
true;}function
fields($h,$ic=false){$e=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($h)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
".($ic?"":"AND a.attnum > 0")."
ORDER BY a.attnum < 0, a.attnum")as$a){ereg('(.*)(\\((.*)\\))?',$a["full_type"],$k);list(,$a["type"],,$a["length"])=$k;$a["full_type"]=$a["type"].($a["length"]?"($a[length])":"");$a["null"]=($a["attnotnull"]=="f");$a["auto_increment"]=eregi("^nextval\\(",$a["default"]);$a["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);$e[$a["field"]]=$a;}return$e;}function
indexes($h,$H=null){global$g;if(!is_object($H)){$H=$g;}$e=array();$Re=$H->result("SELECT oid FROM pg_class WHERE relname = ".q($h));$A=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Re AND attnum > 0",$H);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $Re AND ci.oid = i.indexrelid",$H)as$a){$e[$a["relname"]]["type"]=($a["indisprimary"]=="t"?"PRIMARY":($a["indisunique"]=="t"?"UNIQUE":"INDEX"));$e[$a["relname"]]["columns"]=array();foreach(explode(" ",$a["indkey"])as$qf){$e[$a["relname"]]["columns"][]=$A[$qf];}$e[$a["relname"]]["lengths"]=array();}return$e;}function
foreign_keys($h){$e=array();foreach(get_rows("SELECT tc.constraint_name, kcu.column_name, rc.update_rule AS on_update, rc.delete_rule AS on_delete, ccu.table_name AS table, ccu.column_name AS ref
FROM information_schema.table_constraints tc
LEFT JOIN information_schema.key_column_usage kcu USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.referential_constraints rc USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.constraint_column_usage ccu ON rc.unique_constraint_catalog = ccu.constraint_catalog AND rc.unique_constraint_schema = ccu.constraint_schema AND rc.unique_constraint_name = ccu.constraint_name
WHERE tc.constraint_type = 'FOREIGN KEY' AND tc.table_name = ".q($h))as$a){$B=&$e[$a["constraint_name"]];if(!$B){$B=$a;}$B["source"][]=$a["column_name"];$B["target"][]=$a["ref"];}return$e;}function
view($f){global$g;return
array("select"=>$g->result("SELECT pg_get_viewdef(".q($f).")"));}function
collations(){return
array();}function
information_schema($t){return($t=="information_schema");}function
error(){global$g;$e=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$e,$k)){$e=$k[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($k[3]).'})(.*)~','\\1<b>\\2</b>',$k[2]).$k[4];}return
nl_br($e);}function
exact_value($b){return
q($b);}function
create_database($t,$R){return
queries("CREATE DATABASE ".idf_escape($t).($R?" ENCODING ".idf_escape($R):""));}function
drop_databases($z){global$g;$g->close();return
apply_queries("DROP DATABASE",$z,'idf_escape');}function
rename_database($f,$R){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($f));}function
auto_increment(){return"";}function
alter_table($h,$f,$o,$db,$xa,$yb,$R,$Va,$vb){$u=array();$nb=array();foreach($o
as$d){$J=idf_escape($d[0]);$b=$d[1];if(!$b){$u[]="DROP $J";}else{$gd=$b[5];unset($b[5]);if(isset($b[6])&&$d[0]==""){$b[1]=($b[1]=="bigint"?" big":" ")."serial";}if($d[0]==""){$u[]=($h!=""?"ADD ":"  ").implode($b);}else{if($J!=$b[0]){$nb[]="ALTER TABLE ".table($h)." RENAME $J TO $b[0]";}$u[]="ALTER $J TYPE$b[1]";if(!$b[6]){$u[]="ALTER $J ".($b[3]?"SET$b[3]":"DROP DEFAULT");$u[]="ALTER $J ".($b[2]==" NULL"?"DROP NOT":"SET").$b[2];}}if($d[0]!=""||$gd!=""){$nb[]="COMMENT ON COLUMN ".table($h).".$b[0] IS ".($gd!=""?substr($gd,9):"''");}}}$u=array_merge($u,$db);if($h==""){array_unshift($nb,"CREATE TABLE ".table($f)." (\n".implode(",\n",$u)."\n)");}elseif($u){array_unshift($nb,"ALTER TABLE ".table($h)."\n".implode(",\n",$u));}if($h!=""&&$h!=$f){$nb[]="ALTER TABLE ".table($h)." RENAME TO ".table($f);}if($h!=""||$xa!=""){$nb[]="COMMENT ON TABLE ".table($f)." IS ".q($xa);}if($Va!=""){}foreach($nb
as$j){if(!queries($j)){return
false;}}return
true;}function
alter_indexes($h,$u){$ga=array();$Ca=array();foreach($u
as$b){if($b[0]!="INDEX"){$ga[]=($b[2]?"\nDROP CONSTRAINT ":"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"")).$b[1];}elseif($b[2]){$Ca[]=$b[1];}elseif(!queries("CREATE INDEX ".idf_escape(uniqid($h."_"))." ON ".table($h)." $b[1]")){return
false;}}return((!$ga||queries("ALTER TABLE ".table($h).implode(",",$ga)))&&(!$Ca||queries("DROP INDEX ".implode(", ",$Ca))));}function
truncate_tables($E){return
queries("TRUNCATE ".implode(", ",array_map('table',$E)));return
true;}function
drop_views($Z){return
queries("DROP VIEW ".implode(", ",array_map('table',$Z)));}function
drop_tables($E){return
queries("DROP TABLE ".implode(", ",array_map('table',$E)));}function
move_tables($E,$Z,$qa){foreach($E
as$h){if(!queries("ALTER TABLE ".table($h)." SET SCHEMA ".idf_escape($qa))){return
false;}}foreach($Z
as$h){if(!queries("ALTER VIEW ".table($h)." SET SCHEMA ".idf_escape($qa))){return
false;}}return
true;}function
trigger($f){$F=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($f));return
reset($F);}function
triggers($h){$e=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($h))as$a){$e[$a["trigger_name"]]=array($a["condition_timing"],$a["event_manipulation"]);}return$e;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
begin(){return
queries("BEGIN");}function
insert_into($h,$q){return
queries("INSERT INTO ".table($h).($q?" (".implode(", ",array_keys($q)).")\nVALUES (".implode(", ",$q).")":"DEFAULT VALUES"));}function
insert_update($h,$q,$Ia){global$g;$ma=array();$s=array();foreach($q
as$c=>$b){$ma[]="$c = $b";if(isset($Ia[idf_unescape($c)])){$s[]="$c = $b";}}return($s&&queries("UPDATE ".table($h)." SET ".implode(", ",$ma)." WHERE ".implode(" AND ",$s))&&$g->affected_rows)||queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($q)).") VALUES (".implode(", ",$q).")");}function
last_id(){return
0;}function
explain($g,$j){return$g->query("EXPLAIN $j");}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($Na){global$g,$T,$Qa;$e=$g->query("SET search_path TO ".idf_escape($Na));foreach(types()as$y){if(!isset($T[$y])){$T[$y]=0;$Qa[lang(8)][]=$y;}}return$e;}function
use_sql($da){return"\connect ".idf_escape($da);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
show_status(){}function
support($rb){return
ereg('^(comment|view|scheme|sequence|trigger|type|variables|drop_col)$',$rb);}$_="pgsql";$T=array();$Qa=array();foreach(array(lang(9)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(10)=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),lang(11)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(12)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(13)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(14)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$c=>$b){$T+=$b;$Qa[$c]=array_keys($b);}$sb=array();$dc=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$V=array("char_length","lower","round","to_hex","to_timestamp","upper");$wb=array("avg","count","count distinct","max","min","sum");$bc=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Ma[]="OCI8";$Ma[]="PDO_OCI";if(extension_loaded("oci8")||extension_loaded("pdo_oci")){$ja["oracle"]="Oracle";}if(isset($_GET["oracle"])){define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($rf,$n){if(ini_bool("html_errors")){$n=html_entity_decode(strip_tags($n));}$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($D,$Q,$S){$this->_link=@oci_new_connect($Q,$S,$D);if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($G){return"'".str_replace("'","''",$G)."'";}function
select_db($da){return
true;}function
query($j,$bb=false){$i=oci_parse($this->_link,$j);if(!$i){$n=oci_error($this->_link);$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$e=@oci_execute($i);restore_error_handler();if($e){if(oci_num_fields($i)){return
new
Min_Result($i);}$this->affected_rows=oci_num_rows($i);}return$e;}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$d=1){$i=$this->query($j);if(!is_object($i)||!oci_fetch($i->_result)){return
false;}return
oci_result($i->_result,$d);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($i){$this->_result=$i;}function
_convert($a){foreach((array)$a
as$c=>$b){if(is_a($b,'OCI-Lob')){$a[$c]=$b->load();}}return$a;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$J=$this->_offset++;$e=new
stdClass;$e->name=oci_field_name($this->_result,$J);$e->orgname=$e->name;$e->type=oci_field_type($this->_result,$J);$e->charsetnr=(ereg("raw|blob|bfile",$e->type)?63:0);return$e;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($D,$Q,$S){}function
select_db($da){}}}function
idf_escape($M){return'"'.str_replace('"','""',$M).'"';}function
table($M){return
idf_escape($M);}function
connect(){global$r;$g=new
Min_DB;$ya=$r->credentials();if($g->connect($ya[0],$ya[1],$ya[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($j,$s,$N,$L=0,$Oa=" "){return" $j$s".(isset($N)?($s?" AND":$Oa."WHERE").($L?" rownum > $L AND":"")." rownum <= ".($N+$L):"");}function
limit1($j,$s){return" $j$s";}function
db_collation($t,$X){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($z){return
array();}function
table_status($f=""){$e=array();$qe=q($f);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine" FROM all_tables WHERE tablespace_name = '.q(DB).($f!=""?" AND table_name = $qe":"")."
UNION SELECT view_name, 'view' FROM user_views".($f!=""?" WHERE view_name = $qe":""))as$a){if($f!=""){return$a;}$e[$a["Name"]]=$a;}return$e;}function
is_view($I){return$I["Engine"]=="view";}function
fk_support($I){return
true;}function
fields($h,$ic=false){$e=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($h)." ORDER BY column_id")as$a){$y=$a["DATA_TYPE"];$ca="$a[DATA_PRECISION],$a[DATA_SCALE]";if($ca==","){$ca=$a["DATA_LENGTH"];}$e[$a["COLUMN_NAME"]]=array("field"=>$a["COLUMN_NAME"],"full_type"=>$y.($ca?"($ca)":""),"type"=>strtolower($y),"length"=>$ca,"default"=>$a["DATA_DEFAULT"],"null"=>($a["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$e;}function
indexes($h,$H=null){return
array();}function
view($f){$F=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($f));return
reset($F);}function
collations(){return
array();}function
information_schema($t){return
false;}function
error(){global$g;return
h($g->error);}function
exact_value($b){return
q($b);}function
explain($g,$j){$g->query("EXPLAIN PLAN FOR $j");return$g->query("SELECT * FROM plan_table");}function
alter_table($h,$f,$o,$db,$xa,$yb,$R,$Va,$vb){$u=$Ca=array();foreach($o
as$d){$b=$d[1];if($b&&$d[0]!=""&&idf_escape($d[0])!=$b[0]){queries("ALTER TABLE ".table($h)." RENAME COLUMN ".idf_escape($d[0])." TO $b[0]");}if($b){$u[]=($h!=""?($d[0]!=""?"MODIFY (":"ADD ("):"  ").implode($b).($h!=""?")":"");}else{$Ca[]=idf_escape($d[0]);}}if($h==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$u)."\n)");}return(!$u||queries("ALTER TABLE ".table($h)."\n".implode("\n",$u)))&&(!$Ca||queries("ALTER TABLE ".table($h)." DROP (".implode(", ",$Ca).")"))&&($h==$f||queries("ALTER TABLE ".table($h)." RENAME TO ".table($f)));}function
foreign_keys($h){return
array();}function
truncate_tables($E){return
apply_queries("TRUNCATE TABLE",$E);}function
drop_views($Z){return
apply_queries("DROP VIEW",$Z);}function
drop_tables($E){return
apply_queries("DROP TABLE",$E);}function
begin(){return
true;}function
insert_into($h,$q){return
queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($q)).")\nVALUES (".implode(", ",$q).")");}function
last_id(){return
0;}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($_f){return
true;}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
show_status(){$F=get_rows('SELECT * FROM v$instance');return
reset($F);}function
support($rb){return
ereg("view|drop_col|variables|status",$rb);}$_="oracle";$T=array();$Qa=array();foreach(array(lang(9)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(10)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(11)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(12)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$c=>$b){$T+=$b;$Qa[$c]=array_keys($b);}$sb=array();$dc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$V=array("length","lower","round","upper");$wb=array("avg","count","count distinct","max","min","sum");$bc=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Ma[]="SQLSRV";$Ma[]="MSSQL";if(extension_loaded("sqlsrv")||extension_loaded("mssql")){$ja["mssql"]="MS SQL";}if(isset($_GET["mssql"])){define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($D,$Q,$S){$this->_link=@sqlsrv_connect($D,array("UID"=>$Q,"PWD"=>$S));if($this->_link){$hf=sqlsrv_server_info($this->_link);$this->server_info=$hf['SQLServerVersion'];}else{$this->_get_error();}return(bool)$this->_link;}function
quote($G){return"'".str_replace("'","''",$G)."'";}function
select_db($da){return$this->query("USE $da");}function
query($j,$bb=false){$i=sqlsrv_query($this->_link,$j);if(!$i){$this->_get_error();return
false;}return$this->store_result($i);}function
multi_query($j){$this->_result=sqlsrv_query($this->_link,$j);if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($i=null){if(!$i){$i=$this->_result;}if(sqlsrv_field_metadata($i)){return
new
Min_Result($i);}$this->affected_rows=sqlsrv_rows_affected($i);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($j,$d=0){$i=$this->query($j);if(!is_object($i)){return
false;}$a=$i->fetch_row();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($i){$this->_result=$i;}function
_convert($a){foreach((array)$a
as$c=>$b){if(is_a($b,'DateTime')){$a[$c]=$b->format("Y-m-d H:i:s");}}return$a;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields){$this->_fields=sqlsrv_field_metadata($this->_result);}$d=$this->_fields[$this->_offset++];$e=new
stdClass;$e->name=$d["Name"];$e->orgname=$d["Name"];$e->type=($d["Type"]==1?254:0);return$e;}function
seek($L){for($l=0;$l<$L;$l++){sqlsrv_fetch($this->_result);}}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($D,$Q,$S){$this->_link=@mssql_connect($D,$Q,$S);if($this->_link){$i=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$a=$i->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$a[0]] $a[1]";}else{$this->error=mssql_get_last_message();}return(bool)$this->_link;}function
quote($G){return"'".str_replace("'","''",$G)."'";}function
select_db($da){return
mssql_select_db($da);}function
query($j,$bb=false){$i=mssql_query($j,$this->_link);if(!$i){$this->error=mssql_get_last_message();return
false;}if($i===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($j,$d=0){$i=$this->query($j);if(!is_object($i)){return
false;}return
mssql_result($i->_result,0,$d);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($i){$this->_result=$i;$this->num_rows=mssql_num_rows($i);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$e=mssql_fetch_field($this->_result);$e->orgtable=$e->table;$e->orgname=$e->name;return$e;}function
seek($L){mssql_data_seek($this->_result,$L);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($M){return"[".str_replace("]","]]",$M)."]";}function
table($M){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($M);}function
connect(){global$r;$g=new
Min_DB;$ya=$r->credentials();if($g->connect($ya[0],$ya[1],$ya[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($j,$s,$N,$L=0,$Oa=" "){return(isset($N)?" TOP (".($N+$L).")":"")." $j$s";}function
limit1($j,$s){return
limit($j,$s,1);}function
db_collation($t,$X){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($t));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($z){global$g;$e=array();foreach($z
as$t){$g->select_db($t);$e[$t]=$g->result("SELECT COUNT(*) FROM information_schema.TABLES");}return$e;}function
table_status($f=""){$e=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($f!=""?" AND name = ".q($f):""))as$a){if($f!=""){return$a;}$e[$a["Name"]]=$a;}return$e;}function
is_view($I){return$I["Engine"]=="VIEW";}function
fk_support($I){return
true;}function
fields($h,$ic=false){$e=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($h))as$a){$y=$a["type"];$ca=(ereg("char|binary",$y)?$a["max_length"]:($y=="decimal"?"$a[precision],$a[scale]":""));$e[$a["name"]]=array("field"=>$a["name"],"full_type"=>$y.($ca?"($ca)":""),"type"=>$y,"length"=>$ca,"default"=>$a["default"],"null"=>$a["is_nullable"],"auto_increment"=>$a["is_identity"],"collation"=>$a["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$a["is_identity"],);}return$e;}function
indexes($h,$H=null){global$g;if(!is_object($H)){$H=$g;}$e=array();foreach(get_rows("SELECT indexes.name, key_ordinal, is_unique, is_primary_key, columns.name AS column_name
FROM sys.indexes
INNER JOIN sys.index_columns ON indexes.object_id = index_columns.object_id AND indexes.index_id = index_columns.index_id
INNER JOIN sys.columns ON index_columns.object_id = columns.object_id AND index_columns.column_id = columns.column_id
WHERE OBJECT_NAME(indexes.object_id) = ".q($h),$H)as$a){$e[$a["name"]]["type"]=($a["is_primary_key"]?"PRIMARY":($a["is_unique"]?"UNIQUE":"INDEX"));$e[$a["name"]]["lengths"]=array();$e[$a["name"]]["columns"][$a["key_ordinal"]]=$a["column_name"];}return$e;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SELECT view_definition FROM information_schema.views WHERE table_schema = SCHEMA_NAME() AND table_name = ".q($f))));}function
collations(){$e=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$R){$e[ereg_replace("_.*","",$R)][]=$R;}return$e;}function
information_schema($t){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
exact_value($b){return
q($b);}function
create_database($t,$R){return
queries("CREATE DATABASE ".idf_escape($t).($R?" COLLATE ".idf_escape($R):""));}function
drop_databases($z){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$z)));}function
rename_database($f,$R){if($R){queries("ALTER DATABASE ".idf_escape(DB)." COLLATE ".idf_escape($R));}queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($f));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".preg_replace('~\\D+~','',$_POST["Auto_increment"]).",1)":"");}function
alter_table($h,$f,$o,$db,$xa,$yb,$R,$Va,$vb){$u=array();foreach($o
as$d){$J=idf_escape($d[0]);$b=$d[1];if(!$b){$u["DROP"][]=" COLUMN $d[0]";}else{$b[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$b[1]);if($d[0]==""){$u["ADD"][]="\n  ".implode("",$b);}else{unset($b[6]);if($J!=$b[0]){queries("EXEC sp_rename ".q(table($h).".$J").", ".q(idf_unescape($b[0])).", 'COLUMN'");}$u["ALTER COLUMN ".implode("",$b)][]="";}}}if($h==""){return
queries("CREATE TABLE ".table($f)." (".implode(",",(array)$u["ADD"])."\n)");}if($h!=$f){queries("EXEC sp_rename ".q(table($h)).", ".q($f));}foreach($u
as$c=>$b){if(!queries("ALTER TABLE ".idf_escape($f)." $c".implode(",",$b))){return
false;}}return
true;}function
alter_indexes($h,$u){$w=array();$Ca=array();foreach($u
as$b){if($b[2]){if($b[0]=="PRIMARY"){$Ca[]=$b[1];}else{$w[]="$b[1] ON ".table($h);}}elseif(!queries(($b[0]!="PRIMARY"?"CREATE".($b[0]!="INDEX"?" UNIQUE":"")." INDEX ".idf_escape(uniqid($h."_"))." ON ".table($h):"ALTER TABLE ".table($h)." ADD PRIMARY KEY")." $b[1]")){return
false;}}return(!$w||queries("DROP INDEX ".implode(", ",$w)))&&(!$Ca||queries("ALTER TABLE ".table($h)." DROP ".implode(", ",$Ca)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($h,$q){return
queries("INSERT INTO ".table($h).($q?" (".implode(", ",array_keys($q)).")\nVALUES (".implode(", ",$q).")":"DEFAULT VALUES"));}function
insert_update($h,$q,$Ia){$ma=array();$s=array();foreach($q
as$c=>$b){$ma[]="$c = $b";if(isset($Ia[idf_unescape($c)])){$s[]="$c = $b";}}return
queries("MERGE ".table($h)." USING (VALUES(".implode(", ",$q).")) AS source (c".implode(", c",range(1,count($q))).") ON ".implode(" AND ",$s)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$ma)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($q)).") VALUES (".implode(", ",$q).");");}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$j){$g->query("SET SHOWPLAN_ALL ON");$e=$g->query($j);$g->query("SET SHOWPLAN_ALL OFF");return$e;}function
foreign_keys($h){$e=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($h))as$a){$B=&$e[$a["FK_NAME"]];$B["table"]=$a["PKTABLE_NAME"];$B["source"][]=$a["FKCOLUMN_NAME"];$B["target"][]=$a["PKCOLUMN_NAME"];}return$e;}function
truncate_tables($E){return
apply_queries("TRUNCATE TABLE",$E);}function
drop_views($Z){return
queries("DROP VIEW ".implode(", ",array_map('table',$Z)));}function
drop_tables($E){return
queries("DROP TABLE ".implode(", ",array_map('table',$E)));}function
move_tables($E,$Z,$qa){return
apply_queries("ALTER SCHEMA ".idf_escape($qa)." TRANSFER",array_merge($E,$Z));}function
trigger($f){$F=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($f));$e=reset($F);if($e){$e["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$e["text"]);}return$e;}function
triggers($h){$e=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($h))as$a){$e[$a["name"]]=array($a["Timing"],$a["Event"]);}return$e;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!=""){return$_GET["ns"];}return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($Na){return
true;}function
use_sql($da){return"USE ".idf_escape($da);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($rb){return
ereg('^(scheme|trigger|view|drop_col)$',$rb);}$_="mssql";$T=array();$Qa=array();foreach(array(lang(9)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(10)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(11)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(12)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$c=>$b){$T+=$b;$Qa[$c]=array_keys($b);}$sb=array();$dc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$V=array("len","lower","round","upper");$wb=array("avg","count","count distinct","max","min","sum");$bc=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Ma[]="MySQLi";$Ma[]="MySQL";$Ma[]="PDO_MySQL";if(extension_loaded("mysqli")||extension_loaded("mysql")||extension_loaded("pdo_mysql")){$ja=array("server"=>"MySQL")+$ja;}if(!defined("DRIVER")){define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($D,$Q,$S){mysqli_report(MYSQLI_REPORT_OFF);list($ef,$Uc)=explode(":",$D,2);$e=@$this->real_connect(($D!=""?$ef:ini_get("mysqli.default_host")),("$D$Q"!=""?$Q:ini_get("mysqli.default_user")),("$D$Q$S"!=""?$S:ini_get("mysqli.default_pw")),null,(is_numeric($Uc)?$Uc:ini_get("mysqli.default_port")),(!is_numeric($Uc)?$Uc:null));if($e){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$e;}function
result($j,$d=0){$i=$this->query($j);if(!$i){return
false;}$a=$i->fetch_array();return$a[$d];}function
quote($G){return"'".$this->escape_string($G)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($D,$Q,$S){$this->_link=@mysql_connect(($D!=""?$D:ini_get("mysql.default_host")),("$D$Q"!=""?$Q:ini_get("mysql.default_user")),("$D$Q$S"!=""?$S:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($G){return"'".mysql_real_escape_string($G,$this->_link)."'";}function
select_db($da){return
mysql_select_db($da,$this->_link);}function
query($j,$bb=false){$i=@($bb?mysql_unbuffered_query($j,$this->_link):mysql_query($j,$this->_link));if(!$i){$this->error=mysql_error($this->_link);return
false;}if($i===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$d=0){$i=$this->query($j);if(!$i){return
false;}return
mysql_result($i->_result,0,$d);}}class
Min_Result{var$num_rows,$_result;function
Min_Result($i){$this->_result=$i;$this->num_rows=mysql_num_rows($i);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$e=mysql_fetch_field($this->_result);$e->orgtable=$e->table;$e->orgname=$e->name;$e->charsetnr=($e->blob?63:0);return$e;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($D,$Q,$S){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:([0-9])~',';port=\\1',$D)),$Q,$S);$this->query("SET NAMES utf8");return
true;}function
select_db($da){return$this->query("USE ".idf_escape($da));}function
query($j,$bb=false){$this->setAttribute(1000,!$bb);return
parent::query($j,$bb);}}}function
idf_escape($M){return"`".str_replace("`","``",$M)."`";}function
table($M){return
idf_escape($M);}function
connect(){global$r;$g=new
Min_DB;$ya=$r->credentials();if($g->connect($ya[0],$ya[1],$ya[2])){$g->query("SET SQL_QUOTE_SHOW_CREATE=1");return$g;}return$g->error;}function
get_databases($jf=true){$e=&get_session("dbs");if(!isset($e)){if($jf){restart_session();ob_flush();flush();}$e=get_vals("SHOW DATABASES");}return$e;}function
limit($j,$s,$N,$L=0,$Oa=" "){return" $j$s".(isset($N)?$Oa."LIMIT $N".($L?" OFFSET $L":""):"");}function
limit1($j,$s){return
limit($j,$s,1);}function
db_collation($t,$X){global$g;$e=null;$ga=$g->result("SHOW CREATE DATABASE ".idf_escape($t),1);if(preg_match('~ COLLATE ([^ ]+)~',$ga,$k)){$e=$k[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$ga,$k)){$e=$X[$k[1]][0];}return$e;}function
engines(){$e=array();foreach(get_rows("SHOW ENGINES")as$a){if(ereg("YES|DEFAULT",$a["Support"])){$e[]=$a["Engine"];}}return$e;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($z){$e=array();foreach($z
as$t){$e[$t]=count(get_vals("SHOW TABLES IN ".idf_escape($t)));}return$e;}function
table_status($f=""){$e=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$a){if($a["Engine"]=="InnoDB"){$a["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["Comment"]);}if(!isset($a["Rows"])){$a["Comment"]="";}if($f!=""){return$a;}$e[$a["Name"]]=$a;}return$e;}function
is_view($I){return!isset($I["Rows"]);}function
fk_support($I){return($I["Engine"]=="InnoDB");}function
fields($h,$ic=false){$e=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($h))as$a){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$a["Type"],$k);$e[$a["Field"]]=array("field"=>$a["Field"],"full_type"=>$a["Type"],"type"=>$k[1],"length"=>$k[2],"unsigned"=>ltrim($k[3].$k[4]),"default"=>($a["Default"]!=""||ereg("char",$k[1])?$a["Default"]:null),"null"=>($a["Null"]=="YES"),"auto_increment"=>($a["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$a["Extra"],$k)?$k[1]:""),"collation"=>$a["Collation"],"privileges"=>array_flip(explode(",",$a["Privileges"])),"comment"=>$a["Comment"],"primary"=>($a["Key"]=="PRI"),);}return$e;}function
indexes($h,$H=null){global$g;if(!is_object($H)){$H=$g;}$e=array();foreach(get_rows("SHOW INDEX FROM ".table($h),$H)as$a){$e[$a["Key_name"]]["type"]=($a["Key_name"]=="PRIMARY"?"PRIMARY":($a["Index_type"]=="FULLTEXT"?"FULLTEXT":($a["Non_unique"]?"INDEX":"UNIQUE")));$e[$a["Key_name"]]["columns"][]=$a["Column_name"];$e[$a["Key_name"]]["lengths"][]=$a["Sub_part"];}return$e;}function
foreign_keys($h){global$g,$ib;static$ia='`(?:[^`]|``)+`';$e=array();$me=$g->result("SHOW CREATE TABLE ".table($h),1);if($me){preg_match_all("~CONSTRAINT ($ia) FOREIGN KEY \\(((?:$ia,? ?)+)\\) REFERENCES ($ia)(?:\\.($ia))? \\(((?:$ia,? ?)+)\\)(?: ON DELETE (".implode("|",$ib)."))?(?: ON UPDATE (".implode("|",$ib)."))?~",$me,$la,PREG_SET_ORDER);foreach($la
as$k){preg_match_all("~$ia~",$k[2],$Da);preg_match_all("~$ia~",$k[5],$qa);$e[idf_unescape($k[1])]=array("db"=>idf_unescape($k[4]!=""?$k[3]:$k[4]),"table"=>idf_unescape($k[4]!=""?$k[4]:$k[3]),"source"=>array_map('idf_unescape',$Da[0]),"target"=>array_map('idf_unescape',$qa[0]),"on_delete"=>$k[6],"on_update"=>$k[7],);}}return$e;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$e=array();foreach(get_rows("SHOW COLLATION")as$a){$e[$a["Charset"]][]=$a["Collation"];}ksort($e);foreach($e
as$c=>$b){sort($e[$c]);}return$e;}function
information_schema($t){global$g;return($g->server_info>=5&&$t=="information_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
exact_value($b){return
q($b)." COLLATE utf8_bin";}function
create_database($t,$R){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($t).($R?" COLLATE ".q($R):""));}function
drop_databases($z){set_session("dbs",null);return
apply_queries("DROP DATABASE",$z,'idf_escape');}function
rename_database($f,$R){if(create_database($f,$R)){$Sb=array();foreach(tables_list()as$h=>$y){$Sb[]=table($h)." TO ".idf_escape($f).".".table($h);}if(!$Sb||queries("RENAME TABLE ".implode(", ",$Sb))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Ad=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$w){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$w["columns"],true)){$Ad="";break;}if($w["type"]=="PRIMARY"){$Ad=" UNIQUE";}}}return" AUTO_INCREMENT$Ad";}function
alter_table($h,$f,$o,$db,$xa,$yb,$R,$Va,$vb){$u=array();foreach($o
as$d){$u[]=($d[1]?($h!=""?($d[0]!=""?"CHANGE ".idf_escape($d[0]):"ADD"):" ")." ".implode($d[1]).($h!=""?" $d[2]":""):"DROP ".idf_escape($d[0]));}$u=array_merge($u,$db);$Qb="COMMENT=".q($xa).($yb?" ENGINE=".q($yb):"").($R?" COLLATE ".q($R):"").($Va!=""?" AUTO_INCREMENT=$Va":"").$vb;if($h==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$u)."\n) $Qb");}if($h!=$f){$u[]="RENAME TO ".table($f);}$u[]=$Qb;return
queries("ALTER TABLE ".table($h)."\n".implode(",\n",$u));}function
alter_indexes($h,$u){foreach($u
as$c=>$b){$u[$c]=($b[2]?"\nDROP INDEX ":"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"")).$b[1];}return
queries("ALTER TABLE ".table($h).implode(",",$u));}function
truncate_tables($E){return
apply_queries("TRUNCATE TABLE",$E);}function
drop_views($Z){return
queries("DROP VIEW ".implode(", ",array_map('table',$Z)));}function
drop_tables($E){return
queries("DROP TABLE ".implode(", ",array_map('table',$E)));}function
move_tables($E,$Z,$qa){$Sb=array();foreach(array_merge($E,$Z)as$h){$Sb[]=table($h)." TO ".idf_escape($qa).".".table($h);}return
queries("RENAME TABLE ".implode(", ",$Sb));}function
trigger($f){$F=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($F);}function
triggers($h){$e=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")))as$a){$e[$a["Trigger"]]=array($a["Timing"],$a["Event"]);}return$e;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$y){global$g,$Ib,$hc,$T;$of=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Ae="((".implode("|",array_merge(array_keys($T),$of)).")(?:\\s*\\(((?:[^'\")]*|$Ib)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$ia="\\s*(".($y=="FUNCTION"?"":implode("|",$hc)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Ae";$ga=$g->result("SHOW CREATE $y ".idf_escape($f),2);preg_match("~\\(((?:$ia\\s*,?)*)\\)".($y=="FUNCTION"?"\\s*RETURNS\\s+$Ae":"")."\\s*(.*)~is",$ga,$k);$o=array();preg_match_all("~$ia\\s*,?~is",$k[1],$la,PREG_SET_ORDER);foreach($la
as$cb){$f=str_replace("``","`",$cb[2]).$cb[3];$o[]=array("field"=>$f,"type"=>strtolower($cb[5]),"length"=>preg_replace_callback("~$Ib~s",'normalize_enum',$cb[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$cb[8] $cb[7]"))),"full_type"=>$cb[4],"inout"=>strtoupper($cb[1]),"collation"=>strtolower($cb[9]),);}if($y!="FUNCTION"){return
array("fields"=>$o,"definition"=>$k[11]);}return
array("fields"=>$o,"returns"=>array("type"=>$k[12],"length"=>$k[13],"unsigned"=>$k[15],"collation"=>$k[16]),"definition"=>$k[17],);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
begin(){return
queries("BEGIN");}function
insert_into($h,$q){return
queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($q)).")\nVALUES (".implode(", ",$q).")");}function
insert_update($h,$q,$Ia){foreach($q
as$c=>$b){$q[$c]="$c = $b";}$ma=implode(", ",$q);return
queries("INSERT INTO ".table($h)." SET $ma ON DUPLICATE KEY UPDATE $ma");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$j){return$g->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Na){return
true;}function
create_sql($h,$Va){global$g;$e=$g->result("SHOW CREATE TABLE ".table($h),1);if(!$Va){$e=preg_replace('~ AUTO_INCREMENT=[0-9]+~','',$e);}return$e;}function
truncate_sql($h){return"TRUNCATE ".table($h);}function
use_sql($da){return"USE ".idf_escape($da);}function
trigger_sql($h,$W){$e="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")),null,"-- ")as$a){$e.="\n".($W=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($a["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($a["Trigger"])." $a[Timing] $a[Event] ON ".table($a["Table"])." FOR EACH ROW\n$a[Statement];;\n";}return$e;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($rb){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$rb);}$_="sql";$T=array();$Qa=array();foreach(array(lang(9)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(10)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(11)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(12)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(15)=>array("enum"=>65535,"set"=>64),)as$c=>$b){$T+=$b;$Qa[$c]=array_keys($b);}$sb=array("unsigned","zerofill","unsigned zerofill");$dc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$V=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$wb=array("avg","count","count distinct","group_concat","max","min","sum");$bc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(SID&&!$_COOKIE?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$Vc="3.0.0";class
Adminer{var$operators;function
name(){return"Adminer";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
loginForm(){global$ja;echo'<table cellspacing="0">
<tr><th>',lang(16),'<td>',html_select("driver",$ja,DRIVER),'<tr><th>',lang(17),'<td><input name="server" value="',h(SERVER),'">
<tr><th>',lang(18),'<td><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>',lang(19),'<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".lang(20)."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],lang(21))."\n";}function
login($Jf,$S){return
true;}function
tableName($Sc){return
h($Sc["Name"]);}function
fieldName($d,$ub=0){return'<span title="'.h($d["full_type"]).'">'.h($d["field"]).'</span>';}function
selectLinks($Sc,$q=""){echo'<p class="tabs">';$Ja=array("select"=>lang(22),"table"=>lang(23));if(is_view($Sc)){$Ja["view"]=lang(24);}else{$Ja["create"]=lang(25);}if(isset($q)){$Ja["edit"]=lang(26);}foreach($Ja
as$c=>$b){echo" <a href='".h(ME)."$c=".urlencode($Sc["Name"]).($c=="edit"?$q:"")."'>".bold($b,isset($_GET[$c]))."</a>";}echo"\n";}function
backwardKeys($h,$Gf){return
array();}function
backwardKeysPrint($Kf,$a){}function
selectQuery($j){global$_;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".lang(27).": ".lang(28)."'>&gt;&gt;</a> <code class='jush-$_'>".h(str_replace("\n"," ",$j))."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".lang(29)."</a>\n";}function
rowDescription($h){return"";}function
rowDescriptions($F,$nf){return$F;}function
selectVal($b,$x,$d){$e=($b!="<i>NULL</i>"&&ereg("^char|binary",$d["type"])?"<code>$b</code>":$b);if(ereg('blob|bytea|raw|file',$d["type"])&&!is_utf8($b)){$e=lang(30,strlen(html_entity_decode($b,ENT_QUOTES)));}return($x?"<a href='$x'>$e</a>":$e);}function
editVal($b,$d){return(ereg("binary",$d["type"])?reset(unpack("H*",$b)):$b);}function
selectColumnsPrint($C,$A){global$V,$wb;print_fieldset("select",lang(31),$C);$l=0;$we=array(lang(32)=>$V,lang(33)=>$wb);foreach($C
as$c=>$b){$b=$_GET["columns"][$c];echo"<div>".html_select("columns[$l][fun]",array(-1=>"")+$we,$b["fun"]),"(<select name='columns[$l][col]'><option>".optionlist($A,$b["col"],true)."</select>)</div>\n";$l++;}echo"<div>".html_select("columns[$l][fun]",array(-1=>"")+$we,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$l][col]' onchange='selectAddRow(this);'><option>".optionlist($A,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($s,$A,$K){print_fieldset("search",lang(34),$s);foreach($K
as$l=>$w){if($w["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$w["columns"]))."</i>) AGAINST"," <input name='fulltext[$l]' value='".h($_GET["fulltext"][$l])."'>",checkbox("boolean[$l]",1,isset($_GET["boolean"][$l]),"BOOL"),"<br>\n";}}$l=0;foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){echo"<div><select name='where[$l][col]'><option value=''>(".lang(35).")".optionlist($A,$b["col"],true)."</select>",html_select("where[$l][op]",$this->operators,$b["op"]),"<input name='where[$l][val]' value='".h($b["val"])."'></div>\n";$l++;}}echo"<div><select name='where[$l][col]' onchange='selectAddRow(this);'><option value=''>(".lang(35).")".optionlist($A,null,true)."</select>",html_select("where[$l][op]",$this->operators),"<input name='where[$l][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($ub,$A,$K){print_fieldset("sort",lang(36),$ub);$l=0;foreach((array)$_GET["order"]as$c=>$b){if(isset($A[$b])){echo"<div><select name='order[$l]'><option>".optionlist($A,$b,true)."</select>",checkbox("desc[$l]",1,isset($_GET["desc"][$c]),lang(37))."</div>\n";$l++;}}echo"<div><select name='order[$l]' onchange='selectAddRow(this);'><option>".optionlist($A,null,true)."</select>",checkbox("desc[$l]",1,0,lang(37))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($N){echo"<fieldset><legend>".lang(38)."</legend><div>";echo"<input name='limit' size='3' value='".h($N)."'>","</div></fieldset>\n";}function
selectLengthPrint($Db){if(isset($Db)){echo"<fieldset><legend>".lang(39)."</legend><div>",'<input name="text_length" size="3" value="'.h($Db).'">',"</div></fieldset>\n";}}function
selectActionPrint(){echo"<fieldset><legend>".lang(40)."</legend><div>","<input type='submit' value='".lang(31)."'>","</div></fieldset>\n";}function
selectEmailPrint($Lf,$A){}function
selectColumnsProcess($A,$K){global$V,$wb;$C=array();$va=array();foreach((array)$_GET["columns"]as$c=>$b){if($b["fun"]=="count"||(isset($A[$b["col"]])&&(!$b["fun"]||in_array($b["fun"],$V)||in_array($b["fun"],$wb)))){$C[$c]=apply_sql_function($b["fun"],(isset($A[$b["col"]])?idf_escape($b["col"]):"*"));if(!in_array($b["fun"],$wb)){$va[]=$C[$c];}}}return
array($C,$va);}function
selectSearchProcess($o,$K){global$_;$e=array();foreach($K
as$l=>$w){if($w["type"]=="FULLTEXT"&&$_GET["fulltext"][$l]!=""){$e[]="MATCH (".implode(", ",array_map('idf_escape',$w["columns"])).") AGAINST (".q($_GET["fulltext"][$l]).(isset($_GET["boolean"][$l])?" IN BOOLEAN MODE":"").")";}}foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){$cc=" $b[op]";if(ereg('IN$',$b["op"])){$Mb=process_length($b["val"]);$cc.=" (".($Mb!=""?$Mb:"NULL").")";}elseif($b["op"]=="LIKE %%"){$cc=" LIKE ".$this->processInput($o[$b["col"]],"%$b[val]%");}elseif(!ereg('NULL$',$b["op"])){$cc.=" ".$this->processInput($o[$b["col"]],$b["val"]);}if($b["col"]!=""){$e[]=idf_escape($b["col"]).$cc;}else{$eb=array();foreach($o
as$f=>$d){if(is_numeric($b["val"])||!ereg('int|float|double|decimal',$d["type"])){$f=idf_escape($f);$eb[]=($_=="sql"&&ereg('char|text|enum|set',$d["type"])&&!ereg('^utf8',$d["collation"])?"CONVERT($f USING utf8)":$f);}}$e[]=($eb?"(".implode("$cc OR ",$eb)."$cc)":"0");}}}return$e;}function
selectOrderProcess($o,$K){$e=array();foreach((array)$_GET["order"]as$c=>$b){if(isset($o[$b])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$b)){$e[]=(isset($o[$b])?idf_escape($b):$b).(isset($_GET["desc"][$c])?" DESC":"");}}return$e;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($s,$nf){return
false;}function
messageQuery($j){global$_;restart_session();$U="sql-".count($_SESSION["messages"]);$fb=&get_session("queries");$fb[$_GET["db"]][]=(strlen($j)>1e6?ereg_replace('[\x80-\xFF]+$','',substr($j,0,1e6))."\n...":$j);return" <a href='#$U' onclick=\"return !toggle('$U');\">".lang(41)."</a><div id='$U' class='hidden'><pre class='jush-$_'>".shorten_utf8($j,1000).'</pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($fb[$_GET["db"]])-1)).'">'.lang(29).'</a></div>';}function
editFunctions($d){global$bc;$e=($d["null"]?"NULL/":"");foreach($bc
as$c=>$V){if(!$c||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($V
as$ia=>$b){if(!$ia||ereg($ia,$d["type"])){$e.="/$b";}}}}return
explode("/",$e);}function
editInput($h,$d,$Sa,$p){if($d["type"]=="enum"){return($d["null"]?"<label><input type='radio'$Sa value=''".(isset($p)||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"")."<label><input type='radio'$Sa value='0'".($p===0?" checked":"")."><i>".lang(42)."</i></label>";}return"";}function
processInput($d,$p,$O=""){$f=$d["field"];$e=q($p);if(ereg('^(now|getdate|uuid)$',$O)){$e="$O()";}elseif(ereg('^current_(date|timestamp)$',$O)){$e=$O;}elseif(ereg('^([+-]|\\|\\|)$',$O)){$e=idf_escape($f)." $O $e";}elseif(ereg('^[+-] interval$',$O)){$e=idf_escape($f)." $O ".(preg_match("~^([0-9]+|'[0-9.: -]') [A-Z_]+$~i",$p)?$p:$e);}elseif(ereg('^(addtime|subtime|concat)$',$O)){$e="$O(".idf_escape($f).", $e)";}elseif(ereg('^(md5|sha1|password|encrypt|hex)$',$O)){$e="$O($e)";}if(ereg("binary",$d["type"])){$e="unhex($e)";}return$e;}function
dumpOutput($C,$p=""){$e=array('text'=>lang(43),'file'=>lang(44));if(function_exists('gzencode')){$e['gz']='gzip';}if(function_exists('bzcompress')){$e['bz2']='bzip2';}return
html_select("output",$e,$p,$C);}function
dumpFormat($C,$p=""){return
html_select("format",array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;'),$p,$C);}function
navigation($cd){global$Vc,$g,$P,$_,$ja;echo'<h1>
<a href="http://www.adminer.org/" id="h1">',$this->name(),'</a>
<span class="version">',$Vc,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($Vc,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($cd=="auth"){$gb=true;foreach((array)$_SESSION["pwds"]as$Kb=>$kf){foreach($kf
as$D=>$lf){foreach($lf
as$Q=>$S){if(isset($S)){if($gb){echo"<p>\n";$gb=false;}echo"<a href='".h(auth_url($Kb,$D,$Q))."'>($ja[$Kb]) ".h($Q.($D!=""?"@$D":""))."</a><br>\n";}}}}}else{$z=get_databases();echo'<form action="" method="post">
<p class="logout">
<a href="',h(ME),'sql=">',bold(lang(41),isset($_GET["sql"])),'</a>
';if(support("dump")){echo'<a href="',h(ME),'dump=',urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"]),'">',bold(lang(45),isset($_GET["dump"])),'</a>
';}echo'<input type="hidden" name="token" value="',$P,'">
<input type="submit" name="logout" value="',lang(46),'">
</p>
</form>
<form action="">
<p>
';hidden_fields_get();echo($z?html_select("db",array(""=>"(".lang(47).")")+$z,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="',lang(6),'"',($z?" class='hidden'":""),'>
';if($cd!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".html_select("ns",array(""=>"(".lang(48).")")+schemas(),$_GET["ns"],"this.form.submit();");if($_GET["ns"]!=""){set_schema($_GET["ns"]);}}if($_GET["ns"]!==""){$E=tables_list();if(!$E){echo"<p class='message'>".lang(4)."\n";}else{$this->tablesPrint($E);$Ja=array();foreach($E
as$h=>$y){$Ja[]=preg_quote($h,'/');}echo"<script type='text/javascript'>\n","var jushLinks = { $_: [ '".addcslashes(h(ME),"\\'/")."table=\$&', /\\b(".implode("|",$Ja).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$b){echo"jushLinks.$b = jushLinks.$_;\n";}echo"</script>\n";}echo'<p><a href="'.h(ME).'create=">'.bold(lang(49),$_GET["create"]==="")."</a>\n";}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}}function
tablesPrint($E){echo"<p id='tables'>\n";foreach($E
as$h=>$y){echo'<a href="'.h(ME).'select='.urlencode($h).'">'.bold(lang(50),$_GET["select"]==$h).'</a> ','<a href="'.h(ME).'table='.urlencode($h).'">'.bold($this->tableName(array("Name"=>$h)),$_GET["table"]==$h)."</a><br>\n";}}}$r=(function_exists('adminer_object')?adminer_object():new
Adminer);if(!isset($r->operators)){$r->operators=$dc;}function
page_header($Je,$n="",$sc=array(),$Ke=""){global$Wa,$ec,$r,$g,$ja;header("Content-Type: text/html; charset=utf-8");$Td=$Je.($Ke!=""?": ".h($Ke):"");$nc=($ec?"https":"http");echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="',$Wa,'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Td.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$r->name(),'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=favicon.ico&amp;version=3.0.0",'">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=default.css&amp;version=3.0.0";echo'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body onload="bodyLoad();">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=functions.js&amp;version=3.0.0",'"></script>
<div id="content">
';if(isset($sc)){$x=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($x?h($x):".").'">'.$ja[DRIVER].'</a> &raquo; ';$x=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$D=(SERVER!=""?h(SERVER):lang(17));if($sc===false){echo"$D\n";}else{echo"<a href='".($x?h($x):".")."'>$D</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($sc))){echo'<a href="'.h($x."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($sc)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($sc
as$c=>$b){$qc=(is_array($b)?$b[1]:$b);if($qc!=""){echo'<a href="'.h(ME."$c=").urlencode(is_array($b)?$b[0]:$b).'">'.h($qc).'</a> &raquo; ';}}}echo"$Je\n";}}echo"<h2>$Td</h2>\n";restart_session();if($_SESSION["messages"]){echo"<div class='message'>".implode("</div>\n<div class='message'>",$_SESSION["messages"])."</div>\n";$_SESSION["messages"]=array();}$z=&get_session("dbs");if(DB!=""&&$z&&!in_array(DB,$z,true)){$z=null;}if($n){echo"<div class='error'>$n</div>\n";}}function
page_footer($cd=""){global$r;echo'</div>

';switch_lang();echo'<div id="menu">
';$r->navigation($cd);echo'</div>
';}function
int32($ba){while($ba>=2147483648){$ba-=4294967296;}while($ba<=-2147483649){$ba+=4294967296;}return(int)$ba;}function
long2str($v,$qd){$ha='';foreach($v
as$b){$ha.=pack('V',$b);}if($qd){return
substr($ha,0,end($v));}return$ha;}function
str2long($ha,$qd){$v=array_values(unpack('V*',str_pad($ha,4*ceil(strlen($ha)/4),"\0")));if($qd){$v[]=strlen($ha);}return$v;}function
xxtea_mx($za,$Aa,$Ea,$La){return
int32((($za>>5&0x7FFFFFF)^$Aa<<2)+(($Aa>>3&0x1FFFFFFF)^$za<<4))^int32(($Ea^$Aa)+($La^$za));}function
encrypt_string($jc,$c){if($jc==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$v=str2long($jc,true);$ba=count($v)-1;$za=$v[$ba];$Aa=$v[0];$ta=floor(6+52/($ba+1));$Ea=0;while($ta-->0){$Ea=int32($Ea+0x9E3779B9);$lc=$Ea>>2&3;for($_a=0;$_a<$ba;$_a++){$Aa=$v[$_a+1];$Eb=xxtea_mx($za,$Aa,$Ea,$c[$_a&3^$lc]);$za=int32($v[$_a]+$Eb);$v[$_a]=$za;}$Aa=$v[0];$Eb=xxtea_mx($za,$Aa,$Ea,$c[$_a&3^$lc]);$za=int32($v[$ba]+$Eb);$v[$ba]=$za;}return
long2str($v,false);}function
decrypt_string($jc,$c){if($jc==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$v=str2long($jc,false);$ba=count($v)-1;$za=$v[$ba];$Aa=$v[0];$ta=floor(6+52/($ba+1));$Ea=int32($ta*0x9E3779B9);while($Ea){$lc=$Ea>>2&3;for($_a=$ba;$_a>0;$_a--){$za=$v[$_a-1];$Eb=xxtea_mx($za,$Aa,$Ea,$c[$_a&3^$lc]);$Aa=int32($v[$_a]-$Eb);$v[$_a]=$Aa;}$za=$v[$ba];$Eb=xxtea_mx($za,$Aa,$Ea,$c[$_a&3^$lc]);$Aa=int32($v[0]-$Eb);$v[0]=$Aa;$Ea=int32($Ea-0x9E3779B9);}return
long2str($v,true);}$g='';if(!$ja){page_header(lang(51),lang(52,implode(", ",$Ma)),null);page_footer("auth");exit;}$P=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$_b=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$b){list($c)=explode(":",$b);$_b[$c]=$b;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$c=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$_c=$r->permanentLogin();$_b[$c]="$c:".base64_encode($_c?encrypt_string($_POST["password"],$_c):"");cookie("adminer_permanent",implode(" ",$_b));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($P&&$_POST["token"]!=$P){page_header(lang(46),lang(53));page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$c){set_session($c,null);}$c=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($_b[$c]){unset($_b[$c]);cookie("adminer_permanent",implode(" ",$_b));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(54));}}elseif($_b&&!$_SESSION["pwds"]){session_regenerate_id();$_c=$r->permanentLogin();foreach($_b
as$c=>$b){list(,$mf)=explode(":",$b);list($Kb,$D,$Q)=array_map('base64_decode',explode("-",$c));$_SESSION["pwds"][$Kb][$D][$Q]=decrypt_string(base64_decode($mf),$_c);}}function
auth_error($Fe=null){global$g,$r,$P;$Rc=session_name();$n="";if(!$_COOKIE[$Rc]&&$_GET[$Rc]&&ini_bool("session.use_only_cookies")){$n=lang(55);}elseif(isset($_GET["username"])){if(($_COOKIE[$Rc]||$_GET[$Rc])&&!$P){$n=lang(56);}else{$S=&get_session("pwds");if(isset($S)){$n=h($Fe?$Fe->getMessage():(is_string($g)?$g:lang(57)));$S=null;}}}page_header(lang(20),$n,null);echo"<form action='' method='post'>\n";$r->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])&&class_exists("Min_DB")){$g=connect();}if(is_string($g)||!$r->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$P=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$P;}$n=($_POST?($_POST["token"]==$P?"":lang(53)):($_SERVER["REQUEST_METHOD"]!="POST"?"":lang(58,'"post_max_size"')));function
connect_error(){global$g,$P,$n,$ja;$z=array();if(DB!=""){page_header(lang(59).": ".h(DB),lang(60),true);}else{if($_POST["db"]&&!$n){set_session("dbs",null);queries_redirect(substr(ME,0,-1),lang(61),drop_databases($_POST["db"]));}page_header(lang(62),$n,false);echo"<p><a href='".h(ME)."database='>".lang(63)."</a>\n";foreach(array('privileges'=>lang(64),'processlist'=>lang(65),'variables'=>lang(66),'status'=>lang(67),)as$c=>$b){if(support($c)){echo"<a href='".h(ME)."$c='>$b</a>\n";}}echo"<p>".lang(68,$ja[DRIVER],"<b>$g->server_info</b>","<b>$g->extension</b>")."\n","<p>".lang(69,"<b>".h(logged_user())."</b>")."\n";$z=get_databases();if($z){$X=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' onclick='tableClick(event);'>\n","<thead><tr><td><input type='hidden' name='token' value='$P'>&nbsp;<th>".lang(59)."<td>".lang(70)."<td>".lang(71)."</thead>\n";foreach($z
as$t){$Gd=h(ME)."db=".urlencode($t);echo"<tr".odd()."><td>".checkbox("db[]",$t,in_array($t,(array)$_POST["db"])),"<th><a href='$Gd'>".h($t)."</a>","<td><a href='$Gd&amp;database='>".nbsp(db_collation($t,$X))."</a>","<td align='right'><a href='$Gd&amp;schema=' id='tables-".h($t)."'>?</a>","\n";}echo"</table>\n","<p><input type='submit' name='drop' value='".lang(72)."' onclick=\"return confirm('".lang(73)." (' + formChecked(this, /db/) + ')');\">\n","</form>\n";}}page_footer("db");echo"<script type='text/javascript' src='".h(ME)."script=connect'></script>\n";}if(isset($_GET["status"])){$_GET["variables"]=$_GET["status"];}if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect")){if(DB!=""){set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""&&(!isset($_GET["ns"])||!set_schema($_GET["ns"]))){redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());}function
select($i,$H=null){$Ja=array();$K=array();$A=array();$xe=array();$T=array();odd('');for($l=0;$a=$i->fetch_row();$l++){if(!$l){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($oa=0;$oa<count($a);$oa++){$d=$i->fetch_field();$Fa=$d->orgtable;$gc=$d->orgname;if($Fa!=""){if(!isset($K[$Fa])){$K[$Fa]=array();foreach(indexes($Fa,$H)as$w){if($w["type"]=="PRIMARY"){$K[$Fa]=array_flip($w["columns"]);break;}}$A[$Fa]=$K[$Fa];}if(isset($A[$Fa][$gc])){unset($A[$Fa][$gc]);$K[$Fa][$gc]=$oa;$Ja[$oa]=$Fa;}}if($d->charsetnr==63){$xe[$oa]=true;}$T[$oa]=$d->type;echo"<th".($Fa!=""||$d->name!=$gc?" title='".h(($Fa!=""?"$Fa.":"").$gc)."'":"").">".h($d->name);}echo"</thead>\n";}echo"<tr".odd().">";foreach($a
as$c=>$b){if(!isset($b)){$b="<i>NULL</i>";}else{if($xe[$c]&&!is_utf8($b)){$b="<i>".lang(30,strlen($b))."</i>";}elseif(!strlen($b)){$b="&nbsp;";}else{$b=h($b);if($T[$c]==254){$b="<code>$b</code>";}}if(isset($Ja[$c])&&!$A[$Ja[$c]]){$x="edit=".urlencode($Ja[$c]);foreach($K[$Ja[$c]]as$Mc=>$oa){$x.="&where".urlencode("[".bracket_escape($Mc)."]")."=".urlencode($a[$oa]);}$b="<a href='".h(ME.$x)."'>$b</a>";}}echo"<td>$b";}}echo($l?"</table>":"<p class='message'>".lang(74))."\n";}function
referencable_primary($pf){$e=array();foreach(table_status()as$Ha=>$h){if($Ha!=$pf&&fk_support($h)){foreach(fields($Ha)as$d){if($d["primary"]){if($e[$Ha]){unset($e[$Ha]);break;}$e[$Ha]=$d;}}}}return$e;}function
textarea($f,$p,$F=10,$eb=80){echo"<textarea name='$f' rows='$F' cols='$eb' style='width: 98%;' spellcheck='false' onkeydown='return textareaKeydown(this, event);'>".h($p)."</textarea>";}function
edit_type($c,$d,$X,$ea=array()){global$Qa,$T,$sb,$ib;echo'<td><select name="',$c,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$d["type"]||isset($T[$d["type"]])?array():array($d["type"]))+$Qa+($ea?array(lang(75)=>$ea):array()),$d["type"]),'</select>
<td><input name="',$c,'[length]" value="',h($d["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td>',"<select name='$c"."[collation]'".(ereg('(char|text|enum|set)$',$d["type"])?"":" class='hidden'").'><option value="">('.lang(76).')'.optionlist($X,$d["collation"]).'</select>',($sb?"<select name='$c"."[unsigned]'".(!$d["type"]||ereg('(int|float|double|decimal)$',$d["type"])?"":" class='hidden'").'><option>'.optionlist($sb,$d["unsigned"]).'</select>':''),($ea?"<select name='$c"."[on_delete]'".(ereg("`",$d["type"])?"":" class='hidden'")."><option value=''>(".lang(77).")".optionlist($ib,$d["on_delete"])."</select> ":" ");}function
process_length($ca){global$Ib;return(preg_match("~^\\s*(?:$Ib)(?:\\s*,\\s*(?:$Ib))*\\s*\$~",$ca)&&preg_match_all("~$Ib~",$ca,$la)?implode(",",$la[0]):preg_replace('~[^0-9,+-]~','',$ca));}function
process_type($d,$fc="COLLATE"){global$sb;return" $d[type]".($d["length"]!=""?"(".process_length($d["length"]).")":"").(ereg('int|float|double|decimal',$d["type"])&&in_array($d["unsigned"],$sb)?" $d[unsigned]":"").(ereg('char|text|enum|set',$d["type"])&&$d["collation"]?" $fc ".q($d["collation"]):"");}function
process_field($d,$Lc){return
array(idf_escape($d["field"]),process_type($Lc),($d["null"]?" NULL":" NOT NULL"),(isset($d["default"])?" DEFAULT ".($d["type"]=="timestamp"&&eregi("^CURRENT_TIMESTAMP$",$d["default"])?$d["default"]:q($d["default"])):""),($d["on_update"]?" ON UPDATE $d[on_update]":""),(support("comment")&&$d["comment"]!=""?" COMMENT ".q($d["comment"]):""),($d["auto_increment"]?auto_increment():null),);}function
type_class($y){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$c=>$b){if(ereg("$c|$b",$y)){return" class='$c'";}}}function
edit_fields($o,$X,$y="TABLE",$_e=0,$ea=array(),$Jb=false){global$hc;foreach($o
as$d){if($d["comment"]!=""){$Jb=true;break;}}echo'<thead><tr class="wrap">
';if($y=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($y=="TABLE"?lang(78):lang(79)),'<td>',lang(80),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>',lang(81),'<td>',lang(82);if($y=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="',lang(83),'">AI</acronym>
<td class="hidden">',lang(84),(support("comment")?"<td".($Jb?"":" class='hidden'").">".lang(85):"");}echo'<td>',"<input type='image' name='add[".(support("move_col")?0:count($o))."]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.0' alt='+' title='".lang(86)."'>",'<script type="text/javascript">row_count = ',count($o),';</script>
</thead>
';foreach($o
as$l=>$d){$l++;$Ed=$d[($_POST?"orig":"field")];$se=(isset($_POST["add"][$l-1])||(isset($d["field"])&&!$_POST["drop_col"][$l]))&&(support("drop_col")||$Ed=="");echo'<tr',($se?"":" style='display: none;'"),'>
',($y=="PROCEDURE"?"<td>".html_select("fields[$l][inout]",$hc,$d["inout"]):""),'<th>';if($se){echo'<input name="fields[',$l,'][field]" value="',h($d["field"]),'" onchange="',($d["field"]!=""||count($o)>1?"":"editingAddRow(this, $_e); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$l,'][orig]" value="',h($Ed),'">
';edit_type("fields[$l]",$d,$X,$ea);if($y=="TABLE"){echo'<td>',checkbox("fields[$l][null]",1,$d["null"]),'<td><input type="radio" name="auto_increment_col" value="',$l,'"';if($d["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td class="hidden"><?php echo
checkbox("fields[$l][has_default]",1,$d["has_default"]),'<input name="fields[',$l,'][default]" value="',h($d["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($Jb?"":" class='hidden'")."><input name='fields[$l][comment]' value='".h($d["comment"])."' maxlength='255'>":"");}echo"<td>",(support("move_col")?"<input type='image' name='add[$l]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.0' alt='+' title='".lang(86)."' onclick='return !editingAddRow(this, $_e, 1);'>&nbsp;"."<input type='image' name='up[$l]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=up.gif&amp;version=3.0.0' alt='^' title='".lang(87)."'>&nbsp;"."<input type='image' name='down[$l]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=down.gif&amp;version=3.0.0' alt='v' title='".lang(88)."'>&nbsp;":""),($Ed==""||support("drop_col")?"<input type='image' name='drop_col[$l]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=cross.gif&amp;version=3.0.0' alt='x' title='".lang(89)."' onclick='return !editingRemoveRow(this);'>":""),"\n";}return$Jb;}function
process_fields(&$o){ksort($o);$L=0;if($_POST["up"]){$qb=0;foreach($o
as$c=>$d){if(key($_POST["up"])==$c){unset($o[$c]);array_splice($o,$qb,0,array($d));break;}if(isset($d["field"])){$qb=$L;}$L++;}}if($_POST["down"]){$sa=false;foreach($o
as$c=>$d){if(isset($d["field"])&&$sa){unset($o[key($_POST["down"])]);array_splice($o,$L,0,array($sa));break;}if(key($_POST["down"])==$c){$sa=$d;}$L++;}}$o=array_values($o);if($_POST["add"]){array_splice($o,key($_POST["add"]),0,array(array()));}}function
normalize_enum($k){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($k[0][0].$k[0][0],$k[0][0],substr($k[0],1,-1))),'\\'))."'";}function
grant($fa,$na,$A,$Bb){if(!$na){return
true;}if($na==array("ALL PRIVILEGES","GRANT OPTION")){return($fa=="GRANT"?queries("$fa ALL PRIVILEGES$Bb WITH GRANT OPTION"):queries("$fa ALL PRIVILEGES$Bb")&&queries("$fa GRANT OPTION$Bb"));}return
queries("$fa ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$A, ",$na).$A).$Bb);}function
drop_create($Ca,$ga,$ka,$ke,$if,$df,$f){if($_POST["drop"]){return
query_redirect($Ca,$ka,$ke,true,!$_POST["dropped"]);}$Xa=$f!=""&&($_POST["dropped"]||queries($Ca));$cf=queries($ga);if(!queries_redirect($ka,($f!=""?$if:$df),$cf)&&$Xa){restart_session();$_SESSION["messages"][]=$ke;}return$Xa;}function
tar_file($aa,$id){$e=pack("a100a8a8a8a12a12",$aa,644,0,0,decoct(strlen($id)),decoct(time()));$ne=8*32;for($l=0;$l<strlen($e);$l++){$ne+=ord($e{$l});}$e.=sprintf("%06o",$ne)."\0 ";return$e.str_repeat("\0",512-strlen($e)).$id.str_repeat("\0",511-(strlen($id)+511)%
512);}function
dump_table($h,$W,$Nc=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($W){dump_csv(array_keys(fields($h)));}}elseif($W){$ga=create_sql($h,$_POST["auto_increment"]);if($ga){if($W=="DROP+CREATE"){echo"DROP ".($Nc?"VIEW":"TABLE")." IF EXISTS ".table($h).";\n";}if($Nc){$ga=preg_replace('~^([A-Z =]+) DEFINER=`'.str_replace("@","`@`",logged_user()).'`~','\\1',$ga);}echo($W!="CREATE+ALTER"?$ga:($Nc?substr_replace($ga," OR REPLACE",6,0):substr_replace($ga," IF NOT EXISTS",12,0))).";\n\n";}if($W=="CREATE+ALTER"&&!$Nc){$j="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($h)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$o=array();$Hb="";foreach(get_rows($j)as$a){$wa=$a["COLUMN_DEFAULT"];$a["default"]=(isset($wa)?q($wa):"NULL");$a["after"]=q($Hb);$a["alter"]=escape_string(idf_escape($a["COLUMN_NAME"])." $a[COLUMN_TYPE]".($a["COLLATION_NAME"]?" COLLATE $a[COLLATION_NAME]":"").(isset($wa)?" DEFAULT ".($wa=="CURRENT_TIMESTAMP"?$wa:$a["default"]):"").($a["IS_NULLABLE"]=="YES"?"":" NOT NULL").($a["EXTRA"]?" $a[EXTRA]":"").($a["COLUMN_COMMENT"]?" COMMENT ".q($a["COLUMN_COMMENT"]):"").($Hb?" AFTER ".idf_escape($Hb):" FIRST"));echo", ADD $a[alter]";$o[]=$a;$Hb=$a["COLUMN_NAME"];}echo"';
	DECLARE columns CURSOR FOR $j;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	SET @alter_table = '';
	OPEN columns;
	REPEAT
		FETCH columns INTO _column_name, _column_default, _is_nullable, _collation_name, _column_type, _extra, _column_comment;
		IF NOT done THEN
			SET set_after = 1;
			CASE _column_name";foreach($o
as$a){echo"
				WHEN ".q($a["COLUMN_NAME"])." THEN
					SET add_columns = REPLACE(add_columns, ', ADD $a[alter]', '');
					IF NOT (_column_default <=> $a[default]) OR _is_nullable != '$a[IS_NULLABLE]' OR _collation_name != '$a[COLLATION_NAME]' OR _column_type != ".q($a["COLUMN_TYPE"])." OR _extra != '$a[EXTRA]' OR _column_comment != ".q($a["COLUMN_COMMENT"])." OR after != $a[after] THEN
						SET @alter_table = CONCAT(@alter_table, ', MODIFY $a[alter]');
					END IF;";}echo"
				ELSE
					SET @alter_table = CONCAT(@alter_table, ', DROP ', _column_name);
					SET set_after = 0;
			END CASE;
			IF set_after THEN
				SET after = _column_name;
			END IF;
		END IF;
	UNTIL done END REPEAT;
	CLOSE columns;
	IF @alter_table != '' OR add_columns != '' THEN
		SET alter_command = CONCAT(alter_command, 'ALTER TABLE ".table($h)."', SUBSTR(CONCAT(add_columns, @alter_table), 2), ';\\n');
	END IF;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;

";}}}function
dump_data($h,$W,$C=""){global$g,$_;$re=($_=="sqlite"?0:1048576);if($W){if($_POST["format"]=="sql"&&$W=="TRUNCATE+INSERT"){echo
truncate_sql($h).";\n";}$o=fields($h);$i=$g->query(($C?$C:"SELECT * FROM ".table($h)),1);if($i){$uc="";$hb="";while($a=$i->fetch_assoc()){if($_POST["format"]!="sql"){dump_csv($a);}else{if(!$uc){$uc="INSERT INTO ".table($h)." (".implode(", ",array_map('idf_escape',array_keys($a))).") VALUES";}foreach($a
as$c=>$b){$a[$c]=(isset($b)?(ereg('int|float|double|decimal',$o[$c]["type"])?$b:q($b)):"NULL");}$ha=implode(",\t",$a);if($W=="INSERT+UPDATE"){$q=array();foreach($a
as$c=>$b){$q[]=idf_escape($c)." = $b";}echo"$uc ($ha) ON DUPLICATE KEY UPDATE ".implode(", ",$q).";\n";}else{$ha=($re?"\n":" ")."($ha)";if(!$hb){$hb=$uc.$ha;}elseif(strlen($hb)+2+strlen($ha)<$re){$hb.=",$ha";}else{$hb.=";\n";echo$hb;$hb=$uc.$ha;}}}}if($_POST["format"]=="sql"&&$W!="INSERT+UPDATE"&&$hb){$hb.=";\n";echo$hb;}}}}function
dump_headers($De,$gf=false){$aa=($De!=""?friendly_url($De):"adminer");$Fb=$_POST["output"];$Ab=($_POST["format"]=="sql"?"sql":($gf?"tar":"csv"));header("Content-Type: ".($Fb=="bz2"?"application/x-bzip":($Fb=="gz"?"application/x-gzip":($Ab=="tar"?"application/x-tar":($Ab=="sql"||$Fb!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($Fb!="text"){header("Content-Disposition: attachment; filename=$aa.$Ab".($Fb!="file"&&!ereg('[^0-9a-z]',$Fb)?".$Fb":""));}session_write_close();if($_POST["output"]=="bz2"){ob_start('bzcompress',1e6);}if($_POST["output"]=="gz"){ob_start('gzencode',1e6);}return$Ab;}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$ib=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$Ya=" onclick=\"return confirm('".lang(73)."');\"";$Ib='\'(?:\'\'|[^\'\\\\]|\\\\.)*\'|"(?:""|[^"\\\\]|\\\\.)*"';$hc=array("IN","OUT","INOUT");if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["callf"])){$_GET["call"]=$_GET["callf"];}if(isset($_GET["function"])){$_GET["procedure"]=$_GET["function"];}if(isset($_GET["download"])){$m=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$m-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($m)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$m=$_GET["table"];$o=fields($m);if(!$o){$n=error();}$I=($o?table_status($m):array());page_header(($o&&is_view($I)?lang(90):lang(91)).": ".h($m),$n);$r->selectLinks($I);$xa=$I["Comment"];if($xa!=""){echo"<p>".lang(85).": ".h($xa)."\n";}if($o){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(92)."<td>".lang(80).(support("comment")?"<td>".lang(85):"")."</thead>\n";foreach($o
as$d){echo"<tr".odd()."><th>".h($d["field"]),"<td>".h($d["full_type"]).($d["null"]?" <i>NULL</i>":"").($d["auto_increment"]?" <i>".lang(83)."</i>":""),(support("comment")?"<td>".nbsp($d["comment"]):""),"\n";}echo"</table>\n";if(!is_view($I)){echo"<h3>".lang(93)."</h3>\n";$K=indexes($m);if($K){echo"<table cellspacing='0'>\n";foreach($K
as$f=>$w){ksort($w["columns"]);$tc=array();foreach($w["columns"]as$c=>$b){$tc[]="<i>".h($b)."</i>".($w["lengths"][$c]?"(".$w["lengths"][$c].")":"");}echo"<tr title='".h($f)."'><th>$w[type]<td>".implode(", ",$tc)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($m).'">'.lang(94)."</a>\n";if(fk_support($I)){echo"<h3>".lang(75)."</h3>\n";$ea=foreign_keys($m);if($ea){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(95)."<td>".lang(96)."<td>".lang(77)."<td>".lang(97).($_!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($ea
as$f=>$B){$x=($B["db"]!=""?"<b>".h($B["db"])."</b>.":"").h($B["table"]);echo"<tr>","<th><i>".implode("</i>, <i>",array_map('h',$B["source"]))."</i>","<td><a href='".h($B["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($B["db"]),ME):ME)."table=".urlencode($B["table"])."'>$x</a>","(<i>".implode("</i>, <i>",array_map('h',$B["target"]))."</i>)","<td>$B[on_delete]\n","<td>$B[on_update]\n";if($_!="sqlite"){echo'<td><a href="'.h(ME.'foreign='.urlencode($m).'&name='.urlencode($f)).'">'.lang(98).'</a>';}}echo"</table>\n";}if($_!="sqlite"){echo'<p><a href="'.h(ME).'foreign='.urlencode($m).'">'.lang(99)."</a>\n";}}if(support("trigger")){echo"<h3>".lang(100)."</h3>\n";$vc=triggers($m);if($vc){echo"<table cellspacing='0'>\n";foreach($vc
as$c=>$b){echo"<tr valign='top'><td>$b[0]<td>$b[1]<th>".h($c)."<td><a href='".h(ME.'trigger='.urlencode($m).'&name='.urlencode($c))."'>".lang(98)."</a>\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($m).'">'.lang(101)."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header(lang(102),"",array(),DB);$ob=array();$Ve=array();preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$_COOKIE["adminer_schema"],$la,PREG_SET_ORDER);foreach($la
as$l=>$k){$ob[$k[1]]=array($k[2],$k[3]);$Ve[]="\n\t'".addcslashes($k[1],"\r\n'\\/")."': [ $k[2], $k[3] ]";}$Pb=0;$Ue=-1;$Na=array();$Se=array();$Oe=array();foreach(table_status()as$a){if(!isset($a["Engine"])){continue;}$rc=0;$Na[$a["Name"]]["fields"]=array();foreach(fields($a["Name"])as$f=>$d){$rc+=1.25;$d["pos"]=$rc;$Na[$a["Name"]]["fields"][$f]=$d;}$Na[$a["Name"]]["pos"]=($ob[$a["Name"]]?$ob[$a["Name"]]:array($Pb,0));if(fk_support($a)){foreach(foreign_keys($a["Name"])as$b){if(!$b["db"]){$ua=$Ue;if($ob[$a["Name"]][1]||$ob[$b["table"]][1]){$ua=min(floatval($ob[$a["Name"]][1]),floatval($ob[$b["table"]][1]))-1;}else{$Ue-=.1;}while($Oe[(string)$ua]){$ua-=.0001;}$Na[$a["Name"]]["references"][$b["table"]][(string)$ua]=array($b["source"],$b["target"]);$Se[$b["table"]][$a["Name"]][(string)$ua]=$b["target"];$Oe[(string)$ua]=true;}}}$Pb=max($Pb,$Na[$a["Name"]]["pos"][0]+2.5+$rc);}echo'<div id="schema" style="height: ',$Pb,'em;">
<script type="text/javascript">
tablePos = {',implode(",",$Ve)."\n",'};
em = document.getElementById(\'schema\').offsetHeight / ',$Pb,';
document.onmousemove = schemaMousemove;
document.onmouseup = schemaMouseup;
</script>
';foreach($Na
as$f=>$h){echo"<div class='table' style='top: ".$h["pos"][0]."em; left: ".$h["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($f).'"><b>'.h($f)."</b></a><br>\n";foreach($h["fields"]as$d){$b='<span'.type_class($d["type"]).' title="'.h($d["full_type"].($d["null"]?" NULL":'')).'">'.h($d["field"]).'</span>';echo($d["primary"]?"<i>$b</i>":$b)."<br>\n";}foreach((array)$h["references"]as$Vb=>$yc){foreach($yc
as$ua=>$Pc){$xc=$ua-$ob[$f][1];$l=0;foreach($Pc[0]as$Da){echo"<div class='references' title='".h($Vb)."' id='refs$ua-".($l++)."' style='left: $xc"."em; top: ".$h["fields"][$Da]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$xc)."em;'></div></div>\n";}}}foreach((array)$Se[$f]as$Vb=>$yc){foreach($yc
as$ua=>$A){$xc=$ua-$ob[$f][1];$l=0;foreach($A
as$qa){echo"<div class='references' title='".h($Vb)."' id='refd$ua-".($l++)."' style='left: $xc"."em; top: ".$h["fields"][$qa]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=arrow.gif) no-repeat right center;&amp;version=3.0.0'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$xc)."em;'></div></div>\n";}}}echo"</div>\n";}foreach($Na
as$f=>$h){foreach((array)$h["references"]as$Vb=>$yc){foreach($yc
as$ua=>$Pc){$Kc=$Pb;$sd=-10;foreach($Pc[0]as$c=>$Da){$ie=$h["pos"][0]+$h["fields"][$Da]["pos"];$Ee=$Na[$Vb]["pos"][0]+$Na[$Vb]["fields"][$Pc[1][$c]]["pos"];$Kc=min($Kc,$ie,$Ee);$sd=max($sd,$ie,$Ee);}echo"<div class='references' id='refl$ua' style='left: $ua"."em; top: $Kc"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($sd-$Kc)."em;'></div></div>\n";}}}echo'</div>
';}elseif(isset($_GET["dump"])){$m=$_GET["dump"];if($_POST){$Ie="";foreach(array("output","format","db_style","table_style","data_style")as$c){$Ie.="&$c=".urlencode($_POST[$c]);}cookie("adminer_export",substr($Ie,1));$Ab=dump_headers(($m!=""?$m:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));if($_POST["format"]=="sql"){echo"-- Adminer $Vc ".$ja[DRIVER]." dump

".($_!="sql"?"":"SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = ".q($g->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

");}$W=$_POST["db_style"];$z=array(DB);if(DB==""){$z=$_POST["databases"];if(is_string($z)){$z=explode("\n",rtrim(str_replace("\r","",$z),"\n"));}}foreach((array)$z
as$t){if($g->select_db($t)){if($_POST["format"]=="sql"&&ereg('CREATE',$W)&&($ga=$g->result("SHOW CREATE DATABASE ".idf_escape($t),1))){if($W=="DROP+CREATE"){echo"DROP DATABASE IF EXISTS ".idf_escape($t).";\n";}echo($W=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$ga):$ga).";\n";}if($_POST["format"]=="sql"){if($W){echo
use_sql($t).";\n\n";}if(in_array("CREATE+ALTER",array($W,$_POST["table_style"]))){echo"SET @adminer_alter = '';\n\n";}$kb="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Ra){foreach(get_rows("SHOW $Ra STATUS WHERE Db = ".q($t),null,"-- ")as$a){$kb.=($W!='DROP+CREATE'?"DROP $Ra IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$g->result("SHOW CREATE $Ra ".idf_escape($a["Name"]),2).";;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$a){$kb.=($W!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$g->result("SHOW CREATE EVENT ".idf_escape($a["Name"]),3).";;\n\n";}}if($kb){echo"DELIMITER ;;\n\n$kb"."DELIMITER ;\n\n";}}if($_POST["table_style"]||$_POST["data_style"]){$Z=array();foreach(table_status()as$a){$h=(DB==""||in_array($a["Name"],(array)$_POST["tables"]));$Le=(DB==""||in_array($a["Name"],(array)$_POST["data"]));if($h||$Le){if(!is_view($a)){if($Ab=="tar"){ob_start();}dump_table($a["Name"],($h?$_POST["table_style"]:""));if($Le){dump_data($a["Name"],$_POST["data_style"]);}if($_POST["format"]=="sql"&&$_POST["triggers"]){$vc=trigger_sql($a["Name"],$_POST["table_style"]);if($vc){echo"\nDELIMITER ;;\n$vc\nDELIMITER ;\n";}}if($Ab=="tar"){echo
tar_file((DB!=""?"":"$t/")."$a[Name].csv",ob_get_clean());}elseif($_POST["format"]=="sql"){echo"\n";}}elseif($_POST["format"]=="sql"){$Z[]=$a["Name"];}}}foreach($Z
as$Jc){dump_table($Jc,$_POST["table_style"],true);}if($Ab=="tar"){echo
pack("x512");}}if($W=="CREATE+ALTER"&&$_POST["format"]=="sql"){$j="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _table_name, _engine, _table_collation varchar(64);
	DECLARE _table_comment varchar(64);
	DECLARE done bool DEFAULT 0;
	DECLARE tables CURSOR FOR $j;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	OPEN tables;
	REPEAT
		FETCH tables INTO _table_name, _engine, _table_collation, _table_comment;
		IF NOT done THEN
			CASE _table_name";foreach(get_rows($j)as$a){$xa=q($a["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["TABLE_COMMENT"]):$a["TABLE_COMMENT"]);echo"
				WHEN ".q($a["TABLE_NAME"])." THEN
					".(isset($a["ENGINE"])?"IF _engine != '$a[ENGINE]' OR _table_collation != '$a[TABLE_COLLATION]' OR _table_comment != $xa THEN
						ALTER TABLE ".idf_escape($a["TABLE_NAME"])." ENGINE=$a[ENGINE] COLLATE=$a[TABLE_COLLATION] COMMENT=$xa;
					END IF":"BEGIN END").";";}echo"
				ELSE
					SET alter_command = CONCAT(alter_command, 'DROP TABLE `', REPLACE(_table_name, '`', '``'), '`;\\n');
			END CASE;
		END IF;
	UNTIL done END REPEAT;
	CLOSE tables;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;
";}if(in_array("CREATE+ALTER",array($W,$_POST["table_style"]))&&$_POST["format"]=="sql"){echo"SELECT @adminer_alter;\n";}}}exit;}page_header(lang(103),"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$pe=array('','USE','DROP+CREATE','CREATE');$Wd=array('','DROP+CREATE','CREATE');$Nd=array('','TRUNCATE+INSERT','INSERT');if($_=="sql"){$pe[]='CREATE+ALTER';$Wd[]='CREATE+ALTER';$Nd[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$a);if(!$a){$a=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");}$Ga=($_GET["dump"]=="");echo"<tr><th>".lang(104)."<td>".$r->dumpOutput(0,$a["output"])."\n","<tr><th>".lang(105)."<td>".$r->dumpFormat(0,$a["format"])."\n",($_=="sqlite"?"":"<tr><th>".lang(59)."<td>".html_select('db_style',$pe,$a["db_style"]).(support("routine")?checkbox("routines",1,$Ga,lang(106)):"").(support("event")?checkbox("events",1,$Ga,lang(107)):"")),"<tr><th>".lang(71)."<td>".html_select('table_style',$Wd,$a["table_style"]).checkbox("auto_increment",1,$a["table_style"],lang(83)).(support("trigger")?checkbox("triggers",1,$a["table_style"],lang(100)):""),"<tr><th>".lang(108)."<td>".html_select('data_style',$Nd,$a["data_style"]),'</table>
<p><input type="submit" value="',lang(103),'">

<table cellspacing="0">
';$rd=array();if(DB!=""){$Ga=($m!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$Ga onclick='formCheck(this, /^tables\\[/);'>".lang(71)."</label>","<th style='text-align: right;'><label>".lang(108)."<input type='checkbox' id='check-data'$Ga onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Z="";foreach(table_status()as$a){$f=$a["Name"];$kc=ereg_replace("_.*","",$f);$Ga=($m==""||$m==(substr($m,-1)=="%"?"$kc%":$f));$tc="<tr><td>".checkbox("tables[]",$f,$Ga,$f,"formUncheck('check-tables');");if(is_view($a)){$Z.="$tc\n";}else{echo"$tc<td align='right'><label>".($a["Engine"]=="InnoDB"&&$a["Rows"]?"~ ":"").$a["Rows"].checkbox("data[]",$f,$Ga,"","formUncheck('check-data');")."</label>\n";}$rd[$kc]++;}echo$Z;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($m==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".lang(59)."</label></thead>\n";$z=get_databases();if($z){foreach($z
as$t){if(!information_schema($t)){$kc=ereg_replace("_.*","",$t);echo"<tr><td>".checkbox("databases[]",$t,$m==""||$m=="$kc%",$t,"formUncheck('check-databases');")."</label>\n";$rd[$kc]++;}}}else{echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}}echo'</table>
</form>
';$gb=true;foreach($rd
as$c=>$b){if($c!=""&&$b>1){echo($gb?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$c%")."'>".h($c)."</a>";$gb=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(64));$i=$g->query("SELECT User, Host FROM mysql.user ORDER BY Host, User");if(!$i){echo'<form action=""><p>
';hidden_fields_get();echo
lang(18),': <input name="user">
',lang(17),': <input name="host" value="localhost">
<input type="hidden" name="grant" value="">
<input type="submit" value="',lang(29),'">
</form>
';$i=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");}echo"<table cellspacing='0'>\n","<thead><tr><th>&nbsp;<th>".lang(18)."<th>".lang(17)."</thead>\n";while($a=$i->fetch_assoc()){echo'<tr'.odd().'><td><a href="'.h(ME.'user='.urlencode($a["User"]).'&host='.urlencode($a["Host"])).'">'.lang(109).'</a><td>'.h($a["User"])."<td>".h($a["Host"])."\n";}echo"</table>\n",'<p><a href="'.h(ME).'user=">'.lang(110)."</a>";}elseif(isset($_GET["sql"])){restart_session();$zf=&get_session("queries");$fb=&$zf[DB];if(!$n&&$_POST["clear"]){$fb=array();redirect(remove_from_uri("history"));}page_header(lang(41),$n);if(!$n&&$_POST){$Ka=false;$j=$_POST["query"];if($_POST["webfile"]){$Ka=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$j=($Ka?fread($Ka,1e6):false);}elseif($_FILES["sql_file"]["error"]!=4){$j=get_file("sql_file",true);}if(is_string($j)){if(function_exists('memory_get_usage')){@ini_set("memory_limit",2*strlen($j)+memory_get_usage()+8e6);}if($j!=""&&strlen($j)<1e6&&(!$fb||end($fb)!=$j)){$fb[]=$j;}$Ec="(\\s|/\\*.*\\*/|(#|-- )[^\n]*\n|--\n)";if(!ini_bool("session.use_cookies")){session_write_close();}$od=";";$L=0;$Md=true;$H=connect();if(is_object($H)&&DB!=""){$H->select_db(DB);}$Ub=0;$td="";while($j!=""){if(!$L&&preg_match('~^\\s*DELIMITER\\s+(.+)~i',$j,$k)){$od=$k[1];$j=substr($j,strlen($k[0]));}else{preg_match('('.preg_quote($od).'|[\'`"]|/\\*|-- |#|$)',$j,$k,PREG_OFFSET_CAPTURE,$L);$sa=$k[0][0];$L=$k[0][1]+strlen($sa);if(!$sa&&$Ka&&!feof($Ka)){$j.=fread($Ka,1e5);}else{if(!$sa&&rtrim($j)==""){break;}if(!$sa||$sa==$od){$Md=false;$ta=substr($j,0,$k[0][1]);$Ub++;echo"<pre class='jush-$_' id='sql-$Ub'>".shorten_utf8(trim($ta),1000)."</pre>\n";ob_flush();flush();$vd=explode(" ",microtime());if(!$g->multi_query($ta)){echo"<p class='error'>".lang(111).": ".error()."\n";$td.=" <a href='#sql-$Ub'>$Ub</a>";if($_POST["error_stops"]){break;}}else{if(is_object($H)&&preg_match("~^$Ec*(USE)\\b~isU",$ta)){$H->query($ta);}do{$i=$g->store_result();$md=explode(" ",microtime());$he=" <span class='time'>(".lang(112,max(0,$md[0]-$vd[0]+$md[1]-$vd[1])).")</span>";if(is_object($i)){select($i,$H);echo"<p>".($i->num_rows?lang(113,$i->num_rows):"").$he;if($H&&preg_match("~^($Ec|\\()*SELECT\\b~isU",$ta)){$U="explain-$Ub";echo", <a href='#$U' onclick=\"return !toggle('$U');\">EXPLAIN</a>\n","<div id='$U' class='hidden'>\n";select(explain($H,$ta));echo"</div>\n";}}else{if(preg_match("~^$Ec*(CREATE|DROP|ALTER)$Ec+(DATABASE|SCHEMA)\\b~isU",$ta)){restart_session();set_session("dbs",null);session_write_close();}echo"<p class='message' title='".h($g->info)."'>".lang(114,$g->affected_rows)."$he\n";}$vd=$md;}while($g->next_result());}$j=substr($j,$L);$L=0;}else{while(preg_match('~'.($sa=='/*'?'\\*/':(ereg('-- |#',$sa)?"\n":"$sa|\\\\.")).'|$~s',$j,$k,PREG_OFFSET_CAPTURE,$L)){$ha=$k[0][0];$L=$k[0][1]+strlen($ha);if(!$ha&&$Ka&&!feof($Ka)){$j.=fread($Ka,1e6);}elseif($ha[0]!="\\"){break;}}}}}}if($td&&$Ub>1){echo"<p class='error'>".lang(111).": $td\n";}if($Md){echo"<p class='message'>".lang(115)."\n";}}else{echo"<p class='error'>".upload_error($j)."\n";}}echo'
<form action="" method="post" enctype="multipart/form-data">
<p>';$ta=$_GET["sql"];if($_POST){$ta=$_POST["query"];}elseif($_GET["history"]!=""){$ta=$fb[$_GET["history"]];}textarea("query",$ta,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>".(ini_bool("file_uploads")?lang(116).': <input type="file" name="sql_file">':lang(117)),'<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="',lang(118),'" title="Ctrl+Enter">
',checkbox("error_stops",1,$_POST["error_stops"],lang(119));print_fieldset("webfile",lang(120),$_POST["webfile"]);$fd=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$c=>$b){if(extension_loaded($b)){$fd[]=".$c";}}echo
lang(121,"<code>adminer.sql".($fd?"[".implode("|",$fd)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(122).'">',"</div></fieldset>\n";if($fb){print_fieldset("history",lang(123),$_GET["history"]!="");foreach($fb
as$c=>$b){echo'<a href="'.h(ME."sql=&history=$c").'">'.lang(29)."</a> <code class='jush-$_'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$b)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(124)."'>\n","</div></fieldset>\n";}echo'
</form>
';}elseif(isset($_GET["edit"])){$m=$_GET["edit"];$s=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$ma=(isset($_GET["select"])?$_POST["edit"]:$s);$o=fields($m);foreach($o
as$f=>$d){if(!isset($d["privileges"][$ma?"update":"insert"])||$r->fieldName($d)==""){unset($o[$f]);}}if($_POST&&!$n&&!isset($_GET["select"])){$ka=$_POST["referer"];if($_POST["insert"]){$ka=($ma?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$ka)){$ka=ME."select=".urlencode($m);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($m)," WHERE $s"),$ka,lang(125));}else{$q=array();foreach($o
as$f=>$d){$b=process_input($d);if($b!==false&&$b!==null){$q[idf_escape($f)]=($ma?"\n".idf_escape($f)." = $b":$b);}}if($ma){if(!$q){redirect($ka);}query_redirect("UPDATE".limit1(table($m)." SET".implode(",",$q),"\nWHERE $s"),$ka,lang(126));}else{$i=insert_into($m,$q);$Sd=($i?last_id():0);queries_redirect($ka,lang(127,($Sd?" $Sd":"")),$i);}}}$Ha=$r->tableName(table_status($m));page_header(($ma?lang(29):lang(128)),$n,array("select"=>array($m,$Ha)),$Ha);$a=null;if($_POST["save"]){$a=(array)$_POST["fields"];}elseif($s){$C=array();foreach($o
as$f=>$d){if(isset($d["privileges"]["select"])){$C[]=($_POST["clone"]&&$d["auto_increment"]?"'' AS ":(ereg("enum|set",$d["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$a=array();if($C){$F=get_rows("SELECT".limit(implode(", ",$C)." FROM ".table($m)," WHERE $s",(isset($_GET["select"])?2:1)));$a=(isset($_GET["select"])&&count($F)!=1?null:reset($F));}}echo'
<form action="" method="post" enctype="multipart/form-data">
';if($o){echo"<table cellspacing='0'>\n";foreach($o
as$f=>$d){echo"<tr><th>".$r->fieldName($d);$wa=$_GET["set"][bracket_escape($f)];$p=(isset($a)?($a[$f]!=""&&ereg("enum|set",$d["type"])?intval($a[$f]):$a[$f]):(!$ma&&$d["auto_increment"]?"":(isset($_GET["select"])?false:(isset($wa)?$wa:$d["default"]))));if(!$_POST["save"]&&is_string($p)){$p=$r->editVal($p,$d);}$O=($_POST["save"]?(string)$_POST["function"][$f]:($s&&$d["on_update"]=="CURRENT_TIMESTAMP"?"now":($p===false?null:(isset($p)?'':'NULL'))));if($d["type"]=="timestamp"&&$p=="CURRENT_TIMESTAMP"){$p="";$O="now";}input($d,$p,$O);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$P,'">
<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
';if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}if($o){echo"<input type='submit' value='".lang(129)."'>\n";if(!isset($_GET["select"])){echo'<input type="submit" name="insert" value="'.($ma?lang(130):lang(131))."\">\n";}}if($ma){echo"<input type='submit' name='delete' value='".lang(132)."'$Ya>\n";}echo'</form>
';}elseif(isset($_GET["create"])){$m=$_GET["create"];$de=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$ee=referencable_primary($m);$ea=array();foreach($ee
as$Ha=>$d){$ea[str_replace("`","``",$Ha)."`".str_replace("`","``",$d["field"])]=$Ha;}$Dc=array();$Cc=array();if($m!=""){$Dc=fields($m);$Cc=table_status($m);}if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"]){query_redirect("DROP TABLE ".table($m),substr(ME,0,-1),lang(133));}else{$o=array();$db=array();ksort($_POST["fields"]);$dd=reset($Dc);$Hb="FIRST";foreach($_POST["fields"]as$c=>$d){$B=$ea[$d["type"]];$Lc=(isset($B)?$ee[$B]:$d);if($d["field"]!=""){if(!$d["has_default"]){$d["default"]=null;}$wa=eregi_replace(" *on update CURRENT_TIMESTAMP","",$d["default"]);if($wa!=$d["default"]){$d["on_update"]="CURRENT_TIMESTAMP";$d["default"]=$wa;}if($c==$_POST["auto_increment_col"]){$d["auto_increment"]=true;}$Zd=process_field($d,$Lc);if($Zd!=process_field($dd,$dd)){$o[]=array($d["orig"],$Zd,$Hb);}if(isset($B)){$db[]=($m!=""?"ADD":" ")." FOREIGN KEY (".idf_escape($d["field"]).") REFERENCES ".idf_escape($ea[$d["type"]])." (".idf_escape($Lc["field"]).")".(in_array($d["on_delete"],$ib)?" ON DELETE $d[on_delete]":"");}$Hb="AFTER ".idf_escape($d["field"]);}elseif($d["orig"]!=""){$o[]=array($d["orig"]);}if($d["orig"]!=""){$dd=next($Dc);}}$vb="";if(in_array($_POST["partition_by"],$de)){$hd=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$c=>$b){$p=$_POST["partition_values"][$c];$hd[]="\nPARTITION ".idf_escape($b)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($p!=""?" ($p)":" MAXVALUE");}}$vb.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($hd?" (".implode(",",$hd)."\n)":($_POST["partitions"]?" PARTITIONS ".intval($_POST["partitions"]):""));}elseif($m!=""&&support("partitioning")){$vb.="\nREMOVE PARTITIONING";}$Ba=lang(134);if($m==""){cookie("adminer_engine",$_POST["Engine"]);$Ba=lang(135);}queries_redirect(ME."table=".urlencode($_POST["name"]),$Ba,alter_table($m,$_POST["name"],$o,$db,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$Cc["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$Cc["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?preg_replace('~\\D+~','',$_POST["Auto_increment"]):""),$vb));}}page_header(($m!=""?lang(25):lang(136)),$n,array("table"=>$m),$m);$a=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"")),"partition_names"=>array(""),);if($_POST){$a=$_POST;if($a["auto_increment_col"]){$a["fields"][$a["auto_increment_col"]]["auto_increment"]=true;}process_fields($a["fields"]);}elseif($m!=""){$a=$Cc;$a["name"]=$m;$a["fields"]=array();if(!$_GET["auto_increment"]){$a["Auto_increment"]="";}foreach($Dc
as$d){$d["has_default"]=isset($d["default"]);if($d["on_update"]){$d["default"].=" ON UPDATE $d[on_update]";}$a["fields"][]=$d;}if(support("partitioning")){$Wb="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($m);$i=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Wb ORDER BY PARTITION_ORDINAL_POSITION LIMIT 1");list($a["partition_by"],$a["partitions"],$a["partition"])=$i->fetch_row();$a["partition_names"]=array();$a["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Wb AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$Tc){$a["partition_names"][]=$Tc["PARTITION_NAME"];$a["partition_values"][]=$Tc["PARTITION_DESCRIPTION"];}$a["partition_names"][]="";}}$X=collations();$ld=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($ld&&count($a["fields"])>$ld){echo"<p class='error'>".h(lang(137,'suhosin.post.max_vars','suhosin.request.max_vars'))."\n";}$kd=engines();foreach($kd
as$yb){if(!strcasecmp($yb,$a["Engine"])){$a["Engine"]=$yb;break;}}echo'
<form action="" method="post" id="form">
<p>
',lang(138),': <input name="name" maxlength="64" value="',h($a["name"]),'">
',($kd?html_select("Engine",array(""=>"(".lang(139).")")+$kd,$a["Engine"]):""),' ',($X&&!ereg("sqlite|mssql",$_)?html_select("Collation",array(""=>"(".lang(76).")")+$X,$a["Collation"]):""),' <input type="submit" value="',lang(129),'">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$Jb=edit_fields($a["fields"],$X,"TABLE",$ld,$ea,$a["Comment"]!="");echo'</table>
<p>
',lang(83),': <input name="Auto_increment" size="6" value="',h($a["Auto_increment"]),'">
<script type="text/javascript">
document.write(\'<label><input type="checkbox" onclick="columnShow(this.checked, 5);">',lang(84),'<\\/label>\');
</script>
',(support("comment")?checkbox("","",$Jb,lang(85),"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();").' <input id="Comment" name="Comment" value="'.h($a["Comment"]).'" maxlength="60"'.($Jb?'':' class="hidden"').'>':''),'<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="',lang(129),'">
';if(strlen($_GET["create"])){echo'<input type="submit" name="drop" value="',lang(72),'"',$Ya,'>';}if(support("partitioning")){$Yd=ereg('RANGE|LIST',$a["partition_by"]);print_fieldset("partition",lang(140),$a["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$de,$a["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($a["partition"]),'">)
',lang(141),': <input name="partitions" size="2" value="',h($a["partitions"]),'"',($Yd||!$a["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($Yd?"":" class='hidden'"),'>
<thead><tr><th>',lang(142),'<th>',lang(143),'</thead>
';foreach($a["partition_names"]as$c=>$b){echo'<tr>','<td><input name="partition_names[]" value="'.h($b).'"'.($c==count($a["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($a["partition_values"][$c]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$m=$_GET["indexes"];$Fc=array("PRIMARY","UNIQUE","INDEX");$I=table_status($m);if(ereg("MyISAM|Maria",$I["Engine"])){$Fc[]="FULLTEXT";}$K=indexes($m);if($_=="sqlite"){unset($Fc[0]);unset($K[""]);}if($_POST&&!$n&&!$_POST["add"]){$u=array();foreach($_POST["indexes"]as$w){if(in_array($w["type"],$Fc)){$A=array();$Zb=array();$q=array();ksort($w["columns"]);foreach($w["columns"]as$c=>$J){if($J!=""){$ca=$w["lengths"][$c];$q[]=idf_escape($J).($ca?"(".intval($ca).")":"");$A[]=$J;$Zb[]=($ca?$ca:null);}}if($A){foreach($K
as$f=>$zb){ksort($zb["columns"]);ksort($zb["lengths"]);if($w["type"]==$zb["type"]&&array_values($zb["columns"])===$A&&(!$zb["lengths"]||array_values($zb["lengths"])===$Zb)){unset($K[$f]);continue
2;}}$u[]=array($w["type"],"(".implode(", ",$q).")");}}}foreach($K
as$f=>$zb){$u[]=array($zb["type"],idf_escape($f),"DROP");}if(!$u){redirect(ME."table=".urlencode($m));}queries_redirect(ME."table=".urlencode($m),lang(144),alter_indexes($m,$u));}page_header(lang(93),$n,array("table"=>$m),$m);$o=array_keys(fields($m));$a=array("indexes"=>$K);if($_POST){$a=$_POST;if($_POST["add"]){foreach($a["indexes"]as$c=>$w){if($w["columns"][count($w["columns"])]!=""){$a["indexes"][$c]["columns"][]="";}}$w=end($a["indexes"]);if($w["type"]||array_filter($w["columns"],'strlen')||array_filter($w["lengths"],'strlen')){$a["indexes"][]=array("columns"=>array(1=>""));}}}else{foreach($a["indexes"]as$c=>$w){$a["indexes"][$c]["columns"][]="";}$a["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>',lang(145),'<th>',lang(146),'</thead>
';$oa=1;foreach($a["indexes"]as$w){echo"<tr><td>".html_select("indexes[$oa][type]",array(-1=>"")+$Fc,$w["type"],($oa==count($a["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($w["columns"]);$l=1;foreach($w["columns"]as$J){echo"<span>".html_select("indexes[$oa][columns][$l]",array(-1=>"")+$o,$J,($l==count($w["columns"])?"indexesAddColumn(this);":1)),"<input name='indexes[$oa][lengths][$l]' size='2' value='".h($w["lengths"][$l])."'> </span>";$l++;}$oa++;}echo'</table>
<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="',lang(129),'">
<noscript><p><input type="submit" name="add" value="',lang(86),'"></noscript>
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$n&&!isset($_POST["add_x"])){restart_session();if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(147),drop_databases(array(DB)));}elseif(DB!==$_POST["name"]){if(DB!=""){$_GET["db"]=$_POST["name"];queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($_POST["name"]),lang(148),rename_database($_POST["name"],$_POST["collation"]));}else{$z=explode("\n",str_replace("\r","",$_POST["name"]));$be=true;$qb="";foreach($z
as$t){if(count($z)==1||$t!=""){if(!create_database($t,$_POST["collation"])){$be=false;}$qb=$t;}}queries_redirect(ME."db=".urlencode($qb),lang(149),$be);}}else{if(!$_POST["collation"]){redirect(substr(ME,0,-1));}query_redirect("ALTER DATABASE ".idf_escape($_POST["name"])." COLLATE ".q($_POST["collation"]),substr(ME,0,-1),lang(150));}}page_header(DB!=""?lang(151):lang(152),$n,array(),DB);$X=collations();$f=DB;$fc=null;if($_POST){$f=$_POST["name"];$fc=$_POST["collation"];}elseif(DB!=""){$fc=db_collation(DB,$X);}elseif($_=="sql"){foreach(get_vals("SHOW GRANTS")as$fa){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$fa,$k)&&$k[1]){$f=stripcslashes(idf_unescape("`$k[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($f,"\n")?'<textarea name="name" rows="10" cols="40">'.h($f).'</textarea><br>':'<input name="name" value="'.h($f).'" maxlength="64">')."\n".($X?html_select("collation",array(""=>"(".lang(76).")")+$X,$fc):""),'<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="',lang(129),'">
';if(DB!=""){echo"<input type='submit' name='drop' value='".lang(72)."'$Ya>\n";}elseif(!$_POST["add_x"]&&$_GET["db"]==""){echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.0' alt='+' title='".lang(86)."'>\n";}echo'</form>
';}elseif(isset($_GET["scheme"])){if($_POST&&!$n){$x=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"]){query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$x,lang(153));}else{$x.=urlencode($_POST["name"]);if($_GET["ns"]==""){query_redirect("CREATE SCHEMA ".idf_escape($_POST["name"]),$x,lang(154));}elseif($_GET["ns"]!=$_POST["name"]){query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($_POST["name"]),$x,lang(155));}else{redirect($x);}}}page_header($_GET["ns"]!=""?lang(156):lang(157),$n);$a=array("name"=>$_GET["ns"]);if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p><input name="name" value="',h($a["name"]),'">
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="',lang(129),'">
';if($_GET["ns"]!=""){echo"<input type='submit' name='drop' value='".lang(72)."'$Ya>\n";}echo'</form>
';}elseif(isset($_GET["call"])){$Ta=$_GET["call"];page_header(lang(158).": ".h($Ta),$n);$Ra=routine($Ta,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Mb=array();$kb=array();foreach($Ra["fields"]as$l=>$d){if(substr($d["inout"],-3)=="OUT"){$kb[$l]="@".idf_escape($d["field"])." AS ".idf_escape($d["field"]);}if(!$d["inout"]||substr($d["inout"],0,2)=="IN"){$Mb[]=$l;}}if(!$n&&$_POST){$Vd=array();foreach($Ra["fields"]as$c=>$d){if(in_array($c,$Mb)){$b=process_input($d);if($b===false){$b="''";}if(isset($kb[$c])){$g->query("SET @".idf_escape($d["field"])." = $b");}}$Vd[]=(isset($kb[$c])?"@".idf_escape($d["field"]):$b);}$j=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($Ta)."(".implode(", ",$Vd).")";echo"<p><code class='jush-$_'>".h($j)."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".lang(29)."</a>\n";if(!$g->multi_query($j)){echo"<p class='error'>".error()."\n";}else{do{$i=$g->store_result();if(is_object($i)){select($i);}else{echo"<p class='message'>".lang(159,$g->affected_rows)."\n";}}while($g->next_result());if($kb){select($g->query("SELECT ".implode(", ",$kb)));}}}echo'
<form action="" method="post">
';if($Mb){echo"<table cellspacing='0'>\n";foreach($Mb
as$c){$d=$Ra["fields"][$c];$f=$d["field"];echo"<tr><th>".$r->fieldName($d);$p=$_POST["fields"][$f];if($p!=""&&ereg("enum|set",$d["type"])){$p=intval($p);}input($d,$p,(string)$_POST["function"][$f]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="',lang(158),'">
</form>
';}elseif(isset($_GET["foreign"])){$m=$_GET["foreign"];if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"]){query_redirect("ALTER TABLE ".table($m)."\nDROP ".($_=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($m),lang(160));}else{$Da=array_filter($_POST["source"],'strlen');ksort($Da);$qa=array();foreach($Da
as$c=>$b){$qa[$c]=$_POST["target"][$c];}query_redirect("ALTER TABLE ".table($m).($_GET["name"]!=""?"\nDROP FOREIGN KEY ".idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$Da)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$qa)).")".(in_array($_POST["on_delete"],$ib)?" ON DELETE $_POST[on_delete]":"").(in_array($_POST["on_update"],$ib)?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($m),($_GET["name"]!=""?lang(161):lang(162)));$n=lang(163)."<br>$n";}}page_header(lang(164),$n,array("table"=>$m),$m);$a=array("table"=>$m,"source"=>array(""));if($_POST){$a=$_POST;ksort($a["source"]);if($_POST["add"]){$a["source"][]="";}elseif($_POST["change"]||$_POST["change-js"]){$a["target"]=array();}}elseif($_GET["name"]!=""){$ea=foreign_keys($m);$a=$ea[$_GET["name"]];$a["source"][]="";}$Da=array_keys(fields($m));$qa=($m===$a["table"]?$Da:array_keys(fields($a["table"])));$Ud=array();foreach(table_status()as$f=>$I){if(fk_support($I)){$Ud[]=$f;}}echo'
<form action="" method="post">
<p>
';if($a["db"]==""){echo
lang(165),':
',html_select("table",$Ud,$a["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(166),'"></noscript>
<table cellspacing="0">
<thead><tr><th>',lang(95),'<th>',lang(96),'</thead>
';$oa=0;foreach($a["source"]as$c=>$b){echo"<tr>","<td>".html_select("source[".intval($c)."]",array(-1=>"")+$Da,$b,($oa==count($a["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".intval($c)."]",$qa,$a["target"][$c]);$oa++;}echo'</table>
<p>
',lang(77),': ',html_select("on_delete",array(-1=>"")+$ib,$a["on_delete"]),' ',lang(97),': ',html_select("on_update",array(-1=>"")+$ib,$a["on_update"]),'<p>
<input type="submit" value="',lang(129),'">
<noscript><p><input type="submit" name="add" value="',lang(167),'"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="',lang(72),'"',$Ya,'>';}echo'<input type="hidden" name="token" value="',$P,'">
</form>
';}elseif(isset($_GET["view"])){$m=$_GET["view"];$Xa=false;if($_POST&&!$n){$Xa=drop_create("DROP VIEW ".table($m),"CREATE VIEW ".table($_POST["name"])." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($_POST["name"])),lang(168),lang(169),lang(170),$m);}page_header(($m!=""?lang(24):lang(171)),$n,array("table"=>$m),$m);$a=array();if($_POST){$a=$_POST;}elseif($m!=""){$a=view($m);$a["name"]=$m;}echo'
<form action="" method="post">
<p>',lang(172),': <input name="name" value="',h($a["name"]),'" maxlength="64">
<p>';textarea("select",$a["select"]);echo'<p>
<input type="hidden" name="token" value="',$P,'">
';if($Xa){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="',lang(129),'">
</form>
';}elseif(isset($_GET["event"])){$jb=$_GET["event"];$ce=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$zd=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$n){if($_POST["drop"]){query_redirect("DROP EVENT ".idf_escape($jb),substr(ME,0,-1),lang(173));}elseif(in_array($_POST["INTERVAL_FIELD"],$ce)&&isset($zd[$_POST["STATUS"]])){$Kd="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";query_redirect(($jb!=""?"ALTER EVENT ".idf_escape($jb).$Kd.($jb!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$Kd)."\n".$zd[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"])." DO\n$_POST[EVENT_DEFINITION]",substr(ME,0,-1),($jb!=""?lang(174):lang(175)));}}page_header(($jb!=""?lang(176).": ".h($jb):lang(177)),$n);$a=array();if($_POST){$a=$_POST;}elseif($jb!=""){$F=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($jb));$a=reset($F);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(172),'<td><input name="EVENT_NAME" value="',h($a["EVENT_NAME"]),'" maxlength="64">
<tr><th>',lang(178),'<td><input name="STARTS" value="',h("$a[EXECUTE_AT]$a[STARTS]"),'">
<tr><th>',lang(179),'<td><input name="ENDS" value="',h($a["ENDS"]),'">
<tr><th>',lang(180),'<td><input name="INTERVAL_VALUE" value="',h($a["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$ce,$a["INTERVAL_FIELD"]),'<tr><th>',lang(67),'<td>',html_select("STATUS",$zd,$a["STATUS"]),'<tr><th>',lang(85),'<td><input name="EVENT_COMMENT" value="',h($a["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$a["ON_COMPLETION"]=="PRESERVE",lang(181)),'</table>
<p>';textarea("EVENT_DEFINITION",$a["EVENT_DEFINITION"]);echo'<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="',lang(129),'">
';if($jb!=""){echo'<input type="submit" name="drop" value="',lang(72),'"',$Ya,'>';}echo'</form>
';}elseif(isset($_GET["procedure"])){$Ta=$_GET["procedure"];$Ra=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$Xa=false;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$q=array();$o=(array)$_POST["fields"];ksort($o);foreach($o
as$d){if($d["field"]!=""){$q[]=(in_array($d["inout"],$hc)?"$d[inout] ":"").idf_escape($d["field"]).process_type($d,"CHARACTER SET");}}$Xa=drop_create("DROP $Ra ".idf_escape($Ta),"CREATE $Ra ".idf_escape($_POST["name"])." (".implode(", ",$q).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"")."\n$_POST[definition]",substr(ME,0,-1),lang(182),lang(183),lang(184),$Ta);}page_header(($Ta!=""?(isset($_GET["function"])?lang(185):lang(186)).": ".h($Ta):(isset($_GET["function"])?lang(187):lang(188))),$n);$X=get_vals("SHOW CHARACTER SET");sort($X);$a=array("fields"=>array());if($_POST){$a=$_POST;$a["fields"]=(array)$a["fields"];process_fields($a["fields"]);}elseif($Ta!=""){$a=routine($Ta,$Ra);$a["name"]=$Ta;}echo'
<form action="" method="post" id="form">
<p>',lang(172),': <input name="name" value="',h($a["name"]),'" maxlength="64">
<table cellspacing="0" class="nowrap">
';edit_fields($a["fields"],$X,$Ra);if(isset($_GET["function"])){echo"<tr><td>".lang(189);edit_type("returns",$a["returns"],$X);}echo'</table>
<p>';textarea("definition",$a["definition"]);echo'<p>
<input type="hidden" name="token" value="',$P,'">
';if($Xa){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="',lang(129),'">
';if($Ta!=""){echo'<input type="submit" name="drop" value="',lang(72),'"',$Ya,'>';}echo'</form>
';}elseif(isset($_GET["sequence"])){$Cb=$_GET["sequence"];if($_POST&&!$n){$x=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP SEQUENCE ".idf_escape($Cb),$x,lang(190));}elseif($Cb==""){query_redirect("CREATE SEQUENCE ".idf_escape($_POST["name"]),$x,lang(191));}elseif($Cb!=$_POST["name"]){query_redirect("ALTER SEQUENCE ".idf_escape($Cb)." RENAME TO ".idf_escape($_POST["name"]),$x,lang(192));}else{redirect($x);}}page_header($Cb!=""?lang(193).": ".h($Cb):lang(194),$n);$a=array("name"=>$Cb);if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p><input name="name" value="',h($a["name"]),'">
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="',lang(129),'">
';if($Cb!=""){echo"<input type='submit' name='drop' value='".lang(72)."'$Ya>\n";}echo'</form>
';}elseif(isset($_GET["type"])){$Gc=$_GET["type"];if($_POST&&!$n){$x=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP TYPE ".idf_escape($Gc),$x,lang(195));}else{query_redirect("CREATE TYPE ".idf_escape($_POST["name"])." $_POST[as]",$x,lang(196));}}page_header($Gc!=""?lang(197).": ".h($Gc):lang(198),$n);$a["as"]="AS ";if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p>
<input type="hidden" name="token" value="',$P,'">
';if($Gc!=""){echo"<input type='submit' name='drop' value='".lang(72)."'$Ya>\n";}else{echo"<input name='name' value='".h($a['name'])."'>\n";textarea("as",$a["as"]);echo"<p><input type='submit' value='".lang(129)."'>\n";}echo'</form>
';}elseif(isset($_GET["trigger"])){$m=$_GET["trigger"];$Ic=trigger_options();$Rd=array("INSERT","UPDATE","DELETE");$Xa=false;if($_POST&&!$n&&in_array($_POST["Timing"],$Ic["Timing"])&&in_array($_POST["Event"],$Rd)&&in_array($_POST["Type"],$Ic["Type"])){$Qd=" $_POST[Timing] $_POST[Event]";$Bb=" ON ".table($m);$Xa=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($_=="pgsql"?$Bb:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($_=="mssql"?$Bb.$Qd:$Qd.$Bb)." $_POST[Type]\n$_POST[Statement]",ME."table=".urlencode($m),lang(199),lang(200),lang(201),$_GET["name"]);}page_header(($_GET["name"]!=""?lang(202).": ".h($_GET["name"]):lang(203)),$n,array("table"=>$m));$a=array("Trigger"=>$m."_bi");if($_POST){$a=$_POST;}elseif($_GET["name"]!=""){$a=trigger($_GET["name"]);}echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(204),'<td>',html_select("Timing",$Ic["Timing"],$a["Timing"],"if (/^".h(preg_quote($m,"/"))."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".h(addcslashes($m,"\r\n'\\"))."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>',lang(205),'<td>',html_select("Event",$Rd,$a["Event"],"this.form['Timing'].onchange();"),'<tr><th>',lang(80),'<td>',html_select("Type",$Ic["Type"],$a["Type"]),'</table>
<p>',lang(172),': <input name="Trigger" value="',h($a["Trigger"]),'" maxlength="64">
<p>';textarea("Statement",$a["Statement"]);echo'<p>
<input type="hidden" name="token" value="',$P,'">
';if($Xa){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="',lang(129),'">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="',lang(72),'"',$Ya,'>';}echo'</form>
';}elseif(isset($_GET["user"])){$_d=$_GET["user"];$na=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$a){foreach(explode(",",($a["Privilege"]=="Grant option"?"":$a["Context"]))as$Hc){$na[$Hc][$a["Privilege"]]=$a["Comment"];}}$na["Server Admin"]+=$na["File access on server"];$na["Databases"]["Create routine"]=$na["Procedures"]["Create routine"];unset($na["Procedures"]["Create routine"]);$na["Columns"]=array();foreach(array("Select","Insert","Update","References")as$b){$na["Columns"][$b]=$na["Tables"][$b];}unset($na["Server Admin"]["Usage"]);foreach($na["Tables"]as$c=>$b){unset($na["Databases"][$c]);}$wc=array();if($_POST){foreach($_POST["objects"]as$c=>$b){$wc[$b]=(array)$wc[$b]+(array)$_POST["grants"][$c];}}$mb=array();$Oc="";if(isset($_GET["host"])&&($i=$g->query("SHOW GRANTS FOR ".q($_d)."@".q($_GET["host"])))){while($a=$i->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$a[0],$k)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$k[1],$la,PREG_SET_ORDER)){foreach($la
as$b){if($b[1]!="USAGE"){$mb["$k[2]$b[2]"][$b[1]]=true;}if(ereg(' WITH GRANT OPTION',$a[0])){$mb["$k[2]$b[2]"]["GRANT OPTION"]=true;}}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$a[0],$k)){$Oc=$k[1];}}}if($_POST&&!$n){$ac=(isset($_GET["host"])?q($_d)."@".q($_GET["host"]):"''");$lb=q($_POST["user"])."@".q($_POST["host"]);$Id=q($_POST["pass"]);if($_POST["drop"]){query_redirect("DROP USER $ac",ME."privileges=",lang(206));}else{if($ac!=$lb){$n=!queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $lb IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $Id");}elseif($_POST["pass"]!=$Oc||!$_POST["hashed"]){queries("SET PASSWORD FOR $lb = ".($_POST["hashed"]?$Id:"PASSWORD($Id)"));}if(!$n){$pc=array();foreach($wc
as$Za=>$fa){if(isset($_GET["grant"])){$fa=array_filter($fa);}$fa=array_keys($fa);if(isset($_GET["grant"])){$pc=array_diff(array_keys(array_filter($wc[$Za],'strlen')),$fa);}elseif($ac==$lb){$Pd=array_keys((array)$mb[$Za]);$pc=array_diff($Pd,$fa);$fa=array_diff($fa,$Pd);unset($mb[$Za]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Za,$k)&&(!grant("REVOKE",$pc,$k[2]," ON $k[1] FROM $lb")||!grant("GRANT",$fa,$k[2]," ON $k[1] TO $lb"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($ac!=$lb){queries("DROP USER $ac");}elseif(!isset($_GET["grant"])){foreach($mb
as$Za=>$pc){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Za,$k)){grant("REVOKE",array_keys($pc),$k[2]," ON $k[1] FROM $lb");}}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(207):lang(208)),!$n);if($ac!=$lb){$g->query("DROP USER $lb");}}}page_header((isset($_GET["host"])?lang(18).": ".h("$_d@$_GET[host]"):lang(110)),$n,array("privileges"=>array('',lang(64))));if($_POST){$a=$_POST;$mb=$wc;}else{$a=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$a["pass"]=$Oc;if($Oc!=""){$a["hashed"]=true;}$mb[""]=true;}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(18),'<td><input name="user" maxlength="16" value="',h($a["user"]),'">
<tr><th>',lang(17),'<td><input name="host" maxlength="60" value="',h($a["host"]),'">
<tr><th>',lang(19),'<td><input id="pass" name="pass" value="',h($a["pass"]),'">
';if(!$a["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$a["hashed"],lang(209),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/grant.html'>".lang(64)."</a>";$l=0;foreach($mb
as$Za=>$fa){echo'<th>'.($Za!="*.*"?"<input name='objects[$l]' value='".h($Za)."' size='10'>":"<input type='hidden' name='objects[$l]' value='*.*' size='10'>*.*");$l++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(17),"Databases"=>lang(59),"Tables"=>lang(91),"Columns"=>lang(92),"Procedures"=>lang(210),)as$Hc=>$qc){foreach((array)$na[$Hc]as$zc=>$xa){echo"<tr".odd()."><td".($qc?">$qc<td":" colspan='2'").' lang="en" title="'.h($xa).'">'.h($zc);$l=0;foreach($mb
as$Za=>$fa){$f="'grants[$l][".h(strtoupper($zc))."]'";$p=$fa[strtoupper($zc)];if($Hc=="Server Admin"&&$Za!=(isset($mb["*.*"])?"*.*":"")){echo"<td>&nbsp;";}elseif(isset($_GET["grant"])){echo"<td><select name=$f><option><option value='1'".($p?" selected":"").">".lang(211)."<option value='0'".($p=="0"?" selected":"").">".lang(212)."</select>";}else{echo"<td align='center'><input type='checkbox' name=$f value='1'".($p?" checked":"").($zc=="All privileges"?" id='grants-$l-all'":($zc=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$l-all');\"")).">";}$l++;}}}echo"</table>\n",'<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="',lang(129),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(72),'"',$Ya,'>';}echo'</form>
';}elseif(isset($_GET["processlist"])){if($_POST&&!$n){$pd=0;foreach((array)$_POST["kill"]as$b){if(queries("KILL ".ereg_replace("[^0-9]+","",$b))){$pd++;}}queries_redirect(ME."processlist=",lang(213,$pd),$pd||!$_POST["kill"]);}page_header(lang(65),$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" class="nowrap">
';foreach(get_rows("SHOW FULL PROCESSLIST")as$l=>$a){if(!$l){echo"<thead><tr lang='en'><th>&nbsp;<th>".implode("<th>",array_keys($a))."</thead>\n";}echo"<tr".odd()."><td>".checkbox("kill[]",$a["Id"],0)."<td>".implode("<td>",array_map('nbsp',$a))."\n";}echo'</table>
<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="',lang(214),'">
</form>
';}elseif(isset($_GET["select"])){$m=$_GET["select"];$I=table_status($m);$K=indexes($m);$o=fields($m,1);$ea=column_foreign_keys($m);$Ge=array();$A=array();$Db=null;foreach($o
as$c=>$d){$f=$r->fieldName($d);if(isset($d["privileges"]["select"])&&$f!=""){$A[$c]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$d["type"])){$Db=$r->selectLengthProcess();}}$Ge+=$d["privileges"];}list($C,$va)=$r->selectColumnsProcess($A,$K);$s=$r->selectSearchProcess($o,$K);$ub=$r->selectOrderProcess($o,$K);$N=$r->selectLimitProcess();$Wb=($C?implode(", ",$C):"*")."\nFROM ".table($m);$wd=($va&&count($va)<count($C)?"\nGROUP BY ".implode(", ",$va):"").($ub?"\nORDER BY ".implode(", ",$ub):"");if($_POST&&!$n){$He="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Ia=$Qc=null;foreach($K
as$w){if($w["type"]=="PRIMARY"){$Ia=array_flip($w["columns"]);$Qc=($C?$Ia:array());break;}}foreach($C
as$c=>$b){$b=$_GET["columns"][$c];if(!$b["fun"]){unset($Qc[$b["col"]]);}}if($_POST["export"]){dump_headers($m);dump_table($m,"");if($_POST["format"]!="sql"){$a=array_keys($o);if($C){$a=array();foreach($C
as$b){$a[]=(ereg('^`.*`$',$b)?idf_unescape($b):$b);}}dump_csv($a);}if(!is_array($_POST["check"])||$Qc===array()){$ed=$s;if(is_array($_POST["check"])){$ed[]="($He)";}dump_data($m,"INSERT","SELECT $Wb".($ed?"\nWHERE ".implode(" AND ",$ed):"").$wd);}else{$We=array();foreach($_POST["check"]as$b){$We[]="(SELECT".limit($Wb,"\nWHERE ".($s?implode(" AND ",$s)." AND ":"").where_check($b).$wd,1).")";}dump_data($m,"INSERT",implode(" UNION ALL ",$We));}exit;}if(!$r->selectEmailProcess($s,$ea)){if($_POST["save"]||$_POST["delete"]){$i=true;$xb=0;$j=table($m);$q=array();if(!$_POST["delete"]){foreach($A
as$f=>$b){$b=process_input($o[$f]);if($b!==null){if($_POST["clone"]){$q[idf_escape($f)]=($b!==false?$b:idf_escape($f));}elseif($b!==false){$q[]=idf_escape($f)." = $b";}}}$j.=($_POST["clone"]?" (".implode(", ",array_keys($q)).")\nSELECT ".implode(", ",$q)."\nFROM ".table($m):" SET\n".implode(",\n",$q));}if($_POST["delete"]||$q){$Bc="UPDATE";if($_POST["delete"]){$Bc="DELETE";$j="FROM $j";}if($_POST["clone"]){$Bc="INSERT";$j="INTO $j";}if($_POST["all"]||($Qc===array()&&$_POST["check"])||count($va)<count($C)){$i=queries($Bc." $j".($_POST["all"]?($s?"\nWHERE ".implode(" AND ",$s):""):"\nWHERE $He"));$xb=$g->affected_rows;}else{foreach((array)$_POST["check"]as$b){$i=queries($Bc.limit1($j,"\nWHERE ".where_check($b)));if(!$i){break;}$xb+=$g->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(215,$xb),$i);}elseif(!$_POST["import"]){if(!$_POST["val"]){$n=lang(216);}else{$i=true;$xb=0;foreach($_POST["val"]as$pb=>$a){$q=array();foreach($a
as$c=>$b){$c=bracket_escape($c,1);$q[]=idf_escape($c)." = ".$r->processInput($o[$c],$b);}$i=queries("UPDATE".limit1(table($m)." SET ".implode(", ",$q)," WHERE ".where_check($pb).($s?" AND ".implode(" AND ",$s):"")));if(!$i){break;}$xb+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(215,$xb),$i);}}elseif(is_string($pa=get_file("csv_file",true))){$pa=preg_replace("~^\xEF\xBB\xBF~",'',$pa);$i=true;$eb=array_keys($o);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$pa,$la);$xb=count($la[0]);begin();$Oa=($_POST["separator"]=="csv"?",":";");foreach($la[0]as$c=>$b){preg_match_all("~((\"[^\"]*\")+|[^$Oa]*)$Oa~",$b.$Oa,$yd);if(!$c&&!array_diff($yd[1],$eb)){$eb=$yd[1];$xb--;}else{$q=array();foreach($yd[1]as$l=>$Mc){$q[idf_escape($eb[$l])]=($Mc==""&&$o[$eb[$l]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Mc))));}$i=insert_update($m,$q,$Ia);if(!$i){break;}}}if($i){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(217,$xb),$i);queries("ROLLBACK");}else{$n=upload_error($pa);}}}$Ha=$r->tableName($I);page_header(lang(31).": $Ha",$n);session_write_close();$q=null;if(isset($Ge["insert"])){$q="";foreach((array)$_GET["where"]as$b){if(count($ea[$b["col"]])==1&&($b["op"]=="="||(!$b["op"]&&!ereg('[_%]',$b["val"])))){$q.="&set".urlencode("[".bracket_escape($b["col"])."]")."=".urlencode($b["val"]);}}}$r->selectLinks($I,$q);if(!$A){echo"<p class='error'>".lang(218).($o?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($m).'">',"</div>\n";$r->selectColumnsPrint($C,$A);$r->selectSearchPrint($s,$A,$K);$r->selectOrderPrint($ub,$A,$K);$r->selectLimitPrint($N);$r->selectLengthPrint($Db);$r->selectActionPrint($Db);echo"</form>\n";$Y=$_GET["page"];if($Y=="last"){$Ua=$g->result("SELECT COUNT(*) FROM ".table($m).($s?" WHERE ".implode(" AND ",$s):""));$Y=floor(($Ua-1)/$N);}$j="SELECT".limit((intval($N)&&$va&&count($va)<count($C)&&$_=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Wb,($s?"\nWHERE ".implode(" AND ",$s):"").$wd,($N!=""?intval($N):null),($Y?$N*$Y:0),"\n");echo$r->selectQuery($j);$i=$g->query($j);if(!$i){echo"<p class='error'>".error()."\n";}else{if($_=="mssql"){$i->seek($N*$Y);}$Ac=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$F=array();while($a=$i->fetch_assoc()){$F[]=$a;}if($_GET["page"]!="last"){$Ua=(intval($N)&&$va&&count($va)<count($C)?($_=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($j) x")):count($F));}if(!$F){echo"<p class='message'>".lang(74)."\n";}else{$je=$r->backwardKeys($m,$Ha);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n","<thead><tr>".(!$va&&$C?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(109)."</a>");$Fd=array();$V=array();reset($C);$ub=1;foreach($F[0]as$c=>$b){$b=$_GET["columns"][key($C)];$d=$o[$C?$b["col"]:$c];$f=($d?$r->fieldName($d,$ub):"*");if($f!=""){$ub++;$Fd[$c]=$f;echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($c).($_GET["order"][0]==$c&&!$_GET["desc"][0]?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($b["fun"],$f)."</a>";}$V[$c]=$b["fun"];next($C);}$Zb=array();if($_GET["modify"]){foreach($F
as$a){foreach($a
as$c=>$b){$Zb[$c]=max($Zb[$c],min(40,strlen(utf8_decode($b))));}}}echo($je?"<th>".lang(219):"")."</thead>\n";foreach($r->rowDescriptions($F,$ea)as$ba=>$a){$Hd=unique_array($F[$ba],$K);$pb="";foreach($Hd
as$c=>$b){$pb.="&".(isset($b)?urlencode("where[".bracket_escape($c)."]")."=".urlencode($b):"null%5B%5D=".urlencode($c));}echo"<tr".odd().">".(!$va&&$C?"":"<td>".checkbox("check[]",substr($pb,1),in_array(substr($pb,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($va)<count($C)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($m).$pb)."'>".lang(109)."</a>"));foreach($a
as$c=>$b){if(isset($Fd[$c])){$d=$o[$c];if($b!=""&&(!isset($Ac[$c])||$Ac[$c]!="")){$Ac[$c]=(is_ad_email($b)?$Fd[$c]:"");}$x="";$b=$r->editVal($b,$d);if(!isset($b)){$b="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$d["type"])&&$b!=""){$x=h(ME.'download='.urlencode($m).'&field='.urlencode($c).$pb);}if($b==""){$b="&nbsp;";}elseif($Db!=""&&ereg('text|blob',$d["type"])&&is_utf8($b)){$b=shorten_utf8($b,max(0,intval($Db)));}else{$b=h($b);}if(!$x){foreach((array)$ea[$c]as$B){if(count($ea[$c])==1||count($B["source"])==1){foreach($B["source"]as$l=>$Da){$x.=where_link($l,$B["target"][$l],$F[$ba][$Da]);}$x=h(($B["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($B["db"]),ME):ME).'select='.urlencode($B["table"]).$x);break;}}}if($c=="COUNT(*)"){$x=h(ME."select=".urlencode($m));$l=0;foreach((array)$_GET["where"]as$v){if(!array_key_exists($v["col"],$Hd)){$x.=h(where_link($l++,$v["col"],$v["val"],$v["op"]));}}foreach($Hd
as$La=>$v){$x.=h(where_link($l++,$La,$v,(isset($v)?"=":"IS NULL")));}}}if(!$x){if(is_ad_email($b)){$x="mailto:$b";}if($nc=is_url($a[$c])){$x=($nc=="http"&&$ec?$a[$c]:"$nc://www.adminer.org/redirect/?url=".urlencode($a[$c]));}}$U=h("val[$pb][".bracket_escape($c)."]");$p=$_POST["val"][$pb][bracket_escape($c)];$le=h(isset($p)?$p:$a[$c]);$te=strpos($b,"<i>...</i>");$ze=is_utf8($b)&&!$te&&$F[$ba][$c]==$a[$c]&&!$V[$c];$ve=ereg('text|lob',$d["type"]);echo(($_GET["modify"]&&$ze)||isset($p)?"<td>".($ve?"<textarea name='$U' cols='30' rows='".(substr_count($a[$c],"\n")+1)."'>$le</textarea>":"<input name='$U' value='$le' size='$Zb[$c]'>"):"<td id='$U' ondblclick=\"".($ze?"selectDblClick(this, event".($ve?", 1":"").")":"alert('".h($te?lang(220):lang(221))."')").";\">".$r->selectVal($b,$x,$d));}}$r->backwardKeysPrint($je,$F[$ba]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$Bd);if($F||$Y){$xd=true;if($_GET["page"]!="last"&&intval($N)&&count($va)>=count($C)&&($Ua>=$N||$Y)){$Ua=$I["Rows"];if(!isset($Ua)||$s||2*$Y*$N>$Ua||($I["Engine"]=="InnoDB"&&$Ua<1e4)){ob_flush();flush();$Ua=$g->result("SELECT COUNT(*) FROM ".table($m).($s?" WHERE ".implode(" AND ",$s):""));}else{$xd=false;}}echo"<p class='pages'>";if(intval($N)&&$Ua>$N){$ud=floor(($Ua-1)/$N);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"var page = +prompt('".lang(27)."', '".($Y+1)."'); if (!isNaN(page) &amp;&amp; page) location.href = this.href + (page != 1 ? '&amp;page=' + (page - 1) : ''); return false;\">".lang(27)."</a>:".pagination(0,$Y).($Y>5?" ...":"");for($l=max(1,$Y-4);$l<min($ud,$Y+5);$l++){echo
pagination($l,$Y);}echo($Y+5<$ud?" ...":"").($xd?pagination($ud,$Y):' <a href="'.h(remove_from_uri()."&page=last").'">'.lang(28)."</a>");}echo" (".($xd?"":"~ ").lang(113,$Ua).") ".checkbox("all",1,0,lang(222))."\n";if(!information_schema(DB)){echo'<fieldset><legend>',lang(29),'</legend><div>
<input type="submit" value="',lang(129),'" title="',lang(216),'">
<input type="submit" name="edit" value="',lang(29),'">
<input type="submit" name="clone" value="',lang(223),'">
<input type="submit" name="delete" value="',lang(132),'" onclick="return confirm(\'',lang(73);?> (' + (this.form['all'].checked ? <?php echo$Ua,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",lang(103));echo$r->dumpOutput(1,$Bd["output"])." ".$r->dumpFormat(1,$Bd["format"]);echo" <input type='submit' name='export' value='".lang(103)."'>\n","</div></fieldset>\n";}print_fieldset("import",lang(224),!$F);echo"<input type='hidden' name='token' value='$P'><input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;"),$Bd["format"],1);echo" <input type='submit' name='import' value='".lang(225)."'>\n","</div></fieldset>\n";$r->selectEmailPrint(array_filter($Ac,'strlen'),$A);echo"</form>\n";}}}elseif(isset($_GET["variables"])){$Qb=isset($_GET["status"]);page_header($Qb?lang(67):lang(66));$Be=($Qb?show_status():show_variables());if(!$Be){echo"<p class='message'>".lang(74)."\n";}else{echo"<table cellspacing='0'>\n";foreach($Be
as$c=>$b){echo"<tr>","<th><code class='jush-".$_.($Qb?"status":"set")."'>".h($c)."</code>","<td>".nbsp($b);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$ad=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$a){$U=addcslashes($a["Name"],"\\'/");echo"setHtml('Comment-$U', '".nbsp($a["Comment"])."');\n";if(!is_view($a)){foreach(array("Engine","Collation")as$c){echo"setHtml('$c-$U', '".nbsp($a[$c])."');\n";}foreach($ad+array("Auto_increment"=>0,"Rows"=>0)as$c=>$b){if($a[$c]!=""){$b=number_format($a[$c],0,'.',lang(226));echo"setHtml('$c-$U', '".($c=="Rows"&&$a["Engine"]=="InnoDB"&&$b?"~ $b":$b)."');\n";if(isset($ad[$c])){$ad[$c]+=($a["Engine"]!="InnoDB"||$c!="Data_free"?$a[$c]:0);}}elseif(array_key_exists($c,$a)){echo"setHtml('$c-$U');\n";}}}}foreach($ad
as$c=>$b){echo"setHtml('sum-$c', '".number_format($b,0,'.',lang(226))."');\n";}}else{foreach(count_tables(get_databases())as$t=>$b){echo"setHtml('tables-".addcslashes($t,"\\'/")."', '$b');\n";}}exit;}else{$ue=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($ue&&!$n&&!$_POST["search"]){$i=true;$Ba="";if($_=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"])){queries("SET foreign_key_checks = 0");}if($_POST["truncate"]){if($_POST["tables"]){$i=truncate_tables($_POST["tables"]);}$Ba=lang(227);}elseif($_POST["move"]){$i=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$Ba=lang(228);}elseif($_POST["drop"]){if($_POST["views"]){$i=drop_views($_POST["views"]);}if($i&&$_POST["tables"]){$i=drop_tables($_POST["tables"]);}$Ba=lang(229);}elseif($_POST["tables"]&&($i=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($a=$i->fetch_assoc()){$Ba.="<b>".h($a["Table"])."</b>: ".h($a["Msg_text"])."<br>";}}queries_redirect(substr(ME,0,-1),$Ba,$i);}page_header(($_GET["ns"]==""?lang(59).": ".h(DB):lang(230).": ".h($_GET["ns"])),$n,true);echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.lang(151)."</a>\n":"");if(support("scheme")){echo"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(156):lang(157))."</a>\n";}if($_GET["ns"]!==""){echo'<a href="'.h(ME).'schema=">'.lang(102)."</a>\n","<h3>".lang(231)."</h3>\n";$Cd=tables_list();if(!$Cd){echo"<p class='message'>".lang(4)."\n";}else{echo"<form action='' method='post'>\n","<p>".lang(232).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".lang(34)."'>\n";if($_POST["search"]&&$_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);"><th>'.lang(91).'<td>'.lang(233).'<td>'.lang(70).'<td>'.lang(234).'<td>'.lang(235).'<td>'.lang(236).'<td>'.lang(83).'<td>'.lang(237).(support("comment")?'<td>'.lang(85):'')."</thead>\n";foreach($Cd
as$f=>$y){$Jc=(isset($y)&&!eregi("table",$y));echo'<tr'.odd().'><td>'.checkbox(($Jc?"views[]":"tables[]"),$f,in_array($f,$ue,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($f).'">'.h($f).'</a>';if($Jc){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($f).'">'.lang(90).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($f).'">?</a>';}else{echo"<td id='Engine-".h($f)."'>&nbsp;<td id='Collation-".h($f)."'>&nbsp;";foreach(array("Data_length"=>"create","Index_length"=>"indexes","Data_free"=>"edit","Auto_increment"=>"auto_increment=1&create","Rows"=>"select")as$c=>$x){echo"<td align='right'><a href='".h(ME."$x=").urlencode($f)."' id='$c-".h($f)."'>?</a>";}}echo(support("comment")?"<td id='Comment-".h($f)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(238,count($Cd)),"<td>".nbsp($g->result("SELECT @@storage_engine")),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$c){echo"<td align='right' id='sum-$c'>&nbsp;";}echo"</table>\n";if(!information_schema(DB)){echo"<p><input type='hidden' name='token' value='$P'>".($_=="sql"?"<input type='submit' value='".lang(239)."'> <input type='submit' name='optimize' value='".lang(240)."'> <input type='submit' name='check' value='".lang(241)."'> <input type='submit' name='repair' value='".lang(242)."'> ":"")."<input type='submit' name='truncate' value='".lang(243)."' onclick=\"return confirm('".lang(73)." (' + formChecked(this, /tables/) + ')');\"> <input type='submit' name='drop' value='".lang(72)."' onclick=\"return confirm('".lang(73)." (' + formChecked(this, /tables|views/) + ')');\">\n";$z=(support("scheme")?schemas():get_databases());if(count($z)!=1&&$_!="sqlite"){$t=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(244).($z?": ".html_select("target",$z,$t):': <input name="target" value="'.h($t).'">')." <input type='submit' name='move' value='".lang(245)."'>\n";}}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.lang(136)."</a>\n";if(support("view")){echo'<a href="'.h(ME).'view=">'.lang(171)."</a>\n";}if(support("routine")){echo"<h3>".lang(106)."</h3>\n";$Pe=routines();if($Pe){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(172).'<td>'.lang(80).'<td>'.lang(189)."<td>&nbsp;</thead>\n";odd('');foreach($Pe
as$a){echo'<tr'.odd().'>','<th><a href="'.h(ME).($a["ROUTINE_TYPE"]=="FUNCTION"?'callf=':'call=').urlencode($a["ROUTINE_NAME"]).'">'.h($a["ROUTINE_NAME"]).'</a>','<td>'.h($a["ROUTINE_TYPE"]),'<td>'.h($a["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($a["ROUTINE_TYPE"]=="FUNCTION"?'function=':'procedure=').urlencode($a["ROUTINE_NAME"]).'">'.lang(98)."</a>";}echo"</table>\n";}echo'<p><a href="'.h(ME).'procedure=">'.lang(188).'</a> <a href="'.h(ME).'function=">'.lang(187)."</a>\n";}if(support("sequence")){echo"<h3>".lang(246)."</h3>\n";$Te=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($Te){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(172)."</thead>\n";odd('');foreach($Te
as$b){echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."sequence='>".lang(194)."</a>\n";}if(support("type")){echo"<h3>".lang(8)."</h3>\n";$T=types();if($T){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(172)."</thead>\n";odd('');foreach($T
as$b){echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."type='>".lang(198)."</a>\n";}if(support("event")){echo"<h3>".lang(107)."</h3>\n";$F=get_rows("SHOW EVENTS");if($F){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(172)."<td>".lang(247)."<td>".lang(178)."<td>".lang(179)."</thead>\n";foreach($F
as$a){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($a["Name"]).'">'.h($a["Name"])."</a>","<td>".($a["Execute at"]?lang(248)."<td>".$a["Execute at"]:lang(180)." ".$a["Interval value"]." ".$a["Interval field"]."<td>$a[Starts]"),"<td>$a[Ends]";}echo"</table>\n";}echo'<p><a href="'.h(ME).'event=">'.lang(177)."</a>\n";}page_footer();echo"<script type='text/javascript' src='".h(ME)."script=db'></script>\n";exit;}}page_footer();
