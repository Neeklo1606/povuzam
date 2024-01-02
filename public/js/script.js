var resultAjax

function noty(type,text){
    new Noty({
        theme: 'relax',
        timeout: 2000,
        layout: 'topCenter',
        type: type,
        text: text
    }).show();
}
function getAjax(obj){
    $.ajax({
        url: '/',
        method: 'post',
        async: false,
        dataType: 'json',
        data: obj,
        success: function(data){
            console.log(data)
            if (data.noty !== undefined){
                // noty(data.success,data.message);
            }
            resultAjax  = data
        },
        error: function (error){
            console.log(error)
        }
    });


    return resultAjax
}
var slideBlock;
$(document).ready(function (){
    var $height = $(window).height(); // Высота экрана
    var $width = $(window).width(); // Ширина экрана


    if ($width <= 639){
        $('.top-container').append($('.btn-block'))
    }
    if ($width > 959){

        $('.bonet').hover(function (){
            $(this).animate({
                top:"-200px"
            })
        },function (){
            $(this).animate({
                top:"-160px"
            })
        })

        $('.suitcase').hover(function (){
            $(this).animate({
                top:"200px",
                left: '-70px'
            })
        },function (){
            $(this).animate({
                top:"215px",
                left: '-100px'
            })
        })
        $('.map').hover(function (){
            $(this).animate({
                top:"170px",

            })
        },function (){
            $(this).animate({
                top:"200px",

            })
        })
        $('.phone-activ').hover(function (){
            $(this).animate({
                left:"40px",

            })
        },function (){
            $(this).animate({
                left:"0px",

            })
        })
        $('.nav-list li').hover(function (){
            $(this).animate({
                top: '-10px'
            }).css({color:"#fd6c70"})
        },function (){
            $(this).animate({
                top: '0px'
            }).css({color: '#0d8bbc'})
        })
        $('.search img').hover(function (){
            $(this).animate({
                width: '45px',

            })
        },function (){
            $(this).animate({
                width: '38px',

            })
        })
        // $('.cards-images ').css({height:$('.cards-images img:eq(0)').height(),width:$('.cards-images img:eq(0)').width()})
    }else {
        $('.sticky .show').prepend($('.universities-search-block:eq(0)')).show()
    }
    $('.universities-search-container-mob').on('click',function (){
        $('.nav-towns-block').animate({
            left:0
        })
            $('body').addClass('overflow')

    })
    $('.sticky svg').on('click',function (){
        $('body').removeClass('overflow')
        $('.nav-towns-block').animate({
            left:'-120%'
        })
    })
        var img_prev
    $('.cards-images').hover(function (){



        bg  = $(this).find('.prev-to').css('background-image')
        img_to = bg.replace('url(','').replace(')','').replace(/\"/gi, "");

         img_prev = $(this).find('.prev').css('background-image')
        img_prev = img_prev.replace('url(','').replace(')','').replace(/\"/gi, "");
        $(this).find('.prev').css('background-image','url('+img_to+')')

    }, function (){
        $(this).find('.prev').css('background-image','url('+img_prev+')')
    })


    $('.search').on('click',function (){
        $('#search').slideDown()
    })

    $('.closed').on('click', function (){
        $('#search').slideUp()
    })
    $('.search-form-btn').on('click', function (){
        searchFormBtn()
    })
    $('.btn-nav-burger').on('click', function (){
        $('body').toggleClass('overflow')
        $('.nav').toggleClass('nav-active')
    $('.nav-active').fadeIn()
             $(this).find('svg').toggleClass('active')


    })


    $(document).on('click','.list-cards-delete',function (){
        console.log($('[data-id-card='+$(this).parent().attr('data-id')+']').find('.favourites-img').removeClass('favourites-img--active'))
        if (property.find(item => item.favourites === $(this).parent().attr('data-id') )){
            property =  property.filter(item => item.favourites !== $(this).parent().attr('data-id'))

            getAjax({subject:'setPropertyUser',property:property,token:$('input[name=_token]').val()})
        }
        listCards()
    })
function listCards(){
return false;
    if (property.length != 0){
        $('.hint').text(property.length)
    }else {
        $('.icon-block').removeClass('icon-block--active')
        $(this).removeClass('favourites-img--active')
        $('.favourites-block').removeClass('icon-block ').fadeOut(200)
    }
     $('.list-cards').empty()
    str = ''
    if (property.length != 0){


        $.each(property,function (index,value){

            title = value.title
            img_to =value.img
            console.log(value)
            console.log(index)
            console.log(title)
            console.log(img_to)
            str += "<li data-id='"+value.favourites+"'>\n" +
                "                <div class='list-cards-img' style='background-image: url("+img_to+") '>\n" +
                "\n" +
                "                </div>\n" +
                "                <div class='list-cards-block'>\n" +
                "                    <div class='list-cards-name'>\n" +
                "                        "+title+"\n" +
                "                    </div>\n" +
                "                    <div class='list-cards-btn'>\n" +
                "                        <button>Забронировать</button>\n" +
                "                    </div>\n" +
                "                </div>\n" +
                "\n" +
                "                <div class='list-cards-delete'>\n" +
                "                    <img src='/files/img/arrows_circle_remove.svg' alt=''>\n" +
                "                </div>\n" +
                "            </li>"
        })

    }else{
        $('.block-container').animate({
            right:'-100%'
        })
        $('.fade ').hide()
        $('body').removeClass('overflow')
    }
     $('.list-cards').append(str)
}

    // $.each(property,function (index,value){
    //     $('[data-id-card='+value.favourites+']').find('.favourites-img ').addClass('favourites-img--active')
    //     if (property.length != 0){
    //         $('.hint').text(property.length)
    //         $('.favourites-block').addClass('icon-block ').fadeIn(200)
    //         listCards()
    //     }
    //
    // })
    $('.favourites-img').on('click',function (){

        $('.icon-block').toggleClass('icon-block--active')
        $(this).toggleClass('favourites-img--active')
        $('.favourites-block').addClass('icon-block ').fadeIn(200)

        if (property.find(item => item.favourites === $(this).closest('.cards').attr('data-id-card') )){
            property =  property.filter(item => item.favourites !== $(this).closest('.cards').attr('data-id-card'))
        }else {
            i = $(this).closest('.cards').find('.cards-images .prev').css('background-image')
            i = i.replace('url(','').replace(')','').replace(/\"/gi, "");
            $(this).find('.prev').css('background-image','url('+img_to+')')
            property.push({favourites:$(this).closest('.cards').attr('data-id-card'),title:$(this).closest('.cards').find('.cards-title').text(),img:i})
        }

        listCards()
        getAjax({subject:'setPropertyUser',property:property,token:$('input[name=_token]').val()})

    })
    $('.favourites-block').on('click',function (){
        slideBlock = 'favourites-slide-block'
        $('.block-container').animate({
            right:'0%'
        })
        $('.fade,.favourites-slide-block').show()
        $('body').addClass('overflow')
       console.log(property)
    })
    $('.closed-slide-block').on('click',function (){
        $('.block-container').animate({
            right:'-100%'
        })
        $('.fade ').hide()
        $('body').removeClass('overflow')
        $('.'+slideBlock).hide()
    })


    var $cards_title = $('.cards-title'),maxH = 0

    $cards_title.each(function (){
        maxH = ( $(this).height() > maxH ) ? $(this).height() : maxH;
    })
    $cards_title.height(maxH)
    var $cards_description = $('.cards-description'),maxH = 0

    $cards_description.each(function (){
        maxH = ( $(this).height() > maxH ) ? $(this).height() : maxH;
    })
    $cards_description.height(maxH)




    function searchFormBtn(){
        alert('function searchFormBtn()')
    }
})
