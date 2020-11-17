<!DOCTYPE html>
<html>
<head>
    <title>MYITEDU Chat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/scripts.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
<body>
<?php
date_default_timezone_set("America/New_York");
include_once "connectdb.php";
$owner_user_id = $_GET['f']??null;
$to_user_id = $_GET['t']??null;
if (empty($owner_user_id) || empty($to_user_id)){
    exit("Either to_user or from_user is missing");
}
$sql = "SELECT c.id, c.from_user_id, c.to_user_id, c.message, c.created_at, c.read_at, c.status,
u.first_name, u.last_name, u.email, u.avatar, u.name
FROM chats AS c
JOIN users AS u
ON c.from_user_id = u.id
WHERE (c.to_user_id = $owner_user_id AND c.from_user_id = $to_user_id ) OR (c.to_user_id = $to_user_id  AND c.from_user_id = $owner_user_id);";
$messages = $db->sql($sql);

$sql = "SELECT u.id, u.name, u.avatar, c.from_user_id, c.to_user_id, c.message 
FROM users AS u, chats AS c 
WHERE (u.id = c.from_user_id OR u.id = c.to_user_id) and u.id != $owner_user_id
GROUP BY name;";
$users = $db->sql($sql);

$sql = "SELECT id, name, avatar FROM users WHERE id= $owner_user_id OR id=$to_user_id;";
$owners = $db->sql($sql);
$owner = [];
foreach ($owners as $item){
    $owner[$item['id']] = $item;
}
$host = $owner[$owner_user_id];
$guest = $owner[$to_user_id];

/*
echo "<pre>";

print_r($msg);
echo "</pre>";
exit;
*/
?>
<div class="container-fluid" id="mychat">
    <div id="myheader">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img class="logo" src="/img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Videos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Classroom
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Homeworks</a>
                            <a class="dropdown-item" href="#">Video Recording</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Your codes</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Slack</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
    <div class="row justify-content-center h-100">
        <div class="chat_left chat">
            <div class="card mb-sm-3 mb-md-0 contacts_card">
                <div class="card-header">
                    <div class="input-group">
                        <input id="inpt_user_search" type="text" placeholder="Search..." name="" class="form-control search">
                        <div class="input-group-prepend">
                            <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                        </div>
                    </div>
                </div>
                <div class="card-body contacts_body">
                    <ui class="contacts">

                        <?php foreach ($users as $user){
                            $active_class = null;

                            if ($user['id'] == $to_user_id){
                                $active_class = "active";
                            }

                            ?>
                        <li class="user_list <?php echo $active_class;?>" data-user_id="<?php echo $user['id']; ?>">
                            <div class="d-flex bd-highlight">
                                <div class="img_cont">
                                    <img src="<?php echo $user['avatar']; ?>"
                                         class="rounded-circle user_img">
                                    <span class="online_icon"></span>
                                </div>
                                <div class="user_info">
                                    <?php
                                    echo "<span>{$user['name']}</span>";
                                    echo "<span></span>";
                                    echo "<p>{$user['name']} is online</p>";
                                    ?>
                                </div>
                            </div>
                        </li>
                        <?php
                        }
                        ?>


                    </ui>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
        <div class="chat_right chat">
            <div class="card">
                <div class="card-header msg_head">
                    <div class="d-flex bd-highlight">
                        <div class="img_cont">
                            <img title="<?php echo $host['name'];?>" src="<?php echo $host['avatar'];?>"
                                 class="rounded-circle user_img">
                            <span class="online_icon"></span>
                        </div>
                        <div class="user_info">
                            <span>Chat with <?php echo $guest['name'];?></span>
                            <p>1767 Messages</p>
                        </div>
                        <div class="video_cam">
                            <span><i class="fas fa-video"></i></span>
                            <span><i class="fas fa-phone"></i></span>
                        </div>
                    </div>
                    <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                    <div class="action_menu">
                        <ul>
                            <li><i class="fas fa-user-circle"></i> View profile</li>
                            <li><i class="fas fa-users"></i> Add to close friends</li>
                            <li><i class="fas fa-plus"></i> Add to group</li>
                            <li><i class="fas fa-ban"></i> Block</li>
                            <li id="btn_clear_chat"><i class="fas fa-bank"></i>Clear Chat</li>
                        </ul>
                    </div>
                </div>
                <div class="card-body msg_card_body">
                    <?php
                    foreach ($messages as $message) {
                        //8:40 AM, Today
                        $sent_day= date('d', strtotime($message['created_at']));
                        $today = date('d');

                        $date1=date_create(date('Y-m-d'));
                        $date2=date_create(date('Y-m-d', strtotime($message['created_at'])));
                        $diff=date_diff($date1,$date2);
                        $timestamp = $message['created_at'];
                        if ($diff->days==0){
                            $hour = date("h:i A", strtotime($message['created_at']));
                            $timestamp = "$hour, Today";
                        }
                        if ($diff->days==1){
                            $hour = date("h:i A", strtotime($message['created_at']));
                            $timestamp = "$hour, Yesterday";
                        }
                    if ($message['from_user_id'] == $to_user_id && $message['to_user_id'] == $owner_user_id) {

                            ?>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img data-toggle="tooltip" data-placement="top"  title="<?php echo $message['name']?>" src="<?php echo $message['avatar']?>"
                                         class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                    <?php echo $message['message'];?>
                                    <span class="msg_time"><?php echo $timestamp;?></span>
                                </div>
                            </div>
                            <?php
                        }
                        if ($message['to_user_id'] == $to_user_id && $message['from_user_id'] == $owner_user_id) {
                            ?>

                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    <?php echo $message['message'];?>
                                    <span class="msg_time_send"><?php echo $timestamp;?></span>
                                </div>
                                <div class="img_cont_msg">
                                    <img data-toggle="tooltip" data-placement="top"  title="<?php echo $message['name']?>"  src="<?php echo $message['avatar']?>"
                                         class="rounded-circle user_img_msg">
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>

                    <div id="bottom"></div>

                </div>
            </div>
            <div class="card-footer">
                <div class="input-group">
                    <div class="input-group-append">
                        <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                    </div>
                    <input id="your_message" name="" class="form-control type_msg" placeholder="Type your message...">
                    <div id="btn_send" class="input-group-append">
                        <input type="hidden" id="owner_user_id" value="<?php echo $owner_user_id;?>">
                        <input type="hidden" id="inp_to_user_id" value="<?php echo $to_user_id;?>">
                        <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
                    </div>
                    <div>
                        <br>
                        <?php echo $host['name'];?> is typing:
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .chat_left{
        float: left;
        position: relative;
        top: -42px;
        width: 30%;
    }
    .chat_right{
        float: right;
        width: 70%;
    }
    #mychat{
        width: 1000px;
        margin: auto;
        padding:5px;
    }
    .user_list:hover{
        background-color: #0c5460;
        cursor: pointer;
    }
    .logo {
        width: 150px;
    }

    #myheader {
        width: 1000px;
        margin: 6px 39px 7px -14px;
        border-radius: 30px;
    }

    .navbar {
        border-radius: 16px;
        background-color: #0c5460 !important;
        color: black !important;
    }

    .navbar a {
        color: antiquewhite !important;
    }

    .dropdown-menu {
        background-color: #0c5460 !important;
        color: black !important;
    }

    .dropdown-menu a:hover {
        background-color: #f65c0e !important;
    }
</style>
</body>
</html>
