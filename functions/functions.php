<?php

function ageCheck($age) {
    if ($age >= 18) {
        return "Welcome to the party!";
    } else {
        return "You're not old enough to enter the party.";
    }
}
