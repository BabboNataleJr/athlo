<div>
    <p><?php echo $message; ?></p>
</div>
<form action="" method="POST">
    <label for="name">Name of the exercise: </label>
    <input type="text" name="exercise[name]" id="name" placeholder="Title"/>

    <label for="descrizione">What the exercise constitute of: </label>
    <textarea id="descrizione" name="exercise[descrizione]" rows="5" cols="33" placeholder="A brief description for the exercise..."></textarea>

    <label for="immagine">Add an image for the exercise</label>
    <input type="file" name="exercise[immagine]" id="immagine"/>

    <input type="submit" value="Add the excercise">
</form>