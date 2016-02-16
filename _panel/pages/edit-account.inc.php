<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Editar Conta <small></small>
        </h1>
    </div>
</div>

<?php
$id = $_GET['id'];

if (@isset($_POST['upacc'])) {

    $a['name'] = htmlspecialchars($_POST['login']);
    $a['email'] = htmlspecialchars($_POST['email']);
    $a['nickname'] = htmlspecialchars($_POST['nickname']);
    $a['premdays'] = htmlspecialchars($_POST['premdays']);
    $a['premium_points'] = htmlspecialchars($_POST['premium_points']);
    
    Accounts::UpdateAccount($a, $id);
}

foreach (Accounts::GetAccountId($id) as $acc) { ?>

    <div class="row">
        <div class="col-lg-8" >
            <form role="form" name="addepi" method="post" action="" enctype="multipart/form-data">
                
                <div class="form-group">
                    <h4><label>Login</label></h4>
                    <input class="form-control" placeholder="Login da Conta.." name="login" value="<?php echo $acc['name'] ?>" type="text">
                </div>
                
                <div class="form-group">
                    <h4><label>E-mail</label></h4>
                    <input class="form-control" placeholder="E-mail da Conta.." name="email" value="<?php echo $acc['email'] ?>" type="text">
                </div>
                
                <div class="form-group">
                    <h4><label>Nick</label></h4>
                    <input class="form-control" placeholder="Nick da Conta.." name="nickname" value="<?php echo $acc['nickname'] ?>" type="text">
                </div>
                
                <div class="form-group">
                    <h4><label>Dias de Vip</label></h4>
                    <input class="form-control" placeholder="Dias vip da  Conta.." name="premdays" value="<?php echo $acc['premdays'] ?>" type="text">
                </div>
                
                <div class="form-group">
                    <h4><label>Pontos</label></h4>
                    <input class="form-control" placeholder="Pontos da Conta.." name="premium_points" value="<?php echo $acc['premium_points'] ?>" type="text">
                </div>
                
                <button type="submit" class="btn btn-default" name="upacc" value="upacc">Atualizar</button>
            </form>
        </div>
    </div>
    <!-- /.row -->
<?php } ?>    



