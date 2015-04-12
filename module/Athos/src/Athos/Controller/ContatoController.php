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
use Zend\Mail;
use Zend\Mail\Transport\Smtp as SmtpTransport;
use Zend\Mail\Transport\SmtpOptions;
use Athos\Form\ContatoForm;
use Athos\Form\FormFilter;

class ContatoController extends AbstractActionController
{
    public function indexAction()
    {
         

	$this->layout('layout/layout_contato.phtml');
        
        $form = new ContatoForm();
        
        $inputFilter = new FormFilter();
        
        $request = $this->getRequest();
        
         if($request->isPost())
         {
           
             $array_post = $request->getPost()->toArray();

             $post = array_merge_recursive($array_post);
           
           
           
           $form->setData($post);

           $form->setInputFilter($inputFilter->getInputFilter());
           
               
               if($form->isValid())
               {
                 
                   
                   $html = "<html>
                              <body>
                              <strong>Cliente:</strong> ".$array_post["nome"]."<br><br>".
                             "<strong>Email:</strong> ".$array_post["email"]."<br><br>".
                             "<strong>Assunto:</strong> ".$array_post["assunto"]."<br><br>".
                             "<strong>Mensagem:</strong> ".$array_post["mensagem"]."<br><br>".
                             "</body>
                             </html>
                            "; 
                    


    
                   
                    $mail = new Mail\Message();
                    
                    $bodyPart = new \Zend\Mime\Message();
                    
                    $bodyMessage = new \Zend\Mime\Part($html);
                    $bodyMessage->type = 'text/html';

                    $bodyPart->setParts(array($bodyMessage));

                    
                    
                    $mail->setBody($bodyPart);
                    $mail->setFrom('atendimento@athospublicidade.com.br', "Contato Athos - ".$array_post["nome"]);
                    $mail->addTo('atendimento@athospublicidade.com.br', $array_post["nome"]);
                    $mail->setSubject($array_post["assunto"]);
                    $mail->setEncoding('UTF-8');

                    $transport = new SmtpTransport();
                    $options   = new SmtpOptions(array(
                        'name'              => 'athospublicidade.com.br',
                        'host' => 'smtp.gmail.com',
                        'port'              => 465,
                        'connection_class'  => 'login',
                        'connection_config' => array(
                            'ssl' => 'ssl',
                            'username' => 'atendimento@athospublicidade.com.br',
                            'password' => 'athos@2341',
                        ),
                        
                        ));
        
                    $transport->setOptions($options);
                    $transport->send($mail);
        

                 echo "<script>alert(\"Sua mensagem foi enviada com sucesso, em breve entraremos em contato\");</script>"
                    . " <meta http-equiv=\"refresh\" content=\"0;URL=http://athospublicidade.com.br\">";
					
					die();

               }
           
           
           
           
           

         }  
        
        return new ViewModel(array('form' => $form));
    }
}
