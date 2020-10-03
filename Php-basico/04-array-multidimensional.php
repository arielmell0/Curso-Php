<?php

//array constituido de arrays

//também chamado de matriz

/* Exemplo: tabuleiro de xadrez utilizando array multidimensional */

$tabuleiro[8]['a'] = 'torre preta';
$tabuleiro[8]['b'] = 'cavalo preta';
$tabuleiro[8]['c'] = 'bispo preta';
$tabuleiro[8]['d'] = 'rainha preta';
$tabuleiro[8]['e'] = 'rei preta';
$tabuleiro[8]['f'] = 'bispo preta';
$tabuleiro[8]['g'] = 'cavalo preta';
$tabuleiro[8]['h'] = 'torre preta';

$tabuleiro[7]['a'] = 'peão preta';
$tabuleiro[7]['b'] = 'peão preta';
$tabuleiro[7]['c'] = 'peão preta';
$tabuleiro[7]['d'] = 'peão preta';
$tabuleiro[7]['e'] = 'peão preta';
$tabuleiro[7]['f'] = 'peão preta';
$tabuleiro[7]['g'] = 'peão preta';
$tabuleiro[7]['h'] = 'peão preta';

$tabuleiro[2]['a'] = 'peão branca';
$tabuleiro[2]['b'] = 'peão branca';
$tabuleiro[2]['c'] = 'peão branca';
$tabuleiro[2]['d'] = 'peão branca';
$tabuleiro[2]['e'] = 'peão branca';
$tabuleiro[2]['f'] = 'peão branca';
$tabuleiro[2]['g'] = 'peão branca';
$tabuleiro[2]['h'] = 'peão branca';

$tabuleiro[1]['a'] = 'torre branca';
$tabuleiro[1]['b'] = 'cavalo branca';
$tabuleiro[1]['c'] = 'bispo branca';
$tabuleiro[1]['d'] = 'rainha branca';
$tabuleiro[1]['e'] = 'rei branca';
$tabuleiro[1]['f'] = 'bispo branca';
$tabuleiro[1]['g'] = 'cavalo branca';
$tabuleiro[1]['h'] = 'torre branca';

print $tabuleiro[8]['e'];

?>