<?php 
ini_set("display_errors",1);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form Handling 1</title>
    </head>
    <body>
        <!-- get method = url ka address ka nay poLt // get ko more letter don't use-->
   <!-- <form action="./l30formdata1.php" method="GET">   <!--  protocol = 15 -->
        <!-- <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="" />
        </div>

        <div>
            <label for="city">City</label>
            <input type="text" name="city" id="city" class="" />
        </div>

        <button type="submit">Submit</button> -->
    <!-- </form> -->

    <!-- POST ka body htel ka polt -->
    <form action="./l30formdata1.php" method="POST">   <!--  protocol = 15 -->
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="" />
        </div>

        <div>
            <label for="city">City</label>
            <input type="text" name="city" id="city" class="" />
        </div>

        <button type="submit">Submit</button>
    </form>

    </body>
</html>