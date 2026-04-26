<?php
/**
 * Plugin Name: Walabu Duffel Booking
 * Description: Flight search form for Walabu Travel using Duffel API.
 * Version: 1.0.0
 * Author: Walabu Travel
 */

if (!defined('ABSPATH')) exit;

function walabu_duffel_booking_form() {
    ob_start();
    ?>
    <div style="max-width:700px;padding:25px;border:1px solid #ddd;border-radius:12px;background:#fff;">
        <h2>Search Flights</h2>

        <form method="post">
            <p>
                <label>From Airport Code</label><br>
                <input type="text" name="origin" placeholder="MSP" required style="width:100%;padding:10px;">
            </p>

            <p>
                <label>To Airport Code</label><br>
                <input type="text" name="destination" placeholder="ADD" required style="width:100%;padding:10px;">
            </p>

            <p>
                <label>Departure Date</label><br>
                <input type="date" name="departure_date" required style="width:100%;padding:10px;">
            </p>

            <p>
                <label>Passengers</label><br>
                <input type="number" name="passengers" value="1" min="1" max="9" style="width:100%;padding:10px;">
            </p>

            <button type="submit" name="walabu_search_flights" style="padding:12px 20px;background:#0073aa;color:white;border:none;border-radius:8px;">
                Search Flights
            </button>
        </form>
    </div>
    <?php
    return ob_get_clean();
}

add_shortcode('walabu_flight_search', 'walabu_duffel_booking_form');
