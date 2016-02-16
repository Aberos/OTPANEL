 <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Dashboard <small>Detalhes sobre o Servidor</small>
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa fa-user fa-5x"></i>
                            </div>
                           
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo Accounts::GetCount()?></div>
                                <div>Contas</div>
                            </div>
                        </div>
                    </div>
                    <a href="painel.php?exe=contas">
                        <div class="panel-footer">
                            <span class="pull-left">Ver todas as Contas</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
                
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa fa-users fa-5x"></i>
                            </div>
                            
                            
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo Players::GetCount();?></div>
                                <div>Players</div>
                            </div>
                        </div>
                    </div>
                    <a href="painel.php?exe=players">
                        <div class="panel-footer">
                            <span class="pull-left">Ver todos os players</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-star fa-5x"></i>
                            </div>
                            
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo Accounts::GetCountVip(); ?></div>
                                <div>Contas Vips</div>
                            </div>
                        </div>
                    </div>
                    <a href="painel.php?exe=filmes">
                        <div class="panel-footer">
                            <span class="pull-left">Ver todas contas vip</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-stop fa-5x"></i>
                            </div>
                           
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo Accounts::GetCountBans();?></div>
                                <div>Contas Banidas</div>
                            </div>
                        </div>
                    </div>
                    <a href="painel.php?exe=gen">
                        <div class="panel-footer">
                            <span class="pull-left">Ver todos os Banimentos</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>



        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-calendar fa-fw"></i> Notas de atualização</h3>
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <span class="badge">13/02/2016</span>
                                <i class="fa fa-fw fa-star"></i> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">13/02/2016</span>
                                <i class="fa fa-fw fa-star"></i> Painel de gerenciamento de servidores
                            </a>
                        </div>
                        <div class="text-right">
                            <a href="#">Ver todas notas de atualização <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-bar-chart fa-fw"></i> Estatisticas do site</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#Hoje</th>
                                        <th>Visualizações de página</th>
                                        <th>Visitas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>13/02</td>
                                        <td>Em construção..</td>
                                        <td>Em construção...</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-right">
                            <a href="#">Ver estatisticas detalhadas <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <?php

?>
                

