<?php
/**
 * Jsnpp - A full-chain PHP framework
 * Author: A.J <804644245@qq.com>
 * Copyright: Jsnpp [http://www.jsnpp.com] All rights reserved.
 * Licensed: Apache-2.0
 * GitHub: https://github.com/yanzicms/jsnpp
 */
namespace app\controller;

use jsnpp\Controller;

class Index extends Controller
{

    public function index()
    {
        $this->view->assign('webroot', $this->route->rootUrl())->display();
    }
}