<?php
if($model)
{
    foreach($model as $m)
    {
        echo $m['id'];echo "<br/>";
        echo $m['title'];echo "<br/>";
        echo $m['content'];echo "<br/>";
        
    }
}
?>