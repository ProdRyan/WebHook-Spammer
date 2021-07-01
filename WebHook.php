<?php

function webhook()

{
    

    $url = "TU-WEBHOOK";

    $hookObject = json_encode([
    
        "content" => "@everyone Raid by Panic Squad / xFullCode => https://discord.gg/HVcNHJvZVD",
    
        "username" => "#PanicSquad",
    
        "avatar_url" => "https://cdn.discordapp.com/attachments/753459740335538272/859783996706521118/unknown.png",
    
        "tts" => false,
        
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
    
    $headers = [ 'Content-Type: application/json; charset=utf-8' ];
    $POST = [ 'username' => 'Testing BOT', 'content' => 'Testing message' ];
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $hookObject);
    $response = curl_exec($ch);
}

?>

<?php

for ($a = 1; $a <= 100; $a++) {
    echo webhook();
}
