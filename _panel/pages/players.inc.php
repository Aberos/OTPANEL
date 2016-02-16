 <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Players <small>Lista de todos os players do servidor (<?php echo Players::GetCount()?>)</small>
                </h1>
            </div>
        </div>

   <div class="row">

    <div style="margin-bottom:5px;" class="col-md-6 pull-right">
        <form method="GET" action="" class="form-inline pull-right">
            <div class="form-group">
                <input autocomplete="off" name="url" value="Episodios/Listar" type="hidden">
                <input autocomplete="off" name="search" class="form-control" placeholder="Pesquise..." type="text">
            </div>
            <button class="btn btn-success">Pesquisar</button>
            <span class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Você pode pesquisar por nome do episódio, numero do episódio ou descrição !" type="submit"><i class="fa fa-question"></i></span>
        </form>
    </div>

</div>

<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">

        <thead>
            <tr>
                
                <th>Nome</th>
                <th>Conta</th>
                <th>Level</th>
                <th>Experiência</th>
                <th>Cidade</th>
                <th>Sexo</th>
                <th>Ação</th>
            </tr>
        </thead>

        <tbody>

            <?php
                
            foreach (Players::GetPlayers() as $player){
            
            ?>

                    <tr>
                        <td><?php echo $player['name']?></td>
                        <td><?php echo Accounts::GetNameAccountId($player['account_id'])?></td>
                        <td><?php echo $player['level']?></td>
                        <td><?php echo $player['experience']?></td>
                        <td><?php echo $player['town_id']?></td>
                        <td><?php if($player['sex'] == 1){echo "Masculino";}else{echo "Feminino";}?></td>
                        <td>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a class="btn btn-sm btn-success btn-block" target="_blank" href="">Visualizar</a>
                                    <a class="btn btn-sm btn-primary btn-block" href="painel.php?exe=edit-account&id=<?php echo $player['id']?>">Editar</a>
                                    <span class="col-lg-12 btn btn-danger btn-block" data-toggle="modal" data-target="modal-del">Excluir</span> 
                                </div>
                                <div class="modal fade" data-modal="modal-del" id="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Tem certeza que deseja excluir a conta?</h4>
                                            </div>
                                            <div class="modal-body">
                                                Você deve clicar em excluir caso realmente deseja deletar essa conta
                                                <div id="status"></div> 
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                <a class="col-lg-12 btn btn-danger btn-block" style="width: 15%" href="painel.php?exe=epi&del=">Excluir</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>

                    <?php
            }
            ?>
        </tbody>
    </table>
</div>


    <?php

?>
                

