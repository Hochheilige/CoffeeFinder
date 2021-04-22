<?php 

namespace controllers;
use core\Request;
use core\Response;
use core\Controller;
use models\ArticlesModel;

class ArticlesController extends Controller {

    public function articles(Request $request, Response $response) {
        $articles = new ArticlesModel();
        if ($request->isGet()) {
            $articles->getArticles(); 
        }

        return $this->render('articles', [
            'model' => $articles
        ]);
    }

}


?>