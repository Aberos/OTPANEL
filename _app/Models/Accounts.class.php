<?php
/**
 * Accounts.class [ MODEL ]
 * Classe responsavel pela manipulação de contas
 * @copyright (c) 2016, Felipe Muniz, CEOS OT PANEL
 */
class Accounts {
    
    /**
     * Obtem a quantidade total de contas
     */
    public static function GetCount() {

        $Read = new Read;
        $Read->FullRead("SELECT COUNT(*) as id FROM accounts");
        $Result = $Read->getResult();

        if ($Result):
            foreach ($Read->getResult() as $accs)
                return $accs['id'];
        else:
            return false;
        endif;
    }
    
    /**
     * Obtem a quantidade total de contas vips
     */
    public static function GetCountVip() {

        $Read = new Read;
        $Read->FullRead("SELECT COUNT(*) as account_id FROM account_viplist");
        $Result = $Read->getResult();

        if ($Result):
            foreach ($Read->getResult() as $acc)
                return $acc['account_id'];
        else:
            return false;
        endif;
    }
    
    /**
     * Obtem a quantidade total de contas vips
     */
    public static function GetCountBans() {

        $Read = new Read;
        $Read->FullRead("SELECT COUNT(*) as id FROM bans");
        $Result = $Read->getResult();

        if ($Result):
            foreach ($Read->getResult() as $acc)
                return $acc['id'];
        else:
            return false;
        endif;
    }
    
    /**
     * Obtem todas as contas
     * @return $Array [] de contas
     */
    public static function GetAccounts() {

        $Read = new Read;
        $Read->ExeRead('accounts', "ORDER BY id DESC");
        $Result = $Read->getResult();

        if ($Result):
            return $Result;
        else:
            return false;
        endif;
    }
    
    /**
     * Obtem a conta com o id tal 
     * @return $Array [] de contas
     */
    public static function GetAccountId($id) {

        $Read = new Read;
        $Read->ExeRead('accounts', "WHERE id = :id", "id=$id");
        $Result = $Read->getResult();

        if ($Result):
            return $Result;
        else:
            return false;
        endif;
    }
    
    /**
     * Obtem o nome da conta
     */
    public static function GetNameAccountId($id) {

        $Read = new Read;
        $Read->ExeRead('accounts', "WHERE id = :id", "id=$id");
        $Result = $Read->getResult();

        if ($Result):
            foreach ($Result as $account){
                return $account['name'];
            }
        else:
            return false;
        endif;
    }
    
    /**
     * Atualiza a conta
     */
    public static function UpdateAccount(array $Dados, $id) {

        $up = new Update();
        $up->ExeUpdate('accounts', $Dados, 'WHERE id = :id', "id=$id");
        $Result = $up->getResult();

        if ($Result):
            return "Conta Atualizado!";
        else:
            return false;
        endif;
    }

}
