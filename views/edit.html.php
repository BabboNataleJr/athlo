<form action="" method="post">
    <div class="exercise-wrapper">
        <div class="exercise-title">
            <h4><?php echo htmlspecialchars($exercise['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?></h4>
        </div>
        <div class="actual-image">
            <img src="<?php echo htmlspecialchars($exercise['immagine'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($exercise['name'], ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="new-to-be_image">
            <label for="exercise_image">Cambia immagine</label>
            <input type="file" name="exercise[immagine]" id="exercise_immage"/>
        </div>

        <div class="actual-text">
            <textarea name="exercise[descrizione]" id="exercise_descr" cols="60" rows="10"><?php echo htmlspecialchars($exercise['descrizione'], ENT_QUOTES, 'UTF-8')?></textarea>
        </div>
    </div>

    <input type="hidden" name="exercise[id]">

    <input type="submit" value="Salva"/> 
    <a href="/">Annulla</a>
</form>