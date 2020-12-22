<?php
// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function double($number) {
    return $number * 2;
}
echo "1. ";
echo double(10) . "\n";

// 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
// 　参考）引数は下記のように指定すると、複数の仮引数を使うことができます
function f($a, $b){
 //処理したい内容
    return $a + $b;
 }
echo "2. ";
echo f(2, 3) . "\n"; 
 
// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
function result() {
    $arr = array(1, 3, 5 ,7, 9);
    $result = array_product($arr);
    return $result;
}
echo "3. ";
echo result() . "\n";

// 4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
    //どうしたらいいかわからない・・・・
        if($max_number < $a) {
            $max_number = $a;
        } else {
            $max_number;
        }
    }
    return $max_number;
}
echo "4. ";
echo max_array(array(4, 3, 15, 5, 13)) . "\n";

// 5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください
// strip_tags
$text = '<h1>title,</h1><p>para,</p><a href="#">link</a>';
echo "5-1." . "\n";
echo strip_tags($text, '<h1><p>');
echo "\n";

// array_push
$fruits = array("apple", "banana");
array_push($fruits, "grape", "lemon");
echo "5-2." . "\n";
print_r($fruits);

// array_merge
$array1 = array("color" => "red", 2, 5);
$array2 = array(8, "color" => "blue", 1, "size" => "midium");
$sum = array_merge($array2, $array1);
echo "5-3." . "\n";
print_r($sum);

// time, mktime
// date
date_default_timezone_set('Asia/Tokyo');
echo "5-4." . "\n";
echo "Now:       " . date('Y/m/d H:i:s') . "\n";

$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Today:     ' . date('Y-m-d') . "\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
$plan1 = mktime(18, 0, 0, 12, 31, 2020);
echo date('Y/m/d H:i:s', $plan1) . "\n";


?>