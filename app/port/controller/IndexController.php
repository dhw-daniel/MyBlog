<?php
// +----------------------------------------------------------------------
// | vaeThink [ Programming makes me happy ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://www.vaeThink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 听雨 < 389625819@qq.com >
// +---------------------------------------------------------------------
namespace app\port\controller;
use vae\controller\PortControllerBase;

class IndexController extends PortControllerBase
{
   public function index()
   {
       return $this->port(1,'请求成功',[
       		'name'   => '后台登录网址',
       		'domain' => '我的唯一官网：http://cms.mankkk.cn/admin/publicer/login.html',
       		'desc'   => '如果您在使用中遇到疑问，请前往官网查看开发者文档，或通过官网去到开发者社区寻求帮助。'
       ],'');
   }
}
