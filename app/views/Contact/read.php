<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/resources/styleC.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>Messages</title>
</head>

<body id="read">
    <div class="wrapper">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="../Main/index">Landing page</a></li>
                    <li><a href="../Main/about_us">About us</a></li>
                    <li><a href="index">Contact us</a></li>
                    <li><a href="read">See the messages we get</a></li>
                </ul>
            </nav>
        </div>
        <div class="displayedMess">
            <h2>Contact us - messages sent</h2>
            <?php
            foreach ($data as $index => $message) {
                echo "<br><br><div class=\"mssDis\">$message->email<br><br>$message->msg</div><br><br>";
            }
            ?>
        </div>
    </div>
</body>

</html>