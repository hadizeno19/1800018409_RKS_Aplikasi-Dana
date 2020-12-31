jQuery(document).ready(function () {
    var loading = '<div class="widget"><h4 class="widgettitle">Loading</h4><div class="widgetcontent"><center>Sedang Memuat<br><img src="https://ui-ex.com/images/background-transparent-loading-4.gif" alt="" /></center></div></div>';
    var beranda ='<div class="widget"><h4 class="widgettitle">Beranda</h4><div class="widgetcontent"><div class="topicpanel"><div class="author-thumb"><img src="http://graph.facebook.com/scarletfoc.us/picture?width=100&height=100" alt="" /></div><!--author-thumb--><div class="topic-content"><h5><a href=""><strong>Cheater Tools Indonesia</strong></a></h5><p>Tools Area adalah tools online yang saya buat untuk para Cheater..<br>Jaminan tools work selamanya tidak pernah berlaku..</p><p class="date">di post oleh Admin</p></div><!--topic-content--></div><!--topicpanel-->';
    var state = "beranda";
	
	$("#beranda").click(function () {
        if (state != "beranda") {
            state = "beranda";
            $("#content").html(loading);
            $("#content").html(beranda);
        }
        return false;
    });
 
    $("#voucher").click(function () {
        if (state != "voucher") {
            state = "voucher";
            $("#content").html(loading);
            $("#content").load("voucher.php");
        }
        return false;
    });
     $("#topupsaldo").click(function () {
        if (state != "topupsaldo") {
            state = "topupsaldo";
            $("#content").html(loading);
            $("#content").load("topupsaldo.php");
        }
        return false;
    });
	
    $("#tfsaldo").click(function () {
        if (state != "tfsaldo") {
            state = "tfsaldo";
            $("#content").html(loading);
            $("#content").load("tfsaldo.php");
        }
        return false;
    });
    
	
});