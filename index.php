<html>
<head>
<title>Web Service</title>
<style type="text/css">
.sadaya{
	color:#FFF;
	width:1000px;
	margin:auto
}
.header{
	margin:auto;
	text-align:center
}
.anggota{
	padding:6px;
	float:left;
	width:200px;
	color:#C71585;
}
.art{
	padding:4px;
	width:800px;
	float:left;
	color:#C71585;
	height:auto
}
</style>
</head>
<body background="pict/pink.jpg">
<div class="header">
<center><img src="pict/gambar.jpg"></div>
<div class="anggota"><font size=4 face="Comic Sans MS">
<center>
<b>created by: <br /> </b>
</center>
<ul>
<li>Arni Rahmawati<br />
117006054<br />
<img src="pict/arni.jpg" width=100px/></li><br />
<li>Fitria Nurwidyawati<br />
117006067<br />
<img src="pict/fitria.jpg" width=100px/></li><br />
<li>Elis<br />
117006082<br />
<img src="pict/elis.jpg" width=100px/></li><br />
</ul>
</div>
<div class="art">
<center><h1>Hello, welcome to our website...</h1></center><br />
<br />
<?php
// we can specify a localy version or a remote xml as in example
$xml = simplexml_load_file("http://rss.detik.com/index.php/food");
// if I use a local file saved in /tmp directory: $xml = simplexml_load_file("/tmp/podcast.xml");
 
// now make a XPath selection: select all <item> tag.
$items = $xml->xpath("/rss/channel/item");
 
// Now, $items contains a class version of a <item> tag.
// So, if I'd like to print only the title of news item:
foreach($items as $item){
//membuat variabel dari judul dan deskripsi (bisa juga menggunakan gambar)
$title = $item->title;
$description = $item->description;

//menampilkan deskripsi dan judul pada browser Anda
echo '<b><li>'.$item->title.'</li></b>'; 
echo $item->link.'<br>';
echo $item->description.'<br><br><br>';
}
?>
</body>
</html>
