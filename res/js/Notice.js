/**
 * Created by Administrator on 2014/12/5.
 */
function surveyclick()
{
    document.getElementById("docu").style.visibility ="visible";
    document.getElementById("notice").style.visibility ="hidden";
}

function back()
{
    document.getElementById("docu").style.visibility ="hidden";
    document.getElementById("notice").style.visibility ="visible";
}

function publish()
{
    document.getElementById("notice_choice").style.visibility ="hidden";
    document.getElementById("new_notice").style.visibility ="hidden";
    document.getElementById("publish_notice").style.visibility ="visible";
}