$(document).ready(function(){

    // CATEGORY
    var $categ = $(".category-wrapper .container1");
    $categ.click(function(){
        $categ.each(function(){
            $(this).removeClass("category-active");
        });
        $(this).addClass("category-active");
    });


    // PAGINATION
    var $pagi = $(".pagination .number li");
    var last = $pagi.length - 1;
    var first = 0;
    var num = first;

    $(".next").click(function(){
        if(num==last){
            return;
        }

        $pagi.each(function(){
            $(this).removeClass("pagination-active");
        })
        num+=1;
        $pagi.eq(num).addClass("pagination-active");
    });

    $(".prev").click(function(){
        if(num==first){
            return;
        }

        $pagi.each(function(){
            $(this).removeClass("pagination-active");
        })
        num-=1;
        $pagi.eq(num).addClass("pagination-active");
    });

    $pagi.click(function(){
        if(num == $(this).index()){
            return;
        }

        $pagi.each(function(){
            $(this).removeClass("pagination-active");
        })
        num=$(this).index();
        $(this).addClass("pagination-active");
    });

});



