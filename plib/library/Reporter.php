<?php

class Modules_PanelStats_Reporter
{

    public function getResults()
    {
        $xml = new SimpleXMLElement('<stats/>');
        $xml->clients = 10;
        $xml->domains = 20;
        $xml->subscriptions = 15;
        return (string)$xml->saveXml();
    }

}
