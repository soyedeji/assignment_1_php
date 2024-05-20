<?php

/*******w******** 
    
    Name: Samuel Oyedeji
    Date: 2024-05-20
    Description: Image Gallery

****************/

$config = [
    'gallery_name' => 'Space and Nature Gallery',
    'unsplash_categories' => ['nature', 'space', 'technology', 'oceans', 'wildlife', 'vegetation'],
    'local_images' => [
        ['image' => 'galaxy_thumbnail.jpg', 'photographer' => 'NASA', 'photographer_url' => 'https://unsplash.com/@nasa'],
        ['image' => 'moon_thumbnail.jpg', 'photographer' => 'Jordon Conner', 'photographer_url' => 'https://unsplash.com/@jordonsconner'],
        ['image' => 'spacerocket_thumbnail.jpg', 'photographer' => 'Bill Jelen', 'photographer_url' => 'https://unsplash.com/@billjelen'],
        ['image' => 'mount_everest_thumbnail.jpg', 'photographer' => 'Andreas Gabler', 'photographer_url' => 'https://unsplash.com/@medini108'],
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/luminous-basic.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <title><?php echo $config['gallery_name']; ?></title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    <!-- Display Gallery Name -->
    <h1><?php echo $config['gallery_name']; ?></h1>

    <!-- display local images -->
    <div id="gallery">
        <?php for ($i = 0; $i < count($config['local_images']); $i++): ?>
            <div>
                <h2 class="photographer"><?php echo $config['local_images'][$i]['photographer']; ?></h2>
                <a href="images/<?php echo str_replace('_thumbnail', '', $config['local_images'][$i]['image']); ?>">
                    <img src="thumbnails/<?php echo $config['local_images'][$i]['image']; ?>" alt="Image">
                </a>
            </div>
        <?php endfor; ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/Luminous.min.js"></script>
    <script>
        new LuminousGallery(document.querySelectorAll("#gallery a"));
    </script>
</body>
</html>
