<?php
function price_format($price)
{
    return number_format(ceil($price), 0, '', ' ') . ' ₽';
}
function remaining_time(string $closeTime, string $nowTime): array
{
    $dt_diff = strtotime($closeTime) - strtotime($nowTime);
    if (!is_date_valid($closeTime) || $dt_diff < 0) {
        return [0, 0];
    }
    $hours = floor($dt_diff / 3600);
    $minutes = floor($dt_diff % 3600 / 60);
    $time = [$hours, $minutes];
    return $time;
}
