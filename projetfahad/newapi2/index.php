<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new</title>
</head>

<body>
    <h1>newAPI2</h1>

    <button class="btn">heeeeeeeeeeere</button>

    <div class="resultat"></div>


    <script>
        document.querySelector(".btn").addEventListener("click", function() {
            fetch('https://api.github.com/users')
                .then(res => res.json())
                .then(function(data) {
                    console.log(data);
                    let output = "";

                    data.forEach(function(post) {
                        output += `
                                <h1>${post.id}</h1>
                                <h1>${post.login}</h1>
                                <h1>${post.avatar_url}</h1>
                                <h2>${post.type}</h2>
                                <img src=${post.avatar_url} />
                                <img src=${post.avatar_url}height="100" width="100">
                                 `;
                        document.querySelector(".resultat").innerHTML = output;

                    })

                })




        })
    </script>

</body>

</html>