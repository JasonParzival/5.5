<?php
require_once "BasePortalTwigController.php";

class PortalObjectCreateController extends BasePortalTwigController {
    public $template = "portal_object_create.twig";

    public function get(array $context) // добавили параметр
    {
        echo $_SERVER['REQUEST_METHOD'];
        
        parent::get($context); // пробросили параметр
    }

    public function post(array $context) { // добавили параметр
        $context['message'] = 'Вы успешно создали объект'; // добавили сообщение

        $this->get($context); // пробросили параметр
    }
}