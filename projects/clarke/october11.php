<?php
$myXMLData =
    "<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>

<to>Jon</to>
<from>Jessica</from>
<heading>Happy Birthday</heading>
<body>WOHOOOO</body>


<to>Jon</to>
<from>Jessica</from>
<heading>Happy Birthday</heading>
<body>WOHOOOO</body>

</note>
";

echo "<pre>";
$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
print_r($xml);
?>