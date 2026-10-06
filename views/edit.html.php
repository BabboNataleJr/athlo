<div class="exercise-wrapper">
    <div class="actual-image">
        <img src="<?php echo htmlspecialchars($exercise['immagine'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($exercise['name'], ENT_QUOTES, 'UTF-8'); ?>">
    </div>

    <div class="actual-text">
        <textarea name="exercise[descrizione]" id="exercise_descr" cols="30" rows="10"><?php echo htmlspecialchars($exercise['descrizione'], ENT_QUOTES, 'UTF-8')?></textarea>
    </div>
</div>