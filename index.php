<?php

function caesarCipher($text, $shift)
{
    $result = "";

    for ($i = 0; $i < strlen($text); $i++) {

        $char = $text[$i];

        if (ctype_alpha($char)) {

            $ascii = ord($char);

            if (ctype_upper($char)) {
                $result .= chr((($ascii - 65 + $shift) % 26) + 65);
            } else {
                $result .= chr((($ascii - 97 + $shift) % 26) + 97);
            }

        } else {
            $result .= $char;
        }
    }

    return $result;
}

$pesan = "Sistem Informasi Modern";
$key = 2;

$hasil = caesarCipher($pesan, $key);

echo "Pesan Asli : " . $pesan . "<br>";
echo "Key : " . $key . "<br>";
echo "Ciphertext : " . $hasil . "<br>";

?>
