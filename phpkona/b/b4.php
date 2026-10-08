
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Matrix Operation</title>
<style>
input [type='number']{width:60px;text-align:center;}
table{margin:10px 0; border-collapse:collapse;}
td{padding:5px;}
</style>
</head>
    <body>
    <h2> Matrix Operations(Addition,Multiplication)</h2>
    <form method="post" action="">
        <h3>Enter dimensions for matrix A</h3>
        Rows:<input type="number" name="rowsA" value="<?php if(isset($_POST['rowsA']))echo $_POST['rowsA'];?>" required ><br ><br>;
        columns:<input type="number" name="colsA" value="<?php if(isset($_POST['colsA']))echo $_POST['colsA'];?>" required ><br ><br>;

        <h3>Enter dimensions for matrix B</h3>
        Rows:<input type="number" name="rowsB" value="<?php if(isset($_POST['rowsB']))echo $_POST['rowsB'];?>" required ><br ><br />;
        columns:<input type="number" name="colsB" value="<?php if(isset($_POST['colsB']))echo $_POST['colsB'];?>" required ><br ><br>;
        <input type="submit" name="create" value="create matrices">
        <input type="button" value="Reset All" onclick="window.location.href=window.loction.pathname">
    </form>
    <?php
        if(isset($_POST['create'])||isset($_POST['add'])||isset($_POST['mul'])){
            $rowsA=$_POST['rowsA'];
            $colsA=$_POST['colsA'];
            $rowsB=$_POST['rowsB'];
            $colsB=$_POST['colsB'];
            $A=isset($_POST['A'])? $_POST['A']:array();
            $B=isset($_POST['B'])? $_POST['B']:array();

            echo "<form method='post' action=''>";
            echo "<input type='hidden' name='rowsA' value='$rowsA'>";
            echo "<input type='hidden' name='rowsB' value='$rowsB'>";
            echo "<input type='hidden' name='colsA' value='$colsA'>";
            echo "<input type='hidden' name='colsB' value='$colsB'>";

            echo"<h3> Matrix A </h3> <table border='1'>";
            for($i=0;$i<$rowsA;$i++){
                echo"<tr>";
                for($j=0;$j<$colsA;$j++){
                    $valA=isset($A[$i][$j])? $A[$i][$j]:'';
                    echo "<td> <input type='number' name='A[$i][$j]' value='$valA' required></td>";
                }
                echo"</tr>";
            }
            echo"</table>";

            echo "<h3> matrix B</h3> <table border='1'>";
            for($i=0;$i<$rowsB;$i++){
                echo "<tr>";
                for($j=0;$j<$colsB;$j++){
                    $valB=isset($B[$i][$j])? $B[$i][$j]:'';
                    echo "<td> <input type='number' name='B[$i][$j]' value='$valB' required></td>";
                }
                echo"</tr>";
            }
            echo"</table>";
            echo"<input type='submit' name='add' value='Add Matrices'>";
            echo"<input type='submit' name='mul' value='multiply Matrices'>";
            echo "</form>";
        }

        if(isset($_POST['add'])||isset($_POST['mul'])){
            $A=$_POST['A'];
            $B=$_POST['B'];
            $rowsA=$_POST['rowsA'];
            $rowsB=$_POST['rowsB'];
            $colsA=$_POST['colsA'];
            $colsB=$_POST['colsB'];
            echo "<h3>Result matrix </h3><table border='1'>";
            if(isset($_POST['add'])){
                if($rowsA!=$rowsB||$colsA!=$colsB){
                    echo "<tr><td colspan='100%' style='color:red;'>Matrix Addition not possible.Rule:Matrices must have same dimension.</td></tr>";
                }else{
                    for($i=0;$i<$rowsA;$i++){
                        echo "<tr>";
                        for($j=0;$j<$colsA;$j++){
                            echo "<td>".($A[$i][$j]+$B[$i][$j])."</td>";
                        }
                        echo"</tr>";
                    }
                }
            }

            if(isset($_POST['mul'])){
                $rowsA=count($A);
                $colsA=count($A[0]);
                $rowsB=count($B);
                $colsB=count($B[0]);
                
                if($colsA!=$rowsB){
                    echo "<tr><td colspan='100%' style='color:red;'>Matrix Multiplication not possible.columns of A must be equal to rows of B.</td></tr>";
                } else {
                    for($i=0;$i<$rowsA;$i++){
                        echo"<tr>";
                        for($j=0;$j<$colsB;$j++){
                            $sum=0;
                            for($k=0;$k<$colsA;$k++){
                                $sum+=$A[$i][$k]*$B[$k][$j];
                            }
                            echo "<td>$sum</td>";
                        }
                        echo "</tr>";
                    }
                }
            }
            echo "</table>";
        }
    ?>
</body>
</html>