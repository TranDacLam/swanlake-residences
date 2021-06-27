<?php
/**
 * Created by PhpStorm.
 * User: Vo sy dao
 * Date: 11/8/2015
 * Time: 10:42 AM
 */
?>

<style>
    #b-c-facebook .chat-f-b{
        background-color: rgba(0, 0, 0, 0.9) !important;
        border-bottom : 1px  rgba(0, 0, 0, 0.9) !important;
    }
    #f_chat_name{
        color: white;
        font-weight: normal;
    }
</style>

<script language="javascript">
    var $ = jQuery.noConflict();
    jQuery(document).ready(function ($) {

    });
    var f_chat_vs = "Version 2.1";
    var f_chat_domain =  "http://localhost/habitat/";
    var f_chat_name = "Hỗ trợ khách hàng";
    var f_chat_star_1 = "Chào bạn!";
    var f_chat_star_2 = 'Bạn có thắc mắc cần tư vấn, hỏi ngay chúng tôi';
    var f_chat_star_3 = "<a href='javascript:;' onclick='f_bt_start_chat()' id='f_bt_start_chat'>Bắt đầu Chat</a>";
    var f_chat_star_4 = "Chú ý: Bạn phải đăng nhập <a href='http://facebook.com/' target='_blank' rel='nofollow'>Facebook</a> mới có thể trò chuyện.";
    var f_chat_fanpage = "habitat.vn";
    var f_chat_background_title = "rgba(0, 0, 0, 0.9)";
    var f_chat_color_title = "#fff";
    var f_chat_cr_vs = 21;
    var f_chat_vitri_manhinh = "left:10px;";
</script>
<script src="<?php echo get_site_url() ?>/livechat/chat.js?vs=2.2"></script>

<div id='fb-root'></div>
<a title='Mở hộp Chat' id='chat_f_b_smal' onclick='chat_f_show()' class='chat_f_vt'>
    <i class='fa fa-comments title-f-chat-icon'></i>
    Chat
</a>
<div id='b-c-facebook' class='chat_f_vt'>
    <div id='chat-f-b' onclick='b_f_chat()' class='chat-f-b'>
        <i class='fa fa-comments title-f-chat-icon'></i>
        <label id="f_chat_name"></label>
        <span id='fb_alert_num'>1</span>
        <div id='t_f_chat'><a href='javascript:void(0)' onclick='chat_f_close()' id='chat_f_close' class='chat-left-5'>x</a></div>
    </div>
    <div id='f-chat-conent' class='f-chat-conent'>
        <script>
            document.write("<div class='fb-page' data-tabs='messages' data-href='https://www.facebook.com/"+f_chat_fanpage+"' data-width='250' data-height='310' data-small-header='true' data-adapt-container-width='true' data-hide-cover='true' data-show-facepile='false' data-show-posts='true'></div>");
        </script>
        <div id='fb_chat_start'>
            <div id='f_enter_1' class='msg_b fb_hide'></div>
            <div id='f_enter_2' class='msg_b fb_hide'></div>
            <br/>
            <p id='f_enter_3' class='fb_hide' align='center'>
                <a href='javascript:void(0)' onclick='f_bt_start_chat()' id='f_bt_start_chat'>Bắt đầu Chat</a>
            </p>
            <br/>
            <p id='f_enter_4' class='fb_hide' align='center'></p>
        </div>
    </div>
</div>
