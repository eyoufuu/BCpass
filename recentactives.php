<?php
	header('Content-type: text/json');
	
	$merchants = array (	
		array ("activity" => "discount", "holder" => "Iotpay", "id" => "1", "image" =>"http://wx.vancent.net/bcpass/cover.jpg", "info" => "网红店速成指南 | 听", "tag" => "recent", "thumbnail" => "http://wx.vancent.net/bcpass/sample.jpg", "time" => "", "title" => "网红店速成指南 | 听..","url" => "https://mp.weixin.qq.com/s?__biz=MzU3MjExNjE0Ng==&mid=2247484040&idx=1&sn=9f061ed9a920c51c9d443e303d7a2a3e&chksm=fcd49f55cba31643c2a700db716c08c7bc675479e5c263388fe6cf1534eb2004b417ce98a257&mpshare=1&scene=1&srcid=0818K4ORO1loJhEY9IZZ9701#rd"),
		array ("activity" => "recom", "holder" => "nihao", "id" => "2", "image" =>"http://wx.vancent.net/bcpass/cover.jpg", "info" => "topbanner", "tag" => "banner", "thumbnail" => "http://wx.vancent.net/bcpass/sample.jpg", "time" => "", "title" => "banner03","url" => "https://mp.weixin.qq.com/s?__biz=MzU3MjExNjE0Ng==&mid=2247484040&idx=1&sn=9f061ed9a920c51c9d443e303d7a2a3e&chksm=fcd49f55cba31643c2a700db716c08c7bc675479e5c263388fe6cf1534eb2004b417ce98a257&mpshare=1&scene=1&srcid=0818K4ORO1loJhEY9IZZ9701#rd"),	
		array ("activity" => "iotpay", "holder" => "Iotpay", "id" => "3",  "image" =>"http://wx.vancent.net/bcpass/cover.jpg", "info" => "topbanner", "tag" => "recent", "thumbnail" => "http://wx.vancent.net/bcpass/sample.jpg", "time" => "", "title" => "banner03","url" => "https://mp.weixin.qq.com/s?__biz=MzU3MjExNjE0Ng==&mid=2247484040&idx=1&sn=9f061ed9a920c51c9d443e303d7a2a3e&chksm=fcd49f55cba31643c2a700db716c08c7bc675479e5c263388fe6cf1534eb2004b417ce98a257&mpshare=1&scene=1&srcid=0818K4ORO1loJhEY9IZZ9701#rd"),
		array ("activity" => "recent", "holder" => "nihao", "id" => "4",  "image" =>"http://wx.vancent.net/bcpass/cover.jpg", "info" => "topbanner", "tag" => "recent", "thumbnail" => "http://wx.vancent.net/bcpass/sample.jpg", "time" => "", "title" => "banner03","url" => "https://mp.weixin.qq.com/s?__biz=MzU3MjExNjE0Ng==&mid=2247484040&idx=1&sn=9f061ed9a920c51c9d443e303d7a2a3e&chksm=fcd49f55cba31643c2a700db716c08c7bc675479e5c263388fe6cf1534eb2004b417ce98a257&mpshare=1&scene=1&srcid=0818K4ORO1loJhEY9IZZ9701#rd"),	

	);
	
	//$city = $_GET['city'];
    //$category = $_GET['category'];
	// category 1 景点 2 餐厅 3 购物 4 娱乐
	//city   1 richmond 2 vancouver 3 victory 4 burnaby
	//$ret = array ("id" => "0", "city" => "1", "cat" =>"1", "name" => "aaa", "location" => "bbb", "image1" => "", "image2" => "", "description" => "");
	
  /*
	if (isset($_GET['city'])&& ($_GET['city']!=0) )
	{

        $i = 0;
		foreach ($merchants as $item) 
		{
			if ( $item["city"] != $_GET['city'])
			{
				unset($merchants[$i]);
			}
			$i = $i+1;
			//echo $item["city"];
	    }
		$merchants = array_values($merchants);
	}	
    else if(isset($_GET['detail']))	
	{
		$merchants = $merchants[$_GET['detail']];
	}*/
		//echo $ret;
	/*$fruits = array (
    "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes"   => array("first", 5 => "second", "third")
);*/
echo json_encode($merchants);

?>
