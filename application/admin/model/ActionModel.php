<?php
namespace app\admin\model;

use think\Model;
use think\Db;
use think\Config;

/**
 * 日志模型
 * @package app\admin\model
 */
class ActionModel extends Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = '__ADMIN_ACTION__';

    // 自动写入时间戳
    protected $autoWriteTimestamp = true;

    //首页搜索
    public static function getSearch($map = [],$order='create_time desc',$page_parm=[]){
        return self::where($map) -> order($order) -> paginate(Config::get('pageSize'), false, $page_parm);
    }

    //查询单条数据
    public static function GetOne($id=''){
        $data = self::where('id',$id)->find();
        return $data;
    } 





    
}