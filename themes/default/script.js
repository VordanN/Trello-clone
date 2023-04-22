

function change_card(cid, status) {
    $.ajax({
        url: '/main/updateCard/?cid=' + cid + "&status=" + status,
        type: 'GET',
        success: function (res) {
            console.log(res);
        }
    });

}

function update_label(cid,lid,){

    $.ajax({
        url:'/main/updateLabel/?cid='+cid+"&lid="+lid,
        type:"GET",
        success:function (res){
            window.location.href="board/<?=$board_id?>";
        }
    });
}

function update_member(cid,uid){
    $.ajax({
        url:'/main/updateMember/?cid='+cid+"&uid="+uid,
        type:"GET",
        success:function (res){
            window.location.href="board/<?=$board_id?>";
        }
    });
}