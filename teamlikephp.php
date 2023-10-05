<?php 
error_reporting(0);
error_reporting(0);
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
system('clear');

$z = "[0;32m";
$x = "[0;33m";
$c = "[0;31m";
$b= "\e[38;5;94m";

$white = "[0;33m";

$banner = "
";

$xnhac = "[1;96m";

$den = "[1;90m";

$n = "[1;91m";

$luc = "[1;92m";

$vang = "[1;93m";

$xduong = "[1;94m";

$m = "[1;95m";

$trang = "[1;97m";
error_reporting(0);
session_start();
function chay($so){
  for($v=0;$v<= $so;$v++){
    echo "\033[1;36m"."▬";usleep(20000);echo "\033[1;37m"."▬";usleep(20000);echo "\033[1;36m"."▬";usleep(20000);echo "\033[1;37m"."▬";usleep(20000);
} echo "\n";
}
function tren($so){
	echo "╔♫═";
  for($v=0;$v<= $so;$v++){
    echo "═";usleep(20000);
} echo "♫═╗\n";
}
function duoi($so){
	echo "╚═♫";
  for($v=0;$v<= $so;$v++){
    echo "═";usleep(20000);
} echo "═♫╝\n";
}
///color
$trang="\033[1;37m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue2="\033[1;36m";
$lightgrey="\033[37m";
$darkgrey="\033[90m";
$lightred="\033[91m";
$lightgreen="\033[92m";
$lightblue="\033[94m";
$pink="\033[95m";
$white= "\033[0;37m";  
$lightcyan="\033[96m";
$do="\033[1;35m";
$nau="\033[1;36m";
$res="\033[0m";
$cam="\033[0;33m";
$lam="\033[1;34m";
$hong="\033[1;35m";
$syan="\033[1;36m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$vdhd="https://youtube.com/playlist?list=PLI1NFYtWo2IOHyCD8zXkwe_QMAKxhyEm-";
/////
@system('clear');

$banner= "\t\t\033[1;33m          〚 𝕋𝕆𝕆𝕃 𝔹𝕐 〛            

$syan\t██████╗ ██╗  ██╗  ██████╗
$purple\t██╔══██╗██   ██║  ██╔══██╗
$vang\t██████╔╝███████║  ██████╔╝
$green\t██╔═══╝ ██╔══██║  ██╔═══╝
$red2\t██║     ██║  ██║  ██║
$syan\t╚═╝     ╚═╝  ╚═╝  ╚═╝
\033[1;33m\t╔♫════════════════════════════════════════♫═╗
\t$syan        ☞ 𝕐𝕆𝕌𝕋𝕌𝔹𝔼: PHP-TOOL
\t$yellow        ☞ ℤ𝔸𝕃𝕆: 0853408135
\t$green        ☞ Facebook: Phú Phạm
\t$red2        ☞ Nhớ Đăng Kí Kênh Nha
\033[1;33m\t╚═♫════════════════════════════════════════♫╝\n\n";
#KEY
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$do="\033[1;91m";
$maufulldo= "\e[1;47;31m";
$res="\033[0m";
$red="\e[1;31m";
$pink="\e[1;35m";
$green="\e[1;32m";
$yellow="\e[1;33m";
$y2="\033[0;33m";
$white= "\033[0;37m";
$cyan= "\e[1;36m";
$blue="\e[1;34m";
$ngreen="\033[42m";
$ngblack="\033[40m";
$nen="\033[1;47;1;34m";
$checkkey  = file('https://pastebin.com/raw/hY6R64GD');
$lock=file_get_contents('https://pastebin.com/raw/hY6R64GD');
$keylock=md5(htmlspecialchars($lock));
if (md5('lock') != $keylock){
}

$string = strlen($banner);
for($i=0; $i<=$string; $i++){
echo $banner[$i];usleep(500);}
while (true){
echo $thuong.$trang."Mỗi Ngày 1 Key, Key Sẽ Thay Đổi Sau 12h Đêm\n";
echo $thuong."\033[1;32mLink lấy key: ".$red."https://tokoda.top/gvQOzP\n";
echo $thuong."\033[1;33mNhập Key Để Vào Tool: \033[1;32m";
      $makey = trim(fgets(STDIN));
    if ($makey == $checkkey[0]) 
   
    {
    sleep(1);
        echo "\033[1;32";
        echo "\n";
        break;
    } else {
        echo $thuong.$do."Key Sai Vui Lòng Lấy Lại Key\n";
        echo $vang."-------------------------------------------\n";
        sleep(1);
       exit;
       }
       }	
@system('clear');
/* TAO DATA*/
@include("datateam.php");
if(file_exists("datateam.php") != true){
$string = strlen($banner); for($i=0; $i<=$string; $i++){ echo $banner[$i];usleep(1500);} 
echo $blue, "Nhap User-Agent : ";
$use=trim(fgets(STDIN));
echo $red, "Nhap Cookie : ";
$cookie=trim(fgets(STDIN));
$k=fopen("datateam.php","a+");
fwrite($k,'<?php
$use = "'.$use.'";
$cookie = "'.$cookie.'";');
}
system('clear');

$tsma = array(
"Host:team-like.net",
"X-Requested-With:XMLHttpRequest",
"user-agent:$use",
"Content-Type:application/x-www-form-urlencoded; charset=UTF-8",
"cookie:$cookie"
);

$tsm = array(
"Host:team-like.net",
"upgrade-insecure-requests:1",
"user-agent:$use",
"cookie:$cookie"
);

$tsmb = array(
"Host:deref.net",
"upgrade-insecure-requests:1",
"user-agent:$use",
"cookie:_ga=GA1.1.491788110.1658153634;prefetchAd_3088866=true;_ga_CXVG7ZDJ2P=GS1.1.1659254153.4.1.1659254181.0"
);

function POST($host,$tsm,$data){
  $mr = curl_init();
  curl_setopt_array($mr, array(
   CURLOPT_HEADER => true,
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$host",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $tsm,
  CURLOPT_COOKIEJAR => "cookie.txt",
  CURLOPT_COOKIEFILE => "cookie.txt",
  CURLOPT_ENCODING => "gzip"));
  $mr2 = curl_exec($mr); curl_close($mr);
  return $mr2;}

function GET($host,$tsm){
  $mr = curl_init();
  curl_setopt_array($mr, array(
  CURLOPT_HEADER => true,
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$host",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $tsm,
  CURLOPT_COOKIEJAR => "COOKIE.TXT",
  CURLOPT_COOKIEFILE => "COOKIE.TXT",
  CURLOPT_ENCODING => "gzip"));
  $mr2 = curl_exec($mr); curl_close($mr);
  return $mr2;}

function KK($url,$head){
  $mr = curl_init();
  curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $head));
  $mr2 = curl_exec($mr); curl_close($mr);
  return $mr2;}

function HK($url,$headd,$data){
  $mr = curl_init();
  curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $headd));
  $mr2 = curl_exec($mr); curl_close($mr);
  return $mr2;}



system('clear');


$z1="Host: m.youtube.com";
$z2="sec-ch-ua-mobile: ?1";
$z3="upgrade-insecure-requests: 1";
$z4="user-agent: ".$use."";
$z5="sec-fetch-site: none";
$z6="sec-fetch-mode: navigate";
$z7="sec-fetch-user: ?1";

////TAI KHOAN
$string = strlen($banner); for($i=0; $i<=$string; $i++){ echo $banner[$i];usleep(1500);} 
echo "\033[1;37m┌─────────────────────┐
\033[1;37m│ \e[1;41;93m TOOL WEB Team-Like\e[0m\033[1;37m │  
\033[1;37m└─────────────────────┘\n"; 
$tk1 = "https://team-like.net/index.php";
$tk=get($tk1,$tsm);
$name = explode('s=40" class="border border-white rounded" /> ', $tk)[1];
$namee = explode('<', $name)[0];
$coin = explode('<div class="col-9 no-space">เหรียญ <div class="text-warning"><b id="c_coins">', $tk)[1];
$coinn = explode('เหรียญ', $coin)[0];
$usd = explode('<div class="col-9 no-space">ยอดเงินในบัญชี <div><b class="text-success">', $tk)[1];
$usdd = explode('<', $usd)[0];
echo$green2."=========>>>>>>>>>PROFILE ACCOUNT<<<<<<<<========\n";
echo $yellow."NAME: $namee  XU: $coinn  USD: $usdd  \n";
echo$green2."=========>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<========\n\n";



///////////////////////////////////////////////////////////
echo $red."\033[1;35m[\033[1;33mMENU TOOL\033[1;35m]\n".$red;
echo tren(30);
echo $x. "1️⃣ LIKE YOUTUBE BẤM SỐ 1\n";
echo $c.  "2️⃣ ĐĂNG KÝ YOUTUBE BẤM SỐ 2\n";
echo $z. "3️⃣ XEM YOUTUBE & ADS BẤM SỐ 3\033[1;35m\n";
echo duoi(30);
echo $m. "🟢Chọn Đi Bạn : ";

$dom = trim(fgets(STDIN));
if($dom==1 or $dom==2){
@include("dataytb.php");
if(file_exists("dataytb.php") != true){
echo $b. "🟢NHẬP COOKIE ( YOUTUBE ) : ";
$doki = trim(fgets(STDIN));
echo $m. "🟢NHẬP AUTHOZATION : ";
$author = trim(fgets(STDIN));
echo $z. "🟢NHẬP X-GOOG-AUTHUSER : ";
$goog = trim(fgets(STDIN));
$k=fopen("dataytb.php","w");
fwrite($k,'<?php
$doki = "'.$doki.'";
$author = "'.$author.'";
$goog = "'.$goog.'";');
}}
if($dom==3){echo "\t⏭️ XEM VIDEO \n";

while(true){
while(true){
$mr = curl_init();
curl_setopt_array($mr, array(
 CURLOPT_URL => "https://team-like.net/index.php?page=module&md=youtube",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_HTTPHEADER => $tsm));

$mr2 = curl_exec($mr);curl_close($mr);
$json = json_decode($mr2,true);
$coine = explode('<div class="col-9 no-space">เหรียญ <div class="text-warning"><b id="c_coins">', $mr2)[1];
$coine = explode('เหรียญ', $coine)[0];
$id = explode('<div class="website_block" id="', $mr2)[1];
$id = explode('"', $id)[0];

if($id >= "0"){
	
///////LAY THOI GIAN 

$mr = curl_init();
curl_setopt_array($mr, array(
 CURLOPT_URL => "https://team-like.net/index.php?page=module&md=youtube&vid=".$id. "",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_HTTPHEADER => $tsm));

$mr2 = curl_exec($mr);curl_close($mr);
$json = json_decode($mr2,true);

$time = explode('var length = ', $mr2)[1];
$time = explode(';', $time)[0];
for ($time=$time;$time>-1;$time--){
echo "\e[1;95m└──╼\e[1;39m√\e[1;36m√\e[1;91m√\033[1;33mĐang Xem Video Chờ \033[1;35m[\033[0;37m$time\033[1;35m] \033[1;33mGiây \e[1;39m√\e[1;36m√\e[1;91m√\r";
sleep(1);
}

break;

}else{
while(true){
	
$mr = curl_init();
curl_setopt_array($mr, array(
 CURLOPT_URL => "https://team-like.net/system/modules/surf/process.php",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_POSTFIELDS => "get=1",
 CURLOPT_HTTPHEADER => $tsma));

$mr2 = curl_exec($mr);curl_close($mr);
$json = json_decode($mr2,true);

$time = explode('time":"', $mr2)[1];
$time = explode('"', $time)[0];

$url = explode('url":"', $mr2)[1];
$url = explode('"', $url)[0];

$cpc = explode('cpc":', $mr2)[1];
$cpc = explode(',', $cpc)[0];

$sid = explode('sid":"', $mr2)[1];
$sid = explode('"', $sid)[0];

$eurl = explode('eurl":"', $mr2)[1];
$eurl = explode('"', $eurl)[0];

if($sid >= "0"){
//////chuyen trang

$mr = curl_init();
curl_setopt_array($mr, array(
 CURLOPT_URL => "https://deref.net/64/".$eurl."",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_HTTPHEADER => $tsmb));

$mr2 = curl_exec($mr);curl_close($mr);
$json = json_decode($mr2,true);

$id1 = explode('URL=/r/?', $mr2)[1];
$id1 = explode('"', $id1)[0];

$mr = curl_init();
curl_setopt_array($mr, array(
 CURLOPT_URL => "https://deref.net/r/?".$id1."",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_HTTPHEADER => $tsmb));

$mr2 = curl_exec($mr);curl_close($mr);
$json = json_decode($mr2,true);


for ($time=$time;$time>-1;$time--){
echo "\e[1;95m└──╼\e[1;39m√\e[1;36m√\e[1;91m√\033[1;33mĐang Xem Ads Chờ \033[1;35m[\033[0;37m$time\033[1;35m] \033[1;33mGiây \e[1;39m√\e[1;36m√\e[1;91m√\r";
sleep(1);
}
break;

}else{for ($time=230;$time>-1;$time--){
echo $yellow."\t❌️\033[1;33mHẾT ADS TÌM LẠI SAU \033[1;35m[\033[0;37m$time\033[1;35m] \033[1;33mGiây \r";
sleep(1);
}}}

/////nhan tien
$mr = curl_init();
curl_setopt_array($mr, array(
 CURLOPT_URL => "https://team-like.net/system/modules/surf/process.php",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_POSTFIELDS => "complete=1&sid=".$sid."",
 CURLOPT_HTTPHEADER => $tsma));

$mr2 = curl_exec($mr);curl_close($mr);
$json = json_decode($mr2,true);
$job = $job +1;
echo$green2."=========>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<=========\n";
echo $yellow."[$white$job$yellow] $blue2 ID: $lightcyan$sid $blue2  XEM ADS NHẬN: ";
echo $lightcyan.$mr2." Xu ";
echo $white." XU: $coine\n";
echo$green2."=========>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<==========\n\n";
}}

/////nhan tien
$mr = curl_init();
curl_setopt_array($mr, array(
 CURLOPT_URL => "https://team-like.net/system/modules/youtube/process.php",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_POSTFIELDS => "data=".$id."",
 CURLOPT_HTTPHEADER => $tsma));

$mr2 = curl_exec($mr);curl_close($mr);
$json = json_decode($mr2,true);
$job = $job +1;
echo$green2."=========>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<=========\n";
echo $yellow."[$white$job$yellow] $blue2 ID: $lightcyan$id $blue2  XEM VIDEO NHẬN: ";
echo $lightcyan.$mr2." Xu ";


$mr = curl_init();
curl_setopt_array($mr, array(
 CURLOPT_URL => "https://team-like.net/index.php",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_HTTPHEADER => $tsm));

$mr2 = curl_exec($mr);curl_close($mr);
$json = json_decode($mr2,true);

$xu = explode('<div class="col-9 no-space">เหรียญ <div class="text-warning"><b id="c_coins">', $mr2)[1];
$xu = explode('เหรียญ', $xu)[0];
echo $white." XU: $xu\n";
echo$green2."=========>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<==========\n\n";
}
}

@system('clear');
$string = strlen($banner); for($i=0; $i<=$string; $i++){ echo $banner[$i];usleep(1500);} 
echo "\033[1;37m┌─────────────────────┐
\033[1;37m│ \e[1;41;93m TOOL WEB Team-Like\e[0m\033[1;37m │  
\033[1;37m└─────────────────────┘\n"; 
$tk1 = "https://team-like.net/index.php";
$tk=get($tk1,$tsm);
$name = explode('s=40" class="border border-white rounded" /> ', $tk)[1];
$name = explode('<', $name)[0];
$coin = explode('<div class="col-9 no-space">เหรียญ <div class="text-warning"><b id="c_coins">', $tk)[1];
$coin = explode('เหรียญ', $coin)[0];
$usd = explode('<div class="col-9 no-space">ยอดเงินในบัญชี <div><b class="text-success">', $tk)[1];
$usd = explode('<', $usd)[0];
echo$green2."=========>>>>>>>>>PROFILE ACCOUNT<<<<<<<<========\n";
echo $yellow."NAME: $name  XU: $coin  USD: $usd  \n";
echo$green2."=========>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<========\n\n";
///////////////////////////////////////////////////////////
while(true){
if($dom==1){$loai="ylike";}
if($dom==2){$loai="ysub";}
///////////////////////////////////////////////////////////

echo "\t⏭️ $loai \n";
///////////////////////////////////////////////////////////
$linh="https://team-like.net/index.php?page=module&md=$loai";
$web ="https://team-like.net/system/modules/$loai/process.php";
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
$ch = curl_init();
curl_setopt_array($ch, array(
 CURLOPT_URL => "https://team-like.net/index.php?page=module&md=$loai",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_HTTPHEADER => $tsm));

$chung = curl_exec($ch);curl_close($ch);
$json = json_decode($chung,true);

$id = explode('<div class="website_block" id="', $chung)[1];
$id = explode('"', $id)[0];
if($dom==1 or $dom==2){
$gia =explode("','Youtube')",explode("ModulePopup('".$id."','",$chung)[1])[0];
$gia1=explode("','".$loai."')",explode("report_page('".$id."','",$chung)[1])[0];}
///////////////////////////////////////////////////////////
////echo "1$gia\n";
/////echo "2$gia1\n";

///////////////////////////////////////////////////////////
if($id > 0){
///////////////////////////////////////////////////////////
$mr = curl_init();
curl_setopt_array($mr, array(
 CURLOPT_URL => $web,
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_POSTFIELDS => "get=1&url=$gia&pid=$id",
 CURLOPT_HTTPHEADER => $tsma));

$coc = curl_exec($mr);curl_close($mr);
$json = json_decode($coc,true);

$ty =explode('"',explode('type":"',$coc)[1])[0];
///////////////////////////////////////////////////////////
$nhantien1=post($web,$tsma,"get=1&pid=$id");
$kq1=explode('"',explode('type":"',$nhantien1)[1])[0];
//////chuyen trang

$mr = curl_init();
curl_setopt_array($mr, array(
 CURLOPT_URL => $gia,
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_HTTPHEADER => $tsmb));

$mr2 = curl_exec($mr);curl_close($mr);
$json = json_decode($mr2,true);

$id1 = explode('URL=/r/?', $mr2)[1];
$id1 = explode('"', $id1)[0];
/////echo "id1:$id1\n";
$mr = curl_init();
curl_setopt_array($mr, array(
 CURLOPT_URL => "https://deref.net/r/?$id1",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_HTTPHEADER => $tsmb));

$nhap = curl_exec($mr);curl_close($mr);
$json = json_decode($nhap,true);

$chuyen =explode('"',explode('URL=',$nhap)[1])[0];

//////echo "chuyen:$chuyen\n";
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
if($dom==1){$chuyen1=explode(' ',explode('=',$chuyen)[1])[0];}
if($dom==2){$chuyen1=explode(' ',explode('channel/',$chuyen)[1])[0];}
}else{echo  "🆗️QUAY LAỊ VÀO NGÀY MAI ! \n";
exit;
}
///////////////////////////////////////////////////////////
/////echo "chuyen1:$chuyen1\n";
///////////////////////////////////////////////////////////
/////////// phan like va dang ky kenh \\\if($dom==2){
$g = file_get_contents("https://m.youtube.com/channel/$chuyen");
$video=explode('"',explode('watchEndpoint":{"videoId":"',$g)[1])[0];
/////echo "video:$video\n";
//////echo "g:$g\n";
///////////////////////////////////////////////////////////
$nhep = file_get_contents("https://m.youtube.com/watch?v=$video",);
$kenh=explode('"',explode('"canonicalBaseUrl":"/channel/',$nhep)[1])[0];
/////echo "kenh:$kenh\n";
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
if($dom==1 or $dom=2){
$kopo=0;while($kopo < 123456789){$kopo++;sleep(3);
if($kopo==15){break;}
///////////////////////////////////////////////////////////
$tsm200=array($z1,$z2,$z3,$z4,$z5,$z6,$z7);
$v=kk("https://m.youtube.com/watch?v=$id",$tsm200);

$hl = explode('hl":"', $v)[1];
$hl = explode('"', $hl)[0];

$gl = explode('gl":"', $v)[1];
$gl = explode('"', $gl)[0];

$remoteHost = explode('remoteHost":"', $v)[1];
$remoteHost = explode('"', $remoteHost)[0];

$deviceMake = explode('deviceMake":"', $v)[1];
$deviceMake = explode('"', $deviceMake)[0];

$deviceModel = explode('deviceModel":"', $v)[1];
$deviceModel = explode('"', $deviceModel)[0];

$visitorData = explode('visitorData":"', $v)[1];
$visitorData = explode('"', $visitorData)[0];

$userAgent = explode('userAgent":"', $v)[1];
$userAgent = explode('"', $userAgent)[0];

$clientName = explode('clientName":"', $v)[1];
$clientName = explode('"', $clientName)[0];

$clientVersion = explode('clientVersion":"', $v)[1];
$clientVersion = explode('"', $clientVersion)[0];

$osName = explode('osName":"', $v)[1];
$osName = explode('"', $osName)[0];

$osVersion = explode('osVersion":"', $v)[1];
$osVersion = explode('"', $osVersion)[0];

$originalUrl = explode('originalUrl":"', $v)[1];
$originalUrl = explode('"', $originalUrl)[0];

$playerType = explode('playerType":"', $v)[1];
$playerType = explode('"', $playerType)[0];

$screenPixelDensity = explode('screenPixelDensity":"', $v)[1];
$screenPixelDensity = explode('"', $screenPixelDensity)[0];

$platform = explode('platform":"', $v)[1];
$platform = explode('"', $platform)[0];

$clientFormFactor = explode('clientFormFactor":"', $v)[1];
$clientFormFactor = explode('"', $clientFormFactor)[0];

$appInstallData = explode('appInstallData":"', $v)[1];
$appInstallData = explode('"', $appInstallData)[0];

$screenDensityFloat = explode('screenDensityFloat":"', $v)[1];
$screenDensityFloat = explode('"', $screenDensityFloat)[0];

$browserName = explode('browserName":"', $v)[1];
$browserName = explode('"', $browserName)[0];

$browserVersion = explode('browserVersion":"', $v)[1];
$browserVersion = explode('"', $browserVersion)[0];

$clickTrackingParams = explode('clickTrackingParams":"', $v)[1];
$clickTrackingParams = explode('"', $clickTrackingParams)[0];

$innertubeApiKey = explode('innertubeApiKey":"', $v)[1];
$innertubeApiKey = explode('"', $innertubeApiKey)[0];
///////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////
$z8="x-origin: https://m.youtube.com";
$z9="authorization:".$author."";
$z10="content-type:application/json";
$z11="x-youtube-client-name:2";
$z12="x-youtube-client-version:".$clientVersion."";
$z13="x-goog-authuser:".$goog."";
$z14="x-goog-visitor-id:".$visitorData."";
$z15="x-client-data:CIu2yQEIorbJAQipncoBCM+PywEIlKHLAQiRucwBCIS8zAEI1bzMAQjlvcwBCIe+zAEIkb/MAQj3v8wBCKvBzAEIucHMAQjLwcwBCM3CzAEI3MTMAQidycwBGKupygEYurLMAQ==";
$z16="Cookie:".$doki."";
$tsm201=array($z1,$z8,$z2,$z9,$z10,$z4,$z11,$z12,$z13,$z14,$z15,$z16);
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
if($dom==1){$xaocho="✅️LIKE THÀNH CÔNG";
$dklk = "https://m.youtube.com/youtubei/v1/like/like?key=$innertubeApiKey&prettyPrint=false";
$huydky = "https://m.youtube.com/youtubei/v1/like/removelike?key=$innertubeApiKey&prettyPrint=false";
$dali = '{"context":{"client":{"hl":"'.$hl.'","gl":"'.$gl.'","remoteHost":"'.$remoteHost.'","deviceMake":"'.$deviceMake.'","deviceModel":"'.$deviceModel.'","visitorData":"'.$visitorData.'","userAgent":"'.$userAgent.'","clientName":"'.$clientName.'","clientVersion":"'.$clientVersion.'","osName":"'.$osName.'","osVersion":"'.$osVersion.'","originalUrl":"'.$originalUrl.'","playerType":"'.$playerType.'","screenPixelDensity":'.$screenPixelDensity.',"platform":"'.$platform.'","clientFormFactor":"'.$clientFormFactor.'","configInfo":{"appInstallData":"'.$appInstallData.'"},"screenDensityFloat":'.$screenDensityFloat.',"browserName":"'.$browserName.'","browserVersion":"'.$browserVersion.'","screenWidthPoints":360,"screenHeightPoints":552,"utcOffsetMinutes":420,"userInterfaceTheme":"USER_INTERFACE_THEME_LIGHT","connectionType":"CONN_WIFI","memoryTotalKbytes":"2000000","mainAppWebInfo":{"graftUrl":"https://m.youtube.com/watch?v=nXzk9izqN3A&noapp=1","webDisplayMode":"WEB_DISPLAY_MODE_BROWSER","isWebNativeShareAvailable":true},"timeZone":"Asia/Saigon"},"user":{"lockedSafetyMode":false},"request":{"useSsl":true,"internalExperimentFlags":[],"consistencyTokenJars":[]},"clientScreenNonce":"MC44MzQ5ODg0NzY4NDkzOTcx","clickTracking":{"clickTrackingParams":"CHYQmE0iEwjThbyv7ff2AhVJKbcAHbhMBP8="},"adSignalsInfo":{"params":[{"key":"dt","value":"1648987569107"},{"key":"flash","value":"0"},{"key":"frm","value":"0"},{"key":"u_tz","value":"420"},{"key":"u_his","value":"10"},{"key":"u_h","value":"720"},{"key":"u_w","value":"360"},{"key":"u_ah","value":"720"},{"key":"u_aw","value":"360"},{"key":"u_cd","value":"24"},{"key":"bc","value":"31"},{"key":"bih","value":"552"},{"key":"biw","value":"360"},{"key":"brdim","value":"0,0,0,0,360,0,360,552,360,552"},{"key":"vis","value":"1"},{"key":"wgl","value":"true"},{"key":"ca_type","value":"image"}]}},"target":{"videoId":"'.$chuyen1.'"},"params":"'.$clickTrackingParams.'"}';}
///////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////
if($dom==2){$xaocho="✅️ĐĂNG KÝ THÀNH CÔNG";
$dklk = "https://m.youtube.com/youtubei/v1/subscription/subscribe?key=$innertubeApiKey&prettyPrint=false";
$huydky = "https://m.youtube.com/youtubei/v1/subscription/unsubscribe?key=$innertubeApiKey&prettyPrint=false";
$dali = '{"context":{"client":{"hl":"'.$hl.'","gl":"'.$gl.'","remoteHost":"'.$remoteHost.'","deviceMake":"'.$deviceMake.'","deviceModel":"'.$deviceModel.'","visitorData":"'.$visitorData.'","userAgent":"'.$userAgent.'","clientName":"'.$clientName.'","clientVersion":"'.$clientVersion.'","osName":"'.$osName.'","osVersion":"'.$osVersion.'","originalUrl":"'.$originalUrl.'","playerType":"'.$playerType.'","screenPixelDensity":'.$screenPixelDensity.',"platform":"'.$platform.'","clientFormFactor":"'.$clientFormFactor.'","configInfo":{"appInstallData":"'.$appInstallData.'"},"screenDensityFloat":'.$screenDensityFloat.',"browserName":"'.$browserName.'","browserVersion":"'.$browserVersion.'","screenWidthPoints":360,"screenHeightPoints":552,"utcOffsetMinutes":420,"userInterfaceTheme":"USER_INTERFACE_THEME_LIGHT","connectionType":"CONN_WIFI","memoryTotalKbytes":"2000000","mainAppWebInfo":{"graftUrl":"https://m.youtube.com/watch?v=yrrydg6thoo","webDisplayMode":"WEB_DISPLAY_MODE_BROWSER","isWebNativeShareAvailable":true},"timeZone":"Asia/Saigon"},"user":{"lockedSafetyMode":false},"request":{"useSsl":true,"internalExperimentFlags":[],"consistencyTokenJars":[]},"clientScreenNonce":"MC4wNTE4NzA5MjM3ODE1NTY0NDQ.","clickTracking":{"clickTrackingParams":"CGsQmysiEwi24vXzgfj2AhVQjNgFHQV2DI4yBXdhdGNo"},"adSignalsInfo":{"params":[{"key":"dt","value":"1648993080122"},{"key":"flash","value":"0"},{"key":"frm","value":"0"},{"key":"u_tz","value":"420"},{"key":"u_his","value":"29"},{"key":"u_h","value":"720"},{"key":"u_w","value":"360"},{"key":"u_ah","value":"720"},{"key":"u_aw","value":"360"},{"key":"u_cd","value":"24"},{"key":"bc","value":"31"},{"key":"bih","value":"552"},{"key":"biw","value":"360"},{"key":"brdim","value":"0,0,0,0,360,0,360,552,360,552"},{"key":"vis","value":"1"},{"key":"wgl","value":"true"},{"key":"ca_type","value":"image"}]}},"channelIds":["'.$chuyen1.'"],"params":"'.$clickTrackingParams.'"}';}
///////////////////////////////////////////////////////////

////echo "$dali\n";
///////////////////////////////////////////////////////////
$chung=hk($dklk,$tsm201,$dali);
$chung=json_decode($chung,true);
$nokoi=$chung['error']['code'];
////echo "$nokoi\n";
///////////////////////////////////////////////////////////
if($nokoi==404 or $nokoi==401 or $nokoi==400){
echo $n. "🔄 $id Lỗi $nokoi Quay Lại ! [ $kopo ]";
echo "\r";
continue;

break;
}else{echo "$xaocho ";
for($time=10;$time>-1;$time--){echo " $time ....................\r";
sleep(1);}
}}
///////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////
$nhantien=post($web,$tsma,"id=$id");
$kq=explode('"',explode('type":"',$nhantien)[1])[0];
///////////////////////////////////////////////////////////
////echo "kq:$kq\n";
///////////////////////////////////////////////////////////
if($kq=="error"){$dahuy=hk($huydky,$tsm201,$dali);
$dahuy=json_decode($dahuy,true);
$koino=$dahuy['error']['code'];
$bao=post($web,$tsm,"step=skip&sid=$id");

echo  "\t❗️=> Báo Lỗi Thành Công ! \n";
continue;
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
}else{
$tk3=get($tk1,$tsm);

$xu = explode('<div class="col-9 no-space">เหรียญ <div class="text-warning"><b id="c_coins">', $tk3)[1];
$xu = explode('เหรียญ', $xu)[0];
$job = $job +1;
echo$green2."=========>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<=========\n";
echo $yellow."[$white$job$yellow] $blue2 ID: $lightcyan$id $blue2  NHẬN: ";
echo $lightcyan.$kq;
echo $white." XU: $xu\n";
echo$green2."=========>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<==========\n\n";

sleep(1);}}}
