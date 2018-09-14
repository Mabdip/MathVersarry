<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Ujian</title>
 <link href="<?php echo base_url();?>assets/main/css/bootstrap.css" rel="stylesheet" />
     
    <link href="<?php echo base_url();?>assets/main/css/font-awesome.css" rel="stylesheet" />
    
       
    <link href="<?php echo base_url();?>assets/main/css/custom.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/main/css/chosen.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/main/css/jquery.countdown.css" />
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/main/img/favicon.gif" type="image/x-icon">
    <style type="text/css">
        .chzn-container-single .chzn-search input{
            width: 100%;
        }
    </style>



    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/main/css/ui-lightness/jquery-ui-1.8.2.custom.css" />  
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
width: 20%;
height: auto;
 
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

<body>
 
<div id="container">
<h1>Welcome to php timer using codeigniter</h1>
 
<div id="body">
 
<div class="top-timer">

</div>
<hr>
 <p>lsklkflskflk</p>
 
</div>
    <p>sadasd</p>
    <?php 
           $urut = 0; foreach($data as $i):?>
                    
                     <form name="form1" method="post" action="?page=jawaban">
            <input type="hidden" name="id[]" value=<?php echo $i->id_soal; ?>>
            <table width="457" border="0">
            <tr>
                <td width="17"><font color="#FFFFFF"><?php echo $urut=$urut+1; ?></font></td>
                <td width="430"><font color="#FFFFFF"><?php echo "$i->pertanyaan"; ?></font></td>
            </tr>
            <tr>
                <td height="21">&nbsp;</td>
                <td><input name="pilihan[<?php echo $id; ?>]" type="radio" value="A"> <font color="#FFFFFF"><?php echo "$pilihan_a";?></font> </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input name="pilihan[<?php echo $id; ?>]" type="radio" value="B"> <font color="#FFFFFF"><?php echo "$pilihan_b";?></font> </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input name="pilihan[<?php echo $id; ?>]" type="radio" value="C"> <font color="#FFFFFF"><?php echo "$pilihan_c";?></font> </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input name="pilihan[<?php echo $id; ?>]" type="radio" value="D"> <font color="#FFFFFF"><?php echo "$pilihan_d";?></font> </td>
            </tr>
            </table>     
            
            
            ?>
   
        <?php $urut++; endforeach; ?>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"></td>
            </tr>
        </form>
        </p>
               
</div>
 
</body>
</html>
<script>
// Set the date we're counting down to
var countDownDate = new Date("Sep 12, 2018 20:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo");
        var direct = document.getElementById("direct"); 
                            alert('Waktu Anda telah habis, Terima kasih sudah berkunjung.');
                           direct.submit();
    }
}, 1000);
</script>


                        <!-- /. NAV SIDE  -->
                

    <script type="text/javascript" src="mantap/js/jquery-1.4.2.min.js"></script>        
    <script type="text/javascript" src="mantap/js/jquery.form.js"></script>
    <script type="text/javascript" src="mantap/js/jquery.validate.js"></script>
    <script type="text/javascript" src="mantap/js/bbq.js"></script>
    <script type="text/javascript" src="mantap/js/jquery-ui-1.8.5.custom.min.js"></script>
    <script type="text/javascript" src="mantap/js/jquery.form.wizard.js"></script>
    
    <script type="text/javascript">
            $(function(){
                $("#demoForm").formwizard({ 
                    formPluginEnabled: true,
                    validationEnabled: true,
                    focusFirstInput : true,
                    formOptions :{
                        success: function(data){$("#status").fadeTo(500,1,function(){ $(this).html("You are now registered!").fadeTo(5000, 0); })},
                        beforeSubmit: function(data){$("#data").html("data sent to the server: " + $.param(data));},
                        dataType: 'json',
                        resetForm: true
                    },
                    inAnimation : {height: 'show'},
                    outAnimation: {height: 'hide'},
                    inDuration : 700,
                    outDuration: 700,
                    easing: 'easeOutBounce' //see e.g. http://gsgd.co.uk/sandbox/jquery/easing/ for information on easing
                 }
                );
        });
          </script>
          
<script type="text/javascript" src="assets/js/jquery.plugin.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
<!-- /. WRAPPER  -->