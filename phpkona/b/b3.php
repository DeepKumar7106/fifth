<!DOCTYPE html>
<html>
<head>
    <title>Distance Calculator</title>
</head>
<body>
    <h2>Distance Calculator</h2>
    <form action="" method="post">
        <h3>Distance 1</h3>
        Feet : <input type="number" name="feet1"><br><br>
        Inch : <input type="number" name="inch1"><br><br>
        <h3>Distance 2</h3>
        Feet : <input type="number" name="feet2"><br><br>
        Inch : <input type="number" name="inch2"><br><br>

        <input type="submit" value="Calculate" name="calculate">
    </form>
    <?php
        class Distance {
            public $feet;
            public $inch;

            public function SetDistance($f, $i) {
                $this->feet = $f;
                $this->inch = $f;
            }

            public function AddDistance($d) {
                $sumFeet += $this->feet + $d->feet;
                $sumInch += $this->inch + $d->inch;

                if($sumInch >= 12) {
                    $sumFeet += (int)($sumInch / 12);
                    $sumInch = $sumInch % 12;
                }

                return array($feet, $inch);
            }
            
            public function DiffDistance($d) {
                $inch1 = ($this->feet * 12) + $this->inch;
                $inch2 = ($d->feet * 12) + $d->inch;
                
                $diffInch = abs($inch1 - $inch2);
                $feet = (int)($diffInch / 12);
                $inch = $diffInch % 12;
                
                return array($feet, $inch);
            }
            
        }

        if(isset($_POST['calculate'])) {
            $feet1 = (int)$_POST['feet1'];
            $inch1 = (int)$_POST['inch1'];
            $feet2 = (int)$_POST['feet2'];
            $inch1 = (int)$_POST['inch2'];

            $d1 = new Distance();
            $d2 = new Distance();
            
            $d1->SetDistance($feet1, $inch1);
            $d2->SetDistance($feet2, $inch2);

            $sum = $d1->AddDistance($d);
            $diff = $d1->DiffDistance($d);

            echo "<h2>Result:</h2>";
            echo "Sum: " . $sum[0] . "'" . $sum[1] ."\" <br>";
            echo "Difference: " . $diff[0] . "'" . $diff[1] ."\" <br>";
        }
    ?>
</body>
</html>