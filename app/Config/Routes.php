<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/drop-in', 'Appointment::index');
$routes->get('/book-appointment', 'Appointment::bookAppointment');
$routes->post('/book-appointment-slot', 'Appointment::bookAppointmentPost');
