<?php
namespace Athos\Form;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Factory;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
use Zend\InputFilter\FileInput;
class FormFilter implements InputFilterAwareInterface
{
    public function getInputFilter() 
    {
        $inputFilter = new InputFilter();
        $factory = new Factory();
        
        
        $stripTags = new \Zend\Filter\StripTags();
        $stringTrim = new \Zend\Filter\StringTrim();
        $nomeSize = new \Zend\Validator\StringLength(3,100);
        $nomeSize->setMessages(array(
        \Zend\Validator\StringLength::TOO_SHORT => "O nome precisa ter no mínimo 3 caracteres",
        \Zend\Validator\StringLength::TOO_LONG => "O nome não pode ter mais do que 100 caracteres",    
        ));
        
        $notEmpty = new \Zend\Validator\NotEmpty();
        $notEmpty->setMessage("Nenhum campo pode estar vazio", \Zend\Validator\NotEmpty::IS_EMPTY);
        
        $inputFilter->add($factory->createInput(array(
            'name' => 'nome',
            'required' => true,
            'filters' => array($stripTags,$stringTrim),
            'validators' => array($notEmpty,$nomeSize)
            )
                ));
        
        $emailValidate = new \Zend\Validator\EmailAddress();
        $emailValidate->setMessage('O email é inválido', \Zend\Validator\EmailAddress::INVALID_FORMAT);
       
        
        $inputFilter->add($factory->createInput(array(
            'name' => 'email',
            'required' => true,
            'filters' => array($stripTags,$stringTrim),
            'validators' => array($notEmpty,$emailValidate)
            )
                ));
        
        $assuntoSize = new \Zend\Validator\StringLength(3,200);
        $assuntoSize->setMessages(array(
        \Zend\Validator\StringLength::TOO_SHORT => "O assunto precisa ter no mínimo 3 caracteres",
        \Zend\Validator\StringLength::TOO_LONG => "O nome não pode ter mais do que 200 caracteres",    
        ));
       
        
        $inputFilter->add($factory->createInput(array(
            'name' => 'assunto',
            'required' => true,
            'filters' => array($stripTags,$stringTrim),
            'validators' => array($notEmpty,$assuntoSize)
            )
                ));
        $mensagemSize = new \Zend\Validator\StringLength(3,5000);
        $mensagemSize->setMessages(array(
        \Zend\Validator\StringLength::TOO_SHORT => "A mensagem precisa ter no mínimo 3 caracteres",
        \Zend\Validator\StringLength::TOO_LONG => "A mensagem não pode ter mais do que 5000 caracteres",    
        ));
       
        
        $inputFilter->add($factory->createInput(array(
            'name' => 'mensagem',
            'required' => true,
            'filters' => array($stripTags,$stringTrim),
            'validators' => array($notEmpty,$mensagemSize)
            )
                ));
        
        return $inputFilter;
        
    }
    
    public function setInputFilter(InputFilterInterface $inputFilter) 
    {
        
    }
}