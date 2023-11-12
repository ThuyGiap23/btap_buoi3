
<!-- Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. -->
<?php
function sortArray($array) {
    sort($array);
    return $array;
}
$array = [1, 2, 3, 14, 5];
$sortedArray = sortArray($array);

echo "Mảng sau khi sắp xếp theo thứ tự tăng dần: " . implode(', ', $sortedArray) . "<br>";
?>


<!-- Viết chương trình PHP để tính giai thừa của một số nguyên dương. -->
<?php
function tinhGiaiThua($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * tinhGiaiThua($n - 1);
    }
}
$n = 6;

// Kiểm tra và chuyển đổi giá trị nhập vào thành số nguyên
$n = filter_var($n, FILTER_VALIDATE_INT);

// Kiểm tra số nguyên dương
if ($n === false || $n <= 0) {
    echo "Số bạn vừa nhập không phải là số nguyên dương! <br>";
} else {
    // Tính giai thừa
    $giaiThua = tinhGiaiThua($n);
    echo "Giai thừa của $n là " . number_format($giaiThua) . "<br>";
}

?>




<!-- Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước. -->

<?php
function isPrime($number){
    if($number < 2){
        return false;
    }
    
    for($i = 2; $i <= sqrt($number); $i++){
        if($number % $i == 0){
            return false;
        }
    }
    
    return true;
}

function findPrimes($start, $end){
    $primes = [];
    
    for($i = $start; $i <= $end; $i++){
        if(isPrime($i)){
            $primes[] = $i;
        }
    }
    
    return $primes;
}

$start = 2; // Khoảng bắt đầu
$end = 10; // Khoảng kết thúc

$primeNumbers = findPrimes($start, $end);

echo "Các số nguyên tố từ $start đến $end là: " . implode(", ", $primeNumbers) . "<br>";
?>



<!-- Viết chương trình PHP để tính tổng của các số trong một mảng. -->
<?php
function tinhTong($array) {
    $sum = 0;
    foreach ($array as $num) {
        $sum += $num;
    }
    return $sum;
}
$num = array(1, 2, 3, 14, 5);
echo "Tổng của mảng là: " . tinhTong($num) . "<br>";
?> 





<!-- Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. -->
<?php
// Hàm tính số Fibonacci thứ n
function fibonacci($n) {
    if ($n == 0)
        return 0;
    else if ($n == 1)
        return 1;
    else
        return fibonacci($n - 1) + fibonacci($n - 2);
}
// Hàm lấy các số Fibonacci trong khoảng từ $start đến $end
function fibonacciRange($start, $end) {
    // Mảng để lưu trữ các số Fibonacci trong khoảng
    $fibonacciNumbers = [];
     // Bắt đầu từ số Fibonacci đầu tiên (n = 0) và lặp cho đến khi vượt quá $end
    $n = 0;
    while (fibonacci($n) <= $end) {
          // Lấy số Fibonacci thứ n
        $fibonacci = fibonacci($n);
         // Kiểm tra xem số Fibonacci có nằm trong khoảng không
        if ($fibonacci >= $start) {
            $fibonacciNumbers[] = $fibonacci;// Thêm số Fibonacci vào mảng
        }
         // Tăng giá trị của n để lấy số Fibonacci tiếp theo
        $n++;
    }
    return $fibonacciNumbers;
}

$start = 0;
$end = 20;

$fibonacciNumbers = fibonacciRange($start, $end);

echo "Các số Fibonacci trong khoảng từ $start đến $end là: " . implode(', ', $fibonacciNumbers) . "<br>";
?>




<!-- Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. 
(Số Armstrong là số có giá trị bằng tổng lập phương của các chữ số trong số đó.) -->
<?php
function isArmstrong($number) {
    // Khởi tạo biến sum để tính tổng lũy thừa bậc n của các chữ số
    $sum = 0;

    // Tạo một bản sao của số để không ảnh hưởng đến giá trị gốc
    $temp = $number;

    // Đếm số chữ số trong số
    $numDigits = strlen($number);

    // Dùng vòng lặp while để tính tổng lũy thừa bậc n của từng chữ số
    while ($temp > 0) {
        // Lấy chữ số cuối cùng của số và gán vào biến digit
        $digit = $temp % 10;

        // Tính lũy thừa bậc n của chữ số và cộng vào tổng
        $sum += pow($digit, $numDigits);

        // Loại bỏ chữ số cuối cùng của số
        $temp = floor($temp / 10);
    }

    // So sánh tổng với số gốc, nếu bằng nhau thì là số Armstrong
    return $sum == $number;
}

$number = 153;
if (isArmstrong($number)) {
    echo "$number là số Armstrong. <br>";
} else {
    echo "$number không phải là số Armstrong. <br>";
}
?>




<!-- Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. -->
<?php
function insertElementAtPosition($array, $element, $position) {
    // Kiểm tra xem vị trí chèn có hợp lệ không
    if ($position >= 0 && $position <= count($array)) {
        // Sử dụng hàm array_splice để chèn phần tử vào mảng
        array_splice($array, $position, 0, $element);
        return $array;
    } else {
        // Trả về mảng không thay đổi nếu vị trí chèn không hợp lệ
        return $array;
    }
}

$array = [1, 2, 3, 4, 5];

$elementToInsert = 9;

$positionToInsert = 2;

$arrayAfterInsertion = insertElementAtPosition($array, $elementToInsert, $positionToInsert);
echo "Mảng sau khi chèn phần tử $elementToInsert vào vị trí $positionToInsert: " . implode(', ', $arrayAfterInsertion) ."<br>";
?>




<!-- Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng. -->
<?php
function loaiBoTrungLap($mang) {
    return array_unique($mang);
}
$mangBanDau = ["red", "orange", "red", "green", "blue", "green"];
$mangSauKhiLoaiBo = loaiBoTrungLap($mangBanDau);
echo "Mảng sau khi loại bỏ phần tử trùng lặp: " . implode(', ', $mangSauKhiLoaiBo) . "<br>";
?>




<!-- Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. -->
<?php
function findElementPosition($array, $element) {
    foreach ($array as $key => $value) {
        if ($value == $element) {
            return $key;
        }
    }
    return "Phần tử không tồn tại trong mảng.";
}
$array = ["a", "k", "l", "m", "x"];
$elementToFind = "v";
$position = findElementPosition($array, $elementToFind);
echo "Vị trí của phần tử \"$elementToFind\" trong mảng là: $position <br>";
?>





<!-- Viết chương trình PHP để đảo ngược một chuỗi. -->
<?php
function daoNguocChuoi($chuoi) {
    return strrev($chuoi);
}
$chuoiBanDau = "Giap Thuy";
$chuoiSauKhiDaoNguoc = daoNguocChuoi($chuoiBanDau);

echo "Chuỗi sau khi đảo ngược là: $chuoiSauKhiDaoNguoc  <br>";
?>

<!-- Viết chương trình PHP để tính số lượng phần tử trong một mảng. -->
<?php
function countElements($array) {
    return count($array);
}
$array = ["a", "n", "q", "u", "a"];
$elementCount = countElements($array);
echo "Số lượng phần tử trong mảng là: $elementCount <br>";
?>


<!-- Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. -->
<?php
function isPalindrome($string) {
    $reversedString = strrev($string);
    if ($string == $reversedString) {
        return true;
    } else {
        return false;
    }
}

$string = "rcecar";
if (isPalindrome($string)) {
    echo "$string là chuỗi palindrome. <br>";
} else {
    echo "$string không phải là chuỗi palindrome. <br>";
}
?>





<!-- Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng. -->
<?php
function demSoLanXuatHien($mang, $phanTu) {
  $count = 0;
  foreach ($mang as $item) {
    if ($item == $phanTu) {
      $count++;
    }
  }
  return $count;
}

$mang = ["an", "qua", "nho", "an", "ke", "trong", "cay", "ke"];
$phanTu = "ke";
$soLanXuatHien = demSoLanXuatHien($mang, $phanTu);

echo "Số lần xuất hiện của phần tử \"$phanTu\" trong mảng là: $soLanXuatHien <br>";
?>



<!-- Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. -->
<?php
function rsortArray($array) {
    rsort($array);
    return $array;
}
$array = [1, 2, 3, 14, 5];
$rsortedArray = rsortArray($array);

echo "Mảng sau khi sắp xếp theo thứ tự giảm dần: " . implode(', ', $rsortedArray) . "<br>";
?>



<!-- Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng. -->
<?php
function addToBeginning($array, $element) {
    // Thêm phần tử vào đầu mảng
    array_unshift($array, $element);
    return $array;
}

function addToEnd($array, $element) {
    // Thêm phần tử vào cuối mảng
    array_push($array, $element);
    return $array;
}

$array = [1, 2, 4, 5];
$elementToAdd = 10;

$arrayAfterAddingToBeginning = addToBeginning($array, $elementToAdd);

echo "Mảng sau khi thêm phần tử $elementToAdd vào đầu: " . implode(', ', $arrayAfterAddingToBeginning) . "<br>";

$arrayAfterAddingToEnd = addToEnd($array, $elementToAdd);

echo "Mảng sau khi thêm phần tử $elementToAdd vào cuối: " . implode(', ', $arrayAfterAddingToEnd) . "<br>";
?>




<!-- Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. -->
 <?php
function findSecondLargest($arr) {
    $max1 = PHP_INT_MIN;
    $max2 = PHP_INT_MIN;

    foreach ($arr as $num) {
        if ($num > $max1) {
            $max2 = $max1;
            $max1 = $num;
        } elseif ($num > $max2 && $num < $max1) {
            $max2 = $num;
        }
    }

    return $max2;
}

$arr = [1, 9, 2, 5, 7];
$secondLargest = findSecondLargest($arr);
echo "Số lớn thứ hai trong mảng là: $secondLargest <br>";
?> 



<!-- Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương. -->
<?php
function gcd($a, $b) {
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

function lcm($a, $b) {
    return ($a * $b) / gcd($a, $b);
}
$num1 = 24;
$num2 = 18;

$gcd = gcd($num1, $num2);
$lcm = lcm($num1, $num2);

echo "Ước số chung lớn nhất của $num1 và $num2 là: $gcd <br>";
echo "Bội số chung nhỏ nhất của $num1 và $num2 là: $lcm <br>";
?> 



<!-- Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. -->
<?php
function isPerfectNumber($number) {
    $sum = 0;

    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }

    return $sum == $number;
}

$number = 30;

if (isPerfectNumber($number)) {
    echo "$number là số hoàn hảo. <br>";
} else {
    echo "$number không là số hoàn hảo. <br>";
}
?>



<!-- Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. -->
<?php
function timSoLeLonNhat($arr) {
    $max = null;
  
    foreach ($arr as $num) {
      if ($num % 2 !== 0 && ($max === null || $num > $max)) {
        $max = $num;
      }
    }
    return $max;
  }
  $array = [10, 2, 51, 4, 18, 86];
  $maxOdd = timSoLeLonNhat($array);

  if ($maxOdd != null) {
    echo "Số lẻ lớn nhất trong mảng là: " . $maxOdd . "<br>";
  } else {
    echo "Không có số lẻ trong mảng. <br>";
  }
?> 



<!-- Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không. -->
<?php
function findIsPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

$number = 5; 

if (findIsPrime($number)) {
    echo "$number là số nguyên tố <br>";
} else {
    echo "$number không là số nguyên tố <br>";
}
?>  



<!-- Viết chương trình PHP để tìm số dương lớn nhất trong một mảng. -->
<?php
function findLargestPositive($array) {
    $largestPositive = null;

    foreach ($array as $number) {
        if ($number > 0 && ($largestPositive === null || $number > $largestPositive)) {
            $largestPositive = $number;
        }
    }

    return $largestPositive;
}
$array = [-10, -2, -51, 4, 18, -86];
$largestPositive = findLargestPositive($array);

if ($largestPositive !== null) {
    echo "Số dương lớn nhất trong mảng là: $largestPositive <br>";
} else {
    echo "Không có số dương trong mảng.";
}

?>



<!-- Viết chương trình PHP để tìm số âm lớn nhất trong một mảng. -->
<?php
function findLargestNegative($array) {
    $largestNegative = null;

    foreach ($array as $number) {
        if ($number < 0 && ($largestNegative === null || $number > $largestNegative)) {
            $largestNegative = $number;
        }
    }

    return $largestNegative;
}
$array = [-10, -2, -51, 4, 18, -86];
$largestNegative = findLargestNegative($array);

if ($largestNegative !== null) {
    echo "Số âm lớn nhất trong mảng là: $largestNegative  <br>";
} else {
    echo "Không có số âm trong mảng.";
}

?>


<!-- Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n. -->
<?php
function tinhTongSoLe($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 == 1) {
            $sum += $i;
        }
    }
    return $sum;
}

$n = 5; 
$sum = tinhTongSoLe($n);
echo "Tổng các số lẻ từ 1 đến $n là: $sum <br>";
?> 



<!-- Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước. -->
<?php
function isPerfectSquare($number) {
    return sqrt($number) == floor(sqrt($number));
}

function findPerfectSquaresInRange($start, $end) {
    $perfectSquares = [];

    for ($i = $start; $i <= $end; $i++) {
        if (isPerfectSquare($i)) {
            $perfectSquares[] = $i;
        }
    }

    return $perfectSquares;
}

$start = 1;
$end = 10;

$perfectSquaresInRange = findPerfectSquaresInRange($start, $end);

echo "Các số chính phương trong khoảng từ $start đến $end là: " . implode(', ', $perfectSquaresInRange) . "<br>";
?>




<!-- Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không. -->

<?php
function isSubstring($parent , $child) {
    return strpos($parent , $child) !== false;
}

$parent = "Bài hát này không phải về tình yêu";
$child ="Bài hát này";

if (isSubstring($parent , $child)) {
    echo "\"$child\" là chuỗi con của \"$parent\" <br>";
} else {
    echo "\"$child\" không phải là chuỗi con của \"$$parent\" ";
}
?>

