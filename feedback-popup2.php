<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />

<title>Feedback Popup 2 - Healthiness App</title>

<?php include('inc/head.php'); ?>

<style>
body.popup {margin-top: 150px;}
</style>

</head>

<body class="feedback popup">

<div id="ou-org">

<a class="ou-skip" href="#ou-content"><i class="fa fa-arrow-circle-down"></i> Skip to content</a>


<div id="ou-site">

<div id="ou-site-body">

<div id="ou-page">

<div id="ou-region0">

</div> <!-- end ou-region0 -->

<div id="ou-region1">

<div class="feedback-popup">

<div class="feedback-popup-header">

<h2>Submitting an EMA</h2>

<ul class="feedback-list-details">
<li>Matthew Thompson</li>
<li>PX1298327</li>
<li>04/06/2015 - 11:15am</li>
</ul>

<a class="close" href="feedback.php"><i class="fa fa-times-circle"></i></a>

</div> <!-- end feedback-popup-header -->

<div class="feedback-popup-content">

<ul class="ou-tabs">
<li><a href="feedback-popup2.php" class="ou-selected">Actions</a></li>
<li><a href="#">Notes <i class="fa fa-check"></i></a></li>
</ul>

<form action="feedback-popup2a.php">
<table class="ou-table-plain">
<tr>
<th>Urgency</th>
<td>
<select name="urgency">
  <option>None</option>
  <option>ASAP</option>
  <option selected="selected">High</option>
  <option>Medium</option>
  <option>Low</option>
</select>
</td>
</tr>

<tr>
<th>Status</th>
<td>
<select name="status">
  <option>Not started</option>
  <option>In progress</option>
  <option selected="selected">Complete</option>
</select>
</td>
</tr>

<tr>
<th>Assigned to</th>
<td>
<select name="assigned">
  <option>Nobody</option>
  <option>Stephen Turvey</option>
  <option selected="selected">Sam Leicester</option>
  <option>Ben Gurney</option>
  <option>Yasith Malinga</option>
</select>
</td>
</tr>

<tr>
<th class="colour2">What was done?</th>
<td><textarea name="complete-note" id="add-complete-note" cols="40" rows="2" style="margin-bottom:0">Added appropriate signposting to the Submitting a TMA article</textarea>
</td>
</tr>

<tr>
<td colspan="2"><span class="colour2">Note: You cannot reopen this feedback ticket once it has been marked as complete.</span></td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="Update"></td>
</tr>

</table>
</form>


</div> <!-- end feedback-popup-content -->

</div> <!-- end feedback-popup -->




</div> <!-- end ou-region1 -->


</div> <!-- end ou-page -->

</div> <!-- end ou-site-body -->

<div id="ou-site-footer">

</div> <!-- end ou-site-footer -->



</div> <!-- end ou-site -->




<div class="ou-footer">
    
</div> <!-- end ou-footer -->



</div> <!-- end ou-org -->


<?php include('inc/foot.php'); ?>

</body>
</html>