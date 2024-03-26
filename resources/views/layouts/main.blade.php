<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            font-family: sans-serif;
        }

        a {
            text-decoration: none;
        }

        body {
            margin: 0 auto;
            width: 900px;
        }

        input {
            display: block;
            margin-bottom: 10px;
        }

        .title-app {
            margin: 20px 0;
            padding: 10px 0;
            color: white;
            font-weight: 600;
            text-align: center;
            background-color: indianred;
            border-radius: 5px;
        }

        .btn {
            display: block;
            padding: 5px;
            margin-bottom: 10px;
            width: fit-content;
            background: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-create {
            color: white;
            background-color: dodgerblue;
        }

        .btn-back {
            color: white;
            background-color: #4a5568;
        }

        .btn-delete {
            color: white;
            background-color: crimson;
        }

        .btn-update {
            color: white;
            background-color: darkcyan;
        }

        .post-list {
            display: block;
            width: fit-content;
            margin: 10px 0;
        }
    </style>
</head>
<body>
<div class="title-app">To do list</div>
@yield('content')
</body>
</html>
