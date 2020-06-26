<?php
if (isset($_POST['stack']) && isset($_POST['pos'])) {
    $stack = $_POST['stack'];
    $pos = $_POST['pos'];
} else {
    include("index.html");
    echo("test123");
}

function pictureOutput($stack, $pos)
{
    switch ($stack) {
        case '15':
            switch ($pos) {
                case 'button':
                    echo('GTO push for 15 bb when hero button');
                    //вывод пикчи
                    echo(imagepng(imagecreatefrompng("Screenshot_2.png")));
                    break;
                case 'sb(bu fold)':
                    echo('sb(bu fold)');
                    //вывод пикчи
                    break;
            }
            break;
        case '12':
            switch ($pos) {
                case 'button':
                    echo('GTO push for 12 bb when hero button');
                    //вывод пикчи
                    break;
                case 'sb(bu fold)':
                    echo('sb(bu fold)');
                    //вывод пикчи
                    break;
            }
            break;
        default:
            echo ("а я не придумал че екоу");
    }
}


