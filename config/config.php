<?php
/**
 * Jsnpp - A full-chain PHP framework
 * Author: A.J <804644245@qq.com>
 * Copyright: Jsnpp [http://www.jsnpp.com] All rights reserved.
 * Licensed: Apache-2.0
 * GitHub: https://github.com/yanzicms/jsnpp
 */
return [
    /**
     * 是否调试模式
     */
    'debug' => true,
    /**
     * 时区
     */
    'timezone' => 'Asia/Shanghai',
    /**
     * 语言zh-cn，en-us
     */
    'language' => 'zh-cn',
	/**
     * 是否开启rewrite
     */
    'rewrite' => false,
    /**
     * 模板标签开始符
     */
    'tagstart' => '{',
    /**
     * 模板标签结束符
     */
    'tagsend' => '}',
    /**
     * 模板文件后缀
     */
    'templatesuffix' => 'html',
    /**
     * 缓存方式
     */
    'cache' => 'file',
    /**
     * 网站地址后缀
     */
    'suffix' => 'html',
    /**
     * 分页输出的格式
     */
    'pagination' => 'Bootstrap',
    /**
     * 分页当前页左右保留的页码数量
     */
    'numbers' => 2,
    /**
     * 分页上一页显示内容
     */
    'previous' => '&laquo;',
    /**
     * 分页下一页显示内容
     */
    'next' => '&raquo;',
    /**
     * 分页输出的HTML是否包含ul
     */
    'containsul' => true,
	/**
     * 分页输出只有一页是否显示分页
     */
    'showone' => false,
    /**
     * 验证码宽度
     */
    'imagewidth' => 150,
    /**
     * 验证码高度
     */
    'imageheight' => 50,
    /**
     * 字体大小
     */
    'fontsize' => 25,
    /**
     * 验证码数量
     */
    'quantity' => 4,
    /**
     * 干扰点数量
     */
    'interferencepoints' => 300,
    /**
     * 干扰线数量
     */
    'interferencelines' => 4,
    /**
     * 验证码是否只使用一次，true，false
     */
    'useonce' => false,
	/**
     * 访问失败时显示什么，exception, 404
     */
    'missed' => 'exception',
    /**
     * 插件目录
     */
    'handle' => 'plugins',
    /**
     * 自定义配置文件
     */
    'customize' => ['customize'],
	/**
     * 路由配置
     */
    'controller' => ['index'],
    'mainroute' => 'archives',
    'twosegment' => ['category'],
	'alone' => [],
];