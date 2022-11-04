<?php

require 'interface/Animal.php';

$gato = new Animal('Gato', 'Miar', 'Felino', 'Preto, Listrado', '+/- 250g');

$gato->mostraInfo();

$leao = new Animal('Leão', 'Rugir', 'Felino', 'Laranja', '+/- 250kg');

$leao->mostraInfo();

$calopsita = new Animal('Calopsita', 'Piar', 'Passáro', 'Lutino, cinza', '+/- 70g');

$calopsita->mostraInfo();