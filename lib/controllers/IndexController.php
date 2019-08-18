<?php

class IndexController extends BaseController {

    // Controller dealing with showing view
    public function view()
    {
        $this->f3->set('content','welcome.htm');
        return $this->view->render('layout.htm');
    }
}