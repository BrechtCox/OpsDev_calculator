<!DOCTYPE html>
<html>
    <head>
     <title>OpsDev - Calculator</title>
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
    <h1>OpsDev - Calculator</h1><hr/>
        <?php
            // Use 'composer install' to get dependencies
            // Remember to run tests using PHPUnit: 'vendor/bin/phpunit tests'

            // composer autoload. Might require 'composer dump-autoload' to work.
            require('vendor/autoload.php');
        ?>
        <form action="index.php" method="post">
            <p>We made a calculator, but its better than the competition!</p>
            <p>Why you ask? We got dark mode!</p>
            <div class="form-group">
                <label for="number1">Number 1</label>
                <input type="text" class="form-control" id="number1" name="number1" required style="background-color: #829AB1; color: #F0F4F8;">
            </div>
            <div class="form-group">
                <label for="number2">Number 2</label>
                <input type="text" class="form-control" id="number2" name="number2" required style="background-color: #829AB1; color: #F0F4F8;">
            </div>
            <button type="submit" class="btn btn-primary" name="add">Add</button>
            <button type="submit" class="btn btn-primary" name="subtract">Subtract</button>
            <button type="submit" class="btn btn-primary" name="multiply">Multiply</button>
        </form>
        <main>
        <?php
            if(isset($_POST['add'])){
                $n1 = $_POST['number1'];
                $n2 = $_POST['number2'];
                $calc = new Calculator();
                $result = $calc->add($n1, $n2);

                echo "<h2>The result of adding $n1 and $n2 is $result</h2>";
                echo "<p>This result has been checked with next-gen AI deep-learning quantum algorithms and is more accurate than
                        the result of other calculator apps.";
            }

            if(isset($_POST['subtract'])){
                $n1 = $_POST['number1'];
                $n2 = $_POST['number2'];
                $calc = new Calculator();
                $result = $calc->subtract($n1, $n2);

                echo "<h2>The result of subtracting $n2 from $n1 is $result</h2>";
                echo "<p>This result has been checked with next-gen AI deep-learning quantum algorithms and is more accurate than
                        the result of other calculator apps.";
            }

            if(isset($_POST['multiply'])){
                $n1 = $_POST['number1'];
                $n2 = $_POST['number2'];
                $calc = new Calculator();
                $result = $calc->multiply($n1, $n2);

                echo "<h2>The result of multiplying $n1 and $n2 is $result</h2>";
                echo "<p>This result has been checked with next-gen AI deep-learning quantum algorithms and is more accurate than
                        the result of other calculator apps.";
            }
            
            if(isset($_POST['divide'])){
                $n1 = $_POST['number1'];
                $n2 = $_POST['number2'];
                $calc = new Calculator();
                $result = $calc->divide($n1, $n2);

                echo "<h2>The result of dividing $n1 and $n2 is $result</h2>";
                echo "<p>This result has been checked with next-gen AI deep-learning quantum algorithms and is more accurate than
                        the result of other calculator apps.";
            }
        ?>
        </main>
        
        <script src="assets/js/bootstrap.min.js" ></sccript>
    </body>
</html>
