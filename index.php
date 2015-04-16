<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
$author = $_POST['author'];
$description_of_article = $_POST['description_of_article'];
$year_of_publication = $_POST['year_of_publication'];
$number_of_pages = $_POST['number_of_pages'];
$file_size = $_POST['file_size'];

echo $author."<br />".$description_of_article."<br />".$year_of_publication."<br />".$number_of_pages."<br />".$file_size."<br />";

}
?>