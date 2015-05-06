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
<a href="index.php" class="logo"><img src="img/logo.png" alt="Help Centre Healthiness"></a>

<a href="#" class="ou-mobile-menu-toggle closed">Toggle navigation</a>

<nav>
<ul>
<li class="nav-dashboard"><a href="index.php"><i class="fa fa-laptop"></i> Dashboard</a></li>
<li class="nav-reports"><a href="reports.php" class="ou-selected"><i class="fa fa-file-text-o"></i> Reports</a></li>
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
<li><a href="reports.php">Articles</a></li>
<li><a href="reports-cats.php">Categories</a></li>
<li><a href="reports-example-topics.php" class="ou-selected">Topics</a></li>
<li><a href="reports-compare.php">Compare</a></li>
<li><a href="reports-keywords.php">Keywords</a></li>
</ul>

<div class="filters">
<ul class="tabs">
<!--
<li>
<a href="reports-example-topics.php" class="selected">Topics</a>
<ul class="sub">
<li><a href="reports.php">Articles</a></li>
</ul>
</li>
-->
<li>
<a href="reports-example-topics-categories.php" class="selected">Assessments and exams</a>
<ul class="sub">
<li><a href="reports-example-topics.php">All topics*</a></li>
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
<a href="reports-example-topics-categories.php" class="selected">All categories</a>
<ul class="sub">
<li><a href="#">Exams and EMAs</a></li>
<li><a href="reports-example-topics-categories-articles.php">Results*</a></li>
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
<table>
<thead>
<tr>
<th class="row-number"></th>
<th class="page-title">Title</th>
<th class="health">Health <span class="page-title"><img src="img/icon-sort.png" alt=""></span></th>
<th class="feedback">Feedback</th>
<th class="feedback">Pageviews</th>
<th class="feedback">Unique</th>
<th class="feedback">Exit to contacts</th>
<th class="feedback">Time on page</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td><a href="#">Exams and EMAs</a></td>
<td>7% <span class="down"><img src="img/icon-down.png" alt=""> 3%</span></td>
<td><a href="#"><i class="fa fa-comment-o"></i> 13</a></td>
<td>12,093</td>
<td>10,740</td>
<td>40%</td>
<td>0:56</td>
</tr>
<tr>
<td>2</td>
<td><a href="#">Results</a></td>
<td>9% <span class="up"><img src="img/icon-up.png" alt=""> 1%</span></td>
<td><a href="#"><i class="fa fa-comment-o"></i> 5</a></td>
<td>5,294</td>
<td>3,238</td>
<td>32%</td>
<td>1:15</td>
</tr>
<tr>
  <td>3</td>
  <td><a href="#">Assignments</a></td>
  <td>24% <span class="up"><img src="img/icon-up.png" alt=""> 9%</span></td>
  <td><a href="#"><i class="fa fa-comment-o"></i> 9</a></td>
  <td>18,994</td>
  <td>15,583</td>
  <td>51%</td>
  <td>0:22</td>
  </tr>
<tr>
<td>4</td>
<td><a href="#">Revision</a></td>
<td>11% <span class="up"><img src="img/icon-up.png" alt=""> 2%</span></td>
<td><a href="#"><i class="fa fa-comment-o"></i> 2</a></td>
<td>10,048</td>
<td>7,230</td>
<td>11%</td>
<td>0:49</td>
</tr>
<tr>
<td>5</td>
<td><a href="#">Resits and resubmissions</a></td>
<td>15% <span class="up"><img src="img/icon-up.png" alt=""> 5%</span></td>
<td><a href="#"><i class="fa fa-comment-o"></i> 0</a></td>
<td>3,228</td>
<td>2,937</td>
<td>25%</td>
<td>2:11</td>
</tr>
</tbody>
</table>
</div>


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