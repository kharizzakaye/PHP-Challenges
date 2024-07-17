<!DOCTYPE html>
<html>
<body>

<?php

  function check_capacity($capacity, $attendees = 0)
  {
      // Challenge: define this function
      if ($attendees >= $capacity) 
      {
          return "This event is sold out.";
      } 
      else 
      {
          return "There are still tickets available.";
      }
  }

  // Array: key => [capacity, attendees];
  $venues = array(
      'Cantina' => [100, 20], 		// Cantina - There are still tickets available.
      'Dorsia' => [74, 74], 		// Dorsia - This event is sold out.
      'The Max' => [98, 100], 		// The Max - This event is sold out.
      'MacLaren\'s' => [53, 127], 	// MacLaren's - This event is sold out.
      'The Banana Stand' => [2, 0], // The Banana Stand - There are still tickets available.
  );

  foreach ($venues as $name => $numbers) 
  {
      echo $name . ' - ' . check_capacity($numbers[0], $numbers[1]) . '<br/>';
  }

?>

</body>
</html>
