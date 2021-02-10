<?php
$html = "<div class='marker'>
<table class='mytable'>
    <tr>
        <td class='my_company_logo'><img class='mylogo' src='https://cdn.iconscout.com/icon/free/png-256/ups-282281.png'> </td>
        <td class='my_company_name'>Company Name</td>
    </tr>
    <tr>
    <td colspan='2'><hr></td>
    </tr>
    <tr>
        <td colspan='2' class='my_address_fields'>200 Main Street, Brooklyn, NY 11229</td>
    </tr>
    <tr>
        <td colspan='2' class='my_address_fields'>(347) 576-4951</td>
    </tr>
    <tr>
        <td colspan='2' class='my_address_fields'>(347) 123-4567</td>
    </tr>
    <tr>
        <td colspan='2' class='my_address_fields'><a href='http://myitedu.us'>www.myitedu.us</a></td>
    </tr>
    <tr>
    <td colspan='2'><hr></td>
    </tr>
    <tr>
        <td colspan='2' class='my_address_fields my_more_details'><span>More Details</span></td>
    </tr>
</table>
</div>";

echo $html;
?>

<style>
    .my_more_details span:hover{
        color: #2955bb;
        background-color: #f1e47c;
        margin-top: 10px;
    }
    .my_more_details span{
        color: #f1e47c;
        cursor: pointer;
        border: 1px solid black;
        border-radius: 10px;
        padding: 5px;
        background-color: #2955bb;
    }
    .my_more_details{
        text-align: center;
    }
    td{
        padding: 0px;
        margin: 0px;
    }

    .my_company_logo{
        text-align: right;
    }
    .my_company_name{
        color: #170627;
        font-weight: bolder;
        padding-bottom: 9px;
        font-size: 18px;
        font-family: ui-serif;
    }
    .my_address_fields{
        font-size: 12px;
        text-align: center;
    }
    .mylogo{
        width: 30px !important;
        min-width: 30px !important;
        max-width: 30px !important;
    }
    .mytable{
        width: 99%;
        margin: auto;
        padding: 0px;
        margin: 0px;

    }
    .marker{
        width: 100%;
        height: auto;
        min-height: 180px;
        max-height: 180px;
        background-color: #f7efef;
        border: 1px solid black;
        border-radius: 20px;
        padding: 5px;
        overflow: auto;
        background-image: url("https://slidehunter.com/wp-content/uploads/professional-powerpoint-backgrounds.jpg");
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

</style>
