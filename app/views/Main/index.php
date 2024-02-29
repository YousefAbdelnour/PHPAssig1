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
                <li><a href="index">Landing page</a></li>
                <li><a href="about_us">About us</a></li>
                <li><a href="../Contact/index">Contact us</a></li>
                <li><a href="../Contact/read">See the messages we get</a></li>
            </ul>
        </div>
        <div class="content">
            <div id="desc">
            <h1>Home</h1>
            <p>Welcome to our web application.</p>
            <p>Our goal is to help our client start their buisness, but at<br>the same time help people by making their life easier.<br>We plan on making a web application that provides <br>anyone with access to maids to keep their <br>buisness/homes clean.</p>
            </div>
        </div>
        <div id="count">
            <p id="views"></p>
        </div>
    </div>
</body>

</html>