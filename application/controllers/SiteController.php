<?php

namespace controllers;

use core\Controller;
use core\Request;
use core\Response;
use models\FindCafeModel;
use models\ArticlesModel;

class SiteController extends Controller {

    public function home(Request $request, Response $response) {
        $findCafeData = new FindCafeModel();
        $articles = new ArticlesModel();
        if ($request->isPost()) {
            $findCafeData->loadData($request->getBody());
            $findCafeData->find();

            if (empty($findCafeData)) {
                return $this->render('findCafe', [
                    'error' => $findCafeData
                ]);
            } 
            
            return $this->render('findCafe', [
                'model' => $findCafeData
            ]);
        } else {
            $articles->getArticles(2); 
            return $this->render('home', [
                'model' => $findCafeData,
                'articles' => $articles
            ]);
        }
        return $this->render('home', [
            'model' => $findCafeData,
            'articles' => $articles
        ]);
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