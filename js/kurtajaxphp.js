$('input').on('keypress', function (e) {
    var code = e.which;
    if (code === 13) { //ascii 13 = enter key
        typ = $(this).val();
        e.preventDefault();
        $.get("kurtphp.php", {
            type: typ

        }, function (response) {
            var array = JSON.parse(response);
            alert(response);
            if (response === '') {
                $('span').html('');

            } else {
                var val1 = array[0].mark;
                var val2 = array[0].color;
                var val3 = array[0].type;
                var val4 = array[0].regnr;
                $('#s1').html(val1);
                $('#s2').html(val2);
                $('#s3').html(val3);
                $('#s4').html(val4);
            }
        });
    }
});