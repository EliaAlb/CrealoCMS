<?php
// Bestimme die Umgebung (development/production)
$environment = getenv('APP_ENV') ?: 'development';

// Basis-URLs für verschiedene Umgebungen
$urls = [
    'development' => 'http://localhost:5500/',
    'production' => 'https://crealo.ch' // Hier später die echte Domain eintragen
];

// Basis-URL basierend auf Umgebung
$baseUrl = $urls[$environment];

return [
    'domain' => 'crealo.eu.auth0.com',
    'client_id' => '3AYDODxsgNhG9l2PAvmltlFf7gjf6gth',
    'client_secret' => 'Rz1EAwU9ze5xSOctWEYNcsGlX_0m-QWsxdKpFz06jIeO9y1GCfLRuY-OaEL9v_td',
    'redirect_uri' => $baseUrl . '/callback',
    'scope' => 'openid profile email',
    'base_url' => $baseUrl,
    'environment' => $environment
];