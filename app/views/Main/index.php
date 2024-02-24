<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function load() {
            var xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var responseObject = JSON.parse(xhr.responseText);
                    document.getElementById("views").innerHTML = responseObject.count + " page visits";
                }
            };
            xhr.open("GET", "../../../resources/counter.txt", true);
            xhr.send();
        }
    </script>
    <title>Assignment 1</title>
</head>

<body onload="load()">
    <div class="wrapper">
        <div class="menu">
            <ul>
                <li><a href="index.php">Landing page</a></li>
                <li><a href="about_us.php">About us</a></li>
                <li><a href="../Contact/index.php">Contact us</a></li>
                <li><a href="../Contact/read.php">See the messages we get</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Landing page</h1>
            <p>Welcome to this web application.</p>
            <p>We aim to please.</p>
        </div>
        <div id="count">
            <p id="views"></p>
        </div>
    </div>
</body>

</html>