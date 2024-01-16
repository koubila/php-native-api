<?php

class cheapshark
{
    private $_baseurl = "http://www.cheapshark.com/api/1.0/";

    function allGames()
    {
        $endpoint = "games";
        $params = '?title=batman';

        $data = file_get_contents($this->_baseurl.$endpoint.$params);
        return json_decode($data);
    }

    public function findGameById($id)
    {
        $endpoint = "games";
        $params = '?id=';

        if(isset($id) && !empty($id))
        {   
            $params .= $id;
        }

        $data = file_get_contents($this->_baseurl.$endpoint.$params);
        return json_decode($data);
    }

    function allDeals()
    {
        $endpoint = "deals";
        $params = '?storeID=1&upperPrice=15';

        $data = file_get_contents($this->_baseurl.$endpoint.$params);
        return json_decode($data);
    }
    public function findDealById($id)
    {
        $endpoint = "deals";
        $params = '?id=';

        if(isset($id) && !empty($id))
        {   
            $params .= $id;
        }

        $data = file_get_contents($this->_baseurl.$endpoint.$params);
        return json_decode($data);
    }
}