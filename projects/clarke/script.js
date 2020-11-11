$(function(){

    let imgs = new Object();
    imgs['moscow'] = 'https://russianvisaguide.com/wp-content/uploads/2018/10/Things-to-Do-in-Moscow-Russia.jpg';
    imgs['chicago'] = 'https://www.visittheusa.com/sites/default/files/styles/hero_l_x2/public/images/hero_media_image/2018-05/2af94a274ebf7f6716f9b2068595581c.jpeg?itok=67ZqFigS';
    imgs['others'] = 'https://bbqboy.net/wp-content/uploads/2018/09/I-love-Kyiv-sign-Kiev.jpg';

    $("#btn_go").click(function (){
        let city = $("#city_name").val();
        city = city.toLowerCase(city);
        if( typeof imgs[city] === 'undefined' || imgs[city] === null ){
            city = 'others';
        }
       let html = "<img class='img_city' src='"+imgs[city]+"'>";
       $(".second_frame").html(html);
    });

























});