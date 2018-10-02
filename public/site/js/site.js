$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



$('.languageSelect').on('click',function (e) {
    e.preventDefault();
    var locale = $(this).data('value');

    $.ajax({
        url: '/language',
        type:'POST',
        data:{locale:locale},
        dataType: 'json',
        success:function (data) {

        },
        error:function (data) {

        },
        complete:function (data) {
            window.location.reload(true);
        }
    });

});
$('.owl-blog').owlCarousel({


    //autoplay: 3000,
   // animateOut: 'fadeOut',

  //  animateOut: 'fadeOut',

    addClassActive: true,
    navigation: true,
    loop:true,
    dots:false,

    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],

    responsive:{
        0:{
            items:1,

        },
        928:{
            items:2,
            margin:15
        },
        1024:{
            items:3,
            margin:15

        }
    }
});
$('.owl-carousel').owlCarousel({

    nav:true,
    loop:true,
    navigation : true,
    dots:false,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    autoplay:3000,

    responsive:{
        0:{
            items:4,
            margin:10,
        },
        600:{
            items:5,
            margin:10,
        },
        1024:{
            items:6,
            margin:10,


        }
    }
});





$('#newsLetterSubmit').submit(function (e) {
    e.preventDefault();

    $.ajax({
        type:'POST',
        url: 'add-newsletter',
        data: $(this).serialize(),
        success:function (data) {
            if(data.fail){
                swal(
                    'Ops!',
                    data.me,
                    'error'
                )
            }else{
                $('.numberAlter').html(data.quantify);
                swal(
                    data.mh,
                    data.mb,
                    'success'
                );
                $('#formHideSuccess').empty();
                $('.newsletter-form').append(successDiv());
            }
        },error:function (data) {
            console.log(data);
            swal(
                'Ops!',
                data.me,
                'error'
            )
        }
    });
});



$('.languageSelect').on('click',function (e) {
    e.preventDefault();
    var locale = $(this).data('value');

    $.ajax({
        url: '/language',
        type:'POST',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data:{locale:locale,
            "_token": $('#token').val()
        },
        dataType: 'json',
        success:function (data) {
            console.log(data)
        },
        error:function (data) {
            console.log(data)
        },
        complete:function (data) {

            window.location.reload(true);
        }
    });

});
console.log(document.body.scrollWidth);
function resizeHeaderOnScroll() {
    const distanceY = window.pageYOffset || document.documentElement.scrollTop,
        shrinkOn = 200,
        headerEl = document.getElementById("mainNav");

    if (distanceY > shrinkOn) {
        headerEl.classList.add("smaller");
    } else {
        headerEl.classList.remove("smaller");
    }
}

window.addEventListener("scroll", resizeHeaderOnScroll);

function onSmaller() {
    if( window.pageYOffset > 200){
        $('#mainNav').addClass('smaller');
    }
}
$(document).ready(function(){
  onSmaller();
});



