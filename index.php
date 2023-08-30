<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Webdev practice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstName">Firstname?</label>
            <input type="text" id="firstname" name="firstname" placeholder="Firstname...">
            <label for="lastName">Lastname?</label>
            <input type="text" id="lastname" name="lastname" placeholder="Lastname...">

            <label for="favouritepet"> Favourite Pet?</label>
            <select name="favouritepet" id="favouritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>

            <button type="submit">submit</button>
        </form>
    </main>


    

    

</body>
</html>