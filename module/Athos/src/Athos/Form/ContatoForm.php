<?php

namespace Athos\Form;

use Zend\Form\Form;
use Zend\Form\Element;
//use Athos\Form\ContatoFilter;

class ContatoForm extends Form
{
    
   
    
    

    public function __construct()
    {
        
        parent::__construct('contato', array());
                
        $this->setAttributes(array('method' => 'post', 'enctype' => 'multipart/form-data'));
        
        $nome = new Element\Text();
        $nome->setName('nome')
               ->setAttributes(array(
                    'id' => 'nome',
                    'placeholder' => 'Entre com seu nome',
                    'maxlenght' => 50,
                    'data-msg-required' => 'Entre com seu nome',
                    'class' => 'form-control',
                    'required' => true,
               ));
        
        
        $email = new Element\Text();
        $email->setName('email')
              ->setAttributes(array(
                    'id' => 'email',
                    'placeholder' => 'Entre com seu email',
                    'maxlenght' => 100,
                    'data-msg-required' => 'Entre com seu email',
                    'data-msg-email' => 'Entre com um endereço de email válido',
                    'class' => 'form-control',
                    'required' => true,
               ));

        $assunto = new Element\Text();
        $assunto->setName('assunto')
              ->setAttributes(array(
                    'id' => 'assunto',
                    'placeholder' => 'Entre com o assunto',
                    'maxlenght' => 100,
                    'data-msg-required' => 'Entre com o assunto',
                    'class' => 'form-control',
                    'required' => true,
                ));

        $mensagem = new Element\Textarea();
        $mensagem->setName('mensagem')
              ->setAttributes(array(
                    'id' => 'mensagem',
                    'placeholder' => 'Entre com a mensagem',
                    'data-msg-required' => 'Entre com a mensagem',
                    'maxlenght' => 5000,
                    'rows' => 10,
                    'class' => 'form-control',
                    'required' => true,
                ));
        
        
        
        $enviar = new Element\Submit();
        $enviar->setName('enviar')
               ->setValue('Enviar Mensagem')
               ->setAttributes(array(
                   'class' => 'btn btn-primary btn-lg',
                   'data-loading-text' => 'Loading...'
               ));
        
               $this->add($nome);
               $this->add($email);
               $this->add($assunto);
               $this->add($mensagem);
               $this->add($enviar);
        
       
    }
    
}
