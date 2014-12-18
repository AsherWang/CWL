function getactionURL()
{
    var a = document.getElementsByName("choose");
    var value="";
    if(a[0].checked)
        value="RegOfficePage";
    else if(a[1].checked)
        value="HospitalManangerPage";
    else
        value="SuperManager";
    document.getElementById("form1").action=value;
}