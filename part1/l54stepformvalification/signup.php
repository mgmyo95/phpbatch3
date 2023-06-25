<!DOCTYPE html>
<html>
    <head>
        <title>Register Form</title>
        <link href="./style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        
      <div class="container">

         <div id="dotbox" class="dotbox">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
         </div>

         <form id="form" action="./register.php" method="POST" enctype="multipart/form-data">
            <h1>Register With Us</h1>

            <div class="page">
                <label for="email">Secuity :</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" autocomplete="off" />
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" />
            </div>

            <div class="page">
                <label for="firstname">Personal Info :</label>
                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter first Name" autocomplete="off" />
                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter Last Name" autocomplete="off" />
                <div>
                    <label for="profile">Profile Picture</label>
                    <input type="file" name="profile[]" id="profile" class="form-control" />
                </div>
            </div>

            <div class="page">
                <label for="dob">Daet Of Birth :</label>
                <input type="date" name="dob" id="dob" class="form-control" />
              
            </div>

            <div class="page">
                <label for="phone">Contact Info:</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone" autocomplete="off" />
                <input type="text" name="address" id="address" class="form-control" placeholder="Enter Detail Address" autocomplete="off" />
                
            </div>

            <div class="d-flex">
                <button type="button" id="prevbtn" class="btn" onclick="gonow(-1)">Previous</button>
                <button type="button" id="nextbtn" class="btn" onclick="gonow(1)">Next</button>
            </div>

         </form>

         <div id="result-container">
        
         </div>

      </div>



    <script src="./app.js" type="text/javascript"></script>
    </body>
</html>