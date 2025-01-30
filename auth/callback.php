<?php
require_once __DIR__ . '/Auth0Service.php';
$auth0 = new Auth0Service();

try {
    // Verarbeite den Auth0-Callback
    $auth0->handleCallback();
    
    // Weiterleitung zum Dashboard nach erfolgreicher Anmeldung
    header('Location: /dashboard');
    exit();
} catch (\Exception $e) {
    // Bei Fehler zurück zur Login-Seite
    header('Location: /auth/login?error=' . urlencode($e->getMessage()));
    exit();
} 