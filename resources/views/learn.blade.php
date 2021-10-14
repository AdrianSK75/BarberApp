<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
        @foreach ($timestamps as $timestamp)
                <p> {{ $timestamp }} </p>
        @endforeach

        <script>
            let times = new Array(@json($timestamps));
            console.log(times[0][1]);
        </script>

</body>
</html>
