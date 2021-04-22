<?php 

namespace controllers;
use core\Request;
use core\Response;
use core\Controller;
use models\FindCafeModel;

class FindCafeController extends Controller {

    public function findCafe(Request $request, Response $response) {
        $findCafeData = new FindCafeModel();
        if ($request->isPost()) {
            $findCafeData->loadData($request->getBody());
            $findCafeData->find();
        }
        if (empty($findCafeData)) {
            return $this->render('findCafe', [
                'error' => $findCafeData
            ]);
        } 
        
        return $this->render('findCafe', [
            'model' => $findCafeData, 
        ]);
        
    }

}
 
?>