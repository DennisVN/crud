<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit sheet</title>
</head>
<body>
    <h2>Update your Pikeman</h2>

    <form action="edit.php" method="post">
        <table>
            <label>Edit Pikeman</label>
            <?php var_dump($card); ?>
            <input type="text" name="editName" value="<?= $card['editName'] ?>">
            <label>Edit Rarity</label>
            <input type="text" name="editRarity" value="<?= $card['editRarity'] ?>">
            <br>
            <input type="checkbox" name="editOwned" value="1" class="form-check-input" id="checkbox">
            <label class="form-check-label" for="checkbox">I own this Pikeman !</label>
            <button type="submit" name="editSubmit" value="<?= $card['editSubmit'] ?>">Submit Changes</button>

        
            <?php foreach ($cards as $card) :  ?>
            <?php if(!empty($_GET['editSubmit']) && $card['name'] == $_GET['editSubmit']) : ?>
            <?php endif; ?>
            <?php endforeach; ?>
        </table>
    </form>
    
</body>
</html>