<?php
if (isset($_REQUEST['stack']) && isset($_REQUEST['pos'])) {
    $stack = $_REQUEST['stack'];
    $pos = $_REQUEST['pos'];
    pictureOutput($stack, $pos);
    //echo($pos);
} else {
    include("index.html");
    //echo("test123");
}

function pictureOutput($stack, $pos)
{
    switch ($stack) {
        case '15':
            switch ($pos) {
                case 'button':
                    echo('15 bb | hero — button'); ?>
                    <a href="http://localhost:63342/somesortafun/index.php?stack=15&pos=button&send=%D0%9E%D1%82%D0%BF%D1%80%D0%B0%D0%B2%D0%B8%D1%82%D1%8C"><img
                                src="BTN_15bbeff.png"/></a>
                    <?php
                    break;
                case 'sb(bu fold)':
                    echo('15 bb | hero — sb | bu fold'); ?>
                    <a href="http://localhost:63342/somesortafun/index.php?stack=15&pos=sb%28bu+fold%29&send=%D0%9E%D1%82%D0%BF%D1%80%D0%B0%D0%B2%D0%B8%D1%82%D1%8C"><img
                                src="SB_15bbeff.png"/></a>
                    <?php
                    break;
                case 'sb(bu push)':
                    echo('15 bb | hero — sb | bu push'); ?>
                    <a href="http://localhost:63342/somesortafun/index.php?stack=15&pos=sb%28bu+push%29&send=%D0%9E%D1%82%D0%BF%D1%80%D0%B0%D0%B2%D0%B8%D1%82%D1%8C"><img
                                src="BTN_15bbeff_SB_call.png"/></a>
                    <?php
                    break;
                case 'bb(bu push, sb call)':
                    echo('15 bb | hero — bb | bu push | sb push'); ?>
                    <a href="http://localhost:63342/somesortafun/index.php?stack=15&pos=bb%28bu+push%2C+sb+call%29&send=%D0%9E%D1%82%D0%BF%D1%80%D0%B0%D0%B2%D0%B8%D1%82%D1%8C"><img
                                src="BTN_15bbeff_SB_call_BB_overcall.png"/></a>
                    <?php
                    break;
                case 'bb(bu push, sb fold)':
                    echo('15 bb | hero — bb | bu push | sb fold'); ?>
                    <a href="http://localhost:63342/somesortafun/index.php?stack=15&pos=bb%28bu+push%2C+sb+fold%29&send=%D0%9E%D1%82%D0%BF%D1%80%D0%B0%D0%B2%D0%B8%D1%82%D1%8C"><img
                                src="BTN_15bbeff_BB_call.png"/></a>
                    <?php
                    break;
                case  'bb(bu fold, sb push)':
                    echo('15 bb | hero — bb | bu fold | sb push'); ?>
                    <a href="http://localhost:63342/somesortafun/index.php?stack=15&pos=bb%28bu+fold%2C+sb+push%29&send=%D0%9E%D1%82%D0%BF%D1%80%D0%B0%D0%B2%D0%B8%D1%82%D1%8C"><img
                                src="SB_15bbeff_BB_call.png"/></a>
                    <?php
                    break;
                default :
                    echo('no way');
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
            echo("а я не придумал че екоу");
    }
}

?>