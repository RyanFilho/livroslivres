<?php include 'header.html'; ?>

      <div class="container-fluid" style=""> 
        <div class="col-md-4 col-md-offset-4">   
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>
                <div class="panel-body">
                    <form class="form-signin form" id="login-form" action="/login" method="post" >         
                        <div class="email">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input autocomplete="off" required="required" autofocus="autofocus" class="form-control" placeholder="E-mail" name="email-user"  type="email">
                                </div>
                            </div>
                        </div>


                        <div class="senha">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                                    <input autocomplete="off" required="required" class="form-control" placeholder="Senha" name="senha-user" id="" type="password">
                                </div>
                            </div>
                          </div>

                        <button class="btn-block btn btn-primary btn-lg" id="" type="submit" name="yt0">Entrar</button>                       
                    </form>
                </div>
            </div>
        </div>
        <span class="clearfix"></span>
          
          
           
     
      </div>
  </body>
</html>