<?php

class DealsController
{
    function __construct()
    {

    }
    public function route()
    {
        if ( !isset($_GET['id']) || empty($_GET['id']) ) {

            return $this->all();

        }elseif (isset($_GET['id']) && !empty(trim($_GET['id']))) {
            
            return $this->findDealByID(trim($_GET['id']));

        }else{
            return;
        }
    }

    public function all()
    {
        $API = new Cheapshark();
        $datas = $API->allDeals();

        // foreach ($dataAPI as $key => $value) 
        // {
        //     $dataAPI[$key] = $value;
        // }

        return $datas;
    }

    public function findDealByID($id)
    {
        $API = new Cheapshark();
        $datas = $API->findDealByID($id);
        return $datas;
    }
}