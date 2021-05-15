<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toshmatov's Dictionary</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<body>

<?php
$keyword = $_GET['keyword']??null;
include_once "api.php";
$response = searchWord($keyword);
?>

 <div id="dictionary">

     <div class="search_area">
         <h4>Toshmatov's Dictionary</h4>
         <hr>
         <form>
             <p>Search: <input value="<?php echo $keyword;?>" name="keyword" type="text" placeholder="Your word">
             <button type="submit">Search</button>
             </p>
         </form>
     </div>
     <div class="myresults">
         <table class="table table-bordered">
             <tr>
                 <td colspan="2">
                     <?php echo $response['results'][0]['definition']??null;?>
                 </td>
             </tr>
             <tr>
                 <td>Part of Speech:</td>
                 <td><?php echo $response['results'][0]['partOfSpeech']??null;?></td>
             </tr>
             <tr>
                 <td>Synonyms</td>
                 <td>
                     <ul class="result_ul">
                         <?php
                          $synonyms = $response['results'][0]['synonyms']??[];
                          foreach ($synonyms as $synonym){
                            echo "<li>$synonym</li>";
                          }
                         ?>
                     </ul>

                 </td>
             </tr>
             <tr>
                 <td>Examples</td>
                 <td>
                     <ul class="result_ul">
                         <?php
                         $examples = $response['results'][0]['examples']??[];
                         foreach ($examples as $example){
                             echo "<li>$example</li>";
                         }
                         ?>
                     </ul>
                 </td>
             </tr>
         </table>
     </div>

 </div>

 <style>
     tr:first-child td{
         text-align: center;
     }
     td:last-child{
         text-align: left;
     }
     .result_ul{
         list-style: none;
         position: relative;
         left: -40px;
     }
     #dictionary{
         width: 90%;
         margin: 100px auto;
         background-color: lightyellow;
         text-align: center;
         border-radius: 20px;
         border: 5px solid #5f3030;
         padding: 5px;
     }
     body{

     }
 </style>
</body>
</html>