<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="/js/app.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="inicio/styles.css">
    <!--estilos css directos, recordar poner el nombre de la ruta-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barriecito&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <title>Orso Bruno</title>

    <style>
        /* Add a black background color to the top navigation */



        .topnav {
            background: none;
            overflow: hidden;
        }

        .topnav img {
            width: 20%;
            float: left;
            margin: 1rem;

        }

        /* Style the links inside the navigation bar */
        .topnav a {
            float: right;
            display: block;
            color: rgb(17, 109, 126);
            text-align: right;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 19px;
            border-radius: 0.5rem;
            font-weight: bold;
        }

        /* Change the color of links on hover */
        .topnav a:hover {
            color: rgba(255, 255, 255, 1) !important;
            box-shadow: 0 4px 16px rgba(49, 138, 172, 1);
            transition: all 0.2s ease;
            font-size: 22px;
            font-weight: 500;
            padding: 0.5em 1.2em;
            background: #129ac4;
            border: 2px solid;
            border-color: #318aac;
            position: relative;
        }

        /* Hide the link that should open and close the topnav on small screens */
        .topnav .icon {
            display: none;
        }

        .topnav h1 {
            display: block;
            font-size: 30px;

        }


        /* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
                color: white;
            }

            .topnav img {
                width: 30%;
                float: left;
                margin: 1rem;

            }
        }

        /* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }

            .topnav.responsive a.icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
                color: white;
            }

            .topnav img {
                width: 30%;
                float: left;
                margin: 1rem;



            }
        }


        img {

            width: 100%;
            background-position: top;
            background-repeat: repeat-y;

        }

        #myTopnav {
            background: white !important;
            opacity: 0.4;
            position: fixed !important;
        }

        .texto-encima {
            position: absolute;
            top: 40%;
            left: 0%;
            width: 100%;
            vertical-align: middle !important;
            font-size: 80px;
            transform: translate(-50%, -50%);
            text-align: center;
            font-family: 'Barriecito', cursive;
            color: #d2e0e1;
            -webkit-text-stroke: 2px #334b71;

        }

        .fadeInUp {
            -webkit-animation-name: fadeInUp;
            animation-name: fadeInUp;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        @-webkit-keyframes fadeInUp {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        /**********************/
        html {
            height: 100%;
            background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
            overflow: hidden;
          }

          #stars {
            width: 1px;
            height: 1px;
            background: transparent;
            box-shadow: 1789px 172px #FFF , 1479px 1354px #FFF , 1783px 281px #FFF , 334px 1057px #FFF , 287px 1312px #FFF , 705px 936px #FFF , 858px 695px #FFF , 154px 995px #FFF , 1446px 315px #FFF , 1177px 1242px #FFF , 380px 1109px #FFF , 1669px 1570px #FFF , 1379px 880px #FFF , 1716px 892px #FFF , 938px 1818px #FFF , 1060px 346px #FFF , 598px 97px #FFF , 643px 1977px #FFF , 240px 856px #FFF , 1179px 1256px #FFF , 621px 1747px #FFF , 1634px 328px #FFF , 749px 880px #FFF , 1005px 975px #FFF , 687px 1318px #FFF , 1516px 964px #FFF , 126px 1574px #FFF , 739px 729px #FFF , 800px 1919px #FFF , 464px 1399px #FFF , 626px 1975px #FFF , 1003px 1477px #FFF , 911px 1564px #FFF , 420px 1557px #FFF , 161px 1045px #FFF , 207px 1617px #FFF , 81px 569px #FFF , 1147px 1659px #FFF , 445px 1093px #FFF , 497px 939px #FFF , 217px 639px #FFF , 1563px 102px #FFF , 790px 1656px #FFF , 480px 862px #FFF , 1495px 714px #FFF , 637px 1914px #FFF , 1691px 904px #FFF , 787px 1804px #FFF , 129px 1396px #FFF , 519px 338px #FFF , 1426px 36px #FFF , 289px 1005px #FFF , 267px 628px #FFF , 84px 801px #FFF , 1408px 199px #FFF , 751px 1452px #FFF , 858px 1374px #FFF , 426px 52px #FFF , 1371px 758px #FFF , 1257px 760px #FFF , 512px 773px #FFF , 1758px 742px #FFF , 1471px 1468px #FFF , 85px 247px #FFF , 1135px 191px #FFF , 608px 1460px #FFF , 992px 487px #FFF , 449px 1211px #FFF , 89px 1882px #FFF , 258px 1743px #FFF , 1092px 1806px #FFF , 1881px 525px #FFF , 426px 157px #FFF , 1754px 1426px #FFF , 60px 630px #FFF , 419px 337px #FFF , 1582px 1555px #FFF , 300px 1404px #FFF , 852px 1752px #FFF , 795px 13px #FFF , 72px 682px #FFF , 1576px 759px #FFF , 616px 262px #FFF , 1416px 1182px #FFF , 65px 748px #FFF , 771px 1561px #FFF , 400px 609px #FFF , 22px 1323px #FFF , 967px 619px #FFF , 1626px 965px #FFF , 291px 308px #FFF , 484px 654px #FFF , 1884px 589px #FFF , 1326px 120px #FFF , 873px 129px #FFF , 764px 1994px #FFF , 357px 1534px #FFF , 1114px 1120px #FFF , 1239px 1653px #FFF , 747px 1988px #FFF , 1104px 3px #FFF , 67px 142px #FFF , 1663px 1329px #FFF , 1872px 890px #FFF , 389px 468px #FFF , 415px 8px #FFF , 669px 289px #FFF , 1742px 1270px #FFF , 125px 112px #FFF , 771px 412px #FFF , 1398px 11px #FFF , 639px 4px #FFF , 1473px 1053px #FFF , 1867px 499px #FFF , 852px 340px #FFF , 103px 786px #FFF , 1621px 993px #FFF , 1221px 607px #FFF , 419px 788px #FFF , 1737px 261px #FFF , 669px 743px #FFF , 717px 940px #FFF , 924px 178px #FFF , 1180px 284px #FFF , 854px 1223px #FFF , 806px 1417px #FFF , 1928px 770px #FFF , 651px 1340px #FFF , 1337px 1934px #FFF , 589px 693px #FFF , 909px 1758px #FFF , 428px 950px #FFF , 1638px 560px #FFF , 1247px 1146px #FFF , 614px 1841px #FFF , 481px 628px #FFF , 337px 1604px #FFF , 1241px 1333px #FFF , 1071px 718px #FFF , 751px 129px #FFF , 817px 1904px #FFF , 285px 1426px #FFF , 1925px 1189px #FFF , 75px 1794px #FFF , 629px 1764px #FFF , 719px 1883px #FFF , 138px 481px #FFF , 1189px 1368px #FFF , 1597px 1257px #FFF , 540px 1333px #FFF , 1079px 645px #FFF , 292px 416px #FFF , 959px 336px #FFF , 127px 797px #FFF , 61px 500px #FFF , 775px 1650px #FFF , 1988px 636px #FFF , 613px 1879px #FFF , 716px 378px #FFF , 1464px 1652px #FFF , 1840px 1704px #FFF , 1872px 1826px #FFF , 1268px 474px #FFF , 729px 550px #FFF , 1698px 696px #FFF , 340px 632px #FFF , 1644px 1695px #FFF , 496px 552px #FFF , 1608px 23px #FFF , 746px 960px #FFF , 94px 1952px #FFF , 302px 754px #FFF , 384px 9px #FFF , 658px 1537px #FFF , 1180px 972px #FFF , 1403px 1889px #FFF , 446px 734px #FFF , 402px 314px #FFF , 600px 697px #FFF , 1786px 967px #FFF , 475px 1926px #FFF , 884px 356px #FFF , 1666px 1123px #FFF , 1967px 1126px #FFF , 143px 761px #FFF , 1087px 1216px #FFF , 1319px 1093px #FFF , 1764px 1554px #FFF , 1498px 38px #FFF , 994px 470px #FFF , 766px 25px #FFF , 1898px 1293px #FFF , 1605px 849px #FFF , 1324px 1311px #FFF , 594px 1471px #FFF , 1939px 1179px #FFF , 944px 746px #FFF , 400px 1641px #FFF , 1395px 1661px #FFF , 111px 1530px #FFF , 663px 366px #FFF , 1456px 713px #FFF , 1655px 980px #FFF , 469px 3px #FFF , 523px 693px #FFF , 1880px 486px #FFF , 745px 1565px #FFF , 655px 1532px #FFF , 864px 1017px #FFF , 835px 852px #FFF , 1846px 1011px #FFF , 829px 717px #FFF , 1166px 1733px #FFF , 214px 1839px #FFF , 615px 437px #FFF , 58px 1952px #FFF , 1424px 1031px #FFF , 1117px 1637px #FFF , 209px 484px #FFF , 953px 1155px #FFF , 1058px 1702px #FFF , 1351px 1972px #FFF , 621px 1666px #FFF , 1791px 1290px #FFF , 1172px 374px #FFF , 940px 1594px #FFF , 923px 1063px #FFF , 671px 1702px #FFF , 1805px 1416px #FFF , 898px 622px #FFF , 406px 1454px #FFF , 639px 1045px #FFF , 20px 1292px #FFF , 1182px 908px #FFF , 151px 97px #FFF , 650px 1327px #FFF , 1425px 141px #FFF , 1791px 459px #FFF , 1624px 244px #FFF , 1541px 189px #FFF , 1614px 463px #FFF , 1826px 1208px #FFF , 1374px 1746px #FFF , 918px 1651px #FFF , 1062px 292px #FFF , 1779px 1730px #FFF , 1784px 770px #FFF , 1354px 280px #FFF , 1052px 1409px #FFF , 37px 1899px #FFF , 1474px 284px #FFF , 1032px 117px #FFF , 258px 1686px #FFF , 1209px 1717px #FFF , 1006px 1625px #FFF , 844px 1517px #FFF , 1194px 41px #FFF , 1174px 1926px #FFF , 1826px 92px #FFF , 448px 2px #FFF , 1781px 1473px #FFF , 1137px 1452px #FFF , 1828px 165px #FFF , 1360px 186px #FFF , 1263px 1121px #FFF , 1390px 699px #FFF , 136px 1702px #FFF , 1761px 321px #FFF , 1593px 1810px #FFF , 558px 594px #FFF , 541px 314px #FFF , 1104px 1374px #FFF , 1433px 97px #FFF , 1727px 717px #FFF , 1224px 1085px #FFF , 977px 1147px #FFF , 1575px 1748px #FFF , 670px 62px #FFF , 1337px 318px #FFF , 899px 443px #FFF , 804px 1769px #FFF , 1294px 296px #FFF , 1418px 48px #FFF , 101px 1306px #FFF , 141px 1394px #FFF , 1739px 50px #FFF , 402px 1117px #FFF , 985px 115px #FFF , 968px 49px #FFF , 703px 1111px #FFF , 236px 1538px #FFF , 857px 1873px #FFF , 1805px 402px #FFF , 286px 1708px #FFF , 327px 218px #FFF , 1420px 1842px #FFF , 134px 1551px #FFF , 1365px 1146px #FFF , 1282px 1118px #FFF , 237px 1216px #FFF , 254px 153px #FFF , 643px 548px #FFF , 1944px 437px #FFF , 912px 903px #FFF , 614px 1730px #FFF , 676px 805px #FFF , 1387px 471px #FFF , 340px 1994px #FFF , 139px 1658px #FFF , 190px 443px #FFF , 911px 183px #FFF , 1727px 1743px #FFF , 609px 262px #FFF , 1636px 1920px #FFF , 45px 330px #FFF , 1400px 970px #FFF , 961px 1929px #FFF , 613px 677px #FFF , 1020px 1394px #FFF , 1104px 848px #FFF , 1441px 488px #FFF , 1510px 1134px #FFF , 1872px 1054px #FFF , 20px 1475px #FFF , 423px 1095px #FFF , 557px 1104px #FFF , 1237px 457px #FFF , 550px 592px #FFF , 1958px 169px #FFF , 153px 769px #FFF , 1170px 617px #FFF , 1372px 26px #FFF , 481px 1600px #FFF , 401px 304px #FFF , 1585px 1124px #FFF , 1741px 521px #FFF , 1200px 113px #FFF , 220px 1692px #FFF , 1170px 444px #FFF , 169px 984px #FFF , 740px 1238px #FFF , 185px 1255px #FFF , 1849px 1285px #FFF , 145px 262px #FFF , 1339px 806px #FFF , 331px 1636px #FFF , 1282px 421px #FFF , 23px 1111px #FFF , 898px 1649px #FFF , 694px 926px #FFF , 1520px 611px #FFF , 462px 499px #FFF , 825px 186px #FFF , 172px 79px #FFF , 1925px 474px #FFF , 934px 899px #FFF , 284px 990px #FFF , 1358px 1594px #FFF , 1304px 1439px #FFF , 610px 747px #FFF , 1465px 741px #FFF , 470px 1426px #FFF , 155px 892px #FFF , 1838px 1357px #FFF , 1387px 1118px #FFF , 1297px 1831px #FFF , 819px 876px #FFF , 564px 503px #FFF , 681px 1781px #FFF , 459px 841px #FFF , 423px 344px #FFF , 20px 1178px #FFF , 1445px 1853px #FFF , 1148px 963px #FFF , 1799px 1592px #FFF , 789px 1745px #FFF , 435px 227px #FFF , 276px 260px #FFF , 103px 595px #FFF , 86px 1262px #FFF , 1547px 146px #FFF , 867px 1017px #FFF , 718px 513px #FFF , 534px 897px #FFF , 1134px 381px #FFF , 803px 1899px #FFF , 430px 638px #FFF , 98px 935px #FFF , 408px 455px #FFF , 797px 1564px #FFF , 1110px 649px #FFF , 83px 1249px #FFF , 1778px 1947px #FFF , 1732px 693px #FFF , 1281px 78px #FFF , 1317px 541px #FFF , 96px 406px #FFF , 842px 1851px #FFF , 103px 528px #FFF , 246px 402px #FFF , 1063px 1682px #FFF , 1260px 1403px #FFF , 744px 1882px #FFF , 548px 1772px #FFF , 403px 1417px #FFF , 1291px 884px #FFF , 1889px 496px #FFF , 1520px 1574px #FFF , 1516px 1513px #FFF , 800px 708px #FFF , 1880px 1254px #FFF , 1945px 514px #FFF , 1100px 1578px #FFF , 1835px 1948px #FFF , 1441px 561px #FFF , 1099px 1695px #FFF , 1956px 1700px #FFF , 1313px 173px #FFF , 1819px 274px #FFF , 614px 727px #FFF , 86px 1457px #FFF , 1133px 101px #FFF , 1319px 507px #FFF , 1070px 827px #FFF , 1190px 447px #FFF , 1616px 699px #FFF , 1281px 1983px #FFF , 1722px 1186px #FFF , 1722px 583px #FFF , 685px 1905px #FFF , 169px 489px #FFF , 242px 845px #FFF , 17px 1250px #FFF , 430px 1992px #FFF , 886px 1964px #FFF , 55px 1899px #FFF , 910px 1314px #FFF , 1511px 237px #FFF , 78px 1262px #FFF , 359px 498px #FFF , 1855px 1339px #FFF , 1988px 1594px #FFF , 1670px 1860px #FFF , 1365px 1604px #FFF , 600px 483px #FFF , 1773px 1621px #FFF , 1951px 1862px #FFF , 588px 950px #FFF , 928px 1994px #FFF , 1151px 1894px #FFF , 235px 1523px #FFF , 1679px 1767px #FFF , 1176px 1869px #FFF , 692px 845px #FFF , 420px 1729px #FFF , 1922px 1583px #FFF , 719px 157px #FFF , 1998px 235px #FFF , 105px 67px #FFF , 1332px 1856px #FFF , 1692px 1866px #FFF , 1656px 997px #FFF , 206px 710px #FFF , 1064px 1749px #FFF , 1279px 1318px #FFF , 1311px 1046px #FFF , 203px 509px #FFF , 1995px 489px #FFF , 733px 1181px #FFF , 1418px 1032px #FFF , 233px 1164px #FFF , 1479px 969px #FFF , 856px 433px #FFF , 802px 1022px #FFF , 1583px 1390px #FFF , 1343px 480px #FFF , 220px 379px #FFF , 1286px 1012px #FFF , 1241px 1286px #FFF , 911px 1624px #FFF , 576px 1101px #FFF , 259px 739px #FFF , 1741px 1442px #FFF , 597px 1303px #FFF , 191px 1188px #FFF , 1909px 148px #FFF , 67px 1615px #FFF , 203px 711px #FFF , 236px 813px #FFF , 790px 1856px #FFF , 91px 1587px #FFF , 535px 1967px #FFF , 88px 843px #FFF , 978px 511px #FFF , 421px 501px #FFF , 1876px 127px #FFF , 712px 744px #FFF , 719px 1660px #FFF , 333px 1878px #FFF , 193px 1812px #FFF , 101px 1952px #FFF , 439px 520px #FFF , 703px 1313px #FFF , 943px 140px #FFF , 1463px 451px #FFF , 1392px 338px #FFF , 1694px 1079px #FFF , 1283px 1724px #FFF , 50px 1041px #FFF , 1122px 1550px #FFF , 1906px 787px #FFF , 1359px 1062px #FFF , 1472px 1937px #FFF , 50px 1940px #FFF , 862px 74px #FFF , 1440px 1855px #FFF , 621px 239px #FFF , 402px 1212px #FFF , 1022px 874px #FFF , 710px 575px #FFF , 1912px 97px #FFF , 6px 1660px #FFF , 1719px 1258px #FFF , 137px 429px #FFF , 863px 619px #FFF , 81px 204px #FFF , 575px 1666px #FFF , 1956px 52px #FFF , 207px 1460px #FFF , 203px 124px #FFF , 1791px 1637px #FFF , 1184px 1260px #FFF , 587px 33px #FFF , 1806px 1496px #FFF , 598px 1555px #FFF , 1803px 1333px #FFF , 1369px 684px #FFF , 405px 743px #FFF , 108px 1963px #FFF , 1965px 623px #FFF , 1383px 506px #FFF , 838px 1592px #FFF , 1501px 532px #FFF , 484px 4px #FFF , 519px 13px #FFF , 477px 1564px #FFF , 325px 460px #FFF , 1935px 1169px #FFF , 543px 1042px #FFF , 1814px 59px #FFF , 4px 341px #FFF , 740px 1253px #FFF , 1479px 49px #FFF , 1660px 952px #FFF , 648px 464px #FFF , 697px 129px #FFF , 789px 1636px #FFF , 1920px 850px #FFF , 28px 1660px #FFF , 917px 1691px #FFF , 1357px 350px #FFF , 1897px 381px #FFF , 1584px 1808px #FFF , 1441px 1354px #FFF , 1631px 218px #FFF , 218px 326px #FFF , 1486px 372px #FFF , 1436px 1931px #FFF , 313px 335px #FFF , 1394px 468px #FFF , 172px 698px #FFF , 1036px 102px #FFF , 1103px 924px #FFF , 1304px 1002px #FFF , 419px 1827px #FFF , 1083px 1654px #FFF , 363px 1437px #FFF , 1832px 993px #FFF , 1044px 209px #FFF , 340px 967px #FFF , 58px 1888px #FFF , 1458px 1215px #FFF , 1589px 451px #FFF , 1391px 700px #FFF , 341px 1137px #FFF , 644px 1491px #FFF , 1441px 686px #FFF , 123px 1000px #FFF , 1554px 74px #FFF , 836px 39px #FFF , 1318px 1297px #FFF , 1785px 653px #FFF , 361px 92px #FFF , 1374px 1463px #FFF , 281px 1839px #FFF , 1621px 1002px #FFF , 1981px 86px #FFF , 1665px 469px #FFF , 1790px 384px #FFF , 1141px 767px #FFF , 24px 1245px #FFF , 556px 1559px #FFF , 116px 541px #FFF , 1895px 399px #FFF , 1217px 937px #FFF , 405px 248px #FFF , 1336px 1470px #FFF , 1649px 1080px #FFF , 1343px 776px #FFF , 418px 411px #FFF , 260px 800px #FFF , 1098px 1055px #FFF , 1935px 1024px #FFF , 287px 1132px #FFF , 1372px 668px #FFF , 1843px 249px #FFF , 862px 1344px #FFF , 1060px 663px #FFF , 20px 1994px #FFF , 735px 386px #FFF , 1376px 319px #FFF , 280px 1269px #FFF , 215px 1818px #FFF , 376px 137px #FFF , 620px 1572px #FFF , 560px 793px #FFF , 68px 790px #FFF , 1150px 965px #FFF , 1765px 891px #FFF , 682px 362px #FFF , 259px 1612px #FFF , 69px 789px #FFF , 636px 1705px #FFF , 26px 1477px #FFF , 1069px 1928px #FFF , 590px 1150px #FFF , 1214px 618px #FFF , 136px 1495px #FFF , 1107px 1785px #FFF , 1911px 669px #FFF , 1667px 1191px #FFF , 136px 95px #FFF , 584px 1465px #FFF , 1283px 1203px #FFF , 1726px 161px #FFF , 681px 1643px #FFF , 1256px 658px #FFF , 1127px 1518px #FFF , 686px 1144px #FFF , 1032px 1205px #FFF , 480px 1835px #FFF , 1830px 1360px #FFF , 1656px 831px #FFF , 1881px 1007px #FFF , 1142px 1865px #FFF , 254px 376px #FFF , 1440px 733px #FFF , 1514px 756px #FFF , 119px 405px #FFF , 157px 517px #FFF , 1036px 957px #FFF , 580px 6px #FFF , 621px 1974px #FFF , 792px 1427px #FFF , 1919px 1288px #FFF , 837px 1452px #FFF , 1878px 1384px #FFF , 204px 80px #FFF , 264px 1235px #FFF , 56px 61px #FFF , 810px 1330px #FFF , 58px 197px #FFF , 1044px 708px #FFF , 329px 650px #FFF , 523px 1755px #FFF , 148px 578px #FFF , 1059px 343px #FFF , 862px 194px #FFF , 187px 1036px #FFF , 294px 1751px #FFF , 1890px 554px #FFF , 357px 960px #FFF , 1142px 884px #FFF , 622px 704px #FFF , 891px 826px #FFF , 1789px 436px #FFF , 1865px 49px #FFF , 476px 211px #FFF , 1468px 667px #FFF , 607px 216px #FFF , 1070px 25px #FFF , 1094px 357px #FFF , 1088px 1229px #FFF , 1590px 398px #FFF , 1872px 1479px #FFF , 1972px 1167px #FFF , 1771px 349px #FFF , 1985px 552px #FFF , 1919px 155px #FFF , 1616px 1007px #FFF;
            animation: animStar 50s linear infinite;
          }
          #stars:after {
            content: " ";
            position: absolute;
            top: 2000px;
            width: 1px;
            height: 1px;
            background: transparent;
            box-shadow: 1789px 172px #FFF , 1479px 1354px #FFF , 1783px 281px #FFF , 334px 1057px #FFF , 287px 1312px #FFF , 705px 936px #FFF , 858px 695px #FFF , 154px 995px #FFF , 1446px 315px #FFF , 1177px 1242px #FFF , 380px 1109px #FFF , 1669px 1570px #FFF , 1379px 880px #FFF , 1716px 892px #FFF , 938px 1818px #FFF , 1060px 346px #FFF , 598px 97px #FFF , 643px 1977px #FFF , 240px 856px #FFF , 1179px 1256px #FFF , 621px 1747px #FFF , 1634px 328px #FFF , 749px 880px #FFF , 1005px 975px #FFF , 687px 1318px #FFF , 1516px 964px #FFF , 126px 1574px #FFF , 739px 729px #FFF , 800px 1919px #FFF , 464px 1399px #FFF , 626px 1975px #FFF , 1003px 1477px #FFF , 911px 1564px #FFF , 420px 1557px #FFF , 161px 1045px #FFF , 207px 1617px #FFF , 81px 569px #FFF , 1147px 1659px #FFF , 445px 1093px #FFF , 497px 939px #FFF , 217px 639px #FFF , 1563px 102px #FFF , 790px 1656px #FFF , 480px 862px #FFF , 1495px 714px #FFF , 637px 1914px #FFF , 1691px 904px #FFF , 787px 1804px #FFF , 129px 1396px #FFF , 519px 338px #FFF , 1426px 36px #FFF , 289px 1005px #FFF , 267px 628px #FFF , 84px 801px #FFF , 1408px 199px #FFF , 751px 1452px #FFF , 858px 1374px #FFF , 426px 52px #FFF , 1371px 758px #FFF , 1257px 760px #FFF , 512px 773px #FFF , 1758px 742px #FFF , 1471px 1468px #FFF , 85px 247px #FFF , 1135px 191px #FFF , 608px 1460px #FFF , 992px 487px #FFF , 449px 1211px #FFF , 89px 1882px #FFF , 258px 1743px #FFF , 1092px 1806px #FFF , 1881px 525px #FFF , 426px 157px #FFF , 1754px 1426px #FFF , 60px 630px #FFF , 419px 337px #FFF , 1582px 1555px #FFF , 300px 1404px #FFF , 852px 1752px #FFF , 795px 13px #FFF , 72px 682px #FFF , 1576px 759px #FFF , 616px 262px #FFF , 1416px 1182px #FFF , 65px 748px #FFF , 771px 1561px #FFF , 400px 609px #FFF , 22px 1323px #FFF , 967px 619px #FFF , 1626px 965px #FFF , 291px 308px #FFF , 484px 654px #FFF , 1884px 589px #FFF , 1326px 120px #FFF , 873px 129px #FFF , 764px 1994px #FFF , 357px 1534px #FFF , 1114px 1120px #FFF , 1239px 1653px #FFF , 747px 1988px #FFF , 1104px 3px #FFF , 67px 142px #FFF , 1663px 1329px #FFF , 1872px 890px #FFF , 389px 468px #FFF , 415px 8px #FFF , 669px 289px #FFF , 1742px 1270px #FFF , 125px 112px #FFF , 771px 412px #FFF , 1398px 11px #FFF , 639px 4px #FFF , 1473px 1053px #FFF , 1867px 499px #FFF , 852px 340px #FFF , 103px 786px #FFF , 1621px 993px #FFF , 1221px 607px #FFF , 419px 788px #FFF , 1737px 261px #FFF , 669px 743px #FFF , 717px 940px #FFF , 924px 178px #FFF , 1180px 284px #FFF , 854px 1223px #FFF , 806px 1417px #FFF , 1928px 770px #FFF , 651px 1340px #FFF , 1337px 1934px #FFF , 589px 693px #FFF , 909px 1758px #FFF , 428px 950px #FFF , 1638px 560px #FFF , 1247px 1146px #FFF , 614px 1841px #FFF , 481px 628px #FFF , 337px 1604px #FFF , 1241px 1333px #FFF , 1071px 718px #FFF , 751px 129px #FFF , 817px 1904px #FFF , 285px 1426px #FFF , 1925px 1189px #FFF , 75px 1794px #FFF , 629px 1764px #FFF , 719px 1883px #FFF , 138px 481px #FFF , 1189px 1368px #FFF , 1597px 1257px #FFF , 540px 1333px #FFF , 1079px 645px #FFF , 292px 416px #FFF , 959px 336px #FFF , 127px 797px #FFF , 61px 500px #FFF , 775px 1650px #FFF , 1988px 636px #FFF , 613px 1879px #FFF , 716px 378px #FFF , 1464px 1652px #FFF , 1840px 1704px #FFF , 1872px 1826px #FFF , 1268px 474px #FFF , 729px 550px #FFF , 1698px 696px #FFF , 340px 632px #FFF , 1644px 1695px #FFF , 496px 552px #FFF , 1608px 23px #FFF , 746px 960px #FFF , 94px 1952px #FFF , 302px 754px #FFF , 384px 9px #FFF , 658px 1537px #FFF , 1180px 972px #FFF , 1403px 1889px #FFF , 446px 734px #FFF , 402px 314px #FFF , 600px 697px #FFF , 1786px 967px #FFF , 475px 1926px #FFF , 884px 356px #FFF , 1666px 1123px #FFF , 1967px 1126px #FFF , 143px 761px #FFF , 1087px 1216px #FFF , 1319px 1093px #FFF , 1764px 1554px #FFF , 1498px 38px #FFF , 994px 470px #FFF , 766px 25px #FFF , 1898px 1293px #FFF , 1605px 849px #FFF , 1324px 1311px #FFF , 594px 1471px #FFF , 1939px 1179px #FFF , 944px 746px #FFF , 400px 1641px #FFF , 1395px 1661px #FFF , 111px 1530px #FFF , 663px 366px #FFF , 1456px 713px #FFF , 1655px 980px #FFF , 469px 3px #FFF , 523px 693px #FFF , 1880px 486px #FFF , 745px 1565px #FFF , 655px 1532px #FFF , 864px 1017px #FFF , 835px 852px #FFF , 1846px 1011px #FFF , 829px 717px #FFF , 1166px 1733px #FFF , 214px 1839px #FFF , 615px 437px #FFF , 58px 1952px #FFF , 1424px 1031px #FFF , 1117px 1637px #FFF , 209px 484px #FFF , 953px 1155px #FFF , 1058px 1702px #FFF , 1351px 1972px #FFF , 621px 1666px #FFF , 1791px 1290px #FFF , 1172px 374px #FFF , 940px 1594px #FFF , 923px 1063px #FFF , 671px 1702px #FFF , 1805px 1416px #FFF , 898px 622px #FFF , 406px 1454px #FFF , 639px 1045px #FFF , 20px 1292px #FFF , 1182px 908px #FFF , 151px 97px #FFF , 650px 1327px #FFF , 1425px 141px #FFF , 1791px 459px #FFF , 1624px 244px #FFF , 1541px 189px #FFF , 1614px 463px #FFF , 1826px 1208px #FFF , 1374px 1746px #FFF , 918px 1651px #FFF , 1062px 292px #FFF , 1779px 1730px #FFF , 1784px 770px #FFF , 1354px 280px #FFF , 1052px 1409px #FFF , 37px 1899px #FFF , 1474px 284px #FFF , 1032px 117px #FFF , 258px 1686px #FFF , 1209px 1717px #FFF , 1006px 1625px #FFF , 844px 1517px #FFF , 1194px 41px #FFF , 1174px 1926px #FFF , 1826px 92px #FFF , 448px 2px #FFF , 1781px 1473px #FFF , 1137px 1452px #FFF , 1828px 165px #FFF , 1360px 186px #FFF , 1263px 1121px #FFF , 1390px 699px #FFF , 136px 1702px #FFF , 1761px 321px #FFF , 1593px 1810px #FFF , 558px 594px #FFF , 541px 314px #FFF , 1104px 1374px #FFF , 1433px 97px #FFF , 1727px 717px #FFF , 1224px 1085px #FFF , 977px 1147px #FFF , 1575px 1748px #FFF , 670px 62px #FFF , 1337px 318px #FFF , 899px 443px #FFF , 804px 1769px #FFF , 1294px 296px #FFF , 1418px 48px #FFF , 101px 1306px #FFF , 141px 1394px #FFF , 1739px 50px #FFF , 402px 1117px #FFF , 985px 115px #FFF , 968px 49px #FFF , 703px 1111px #FFF , 236px 1538px #FFF , 857px 1873px #FFF , 1805px 402px #FFF , 286px 1708px #FFF , 327px 218px #FFF , 1420px 1842px #FFF , 134px 1551px #FFF , 1365px 1146px #FFF , 1282px 1118px #FFF , 237px 1216px #FFF , 254px 153px #FFF , 643px 548px #FFF , 1944px 437px #FFF , 912px 903px #FFF , 614px 1730px #FFF , 676px 805px #FFF , 1387px 471px #FFF , 340px 1994px #FFF , 139px 1658px #FFF , 190px 443px #FFF , 911px 183px #FFF , 1727px 1743px #FFF , 609px 262px #FFF , 1636px 1920px #FFF , 45px 330px #FFF , 1400px 970px #FFF , 961px 1929px #FFF , 613px 677px #FFF , 1020px 1394px #FFF , 1104px 848px #FFF , 1441px 488px #FFF , 1510px 1134px #FFF , 1872px 1054px #FFF , 20px 1475px #FFF , 423px 1095px #FFF , 557px 1104px #FFF , 1237px 457px #FFF , 550px 592px #FFF , 1958px 169px #FFF , 153px 769px #FFF , 1170px 617px #FFF , 1372px 26px #FFF , 481px 1600px #FFF , 401px 304px #FFF , 1585px 1124px #FFF , 1741px 521px #FFF , 1200px 113px #FFF , 220px 1692px #FFF , 1170px 444px #FFF , 169px 984px #FFF , 740px 1238px #FFF , 185px 1255px #FFF , 1849px 1285px #FFF , 145px 262px #FFF , 1339px 806px #FFF , 331px 1636px #FFF , 1282px 421px #FFF , 23px 1111px #FFF , 898px 1649px #FFF , 694px 926px #FFF , 1520px 611px #FFF , 462px 499px #FFF , 825px 186px #FFF , 172px 79px #FFF , 1925px 474px #FFF , 934px 899px #FFF , 284px 990px #FFF , 1358px 1594px #FFF , 1304px 1439px #FFF , 610px 747px #FFF , 1465px 741px #FFF , 470px 1426px #FFF , 155px 892px #FFF , 1838px 1357px #FFF , 1387px 1118px #FFF , 1297px 1831px #FFF , 819px 876px #FFF , 564px 503px #FFF , 681px 1781px #FFF , 459px 841px #FFF , 423px 344px #FFF , 20px 1178px #FFF , 1445px 1853px #FFF , 1148px 963px #FFF , 1799px 1592px #FFF , 789px 1745px #FFF , 435px 227px #FFF , 276px 260px #FFF , 103px 595px #FFF , 86px 1262px #FFF , 1547px 146px #FFF , 867px 1017px #FFF , 718px 513px #FFF , 534px 897px #FFF , 1134px 381px #FFF , 803px 1899px #FFF , 430px 638px #FFF , 98px 935px #FFF , 408px 455px #FFF , 797px 1564px #FFF , 1110px 649px #FFF , 83px 1249px #FFF , 1778px 1947px #FFF , 1732px 693px #FFF , 1281px 78px #FFF , 1317px 541px #FFF , 96px 406px #FFF , 842px 1851px #FFF , 103px 528px #FFF , 246px 402px #FFF , 1063px 1682px #FFF , 1260px 1403px #FFF , 744px 1882px #FFF , 548px 1772px #FFF , 403px 1417px #FFF , 1291px 884px #FFF , 1889px 496px #FFF , 1520px 1574px #FFF , 1516px 1513px #FFF , 800px 708px #FFF , 1880px 1254px #FFF , 1945px 514px #FFF , 1100px 1578px #FFF , 1835px 1948px #FFF , 1441px 561px #FFF , 1099px 1695px #FFF , 1956px 1700px #FFF , 1313px 173px #FFF , 1819px 274px #FFF , 614px 727px #FFF , 86px 1457px #FFF , 1133px 101px #FFF , 1319px 507px #FFF , 1070px 827px #FFF , 1190px 447px #FFF , 1616px 699px #FFF , 1281px 1983px #FFF , 1722px 1186px #FFF , 1722px 583px #FFF , 685px 1905px #FFF , 169px 489px #FFF , 242px 845px #FFF , 17px 1250px #FFF , 430px 1992px #FFF , 886px 1964px #FFF , 55px 1899px #FFF , 910px 1314px #FFF , 1511px 237px #FFF , 78px 1262px #FFF , 359px 498px #FFF , 1855px 1339px #FFF , 1988px 1594px #FFF , 1670px 1860px #FFF , 1365px 1604px #FFF , 600px 483px #FFF , 1773px 1621px #FFF , 1951px 1862px #FFF , 588px 950px #FFF , 928px 1994px #FFF , 1151px 1894px #FFF , 235px 1523px #FFF , 1679px 1767px #FFF , 1176px 1869px #FFF , 692px 845px #FFF , 420px 1729px #FFF , 1922px 1583px #FFF , 719px 157px #FFF , 1998px 235px #FFF , 105px 67px #FFF , 1332px 1856px #FFF , 1692px 1866px #FFF , 1656px 997px #FFF , 206px 710px #FFF , 1064px 1749px #FFF , 1279px 1318px #FFF , 1311px 1046px #FFF , 203px 509px #FFF , 1995px 489px #FFF , 733px 1181px #FFF , 1418px 1032px #FFF , 233px 1164px #FFF , 1479px 969px #FFF , 856px 433px #FFF , 802px 1022px #FFF , 1583px 1390px #FFF , 1343px 480px #FFF , 220px 379px #FFF , 1286px 1012px #FFF , 1241px 1286px #FFF , 911px 1624px #FFF , 576px 1101px #FFF , 259px 739px #FFF , 1741px 1442px #FFF , 597px 1303px #FFF , 191px 1188px #FFF , 1909px 148px #FFF , 67px 1615px #FFF , 203px 711px #FFF , 236px 813px #FFF , 790px 1856px #FFF , 91px 1587px #FFF , 535px 1967px #FFF , 88px 843px #FFF , 978px 511px #FFF , 421px 501px #FFF , 1876px 127px #FFF , 712px 744px #FFF , 719px 1660px #FFF , 333px 1878px #FFF , 193px 1812px #FFF , 101px 1952px #FFF , 439px 520px #FFF , 703px 1313px #FFF , 943px 140px #FFF , 1463px 451px #FFF , 1392px 338px #FFF , 1694px 1079px #FFF , 1283px 1724px #FFF , 50px 1041px #FFF , 1122px 1550px #FFF , 1906px 787px #FFF , 1359px 1062px #FFF , 1472px 1937px #FFF , 50px 1940px #FFF , 862px 74px #FFF , 1440px 1855px #FFF , 621px 239px #FFF , 402px 1212px #FFF , 1022px 874px #FFF , 710px 575px #FFF , 1912px 97px #FFF , 6px 1660px #FFF , 1719px 1258px #FFF , 137px 429px #FFF , 863px 619px #FFF , 81px 204px #FFF , 575px 1666px #FFF , 1956px 52px #FFF , 207px 1460px #FFF , 203px 124px #FFF , 1791px 1637px #FFF , 1184px 1260px #FFF , 587px 33px #FFF , 1806px 1496px #FFF , 598px 1555px #FFF , 1803px 1333px #FFF , 1369px 684px #FFF , 405px 743px #FFF , 108px 1963px #FFF , 1965px 623px #FFF , 1383px 506px #FFF , 838px 1592px #FFF , 1501px 532px #FFF , 484px 4px #FFF , 519px 13px #FFF , 477px 1564px #FFF , 325px 460px #FFF , 1935px 1169px #FFF , 543px 1042px #FFF , 1814px 59px #FFF , 4px 341px #FFF , 740px 1253px #FFF , 1479px 49px #FFF , 1660px 952px #FFF , 648px 464px #FFF , 697px 129px #FFF , 789px 1636px #FFF , 1920px 850px #FFF , 28px 1660px #FFF , 917px 1691px #FFF , 1357px 350px #FFF , 1897px 381px #FFF , 1584px 1808px #FFF , 1441px 1354px #FFF , 1631px 218px #FFF , 218px 326px #FFF , 1486px 372px #FFF , 1436px 1931px #FFF , 313px 335px #FFF , 1394px 468px #FFF , 172px 698px #FFF , 1036px 102px #FFF , 1103px 924px #FFF , 1304px 1002px #FFF , 419px 1827px #FFF , 1083px 1654px #FFF , 363px 1437px #FFF , 1832px 993px #FFF , 1044px 209px #FFF , 340px 967px #FFF , 58px 1888px #FFF , 1458px 1215px #FFF , 1589px 451px #FFF , 1391px 700px #FFF , 341px 1137px #FFF , 644px 1491px #FFF , 1441px 686px #FFF , 123px 1000px #FFF , 1554px 74px #FFF , 836px 39px #FFF , 1318px 1297px #FFF , 1785px 653px #FFF , 361px 92px #FFF , 1374px 1463px #FFF , 281px 1839px #FFF , 1621px 1002px #FFF , 1981px 86px #FFF , 1665px 469px #FFF , 1790px 384px #FFF , 1141px 767px #FFF , 24px 1245px #FFF , 556px 1559px #FFF , 116px 541px #FFF , 1895px 399px #FFF , 1217px 937px #FFF , 405px 248px #FFF , 1336px 1470px #FFF , 1649px 1080px #FFF , 1343px 776px #FFF , 418px 411px #FFF , 260px 800px #FFF , 1098px 1055px #FFF , 1935px 1024px #FFF , 287px 1132px #FFF , 1372px 668px #FFF , 1843px 249px #FFF , 862px 1344px #FFF , 1060px 663px #FFF , 20px 1994px #FFF , 735px 386px #FFF , 1376px 319px #FFF , 280px 1269px #FFF , 215px 1818px #FFF , 376px 137px #FFF , 620px 1572px #FFF , 560px 793px #FFF , 68px 790px #FFF , 1150px 965px #FFF , 1765px 891px #FFF , 682px 362px #FFF , 259px 1612px #FFF , 69px 789px #FFF , 636px 1705px #FFF , 26px 1477px #FFF , 1069px 1928px #FFF , 590px 1150px #FFF , 1214px 618px #FFF , 136px 1495px #FFF , 1107px 1785px #FFF , 1911px 669px #FFF , 1667px 1191px #FFF , 136px 95px #FFF , 584px 1465px #FFF , 1283px 1203px #FFF , 1726px 161px #FFF , 681px 1643px #FFF , 1256px 658px #FFF , 1127px 1518px #FFF , 686px 1144px #FFF , 1032px 1205px #FFF , 480px 1835px #FFF , 1830px 1360px #FFF , 1656px 831px #FFF , 1881px 1007px #FFF , 1142px 1865px #FFF , 254px 376px #FFF , 1440px 733px #FFF , 1514px 756px #FFF , 119px 405px #FFF , 157px 517px #FFF , 1036px 957px #FFF , 580px 6px #FFF , 621px 1974px #FFF , 792px 1427px #FFF , 1919px 1288px #FFF , 837px 1452px #FFF , 1878px 1384px #FFF , 204px 80px #FFF , 264px 1235px #FFF , 56px 61px #FFF , 810px 1330px #FFF , 58px 197px #FFF , 1044px 708px #FFF , 329px 650px #FFF , 523px 1755px #FFF , 148px 578px #FFF , 1059px 343px #FFF , 862px 194px #FFF , 187px 1036px #FFF , 294px 1751px #FFF , 1890px 554px #FFF , 357px 960px #FFF , 1142px 884px #FFF , 622px 704px #FFF , 891px 826px #FFF , 1789px 436px #FFF , 1865px 49px #FFF , 476px 211px #FFF , 1468px 667px #FFF , 607px 216px #FFF , 1070px 25px #FFF , 1094px 357px #FFF , 1088px 1229px #FFF , 1590px 398px #FFF , 1872px 1479px #FFF , 1972px 1167px #FFF , 1771px 349px #FFF , 1985px 552px #FFF , 1919px 155px #FFF , 1616px 1007px #FFF;
          }

          #stars2 {
            width: 2px;
            height: 2px;
            background: transparent;
            box-shadow: 1291px 625px #FFF , 1534px 1761px #FFF , 521px 198px #FFF , 1682px 1181px #FFF , 823px 615px #FFF , 1174px 1050px #FFF , 708px 1471px #FFF , 1211px 1336px #FFF , 1835px 1520px #FFF , 1927px 483px #FFF , 1535px 1310px #FFF , 989px 663px #FFF , 510px 1436px #FFF , 310px 259px #FFF , 212px 1149px #FFF , 154px 1879px #FFF , 835px 1782px #FFF , 1209px 203px #FFF , 1395px 1462px #FFF , 116px 684px #FFF , 1832px 1526px #FFF , 1804px 1673px #FFF , 1828px 1292px #FFF , 1888px 642px #FFF , 1557px 1967px #FFF , 1927px 557px #FFF , 1172px 1869px #FFF , 1791px 1856px #FFF , 888px 1453px #FFF , 780px 931px #FFF , 123px 1466px #FFF , 805px 875px #FFF , 1373px 428px #FFF , 847px 1215px #FFF , 734px 903px #FFF , 400px 1237px #FFF , 729px 582px #FFF , 221px 301px #FFF , 1195px 1515px #FFF , 21px 1838px #FFF , 899px 288px #FFF , 131px 1543px #FFF , 1787px 670px #FFF , 1523px 512px #FFF , 1050px 322px #FFF , 485px 1922px #FFF , 1806px 828px #FFF , 1426px 1562px #FFF , 1450px 1648px #FFF , 130px 1430px #FFF , 301px 1341px #FFF , 256px 1195px #FFF , 967px 1849px #FFF , 1021px 1409px #FFF , 524px 1087px #FFF , 1141px 1882px #FFF , 459px 522px #FFF , 1270px 223px #FFF , 1460px 583px #FFF , 700px 181px #FFF , 325px 553px #FFF , 43px 784px #FFF , 782px 610px #FFF , 1417px 1910px #FFF , 1919px 1197px #FFF , 1761px 1235px #FFF , 1328px 1562px #FFF , 1918px 1956px #FFF , 1585px 1067px #FFF , 1726px 1931px #FFF , 662px 1182px #FFF , 683px 431px #FFF , 1249px 203px #FFF , 477px 11px #FFF , 732px 843px #FFF , 15px 1716px #FFF , 1358px 508px #FFF , 168px 1648px #FFF , 458px 673px #FFF , 1537px 1470px #FFF , 1575px 1273px #FFF , 56px 727px #FFF , 514px 662px #FFF , 746px 716px #FFF , 1835px 290px #FFF , 221px 469px #FFF , 1135px 1576px #FFF , 500px 782px #FFF , 177px 1191px #FFF , 405px 432px #FFF , 547px 837px #FFF , 583px 1701px #FFF , 1839px 918px #FFF , 1744px 1280px #FFF , 179px 418px #FFF , 1486px 126px #FFF , 965px 1805px #FFF , 109px 1196px #FFF , 274px 942px #FFF , 455px 612px #FFF , 979px 1848px #FFF , 1130px 963px #FFF , 726px 902px #FFF , 203px 1688px #FFF , 1468px 495px #FFF , 304px 1485px #FFF , 487px 1572px #FFF , 1741px 1874px #FFF , 1935px 202px #FFF , 90px 916px #FFF , 947px 1804px #FFF , 1565px 1052px #FFF , 361px 119px #FFF , 853px 1715px #FFF , 595px 240px #FFF , 145px 1966px #FFF , 1872px 144px #FFF , 961px 1708px #FFF , 1130px 634px #FFF , 763px 983px #FFF , 1177px 392px #FFF , 324px 1286px #FFF , 26px 1643px #FFF , 627px 941px #FFF , 420px 585px #FFF , 231px 67px #FFF , 1865px 1011px #FFF , 489px 953px #FFF , 1902px 1230px #FFF , 599px 598px #FFF , 813px 1350px #FFF , 816px 280px #FFF , 1423px 1105px #FFF , 354px 34px #FFF , 743px 15px #FFF , 334px 105px #FFF , 1593px 798px #FFF , 1796px 1842px #FFF , 1938px 574px #FFF , 889px 1848px #FFF , 254px 203px #FFF , 1331px 690px #FFF , 1824px 622px #FFF , 518px 344px #FFF , 1425px 895px #FFF , 944px 1987px #FFF , 1150px 558px #FFF , 26px 637px #FFF , 1143px 1469px #FFF , 240px 1205px #FFF , 1403px 1903px #FFF , 1729px 52px #FFF , 538px 1084px #FFF , 921px 1833px #FFF , 193px 1324px #FFF , 1289px 835px #FFF , 1701px 1749px #FFF , 634px 556px #FFF , 1083px 191px #FFF , 1729px 465px #FFF , 1481px 752px #FFF , 1453px 1268px #FFF , 410px 940px #FFF , 841px 652px #FFF , 1038px 633px #FFF , 1965px 1874px #FFF , 1289px 1647px #FFF , 1163px 1958px #FFF , 1278px 1840px #FFF , 1752px 1967px #FFF , 1854px 1166px #FFF , 67px 1610px #FFF , 1461px 750px #FFF , 934px 780px #FFF , 1306px 1028px #FFF , 708px 108px #FFF , 1232px 177px #FFF , 1410px 1754px #FFF , 1842px 480px #FFF , 169px 342px #FFF , 989px 1253px #FFF , 1559px 1676px #FFF , 1850px 1246px #FFF , 1356px 293px #FFF , 688px 688px #FFF , 1695px 1632px #FFF , 509px 773px #FFF , 1492px 1415px #FFF , 1821px 1062px #FFF , 1989px 1220px #FFF , 282px 268px #FFF , 710px 1965px #FFF , 1129px 238px #FFF , 1228px 1091px #FFF , 1901px 822px #FFF , 847px 1408px #FFF , 1782px 586px #FFF , 242px 1966px #FFF , 1827px 185px #FFF , 1260px 1466px #FFF;
            animation: animStar 100s linear infinite;
          }
          #stars2:after {
            content: " ";
            position: absolute;
            top: 2000px;
            width: 2px;
            height: 2px;
            background: transparent;
            box-shadow: 1291px 625px #FFF , 1534px 1761px #FFF , 521px 198px #FFF , 1682px 1181px #FFF , 823px 615px #FFF , 1174px 1050px #FFF , 708px 1471px #FFF , 1211px 1336px #FFF , 1835px 1520px #FFF , 1927px 483px #FFF , 1535px 1310px #FFF , 989px 663px #FFF , 510px 1436px #FFF , 310px 259px #FFF , 212px 1149px #FFF , 154px 1879px #FFF , 835px 1782px #FFF , 1209px 203px #FFF , 1395px 1462px #FFF , 116px 684px #FFF , 1832px 1526px #FFF , 1804px 1673px #FFF , 1828px 1292px #FFF , 1888px 642px #FFF , 1557px 1967px #FFF , 1927px 557px #FFF , 1172px 1869px #FFF , 1791px 1856px #FFF , 888px 1453px #FFF , 780px 931px #FFF , 123px 1466px #FFF , 805px 875px #FFF , 1373px 428px #FFF , 847px 1215px #FFF , 734px 903px #FFF , 400px 1237px #FFF , 729px 582px #FFF , 221px 301px #FFF , 1195px 1515px #FFF , 21px 1838px #FFF , 899px 288px #FFF , 131px 1543px #FFF , 1787px 670px #FFF , 1523px 512px #FFF , 1050px 322px #FFF , 485px 1922px #FFF , 1806px 828px #FFF , 1426px 1562px #FFF , 1450px 1648px #FFF , 130px 1430px #FFF , 301px 1341px #FFF , 256px 1195px #FFF , 967px 1849px #FFF , 1021px 1409px #FFF , 524px 1087px #FFF , 1141px 1882px #FFF , 459px 522px #FFF , 1270px 223px #FFF , 1460px 583px #FFF , 700px 181px #FFF , 325px 553px #FFF , 43px 784px #FFF , 782px 610px #FFF , 1417px 1910px #FFF , 1919px 1197px #FFF , 1761px 1235px #FFF , 1328px 1562px #FFF , 1918px 1956px #FFF , 1585px 1067px #FFF , 1726px 1931px #FFF , 662px 1182px #FFF , 683px 431px #FFF , 1249px 203px #FFF , 477px 11px #FFF , 732px 843px #FFF , 15px 1716px #FFF , 1358px 508px #FFF , 168px 1648px #FFF , 458px 673px #FFF , 1537px 1470px #FFF , 1575px 1273px #FFF , 56px 727px #FFF , 514px 662px #FFF , 746px 716px #FFF , 1835px 290px #FFF , 221px 469px #FFF , 1135px 1576px #FFF , 500px 782px #FFF , 177px 1191px #FFF , 405px 432px #FFF , 547px 837px #FFF , 583px 1701px #FFF , 1839px 918px #FFF , 1744px 1280px #FFF , 179px 418px #FFF , 1486px 126px #FFF , 965px 1805px #FFF , 109px 1196px #FFF , 274px 942px #FFF , 455px 612px #FFF , 979px 1848px #FFF , 1130px 963px #FFF , 726px 902px #FFF , 203px 1688px #FFF , 1468px 495px #FFF , 304px 1485px #FFF , 487px 1572px #FFF , 1741px 1874px #FFF , 1935px 202px #FFF , 90px 916px #FFF , 947px 1804px #FFF , 1565px 1052px #FFF , 361px 119px #FFF , 853px 1715px #FFF , 595px 240px #FFF , 145px 1966px #FFF , 1872px 144px #FFF , 961px 1708px #FFF , 1130px 634px #FFF , 763px 983px #FFF , 1177px 392px #FFF , 324px 1286px #FFF , 26px 1643px #FFF , 627px 941px #FFF , 420px 585px #FFF , 231px 67px #FFF , 1865px 1011px #FFF , 489px 953px #FFF , 1902px 1230px #FFF , 599px 598px #FFF , 813px 1350px #FFF , 816px 280px #FFF , 1423px 1105px #FFF , 354px 34px #FFF , 743px 15px #FFF , 334px 105px #FFF , 1593px 798px #FFF , 1796px 1842px #FFF , 1938px 574px #FFF , 889px 1848px #FFF , 254px 203px #FFF , 1331px 690px #FFF , 1824px 622px #FFF , 518px 344px #FFF , 1425px 895px #FFF , 944px 1987px #FFF , 1150px 558px #FFF , 26px 637px #FFF , 1143px 1469px #FFF , 240px 1205px #FFF , 1403px 1903px #FFF , 1729px 52px #FFF , 538px 1084px #FFF , 921px 1833px #FFF , 193px 1324px #FFF , 1289px 835px #FFF , 1701px 1749px #FFF , 634px 556px #FFF , 1083px 191px #FFF , 1729px 465px #FFF , 1481px 752px #FFF , 1453px 1268px #FFF , 410px 940px #FFF , 841px 652px #FFF , 1038px 633px #FFF , 1965px 1874px #FFF , 1289px 1647px #FFF , 1163px 1958px #FFF , 1278px 1840px #FFF , 1752px 1967px #FFF , 1854px 1166px #FFF , 67px 1610px #FFF , 1461px 750px #FFF , 934px 780px #FFF , 1306px 1028px #FFF , 708px 108px #FFF , 1232px 177px #FFF , 1410px 1754px #FFF , 1842px 480px #FFF , 169px 342px #FFF , 989px 1253px #FFF , 1559px 1676px #FFF , 1850px 1246px #FFF , 1356px 293px #FFF , 688px 688px #FFF , 1695px 1632px #FFF , 509px 773px #FFF , 1492px 1415px #FFF , 1821px 1062px #FFF , 1989px 1220px #FFF , 282px 268px #FFF , 710px 1965px #FFF , 1129px 238px #FFF , 1228px 1091px #FFF , 1901px 822px #FFF , 847px 1408px #FFF , 1782px 586px #FFF , 242px 1966px #FFF , 1827px 185px #FFF , 1260px 1466px #FFF;
          }

          #stars3 {
            width: 3px;
            height: 3px;
            background: transparent;
            box-shadow: 1340px 1557px #FFF , 385px 1540px #FFF , 905px 414px #FFF , 1895px 1362px #FFF , 333px 597px #FFF , 1775px 1349px #FFF , 878px 790px #FFF , 1906px 1829px #FFF , 899px 126px #FFF , 155px 1115px #FFF , 1846px 1165px #FFF , 1306px 944px #FFF , 1220px 507px #FFF , 1367px 1986px #FFF , 1193px 443px #FFF , 732px 699px #FFF , 1934px 966px #FFF , 807px 176px #FFF , 523px 1313px #FFF , 646px 1409px #FFF , 878px 521px #FFF , 1040px 984px #FFF , 244px 161px #FFF , 1622px 1474px #FFF , 937px 526px #FFF , 709px 1001px #FFF , 1256px 1832px #FFF , 1653px 313px #FFF , 303px 729px #FFF , 25px 1485px #FFF , 1658px 1778px #FFF , 1965px 290px #FFF , 365px 1360px #FFF , 1236px 878px #FFF , 1437px 1463px #FFF , 856px 799px #FFF , 1462px 1856px #FFF , 1215px 421px #FFF , 448px 8px #FFF , 889px 854px #FFF , 67px 210px #FFF , 41px 1700px #FFF , 1233px 963px #FFF , 822px 1780px #FFF , 367px 1701px #FFF , 1735px 855px #FFF , 1820px 1926px #FFF , 1904px 1203px #FFF , 246px 1555px #FFF , 529px 679px #FFF , 1310px 1777px #FFF , 861px 887px #FFF , 537px 78px #FFF , 340px 256px #FFF , 711px 802px #FFF , 825px 1720px #FFF , 76px 952px #FFF , 807px 440px #FFF , 1095px 1604px #FFF , 903px 153px #FFF , 233px 835px #FFF , 296px 1133px #FFF , 448px 888px #FFF , 1291px 1641px #FFF , 1767px 915px #FFF , 1537px 1868px #FFF , 159px 724px #FFF , 1916px 797px #FFF , 685px 1232px #FFF , 610px 111px #FFF , 1400px 1649px #FFF , 1215px 1px #FFF , 657px 428px #FFF , 1358px 824px #FFF , 218px 754px #FFF , 1970px 1225px #FFF , 124px 1031px #FFF , 1668px 1427px #FFF , 495px 260px #FFF , 52px 1374px #FFF , 16px 1321px #FFF , 489px 1757px #FFF , 1700px 297px #FFF , 1732px 1122px #FFF , 1217px 367px #FFF , 1767px 1747px #FFF , 1084px 265px #FFF , 1616px 35px #FFF , 1523px 705px #FFF , 832px 613px #FFF , 1962px 1087px #FFF , 1899px 403px #FFF , 1214px 596px #FFF , 882px 1480px #FFF , 1052px 1510px #FFF , 1427px 168px #FFF , 546px 385px #FFF , 1500px 1319px #FFF , 1007px 1786px #FFF , 1209px 980px #FFF;
            animation: animStar 150s linear infinite;
          }
          #stars3:after {
            content: " ";
            position: absolute;
            top: 2000px;
            width: 3px;
            height: 3px;
            background: transparent;
            box-shadow: 1340px 1557px #FFF , 385px 1540px #FFF , 905px 414px #FFF , 1895px 1362px #FFF , 333px 597px #FFF , 1775px 1349px #FFF , 878px 790px #FFF , 1906px 1829px #FFF , 899px 126px #FFF , 155px 1115px #FFF , 1846px 1165px #FFF , 1306px 944px #FFF , 1220px 507px #FFF , 1367px 1986px #FFF , 1193px 443px #FFF , 732px 699px #FFF , 1934px 966px #FFF , 807px 176px #FFF , 523px 1313px #FFF , 646px 1409px #FFF , 878px 521px #FFF , 1040px 984px #FFF , 244px 161px #FFF , 1622px 1474px #FFF , 937px 526px #FFF , 709px 1001px #FFF , 1256px 1832px #FFF , 1653px 313px #FFF , 303px 729px #FFF , 25px 1485px #FFF , 1658px 1778px #FFF , 1965px 290px #FFF , 365px 1360px #FFF , 1236px 878px #FFF , 1437px 1463px #FFF , 856px 799px #FFF , 1462px 1856px #FFF , 1215px 421px #FFF , 448px 8px #FFF , 889px 854px #FFF , 67px 210px #FFF , 41px 1700px #FFF , 1233px 963px #FFF , 822px 1780px #FFF , 367px 1701px #FFF , 1735px 855px #FFF , 1820px 1926px #FFF , 1904px 1203px #FFF , 246px 1555px #FFF , 529px 679px #FFF , 1310px 1777px #FFF , 861px 887px #FFF , 537px 78px #FFF , 340px 256px #FFF , 711px 802px #FFF , 825px 1720px #FFF , 76px 952px #FFF , 807px 440px #FFF , 1095px 1604px #FFF , 903px 153px #FFF , 233px 835px #FFF , 296px 1133px #FFF , 448px 888px #FFF , 1291px 1641px #FFF , 1767px 915px #FFF , 1537px 1868px #FFF , 159px 724px #FFF , 1916px 797px #FFF , 685px 1232px #FFF , 610px 111px #FFF , 1400px 1649px #FFF , 1215px 1px #FFF , 657px 428px #FFF , 1358px 824px #FFF , 218px 754px #FFF , 1970px 1225px #FFF , 124px 1031px #FFF , 1668px 1427px #FFF , 495px 260px #FFF , 52px 1374px #FFF , 16px 1321px #FFF , 489px 1757px #FFF , 1700px 297px #FFF , 1732px 1122px #FFF , 1217px 367px #FFF , 1767px 1747px #FFF , 1084px 265px #FFF , 1616px 35px #FFF , 1523px 705px #FFF , 832px 613px #FFF , 1962px 1087px #FFF , 1899px 403px #FFF , 1214px 596px #FFF , 882px 1480px #FFF , 1052px 1510px #FFF , 1427px 168px #FFF , 546px 385px #FFF , 1500px 1319px #FFF , 1007px 1786px #FFF , 1209px 980px #FFF;
          }

          #title {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            color: #FFF;
            text-align: center;
            font-family: "lato", sans-serif;
            font-weight: 300;
            font-size: 50px;
            letter-spacing: 10px;
            margin-top: -60px;
            padding-left: 10px;
          }
          #title span {
            background: -webkit-linear-gradient(white, #38495a);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
          }

          @keyframes animStar {
            from {
              transform: translateY(0px);
            }
            to {
              transform: translateY(-2000px);
            }
          }



        /**********************/

    </style>

</head>

<body>
    <section class="barra-navegacion">
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <div class="topnav" id="myTopnav">
            <img src="\imagen\logo-new.png" alt="">
            <a href="#about">Contacto</a>
            <a href="#about">Nuestros Clientes</a>
            <a href="#about">Galeria</a>
            <a href="{{url('portafolio')}}">Portafolio</a>
            <a href="#news">¿Quienes Somos?</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        {{--  <div class="fondo">
        <img src="\imagen\computer-inside.jpg" alt="">
    </div>  --}}

    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>
    <div id='title'>
      <span>
        PURE CSS
      </span>
      <br>
      <span>
        PARALLAX PIXEL STARS
      </span>
    </div>






        <div class="texto-encima fadeInUp ">Multiples servicios, Una sola compañia, La mejor experiencia</div>
    </section>
</body>

</html>
<script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
