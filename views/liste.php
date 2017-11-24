<?php

foreach($posts as $post) {
    echo "<h3>".$post->getTitle()."</h3><em>".$post->getCreatedAt()."</em>";
    echo "<p>".$post->getContent()."</p>";
    echo "<a href=\"index.php?action=detail&id=".$post->getId()."\" class=\"btn btn-info\">Voir</a>";
}

?>
