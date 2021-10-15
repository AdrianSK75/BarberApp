<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
     const timestamp = document.getElementById('viewSchedule');
     const date = document.getElementById('date');
     const hour = document.getElementById('hour');
     var timestamps = @json($timestamps);
     var hours = new Array(), options = new Array();
    
    $(function() {
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();

        var maxDate = year + '-' + month + '-' + day;
        $('#date').attr('min',  maxDate);
    });
   


    let generateHours = () => {
            let length = 0
            for (let i = 9; i < 22; i++) {
                    if (i < 10) {
                        hours[++length] = "0" + (i.toString() + ":00");
                        hours[++length] = "0" + (i.toString() + ":30");
                    } else {
                        hours[++length] = (i.toString() + ":00");
                        hours[++length] = (i.toString() + ":30");
                    }
            }
    }
    generateHours();

    let initialization = () => {
            options = new Array();
            $('#hour').empty();
            setHours();
    }

    let setHours = () => {
        for (let i = 1; i < hours.length; i++) {
                let d1 = new Date(), d2 = new Date(date.value + " " + hours[i] + ":00");
                let d3 = date.value + " " + hours[i] + ":00";
                if (d1 < d2 && !timestamps.includes(d3)) {
                    options[i] = document.createElement("option");
                    options[i].value = hours[i];
                    options[i].text = hours[i];
                    hour.appendChild(options[i]);
                }
        }
        setTimestamp();
    }

    let setTimestamp = () => {
        timestamp.value = date.value + " " + hour.value;
    };

</script>
