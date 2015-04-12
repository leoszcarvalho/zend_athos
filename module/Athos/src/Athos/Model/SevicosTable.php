<?php
namespace Athos\Model;
 use Zend\Db\TableGateway\TableGateway;
 use Zend\Db\ResultSet\ResultSet;
 use Zend\Db\Sql\Select;
 use Zend\Paginator\Adapter\DbSelect;
 use Zend\Paginator\Paginator;
 use Zend\Db\Adapter\Adapter;
 
 class ServicosTable
 {
     protected $tableGateway;
     public function __construct(TableGateway $tableGateway)
     {
         $this->tableGateway = $tableGateway;
     }
     
     
     
     public function fetchAll($paginated=false,$type='title',$order='ASC')
     {
         
         
         if ($paginated) 
         {
             
             // create a new Select object for the table album
             $select = new Select('albums');
             $select->join("midias", "albums.tipo = midias.id",array('midia'),"inner");
             $select->order($type." ".$order);
             
             //die();
             // create a new result set based on the Album entity
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new Album());
             // create a new pagination adapter object
             
             
             $paginatorAdapter = new DbSelect(
                 // our configured select object
                 $select,
                 // the adapter to run it against
                 $this->tableGateway->getAdapter(),
                 // the result set to hydrate
                 $resultSetPrototype
             );
             
             
             
             $paginator = new Paginator($paginatorAdapter);
             
             
             
             return $paginator;
             
         }
         
         $resultSet = $this->tableGateway->select();
         
         return $resultSet;
         
     }
     
     
    
 }