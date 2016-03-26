<?php
namespace Emails\Form;

use Zend\Form\Form;

class EmailsForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('emails');
        $this->setAttribute('method', 'post');
        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type'  => 'hidden',
                'class' => 'form-control',
            ),
        ));
        $this->add(array(
            'name' => 'from_id',
            'attributes' => array(
                'type'  => 'hidden',
            ),
        ));
        $this->add(array(
            'name' => 'to_id',
            'attributes' => array(
                'type'  => 'text',
                'class' => 'form-control ',
                'id' => 'to_id',
            ),
            'options' => array(
                'label' => 'To',
            ),
        ));
        $this->add(array(
            'name' => 'subject',
            'attributes' => array(
                'type'  => 'text',
                'class' => 'form-control',
                'id'  => 'subject'
            ),
            'options' => array(
                'label' => 'Subject',
            ),
        ));
         $this->add(array(
            'type' => 'Zend\Form\Element\Textarea',
            'name' => 'message',
            'options' => array(
                'label' => 'Message',
            ),
            'attributes' => array(                
                'class' => 'form-control',
                'id' =>'cleditor'
            ),
        ));
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Go',
                'id' => 'submitbutton',
                'class'=>'btn btn-default btn-sm',
            ),
        ));
    }
}