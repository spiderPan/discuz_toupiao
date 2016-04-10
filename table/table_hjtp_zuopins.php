<?php
if (!defined('IN_DISCUZ')) {
    exit('Aecsse Denied');
}
class table_hjtp_zuopins extends discuz_table{
    public function __construct() {
        $this->_table = 'hjtp_zuopins';
        $this->_pk = 'id';
        parent::__construct();
    }

    public function fetch_ys_all_vid($vid){
         return DB::fetch_all('select * from %t where vid=%d and is_show=1 order by id desc',array($this->_table,$vid));
    }
    public function fetch_ys_limit_vid($vid,$start,$count){
         return DB::fetch_all('select * from %t where vid=%d and is_show=1 order by id desc limit %d,%d',array($this->_table,$vid,$start,$count));
    }

    public function fetch_ys_psp_vid($vid,$start,$count){
         return DB::fetch_all('select * from %t where vid=%d and is_show=1 order by toupiaos desc limit %d,%d',array($this->_table,$vid,$start,$count));
    }

    public function fetch_ys_bmdx_vid($vid,$start,$count){
         return DB::fetch_all('select * from %t where vid=%d and is_show=1 order by id asc limit %d,%d',array($this->_table,$vid,$start,$count));
    }


    public function fetch_phb_vid($vid,$count){
         return DB::fetch_all('select * from %t where vid=%d and is_show=1 order by toupiaos desc limit 0,%d',array($this->_table,$vid,$count));
    }

	//投票数大于等于某数字
    public function fetch_uptps_vid($vid,$toupiaos){
         return DB::fetch_all('select * from %t where vid=%d and is_show=1 and toupiaos>=%d order by toupiaos desc',array($this->_table,$vid,$toupiaos));
    }

	//待审核作品
    public function fetch_nys_all_vid($vid){
         return DB::fetch_all('select * from %t where vid=%d and is_show=0 order by id desc',array($this->_table,$vid));
    }
    public function fetch_nys_limit_vid($vid,$start,$count){
         return DB::fetch_all('select * from %t where vid=%d and is_show=0 order by id desc limit %d,%d',array($this->_table,$vid,$start,$count));
    }
	//待审核作品结束

	//屏蔽作品列表
    public function fetch_over_all_vid($vid){
         return DB::fetch_all('select * from %t where vid=%d and is_show=2 order by id desc',array($this->_table,$vid));
    }
    public function fetch_over_limit_vid($vid,$start,$count){
         return DB::fetch_all('select * from %t where vid=%d and is_show=2 order by id desc limit %d,%d',array($this->_table,$vid,$start,$count));
    }




	//自动屏蔽刷票嫌疑作品列表
    public function fetch_shua_all_vid($vid){
         return DB::fetch_all('select * from %t where vid=%d and is_show=3 order by id desc',array($this->_table,$vid));
    }

	//排行榜
    public function fetch_ysa_all_vid($vid){
         return DB::fetch_all('select * from %t where vid=%d and is_show=1 order by toupiaos desc',array($this->_table,$vid));
    }
    public function fetch_ysa_limit_vid($vid,$start,$count){
         return DB::fetch_all('select * from %t where vid=%d and is_show=1 order by toupiaos desc limit %d,%d',array($this->_table,$vid,$start,$count));
    }
	//排行榜结束

    public function fetch_key_all_vid($vid,$key){
		$keyword = '%'.$key.'%';
         return DB::fetch_all('select * from %t where vid=%d and is_show=1 and zpname like %s order by id desc',array($this->_table,$vid,$keyword));
    }
    public function fetch_dsh_vid($vid){
         return DB::fetch_all('select * from %t where vid=%d and is_show=0 order by id desc',array($this->_table,$vid));
    }


    public function fetch_by_zvid($zid,$vid){
         return DB::fetch_first('select * from %t where id=%d and vid=%d',array($this->_table,$zid,$vid));
    }

    public function fetch_isshow_zvid($zid,$vid){
         return DB::fetch_first('select * from %t where id=%d and vid=%d and is_show=1',array($this->_table,$zid,$vid));
    }

	
    public function fetch_by_id($id){
         return DB::fetch_first('select * from %t where id=%d',array($this->_table,$id));
    }
    public function fetch_by_uid_vid($uid,$vid){
         return DB::fetch_first('select * from %t where uid=%d and vid=%d',array($this->_table,$uid,$vid));
    }
    public function fetch_by_openid_vid($openid,$vid){
         return DB::fetch_first('select * from %t where openid=%s and vid=%d',array($this->_table,$openid,$vid));
    }
    public function update_by_id($id,$data){
         return DB::update($this->_table,$data,'id='.$id);	 
    }

    public function delete_by_id($id){
         return DB::delete($this->_table,'id='.$id);
    }
    public function delete_by_vid($vid){
         return DB::delete($this->_table,'vid='.$vid);
    }
    public function insert($data){
         return DB::insert($this->_table,$data,true);
    }



}
?>