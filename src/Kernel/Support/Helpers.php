<?php

namespace CloudyCity\UCMarketingSDK\Kernel\Support;

/**
 * Cast a csv string to an array.
 *
 * @param $str
 * @return array
 */
function csvStringToArray($str)
{
    $rows = str_getcsv($str, PHP_EOL);
    $rows = array_map('str_getcsv', $rows);
    array_walk($rows, function (&$row) use ($rows) {
        $row = array_combine($rows[0], $row);
    });
    array_shift($rows);
    return $rows;
}
