<?php

function billMaking($eachWattPrice, $fanWatt, $acWatt,  $fridgeWatt)
{
    $totalWatt = $fanWatt * 2 + $acWatt * 5 + $fridgeWatt * 2;
    echo "total watt is ${totalWatt}<br>";
    $totalCurrentBill = $totalWatt * $eachWattPrice;
    echo "total bill of current is ${totalCurrentBill}";
}
billMaking(14, 20, 100, 150);
