<?php

function formatPrice(float $price): string
{
    return number_format($price / 100, 2, ',', '') . ' €';
}
