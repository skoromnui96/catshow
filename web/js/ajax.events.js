(function ($) {

    $('form > a.red-btn').on('click', function () {
        $(this).stop();

        console.log("Valid.name  ==" + Valid.name + "Valid.name  ==" + Valid.email + "Valid.name  ==" + Valid.phone);

        var data = {},
            prevObj = $('form > .input-group > input[name="name"],form > .input-group  > input[name="phone"],form > .input-group  > input[name="email"], span.href ');
        var sendData = function (data) {
            $.ajax({
                url: "/new_opponent",
                success: function (result) {
                    console.log("result = " + result);

                },
                error: function (error) {
                    console.log("error =" + error);
                    var obj = error;
                    for (var key in obj) {
                        console.log("error" + key + " =  " + obj[key]);
                    }
                    ;
                },
                type: 'POST',
                dataType: 'json',
                data: data
            })
        };
        $.each(prevObj, function (ind) {

            !$(this).hasClass('href') ? data[$(this).attr('name')] = $(this).val() : data["href"] = $(this).text();
            // $(this).val()!=""?$(this).css({"background-color":"red","color":"#ffff"}):console.log($(this).val()+" == Ok");
        })
        $(this).attr('href') == "/" ? $('form > p.validation-respons').html("Вы забыли выбрать выставочную систему") : sendData(data);


    });
    $('.dropdown-menu > li > a').on('click', function () {
        //    $(this).stop();
        dataHref = "<span class='href'>" + $(this).attr('data-value') + "</span>";
        $('form > p.validation-respons').html('Нажмите красную кнопку и перейдите на сайт :' + dataHref);
        $('form > a.red-btn').attr("href", "" + $(this).attr('data-value') + "").attr("target", "_blank");
    })
})(jQuery);