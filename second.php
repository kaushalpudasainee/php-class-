
    <?php 
        function evaluate($name, $attendence, $hygiene, $rating){
            if(($attendence < 80 && $hygiene < 50) || ($hygiene < 50 && $rating < 2)){
                echo "$name, You are fierd from the Rojan Kirana Passal.";
            } else {
                echo "Not Fired for now.";
            }
        }
        evaluate("kaushal", 80, 30, 1);
    ?>
