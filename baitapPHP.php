<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <br>Bai 6<br>
    <?php
    function startsWith($string, $substring) {
        return strncmp($string, $substring, strlen($substring)) === 0;
    }
    if (startsWith("Hello, World!", "Helloo")) {
        echo "Chuỗi bắt đầu bằng chuỗi con.";
    } else {
        echo "Chuỗi không bắt đầu bằng chuỗi con.";
    }
    ?>

    <br>Bai 7<br>
    <?php
    function uppercaseString($string) {
        $strUpper = strtoupper($string);
        echo $strUpper;
    }
    uppercaseString("heloWorld");
    ?>

    <br>Bai 8<br>
    <?php
    function lowercaseString($string) {
        $strLower = strtolower($string);
        echo $strLower;
    }
    lowercaseString("HELLO WORKD");
    ?>

    <br>Bai 9<br>
    <?php
    function firstStringUppercase($string) {
        $firstStrUpper = ucwords($string);
        echo $firstStrUpper;
    }
    firstStringUppercase("helLo World");
    ?>

    <br>Bai 10<br>
    <?php
    function trimmedString($string) {
        $trimmedString = trim($string);
        echo $trimmedString;
    }
    trimmedString("    helLo,    World     ");
    ?>

    <br>Bai 11<br>
    <?php
    function leftTrimmedString($string) {
        $leftTrimmedString = ltrim($string, $string[0]);
        echo $leftTrimmedString;
    }
    leftTrimmedString("helLo, World");
    ?>

    <br>Bai 12<br>
    <?php
    function rightTrimmedString($string) {
        $rightTrimmedString = rtrim($string, $string[strlen($string) - 1]);
        echo $rightTrimmedString;
    }
    rightTrimmedString("helLo, World");
    ?>

    <br>Bai 13<br>
    <?php
    function explodeString($string) {
        $delimiter = ",";
        $exArray = explode($delimiter, $string);
        print_r($exArray);
    }
    explodeString("red, blue, yellow");
    ?>

    <br>Bai 14<br>
    <?php
    function implodeString($string) {
        $array = array($string);
        $delimiter = ",";
        $imArray = implode($delimiter, $array);
        print_r($imArray);
    }
    implodeString("red, blue, yellow");
    ?>

    <br>Bai 15<br>
    <?php
    function padString($string, $padString) {
        $paddedString = str_pad($string, strlen($string) + strlen($padString), $padString, STR_PAD_RIGHT);
        echo $paddedString;
    }
    padString("red", "green");
    ?>

    <br>Bai 16<br>
    <?php
    function endsWithSubstring($string, $substring) {
        $endString = substr($string, -strlen($substring));

        return $endString === $substring;
    }

    $string = "Hello, World!";
    $substring = "World!";
    if (endsWithSubstring($string, $substring)) {
        echo "Chuỗi kết thúc bằng chuỗi con.";
    } else {
        echo "Chuỗi không kết thúc bằng chuỗi con.";
    }
    ?>

    <br>Bai 17<br>
    <?php
    function containsSubstring($string, $substring) {
        $result = strstr($string, $substring);
        return $result !== false;
    }
    $string = "Hello, World!";
    $substring = "World";
    if (containsSubstring($string, $substring)) {
        echo "Chuỗi chứa chuỗi con.";
    } else {
        echo "Chuỗi không chứa chuỗi con.";
    }    
    ?>

    <br>Bai 18<br>
    <?php
    function replaceNonAlphanumeric($string, $replacement) {
        $pattern = '/[^a-zA-Z0-9]/'; // Biểu thức chính quy để tìm các ký tự không phải là chữ cái hoặc số
        return preg_replace($pattern, $replacement, $string);
    }
    $string = "Hello, World!";
    $replacement = ".";
    $newString = replaceNonAlphanumeric($string, $replacement);
    echo $newString;
    ?>

    <br>Bai 19<br>
    <?php
    function isInteger($string) {
        $result = is_int($string);
        return $result !== false;
    }
    if (isInteger(9)) {
        echo "Chuỗi là số nguyên.";
    } else {
        echo "Chuỗi không là số nguyên.";
    }   
    ?>

    <br>Bai 20<br>
    <?php
    function isValidEmail($string) {
        return filter_var($string, FILTER_VALIDATE_EMAIL) !== false;
    }
    $email = "example@example.com";
    if (isValidEmail($email)) {
        echo "Email hợp lệ.";
    } else {
        echo "Email không hợp lệ.";
    }
    ?>
</body>
</html>