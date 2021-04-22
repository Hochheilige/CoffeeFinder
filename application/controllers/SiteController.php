<?php

namespace controllers;

use core\Controller;
use core\Request;

class SiteController extends Controller {

    public function home() {
        return $this->render('home');
    }

    public function contact() {
        return $this->render('contact');
    }

    public static function handleContact(Request $request) {
        $body = $request->getBody();
        var_dump($body);
        return 'Handling submitted data';
    }



}

?>