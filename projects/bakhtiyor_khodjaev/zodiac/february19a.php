<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<body>
<?php

$today = date('m/d/Y');

$horoscopes1 = [
    'virgo' => [
        'image' => 'https://www.ecomagazine.com/images/Newsletter/0_2019/Week_11-18-19/birdseyeview_ocean.jpg',
        'title' => 'Today Virgos are happy',
        'name' => 'A',
    ],
    'leo' => [
        'image' => 'https://www.ask-oracle.com/wp-content/uploads/2007/12/zodiac_icons-1024x555.png',
        'title' => 'Today Virgos are happy',
        'name' => 'B',
    ],
    'aries' => [
        'image' => 'https://miro.medium.com/max/4000/1*HeWP4W9reXXXLwzHLea1uA.png',
        'title' => 'Today Virgos are happy',
        'name' => 'C',
    ],
    'gemini' => [
        'image' => 'https://cdn.vox-cdn.com/thumbor/qb8VS3zhL0Kv5ZbYZwkJJvaTHhw=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/16018797/1200x1200_PI_horoscope._SX970._CB488496935_._SX970_.jpg',
        'title' => 'Today Virgos are happy',
        'name' => 'D',
    ],
    'libra' => [
        'image' => 'https://cdn1.vectorstock.com/i/1000x1000/09/70/set-simple-zodiac-icons-for-horoscopes-vector-7770970.jpg',
        'title' => 'Today Virgos are happy',
        'name' => 'E',
    ],
];
$horoscopes2 = [
    [
        'image' => 'https://www.ecomagazine.com/images/Newsletter/0_2019/Week_11-18-19/birdseyeview_ocean.jpg',
        'title' => 'Today Virgos are happy',
        'name' => 'X',
    ],
    [
        'image' => 'https://www.ask-oracle.com/wp-content/uploads/2007/12/zodiac_icons-1024x555.png',
        'title' => 'Today Virgos are happy',
        'name' => 'Y',
    ],
];
$horoscopes3 = [
    'virgo' => [
        'image' => 'https://www.ecomagazine.com/images/Newsletter/0_2019/Week_11-18-19/birdseyeview_ocean.jpg',
        'title' => 'Today Virgos are happy',
        'name' => 'A',
    ],
    'leo' => [
        'image' => 'https://www.ask-oracle.com/wp-content/uploads/2007/12/zodiac_icons-1024x555.png',
        'title' => 'Today Virgos are happy',
        'name' => 'A',
    ],
    'aries' => [
        'image' => 'https://miro.medium.com/max/4000/1*HeWP4W9reXXXLwzHLea1uA.png',
        'title' => 'Today Virgos are happy',
        'name' => 'A',
    ],
    'gemini' => [
        'image' => 'https://cdn.vox-cdn.com/thumbor/qb8VS3zhL0Kv5ZbYZwkJJvaTHhw=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/16018797/1200x1200_PI_horoscope._SX970._CB488496935_._SX970_.jpg',
        'title' => 'Today Virgos are happy',
        'name' => 'A',
    ],
    'libra' => [
        'image' => 'https://cdn1.vectorstock.com/i/1000x1000/09/70/set-simple-zodiac-icons-for-horoscopes-vector-7770970.jpg',
        'title' => 'Today Virgos are happy',
        'name' => 'A',
    ],
];
?>
<div class="father">
    <div>
        <select id="horoscope_names" name="horoscope_names">
            <option value="virgo">Virgo</option>
            <option value="leo">Leo</option>
            <option value="other">Other</option>
        </select>
        <input value="<?php echo date('Y-m-d');?>"  data-date-format="YMD" id="pick_date" type="date" name="pick_date">
    </div>
    <table class="table">
        <tr>
            <?php
            foreach ($horoscopes1 as $h1){
            ?>
            <td class="td1">
                <div class="horoscope" data-name="<?php echo $h1['name']?>">
                    <img src="<?php echo $h1['image'];?>">
                </div>
            </td>
            <?php
            }
            ?>

        </tr>
        <tr>
            <td colspan="2" class="td2"><div class="horoscope" data-name="<?php echo $horoscopes2[0]['name']?>">
                    <img src="<?php echo $horoscopes2[0]['image'];?>"></div></td>
            <td colspan="2" class="td2">wefwefwefwef;</td>
            <td class="td2"><div class="horoscope" data-name="<?php echo $horoscopes2[1]['name']?>">
                    <img src="<?php echo $horoscopes2[1]['image'];?>"></div></td>
        </tr>
        <tr>
            <?php
            foreach ($horoscopes3 as $h3){
                ?>
                <td class="td1">
                    <div class="horoscope" data-name="<?php echo $h1['name']?>">
                        <img src="<?php echo $h3['image'];?>">
                    </div>
                </td>
                <?php
            }
            ?>
        </tr>
    </table>
</div>
<style>

    #pick_date{
        display: none;
    }


    .horoscope img{
        width: 100%;
        height: 100%;
    }

    .td > .horoscope {
        background-size: 100% 100%;
    }

    .table th, .table td {
        border: none !important;
    }

    .horoscope {
        width: 50px;
        height: 50px;
        background-color: lightgrey;
        margin: 5px;
    }

    .td2:first-child {
    }

    .td2:last-child {
    }


    .father {
        width: 80%;
        margin: auto;
    }

</style>
<script>
    $(function () {

        $("#horoscope_names").change(function () {
           var val = $(this).val();

           if (val == 'other'){
               $("#pick_date").fadeIn('slow');
           }else{
               $("#pick_date").fadeOut('fast');
           }
        });


        $(".horoscope").click(function () {
            var dateObj = new Date();
            var month = dateObj.getUTCMonth()+1; //months from 1-12
            var day = dateObj.getUTCDate();
            var year = dateObj.getUTCFullYear();

            if (month<10){
                var new_month = '0'+month;
            }

            var default_date = year + "-" + new_month + "-" + day;

            var name = $(this).data('name');
           var pick_date = $("#pick_date").val() || default_date;

          if (pick_date==''){
              pick_date = default_date;
          }

          var parms = {
              'pick_date' : pick_date,
              'name': name
          };
          $.post('february19b.php', parms, function (response) {
              console.log(response);
          });



        });
    });
</script>
</body>
</html>