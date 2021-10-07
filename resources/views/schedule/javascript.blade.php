
<script>
    $(function(){
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();

        var maxDate = year + '-' + month + '-' + day;
        $('#date').attr('min', maxDate);
    });
    const timestamp = document.getElementById('viewSchedule');
    const date = document.getElementById('date');
    const hour = document.getElementById('hour');
    var unavailable = [];
    var hours = new Array(), options = new Array();

    let generateHours = () => {
            let length = 0
            for (let i = 9; i < 22; i++) {
                    hours[++length] = (i.toString() + ":00");
                    hours[++length] = (i.toString() + ":30");
            }
            console.log(hours);
    }
    generateHours();


    let setHours = () => {
        for (let i = 1; i < hours.length; i++) {
                options[i] = document.createElement("option");
                options[i].value = hours[i];
                options[i].text = hours[i];
                hour.appendChild(options[i]);
        }
        setTimestamp();
    }
    /*
    let verify = (hourChoice) => {
            for (let i = 0; i < unavailable[date.value].length(); i++)
                    if (unavailable[date.value][i] == hourChoice)
                            return true;
            return false;
    }
    */
    let removeHours = () => {
        for (let i = 1; i < options.length; i++) {
                hour.remove(options[i]);
        }
    }

    let setTimestamp = () => {
        timestamp.value = date.value + " " + hour.value;
        console.log(timestamp.value);
    };
    /*
    let confirmation = () => {
        if (unavailable[date.value].length == 0) {
            unavailable[date.value] = [];
            unavailable[date.value][0] = hour.value;
        } else {
            unavailable[date.value][unavailable[date.value].length++] = hour.value;
        }
        console.log(unavailable[date.value].length);
        removeHours();
        setHours();
    }
    */
</script>
