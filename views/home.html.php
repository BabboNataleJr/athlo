<div>
    <h1>Home Page</h1>
    <p><?php echo $message; ?></p>
</div>

<?php foreach($exercises as $exercise) { ?>

<div class="exercice__wrapper">
    <p><?php echo $exercise['name'] ?> </p>
    <?php if (!empty($exercise['image'])) { ?>
    <image src="" alt=""/>
    <?php } ?>
    <p><?php echo $exercise['description'] ?> </p>
</div>

<?php }