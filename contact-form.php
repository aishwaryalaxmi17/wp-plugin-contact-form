<?php
/*
Plugin Name: Simple Contact Form
Description: A basic contact form plugin for learning
Version: 1.0
Author: Aishwarya Laxmi
*/

function scf_form() {
    return '
    <form>
        <input type="text" placeholder="Name" required />
        <input type="email" placeholder="Email" required />
        <textarea placeholder="Message"></textarea>
        <button type="submit">Send</button>
    </form>';
}

add_shortcode('simple_contact_form', 'scf_form');
