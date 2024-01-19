<?php

/******************
    
    Name: Lashman Singh
    Date: 11-01-2024
    Description: This is small project which is made using HTML, PHP and CSS. For generating
                 random images unsplashed API.

******************/

$config = [
    'gallery_name' => "Lashman's Gallery",
    'unsplash_categories' => ['Games', 'Punjab', 'Canada', 'Programming', 'Music', 'Cars', 'Food', 'Galaxy'],
    'local_images' => [
        ['name' => 'stephen-crowleyImg.jpg', 'photographer_name' => 'Stephen Crowley', 'photographer_url' => 'https://unsplash.com/@crowleystephen'],
        ['name' => 'jonas-verstuyftImg.jpg', 'photographer_name' => 'Jonas Verstuyft', 'photographer_url' => 'https://unsplash.com/@verstuyftj'],
        ['name' => 'david-kovalenkImg.jpg', 'photographer_name' => 'David Kovalenk', 'photographer_url' => 'https://unsplash.com/@davidkovalenkoo'],
        ['name' => 'umanoideImg.jpg', 'photographer_name' => 'Umanoide', 'photographer_url' => 'https://unsplash.com/@umanoide']
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
    <title>Assignment 1</title>
</head>
<body>
    <h1><?php echo $config['gallery_name']; ?></h1>

    <div id="gallery">
        <?php foreach ($config['unsplash_categories'] as $category): ?>
            <div>
                <h2><?php echo ucfirst($category); ?></h2>
                <img src="https://source.unsplash.com/300x200/?<?php echo $category; ?>" alt="<?php echo $category; ?> image">
            </div>
        <?php endforeach; ?>
    </div>
    <h1>4 Large Images</h1>

    <?php foreach ($config['local_images'] as $image): ?>
        <img class="local-image" src="images/<?php echo $image['name']; ?>" alt="<?php echo $image['name']; ?>">
        <p><a href="<?php echo $image['photographer_url']; ?>" target="_blank"><?php echo $image['photographer_name']; ?></a></p>
    <?php endforeach; ?>
</body>
</html>
