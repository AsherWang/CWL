function getactionURL()
{
    var sub;
    var value="";
    switch (sub)
    {
        case 1:
            value="RegOfficePage";
            break;
        case 2:
            value="HospitalManangerPage";
            break;
        case 3:
            value="SuperManager";
    };
    alert(value)
    return value;
}