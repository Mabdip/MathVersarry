 <div class="container" style="margin-top: 100px;padding: 4px;">
  <div class="row">
    <h2 style="text-align: left;">Info SPSS</h2>
    <hr>
    <div class="modal-body" style=".modal-body {
  overflow: scroll;
} 
    .modal-body img {
  max-width: auto;
}
">
<img id="myImg" src="<?php echo base_url();?>assets/main/img/pamflet.jpeg" alt="" style="width:100%;max-width:300px">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
</div>
<p style="font-size: 18px;">1. Aplikasi spss yang digunakan adalah spss 20.</p>
<p style="font-size: 18px;">2. Peserta dapat menginstall aplikasi spss dengan cara:
  <li style="margin-left: 50px;font-size: 18px;"> Mengunduh sendiri link:..........</li>
  <li style="margin-left: 50px;font-size: 18px;"> Datang ke sekret himastik,ika unsri dan membawa flashdisk / laptop pribadi. (konfirmasi melalui CP)</li></p>
<p style="font-size: 18px;">3. materi spss di unduh di bagian Download e-book.</p>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

</div>
</div>