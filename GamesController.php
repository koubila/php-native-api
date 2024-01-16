<?php

class GamesController
{
    function __construct()
    {

    }
    public function route()
    {
        if ( !isset($_GET['id']) || empty($_GET['id']) ) {

            return $this->all();

        }elseif (isset($_GET['id']) && !empty(trim($_GET['id']))) {
            
            return $this->findGameByID(trim($_GET['id']));

        }else{
            return;
        }
    }

    public function all()
    {
        $API = new Cheapshark();
        $datas = $API->allGames();

        // foreach ($dataAPI as $key => $value) 
        // {
        //     $dataAPI[$key] = $value;
        // }

        return $datas;
    }

    public function findGameByID($id)
    {
        $API = new Cheapshark();
        $datas = $API->findGameByID($id);
        return $datas;
    }
}