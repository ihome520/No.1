<?php
namespace app\index\controller;
use think\Controller;

/**
 * 前台首页控制器 
 */
class Index extends Controller
{
	/**
	 *显示首页方法
	 *@Author   iHome
	 *@DateTime 2017-10-14T20:36:50+0800
	 */
    public function index()
    {
    	return $this->fetch();

    }
}
