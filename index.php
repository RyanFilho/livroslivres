<?php include 'header.html'; ?>

    <div class="container">    
      <div class="text-center">
      
        <div class="row">  
          <div class="col-md-6 col-md-offset-3">
            <img class="img-responsive" style="" src="imagens/logo.png" alt="Logo Img">
          </div>        
        </div>

        <div class="row">  
          <form method="get" action="resultado.php">            
            <div class="form-group col-md-6 col-md-offset-3">
              <div class="input-group">
                <input name="busca" type="text" class="form-control index" id="pesquisa" placeholder="Titulo, Autor, Editora...">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit">Procurar!</button>
                </span>
              </div><!-- /input-group -->
            </div><!-- /.form-group -->
          </form>           
        </div><!-- /.row -->  

      </div><!-- /.text-center -->                  
    </div><!-- /.container-fluid -->      
  </body>
</html>