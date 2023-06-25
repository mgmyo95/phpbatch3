<?php 
$name = $email = $password = $city = $favcolor = $bio = "";

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $city = $_POST["city"];
    $favcolor = $_POST["favcolor"];
    $bio = $_POST["bio"];
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form Handling 1</title>
    </head>
    <body>
     
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">   <!--  protocol = 15 -->
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="" />
        </div>

        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="" />
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="" />
        </div>

        <div>
            <label for="">Fav Color</label>
            <input type="radio" name="favcolor" id="favrd" class="" value="red color" /><label for="favrd">Red</label>
            <input type="radio" name="favcolor" id="favgn" class="" value="green color" /><label for="favgn">Green</label>
            <input type="radio" name="favcolor" id="favbl" class="" value="blue color" /><label for="favbl">Blue</label>
        </div>

        <div>
            <label for="city">City</label>
            <input name="city" id="city" class="" />
        </div>

        <div>
            <label for="bio">Bio</label>
            <textarea name="bio" id="bio" rows="5" cols="50"></textarea>
        </div>
    

        <button type="submit">Submit</button>
    </form>

    <?php 
        echo "<h2>My Information Are...</h2>";
        echo "Name is $name <br/>";
        echo "Email is $email </br/>";
        echo "Password is $password </br/>";
        echo "City is $city </br/>";
        echo "favcolor is $favcolor </br/>";
        echo "bio is $bio </br/>";
    ?>
    </body>
</html>
