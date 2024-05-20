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
        ['image' => 'galaxy.jpg', 'photographer' => 'NASA', 'photographer_url' => 'https://unsplash.com/@nasa'],
        ['image' => 'moon.jpg', 'photographer' => 'Jordon Conner', 'photographer_url' => 'https://unsplash.com/@jordonsconner'],
        ['image' => 'spacerocket.jpg', 'photographer' => 'Bill Jelen', 'photographer_url' => 'https://unsplash.com/@billjelen'],
        ['image' => 'mount_everest.jpg', 'photographer' => 'Andreas Gabler', 'photographer_url' => 'https://unsplash.com/@medini108'],
    ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title><?php echo $config['gallery_name']; ?></title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    <!-- Display Gallery Name -->
    <h1><?php echo $config['gallery_name']; ?></h1>

    <!-- display images from unsplash api -->
    <div id="gallery" class="grid-container">
        <?php foreach ($config['unsplash_categories'] as $category): ?>
            <div class="grid-item">
                <h2><?php echo ucfirst($category); ?></h2>
                <img src="https://source.unsplash.com/300x200/?<?php echo $category; ?>" alt="<?php echo $category; ?> image">
            </div>
        <?php endforeach; ?>
    </div>
    <!-- display local images -->
    <h1> <?php echo count($config['local_images']); ?> Large Images</h1>
    <div id= large-images>
    <?php foreach ($config['local_images'] as $image): ?>
        <div>
            <img src="images/<?php echo $image['image']; ?>" alt="Image">
            <!-- <h3 class="photographer"> 
                <a href="<?php echo $image['photographer_url']; ?>"><?php echo $image['photographer']; ?></a>
            </h3> -->
        </div>
    <?php endforeach; ?>
    </div>
</body>
</html>