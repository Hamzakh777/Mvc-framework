<?php 

# this will take care of our urls

# app core class
# creates url and loads core controller
# URL format - /controller/methode/params

class Core{
    protected $currentController = 'Pages';
    protected $currentMethode = 'index';
    protected $params = [];

    public function __construt() {
        $this->getUrl();
    }

    public function getUrl() {
        echo $_GET['url'];
    }
}

