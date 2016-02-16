<?php
/**
 * Players.class [ MODEL ]
 * Classe responsavel pela manipulação de players
 * @copyright (c) 2016, Felipe Muniz, OTPanel
 */
class Players {

    /**
     * Obtem a quantidade total de Players
     */
    public static function GetCount() {

        $Read = new Read;
        $Read->FullRead("SELECT COUNT(*) as id FROM players");
        $Result = $Read->getResult();

        if ($Result):
            foreach ($Read->getResult() as $players)
                return $players['id'];
        else:
            return false;
        endif;
    }
    
    /**
     * Obtem players para o painel
     * @return $Array [] de players
     */
    public static function GetPlayersAccount($id) {

        $Read = new Read;
        $Read->ExeRead('players', "WHERE account_id = :id", "id=$id");
        $Result = $Read->getResult();

        if ($Result):
            foreach ($Result as $player){
                return $player['name'];
            }
            
        else:
            return false;
        endif;
    }
    
    /**
     * Obtem todas os players
     * @return $Array [] de players
     */
    public static function GetPlayers() {

        $Read = new Read;
        $Read->ExeRead('players', "ORDER BY id DESC");
        $Result = $Read->getResult();

        if ($Result):
            return $Result;
        else:
            return false;
        endif;
    }

    /**
     * Obtem o player com o id tal
     * @return $Array [] de player
     */
    public static function GetAccountId($id) {

        $Read = new Read;
        $Read->ExeRead('players', "WHERE id = :id", "id=$id");
        $Result = $Read->getResult();

        if ($Result):
            return $Result;
        else:
            return false;
        endif;
    }

}
