<?php 
//file
// event history check 

// readfile = function()

// echo readfile("l43file.txt");
// echo filesize("l43file.txt");
//r = read 
// $fileopen = fopen("l43file.txt","r");

// if($fileopen){
//     // echo "Ok";
//     //                             filesize
//     // $fileread = fread($fileopen,100"));
//     $fileread = fread($fileopen,filesize("l43file.txt"));
//     fclose($fileopen);

//     echo $fileread;
// }else{
//     echo "File Not Found !!!";
// };

//for linux(Give Permission)  write access code
//sudo chmod 777 -R /var/www/html
//sudo chmod 775 /var/www/html
// $fileopen = fopen("l44file.txt","w");

// if($fileopen){
//     fwrite($fileopen,"Hello guys!!! I created new file");
//     fclose($fileopen);
//     echo "file wrote";
// }else{
//     echo "File Not Found !!!";
// };


// $fileopen = fopen("l44file.txt","w");

// if($fileopen){
//     fwrite($fileopen,"Hello guys!!! I created new file");
//     $fileopen = fopen("l44file.txt","r");
//     $fileread = fread($fileopen,filesize("l44file.txt"));
//     fclose($fileopen);
//     echo "file wrote";
// }else{
//     echo "File Not Found !!!";
// };

// w = overwrite make
// w != x
//Note :: "x" write only.create a new file. return false if file already exists.
// $fileopen = fopen("l45file.txt","x");

// if($fileopen){
//     fwrite($fileopen,"Hello guys!!! I created new file by using x.");
//     $fileopen = fopen("l45file.txt","r");
//     $fileread = fread($fileopen,filesize("l45file.txt"));
//     fclose($fileopen);
//     echo "file wrote";
// }else{
//     echo "File Not Found !!!";
// };

// c = write only
// c+ = read/write 
// $fileopen = fopen("l46file.txt","c");

// if($fileopen){
//     fwrite($fileopen,"I created new file by using c.");
//     $fileopen = fopen("l46file.txt","r");
//     // $fileopen = fopen("l46file.txt","c+");
//     $fileread = fread($fileopen,filesize("l46file.txt"));
//     fclose($fileopen);
//     echo "file wrote";
// }else{
//     echo "File Not Found !!!";
// };


// $fileopen = fopen("l47file.txt","w");

// if($fileopen){

//     $message = "Welcome to our class \n";
//     fwrite($fileopen,$message);
//     $message = "Thank you for using php file system";
//     fwrite($fileopen,$message);


//     $fileopen = fopen("l47file.txt","r");

//     $fileread = fread($fileopen,filesize("l47file.txt"));
//     fclose($fileopen);
//     echo $fileread;
// }else{
//     echo "File Not Found !!!";
// };

// =>Append

// a = append

// $fileopen = fopen("l48file.txt","a");

// if($fileopen){

//     $message = "Welcome to our class \n";
//     fwrite($fileopen,$message);
//     $message = "Thank you for using php file systme \n";
//     fwrite($fileopen,$message);


//     $fileopen = fopen("l48file.txt","r");
//     $fileread = fread($fileopen,filesize("l48file.txt"));
//     fclose($fileopen);
//     echo $fileread;
// }else{
//     echo "File Not Found !!!";
// };


//------------------------------------------------------------- 

// =>Other file functions 

// file_get_contents() = Read;
// file_put_contents() = Write;
// file_exists() = Check file exist or not;
// copy() = copies a file;
// rename() = rename a file;
// unlink() = deletes a file;


// echo file_get_contents("l43file.txt");
// .= append
// $existingfile = "l43file.txt";
// $newfile = "l49file.txt";
// $message = file_get_contents($existingfile);
// $message .= "\n Thank you for using php file systme. \n";
// file_put_contents($newfile,$message) or die("Unable to open file");

// $existingfile = "l60file.txt";
// $newfile = "l50file.txt";

// if(file_exists($existingfile)){
//     $message = file_get_contents($existingfile);
//     $message .= "\n Thank you for using php file systme. \n";
//     file_put_contents($newfile,$message) or die("Unable to open file");
// }else{
//     echo "File not found";
// }

// $existingfile = "l43file.txt";
// $newfile = "l50file.txt";

// if(is_file($existingfile)){
//     $message = file_get_contents($existingfile);
//     $message .= "\n Thank you for using php file systme. \n";
//     file_put_contents($newfile,$message) or die("Unable to open file");
// }else{
//     echo "File not found";
// };

//=> copy()
// $file = "l44file.txt";
// copy($file,"l51file.txt");
// echo file_get_contents("l51file.txt");

//=>rename()
// $file = "l51file.txt";
// rename($file,"l52file.txt");
// echo file_get_contents("l52file.txt");

//=>unlink()
// $file = "l52file.txt";

// if(file_exists($file)){
//     unlink($file);
//     echo "File Delete Successfully";
// }else{
//     echo "File Not Found";
// }

//Show all .txt file 
// echo "<pre>".print_r(glob("*.txt"),true)."<pre>";
// echo "<pre>".print_r(glob("*.txt")[3],true)."<pre>";


//Show all .txt file 
// echo "<pre>".print_r(glob("*.*"),true)."<pre>";
// echo "<pre>".print_r(glob("*l46file.txt"),true)."<pre>";
echo "<pre>".print_r(glob("l46file.txt"),true)."<pre>";

?>

<!-- 26PHP -->