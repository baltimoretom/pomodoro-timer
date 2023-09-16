<?php
/*
Plugin Name: Pomodoro Timer
Description: A simple Pomodoro timer for WordPress.
Version: 1.2
Author: Baltimoretom
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

function pomodoro_enqueue_scripts() {
    wp_enqueue_style('pomodoro-css', plugin_dir_url(__FILE__) . 'pomodoro.css');
    wp_enqueue_script('pomodoro-js', plugin_dir_url(__FILE__) . 'pomodoro.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'pomodoro_enqueue_scripts');

function pomodoro_shortcode() {
    return '<div id="pomodoro-app">
                <h2>Pomodoro Timer</h2>
                <div id="timer">25:00</div>
                <button id="start-btn">Start</button>
                <button id="stop-btn">Stop</button>
                <button id="reset-btn">Reset</button>
            </div>';
}
add_shortcode('pomodoro_timer', 'pomodoro_shortcode');
