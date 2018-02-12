jQuery(function ($) {
    $(window).on('load', function () {
        var pagUrl = $(location);
        hrefOfthisPage = pagUrl.attr('href');
        hrefOfthisPage = hrefOfthisPage.split('/');
        hrefOfthisPage = hrefOfthisPage[hrefOfthisPage.length - 1].split('?');
        hrefOfthisPage = hrefOfthisPage[0];
        var hideTheModal = $.cookie('hideTheModal');


        if (!hideTheModal) {
            $('section#adult-modal').modal();
            $('.blocker').css('z-index', '1000');
        }
        ;
        if (hrefOfthisPage == "order-step2") {
            $('table.kv-grid-table').attr('class', 'table table-bordered table-striped');

            console.log("pagUrl = " + hrefOfthisPage)
        }
        ;

        $(' button.like ').on('click',function () {
            this.clicked = this.clicked === undefined ? false : !this.clicked;
            if (!this.clicked) {
                var thisID = $(this).attr('id');
                var slug = $(this).data('id');
                console.log("status = "+thisID);
                $.ajax({
                    url: "/video/like",
                    success: function(result){
                        console.log("result = "+result);
                        $("#counter-like").html(+$("#counter-like").html()+1);
                        $('button.rate-button[id="'+thisID+'"]').children('i').attr('style','color:#D23555;');
                        $("#unlike").attr('disabled',true);

                    },
                    error:function (error) {
                        console.log("error ="+error);
                        var obj =error;
                        for(var key in obj){
                            console.log("error"+key+" =  "+obj[key]);
                        };
                    },
                    type:'POST',
                    dataType:'json',
                    data:{
                        slug:slug,
                        like:thisID!="like"?true:false,
                    }
                });
            } else {
                var thisID = $(this).attr('id');
                var slug = $(this).data('id');
                console.log("status = " + thisID);
                $.ajax({
                    url: "/video/like",
                    success: function (result) {
                        console.log("result = " + result);
                        $("#counter-like").html(+$("#counter-like").html()-1);
                        $('button.rate-button[id="' + thisID + '"]').children('i').attr('style', 'color:none;');
                        $("#unlike").removeAttr('disabled');
                        $(".active").removeClass("active");
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
                    data: {
                        slug: slug/*slug make parse */,
                        likeTwo: thisID != "like" ? true : false,
                    }
                });
            }
        });

        $('button.unlike').on('click',function () {
            this.clicked = this.clicked === undefined ? false : !this.clicked;
            if (!this.clicked) {
                var thisID = $(this).attr('id');
                var slug = $(this).data('id');
                console.log("status = "+thisID);
                $.ajax({
                    url: "/video/like",
                    success: function(result){
                        console.log("result = "+result);
                        $("#counter-unlike").html(+$("#counter-unlike").html()+1);
                        $('button.rate-button[id="'+thisID+'"]').children('i').attr('style','color:#D23555;');
                        $("#like").attr('disabled',true);

                    },
                    error:function (error) {
                        console.log("error ="+error);
                        var obj =error;
                        for(var key in obj){
                            console.log("error"+key+" =  "+obj[key]);
                        };
                    },
                    type:'POST',
                    dataType:'json',
                    data:{
                        slug:slug,
                        unlike:thisID!="unlike"?true:false,
                    }
                });
            } else {
                var thisID = $(this).attr('id');
                var slug = $(this).data('id');
                console.log("status = " + thisID);
                $.ajax({
                    url: "/video/like",
                    success: function (result) {
                        console.log("result = " + result);
                        $("#counter-unlike").html(+$("#counter-unlike").html()-1);
                        $('button.rate-button[id="'+thisID+'"]').children('i').attr('style','color: none;');
                        $("#like").removeAttr('disabled');
                        $(".active").removeClass("active");
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
                    data: {
                        slug: slug,
                        unlikeTwo: thisID != "unlike" ? true : false,
                    }
                });
            }
        });



        $('div.submit > a.close-modal').click(function(){
            console.log(" ==");
            $.cookie('hideTheModal', 'true',{ expires: 30, path: '/' });
        });

    });
    /* Ajax
        $('').on('load', function () {
            $.ajax({
                url: "demo_test.txt",
                success: function(result){

                },
                typeMethod:'POST',
                dataType: 'json',
                data:{ videoId: , like:true , session: $.cookie('_csrf-frontend');}
            });
        });
        */
});