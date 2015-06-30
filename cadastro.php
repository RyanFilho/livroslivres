<?php include 'header.html'; ?>

      <div class="container-fluid" style=""> 
        <div class="col-md-6 col-md-offset-3">             
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Crie uma conta e compartilhe !</h3>
              </div>
              <div class="panel-body">
                  
                          <form class="form-horizontal" method="post" action="pages/envio_cadastro.php">
                        <div class="form-group">
                          <label for="nome-user" class="col-sm-2 control-label">Nome</label>
                          <div class="col-sm-10">
                            <input type="text" required="required" class="form-control" id="nome-user" name="nome-user" placeholder="Nome">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="email-user" class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" required="required" class="form-control" id="email-user" name="email-user" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="senha-user" class="col-sm-2 control-label">Senha</label>
                          <div class="col-sm-10">
                            <input type="password" required="required" class="form-control" id="senha-user" name="senha-user" placeholder="Senha">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="confirmar-user" class="col-sm-2 control-label">Confirme a senha</label>
                          <div class="col-sm-10">
                            <input type="password" required="required" class="form-control" id="confirmar-user"  name="confirmar-user"placeholder="Senha">
                          </div>
                        </div>              
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Cadastrar</button>
                          </div>
                        </div>
                      </form>            
                </div>
              </div>
            </div>
     
      </div>
  </body>
</html>