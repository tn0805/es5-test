<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test ajax</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div id="stories" class="container">
        <h2 class="text-center" style="color:darkcyan">500 top and new stories</h2>
    </div>
    <script id="entry-template" type="text/x-handlebars-template">
        <div class="entry card">
            <div class="card-body">
                <h4 class="card-title"><a href="{{url}}"><div style="color:darkslategray">{{title}}</div></a></h1>
                <div class="card-text">
                <p>The story's score: <strong>{{score}}</strong>, post by: <strong>{{by}}</strong></p>
                <span>{{descendants}} comments.</span>
                </div>
            </div>
        </div>
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="handlebars-v4.4.3.js"></script>
    <script src="test.js"></script>
</body>


</html>