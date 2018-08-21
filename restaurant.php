<?php
	header('Content-type: text/json');
	
	$merchants = array (	
		array ("id" => "0", "city" => "2", "cat" =>"1", "name" => "Banana Leaf 蕉叶屋", "location" => "Downtown 和主干道West Broadway", 
		"image1" => "http://wx.vancent.net/bcpass/images/bananaleaf/bananaleaf.png", "image2" => "http://wx.vancent.net/bcpass/images/bananaleaf/895481827231402788.jpg", "description" => "&nbsp;&nbsp;&nbsp;&nbsp;蕉叶屋是在整个加拿大, 唯一一家经营了二十多年的马来西亚风味的餐馆。每天客满的地道马来西亚料理和颜值超高又好喝的鸡尾酒深受广大群众的喜爱。现今在温哥华已开有五家分店，位置均在于繁忙的市中心Downtown 和主干道West Broadway。每一家店均采用鲜艳的颜色对比和装饰，一进门都会看到各式民族木雕和烹调香料摆设，充满着浓厚的东南亚风情和热带情调，当然门口还少不了多年来所获得各种饮食奖项的陈列，从摆盘到食物到环境，真的都没话说。作为马来西亚华侨的店主，人很好，善良热情，一直有着把马来西亚美食传递天下的理念，向来很少做宣传，生意来源都是靠食客的口碑。\n&nbsp;&nbsp;&nbsp;&nbsp;建议想到这里去品食南洋美食的朋友们，一定要提早订位哦！还有一定不要忘记超级出名的菠萝海鲜炒饭，甜酱油野生银雪鱼，沙爹串烧，马拉薄饼，惹当咖喱牛腩，三巴辣椒老虎虾。。。。。\n&nbsp;&nbsp;&nbsp;&nbsp;关于美食，我不比你懂得更多，所以也在等答案。"),
		array ("id" => "1", "city" => "1", "cat" =>"1", "name" => "ZenQ", "location" => "#105 – 2971 Viking Way, Richmond BC", 
		"image1" => "http://wx.vancent.net/bcpass/images/zenq/zenq.PNG", "image2" => "http://wx.vancent.net/bcpass/images/zenq/iot-001-cmyk.jpg", "description" => ""),
		array ("id" => "2", "city" => "1", "cat" =>"1", "name" => "鱼非鱼", "location" => "1161-8328 Capstan Way", 
		"image1" => "http://localhost/images/yufeiyu/yufeiyu.jpg", "image2" => "http://localhost/images/yufeiyu/yufeiyu.jpg", "description" => ""),
		array ("id" => "3", "city" => "1", "cat" =>"1", "name" => "ccc", "location" => "bbb", "image1" => "http://wx.vancent.net/bcpass/sample.jpg", "image2" => "http://wx.vancent.net/bcpass/test.png", "description" => ""),
		array ("id" => "4", "city" => "1", "cat" =>"1", "name" => "eee", "location" => "bbb", "image1" => "http://wx.vancent.net/bcpass/sample.jpg", "image2" => "http://wx.vancent.net/bcpass/test.png", "description" => ""),
		array ("id" => "5", "city" => "4", "cat" =>"1", "name" => "fff", "location" => "bbb", "image1" => "http://wx.vancent.net/bcpass/sample.jpg", "image2" => "http://wx.vancent.net/bcpass/test.png", "description" => ""),

		array ("id" => "6", "city" => "1", "cat" =>"1", "name" => "aaa", "location" => "bbb", "image1" => "http://wx.vancent.net/bcpass/sample.jpg", "image2" => "http://wx.vancent.net/bcpass/test.png", "description" => ""),
		array ("id" => "7", "city" => "1", "cat" =>"1", "name" => "bbb", "location" => "bbb", "image1" => "http://wx.vancent.net/bcpass/sample.jpg", "image2" => "http://wx.vancent.net/bcpass/test.png", "description" => ""),
		array ("id" => "8", "city" => "1", "cat" =>"1", "name" => "ccc", "location" => "bbb", "image1" => "http://wx.vancent.net/bcpass/sample.jpg", "image2" => "http://wx.vancent.net/bcpass/test.png", "description" => ""),
		array ("id" => "9", "city" => "1", "cat" =>"1", "name" => "eee", "location" => "bbb", "image1" => "", "image2" => "", "description" => ""),
		array ("id" => "10", "city" => "1", "cat" =>"1",  "name" => "fff", "location" => "bbb", "image1" => "", "image2" => "", "description" => ""),

		array ("id" => "11", "city" => "1", "cat" =>"1",  "name" => "aaa", "location" => "bbb", "image1" => "", "image2" => "", "description" => ""),
		array ("id" => "12", "city" => "1", "cat" =>"1", "name" => "bbb", "location" => "bbb", "image1" => "", "image2" => "", "description" => ""),
		array ("id" => "13", "city" => "1", "cat" =>"1", "name" => "ccc", "location" => "bbb", "image1" => "", "image2" => "", "description" => ""),
		array ("id" => "14", "city" => "1", "cat" =>"1", "name" => "eee", "location" => "bbb", "image1" => "", "image2" => "", "description" => ""),
		array ("id" => "15", "city" => "1", "cat" =>"1",  "name" => "fff", "location" => "bbb", "image1" => "", "image2" => "", "description" => ""),

		array ("id" => "16", "city" => "1", "cat" =>"1", "name" => "aaa", "location" => "bbb", "image1" => "", "image2" => "", "description" => ""),
		array ("id" => "17", "city" => "1", "cat" =>"1", "name" => "bbb", "location" => "bbb", "image1" => "", "image2" => "", "description" => ""),
		array ("id" => "18", "city" => "1", "cat" =>"1", "name" => "ccc", "location" => "bbb", "image1" => "", "image2" => "", "description" => ""),
		array ("id" => "19", "city" => "1", "cat" =>"1", "name" => "eee", "location" => "bbb", "image1" => "", "image2" => "", "description" => ""),
		array ("id" => "20", "city" => "1", "cat" =>"1", "name" => "fff", "location" => "bbb", "image1" => "", "image2" => "", "description" => "")
					
	);
	
	//$city = $_GET['city'];
    //$category = $_GET['category'];
	// category 1 景点 2 餐厅 3 购物 4 娱乐
	//city   1 richmond 2 vancouver 3 victory 4 burnaby
	//$ret = array ("id" => "0", "city" => "1", "cat" =>"1", "name" => "aaa", "location" => "bbb", "image1" => "", "image2" => "", "description" => "");
	
  
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
	}
		//echo $ret;
	/*$fruits = array (
    "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes"   => array("first", 5 => "second", "third")
);*/
echo json_encode($merchants);

?>
