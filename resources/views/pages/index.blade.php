<?php
use function Laravel\Folio\name;

name('welcome');
?>

<x-guest-layout>
    <x-partials.welcome-section />

    <x-partials.menu-section />

    <x-partials.contact-section />
</x-guest-layout>
