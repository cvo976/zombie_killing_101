<?php
require "dConnect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Zombie Killing 101</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="styles/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="style/blog.css" rel="stylesheet">

</head>

<body>

<?php
include "menu.php"
?>

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">Killing Zombies 101</h1>
        <p class="lead blog-description">The official guide to surviving the apocalypse. By Daryl Dixon.</p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">

            <div class="blog-post">
              <!--  <h2 class="blog-post-title">Sample blog post</h2>
                <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>-->
<?php
// Get
$sql_select = "SELECT tb_user.firstName,tb_user.lastName, blog.title, blog.summary, blog.content, blog_date FROM tb_user INNER JOIN blog  ON tb_user.user_ID  = blog.user_ID " ;

              // $sql_select = "SELECT * FROM blog";

$blog_entry = $pdo->query($sql_select);

$cntrA = 5;

//$row=$blog_entry->fetch();
while ($row = $blog_entry->fetch())
    // echo ("<b>".$row['title']."</b><br>");
//echo($row['lastName']);
//print_r($row);
{
    echo("<h1>".$row['title']."</h1><br>");
    echo("<strong>".$row['blog_date']."</strong>"."<br>");
    echo("<strong>Summary: </strong>".$row['summary']."<br>");
    echo("<b>Author: </b>" .$row['firstName']."&nbsp;".$row['lastName']);
    echo("<p>".$row['content']."</p>");
}

$cntrA++;
?>

            </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->


        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p>I've survived it all. A crowd of more than 100 walkers coming at you? Been there. Enter a prison with nothing but a crossbow? Done that. Trust a community of living people only to find out they will eat your cooked flesh? Yeah, that happened.
                    <br> The ultimate survivor's guidebook is my gift to you. I'll be posting the best tips on how to survive in a world that wants you dead. Sign up and post your stories. You might just save a life. </p>
            </div>
            <div class="sidebar-module">
                <h4>Archives</h4>

            </div>

        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->

<footer class="blog-footer">
    <p>Blog template built by <a href="https://twitter.com/cvo_design">cvo & SonRae Designs</a>.</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
