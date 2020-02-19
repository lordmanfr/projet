<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <h1>are you dare</h1>
    <div class="outer">
        outer, once & none-once
        <div class="middle" target="_blank">
            middle, capture & none-capture
            <a class="inner1" href="https://www.mozilla.org" target="_blank">
                inner1, passive & preventDefault(which is not allowed)
            </a>
            <a class="inner2" href="https://developer.mozilla.org/" target="_blank">
                inner2, none-passive & preventDefault(not open new page)
            </a>
        </div>
    </div>

    <script src="assets/js/app.js"></script>


</body>

</html>