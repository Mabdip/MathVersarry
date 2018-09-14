<body>
<form class="form-horizontal" action="<?php echo base_url().'homepage/auth'?> " method="POST">
  <div class="container">
    <div class="jumbotron" style="width: 800px;margin-right: auto;margin-left: auto;display: block;background-color: #fafafa;">

        <div class="header"><h3 style="text-align: center;">Welcome to Login</h3></div>
       <hr>
       <?php echo $this->session->flashdata('msg'); ?>
       <div class="form-group">
          <label for="nisn" >NISN:</label>
        <input type="text" class="form-control" name="nisn" required="required">
      </div>

      <div class="form-group">
         <label for="password">Password:</label>
         <input type="password" class="form-control" name="password" required="required">
      </div>
    
       <br>
       <button type="submit" name="submit" class="btn btn-success" style="margin-left: 590px;">Login</button>
     </div>

  </div>
</form>

</body>