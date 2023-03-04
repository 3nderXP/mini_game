<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Home {

    public function render($params) {

        $pageView = "pages/home";
        $pageVars = [];

        View::render($pageView, $pageVars);

    }

}