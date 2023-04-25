<?php
$API_KEY = "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";
$MODEL_ID = "text-davinci-003";
$URL = "https://api.openai.com/v1/completions";

$data = [
    'model' => $MODEL_ID,
    'prompt' => $_GET['prompt'],
    'temperature' => 0.5,
    'max_tokens' => 100,
    'frequency_penalty' => 0,
    'presence_penalty' => 0,
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: Bearer ' . $API_KEY,
));

$response = curl_exec($ch);

if(curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    $response_data = json_decode($response, true);
    var_dump($response);
    $text = $response_data['choices'][0]['text'];
    echo $text;
}

curl_close($ch);
?>
