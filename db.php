<?php 
error_reporting(E_ERROR | E_PARSE);

$site = file_get_contents('https://en.clubcooee.com/api3/trade_get_items?sort=2&token=5827502-1665170673-a935dc359d90aa044e9af5c9a7120f7f');

$dados = json_decode($site, true);

header('Access-Control-Allow-Origin: *');

foreach($dados['msg']['items'] as $dados){ 
  echo "<span class='price'>$it</span> <br>";
  echo "<span class='price'>$price</span> <br>";
  echo "<center><a href='https://en.clubcooee.com/api3/trade_buy?id=${res}&token=5827502-1665170673-a935dc359d90aa044e9af5c9a7120f7f' target='contato' ><img src='$img' alt='' class='$imgv' id='$yes'></img></center></a> <br>";


//ID do Item
$res = $dados['id'];
 if ($res === $dados['id']){
 $res = "$res";
 }else{
   $res = "";
 } 

 // Preço do Item
 $price = $dados['price'];
 if ($price === $dados['price']){
   $price = "$price CC";
}else{
   $price = "";
 }

// Nome do Item
$it = $dados['itemt'];
if ($it === $dados['itemt']){
   $it = $it['name'];
}

// Imagem Do item
$img = $dados['itemt'];
if ($img === $dados['itemt']){
   $img = $img['image'];
}



//Verifica se item é VIP
$v2 = $dados['itemt']['access_premium'];
if ($v2 === 1);

//Mostra Fundo VIP ou Cinza
$imgv = $v2;
if ($imgv === 1){
   $imgv = "imgv";
}else if ($imgv === 0){
   $imgv = "img";
}


//Segundo ID do Item
$id2 = $dados['itemt'];
if ($id2 === $dados['itemt']){
   $id2 = $id2['id'];

}


//Verifica se item é VIP
$yes = $dados['itemt']['id'];
if ($yes === $ids[0]){
   $yes = "true";
}else if ($yes === $ids[1]){
   $yes = "true";
}else if ($yes === $ids[2]){
   $yes = "true";
}
else if ($yes === $ids[3]){
   $yes = "true";
}
else if ($yes === $ids[4]){
   $yes = "true";
}
else if ($yes === $ids[5]){
   $yes = "true";
}
else if ($yes === $ids[6]){
   $yes = "true";
}
else if ($yes === $ids[7]){
   $yes = "true";
}
else if ($yes === $ids[8]){
   $yes = "true";
}
else if ($yes === $ids[9]){
   $yes = "true";
}
else if ($yes === $ids[10]){
   $yes = "true";
}
else if ($yes === $ids[11]){
   $yes = "true";
}
else if ($yes === $ids[12]){
   $yes = "true";
}
else if ($yes === $ids[13]){
   $yes = "true";
}
else if ($yes === $ids[14]){
   $yes = "true";
}
else if ($yes === $ids[15]){
   $yes = "true";
}
else if ($yes === $ids[16]){
   $yes = "true";
}
else if ($yes === $ids[17]){
   $yes = "true";
}
else if ($yes === $ids[18]){
   $yes = "true";
}
else if ($yes === $ids[19]){
   $yes = "true";
}
else if ($yes === $ids[20]){
   $yes = "true";
}
else if ($yes === $ids[21]){
   $yes = "true";
}
else if ($yes === $ids[22]){
   $yes = "true";
}
else if ($yes === $ids[23]){
   $yes = "true";
}
else if ($yes === $ids[24]){
   $yes = "true";
}
else if ($yes === $ids[25]){
   $yes = "true";
}
else if ($yes === $ids[26]){
   $yes = "true";
}
else if ($yes === $ids[27]){
   $yes = "true";
}
else if ($yes === $ids[28]){
   $yes = "true";
}
else if ($yes === $ids[29]){
   $yes = "true";
}
else if ($yes === $ids[30]){
   $yes = "true";
}
else {
   $yes = "false";
}

//IDS para auto Click
$ids = [        
   1009929, //Pose 1 Chifre de festa
   1009878, //Pose 2 Coldre m
   1009684, //Pose 3 Espadas preta
   1009683, //Pose 4 Espadas marrom
   1010471, //Pose 5 Tridente
   1011624, //Pose 6 Tapa-olho m 
   1001644, //Pose 7 Coroa 2010 m
   1009700, //Pose 8 Capa de Pele m
   1009158, //Pose 9 viseira m
   1003369, //Pose 10 Cetro 2011 m
   1003185, //Pose 11 Coroa 2011 m
   1002953, //Pose 12 Gancho m
   1008517, //Pose 13 Lizzy
   1003208, //Pose 14 Pulseira esquerda m
   1003357, //Pose 15 Pulseira direita m
   1009846, //Pose 16 Emblema de xerife m
   1004050, //Pose 17 Relogio 2012 m
   1004836, //Pose 18 Coroa 2012 m
   1004515, //Pose 19 Anel VIP M
   1007485, //Pose 20 Relogio 2015 m
   1005822, //Pose 21 Colar King
   1008723, //Pose 22 Coisa M/F
   1008517, //Pose 23 Cobra
   14008, //Pose 24 Livro Antigo
   14007, //Pose 25 Livro Antigo
   14006, //Pose 26 Livro Antigo
   14005, //Pose 27 Livro Antigo
   14004, //Pose 28 Livro Antigo
   14002, //Pose 29 Livro Antigo
   14001, //Pose 30 Livro Antigo
];

}


?>