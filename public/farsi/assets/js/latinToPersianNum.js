var map =
[
"&\#1632;","&\#1633;","&\#1634;","&\#1635;","&\#1636;",
"&\#1637;","&\#1638;","&\#1639;","&\#1640;","&\#1641;"
];

function getPersianNumbers(str)
{
    var newStr = "";
    console.log('ok')

    str = String(str);

    for(i=0; i<str.length; i++)
    {
        newStr += map[parseInt(str.charAt(i))];
    }

    console.log(newStr)

    return newStr;
} 