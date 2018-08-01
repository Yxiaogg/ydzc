<?php

namespace app\index\controller;

use think\Controller;

use think\Session;

class Fdcase extends controller

{



	//案例

    public function fdcase()

    {

        $saleEx=db('fdc_sale')->order('sale_role desc')->limit(6)->select();

    	$sale=db('fdc_sale')->order('sale_role desc')->limit(6)->select();

    	$data=[

    		'sale'=>$sale,

            'saleEx'=>$saleEx,

    	];

    	$this->assign($data);

        return $this->fetch();

    }

}

