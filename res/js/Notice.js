/**
 * Created by Administrator on 2014/12/5.
 */
function publish()
{
    document.getElementById("new_notice").style.visibility ="hidden";
    document.getElementById("publish_notice").style.visibility ="visible";
}

function backto()
{
    document.getElementById("new_notice").style.visibility ="visible";
    document.getElementById("publish_notice").style.visibility ="hidden";
}