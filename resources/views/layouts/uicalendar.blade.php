<html>
    <head>
        <title> {{ config('app.name', 'Laravel') }} </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
                @use postcss-preset-env;
                @import url(https://weloveiconfonts.com/api/?family=fontawesome);

                *[class*="fontawesome-"]:before {
                font-family: 'FontAwesome', sans-serif;
                }

                /* ---------- GENERAL ---------- */

                body {
                    background: #f9f9f9;
                    color: #0e171c;
                display: grid;
                    font: 300 100%/1.5em 'Lato', sans-serif;
                    margin: 0;
                min-height: 100vh;
                place-items: center;
                }

                a {
                    text-decoration: none;
                }

                h2 {
                    font-size: 2em;
                    line-height: 1.25em;
                    margin: .25em 0;
                }

                h3 {
                    font-size: 1.5em;
                    line-height: 1em;
                    margin: .33em 0;
                }

                table {
                    border-collapse: collapse;
                    border-spacing: 0;
                }

                .container {
                    width: 510px;
                }

                /* ---------- CALENDAR ---------- */

                .calendar {
                    text-align: center;
                }

                .calendar header {
                    position: relative;
                }

                .calendar h2 {
                    text-transform: uppercase;
                }

                .calendar thead {
                    font-weight: 600;
                    text-transform: uppercase;
                }

                .calendar tbody {
                    color: #7c8a95;
                }

                .calendar tbody td:hover {
                    border: 2px solid #00addf;
                }

                .calendar td {
                    border: 2px solid transparent;
                    border-radius: 50%;
                    display: inline-block;
                    height: 4em;
                    line-height: 4em;
                    text-align: center;
                    width: 4em;
                }

                .calendar .prev-month,
                .calendar .next-month {
                    color: #cbd1d2;
                }

                .calendar .prev-month:hover,
                .calendar .next-month:hover {
                    border: 2px solid #cbd1d2;
                }

                .current-day {
                    background: #00addf;
                    color: #f9f9f9;
                }

                .event {
                    cursor: pointer;
                    position: relative;
                }

                .event:after {
                    background: #00addf;
                    border-radius: 50%;
                    bottom: .5em;
                    display: block;
                    content: '';
                    height: .5em;
                    left: 50%;
                    margin: -.25em 0 0 -.25em;
                    position: absolute;
                    width: .5em;
                }

                .event.current-day:after {
                    background: #f9f9f9;
                }

                .btn-prev,
                .btn-next {
                    border: 2px solid #cbd1d2;
                    border-radius: 50%;
                    color: #cbd1d2;
                    height: 2em;
                    font-size: .75em;
                    line-height: 2em;
                    margin: -1em;
                    position: absolute;
                    top: 50%;
                    width: 2em;
                }

                .btn-prev:hover,
                .btn-next:hover {
                    background: #cbd1d2;
                    color: #f9f9f9;
                }

                .btn-prev {
                    left: 6em;
                }

                .btn-next {
                    right: 6em;
                }
        </style>
    </head>

    <body>
        @yield('ui');
    </body>
</html>
