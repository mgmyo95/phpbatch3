<?php 

require_once('./Article.php');

$article = new Article();

//? => SELECT 
// var_dump($article -> getarticles());
// var_dump($article -> getarticlebyid(1));
// var_dump($article -> getarticlebyid(4));
// var_dump($article -> getarticlebyid(4));
// echo "<pre>".print_r($article -> getarticles(),true)."</pre>";


//? => Insert 
// $data = ['title'=>'This is new article 11','content'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.','user_id'=>3];
// $article -> insertarticle($data);
// var_dump($article -> getarticles());

//? => UPDATE 
// $data = ["id"=>16,"title"=>"this is new article 12","content"=>"lorem","user_id"=>1];
// $article -> updatearticle($data);
// var_dump($article -> getarticles());

//? => delete

$article -> deletearticle(15);
var_dump($article -> getarticles());

?>