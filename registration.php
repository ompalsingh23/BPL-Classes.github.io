<?php
include 'connection.php';

if(isset($_POST['submit'])){
$FirstName=$_POST['firstname'];
$LastName=$_POST['lastname'];
$Contact=$_POST['contactno'];
$Email=$_POST['email'];
$Suggestion=$_POST['feedback'];

$insertQuery="INSERT INTO `feedbackform`(`FirstName`, `LastName`, `Contact`, `Email`, `Suggestion`) VALUES ('$FirstName','$LastName','$Contact','$Email','$Suggestion')";

$result=mysqli_query($conn,$insertQuery);
if($result){
	?>
<script>
     alert("Form Submitted Successfully ");
	</script>

	<?php
	
}
else {
	?>
<script>
     alert("Form Not Submitted ");
	</script>

	<?php
}

}


?>