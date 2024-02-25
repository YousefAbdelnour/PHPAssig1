<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <h1>Contact Us</h1>
        <div class="menu">
            <ul>
                <li><a href="../Main/index">Landing page</a></li>
                <li><a href="../Main/about_us">About us</a></li>
                <li><a href="index">Contact us</a></li>
                <li><a href="read">See the messages we get</a></li>
            </ul>
        </div>
        <div class="content">
            <h2>Contact Us</h2>
            <p>Wanna reach us? Write your email information and message in the following and then submit.</p>
            <form method="post" action="/Contact/retrieve">
                <label>Email: </label>
                <input name="email" type="text" style="width: 500px;">
                <br><br>
                <label>Message: </label>
                <textarea name="message" style="width: 500px; height: 100px;"></textarea>
                <br><br>
                <input type="submit" value="Send" style="width: 550px; height: 70px;">
            </form>
        </div>
    </div>
</body>

</html>