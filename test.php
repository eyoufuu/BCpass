<?php
	header('Content-type: text/json');
	
	$merchants = array (	
		array ("id" => "0", "city" => "1", "cat" =>"1", "name" => "那家小馆早午茶隆重登场。", "location" => "258 - 5701 Granville St, Vancouver, BC V6M 4J7 ", "image1" => "http://wx.vancent.net/bcpass/sample.jpg", "image2" => "http://wx.vancent.net/bcpass/test.png", "description" => "好消息！8月21日起，那家小馆将为各位食客提供早午茶。从北方小点到广式点心，总有一款适合您的口味。早午茶从早上9点一直到下午三点。欢迎大家到店品尝。"),
		array ("id" => "1", "city" => "1", "cat" =>"1", "name" => "aaa", "location" => "bbb", "image1" => "http://wx.vancent.net/bcpass/sample.jpg", "image2" => "http://wx.vancent.net/bcpass/test.png", "description" => ""),
		array ("id" => "2", "city" => "2", "cat" =>"1", "name" => "bbb", "location" => "bbb", "image1" => "http://wx.vancent.net/bcpass/sample.jpg", "image2" => "http://wx.vancent.net/bcpass/test.png", "description" => ""),
		array ("id" => "3", "city" => "3", "cat" =>"1", "name" => "ccc", "location" => "bbb", "image1" => "http://wx.vancent.net/bcpass/sample.jpg", "image2" => "http://wx.vancent.net/bcpass/test.png", "description" => ""),
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
