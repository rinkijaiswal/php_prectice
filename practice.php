<?php
$data = [
	['name'=>'Shivam','age' =>"20"],
	['name' => 'Rinki', 'age' => "50"]
];

foreach($data as $student){
?>
<li><?= $student['name'] ?> - <?= $student['age'] ?></li>
<?php } ?>	