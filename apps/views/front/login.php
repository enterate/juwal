  <style type="text/css">

  </style>
  <div id="gtco-features-2" style="background-image:url(<?= base_url() ?>source/images/img_bg_5.jpg);">
    <div class="gtco-container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
          <h2>Login</h2>
          <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
        </div>
        <!--  -->
      <div class="container">    
        <div id="loginbox" style="margin-top:-50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
          <div class="panel panel-info" >
            <div class="panel-heading">
              <div class="panel-title"></div>
              
            </div>     

            <div style="padding-top:30px" class="panel-body" >
              <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>              
              <?php echo form_open(base_url(uri_string()), array('method' => 'POST', 'id' =>'createform')); ?>
                <div style="margin-bottom: 25px" class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="login-username" type="text" class="form-control" name="uname" value="" placeholder="Email">                                        
                </div>

                <div style="margin-bottom: 25px" class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="login-password" type="password" class="form-control" name="upassw" placeholder="Password">
                </div>



                <div class="input-group">
                  <div class="checkbox">
                    <label>
                      <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                    </label>
                  </div>
                </div>


                <div style="margin-top:10px" class="form-group">
                  <!-- Button -->

                  <div class="col-sm-12 controls">
                    <button type="submit" value="1" name="login" class="btn btn-success">Login</button>
                    <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

                  </div>
                </div>


                <div class="form-group">
                  <div class="col-md-12 control">
                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                      Don't have an account! 
                      <a href="<?= base_url() ?>front/login/register" >
                        Sign Up Here
                      </a>
                    </div>
                  </div>
                </div>    
              </form>     



            </div>                     
          </div>  
        </div>
        
      </div>

      <!--  -->
      </div>
      
      

    </div>
  </div>

  <script type="text/javascript">
    var csrf_value = '<?php echo $this->security->get_csrf_hash(); ?>';
    $('#createform').on('submit', function(e)
      {     
        $.post( csrf_value, $('#createform').serialize(), function( response ) {        
      }, 'json' );       
      });    
  </script>

  

  

  
