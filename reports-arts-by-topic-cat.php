<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />

<title>Reports - Healthiness App</title>

<?php include('inc/head.php'); ?>

</head>

<body class="reports">

<div id="ou-org">

<a class="ou-skip" href="#ou-content"><i class="fa fa-arrow-circle-down"></i> Skip to content</a>

<div id="ou-header" class="ou-grid">

<div class="ou-header-content">
<a href="index.php" class="site-logo">Help Centre Healthiness</a>

<a href="#" class="ou-mobile-menu-toggle closed">Toggle navigation</a>

<nav>
<ul>
<li class="nav-dashboard"><a href="index.php"><i class="fa fa-home"></i> Dashboard</a></li>
<li class="nav-reports"><a href="reports.php" class="ou-selected"><i class="fa fa-bar-chart"></i> Reports</a></li>
<li class="nav-feedback"><a href="feedback.php"><i class="fa fa-comment-o"></i> Feedback</a></li>
<li class="nav-fullscreen"><a href="full-screen.php"><i class="fa fa-expand"></i> Full Screen</a></li>
<li class="nav-help"><a href="http://www2.open.ac.uk/students/help"><i class="fa fa-external-link"></i> Help Centre</a></li>
<li class="nav-search">
<form>
<fieldset>
<label for="site-search" class="ou-hide">Search app</label>
<input type="search" id="site-search">
<button><span class="ou-hide">Submit</span></button>
</fieldset>
</form>
</li>
</ul>
</nav>

</div>

</div> <!-- end ou-header -->

<div id="ou-site">

<div id="ou-site-header">

<div class="ou-site-header-content">

<h1>Reports</h1>

</div> <!-- end ou-site-header-content -->

</div> <!-- end ou-site-header -->

<div id="ou-site-body">

<div id="ou-page">

<div id="ou-region0">

</div> <!-- end ou-region0 -->

<div id="ou-region1">

<div id="ou-content" class="ou-content">

<ul class="ou-tabs">
<li><a href="reports.php">Topics</a></li>
<li><a href="reports-cats.php">Categories</a></li>
<li><a href="reports.php" class="ou-selected">Articles</a></li>
<li><a href="reports-compare.php">Compare</a></li>
<li><a href="reports-searches.php">Popular searches</a></li>
</ul>

<div class="filters">
<ul class="tabs">

<li>
<a href="reports-arts-by-topic.php" class="selected">Assessments and exams</a>
<ul class="sub">
<li><a href="reports.php">All topics*</a></li>
<li><a href="#">Changes and problems while you study</a></li>
<li><a href="#">Computing help</a></li>
<li><a href="#">Library</a></li>
<li><a href="#">Planning, enrolling and paying for studies</a></li>
<li><a href="#">Policies and complaints</a></li>
<li><a href="#">Services for disabled students</a></li>
<li><a href="#">Study skills</a></li>
<li><a href="#">Support and resources while you study</a></li>
<li><a href="#">Tutorials and residential schools</a></li>
<li><a href="#">Your career</a></li>
<li><a href="#">Completing your studies</a></li>
</ul>
</li>

<li>
<a href="reports-arts-by-topic-cat.php" class="selected">Results</a>
<ul class="sub">
<li><a href="reports-arts-by-topic.php">All categories*</a></li>
<li><a href="#">Exams and EMAs</a></li>
<li><a href="#">Assignments</a></li>
<li><a href="#">Revision</a></li>
<li><a href="#">Resits and resubmissions</a></li>
</ul>
</li>


<li>
<a href="#" class="selected">Last 30 days</a>
<ul class="sub">
<li><a href="#">Last 60 days</a></li>
<li><a href="#">All time</a></li>
<li><a href="#">Specify dates</a></li>
</ul>
</li>

</ul>
</div>



<div class="ou-table-wrap">
<table summary="Articles in the Results category of the Assessments and exams topic">
<?php include('inc/table-thead.php'); ?>
<tbody>
<tr>
<td>1</td>
<td><a href="reports-article-info.php">Estimating your module results*</a></td>
<td>15% </td>
<td><span class="down"><img src="img/icon-down.png" alt=""> 1%</span></td>
<td><a href="#">17</a></td>
<td>10 (25%)</td>
<td>30 (75%)</td>
<td>12,093</td>
<td>10,740</td>
<td>40%</td>
</tr>
<tr>
<td>2</td>
<td><a href="#">Reflecting on your module results</a></td>
<td>19% </td>
<td><span class="up"><img src="img/icon-up.png" alt=""> 6%</span></td>
<td><a href="#">11</a></td>
<td>40 (40%)</td>
<td>60 (60%)</td>
<td>5,294</td>
<td>3,238</td>
<td>32%</td>
</tr>
<tr>
  <td>3</td>
  <td><a href="#">What happens if I fail my module?</a></td>
  <td>24% </td>
  <td><span class="down"><img src="img/icon-down.png" alt=""> 5%</span></td>
  <td><a href="#">9</a></td>
  <td>10 (25%)</td>
  <td>30 (75%)</td>
  <td>18,994</td>
  <td>15,583</td>
  <td>51%</td>
  </tr>
<tr>
<td>4</td>
<td><a href="#">Your module results</a></td>
<td>26% </td>
<td><span class="up"><img src="img/icon-up.png" alt=""> 9%</span></td>
<td><a href="#">2</a></td>
<td>40 (40%)</td>
<td>60 (60%)</td>
<td>10,048</td>
<td>7,230</td>
<td>11%</td>
</tr>
</tbody>
</table></div>



<hr>

<ul class="ou-icon-links">

<li><a href="#"><i class="fa fa-envelope-o colour0"></i> Email this table</a></li>

<li><a href="#"><i class="fa fa-download colour1"></i> Download this table</a></li>

</ul>







</div> <!-- end ou-content -->

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