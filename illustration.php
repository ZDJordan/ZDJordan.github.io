<?php
$illustrations = json_decode($json)->illustrations;
?>

<section id="illustration" class="gallery-section content-wrapper">
  <h2 class="section-title">Illustrations</h2>
  <ul class="gallery">
    <?php
      foreach($illustrations as $artwork){
        $artwork_link = preg_replace('/[[:space:]]+/', '-', $artwork->title);
        echo "<li>
              <a class='artwork-link' href='#".$artwork_link."'> </a>
              <img src=\"img/illustration/".$artwork->filename."\">";
              echo "<p class='title'>".$artwork->title."</p>";
              echo "<p class='discription'>".$artwork->description."</p>
        </li> ";
      }
    ?>

  </ul>
</section>
