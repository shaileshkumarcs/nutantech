<?php
require_once("dbconfig.php");

$keyword = $_POST["keyword"];
if ($keyword != '') {

$query = "SELECT * FROM users WHERE emailid like '" . $keyword."%'";
$result = mysqli_query($connection, $query);
while($row=mysqli_fetch_assoc($result)) {
	$resultset[] = $row;

}	
                if(!empty($resultset)){
                    if($resultset[0]['emailid'] === $keyword){
                        echo "Email already registered";
                        echo "<style>#submitt{cursor: not-allowed;pointer-events:none;}</style>";
                        echo "<style>.submitlogin{cursor: not-allowed;pointer-events: none;}</style>";
                    }

                } else {
                    $result = "";
                }
			
}
?>