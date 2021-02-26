// $("div").click(function(event){
//     $("div").removeClass("active");
//     $(this).addClass("active");
// });
$(document).ready(function(){

    const category_links = $('.category-link');

    $('.category-link').on('click',function(){
        $.each(category_links,function(index,link){
            $(link).removeClass('active');
        })
        $(this).addClass('active');
        
        $.ajax({url: "demo_test.txt", success: function(result){
            $("#div1").html(result);
          }});
    })


})
