<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .container-desktop{
                width: 100%;
                height: 100%;
                background-color: #f5d5f0 ;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                overflow: hidden;
            }
            /* ENBELLECIMIENTO DEL HEADER */
            .header{
                width: 100%;
                height: 100px;
                padding: 10px;
                background: rgb(247, 56, 111);
                display: flex;
                position: relative;
            }
            .logo-title{
                display: flex;
                font-size:20px;
                margin-top: 15px;
                margin-left:45px;
            }
            .logo-title img{
                width: 65px;
                height: 65px;
            }
            .logo-title h2{		
                margin-left: 15px;
                margin-top: 18px;
                color: black;
                font-weight: 800;
            }
            .menu{
                display: flex;
                position: absolute;
                right: 75px;
                font-size:23px;
                color: black;
            }
            .menu li{
                list-style: none;
                text-decoration: none;
                padding: 30px;
                padding-bottom: 25px;
                font-weight: 800;
            }

            menu li:hover{
                border-bottom: 4px solid rgb(252, 249, 249);
                cursor: pointer;
            }
            a{
                text-decoration: none;
                color:black;
            }
            a:hover{
                border-bottom: 2px solid;
                border-radius:5px;
                background: rgb(0, 0, 0);
                color: rgb(255, 255, 255);
            }
            
            /* enbellecimiento del caja desktop */
            .desktop{
                margin-top:5%;
                width: 60%;
                margin-left:20%;
                height: auto;
            }
            .desktop .welcome-desktop{
                display: flex;
                justify-content: center;
                margin-top: 40px;
            }
            .desktop .welcome-desktop h1{
                font-weight: 300;
                font-size: 39px;
                color: black;
            }
            .desktop .welcome-desktop .titulo_span{
                width: 100%;
                font-size: 39px;
                font-weight: bold;
                color: black;
            }
            .content-table{ 
                border-collapse: separate; 
                margin: 25px 0;
                border:2px; 
                font-family: sans-serif; 
                font-size:20px;
                width: 100%;
                height: auto;
                min-width: 450px; 
                box-shadow: 0 0 20px black;
                background-color:white; 
            }
            .content-table th, ..content-table td { 
                padding: 12px 15px; 
            }
            .content-table tbody tr { 
                border-bottom: 1px solid black; 
                background-color:rgba(247, 56, 111,0.5);
            } 
            .content-table tbody tr:nth-of-type(even) { 
                background-color: white; 
            } 
            .content-table tbody tr:last-of-type { 
                border-bottom: 2px solid black; 
            }
            .delate .delateButtom{
                width: 50%;
                height: 70px;
                margin-left:30%;
                font-size:30px;
                text-align:center;
                background-color:rgba(247, 56, 111,0.5);
                border:none;
                border-radius:50px;
            }
            .delate .delateButtom .delateIcon{
                text-align:center;
                background-color:none;
                width: 40px;
                height: 30px;
            }
            

    </style>
</body>
</html>