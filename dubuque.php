<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<body>

<img class="class1 class2 classother" title="This is an image of Dubai" data-id="99" src="https://cdn.britannica.com/15/189715-050-4310222B/Dubai-United-Arab-Emirates-Burj-Khalifa-top.jpg">


<script>
    $(function () {
        $("img").click(function () {
           var src = $(this).attr('src');
           var id = $(this).data('id');
           var title = $(this).attr("title");
           var myclass = $(this).attr('class');
           document.write(myclass);
        });
    })
</script>


</body>
</html>