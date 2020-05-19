<?php

$name = "takashi";

if ($name === "takashi") {
  echo "私はあなたの名前です";
} else {
  echo "私の名前ではありません";
}

$total = 0;

for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}

echo $total;

$fruits = array("りんご", "みかん", "バナナ", "もも", "キウイ");

foreach($fruits as $fruit) {
  echo $fruit;
}

$start = 1;
$end = 101;

for($i = $start; $i < $end; $i++) {
  if($i % 5 == 0 ) {
    echo $i;
  }
}