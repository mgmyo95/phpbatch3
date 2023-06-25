<?php 
// ini_set("display_errors",1);

$filenames = $_FILES['profile']['name'];
$filetmps = $_FILES['profile']['tmp_name'];
$fileerrs = $_FILES['profile']['error'];

// echo "<pre>".print_r($filenames,true)."</pre>";
$uploaddir = "assets/";

if(isset($_POST['submit'])){
    foreach($fileerrs as $idx => $fileerr){

        // echo $fileerr . "<br/>";
        // echo $idx;

        // UPLOAD_ERR_OK 
        //there is not error , the file uploaded with success

        if($fileerr === UPLOAD_ERR_OK){
            $getfilename = $filenames[$idx];
            $uploadfile = $uploaddir.basename($getfilename);
            $getfiletmp = $filetmps[$idx];

            if(move_uploaded_file($getfiletmp,$uploadfile)){
                echo "File upload successfully";
            }else{
                echo "Upload failed";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Multi Uploading File</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        
    <!-- <div class="col-md-6 mx-auto mt-5">
        <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="profile">Profile Picture</label>
                <input type="file" name="profile[]" id="profile" class="form-control" />
                <input type="file" name="profile[]" id="profile" class="form-control" />
                <input type="file" name="profile[]" id="profile" class="form-control" />
            </div>

            <input type="submit" name="submit" class="btn btn-primary float-end mt-4" value="upload" />
        </form>
    </div> -->

    <div class="col-md-6 mx-auto mt-5">
        <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="profile">Profile Picture</label>
                <input type="file" name="profile[]" id="profile" class="form-control" multiple />
                
            </div>

            <input type="submit" name="submit" class="btn btn-primary float-end mt-4" value="upload" />
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>




