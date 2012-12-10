<?php

namespace Vlabs\AmazonMWSBundle;

class MWSClient
{
    protected $searchClient;
    protected $config = array();
    
    public function get($service)
    {
        switch($service)
        {
            case 'search' :
                return $this->getSearch();
                break;
            
            default :
                throw new \Exception(sprintf('%s %s', $service, 'is not a supported MWS Service identifier'));
        }
    }
    
    private function getSearch()
    {
        if(empty($this->searchClient)) {
            $this->searchClient = new \MwsSearchClient(
                    $this->config['access_key'], 
                    $this->config['secret_key'], 
                    $this->config['application_name'], 
                    $this->config['application_version'], 
                    $this->config['config']
            );
        }
        
        return $this->searchClient;
    }
    
    public function setConfig($config = array())
    {
        $this->config = $config;
    }
}
