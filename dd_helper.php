<?php

/* INTRODUCTION */

/**
 * dd function in codeigniter
 * using halper in codeigniter
 * For checking data in variable or more
 */

/* HOW TO USE ? */

/**
 * make folder helper in application. 
 * paste this file (dd_helper.php) in folder helper
 * Example application/helper/dd_helper.php
 * Open file autoload | application/config/autoload.php
 * in $autoload['helper'] add 'dd_helper'
 * How to use ?
 * Example , if you have variable $data
 * Write dd($data);
 * Done
 */

/* AUTHOR */

/* 
 * Name         : Adam Arnap
 * github       : https://github.com/adamarnap
 */

/* Thanks for support */

function dd($var)
{
    $days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    $currentDay = date('w'); // Numeric representation of the day (0 for Sunday, 6 for Saturday)
    $currentDate = date('d'); // Day of the month with leading zero
    $currentMonth = date('n') - 1; // Numeric representation of the month (0 for January, 11 for December)
    $currentYear = date('Y'); // 4-digit year

    echo "<div style='text-align: center; font-family: Calibri, Arial, sans-serif;'>"; // Center horizontally and set font family
    echo "<div style='background: #292b2c; padding: 10px; border: 1px solid #333; border-radius: 5px; color: #ccc; font-size: 18px;'>
            <span style='color: #f39c12;'>
                Author: Adam Arnap | GitHub: <a href='https://github.com/adamarnap' style='color: #7cb5d6;'>https://github.com/adamarnap</a> |  PHP version: 5 or Higher | Current Time: " . $days[$currentDay] . ", " . $currentDate . " " . $months[$currentMonth] .   " " . $currentYear . "
            </span>
          </div>";
    echo "</div>";

    echo "<pre style='background: #292b2c; padding: 10px; border: 1px solid #333; border-radius: 5px; color: #ccc; font-size: 14px;'>";

    function custom_print_r($data, $indent = '')
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                echo "$indent<span style='color: #ff6600;'>[$key] => Array</span><br>";
                custom_print_r($value, $indent . '&nbsp;&nbsp;&nbsp;&nbsp;');
            } else {
                $type = gettype($value);
                $color = '#90EE90'; // Default text color

                if ($type === 'string') {
                    $color = '#7cb5d6'; // Light blue for strings
                } elseif ($type === 'integer' || $type === 'double') {
                    $color = '#e74c3c'; // Red for numbers
                } elseif ($type === 'boolean') {
                    $color = '#f39c12'; // Orange for booleans
                }

                echo "$indent<span style='color: $color;'>[$key] => $value</span><br>";
            }
        }
    }

    custom_print_r($var);

    echo "</pre>";
    die;
}
