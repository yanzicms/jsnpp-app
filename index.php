<?php
/**
 * Jsnpp - A full-chain PHP framework
 * Author: A.J <804644245@qq.com>
 * Copyright: Jsnpp [http://www.jsnpp.com] All rights reserved.
 * Licensed: Apache-2.0
 * GitHub: https://github.com/yanzicms/jsnpp
 */
namespace jsnpp;

$jsnpp_dir = __DIR__;
require $jsnpp_dir . '/vendor/autoload.php';
(new Application($jsnpp_dir))->jsnpp->startup();