<?php

namespace Athos\Model;
use Zend\Db\Adapter\Adapter;

class DbAthos
{
    
    public function query_db($sql)
    {
        
        $adapter = new Adapter(array(
    			'driver' => 'Mysqli',
                        'host' => '54.94.255.127',
    			'database' => 'athos',
    			'username' => 'athos',
    			'password' => 'athos@99212'
 				));
        
        $query = $query = $adapter->query($sql, Adapter::QUERY_MODE_EXECUTE);
        
        $resultado = $query->toArray();
        
        return $resultado;
        
    }
    
}
