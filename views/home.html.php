<div>
    <h1>Home Page</h1>
</div>

<?php if(empty($exercises)){ ?>
<div class="no_exercises_message">
    <p>No exercises to show.</p>
    <div class="add_exercise">
        <a href="/add">Add an exercise here</a>
    </div>
</div>
<?php } else {
    foreach($exercises as $exercise) { ?>

<div class="ghibli-exercise-card">
    <?php if (!empty($exercise['immagine'])): ?>
    <div class="ghibli-exercise__media">
        <img src="<?php echo htmlspecialchars($exercise['immagine'], ENT_QUOTES, 'UTF-8'); ?>"
            alt="<?php echo htmlspecialchars($exercise['name'], ENT_QUOTES, 'UTF-8'); ?>" />
    </div>
    <?php endif; ?>

    <div class="ghibli-exercise__content">
        <h3 class="ghibli-exercise__title"><?php echo htmlspecialchars($exercise['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
        <p class="ghibli-exercise__desc">
            <?php echo nl2br(htmlspecialchars($exercise['descrizione'], ENT_QUOTES, 'UTF-8')); ?></p>
    </div>
    <div class="ghibli-exercise__remove">
        <form method="POST" action="/exercise/remove/<?php echo htmlspecialchars($exercise['id'], ENT_QUOTES, 'UTF-8'); ?>">
            <button type="submit">Delete it</button>
        </form>
    </div>
    <div class="ghibli-exercise__modify">
        <a href="/exercise/modify/<?php echo htmlspecialchars($exercise['id'], ENT_QUOTES, 'UTF-8'); ?>">Edit</a>
    </div>
</div>

<?php }
}