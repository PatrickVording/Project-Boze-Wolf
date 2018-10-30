<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>RSS Feed</title>
    </head>
    <body>
        <?php
        $xml= simplexml_load_file("https://www.utrecht.nl/nieuws/rss.xml");
        echo '<ul class="list-group">';
        foreach ($xml->channel->item as $itm){
            $title=$itm->title;
            $link=$itm->link;
            $description=$itm->description;
            $date=$itm->pubDate;
            echo '<li class="list-group-item"><a href="'.$link.'">'.$title.'</a> 
                   ' .$description. '<br> <hr>'.$date.'</li>';
        } echo '</ul>';
        ?>
    </body>
</html>
