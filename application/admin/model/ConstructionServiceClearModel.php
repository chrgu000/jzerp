<?php
namespace app\admin\model;

use think\Model;
use think\Db;
use think\Config;

/**
 * 设计变更 模型
 * @package app\admin\model
 */
class ConstructionServiceClearModel extends Model
{
    // 设置当前模型对应的完整数据表名称
    protected $name = 'construction_service_clear';
    
    // 自动写入时间戳
    protected $autoWriteTimestamp = true;

    //首页搜索
    public static function getSearch($map = [],$order='date desc',$page_parm=[]){
        
        $data = self::view('construction_service_clear a')
                ->view('project_list b',['title'=>'obj_id'],'a.obj_id=b.id')
                ->view('contract',['title'=>'contract_id'],'contract.id = a.contract_id')
                ->view('personnel_user_basic c',['nickname'=>'maker'],'a.maker=c.id')
                ->where($map)
                ->order($order) 
                ->paginate(Config::get('pageSize'), false, $page_parm);
                return $data;
    }

    //查询单条数据
    public static function GetOne($id=''){
        $data = self::where('id',$id)->find();
        return $data;
    } 
    
    
    
   public function details(){
        return $this -> hasMany('ConstructionServiceClearDetailModel', 'pid');
    }
   public static function add($data = []){
        $main = [];
        $detail = [];
        $d = MakeData($data, ['details_id']);
        $res = self::create($d['main']);
        return $res -> details() -> saveAll($d['details']);
    }    
}