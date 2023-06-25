<?php 

// if(isset($_POST['submit'])){
//     // $result = $_POST['profile'];

//     $result = $_FILES;
//     echo "<pre>".print_r($result,true)."</pre>";

//     echo $_FILES['profile']['name'];
//     echo "<br/>";

//     echo $_FILES['profile']['full_path'];
//     echo "<br/>";

//     echo $_FILES['profile']['type'];
//     echo "<br/>";

//     echo $_FILES['profile']['tmp_name'];
//     echo "<br/>";

//     echo $_FILES['profile']['error'];
//     echo "<br/>";

//     echo $_FILES['profile']['size'];
//     echo "<br/>";

// };

function getfilesize($filesize){
    if(is_numeric($filesize)){
        // return "Oki";
        $idx = 0;
        $fixnum = 1024;
        $prefix = ["B","Kb","Mb","Gb","Tb","Pb","Eb","Zb","Yb"];
        
        // echo $prefix[$getidx];

        while(($filesize / $fixnum) > 0.9){
            $filesize = $filesize / $fixnum;
            $idx++;
        };
        return round($filesize,2)." ".$prefix[$idx];
    }else{
        return "NaN";
    }
};
// echo getfilesize(70000000);

function getfilesizetwo($filesize){
    // return $filesize;
    $idx = 0;
    $fixnum = 1024;
    $prefix = ["B","Kb","Mb","Gb","Tb","Pb","Eb","Zb","Yb"];

    if($filesize < $fixnum){
        return $filesize." ".$prefix[$idx];
    }else{
        while($filesize > $fixnum){
            $filesize = round($filesize / $fixnum,2);
            $idx++;     
        }
        return $filesize." ".$prefix[$idx];
    }

};
// echo getfilesizetwo(70000000);

function getfilesizethree($filesize){
    $size = filesize($filesize);  //574
    $fixnum = 1024;
    $prefix = ["B","Kb","Mb","Gb","Tb","Pb","Eb","Zb","Yb"];
    $power = $size > 0 ? floor(log($size,$fixnum)) : 0;  //0
            //log(574,1024);
            //floor(log(574,1024)) //0
     $result = round($size / pow($fixnum,$power),2)." ".$prefix[$power];
    return $result;
};
// echo getfilesizethree("./l41userdeleteform.php");

//teminal => sudo chmod 777 -R assets/
// $uploaddir = "assets/";
// // $uploadfile = $uploaddir.$_FILES['profile']['name']; //assets/cutedog1.jpg
// $uploadfile = $uploaddir.basename($_FILES['profile']['name']); //assets/cutedog1.jpg
// echo $uploadfile;

// //move_uploaded_file(temp,actualpathandname)

// if(isset($_POST['submit'])){
//     if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//         echo "File successfully Uploaded";
//     }else{
//         echo "Try Again";
//     }
// };

// $uploaddir = "assets/";
// $uploadfile = $uploaddir.basename($_FILES['profile']['name']);
// $uploadsize = $_FILES['profile']['size'];
// if(isset($_POST['submit'])){

//     if($uploadfile > 30000){
//         echo "Sorry , Your file is too large";
//     }else{
//         if(file_exists($uploadfile)){
//             echo "Sorry , File already exists";
//         }else{
//             if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//                 echo "File Successfully Uploaded";
//             }else{
//                 echo "Try Again";
//             }
//         }
//     }
// }

$uploaddir = "assets/";
$uploadfile = $uploaddir.basename($_FILES['profile']['name']);
$uploadsize = $_FILES['profile']['size'];
$uploadtype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
echo $uploadfile;
echo $uploadtype;
if(isset($_POST['submit'])){

    if($uploadtype !== "jpg" && $uploadtype !== "jpeg" && $uploadtype !== "png" && $uploadtype !== "git"){
        echo "Sorry , We just allowed for JPG,JPEG,PNG & GIT file types";
    }else{
        if($uploadfile > 30000){
            echo "Sorry , Your file is too large";
        }else{
            if(file_exists($uploadfile)){
                echo "Sorry , File already exists";
            }else{
                if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
                    echo "File Successfully Uploaded";
                }else{
                    echo "Try Again";
                }
            }
        }
    };

}




?>

<!DOCTYPE html>
<html>
    <head>
        <title>Uploading File</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        
    <div class="col-md-6 mx-auto mt-5">
        <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="profile">Profile Picture</label>
                <input type="file" name="profile" id="profile" class="form-control" />
            </div>

            <input type="submit" name="submit" class="btn btn-primary float-end mt-4" value="upload" />
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>

<!-- bit = 
byte = 
kili byte =
mega byte =
giga byte =
tera byte = 
peta byte = 
exa byte = 
zetta byte = 
yotta byte =  -->

<!-- 2^1 = 2
2^2 = 4
2^3 = 8
2^4 = 16
2^5 = 32
2^6 = 64
2^7 = 128
2^8 = 256
2^9 = 516
2^10 = 1024 -->

<!-- 30UP -->

<!-- 2RT -->
