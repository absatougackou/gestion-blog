<?php
  require_once(PATH_ROOT."views/include/header.inc.html.php");
  require_once(PATH_ROOT."views/include/menu.inc.html.php");
  if(isset($_SESSION["arr_error"])){
    $arr_error=$_SESSION["arr_error"];
    //suppression de l'erreur stockée dans la session
    unset($_SESSION["arr_error"]);
  }
?>
<div class="container mt-5">
            <div class="card my-5 ">
                <div class="card-body">
                    <h4 class="card-title text-center text-info font-weight-bold">Gestion de Blog</h4>
                    <?php if(isset($arr_error["error_login"])):?>
                        <div class="alert alert-danger col-8 ml-5" role="alert">
                          <strong><?php echo $arr_error["error_login"];?></strong>
                        </div>
                    <?php endif ?>
                    <form class="my-2 mx-5 w-75" action="<?=WEB_ROOT?>" method="post">
                           <input type="hidden" name="controller" value="security">
                            <div class="form-group">
                              <label for="">Login</label>
                              <input type="text" class="form-control" name="login" id="" aria-describedby="helpId" placeholder="">
                              <?php if(isset($arr_error["login"])):?>
                                <small id="helpId" class="form-text text-danger"><?= $arr_error["login"]?></small>
                              <?php endif?>
                            </div>
                            <div class="form-group">
                              <label for="">Password</label>
                              <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
                              <?php if(isset($arr_error["password"])):?>
                                <small id="helpId" class="form-text text-danger"><?= $arr_error["password"]?></small>
                              <?php endif?>
                            </div>
                            <div class="row">
                                <div class="col-md-2 offset-md-10">
                                    <button type="submit" class="btn btn-primary" name="btn_submit" value="btn_login">Se connecter</button>
                                </div>
                            </div> 
                    </form>
                </div>
            </div>
      </div>
<?php
  require_once(PATH_ROOT."views/include/footer.inc.html.php");
?> 