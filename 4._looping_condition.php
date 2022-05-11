<?php

function fooBar($arg)
{
    for ($i = 1; $i <= $arg; $i = $i + 1) {
        if ($i % 3 == 0 && $i % 5 != 0) {
            echo "Foo<br>";
        } elseif ($i % 5 == 0 && $i % 3 != 0) {
            echo "Bar<br>";
        } elseif ($i % 3 == 0 && $i % 5 == 0) {
            echo "FooBar<br>";
        } else {
            echo $i."<br>";
        }
    }
}
echo "<br>".fooBar(50);