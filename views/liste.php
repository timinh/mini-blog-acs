<?php

foreach($posts as $post) {
    echo "<h3>".$post->getTitle()."</h3><em>".$post->getCreatedAt()."</em>";
    echo "<p>".$post->getContent()."</p>";
}

?>
