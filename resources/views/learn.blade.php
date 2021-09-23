<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
        <?php
            use Carbon\Carbon;

            $dt = Carbon::create(now()->year, now()->month, now()->day, now()->hour, now()->minute);
            $date = 1;
        ?>

        <button onclick = "getDate('<?php echo $dt ?>');" = > transmit spre JS </button>

        <div id = 'buttons'>

        </div>
        <script>

            var getDate = (map) => {
                let dates = new Map();
                dates['09:30'] = map;
                console.log(dates);
            }

            let button = document.createElement('select');
            //button.type = 'button';
            //button.class = 'btn btn-primary';
            //button.value = '9.30';
            let div = document.getElementById('buttons');
            div.appendChild(button);

        </script>
</body>
</html>
