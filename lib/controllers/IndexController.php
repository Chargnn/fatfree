<?php

class IndexController extends BaseController {

    // Controller dealing with showing view
    public function view()
    {
        $this->f3->set('content','welcome.htm');
        return $this->getView()->render('layout.htm');
    }
}