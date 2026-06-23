<?php

// 以下の配列をの要素のうち文字数が偶数のもののみ表示するループを書いてください
$fruits = array("Apple", "Banana", "Cherry");

$length = count($fruits);

for ($i = 0; $i < $length; $i++) {
    $charCount = strlen($fruits[$i]);
    if ($charCount % 2 == 0) {
        echo $fruits[$i] . "\n";
    }
}
