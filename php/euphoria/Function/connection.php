<?php
    // Make connection to database
    $connection = mysqli_connect("mysql","rakhsas","root","euphoria");

    // Show error messsage if connection is not established
    if (mysqli_connect_errno())
        die ("<script>alert('Unable to connect DB!')</script>");
?>