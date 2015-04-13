<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Athos\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Athos\Model\DbAthos;

class ServicosController extends AbstractActionController
{
    public function indexAction()
    {
		
		
		$this->layout('layout/layout_servicos.phtml');
		
        return new ViewModel();
    }
	
	public function sobreAction()
    {
		
		
		$this->layout('layout/layout_sobre.phtml');
		
		
		$servico_get = $this->params()->fromRoute('type','title');
                        
		$DbAthos = new DbAthos();
			 
                $sql = "SELECT * FROM sobre_servicos WHERE tag = '$servico_get'";
                
                $resultado = $DbAthos->query_db($sql);
                
                         
                if(empty($resultado))
                {
                    die('<meta http-equiv="refresh" content="0;URL=http://athospublicidade.com.br/">');
                }
                         
                $servico = utf8_encode($resultado[0]['servico']);
		$descricao = utf8_encode($resultado[0]['descricao']);
		
        return new ViewModel(array("resultado" => $resultado, "servico" => $servico, "descricao" => $descricao));
    }
	
}
