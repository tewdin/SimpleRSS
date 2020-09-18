<?php $front = $pages->get(1); ?>
<?xml version="1.0" encoding="utf-8" ?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
	<channel>
		<title><?= $front->title ?></title>
		<link><?= $front->httpUrl ?></link>
		<description><?= $front->sum ?></description>
		<pubDate><?php
		$item = $pages->find('template=blog, sort=-created, limit=10');
		echo date('D, d M Y H:i:s O', $pages->get("template=blog")->created);
		?></pubDate>
		<copyright>Priocta</copyright>
		<ttl>60</ttl>
		<atom:link href="<?php echo $page->httpUrl; ?>" rel="self" type="application/rss+xml"/>
		<?php
		if($item->first->img->first){
			echo "<image>";
			echo "<title>". $front->title ."</title>";
			echo "<url>". $item->first->img->first->httpUrl ."</url>";
			echo "<link>". $front->httpUrl ."</link>";
			echo "</image>";
		}
		?>
<?php foreach($item as $item){ if(strtotime($item->created) < strtotime('now') ){
	echo "<item><title>$item->title</title>";
	echo "<description>$item->sum</description>";
	echo "<pubDate>". date('D, d M Y H:i:s O', $item->created) ."</pubDate>";
	echo "<link>$item->httpUrl</link><guid>$item->httpUrl</guid></item>";
}} ?>
	</channel>
</rss>
