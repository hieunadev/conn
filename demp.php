<html>

<body>
    <?php
    function isPrimeNumber($n)
    {
        // so nguyen n < 2 khong phai la so nguyen to
        if ($n < 2) {
            return false;
        }
        // check so nguyen to khi n >= 2
        $squareRoot = sqrt($n);
        for ($i = 2; $i <= $squareRoot; $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
    
    echo ("Liệt kê 10 số nguyên tố đầu tiên: ");
    $i = 2;
    $dem=0;
    while ($dem<10){
        if (isPrimeNumber($i)){
            echo ($i.' ');
            $dem++;
        }
        $i++;
    }

    ?>
</body>

</html>