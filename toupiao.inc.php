<?php
if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}
require_once DISCUZ_ROOT.'./source/plugin/hejin_toupiao/config.inc.php';
$model = addslashes($_GET['model']);


if(submitcheck('add_vote')){
	$stdata = array();
	if($_POST['title']){
		$stdata['title'] = addslashes($_POST['title']);
	}
	if($_POST['pic']){
		$stdata['pic'] = addslashes($_POST['pic']);
	}
	if($_POST['icon']){
		$stdata['icon'] = addslashes($_POST['icon']);
	}
	if($_POST['content']){
		$stdata['content'] = addslashes($_POST['content']);
	}
	$stdata['tpnub'] = intval($_POST['tpnub']);
	$stdata['ipnubs'] = intval($_POST['ipnubs']);
	$stdata['yuliub'] = intval($_POST['yuliub']);
	if($_POST['wxgzts']){
		$stdata['wxgzts'] = addslashes($_POST['wxgzts']);
	}
	if($_POST['wxgzurl']){
		$stdata['wxgzurl'] = addslashes($_POST['wxgzurl']);
	}
	$stdata['xntps'] = intval($_POST['xntps']);
	$stdata['xnlls'] = intval($_POST['xnlls']);
	if($_POST['start_time']){
		$start_time = addslashes($_POST['start_time']);
		$stdata['start_time'] = strtotime($start_time);
	}
	if($_POST['over_time']){
		$over_time = addslashes($_POST['over_time']);
		$stdata['over_time'] = strtotime($over_time);
	}
	if($_POST['vote_time']){
		$vote_time = addslashes($_POST['vote_time']);
		$stdata['vote_time'] = strtotime($vote_time);
	}
	if($_POST['end_time']){
		$end_time = addslashes($_POST['end_time']);
		$stdata['end_time'] = strtotime($end_time);
	}
	if($_POST['shuomingta']){
		$stdata['shuomingta'] = addslashes($_POST['shuomingta']);
	}
	if($_POST['shuomingca']){
		$stdata['shuomingca'] = addslashes($_POST['shuomingca']);
	}
	if($_POST['shuomingtb']){
		$stdata['shuomingtb'] = addslashes($_POST['shuomingtb']);
	}
	if($_POST['shuomingcb']){
		$stdata['shuomingcb'] = addslashes($_POST['shuomingcb']);
	}
	if($_POST['shuomingtc']){
		$stdata['shuomingtc'] = addslashes($_POST['shuomingtc']);
	}
	if($_POST['shuomingcc']){
		$stdata['shuomingcc'] = addslashes($_POST['shuomingcc']);
	}
	
	
	if($_POST['zpnamediy']){
		$stdata['zpnamediy'] = addslashes($_POST['zpnamediy']);
	}
	if($_POST['zpmsdiy']){
		$stdata['zpmsdiy'] = addslashes($_POST['zpmsdiy']);
	}
	if($_POST['yuliuc']){
		$stdata['yuliuc'] = addslashes($_POST['yuliuc']);
	}
	if($_POST['yuliud']){
		$stdata['yuliud'] = addslashes($_POST['yuliud']);
	}
	$stdata['is_sh'] = intval($_POST['is_sh']);
	$stdata['yuliua'] = intval($_POST['yuliua']);
	$stadd = C::t('#hejin_toupiao#hjtp_votes')->insert($stdata);
	if($stadd){
		$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao';
		cpmsg(lang('plugin/hejin_toupiao', 'addstok'), $url, 'succeed');	
	}
	
}

if(submitcheck('add_votea')){
	$stdata = array();
	$stdata['id'] = intval($_POST['id']);
	$stdata['title'] = addslashes(stripslashes($_POST['title']));
	$stdata['pic'] = addslashes(stripslashes($_POST['pic']));
	$stdata['icon'] = addslashes(stripslashes($_POST['icon']));
	$stdata['content'] = addslashes(stripslashes($_POST['content']));
	$stdata['tpnub'] = intval($_POST['tpnub']);
	$stdata['ipnubs'] = intval($_POST['ipnubs']);
	$stdata['wxgzts'] = addslashes(stripslashes($_POST['wxgzts']));
	$stdata['wxgzurl'] = addslashes(stripslashes($_POST['wxgzurl']));
	$stdata['zuopins'] = intval($_POST['zuopins']);
	$stdata['toupiaos'] = intval($_POST['toupiaos']);
	$stdata['clicks'] = intval($_POST['clicks']);
	$stdata['xntps'] = intval($_POST['xntps']);
	$stdata['xnlls'] = intval($_POST['xnlls']);
	$stdata['start_time'] = intval($_POST['start_time']);
	$stdata['over_time'] = intval($_POST['over_time']);
	$stdata['vote_time'] = intval($_POST['vote_time']);
	$stdata['end_time'] = intval($_POST['end_time']);
	$stdata['zpnamediy'] = addslashes(stripslashes($_POST['zpnamediy']));
	$stdata['zpmsdiy'] = addslashes(stripslashes($_POST['zpmsdiy']));
	$stdata['shuomingta'] = addslashes(stripslashes($_POST['shuomingta']));
	$stdata['shuomingca'] = addslashes(stripslashes($_POST['shuomingca']));
	$stdata['shuomingtb'] = addslashes(stripslashes($_POST['shuomingtb']));
	$stdata['shuomingcb'] = addslashes(stripslashes($_POST['shuomingcb']));
	$stdata['shuomingtc'] = addslashes(stripslashes($_POST['shuomingtc']));
	$stdata['shuomingcc'] = addslashes(stripslashes($_POST['shuomingcc']));
	$stdata['is_sh'] = intval($_POST['is_sh']);
	$stdata['yuliua'] = intval($_POST['yuliua']);
	$stdata['yuliub'] = intval($_POST['yuliub']);
	$stdata['yuliuc'] = addslashes(stripslashes($_POST['yuliuc']));
	$stdata['yuliud'] = addslashes(stripslashes($_POST['yuliud']));
	$stadd = C::t('#hejin_toupiao#hjtp_votes')->insert($stdata);
	if($stadd){
		$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao';
		cpmsg(lang('plugin/hejin_toupiao', 'addstok'), $url, 'succeed');	
	}
}


if(submitcheck('edit_vote')){
	$vid = intval($_POST['vid']);
	if($vid){
		$stdata = array();
			if($_POST['title']){
				$stdata['title'] = addslashes($_POST['title']);
			}
			if($_POST['pic']){
				$stdata['pic'] = addslashes($_POST['pic']);
			}
			if($_POST['icon']){
				$stdata['icon'] = addslashes($_POST['icon']);
			}
			if($_POST['content']){
				$stdata['content'] = addslashes($_POST['content']);
			}
			$stdata['tpnub'] = intval($_POST['tpnub']);
			$stdata['ipnubs'] = intval($_POST['ipnubs']);
				$stdata['zuopins'] = intval($_POST['zuopins']);
				$stdata['toupiaos'] = intval($_POST['toupiaos']);
			$stdata['yuliub'] = intval($_POST['yuliub']);
			if($_POST['wxgzts']){
				$stdata['wxgzts'] = addslashes($_POST['wxgzts']);
			}
			if($_POST['wxgzurl']){
				$stdata['wxgzurl'] = addslashes($_POST['wxgzurl']);
			}
			$stdata['xntps'] = intval($_POST['xntps']);
			$stdata['xnlls'] = intval($_POST['xnlls']);
			if($_POST['start_time']){
				$start_time = addslashes($_POST['start_time']);
				$stdata['start_time'] = strtotime($start_time);
			}
			if($_POST['over_time']){
				$over_time = addslashes($_POST['over_time']);
				$stdata['over_time'] = strtotime($over_time);
			}
			if($_POST['vote_time']){
				$vote_time = addslashes($_POST['vote_time']);
				$stdata['vote_time'] = strtotime($vote_time);
			}
			if($_POST['end_time']){
				$end_time = addslashes($_POST['end_time']);
				$stdata['end_time'] = strtotime($end_time);
			}
			$stdata['shuomingta'] = addslashes($_POST['shuomingta']);
			$stdata['shuomingca'] = addslashes($_POST['shuomingca']);
			$stdata['shuomingtb'] = addslashes($_POST['shuomingtb']);
			$stdata['shuomingcb'] = addslashes($_POST['shuomingcb']);
			$stdata['shuomingtc'] = addslashes($_POST['shuomingtc']);
			$stdata['shuomingcc'] = addslashes($_POST['shuomingcc']);
			$stdata['zpnamediy'] = addslashes($_POST['zpnamediy']);
			$stdata['zpmsdiy'] = addslashes($_POST['zpmsdiy']);
			$stdata['yuliuc'] = addslashes($_POST['yuliuc']);
			$stdata['yuliud'] = addslashes($_POST['yuliud']);
			$stdata['is_sh'] = intval($_POST['is_sh']);
			$stdata['yuliua'] = intval($_POST['yuliua']);
		$stedit = C::t('#hejin_toupiao#hjtp_votes')->update_by_id($vid,$stdata);
		if($stedit){
			$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao';
			cpmsg(lang('plugin/hejin_toupiao', 'editok'), $url, 'succeed');	
		}else{
			$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao';
			cpmsg(lang('plugin/hejin_toupiao', 'editok'), $url, 'succeed');	
		}
	}
	
}

//电脑端首页修改
if(submitcheck('up_supply')){
	$vid = intval($_POST['vid']);
	$sid = intval($_POST['sid']);
	if($sid){
		$zpup = array();
		if($_POST['bannerpic']){
			$zpup['bannerpic'] = addslashes($_POST['bannerpic']);
		}
		if($_POST['bqname']){
			$zpup['bqname'] = addslashes($_POST['bqname']);
		}
		if($_POST['bannergd']){
			$zpup['bannergd'] = addslashes($_POST['bannergd']);
		}
		$zpup['paixu'] = intval($_POST['paixu']);
		$zpup['footpic'] = addslashes($_POST['footpic']);
		$zpup['footgd'] = addslashes($_POST['footgd']);
		$zpup['bgcolor'] = addslashes($_POST['bgcolor']);
		$zpup['kefu'] = addslashes($_POST['kefu']);
		$zpupok = C::t('#hejin_toupiao#hjtp_supply')->update_by_id($sid,$zpup);
		if($zpupok){
			$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao';
			cpmsg(lang('plugin/hejin_toupiao', 'editok'), $url, 'succeed');	
		}else{
			$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao';
			cpmsg(lang('plugin/hejin_toupiao', 'editok'), $url, 'succeed');	
		}
	}else{
		$zpadd = array();
		$zpadd['vid'] = intval($_POST['vid']);
		if($_POST['bannerpic']){
			$zpadd['bannerpic'] = addslashes($_POST['bannerpic']);
		}
		if($_POST['bqname']){
			$zpadd['bqname'] = addslashes($_POST['bqname']);
		}
		if($_POST['bannergd']){
			$zpadd['bannergd'] = addslashes($_POST['bannergd']);
		}
		$zpadd['paixu'] = intval($_POST['paixu']);
		$zpadd['footpic'] = addslashes($_POST['footpic']);
		$zpadd['footgd'] = addslashes($_POST['footgd']);
		$zpadd['bgcolor'] = addslashes($_POST['bgcolor']);
		$zpadd['kefu'] = addslashes($_POST['kefu']);
		$zpaddok = C::t('#hejin_toupiao#hjtp_supply')->insert($zpadd);
		if($zpaddok){
			$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao';
			cpmsg(lang('plugin/hejin_toupiao', 'editok'), $url, 'succeed');	
		}else{
			$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao';
			cpmsg(lang('plugin/hejin_toupiao', 'editok'), $url, 'succeed');	
		}
	
	
	
	
	}
}

//修改参赛作品处理ok
if(submitcheck('edit_zp')){
	$vid = intval($_POST['vid']);
	$zid = intval($_POST['zid']);
	if($zid){
		$zpup = array();
		if($_POST['zpname']){
			$zpup['zpname'] = addslashes($_POST['zpname']);
		}
		if($_POST['telphone']){
			$zpup['telphone'] = addslashes($_POST['telphone']);
		}
		$zpup['pica'] = addslashes($_POST['pica']);
		$zpup['picb'] = addslashes($_POST['picb']);
		$zpup['picc'] = addslashes($_POST['picc']);
		$zpup['picd'] = addslashes($_POST['picd']);
		$zpup['pice'] = addslashes($_POST['pice']);
		$zpup['content'] = addslashes($_POST['content']);
		if($_POST['toupiaos']){
			$zpup['toupiaos'] = intval($_POST['toupiaos']);
		}
		$zpup['liulans'] = intval($_POST['liulans']);
		if($_POST['yuliuc']){
			$zpup['yuliuc'] = addslashes($_POST['yuliuc']);//官方详细说明
		}

		$zpupok = C::t('#hejin_toupiao#hjtp_zuopins')->update_by_id($zid,$zpup);
		if($zpupok){
			$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=zuopinsh&vid='.$vid;
			cpmsg(lang('plugin/hejin_toupiao', 'editok'), $url, 'succeed');	
		}else{
			$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=zuopinsh&vid='.$vid;
			cpmsg(lang('plugin/hejin_toupiao', 'editok'), $url, 'succeed');	
		}
	}
}


//手动添加作品ok
if(submitcheck('add_zp')){
	$vid = intval($_POST['vid']);
	if($vid){
		$zpadd = array();
		$zpadd['vid'] = $vid;
		$zpadd['uid'] = 0;
		$zpadd['openid'] = time().rand(100,999);//避免受到添加时openid相同而报错
		$zpadd['zpname'] = addslashes($_POST['zpname']);
		$zpadd['telphone'] = addslashes($_POST['telphone']);
		if($_POST['content']){
			$zpadd['content'] = addslashes($_POST['content']);
		}
		if($_POST['pica']){
			$zpadd['pica'] = addslashes($_POST['pica']);
		}
		if($_POST['picb']){
			$zpadd['picb'] = addslashes($_POST['picb']);
		}
		if($_POST['picc']){
			$zpadd['picc'] = addslashes($_POST['picc']);
		}
		if($_POST['picd']){
			$zpadd['picd'] = addslashes($_POST['picd']);
		}
		if($_POST['pice']){
			$zpadd['pice'] = addslashes($_POST['pice']);
		}

		if($_POST['yuliuc']){
			$zpadd['yuliuc'] = addslashes($_POST['yuliuc']);//官方详细说明
		}
		$zpaddok = C::t('#hejin_toupiao#hjtp_zuopins')->insert($zpadd);
		if($zpaddok){
			$vote =  C::t('#hejin_toupiao#hjtp_votes')->fetch_by_id($vid);
			$upvidzps = array(
					'zuopins' => intval($vote['zuopins']+1),
			);
			$upvzpsa =  C::t('#hejin_toupiao#hjtp_votes')->update_by_id($vid,$upvidzps);
			$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=zuopinsh&vid='.$vid;
			cpmsg(lang('plugin/hejin_toupiao', 'addstok'), $url, 'succeed');	
		}
	}
}


if(submitcheck('search')){
	$vid = intval($_POST['vid']);
	$xnzid = intval($_POST['zid']);
	$zid = $xnzid-($vid*10000);
	$zuopin = C::t('#hejin_toupiao#hjtp_zuopins')->fetch_by_id($zid);
	if(count($zuopin)){
			$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=searchok&zid='.$zid;
			cpmsg(lang('plugin/hejin_toupiao', 'sousuocg'), $url, 'succeed');
	}else{
			$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=zuopinsh&vid='.$vid;
			cpmsg(lang('plugin/hejin_toupiao', 'wusj'), $url, 'error');	
	}
	
}


//投票活动列表
if(empty($model)){
	loadcache('plugin');
	$plugin = $_G['cache']['plugin']['hejin_toupiao'];
	include_once ("page.class.php");
	$page=$_GET['page'];
	$stlist = C::t('#hejin_toupiao#hjtp_votes')->fetch_all();
	$totail = count($stlist);
	$number = 20;
	$url = $SELF.'?action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&page={page}';
	$my_page=new PageClass($totail,$number,$page,$url);//参数设定：总记录，每页显示的条数，当前页，连接的地址
	$startnum = $my_page->page_limit;
	$count = $my_page->myde_size;


	$stlists = C::t('#hejin_toupiao#hjtp_votes')->fetch_limit($startnum,$count);

	$page_string = $my_page->myde_write();
	
	
	
	include template('hejin_toupiao:admin/toupiaoes');
}
//添加投票活动
elseif($model == 'addvote'){
	include template('hejin_toupiao:admin/addvote');
}
//添加投票活动
elseif($model == 'addvotea'){
	include template('hejin_toupiao:admin/addvotea');
}

//编辑投票活动
elseif($model == 'edit'){
	$vid = intval($_GET['vid']);
	if($vid){
		$voteinfo =  C::t('#hejin_toupiao#hjtp_votes')->fetch_by_id($vid);
		include template('hejin_toupiao:admin/editvote');
	}
}


//补充电脑端首页
elseif($model == 'pcindex'){
	$vid = intval($_GET['vid']);
	if($vid){
		$supply =  C::t('#hejin_toupiao#hjtp_supply')->fetch_by_vid($vid);
		if($supply){
			$sid = $supply['id'];
		}
		include template('hejin_toupiao:admin/pcindex');
	}
}




//删除投票活动
elseif($model == 'del'){
	if($_GET['formhash']==formhash()){
		$vid = intval($_GET['vid']);
		if($_GET['page']){
			$page =  intval($_GET['page']);
		}else{
			$page =  1;
		}
		if($vid){
			$tjdel =  C::t('#hejin_toupiao#hjtp_votes')->delete_by_id($vid);
			if($tjdel){
				$zpalldel = C::t('#hejin_toupiao#hjtp_zuopins')->delete_by_vid($vid);
				$tpjldel = C::t('#hejin_toupiao#hjtp_tpjles')->delete_by_vid($vid);
				$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&page='.$page;
				cpmsg(lang('plugin/hejin_toupiao', 'delcg'), $url, 'succeed');	
			}
		}
	}
}







//已审核参赛作品列表
elseif($model == 'zuopinsh'){
	$vid = intval($_GET['vid']);
	if($vid){
		include_once ("page.class.php");
		$page=$_GET['page'];
		$stlist = C::t('#hejin_toupiao#hjtp_zuopins')->fetch_ys_all_vid($vid);
		$totail = count($stlist);
		$number = 30;
		$url = $SELF.'?action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=zuopinsh&vid='.$vid.'&page={page}';
		$my_page=new PageClass($totail,$number,$page,$url);//参数设定：总记录，每页显示的条数，当前页，连接的地址
		$startnum = $my_page->page_limit;
		$count = $my_page->myde_size;


		$stlists = C::t('#hejin_toupiao#hjtp_zuopins')->fetch_ys_limit_vid($vid,$startnum,$count);

		$page_string = $my_page->myde_write();

		include template('hejin_toupiao:admin/zuopinsh');
	}
}


//已屏蔽的参赛作品列表
elseif($model == 'pbzp'){
	$vid = intval($_GET['vid']);
	if($vid){
		include_once ("page.class.php");
		$page=$_GET['page'];
		$stlistsa = C::t('#hejin_toupiao#hjtp_zuopins')->fetch_over_all_vid($vid);
		$totail = count($stlistsa);
		$number = 30;
		$url = $SELF.'?action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=pbzp&vid='.$vid.'&page={page}';
		$my_page=new PageClass($totail,$number,$page,$url);//参数设定：总记录，每页显示的条数，当前页，连接的地址
		$startnum = $my_page->page_limit;
		$count = $my_page->myde_size;


		$stlists = C::t('#hejin_toupiao#hjtp_zuopins')->fetch_over_limit_vid($vid,$startnum,$count);

		$page_string = $my_page->myde_write();
		
		include template('hejin_toupiao:admin/pbzp');
	}
}

//自动屏蔽的刷票嫌疑参赛作品列表
elseif($model == 'zdpbzp'){
	$vid = intval($_GET['vid']);
	if($vid){
		$stlists = C::t('#hejin_toupiao#hjtp_zuopins')->fetch_shua_all_vid($vid);

		include template('hejin_toupiao:admin/zdpbzp');
	}
}


//搜索
elseif($model == 'searchok'){
	$zid = intval($_GET['zid']);
	$zuopin = C::t('#hejin_toupiao#hjtp_zuopins')->fetch_by_id($zid);
	$vid = $zuopin['vid'];
	include template('hejin_toupiao:admin/search');
}



//前100名排行榜
elseif($model == 'zpphb'){
	$vid = intval($_GET['vid']);
	if($vid){
		$stlists = C::t('#hejin_toupiao#hjtp_zuopins')->fetch_phb_vid($vid,300);


		include template('hejin_toupiao:admin/zpphb');
	}
}




//待审核参赛作品列表
elseif($model == 'zuopindsh'){
	$vid = intval($_GET['vid']);
	if($vid){
		include_once ("page.class.php");
		$page=$_GET['page'];
		$stlist = C::t('#hejin_toupiao#hjtp_zuopins')->fetch_nys_all_vid($vid);
		$totail = count($stlist);
		$number = 20;
		$url = $SELF.'?action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=zuopindsh&vid='.$vid.'&page={page}';
		$my_page=new PageClass($totail,$number,$page,$url);//参数设定：总记录，每页显示的条数，当前页，连接的地址
		$startnum = $my_page->page_limit;
		$count = $my_page->myde_size;


		$stlists = C::t('#hejin_toupiao#hjtp_zuopins')->fetch_nys_limit_vid($vid,$startnum,$count);

		$page_string = $my_page->myde_write();

		include template('hejin_toupiao:admin/zuopindsh');
	}
}

//作品投票记录
elseif($model == 'tpjles'){
	$zid = intval($_GET['zid']);
	$zpinfo = C::t('#hejin_toupiao#hjtp_zuopins')->fetch_by_id($zid);
	if($zid){
		include_once ("page.class.php");
		$page=$_GET['page'];
		$tplist = C::t('#hejin_toupiao#hjtp_tpjles')->fetch_zid_all($zid);
		$totail = count($tplist);
		$number = 40;
		$url = $SELF.'?action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=tpjles&zid='.$zid.'&page={page}';
		$my_page=new PageClass($totail,$number,$page,$url);//参数设定：总记录，每页显示的条数，当前页，连接的地址
		$startnum = $my_page->page_limit;
		$count = $my_page->myde_size;


		$stlists = C::t('#hejin_toupiao#hjtp_tpjles')->fetch_zid_limit($zid,$startnum,$count);

		$page_string = $my_page->myde_write();

		include template('hejin_toupiao:admin/tpjles');
	}
}

//删除作品投票记录
elseif($model == 'deltpjl'){
	if($_GET['formhash']==formhash()){
	if($_GET['tjid']){
		$tjid = intval($_GET['tjid']);
		$zid = intval($_GET['zid']);
		$page = intval($_GET['page'])?intval($_GET['page']):1;
		$deltpjls = C::t('#hejin_toupiao#hjtp_tpjles')->delete_by_id($tjid);
		if($deltpjls){
			$zuopin = C::t('#hejin_toupiao#hjtp_zuopins')->fetch_by_id($zid);
			$zptpup = array();
			$zptpup['toupiaos'] = intval($zuopin['toupiaos']-1);
				if($zuopin['yuliua']>$zuopin['toupiaos']){
					$zptpup['yuliua'] = intval($zuopin['yuliua']-1);
				}else{
					$zptpup['yuliua'] = intval($zuopin['toupiaos']-1);
				}
			$upzptps = C::t('#hejin_toupiao#hjtp_zuopins')->update_by_id($zid,$zptpup);
			$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=tpjles&zid='.$zid.'&page='.$page;
			cpmsg(lang('plugin/hejin_toupiao', 'delcg'), $url, 'succeed');	
		}
	}
	}
}

//添加虚拟投票记录
elseif($model == 'xntpjl'){
	if($_GET['formhash']==formhash()){
		if($_GET['zid']){
			$zid = intval($_GET['zid']);
			$vid = intval($_GET['vid']);
			$today = date('Y-m-d',time());
			$timedate = strtotime($today);
			$tpdata = array();
			$tpdata['zid'] = $zid;
			$tpdata['uid'] = 0;
			$tpdata['vid'] = $vid;
			$tpdata['openid'] = 'noopenid';
			$tpdata['ips'] = '127.0.0.1';
			$tpdata['timedate'] = $timedate;
			$tpdata['yuliua'] = time();
			loadcache('plugin');
			$tpplugin = $_G['cache']['plugin']['hejin_toupiao'];
			$zjxnps = $tpplugin['hjtp_xnpsnub']?$tpplugin['hjtp_xnpsnub']:10;
			$nubcs = 0;
			for ($x=1; $x<=$zjxnps; $x++) {
  				$addtpjl = C::t('#hejin_toupiao#hjtp_tpjles')->insert($tpdata);
				$nubcs = $nubcs+1;
			}	
			if($nubcs==$zjxnps){
				$zuopin = C::t('#hejin_toupiao#hjtp_zuopins')->fetch_by_id($zid);
				$zptpup = array();
				$zptpup['toupiaos'] = intval($zuopin['toupiaos']+$zjxnps);
				if($zuopin['yuliua']>$zuopin['toupiaos']){
					$zptpup['yuliua'] = intval($zuopin['yuliua']+$zjxnps);
				}else{
					$zptpup['yuliua'] = intval($zuopin['toupiaos']+$zjxnps);
				}
				$upzptps = C::t('#hejin_toupiao#hjtp_zuopins')->update_by_id($zid,$zptpup);
				$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=tpjles&zid='.$zid;
				cpmsg(lang('plugin/hejin_toupiao', 'tjcg'), $url, 'succeed');	
			}	
		}
	}
}


//清空某作品投票记录
elseif($model == 'delzptpjl'){
	if($_GET['formhash']==formhash()){
		if($_GET['zid']){
			$zid = intval($_GET['zid']);
			$vid = intval($_GET['vid']);
  			$delzptpjl = C::t('#hejin_toupiao#hjtp_tpjles')->delete_by_zid($zid);

			if($delzptpjl){
				$zptpup = array();
				$zptpup['toupiaos'] = 0;
				$zptpup['yuliua'] = 0;
				$upzptps = C::t('#hejin_toupiao#hjtp_zuopins')->update_by_id($zid,$zptpup);
				$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=tpjles&zid='.$zid;
				cpmsg(lang('plugin/hejin_toupiao', 'delcg'), $url, 'succeed');	
			}	
		}
	}
}



//修改作品
elseif($model == 'editzp'){
	$zid = intval($_GET['zid']);
	loadcache('plugin');
	$toupiaosz = $_G['cache']['plugin']['hejin_toupiao']['hjtp_qxgzjp'];
	if($zid){
		$zpinfo =  C::t('#hejin_toupiao#hjtp_zuopins')->fetch_by_id($zid);
		include template('hejin_toupiao:admin/editzp');
	}
}


//手工添加作品
elseif($model == 'addzp'){
	$vid = intval($_GET['vid']);
	if($vid){
		include template('hejin_toupiao:admin/addzp');
	}
}


//审核作品
elseif($model == 'shzp'){
	if($_GET['formhash']==formhash()){
		$zid = intval($_GET['zid']);
		$vid = intval($_GET['vid']);
		$zpshdata = array(
			'is_show' => 1,
		);
		$zpsh =  C::t('#hejin_toupiao#hjtp_zuopins')->update_by_id($zid,$zpshdata);
		if($zpsh){
			$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=zuopindsh&vid='.$vid;
			cpmsg(lang('plugin/hejin_toupiao', 'shcg'), $url, 'succeed');	
		}else{
			$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=zuopindsh&vid='.$vid;
			cpmsg(lang('plugin/hejin_toupiao', 'shcg'), $url, 'succeed');	
		}
	}
}


//解除屏蔽
elseif($model == 'jcpb'){
	if($_GET['formhash']==formhash()){
		$zid = intval($_GET['zid']);
		$vid = intval($_GET['vid']);
		$zpshdata = array(
			'is_show' => 1,
		);
		$zpsh =  C::t('#hejin_toupiao#hjtp_zuopins')->update_by_id($zid,$zpshdata);
		if($zpsh){
			$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=zuopinsh&vid='.$vid;
			cpmsg(lang('plugin/hejin_toupiao', 'shcg'), $url, 'succeed');	
		}else{
			$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=zuopinsh&vid='.$vid;
			cpmsg(lang('plugin/hejin_toupiao', 'shcg'), $url, 'succeed');	
		}
	}
}


//屏蔽作品
elseif($model == 'over'){
	if($_GET['formhash']==formhash()){
		$zid = intval($_GET['zid']);
		$vid = intval($_GET['vid']);
		$zpshdata = array(
			'is_show' => 2,
		);
		$zpsh =  C::t('#hejin_toupiao#hjtp_zuopins')->update_by_id($zid,$zpshdata);
		if($zpsh){
			$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=pbzp&vid='.$vid;
			cpmsg(lang('plugin/hejin_toupiao', 'pbcg'), $url, 'succeed');	
		}else{
			$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=pbzp&vid='.$vid;
			cpmsg(lang('plugin/hejin_toupiao', 'pbcg'), $url, 'succeed');	
		}
	}
}


//删除作品
elseif($model == 'delzp'){
	if($_GET['formhash']==formhash()){
		$zid = intval($_GET['zid']);
		$vid = intval($_GET['vid']);
		$sh = intval($_GET['sh']);
		if($zid){
			$zpdel =  C::t('#hejin_toupiao#hjtp_zuopins')->delete_by_id($zid);
			if($zpdel){
				$tpjldel =  C::t('#hejin_toupiao#hjtp_tpjles')->delete_by_zid($zid);
				
				if($sh==1){
					$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=zuopinsh&vid='.$vid;	
				}else{
					$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=zuopindsh&vid='.$vid;	
				}
				cpmsg(lang('plugin/hejin_toupiao', 'delcg'), $url, 'succeed');	
			}
		}
	}
}

/**
//导出excel
elseif($model == 'daochu'){
	$vid = intval($_GET['vid']);
	if($vid){
		header("Content-Type:text/html;charset=utf-8");
		loadcache('plugin');
		$plugin = $_G['cache']['plugin']['hejin_toupiao'];
		if($plugin['hjtp_dcexcelnub']){
			$dcnumb = intval($plugin['hjtp_dcexcelnub']);
		}else{
			$dcnumb = 100;
		}
		$voteinfo =  C::t('#hejin_toupiao#hjtp_votes')->fetch_by_id($vid);
		$stlists = C::t('#hejin_toupiao#hjtp_zuopins')->fetch_phb_vid($vid,$dcnumb);
		$str = '<table style="border:1px solid #666;"><tr><td>'.lang('plugin/hejin_toupiao', 'mingci')."</td><td>".lang('plugin/hejin_toupiao', 'zpxming')."</td><td>".lang('plugin/hejin_toupiao', 'telphone')."</td><td>".lang('plugin/hejin_toupiao', 'zppic')."</td><td>".lang('plugin/hejin_toupiao', 'zppic')."</td><td>".lang('plugin/hejin_toupiao', 'zppic')."</td><td>".lang('plugin/hejin_toupiao', 'zppic')."</td><td>".lang('plugin/hejin_toupiao', 'zppic')."</td><td>".lang('plugin/hejin_toupiao', 'yijuhua')."</td><td>".lang('plugin/hejin_toupiao', 'clicknuba')."</td><td>".lang('plugin/hejin_toupiao', 'votenuba')."</td></tr>"; 
		foreach($stlists as $key=>$zuopin){
      		$mingci = $key+1;
        	$xingming = $zuopin['zpname'];
        	$dianhua = $zuopin['telphone'];
			if($zuopin['pica']){
				$pica = HEJIN_PATH.$zuopin['pica'];
			}else{
				$pica = '';
			}
			if($zuopin['picb']){
				$picb = HEJIN_PATH.$zuopin['picb'];
			}else{
				$picb = '';
			}
			if($zuopin['picc']){
				$picc = HEJIN_PATH.$zuopin['picc'];
			}else{
				$picc = '';
			}
			if($zuopin['picd']){
				$picd = HEJIN_PATH.$zuopin['picd'];
			}else{
				$picd = '';
			}
			if($zuopin['pice']){
				$pice = HEJIN_PATH.$zuopin['pice'];
			}else{
				$pice = '';
			}
        	
        	$yijuhua = $zuopin['content'];
        	$clicknuba = $zuopin['liulans'];
        	$votenuba = $zuopin['toupiaos'];
        	$str .= $mingci.",".$xingming.",".$dianhua.",".$pica.",".$picb.",".$picc.",".$picd.",".$pice.",".$yijuhua.",".$clicknuba.",".$votenuba."\n"; 
		}
    		$filename = $voteinfo['title'].'.csv'; //设置文件名   
    		export_csv($filename,$str); //导出   
	}
}
*/

//导出某用户的投票记录
else if($model == 'dcexcel'){
	$zid = intval($_GET['zid']);
	if($zid){
		header("Content-Type:text/html;charset=utf-8");
		$zpinfo = C::t('#hejin_toupiao#hjtp_zuopins')->fetch_by_id($zid);
		$str ="USERID,OPENID,IP,TIME\n"; 
		$tplist = C::t('#hejin_toupiao#hjtp_tpjles')->fetch_zid_all($zid);
		foreach($tplist as $key=>$tps){
        	$str .= $tps['uid'].",".$tps['openid'].",".$tps['ips'].",".date('Y-m-d H:i:s',$tps['yuliua'])."\n"; 
		}
    		$filename = $zpinfo['zpname'].'.csv'; //设置文件名   
    		export_csv($filename,$str); //导出   
	}
}


//导出excel
else if($model == 'daochu'){
	$vid = intval($_GET['vid']);
	if($vid){
		//header("Content-Type:text/html;charset=utf-8");
		loadcache('plugin');
		$plugin = $_G['cache']['plugin']['hejin_toupiao'];
		$dcnumb = intval($plugin['hjtp_dcexcelnub']);
		$voteinfo =  C::t('#hejin_toupiao#hjtp_votes')->fetch_by_id($vid);
		$stlists = C::t('#hejin_toupiao#hjtp_zuopins')->fetch_phb_vid($vid,$dcnumb);
		if($_G['charset']=='gbk'){
			$str = lang('plugin/hejin_toupiao', 'mingci').",ID,".lang('plugin/hejin_toupiao', 'zpxming').",".lang('plugin/hejin_toupiao', 'telphone').",".lang('plugin/hejin_toupiao', 'zppic').",".lang('plugin/hejin_toupiao', 'zppic').",".lang('plugin/hejin_toupiao', 'zppic').",".lang('plugin/hejin_toupiao', 'zppic').",".lang('plugin/hejin_toupiao', 'zppic').",".lang('plugin/hejin_toupiao', 'yijuhua').",".lang('plugin/hejin_toupiao', 'clicknuba').",".lang('plugin/hejin_toupiao', 'votenuba')."\n"; 
			
		}elseif($_G['charset']=='utf-8'){
			$str = g2u(lang('plugin/hejin_toupiao', 'mingci')).",ID,".g2u(lang('plugin/hejin_toupiao', 'zpxming')).",".g2u(lang('plugin/hejin_toupiao', 'telphone')).",".g2u(lang('plugin/hejin_toupiao', 'zppic')).",".g2u(lang('plugin/hejin_toupiao', 'zppic')).",".g2u(lang('plugin/hejin_toupiao', 'zppic')).",".g2u(lang('plugin/hejin_toupiao', 'zppic')).",".g2u(lang('plugin/hejin_toupiao', 'zppic')).",".g2u(lang('plugin/hejin_toupiao', 'yijuhua')).",".g2u(lang('plugin/hejin_toupiao', 'clicknuba')).",".g2u(lang('plugin/hejin_toupiao', 'votenuba'))."\n"; 
		}

		foreach($stlists as $key=>$zuopin){
      		$mingci = $key+1;
        	$xingming = $zuopin['zpname'];
        	$dianhua = $zuopin['telphone'];
			if($zuopin['pica']){
				if (strpos($zuopin['pica'], '://')==false){
					$pica = HEJIN_PATH.$zuopin['pica'];
				}else{
					$pica = $zuopin['pica'];
				}
			}else{
				$pica = '';
			}
			if($zuopin['picb']){
				if (strpos($zuopin['picb'], '://')==false){
					$picb = HEJIN_PATH.$zuopin['picb'];
				}else{
					$picb = $zuopin['picb'];
				}
			}else{
				$picb = '';
			}
			if($zuopin['picc']){
				if (strpos($zuopin['picc'], '://')==false){
					$picc = HEJIN_PATH.$zuopin['picc'];
				}else{
					$picc = $zuopin['picc'];
				}
			}else{
				$picc = '';
			}
			if($zuopin['picd']){
				if (strpos($zuopin['picd'], '://')==false){
					$picd = HEJIN_PATH.$zuopin['picd'];
				}else{
					$picd = $zuopin['picd'];
				}
			}else{
				$picd = '';
			}
			if($zuopin['pice']){
				if (strpos($zuopin['pice'], '://')==false){
					$pice = HEJIN_PATH.$zuopin['pice'];
				}else{
					$pice = $zuopin['pice'];
				}
			}else{
				$pice = '';
			}
        	
        	$yijuhua = $zuopin['content'];
        	$clicknuba = $zuopin['liulans'];
        	$votenuba = $zuopin['toupiaos'];
			if($plugin['hjtp_numbtp']){
				$bianhao = $zuopin['id'];
			}else{
				$bianhao = $vid*10000+$zuopin['id'];
			}

			if($_G['charset']=='gbk'){
        		$str .= $mingci.",".$bianhao.",".$xingming.",".$dianhua.",".$pica.",".$picb.",".$picc.",".$picd.",".$pice.",".$yijuhua.",".$clicknuba.",".$votenuba."\n"; 
			}elseif($_G['charset']=='utf-8'){
        		$str .= $mingci.",".$bianhao.",".g2u($xingming).",".$dianhua.",".$pica.",".$picb.",".$picc.",".$picd.",".$pice.",".g2u($yijuhua).",".$clicknuba.",".$votenuba."\n"; 
			}

		}
    		$filename = $voteinfo['title'].'.csv'; //设置文件名   
    		export_csv($filename,$str); //导出   
	}
}


/**
//导出excel
else if($model == 'daochuutf'){
	$vid = intval($_GET['vid']);
	if($vid){
		header("Content-Type:text/html;charset=gb2312");
		if($hejintoupiao['hjtp_dcexcelnub']){
			$dcnumb = intval($hejintoupiao['hjtp_dcexcelnub']);
		}else{
			$dcnumb = 100;
		}
			$voteinfo =  C::t('#hejin_toupiao#hjtp_votes')->fetch_by_id($vid);
		//}
		$stlists = C::t('#hejin_toupiao#hjtp_zuopins')->fetch_phb_vid($vid,$dcnumb);
		$str = g2u(lang('plugin/hejin_toupiao', 'mingci')).",".g2u(lang('plugin/hejin_toupiao', 'zpxming')).",".g2u(lang('plugin/hejin_toupiao', 'telphone')).",".g2u(lang('plugin/hejin_toupiao', 'zppic')).",".g2u(lang('plugin/hejin_toupiao', 'zppic')).",".g2u(lang('plugin/hejin_toupiao', 'zppic')).",".g2u(lang('plugin/hejin_toupiao', 'zppic')).",".g2u(lang('plugin/hejin_toupiao', 'zppic')).",".g2u(lang('plugin/hejin_toupiao', 'yijuhua')).",".g2u(lang('plugin/hejin_toupiao', 'clicknuba')).",".g2u(lang('plugin/hejin_toupiao', 'votenuba'))."\n"; 
		
		foreach($stlists as $key=>$zuopin){
      		$mingci = $key+1;
        	$xingming = $zuopin['zpname'];
        	$dianhua = $zuopin['telphone'];
			if($zuopin['pica']){
				$pica = HEJIN_PATH.$zuopin['pica'];
			}else{
				$pica = '';
			}
			if($zuopin['picb']){
				$picb = HEJIN_PATH.$zuopin['picb'];
			}else{
				$picb = '';
			}
			if($zuopin['picc']){
				$picc = HEJIN_PATH.$zuopin['picc'];
			}else{
				$picc = '';
			}
			if($zuopin['picd']){
				$picd = HEJIN_PATH.$zuopin['picd'];
			}else{
				$picd = '';
			}
			if($zuopin['pice']){
				$pice = HEJIN_PATH.$zuopin['pice'];
			}else{
				$pice = '';
			}
        	
        	$yijuhua = $zuopin['content'];
        	$clicknuba = $zuopin['liulans'];
        	$votenuba = $zuopin['toupiaos'];
        	$str .= $mingci.",".g2u($xingming).",".$dianhua.",".$pica.",".$picb.",".$picc.",".$picd.",".$pice.",".g2u($yijuhua).",".$clicknuba.",".$votenuba."\n"; 
		}
		
    		$filename = $voteinfo['title'].'.csv'; //设置文件名   
    		export_csv($filename,$str); //导出  
	}
}

*/


//获取用户信息
elseif($model=='getuser'){
	$zid= intval($_GET['zid']);
	loadcache('plugin');
	$plugin = $_G['cache']['plugin']['hejin_box'];
	if($plugin['hjbox_wxgzrz']==2 && $plugin['hjbox_appid'] && $plugin['hjbox_appsecret']){
		if($_GET['formhash']==formhash()){
			if($_GET['uid']){
				if($_GET['page']){
					$page = intval($_GET['page']);
				}else{
					$page = 1;
				}
				$uid = intval($_GET['uid']);
				$userinfo = C::t('#hejin_box#hjbox_users')->fetch_by_id($uid);
				if(count($userinfo)){
					if(!$userinfo['nickname']){
						$openid = $userinfo['openid'];
						$token =  C::t('#hejin_box#hjbox_token')->fetch_by_id(1);
						if(!count($token)){
							$access_token = getaccesstoken($plugin['hjbox_appid'], $plugin['hjbox_appsecret']);
							if($access_token){
								$addtokendata = array(
									'id'=>1,
									'access_token' => addslashes($access_token),
									'cj_time'=>time(),
								);
								$addtoken = C::t('#hejin_box#hjbox_token')->insert($addtokendata);
								$returnaccess = $access_token;
							}
						}else{
							$sytime = time()-$token['cj_time'];
							if($sytime>7000){
								$access_token = getaccesstoken($plugin['hjbox_appid'], $plugin['hjbox_appsecret']);
								if($access_token){
									$uptokendata = array(
										'access_token' => addslashes($access_token),
										'cj_time'=>time(),
									);
									$uptoken = C::t('#hejin_box#hjbox_token')->update_by_id(1,$uptokendata);
									$returnaccess = $access_token;
								}
							}else{
								$returnaccess = $token['access_token'];
							}
						}
						
						if($returnaccess){
							$wxuser = getwuserinfo($openid, $returnaccess);
							if($wxuser['nickname']){
								$upuserdata = array();
								$upuserdata['nickname']= addslashes(u2g($wxuser['nickname']));
								$upuserdata['sex']= intval($wxuser['sex']);
								$upuserdata['city']= addslashes(u2g($wxuser['city']));
								$upuserdata['country']= addslashes(u2g($wxuser['country']));
								$upuserdata['province']= addslashes(u2g($wxuser['province']));
								$upuserdata['headimgurl']= addslashes(u2g($wxuser['headimgurl']));
								$upuser = C::t('#hejin_box#hjbox_users')->update_by_id($userinfo['id'],$upuserdata);
								if($upuser){
									$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=tpjles&zid='.$zid.'&page='.$page;
									cpmsg(lang('plugin/hejin_box', 'getcg'), $url, 'succeed');	
									exit;	
								}else{
									$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=tpjles&zid='.$zid.'&page='.$page;
									cpmsg(lang('plugin/hejin_box', 'getsb'), $url, 'error');	
									exit;	
								}
							}else{
								$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=tpjles&zid='.$zid.'&page='.$page;
								cpmsg(lang('plugin/hejin_box', 'getsb'), $url, 'error');
								exit;		
							}
						}else{
							$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=tpjles&zid='.$zid.'&page='.$page;
							cpmsg(lang('plugin/hejin_box', 'getsb'), $url, 'error');
							exit;	
						}
					}else{
						$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=tpjles&zid='.$zid.'&page='.$page;
						cpmsg(lang('plugin/hejin_box', 'getcg'), $url, 'succeed');	
						exit;	
					}
				}else{
					$url = 'action=plugins&operation=config&do=' . $_GET['do'] . '&identifier=hejin_toupiao&pmod=toupiao&model=tpjles&zid='.$zid.'&page='.$page;
					cpmsg(lang('plugin/hejin_box', 'getsb'), $url, 'error');	
					exit;	
				}
			}
		}
	}else{
		$url = 'action=plugins&operation=config&do=' . $_GET['do'];
		cpmsg(lang('plugin/hejin_box', 'geterror'), $url, 'error');	
		exit;	
	}
}

function https_request($url, $data = null) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    if (!empty($data)) {
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}
//获取access_token
function getaccesstoken($appid, $appsecret) {
    $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret;
    $result = https_request($url);
    $jsoninfo = json_decode($result, true);
    $access_token = $jsoninfo["access_token"];
    return $access_token;
}
//获取用户信息
function getwuserinfo($openid, $returnaccess) {
    $access_token = $returnaccess;
    $url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=" . $access_token . "&openid=" . $openid . "&lang=zh_CN";
    $wuser = https_request($url);
    $wuser = json_decode($wuser, true);
    return $wuser;
}


function GetIP(){
	$ip=false;
	if(!empty($_SERVER["HTTP_CLIENT_IP"])){
		$ip = $_SERVER["HTTP_CLIENT_IP"];
	}
	if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
		if(count($ips)<2){
			$ips = explode (",", $_SERVER['HTTP_X_FORWARDED_FOR']);	
		}
		if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }
		for ($i = 0; $i < count($ips); $i++) {
			if (!eregi ("^(10|172\.16|192\.168)\.", $ips[$i])) {
				$ip = $ips[$i];
				break;
			}
		}
	}
	return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
}


function get_ip_data($ips){
	//header("Content-Type:text/html;charset=utf-8");
	//echo get_client_ip();
	$ip=file_get_contents("http://ip.taobao.com/service/getIpInfo.php?ip=".$ips);
	$ip = urldecode($ip);
	$ip = json_decode($ip);
	if($ip->code){
		return false;
	}
	$data = (array) $ip->data;
	return $data;//return $data;
}

    function u2g($a) {
        return is_array($a) ? array_map('u2g', $a) : diconv($a, 'UTF-8', CHARSET);
    }



function uploads($postname,$dir){
	$tempFile = $_FILES[$postname]['tmp_name'];
    $fileTypes = array('jpg','jpeg','gif','png');
 	$fileParts = pathinfo($_FILES[$postname]['name']);
	$extension = strtolower($fileParts['extension']);
	$name   = date('mdHis').'-'.rand(100,999).'.'.$extension;
    $targetFolder = HEJIN_ROOT.'/'.$dir;
 	if(!is_dir($targetFolder)){mkdir($targetFolder,0777,TRUE);}
	@chmod($targetFolder,0777); 
	$loca   = $targetFolder.'/'.$name;
 	if (in_array($extension,$fileTypes)) {
		if(copy($tempFile,$loca)){
		   return $dir.'/'.$name;
		}
	}else{
		showmessage(lang('plugin/hejin_hongbao', 'picgsbd'),'');
			   
	}
}


function export_csv($filename,$data)   
{   
	ob_end_clean();
    define('FOOTERDISABLED',1);
    header("Content-type:text/csv");   
    header("Content-Disposition:attachment;filename=".$filename);   
    header('Cache-Control:must-revalidate,post-check=0,pre-check=0');   
    header('Expires:0');   
    header('Pragma:public');   
    echo $data;   
}  

function g2u($a) {
       return is_array($a) ? array_map('g2u', $a) : diconv($a, CHARSET, 'gb2312');
}
?>