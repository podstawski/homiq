<?php $page="18";  $ver="5";  $lang="pl";  $tree=":0:100:";  $INCLUDE_PATH="../../../include";  $MAIN_INCLUDE_PATH="../../../include";  $PAGE_PATH="../../php";  $IMAGES="../../../images/5";  $UIMAGES="../../../images";  $UFILES="../../../att";  $SERVER_ID="11";  $prevpage="../";  $pagetype=1; include("../../../include/pre.php");?><?php include("../../../include/action.php");?><!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
	<title>Promienko - Historia</title>
	<meta name="Robots" content="all"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Language" content="pl"/>
    <link media="handheld" type="text/html" href="http://m.ue.poznan.pl/" title="Mobile/PDA" rel="alternate">
	<meta content="640" name="MobileOptimized">
	<meta content="width = device-width; user-scalable=no" name="viewport">
	<meta content="True" name="HandheldFriendly">
	<meta content="no-cache" http-equiv="Cache-Control">
	<meta name="CMSWebKameleon" content="server=11; page=18; ver=5; lang=pl" />
	<meta name="copyright" content="Pudel w Poznaniu 2011" />
	<meta name="ftpdate" content="Thu, 01 Dec 2011 07:15:13 +0100" />
		
	
	
	
	<script language="JavaScript" type="text/javascript">
		var JSTITLE = "Historia";
		var JSCLOSE = "Zamknij okno";
		var JSWAIT = "Proszę czekać na załadowanie strony...";
		var JSUIMAGES = "../../../images";
		var JSIMAGES = "../../../images/5";
	</script>
	<script language="Javascript" type="text/javascript" src="../../php/popupimg.enc.js"></script>
	<script src="../../../images/5/js/sc.js" type="text/javascript"></script>
	<script src="../../../images/5/js/scripts.js" type="text/javascript"></script>
	<script src="../../../images/5/js/ufo.js" type="text/javascript"></script>
	<script src="../../../images/5/jq/jquery-1.3.2.js" type="text/javascript"></script>

<style type="text/css"> 
	span.white {color:#FFF;padding:4px; }
	span.black {color:#000000;padding:4px;}
	img.noborder {border:0px; }
	a {text-decoration:none; color:#007800;}
	a.white {color:#FFFFFF;  text-decoration:none;  }
	a.white_active {color:#FFF; font-weight:bold; text-decoration:none;}
	a.black {color:#000000;  text-decoration:none;  } 
	a.black_active {color:#000; font-weight:bold; text-decoration:none;}
	a.grey {color:#505050;  text-decoration:none;  }  
	body {background-color:#fff;color:#000000;font-family:Tahoma,Verdana,ArialCE,HelvaticaCE,Arial,Helvetica,sans-serif; font-size:11px;margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px; }  
	hr.th0 {color:#0a4225;border-width:1px 0px 0px 0px;border-style:solid;margin:2px; }  
	table.width{ width:100%; }  
	table.green{ width:100%;background-color:#0a4225;color:#FFFFFF;font-size:8pt;}  
	table.gray{ width:100%;background-color:#e0e0e0;color:#505050;font-size:8pt; }   
	td.left{ text-align:left;padding:4px; }  
	
	td.left table {width:100%;}
	
	ul {padding-left:20px; margin:2px;}
	li { padding: 10px 2px 2px 0; font-weight:bold;}
	blockquote a {color:#000000;  text-decoration:none; }
	h1 {width: 100%; font-size:11px;}
	.std2 { width:100%;}
</style>
</head>
<body><table width="100%" class="width">
<tbody>
	<tr>
    	<td>
		
		</td>
	</tr>
</tbody>
</table>
<table cellspacing="0" cellpadding="0" width="100%" class="green">
<tbody>
<tr>
	<td class="left">
		<div class="pl"  class="std1">
		<?php parse_str("more=.&cos=&next=.&size=&class=&costxt=&title=&pagetype=1&self=.&tree=:0:100:&sid=4226&prevpage=..%2F&INCLUDE_PATH=../../../include&html=js.php"); 
 include("../../../include/js.php");  ?></div>
	</td>
</tr>
</tbody>
</table>
<hr class="th0"><table cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
	<td class="left">
      		
    		
    		 <?php ob_start(); ?><div class="pl"  class="std1" style="">
		Zdarzenia<p>{loop:navi}Pozycji: <strong>{ile}</strong>, strony: <a href="javascript:sql_table_navi_{sid}({first})">pierwsza</a> {loop:strony} <a class="navi{active}" href="javascript:sql_table_navi_{sid}({strona})">{text}</a> {endloop:strony} <a href="javascript:sql_table_navi_{sid}({last})">ostatnia</a>{endloop:navi}</p>
<table border="1" cellpadding="4" cellspacing="0" class="tabela_1">
	<thead>
		<tr>
			<th id="h_id" width="5%">
				Lp</th>
			<th id="h_time">
				Czas</th>
			<th id="h_desc">
				Opis</th>
			<th id="h_state" width="3%">
				S</th>
		</tr>
	</thead>
	<tbody>
<!-- loop:sql_table -->		<tr>
			<td>
				{lp}</td>
			<td>
				{h_time|f_data:d-m-Y H\:i\:s}</td>
			<td>
				{h_desc}</td>
			<td>
				<img alt="{h_state}" src="../../../images/W-{h_state}.gif" style="width: 30px; height: 40px;" /></td>
		</tr>
<!-- endif:o_active --><!-- endloop:sql_table -->	</tbody>
</table>
<p>&nbsp;</p><?php parse_str("more=.&cos=&next=..%2F..%2Foutput.php&size=50&class=&costxt=YTo3OntzOjM6InNpZCI7czo0OiI3OTkwIjtzOjQ6ImV2YWwiO3M6MTE2OiJpZiAoIXN0cmxlbigk%0D%0AX1JFUVVFU1Rbb3JkZXJieV0pKSANCnsNCiAgICRfUkVRVUVTVFtvcmRlcmJ5XT0naF9pZCc7DQog%0D%0AICAkX1JFUVVFU1Rbb3JkZXJob3ddPSdERVNDJzsNCn0NCg0KJHQ9dGltZSgpOyI7czozOiJzcWwi%0D%0AO3M6MTAzOiJTRUxFQ1QgKiBGUk9NIGhpc3RvcnkNCiRzcWxfZmlsdHJfd2hlcmUgJHNxbF9maWx0%0D%0AciANCk9SREVSIEJZICRfUkVRVUVTVFtvcmRlcmJ5XSAkX1JFUVVFU1Rbb3JkZXJob3ddIA0KIjtz%0D%0AOjU6ImNvdW50IjtzOjY0OiJTRUxFQ1QgY291bnQoaF9pZCkgRlJPTSBoaXN0b3J5IA0KJHNxbF9m%0D%0AaWx0cl93aGVyZSAkc3FsX2ZpbHRyIA0KIjtzOjk6Imxvb3BfZXZhbCI7czowOiIiO3M6NjoiaGVh%0D%0AZGVyIjtzOjE6IjEiO3M6NjoiZmlsdHJ5IjtzOjA6IiI7fQ%3D%3D&title=Zdarzenia&pagetype=1&self=.&tree=:0:100:&sid=7990&prevpage=..%2F&INCLUDE_PATH=../../../include&html=sql_table/sql_table.php"); 
 include("../../../include/sql_table/sql_table.php");  ?></div> <?php if (!function_exists('_ob_replace_tokens')) { function _ob_obj2arr(&$obj,$depth=0) { static $hash; if (!function_exists('spl_object_hash')) return $obj; if (!is_array($obj) && !is_object($obj)) return $obj; if ($depth==0) $hash=array(); $wynik=array(); foreach ($obj AS $k=>$v) { if (is_object($v)) { $spl=spl_object_hash($v); if (isset($hash[$spl])) continue; $hash[$spl]=true; } $wynik[$k] =  ($k!='GLOBALS' && (is_array($v)||is_object($v)) ) ? _ob_obj2arr($v,$depth+1) : $v; } return $wynik; } function _post_parse_token($token,$fun=array(),$param=array()) { for ($f=0;$f<count($fun);$f++) { if (!function_exists($fun[$f])) continue; if (is_array($param[$f])) $param[$f]=array_merge(array($token),$param[$f]); elseif (strlen(trim($param[$f]))) $param[$f]=array($token,$param[$f]); else $param[$f]=array($token); $token=call_user_func_array($fun[$f],$param[$f]); } return $token; } function _dig_deep_in_array($vars_array,$key_array) { if (!is_array($key_array)) $key_array=array($key_array); $wynik=$vars_array; foreach ($key_array AS $key) { $wynik=$wynik[$key]; } return $wynik; } function _ob_replace_tokens($parser_content,$vars) { $parser_startpos=0; global $_SERVER,$_REQUEST; foreach ($_SERVER AS $k=>$v ) if (!isset($vars[$k]) && !isset($vars->$k) ) @$vars[$k]=$v; foreach ($_REQUEST AS $k=>$v ) if (!isset($vars[$k]) && !isset($vars->$k) ) @$vars[$k]=$v; while (1) { $parser_content=substr($parser_content,$parser_startpos); $parser_proc1=strpos($parser_content,"{"); $parser_proc2=strpos(substr($parser_content,$parser_proc1+1),"}"); $parser_proc3=strpos(substr($parser_content,$parser_proc1+1),"{"); if (!strlen($parser_proc1) || !strlen($parser_proc2) ) { $wynik.=$parser_content; break; } if ( strlen($parser_proc3) && $parser_proc3<$parser_proc2 ) { $wynik.=substr($parser_content,0,$parser_proc1+1); $parser_startpos=$parser_proc1+1; continue; } $parser_token=substr($parser_content,$parser_proc1+1,$parser_proc2); $parser_startpos=$parser_proc1+$parser_proc2+2; $wynik.=substr($parser_content,0,$parser_proc1); if (substr(strtolower($parser_token),0,5)=='with:') { $arrayname=substr($parser_token,5); $end_token=strtolower("{endwith:$arrayname}"); $pos=strpos(strtolower($parser_content),$end_token); if ($pos) { $inside_content=substr($parser_content,$parser_startpos,$pos-$parser_startpos); $parser_startpos=$pos+strlen($end_token); $arrayname_array=explode(':',$arrayname); $arrayname=$arrayname_array[0]; if (is_array($vars[$arrayname])) { $varset=$vars[$arrayname]; foreach($vars AS $k=>$v) { if (!is_object($v) && !is_array($v) && !isset($varset[$k])) $varset[$k]=$v; } $wynik.=_ob_replace_tokens($inside_content,$varset); } } } elseif (substr(strtolower($parser_token),0,5)=='loop:') { $arrayname=substr($parser_token,5); $end_token=strtolower("{endloop:$arrayname}"); $pos=strpos(strtolower($parser_content),$end_token); if ($pos) { $inside_content=substr($parser_content,$parser_startpos,$pos-$parser_startpos); $parser_startpos=$pos+strlen($end_token); $arrayname_array=explode(':',$arrayname); $_loop_var=explode('.',$arrayname_array[0]); $loop_var = (count($_loop_var)==1)?$vars[$_loop_var[0]]:$vars[$_loop_var[0]][$_loop_var[1]]; $loop_i=0; if (is_array($loop_var))  foreach ($loop_var AS $__k__ => $varset) { if (!is_array($varset)) { $varset=array('loop'=>$varset); $varset[$arrayname_array[0]]=$varset['loop']; } $varset['__loop__']=$__k__; foreach($vars AS $k=>$v) { if (!is_array($v) && !isset($varset[$k])) $varset[$k]=$v; } $loop_i++; if ( preg_match('/^[0-9\-]+$/',$arrayname_array[1]) ) { $fromto=explode('-',$arrayname_array[1]); if (!$fromto[1]) $fromto[1]=$fromto[0]; if ($loop_i < $fromto[0] || $loop_i > $fromto[1]) continue; } $wynik.=_ob_replace_tokens($inside_content,$varset); } } } elseif (substr(strtolower($parser_token),0,3)=='if:') { $ifname=substr($parser_token,3); $end_token=strtolower("{endif:$ifname}"); $pos=strpos(strtolower($parser_content),$end_token); $NOT=false; if ($ifname[0]=='!') { $NOT=true; $ifname=substr($ifname,1); } if ($pos) { $ifname_array=explode(':',$ifname); $_zmienna=explode('=',$ifname_array[0]); $__zmienna=explode('.',$_zmienna[0]); if (count($__zmienna)==1) { $test_zmienna=$vars[$__zmienna[0]]; } else { if (is_object($vars[$__zmienna[0]])) $test_zmienna=$vars[$__zmienna[0]]->$__zmienna[1]; else $test_zmienna=$vars[$__zmienna[0]][$__zmienna[1]]; } if (count($_zmienna)==1) { if (!$test_zmienna && !$NOT ) $parser_startpos=$pos+strlen($end_token); if ($test_zmienna && $NOT ) $parser_startpos=$pos+strlen($end_token); } else { if ($test_zmienna!=$_zmienna[1] && !$NOT ) $parser_startpos=$pos+strlen($end_token); if ($test_zmienna==$_zmienna[1] && $NOT ) $parser_startpos=$pos+strlen($end_token); } } } else { $fun=array(); $param=array(); $default_value=null; if (strstr($parser_token,'?') && !strstr($parser_token,"\n") ) { $_parser_token=explode('?',$parser_token); $default_value=$_parser_token[1]; $parser_token=$_parser_token[0]; } if (strstr($parser_token,'|') && !strstr($parser_token,"\n") ) { $_parser_token=explode('|',$parser_token); $parser_token=$_parser_token[0]; for ($f=1;$f<count($_parser_token);$f++) { $_parser_token[$f]=str_replace("\\:",'__dwukropek__',$_parser_token[$f]); $_parser_token_fun=explode(':',$_parser_token[$f]); $_fun=$_parser_token_fun[0]; $_parser_token_fun[1]=str_replace("\\,",'__przcinek__',$_parser_token_fun[1]); $_param=explode(',',$_parser_token_fun[1]); if (!strlen($_parser_token_fun[1])) $_param=array(); $_param=str_replace('__przcinek__',',',$_param); $_param=str_replace('__dwukropek__',':',$_param); $fun[]=$_fun; $param[]=$_param; } } if (strstr($parser_token,'.') && !strstr($parser_token,"\n") ) { $_parser_token=explode('.',$parser_token); $parser_token=$_parser_token[0]; if (isset($vars[$parser_token][$_parser_token[1]])) { $wynik.=_post_parse_token(_dig_deep_in_array($vars,$_parser_token),$fun,$param); } } elseif (isset($vars[$parser_token])) $wynik.=_post_parse_token($vars[$parser_token],$fun,$param); elseif (strstr($parser_token,"\n") ) $wynik.='{'.$parser_token.'}'; elseif ( !is_null($default_value)) $wynik.= _post_parse_token($default_value,$fun,$param);   elseif ($vars['_OB_TOKEN_BLANK'] || $vars->_OB_TOKEN_BLANK) $wynik.=''; elseif ($vars['KAMELEON_OB_TOKEN_BLANK'] || $vars->KAMELEON_OB_TOKEN_BLANK) $wynik.=''; elseif ( !strstr($parser_token,':') ) $wynik.='{'.$parser_token.'}'; } } return $wynik; } } $_p=ob_get_contents(); ob_end_clean(); $_p=preg_replace("#<!--[ ]*loop:([^> -]+)[ ]*-->#","{loop:\\1}",$_p); $_p=preg_replace("#<!--[ ]*with:([^> -]+)[ ]*-->#","{with:\\1}",$_p); $_p=preg_replace("#<!--[ ]*if:([^> -]+)[ ]*-->#","{if:\\1}",$_p); $_p=preg_replace("#<\!--[ ]*end([a-z]+):([^> \-]+)[ ]*-->#","{end\\1:\\2}",$_p); $_p=preg_replace("#<!--[ ]*([a-z_]+)[ ]*-->#","{\\1}",$_p); while (1)  { $__p=$_p; $_p=preg_replace("#\[\!(.*)\!\]#","{\\1}",$__p); if (strlen($_p)==strlen($__p)) break; } $s=$WEBTD->sid?$WEBTD->sid:$sid; if (!$_REQUEST['hidden_'.$s])  { if (isset($kameleon_ob_replace_tokens_vars)) { $__vars=$kameleon_ob_replace_tokens_vars; } else { $__vars=$WEBTD->sid?$adodb->kameleon_after_include_vars:get_defined_vars(); } $str2echo = _ob_replace_tokens($_p,_ob_obj2arr($__vars)); $wynik=function_exists('kameleon_ob_replace_post') ? kameleon_ob_replace_post($str2echo) : $str2echo; if (isset($kameleon_ob_replace_tokens_result)) { $kameleon_ob_replace_tokens_result=$wynik; } else { echo $wynik; } } ?> 
            
    		

        	 <?php ob_start(); ?><ul><li ><a href="../">PROMIENKO</a></li>
<li ><a href="../../masters.php">Urządzenia</a></li>
<li ><a href="../../modules.php">Moduły</a></li>
<li ><a href="../../inputs.php">Wejścia</a></li>
<li ><a href="../../outputs.php">Wyjścia</a></li>
<li ><a href="../../macros.php">Makra</a></li>
<li ><a href="../akcje/">Akcje</a></li>
<li ><a href="../../crons.php">Kalendarz</a></li>
<li ><a href="../../temperatury.php">Temperatury</a></li>
<li class="active"><a href=".">Historia</a></li>
<li ><a href="../pobor-energii/">Pobór energii</a></li>
</ul> <?php if (!function_exists('_ob_replace_tokens')) { function _ob_obj2arr(&$obj,$depth=0) { static $hash; if (!function_exists('spl_object_hash')) return $obj; if (!is_array($obj) && !is_object($obj)) return $obj; if ($depth==0) $hash=array(); $wynik=array(); foreach ($obj AS $k=>$v) { if (is_object($v)) { $spl=spl_object_hash($v); if (isset($hash[$spl])) continue; $hash[$spl]=true; } $wynik[$k] =  ($k!='GLOBALS' && (is_array($v)||is_object($v)) ) ? _ob_obj2arr($v,$depth+1) : $v; } return $wynik; } function _post_parse_token($token,$fun=array(),$param=array()) { for ($f=0;$f<count($fun);$f++) { if (!function_exists($fun[$f])) continue; if (is_array($param[$f])) $param[$f]=array_merge(array($token),$param[$f]); elseif (strlen(trim($param[$f]))) $param[$f]=array($token,$param[$f]); else $param[$f]=array($token); $token=call_user_func_array($fun[$f],$param[$f]); } return $token; } function _dig_deep_in_array($vars_array,$key_array) { if (!is_array($key_array)) $key_array=array($key_array); $wynik=$vars_array; foreach ($key_array AS $key) { $wynik=$wynik[$key]; } return $wynik; } function _ob_replace_tokens($parser_content,$vars) { $parser_startpos=0; global $_SERVER,$_REQUEST; foreach ($_SERVER AS $k=>$v ) if (!isset($vars[$k]) && !isset($vars->$k) ) @$vars[$k]=$v; foreach ($_REQUEST AS $k=>$v ) if (!isset($vars[$k]) && !isset($vars->$k) ) @$vars[$k]=$v; while (1) { $parser_content=substr($parser_content,$parser_startpos); $parser_proc1=strpos($parser_content,"{"); $parser_proc2=strpos(substr($parser_content,$parser_proc1+1),"}"); $parser_proc3=strpos(substr($parser_content,$parser_proc1+1),"{"); if (!strlen($parser_proc1) || !strlen($parser_proc2) ) { $wynik.=$parser_content; break; } if ( strlen($parser_proc3) && $parser_proc3<$parser_proc2 ) { $wynik.=substr($parser_content,0,$parser_proc1+1); $parser_startpos=$parser_proc1+1; continue; } $parser_token=substr($parser_content,$parser_proc1+1,$parser_proc2); $parser_startpos=$parser_proc1+$parser_proc2+2; $wynik.=substr($parser_content,0,$parser_proc1); if (substr(strtolower($parser_token),0,5)=='with:') { $arrayname=substr($parser_token,5); $end_token=strtolower("{endwith:$arrayname}"); $pos=strpos(strtolower($parser_content),$end_token); if ($pos) { $inside_content=substr($parser_content,$parser_startpos,$pos-$parser_startpos); $parser_startpos=$pos+strlen($end_token); $arrayname_array=explode(':',$arrayname); $arrayname=$arrayname_array[0]; if (is_array($vars[$arrayname])) { $varset=$vars[$arrayname]; foreach($vars AS $k=>$v) { if (!is_object($v) && !is_array($v) && !isset($varset[$k])) $varset[$k]=$v; } $wynik.=_ob_replace_tokens($inside_content,$varset); } } } elseif (substr(strtolower($parser_token),0,5)=='loop:') { $arrayname=substr($parser_token,5); $end_token=strtolower("{endloop:$arrayname}"); $pos=strpos(strtolower($parser_content),$end_token); if ($pos) { $inside_content=substr($parser_content,$parser_startpos,$pos-$parser_startpos); $parser_startpos=$pos+strlen($end_token); $arrayname_array=explode(':',$arrayname); $_loop_var=explode('.',$arrayname_array[0]); $loop_var = (count($_loop_var)==1)?$vars[$_loop_var[0]]:$vars[$_loop_var[0]][$_loop_var[1]]; $loop_i=0; if (is_array($loop_var))  foreach ($loop_var AS $__k__ => $varset) { if (!is_array($varset)) { $varset=array('loop'=>$varset); $varset[$arrayname_array[0]]=$varset['loop']; } $varset['__loop__']=$__k__; foreach($vars AS $k=>$v) { if (!is_array($v) && !isset($varset[$k])) $varset[$k]=$v; } $loop_i++; if ( preg_match('/^[0-9\-]+$/',$arrayname_array[1]) ) { $fromto=explode('-',$arrayname_array[1]); if (!$fromto[1]) $fromto[1]=$fromto[0]; if ($loop_i < $fromto[0] || $loop_i > $fromto[1]) continue; } $wynik.=_ob_replace_tokens($inside_content,$varset); } } } elseif (substr(strtolower($parser_token),0,3)=='if:') { $ifname=substr($parser_token,3); $end_token=strtolower("{endif:$ifname}"); $pos=strpos(strtolower($parser_content),$end_token); $NOT=false; if ($ifname[0]=='!') { $NOT=true; $ifname=substr($ifname,1); } if ($pos) { $ifname_array=explode(':',$ifname); $_zmienna=explode('=',$ifname_array[0]); $__zmienna=explode('.',$_zmienna[0]); if (count($__zmienna)==1) { $test_zmienna=$vars[$__zmienna[0]]; } else { if (is_object($vars[$__zmienna[0]])) $test_zmienna=$vars[$__zmienna[0]]->$__zmienna[1]; else $test_zmienna=$vars[$__zmienna[0]][$__zmienna[1]]; } if (count($_zmienna)==1) { if (!$test_zmienna && !$NOT ) $parser_startpos=$pos+strlen($end_token); if ($test_zmienna && $NOT ) $parser_startpos=$pos+strlen($end_token); } else { if ($test_zmienna!=$_zmienna[1] && !$NOT ) $parser_startpos=$pos+strlen($end_token); if ($test_zmienna==$_zmienna[1] && $NOT ) $parser_startpos=$pos+strlen($end_token); } } } else { $fun=array(); $param=array(); $default_value=null; if (strstr($parser_token,'?') && !strstr($parser_token,"\n") ) { $_parser_token=explode('?',$parser_token); $default_value=$_parser_token[1]; $parser_token=$_parser_token[0]; } if (strstr($parser_token,'|') && !strstr($parser_token,"\n") ) { $_parser_token=explode('|',$parser_token); $parser_token=$_parser_token[0]; for ($f=1;$f<count($_parser_token);$f++) { $_parser_token[$f]=str_replace("\\:",'__dwukropek__',$_parser_token[$f]); $_parser_token_fun=explode(':',$_parser_token[$f]); $_fun=$_parser_token_fun[0]; $_parser_token_fun[1]=str_replace("\\,",'__przcinek__',$_parser_token_fun[1]); $_param=explode(',',$_parser_token_fun[1]); if (!strlen($_parser_token_fun[1])) $_param=array(); $_param=str_replace('__przcinek__',',',$_param); $_param=str_replace('__dwukropek__',':',$_param); $fun[]=$_fun; $param[]=$_param; } } if (strstr($parser_token,'.') && !strstr($parser_token,"\n") ) { $_parser_token=explode('.',$parser_token); $parser_token=$_parser_token[0]; if (isset($vars[$parser_token][$_parser_token[1]])) { $wynik.=_post_parse_token(_dig_deep_in_array($vars,$_parser_token),$fun,$param); } } elseif (isset($vars[$parser_token])) $wynik.=_post_parse_token($vars[$parser_token],$fun,$param); elseif (strstr($parser_token,"\n") ) $wynik.='{'.$parser_token.'}'; elseif ( !is_null($default_value)) $wynik.= _post_parse_token($default_value,$fun,$param);   elseif ($vars['_OB_TOKEN_BLANK'] || $vars->_OB_TOKEN_BLANK) $wynik.=''; elseif ($vars['KAMELEON_OB_TOKEN_BLANK'] || $vars->KAMELEON_OB_TOKEN_BLANK) $wynik.=''; elseif ( !strstr($parser_token,':') ) $wynik.='{'.$parser_token.'}'; } } return $wynik; } } $_p=ob_get_contents(); ob_end_clean(); $_p=preg_replace("#<!--[ ]*loop:([^> -]+)[ ]*-->#","{loop:\\1}",$_p); $_p=preg_replace("#<!--[ ]*with:([^> -]+)[ ]*-->#","{with:\\1}",$_p); $_p=preg_replace("#<!--[ ]*if:([^> -]+)[ ]*-->#","{if:\\1}",$_p); $_p=preg_replace("#<\!--[ ]*end([a-z]+):([^> \-]+)[ ]*-->#","{end\\1:\\2}",$_p); $_p=preg_replace("#<!--[ ]*([a-z_]+)[ ]*-->#","{\\1}",$_p); while (1)  { $__p=$_p; $_p=preg_replace("#\[\!(.*)\!\]#","{\\1}",$__p); if (strlen($_p)==strlen($__p)) break; } $s=$WEBTD->sid?$WEBTD->sid:$sid; if (!$_REQUEST['hidden_'.$s])  { if (isset($kameleon_ob_replace_tokens_vars)) { $__vars=$kameleon_ob_replace_tokens_vars; } else { $__vars=$WEBTD->sid?$adodb->kameleon_after_include_vars:get_defined_vars(); } $str2echo = _ob_replace_tokens($_p,_ob_obj2arr($__vars)); $wynik=function_exists('kameleon_ob_replace_post') ? kameleon_ob_replace_post($str2echo) : $str2echo; if (isset($kameleon_ob_replace_tokens_result)) { $kameleon_ob_replace_tokens_result=$wynik; } else { echo $wynik; } } ?> 
    		
    		
	</td>
   
</tr>
</tbody>
</table><hr class="th0">
<span class="black">
		<div class="pl"  class="std1">
		<br /></div>
</span></body>
</html><?include("../../../include/post.php");?>