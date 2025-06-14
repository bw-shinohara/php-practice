<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します' . "\n";

for ($i = 1 ; $i <= 100 ; $i++)
{
  if ($i % 4 === 0 && $i % 5 === 0)
  {
    echo 'tic-tac' . "\n";
  }elseif
  ($i % 4 === 0)
  {
    echo 'tic' . "\n";
  }elseif
  ($i % 5 === 0)
  {
    echo  'tac' . "\n";
  }else
  {
    echo $i. "\n";
  } 
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

var_dump($personalInfos);

// 問題1
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

// 問題2
foreach ($personalInfos as $x => $y)
{
  echo $x + 1 . '番目の' .$personalInfos[$x]['name']. 'のメールアドレスは' .$personalInfos[$x]['mail']. 'で、電話番号は' .$personalInfos[$x]['tel']. 'です。';
}

// Q3 オブジェクト-1


// Q4 オブジェクト-2


// Q5 定義済みクラス
?>