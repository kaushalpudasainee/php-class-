
    <?php 
        function evaluate($name, $attendence, $hygiene, $rating){
            if($attendence < 80 || $hygiene < 50 || $rating < 2){
                echo "$name, You are fired from the Rojan Kirana Passal.";
            } else {
                echo "Not Fired for now.";
            }
        }
        evaluate("Kusal Karki", 35, 70, 2);
    ?>
