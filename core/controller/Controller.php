<?php
namespace Core\Controller;

class Controller {

    public function __construct() {
    }

    protected function loadModel($model_name) {
        $this -> $model_name = \App::getInstance()->getApi($model_name); // loading api faster with model name in constructor, to load the good API class file
    }

    protected function loadTwig() { // loading twig
        $loader = new \Twig\Loader\FilesystemLoader(ROOT . '/app/templates');
        $twig = new \Twig\Environment($loader, [
            'cache' => false, ROOT. '/api/templates/tmp'
        ]);
        return $twig;
    }
}
?>