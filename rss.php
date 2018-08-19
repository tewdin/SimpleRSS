<?php $front = $pages->get(1); ?>
<?xml version='1.0' encoding='utf-8' ?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title><?= $page->title ?></title>
        <link><?php echo $front->httpUrl ."rss"; ?></link>
        <description><?= $front->sum ?></description>
        <pubDate><?php echo date('D, d M Y H:i:s O', $pages->get("template=blog")->created); ?></pubDate>
        <copyright>Timo Anttila</copyright>
        <ttl>60</ttl>
        <atom:link href="<?php echo $page->httpUrl; ?>" rel="self" type="application/rss+xml"/>
<?php foreach($pages->find('template=blog, sort=-created, limit=10') as $item){
    if(strtotime($item->created) < strtotime('now') ){
        echo "<item><title>$item->title</title><description>$item->sum</description><pubDate>". date('D, d M Y H:i:s O', $item->created) ."</pubDate><link>$item->httpUrl</link><guid>$item->httpUrl</guid></item>";        
    }
} ?>
    </channel>
</rss>
