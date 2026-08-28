<?php
    $db = $conn->prepare("
        SELECT * FROM projects
    ");

    $db->execute();
    $result = $db->fetchAll();
?>

<div class="projects-container">
    <?php
        for($i  = 0; $i < count($result); $i++){
    ?>
        <div class="project-box-container">
            <img class="project-image" src="assets/images/<?php echo $result[$i]['image_second'];?>" alt="Title">
            <img class="project-image-2" src="assets/images/<?php echo $result[$i]['image_main'];?>" alt="Title">
            <div class="project-info-container">
                <h3 class="project-title">
                    <?php echo $result[$i]['title'];?>
                </h3>
                <p class="project-location">
                    <?php echo $result[$i]['city_location'];?>
                </p>
            </div>
        </div>
    <?php
        }
    ?>
</div>