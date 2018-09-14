<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Ujian</title>
 
<style type="text/css">
 
::selection{ background-color: #E13300; color: white; }
::moz-selection{ background-color: #E13300; color: white; }
::webkit-selection{ background-color: #E13300; color: white; }
 
body {
background-color: #fff;
margin: 40px;
font: 13px/20px normal Helvetica, Arial, sans-serif;
color: #4F5155;
}
 
a {
color: #003399;
background-color: transparent;
font-weight: normal;
}
 
h1 {
color: #444;
background-color: transparent;
border-bottom: 1px solid #D0D0D0;
font-size: 19px;
font-weight: normal;
margin: 0 0 14px 0;
padding: 14px 15px 10px 15px;
}
 
code {
font-family: Consolas, Monaco, Courier New, Courier, monospace;
font-size: 12px;
background-color: #f9f9f9;
border: 1px solid #D0D0D0;
color: #002166;
display: block;
margin: 14px 0 14px 0;
padding: 12px 10px 12px 10px;
}
 
#body{
margin: 0 15px 0 15px;
}
 
p.footer{
text-align: right;
font-size: 11px;
border-top: 1px solid #D0D0D0;
line-height: 32px;
padding: 0 10px 0 10px;
margin: 20px 0 0 0;
}
 
#container{
margin: 10px;
border: 1px solid #D0D0D0;
-webkit-box-shadow: 0 0 8px #D0D0D0;
}
 
#container .top-timer{
background-color: #9dd442;
border:4px solid #6ab63c;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
color: #fff;
display: block;
font-size: 30px;
margin: 0 auto;
padding:5px;
text-align: center;
width: 10%;
 
}
#container .top-timer span{
text-align:center;
font-size:22px !important;
display:block;
color:#fff;
}
#container  a{
text-align:center;
text-decoration: none;
}
</style>
</head>
<?php
$time_allowed = 0;
 
if($this->session->userdata('time_allowed')){
$time_allowed = $this->session->userdata('time_allowed');
}
if (!$this->session->userdata('endOfTimer')){
$endOfTimer = time() + $time_allowed;
$this->session->set_userdata('endOfTimer',$endOfTimer);
redirect('ujian','refresh');
}
 
if(($this->session->userdata('endOfTimer') - time()) < 0) {
$timeTilEnd = 0;
}else{
$timeTilEnd = $this->session->userdata('endOfTimer') - time();
$this->session->sess_destroy();
}
 
function secondsToWords($seconds){
$ret = "";
/*** get the hours ***/
$hours = intval(intval($seconds) / 3600);
if($hours > 0){
$ret .= "$hours:";
}
/*** get the minutes ***/
$minutes = bcmod((intval($seconds) / 60),60);
if($hours > 0 || $minutes > 0){
$ret .= "$minutes:";
}
/*** get the seconds ***/
$seconds = bcmod(intval($seconds),60);
if($seconds < 10){
$ret .= "0"."$seconds";
}else{
$ret .= "$seconds";
}
return $ret;
}
?>
<body>
 
<div id="container">
<h1>Welcome to php timer using codeigniter</h1>
 
<div id="body">
 
<div class="top-timer">
<a href="javascript:void(0);"><span>TIME</span><span id="timer"><?php echo secondsToWords($timeTilEnd); ?></span></a>
</div>
<hr>
 <p>lsklkflskflk</p>
 
</div>
 
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
 
</body>
</html>
 
<script type="text/javascript">
 
var TimeLeft = '<?php echo $timeTilEnd; ?>';
TimeLeft = Number(TimeLeft);
function countdown(){
if(Number(TimeLeft) > 0) {
TimeLeft -= 1;
document.getElementById('timer').innerHTML = seconds2time(TimeLeft);
}else{
if(Number(TimeLeft) == 0){
clearInterval(CountFunc);
return false;
}
}
}
 
var CountFunc = setInterval(countdown,1000);
 
function seconds2time (seconds) {
var hours   = Math.floor(seconds / 3600);
var minutes = Math.floor((seconds - (hours * 3600)) / 60);
var seconds = seconds - (hours * 3600) - (minutes * 60);
var time = "";
 
if (hours != 0) {
time = hours+":";
}
if (minutes != 0 || time !== "") {
minutes = (minutes < 10 && time !== "") ? "0"+minutes : String(minutes);
time += minutes+":";
}
if (time === "") {
time = seconds+"s";
}else {
time += (seconds < 10) ? "0"+seconds : String(seconds);
}
return time;
}
 
</script>