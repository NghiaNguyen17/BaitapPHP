<?php
//1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function isEven($number) {
    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
$Number = 20;
if (isEven($Number)) {
    echo "$Number là số chẵn";
} else {
    echo "$Number là số lẻ";
}

echo "<br>";
echo "<br>";
//2. Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function sumNumber($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 9;
echo "Tổng các số là" ." ". sumNumber($n);

echo "<br>";
echo "<br>";
//3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
function multiplicationTable() {
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            echo "$i x $j = " . ($i * $j);
            echo "<br>";
        }
        echo "<br>";
    }
}
multiplicationTable();

echo "<br>";
//4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function stringCheck($string, $word) {
  $word = strtolower($word);
  $length = strlen($string);
  for ($i = 0; $i < $length; $i++) {
      $char = strtolower($string[$i]);
      if ($char === $word[0]) {
          $childString = true;
          for ($j = 1; $j < strlen($word); $j++) {
              $nextChar = strtolower($string[$i + $j]);
              if ($nextChar !== $word[$j]) {
                  $childString = false;
                  break;
              }
          }
          if ($childString) {
              return true;
          }
      }
  }
  return false;
}
// Chuỗi
$string = "nghia vip pro 987";
$word = "vip pro";
// Gọi hàm để kiểm tra chuỗi
if (stringCheck($string, $word)) {
  echo "Chuỗi chứa từ '$word'.";
} else {
  echo "Chuỗi không chứa từ '$word'.";
}
echo "<br>";
echo "<br>";
//5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function findMaxMinInArray($array) {
  $max = $array[0];
  $min = $array[0];
  $length = count($array);
  for ($i = 1; $i < $length; $i++) {
      if ($array[$i] > $max) {
          $max = $array[$i];
      }

      if ($array[$i] < $min) {
          $min = $array[$i];
      }
  }
  return [
      'max' => $max,
      'min' => $min
  ];
}
$array = [15, 25, 65, 96, 2, 7, 32, 6];
$result = findMaxMinInArray($array);
// Kết quả
echo "Giá trị lớn nhất: " . $result['max'] . "<br>";
echo "Giá trị nhỏ nhất: " . $result['min'] . "<br>";


echo "<br>";
//6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function sortAscending($array) {
  $length = count($array);
  for ($i = 0; $i < $length - 1; $i++) {
      for ($j = 0; $j < $length - $i - 1; $j++) {
          if ($array[$j] > $array[$j + 1]) {
              $temp = $array[$j];
              $array[$j] = $array[$j + 1];
              $array[$j + 1] = $temp;
          }
      }
  }

  return $array;
}
$array = [7, 23, 21, 4, 6, 2, 52, 96, 34, 57];
$sortedArray = sortAscending($array);
// kết quả
echo "Mảng sau khi sắp xếp: ";
foreach ($sortedArray as $value) {
  echo $value . " ";
}

echo "<br>";
echo "<br>";
// 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function factorial($num) {
    $result = 1;
    for ($i = 1; $i <= $num; $i++) {
        $result *= $i;
    }
    return $result;
}
$num = 10;
echo "Giai thừa của $num là: " . factorial($num);

echo "<br>";
echo "<br>";
//8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function isPrime($n) {
    if($n == 1) {
        return false;
    }
    for($i = 2; $i <= sqrt($n); $i++) {
        if($n % $i == 0) {
            return false;
        }
    }
    return true;
}
function getPrimes($start, $end) {
    $result = array();

    for($i = $start; $i <= $end; $i++) {
        if(isPrime($i)) {
            array_push($result, $i);
        }
    }

    return $result;
}
$start = 10;
$end = 30;
$primes = getPrimes($start, $end);
echo "Các số nguyên tố từ $start đến $end là: ";

foreach($primes as $prime) {
    echo $prime . " ";
}

echo "<br>";
echo "<br>";
// 9. Viết chương trình PHP để tính tổng của các số trong một mảng.
function arraySumValue($arr) {
    $sum = 0;

    foreach($arr as $value) {
        $sum += $value;
    }

    return $sum;
}

$array = array(9, 5, 12, 7, 18);
$sum = arraySumValue($array);

echo "Tổng của các số trong mảng là: " . $sum;

echo "<br>";
echo "<br>";
//10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function fibonacci($n) {
    if($n == 0) {
        return 0;
    } elseif($n == 1) {
        return 1;
    } else {
        return (fibonacci($n - 1) + fibonacci($n - 2));
    }
}

function printFibonacci($start, $end) {
    for($i = $start; $i <= $end; $i++) {
        echo fibonacci($i) . " ";
    }
}

$start = 0;
$end = 10;
echo "Các số Fibonacci từ $start đến $end là: ";
printFibonacci($start, $end);

echo "<br>";
echo "<br>";
//11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. 
function isArmstrong($num) {
    $sum = 0;
    $temp = (string)$num;
    $length = strlen($temp);

    for($i = 0; $i < $length; $i++) {
        $digit = $temp[$i];
        $sum += pow($digit, $length);
    }

    if($sum == $num) {
        return true;
    } else {
        return false;
    }
}
$num = 153;
if(isArmstrong($num)) {
    echo "$num là số Armstrong.";
} else {
    echo "$num không phải là số Armstrong.";
}

echo "<br>";
echo "<br>";
//12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertElement($array, $element, $position) {
  $length = count($array);
  if ($position < 0 || $position > $length) {
      echo "Vị trí chèn không hợp lệ.";
      return $array;
  }
  $newArray = [];
  for ($i = 0; $i < $length; $i++) {
      if ($i === $position) {
          $newArray[] = $element;
      }
      $newArray[] = $array[$i];
  }
  if ($position === $length) {
      $newArray[] = $element;
  }
  return $newArray;
}
// Mảng gốc
$array = [1, 2, 3, 4, 5];
$element = 10;
$position = 2;
$newArray = insertElement($array, $element, $position);
//kết quả
echo "Mảng sau khi chèn phần tử: ";
foreach ($newArray as $value) {
  echo $value . " ";
}

echo "<br>";
echo "<br>";
//13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeDuplicates($array) {
  $length = count($array);
  $uniqueArray = [];
  for ($i = 0; $i < $length; $i++) {
      $isDuplicate = false;
      for ($j = 0; $j < $i; $j++) {
          if ($array[$i] === $array[$j]) {
              $isDuplicate = true;
              break;
          }
      }
      if (!$isDuplicate) {
          $uniqueArray[] = $array[$i];
      }
  }
  return $uniqueArray;
}

// Mảng gốc chứa các phần tử trùng lặp
$array = [1, 5, 8, 31, 64, 9, 31, 8, 96, 75];
$uniqueArray = removeDuplicates($array);

// kết quả
echo "Mảng sau khi loại bỏ phần tử trùng lặp: ";
foreach ($uniqueArray as $value) {
  echo $value . " ";
}

echo "<br>";
echo "<br>";
//14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function findLocation($array, $element) {
  $length = count($array);
  for ($i = 0; $i < $length; $i++) {
      if ($array[$i] === $element) {
          return $i; 
      }
  }
  return -1; // Trả về -1 nếu không tìm thấy phần tử trong mảng
}
// Mảng
$array = [5, 6, 12, 8, 64, 99];
$element = 64;
$position = findLocation($array, $element);
// Kết quả
if ($position !== -1) {
  echo "Phần tử $element được tìm thấy tại vị trí $position trong mảng.";
} else {
  echo "Không tìm thấy phần tử $element trong mảng.";
}

echo "<br>";
echo "<br>";
// 15. Viết chương trình PHP để đảo ngược một chuỗi.
function reverseString($string){
    $result = "";
    $len = strlen($string); 
    for ($i = $len - 1; $i >= 0; $i--){
        $result .= $string[$i]; 
    }
    return $result; 
}
$string = "nghia Vip pRo 99";
echo "Chuỗi sau khi đảo ngược:" . " " . reverseString($string);

echo "<br>";
echo "<br>";
//16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countElements($array) {
  $count = 0;
  foreach ($array as $element) {
      $count++;
  }
  return $count;
}

// Mảng
$array = [6, 17, 12, 65, 24, 251];
$count = countElements($array);
// kết quả
echo "Số lượng phần tử trong mảng: " . $count;

echo "<br>";
echo "<br>";
//17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function palindromeCheck($str) {
  $length = strlen($str);
  for ($i = 0, $j = $length - 1; $i < $j; $i++, $j--) {
      if ($str[$i] !== $str[$j]) {
          return false;
      }
  }
  return true;
}
// chuỗi cần kiểm tra
$string = "tacocat";
$isPalindrome = palindromeCheck($string);
// kết quả
if ($isPalindrome) {
  echo "Chuỗi '$string' là chuỗi Palindrome.";
} else {
  echo "Chuỗi '$string' không phải là chuỗi Palindrome.";
}

echo "<br>";
echo "<br>";
//18.  Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countOccurrences($arr,$element)
{$count=0;
foreach ($arr as $value){
    if ($value === $element){
        $count ++;
    }
} 
return $count;
}
$arr = array(6, 9, 12, 9, 15, 9, 51, 5, 3, 9);
$element = 9;
echo "Số lần xuất hiện của phần tử" . " " . $element . " " . "là: " . countOccurrences($arr,$element);

echo "<br>";
echo "<br>";
//19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function sortDescending($array) {
  $length = count($array);
  for ($i = 0; $i < $length - 1; $i++) {
      for ($j = 0; $j < $length - $i - 1; $j++) {
          if ($array[$j] < $array[$j + 1]) {
              $temp = $array[$j];
              $array[$j] = $array[$j + 1];
              $array[$j + 1] = $temp;
          }
      }
  }
  return $array;
}
// Mảng cần sắp xếp
$array = [83, 34, 23, 86, 91, 2, 1];
$sortedArray = sortDescending($array);
// Kết quả
echo "Mảng sau khi sắp xếp theo thứ tự giảm dần: ";
foreach ($sortedArray as $element) {
  echo $element . " ";
}

echo "<br>";
echo "<br>";
//20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function addFirstElement($array, $element) {
  $length = count($array);
  for ($i = $length - 1; $i >= 0; $i--) {
      $array[$i + 1] = $array[$i];
  }
  $array[0] = $element;
  return $array;
}
function addLastElement($array, $element) {
  $array[] = $element;
  return $array;
}
// Mảng
$originalArray = [3, 7, 9, 11, 15];
$newArray1 = addFirstElement($originalArray, 1);
$newArray2 = addLastElement($originalArray, 17);
// In kết quả
echo "Mảng sau khi thêm phần tử vào đầu: " . implode(", ", $newArray1) . "<br>";
echo "Mảng sau khi thêm phần tử vào cuối: " . implode(", ", $newArray2) . "<br>";

echo "<br>";
echo "<br>";
//21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function find_second_largest($arr) {
    $largest = $arr[0];
    $secondLargest = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
      if ($arr[$i] > $largest) {
        $secondLargest = $largest;
        $largest = $arr[$i];
      } else if ($arr[$i] > $secondLargest && $arr[$i] !== $largest) {
        $secondLargest = $arr[$i];
    }
}
return $secondLargest;
}
$arr = array(54, 33, 82, 97, 1, 15, 17);
$secondLargest = find_second_largest($arr);
echo "Số lớn thứ hai trong mảng là: " . $secondLargest;

echo "<br>";
echo "<br>";
//22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function greatestCommonDivisor($a, $b) {
  if ($b == 0) {
    return $a;
  } else {
    return greatestCommonDivisor($b, $a % $b);
  }
}
function leastCommonMultiple($a, $b) {
  return ($a * $b) / greatestCommonDivisor($a, $b);
}
$a = 9;
$b = 12;
// Tìm ước số chung lớn nhất
$gcd = greatestCommonDivisor($a, $b);
echo "Ước số chung lớn nhất của " . $a . " và " . $b . " là: " . $gcd . "<br>";

// Tìm bội số chung nhỏ nhất
$lcm = leastCommonMultiple($a, $b);
echo "Bội số chung nhỏ nhất của " . $a . " và " . $b . " là: " . $lcm;

echo "<br>";
echo "<br>";
//23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. Tổng các ước thực sự của a((trừ a)) bằng a thì a là số hoàn hảo
function isPerfect($num) {
    $sum = 0;
    for ($i = 1; $i < $num; $i++) {
      if ($num % $i == 0) {
        $sum += $i;
      }
    }
    if ($sum == $num) {
      return true;
    } else {
      return false;
    }
  }
  $num = 28;
  // kết quả
if (isPerfect($num)) {
  echo $num . ' là số hoàn hảo';
} else {
  echo $num . ' không phải là số hoàn hảo';
}

echo "<br>";
echo "<br>";
//24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function largestOddNumber($arr) {
    $largestOdd = -1;
    
    for ($i = 0; $i < count($arr); $i++) {
      if ($arr[$i] % 2 == 1 && $arr[$i] > $largestOdd) {
        $largestOdd = $arr[$i];
      }
    }
    return $largestOdd;
  }
//mảng
$arr = array(3,5,7,2,8,4);
$largestOddNumber = largestOddNumber($arr);
echo "Số lẻ lớn nhất trong mảng là: " . $largestOddNumber;

echo "<br>";
echo "<br>";
//25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrimeNumber($number) {
    if ($number <= 1)
        return false;

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0)
            return false;
    }
    return true;
}
$number = 23;
//kết quả
if (isPrimeNumber($number))
    echo "$number là số nguyên tố";
else
    echo "$number không phải là số nguyên tố";

echo "<br>";
echo "<br>";
//26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function largestPositiveNumber($arr) {
    $largestPositive = -1;
    for ($i = 0; $i < count($arr); $i++) {
      if ($arr[$i] > $largestPositive && $arr[$i] > 0) {
        $largestPositive = $arr[$i];
      }
    }
    return $largestPositive;
}
$arr = array(-9, -12, 85, 91, 3, 5, -96);
$largestPositiveNumber = largestPositiveNumber($arr);
if($largestPositiveNumber == -1) {
    echo "Không tìm thấy số dương nào trong mảng";
} else {
    echo "Số dương lớn nhất trong mảng là: " . $largestPositiveNumber;
} 

echo "<br>";
echo "<br>";
//27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function largestNegativeNumber($arr) {
    $largestNegative = NULL;
    
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < 0 && ($largestNegative == NULL || $arr[$i] > $largestNegative)) {
            $largestNegative = $arr[$i];
        }
    }
    
    return $largestNegative;
}
$arr = array(83, 92, 44, -32, -23, -74);
$largestNegativeNumber = largestNegativeNumber($arr);
// Kết quả
if ($largestNegativeNumber != NULL) {
    echo "Số âm lớn nhất trong mảng là: " . $largestNegativeNumber;
} else {
    echo "Không có số âm nào trong mảng.";
}

echo "<br>";
echo "<br>";
//28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sumOddNumbers($n) {
	$sum = 0;
	for ($i = 1; $i <= $n; $i++) {
		if ($i % 2 != 0) {
			$sum += $i;
		}
	}
	return $sum;
}
$n = 25;
$sum = sumOddNumbers($n);
// kết quả
echo "Tổng các số lẻ từ 1 đến " . $n . " là: " . $sum;

echo "<br>";
echo "<br>";
//29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function findPerfectSquares($start, $end) {
  $result = array();
  for ($i = $start; $i <= $end; $i++) {
      if (checkPerfectSquares($i)) {
          $result[] = $i; 
      }
  }
  return $result;
}
function checkPerfectSquares($number) {
  $sqrt = sqrt($number);

  return ($sqrt * $sqrt == $number);
}

$start = 10;
$end = 25;
$squareNumbers = findPerfectSquares($start, $end);
// Kết quả
echo "Các số chính phương trong khoảng từ $start đến $end là: ";
foreach ($squareNumbers as $number) {
  echo $number . " ";
}

echo "<br>";
echo "<br>";
//30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function isSubString($str, $subStr) {
  $strLength = strlen($str);
  $subStrLength = strlen($subStr);
  for ($i = 0; $i <= $strLength - $subStrLength; $i++) {
      $match = true;
      for ($j = 0; $j < $subStrLength; $j++) {
          if ($str[$i + $j] !== $subStr[$j]) {
              $match = false;
              break;
          }
      }
      if ($match) {
          return true;
      }
  }
  return false;
}

// Chuỗi gốc
$str = "nghia vip pro 99";

// Kiểm tra chuỗi con "vip pro"
$subStr = "vip pro";
if (isSubString($str, $subStr)) {
  echo "'$subStr' là chuỗi con của '$str'<br>";
} else {
  echo "'$subStr' không phải là chuỗi con của '$str'<br>";
}

// Kiểm tra chuỗi con "dep trai"
$subStr = "dep trai";
if (isSubString($str, $subStr)) {
  echo "'$subStr' là chuỗi con của '$str'<br>";
} else {
  echo "'$subStr' không phải là chuỗi con của '$str'<br>";
}








?>
