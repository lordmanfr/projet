<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>update css variable <span class="h1">js</span></h1>
    <div class="controls">

        <label for="spacing">spacing:</label>
        <input id="spacing" type="range" name="spacing" min="10" max="200"  value="10" data-sizing="px">

        <label for="blur">blur</label>
        <input id="blur" type="range" name="blur" min="0" max="25" value="10" data-sizing="px">

        <label for="base">base color</label>
        <input id="base" type="color" name="base" value="#ffc600">


        <img src="https://source.unsplash.com/7bwQXzbF6KE/800x500">
    </div>

    <style>
        :root {
            --base: #ffc600;
            --spacing: 10px;
            --blur: 10px;

        }

        img {
            padding: var(--spacing);
            background: var(--base);
            filter: blur(var(--blur));

        }

        .h1 {
            color: var(--base);

        }

        body {
            text-align: center;
            background: #193549;
            color: white;
            font-family: "helvetica neue", sans-serif;
            font-weight: 100;
            font-size: 50px;

        }

        .controls {
            margin-bottom: 50px;


        }

        input {
            width: 100px;

        }
    </style>
    <script>
        const input = document.querySelectorAll(".controls input");

        function handelupdate() {
            const suffix = this.dataset.sizing ||'';
            document.documentElement.style.setProperty(`--${this.name}`, this.value + suffix);
        }
        input.forEach(input => input.addEventListener("change", handelupdate));
        input.forEach(input => input.addEventListener("mousemove", handelupdate));
    </script>






</body>

</html>