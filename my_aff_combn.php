<?php

function show_nbs(array $nbs)
{
    printf("%s\n", array_reduce($nbs, function ($c, $i) {
        return $c . strval($i);
    }, ''));
}

function my_aff_combn(int $n)
{
    $nbs = range(0, $n - 1);
    
    while (42)
    {
        show_nbs($nbs);
        $nbs[$n - 1]++;
        
        if ($nbs[$n - 1] > 9)
        {
            $i = 0;
            while ($i <= $n - 1)
            {
                if ($nbs[$n - 1 - $i] < 9 - $i)
                {
                    $nbs[$n - 1 - $i]++;
                    break;
                }
                $i++;
            }
            if ($i > $n - 1) {
                return $nbs;
            }
            $i--;
            while ($i >= 0)
            {
                $nbs[$n - 1 - $i] = $nbs[$n - 1 - $i - 1] + 1;
                $i--;
            }
        }
    }
}

if ($argc > 1)
{
    $n = intval($argv[1]);
    if ($n >= 1 && $n <= 10) { 
        my_aff_combn($n);
    }
}
