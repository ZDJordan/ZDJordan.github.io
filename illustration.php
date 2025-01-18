<?php
$json = '
{
  "illustrations": [
    {
      "filename": "WesternComic.png",
      "title": "Railway Outlaw Crew",
      "description": "Comic series concept illustration"
    },
    {
      "filename": "WharfConcept.png",
      "title": "Mystery on the Wharf",
      "description": "Comic series concept illustration"
    },
    {
      "filename": "Robuttnik.png",
      "title": "Robotnik",
      "description": "Fan Work"
    },
    {
      "filename": "Kudzu.png",
      "title": "Kudzu",
      "description": "Album Artwork"
    },
    {
      "filename": "Link_Faceoff.png",
      "title": "Link Faces the Darknut",
      "description": "Fan Work"
    },
    {
      "filename": "SamusPirates.png",
      "title": "Samus Aran - Surrounded",
      "description": "Fan Work"
    },
    {
      "filename": "Illustration-Bait.png",
      "title": "Bait",
      "description": ""
    },
    {
      "filename": "JammerDoor.jpg",
      "title": "Let us In Already",
      "description": "Fan Work"
    },
    {
      "filename": "Amychase.png",
      "title": "Amy Chased",
      "description": "Fan Work"
    },
    {
      "filename": "Tails-Teacup.png",
      "title": "Tails Teacup",
      "description": "Fan Work"
    },
    {
      "filename": "Illustration-Empty.png",
      "title": "Empty",
      "description": ""
    }
  ]
}';

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
