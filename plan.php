<?php
require'core/connection.php';
if (isset($_GET['ref']) && !empty($_GET['ref'])) {
$ident = $_GET['ref'];
$query1 = $conn->query("SELECT * FROM users WHERE id = '$ident' order by 'id' DESC");
$fetch1 = $query1->fetchAll(PDO::FETCH_OBJ);
$count1 = $query1->rowCount();
if ($count1 > 0) {
foreach ($fetch1 as $value1) {
$name = $value1->name;
$age = $value1->age;
$gender = $value1->gender;
$height = $value1->height;
$weight = $value1->weight;
$mail = $value1->mail;
$bmi = $value1->bmi;
$bmistatus = $value1->bmistatus;
}
}
$filename = "Diet Information for $name";
header("Content-Type: application/doc");
header("Content-Disposition: attachment; filename=$filename.doc");
?>
<h1>Status For <?php echo "$name"; ?></h1>
<h3>Email: <?php echo "$mail"; ?></h3>
<h3>Age: <?php echo "$age"; ?></h3>
<h3>Gender: <?php echo "$gender"; ?></h3>
<h3>Height: <?php echo "$height"; ?></h3>
<h3>Weight: <?php echo "$weight"; ?></h3>
<h3>Bmi: <?php echo "$bmi"; ?></h3>
<h3>Bmi Status: <?php echo "$bmistatus"; ?></h3>
<?php
if ($bmistatus == 'normal weight') {
?>
<table>
	<tr>
		<th>Keep up the good job, you can visit <a href="https://www.verywellfit.com/an-example-of-a-healthy-balanced-meal-plan-2506647">here</a> for more tips.</th>
	</tr>
</table>
<?php
}elseif ($bmistatus == 'underweight') {
?>
<img src="http://127.0.0.1/AIDietitian/images/underweight.jpg" width="100%">
<p>Diet Plan</p>
<table cellspacing="0" class="Table" style="background:white; border-collapse:collapse; border:none">
	<tbody>
		<tr>
			<td colspan="2" style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:1px solid #cbcbcb">
			<p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Sunday</span></span></span></strong></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Breakfast (8:00-8:30AM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">2 egg brown bread sandwich + green chutney + 1 cup milk + 3 cashews + 4 almonds + 2 walnuts</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Mid-Meal (11:00-11:30AM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup banana shake</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Lunch (2:00-2:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup arhar dal + 1 cup potato curry + 3 chapatti + 1/2 cup rice + 1/2 cup low fat curd + salad</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Evening (4:00-4:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup strawberry smoothie + 1 cup vegetable poha</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Dinner (8:00-8:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1.5 cup chicken curry + 3 chapatti + salad</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none">
			<p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Monday</span></span></span></strong></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Breakfast (8:00-8:30AM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">3 onion stuffed parantha + 1 cup curd + 3 cashews + 4 almonds + 2 walnuts</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Mid-Meal (11:00-11:30AM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup mango shake</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Lunch (2:00-2:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup moong dal/ chicken curry + 1 cup potato and caulifllower vegetable + 3 chapatti + 1/2 cup rice + salad</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Evening (4:00-4:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup pomegranate juice + 2 butter toasted bread</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Dinner (8:00-8:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup beans potato vegetable + 3 chapatti + salad</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none">
			<p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Tuesday</span></span></span></strong></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Breakfast (8:00-8:30AM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">3 paneer stuffed besan cheela + green chutney + 1 cup curd + 3 cashews + 4 almonds + 2 walnuts</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Mid-Meal (11:00-11:30AM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 apple smoothie with maple syrup</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Lunch (2:00-2:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup masoor dal + 1 cup calocasia + 3 chapatti + 1/2 cup rice + 1 cup low curd + salad</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Evening (4:00-4:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup tomato soup with bread crumbs + 1 cup aloo chaat</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Dinner (8:00-8:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup carrot peas vegetable +3 chapatti + salad</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none">
			<p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Wednesday</span></span></span></strong></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Breakfast (8:00-8:30AM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1.5 cup vegetable bread upma + 1 cup milk + 3 cashews + 4 almonds + 2 walnuts</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Mid-Meal (11:00-11:30AM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup ripe banana with 2 tsp ghee</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Lunch (2:00-2:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup rajma curry + 1 cup spinach potato + 3 chapatti + 1/2 cup rice + salad</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Evening (4:00-4:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup vegetable juice + 1 cup upma</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Dinner (8:00-8:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1.5 cup parwal vegetable + 3 chapatti + salad</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none">
			<p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Thursday</span></span></span></strong></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Breakfast (8:00-8:30AM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">2 cucmber potato sandwich + 1 tsp green chutney + 1 orange juice + 3 cshews + 2 walnuts + 4 almonds</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Mid-Meal (11:00-11:30AM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup buttermilk + 1 cup sweet potato chaat</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Lunch (2:00-2:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup white chana/ fish curry + 3 chapatti + 1/2 cup rice + salad</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Evening (4:00-4:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup almond milk + banana</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Dinner (8:00-8:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup cauliflower potato vegetable + 3 chapatti + salad</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none">
			<p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Friday</span></span></span></strong></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Breakfast (8:00-8:30AM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">2 cup vegetable poha + 1 cup curd + 3 cashews + 4 almonds + 2 walnuts</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Mid-Meal (11:00-11:30AM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">2 cups watermelon juice</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Lunch (2:00-2:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup chana dal + 1 cup bhindi vegetable + 3 chapatti + 1/2 cup rice + salad</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Evening (4:00-4:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup sprouts salad + 2 potato cheela + green chutney</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Dinner (8:00-8:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup peas mushroom vegetable + 3 chapatti + salad</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none">
			<p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Saturday</span></span></span></strong></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Breakfast (8:00-8:30AM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">3 vegetable suji cheela + 1 cup strawberry shake + 4 cashews + 4 almonds + 3 walnuts</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Mid-Meal (11:00-11:30AM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup coconut water + 1 cup pomegrate</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Lunch (2:00-2:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup mix dal + 1 cup soybean curry + 3 chapatti + 1/2 cup curd + salad</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Evening (4:00-4:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup fruit salad + 4 pc vegetable cutlets + green chutney</span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">Dinner (8:00-8:30PM)</span></span></span></span></span></p>
			</td>
			<td style="background-color:white; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><span style="color:#333333">1 cup karela vegetable + 3 chaptti + salad</span></span></span></span></span></p>
			</td>
		</tr>
	</tbody>
</table>
<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Underweight Diet Restrictions: Food Items To Limit</span></span></strong></span></span></p>

<ol>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Whole Eggs. Once feared for being high in cholesterol, whole eggs have been making a comeback. ...</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Leafy Greens.</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Salmon.</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Cruciferous Vegetables.</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Lean Beef and Chicken Breast</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Boiled Potatoes.</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Tuna.</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Beans and Legumes.</span></span></span></span></li>
</ol>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Do&#39;s And Dont&#39;s While Following Diet Plan for Underweight</span></span></strong></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">In Underweight condition, you can start making some simple changes in your lifestyles and food habits which are mentioned below, along with the diet plan mentioned above:</span></span></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Do&#39;s:</span></span></span></span></p>

<ol>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Eat more often</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Drink Milk</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Try Weight gainer shakes</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Use Bigger Plates</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Add cream to your coffee</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Take Creatine</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Get Quality Sleep</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Eat your protein first and vegetables last</span></span></span></span></li>
</ol>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Don&#39;ts:</span></span></span></span></p>

<ol>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Drink water before meals</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Smoke</span></span></span></span></li>
</ol>
<?php
header("Content-Type: application/doc");
header("Content-Disposition: attachment; filename=$filename.doc");
}elseif ($bmistatus == 'Obesity' || $bmistatus == 'overweight') {
?>
<img src="http://127.0.0.1/AIDietitian/images/obesity.jpg" width="100%">
<p>Diet Plan</p>
<table cellspacing="0" class="Table" style="border-collapse:collapse; border:none">
	<tbody>
		<tr>
			<td colspan="2" style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:1px solid #cbcbcb">
			<p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Sunday</span></span></strong></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Breakfast (8:00-8:30AM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">3 egg whites + 1 toasted brown bread + 1/2 cup low fat milk (no sugar)</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Mid-Meal (11:00-11:30AM)</span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup papaya</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Lunch (2:00-2:30PM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup arhar dal + 1 chapatti + 1/2 cup low fat curd + salad</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Evening (4:00-4:30PM)</span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup vegetable soup</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Dinner (8:00-8:30PM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup pumpkin + 1 chapatti + salad</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none">
			<p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Monday</span></span></strong></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Breakfast (8:00-8:30AM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 onion stuffed chapatti + 1/2 cup low fat curd</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Mid-Meal (11:00-11:30AM)</span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup coconut water</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Lunch (2:00-2:30PM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup moong dal/ chicken curry + 1 chapatti + salad</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Evening (4:00-4:30PM)</span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup pomegranate</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Dinner (8:00-8:30PM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup beans + 1 chapatti + salad</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none">
			<p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Tuesday</span></span></strong></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Breakfast (8:00-8:30AM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">2 besan cheela + 1/2 cup low fat curd</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Mid-Meal (11:00-11:30AM)</span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 apple</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Lunch (2:00-2:30PM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup masoor dal + 1 chapatti + 1/2 up low fat curd + salad</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Evening (4:00-4:30PM)</span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup tomato soup</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Dinner (8:00-8:30PM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup carrot peas vegetable +1 chapatti + salad</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none">
			<p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Wednesday</span></span></strong></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Breakfast (8:00-8:30AM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup vegetable brown bread upma + 1/2 cup low fat milk (no sugar)</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Mid-Meal (11:00-11:30AM)</span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup musk melon</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Lunch (2:00-2:30PM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup rajma curry + 1 chapatti + salad</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Evening (4:00-4:30PM)</span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup vegetable soup</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Dinner (8:00-8:30PM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup parwal vegetable + 1 chapatti + salad</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none">
			<p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Thursday</span></span></strong></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Breakfast (8:00-8:30AM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cucmber hungcurd sandwich + 1/2 tsp green chutney + 1 orange</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Mid-Meal (11:00-11:30AM)</span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup buttermilk</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Lunch (2:00-2:30PM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup white chana/ fish curry + 1 chapatti + salad</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Evening (4:00-4:30PM)</span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup low fat milk (no sugar)</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Dinner (8:00-8:30PM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup cauliflower vegetable + 1 chapatti + salad</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none">
			<p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Friday</span></span></strong></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Breakfast (8:00-8:30AM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup vegetable poha + 1 cup low fat curd</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Mid-Meal (11:00-11:30AM)</span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup watermelon</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Lunch (2:00-2:30PM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup chana dal + 1 chapatti + salad</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Evening (4:00-4:30PM)</span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup sprouts salad</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Dinner (8:00-8:30PM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup tinda vegetable + 1 chapatti + salad</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none">
			<p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Saturday</span></span></strong></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Breakfast (8:00-8:30AM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup low fat milk with oats + 3-4 strawberries</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Mid-Meal (11:00-11:30AM)</span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup coconut water</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Lunch (2:00-2:30PM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup soybean curry + 1 chapatti + 1/2 cup low fat curd + salad</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Evening (4:00-4:30PM)</span></span></span></span></p>
			</td>
			<td style="background-color:#f7f7f7; border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup fruit salad</span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #cbcbcb; border-left:1px solid #cbcbcb; border-right:1px solid #cbcbcb; border-top:none; width:20%">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Dinner (8:00-8:30PM)</span></span></span></span></p>
			</td>
			<td style="border-bottom:1px solid #cbcbcb; border-left:none; border-right:1px solid #cbcbcb; border-top:none">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1 cup ghia vegetable + 1 chaptti + salad</span></span></span></span></p>
			</td>
		</tr>
	</tbody>
</table>
<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Do&#39;s And Dont&#39;s While following Diet Plan for Obesity</span></span></strong></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Try to avoid these food items if you are following obesity diet plan:</span></span></span></span></p>

<ol>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Rely on soft drinks, sweetened cereals, cookies and cakes, donuts and pastries, chips, and confectionery to get you through the day.</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Don&#39;t skip meals. This will tempt you to snack and DO NOT snack between meals</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Avoid eating quickly. Sit and chew each bite. Try using chopsticks!</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Don&#39;t food shop when you&#39;re hungry.</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Don&#39;t eat more than two or three pieces of fruit per day</span></span></span></span></li>
</ol>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Add these food items if your diet chart if you are following obesity diet plan :</span></span></span></span></p>

<ol>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Eat more vegetables - add them at every meal.</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Drink plenty of water - you can become hungry when thirsty.</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Try eating off smaller plates so as to eat smaller portions</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Exercise between 30 minutes to one hour each day with moderate exercise - brisk walking, team sport, cycling or swimming.</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Be mindful of what you put in your mouth and your shopping trolley.</span></span></span></span></li>
</ol>
<?php
}
}
?>