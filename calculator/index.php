<!DOCTYPE html>
<html lang="en">
<head>
     <style>
        *{
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
            
        }
        .mainForm{
            margin: 50px auto;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-self: center;
        }
        .answer{
            margin: 50px auto;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-self: center;
            background-color: black;
            color: white;
            width: 200px;
            padding: 20px;

        }
        input{
            height: 30px;
            margin: 5px 0px;
        }
     </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="mainForm">
        <form action="index.php" method="post">
            <input type="number" name="num1" id="num1" placeholder="Enter first number"><br>
            <input type="number" name="num2" id="num2" placeholder="Enter second number"><br>
            <label for="operator"> Choose an operator:</label>
            <select id="oeprator" name="operation">
                <option value="add">Add</option>
                <option value="sub">Subtract</option>
                <option value="mul">Multiply</option>
                <option value="div">Divide</option>
            </select>
            <br>
            <input type="submit">
        </form>
    </div>
    <div class="answer">
    <?php
        if(isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["operation"])){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operationType = $_POST["operation"];

            if($operationType == "add"){
               echo $num1 + $num2;
            }
            else if ($operationType =="sub"){
                echo $num1 - $num2;
            }
            else if ($operationType =="mul"){
                echo $num1 * $num2;
            }
            else if ($operationType =="div"){
                if($num1 == 0){
                    echo "Inderterminate";
                }
                else if ($num2 == 0){
                    echo "Undefined";
                }
                else{
                    echo $num1 / $num2;
                }
            }
        }
    ?>
    </div>
</body>
</html>