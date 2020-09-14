<div id="mytable">
    <div id="myform">
        <div class="leftcol mycol">
            <p>Table Name <br><input></p>
            <p>Form Name <br><input></p>
        </div>
        <div class="middlecol mycol">
            <button>Set Prompt Font</button>
            <button>Set Field Font</button>
            <button>Add List Source Table</button>
        </div>
        <div class="rightcol mycol">
            <p>
                I would also like to point out tr:not(:first-of-type) as a potential solution as well, if you're looking for the first instance of a specific selector rather than the first generalized child. – Joshua Burns Oct 12 '13 at 4:15
            </p>
        </div>
    </div>
    <table class="table table-bordered">
        <tr class="first_row">
            <th>&nbsp;</th>
            <th>Import</th>
            <th>Column Name</th>
            <th>Field Name</th>
            <th>Prompt</th>
            <th>Column Type</th>
            <th>Field Type</th>
            <th>Page</th>
        </tr>
        <?php
        for($row=1; $row<20; $row++){
            $field_names = ['Field Name','Tashkent','BMW','HOWDY','SUPPENING'];
            $cars = [
                'https://static.turbosquid.com/Preview/001264/236/2S/_D.jpg',
                'https://i.ytimg.com/vi/L42-aFe8bMo/maxresdefault.jpg',
                'https://carsguide-res.cloudinary.com/image/upload/f_auto,fl_lossy,q_auto,t_cg_hero_large/v1/editorial/2019-Alfa-Romeo-Stelvio-Quadrifoglio-SUV-red-Richard-Berry-1001x565p-%281%29.jpg',
                'https://media.ed.edmunds-media.com/bmw/m6/2017/oem/2017_bmw_m6_coupe_base_fq_oem_1_815.jpg',
                'https://static.cargurus.com/images/site/2012/02/27/06/02/1998_toyota_supra-pic-5576793256549915341-1600x1200.jpeg',
            ];
            ?>
            <tr>
                <td>
                    <img class="cars" src="<?php echo $cars[rand(0, count($cars)-1)]?>">
                </td>
                <td><input type="checkbox"></td>
                <td><?php echo str_shuffle("Jon Toshmatov MYITEDU");?></td>
                <td><?php echo $field_names[rand(0, count($field_names)-1)]?></td>
                <td>Prompt</td>
                <td>Column Type</td>
                <td>
                    <select>
                        <option>Text</option>
                        <option>Numbers</option>
                        <option>Boolean</option>
                        <option>Arrays</option>
                        <option>Float</option>
                        <option>Object</option>
                    </select>
                </td>
                <td><?php echo $row?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
<style>
    .cars{
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 1px solid black;
        box-shadow: 3px 3px 3px 3px #5f5e5e;
    }
    #myform button:first-child:hover{
        background-color: #f37300;
    }
    #myform button:nth-child(2):hover{
        background-color: #5ec30a;
    }
    #myform button:last-child:hover{
        background-color: #028177;
    }

    #myform button{
        width: 180px;
        height: 30px;
        background-color: lightgrey;
        border: 1px solid #5f5f5f;
        border-radius: 10px;
        margin-top: 5px;
    }

    #myform{
        font-size: 0.8em;
        background: #efd77d;
        display: table;
    }


    .leftcol input{
        border: 1px solid #6d0046;
        border-radius: 6px;
    }

    .leftcol{
        width: 25%;

    }
    .middlecol{
        width: 25%;
        border-left: 1px solid darkgray;
    }

    .rightcol p{
        margin-top: 30px;
    }

    .rightcol{
        width: 50%;
        border-left: 1px solid darkgray;
    }

    .mycol{
        display: inline-block;
        float: left;
        height: 111px;
        text-align: center;
    }

    #mytable table{
        background-color: white;
    }
    #mytable{
        width: 90%;
        height: 450px;
        margin: 40px auto;
        border: 1px solid black;
        overflow: auto;
        background: #efd77d;
    }
    tr:first-child, td:first-child{
        background-color: lightgrey;
    }
    td{
        text-align: center;
    }

    tr:nth-child(even){
        background-color: #f8f4f4;
    }

    tr:not(:first-child):hover{
        background-color: #efd77d;
        cursor: pointer;
    }

    th{
        border-bottom: 1px solid black !important;
    }
    td:first-child{
        border-right: 1px solid black !important;
    }
</style>