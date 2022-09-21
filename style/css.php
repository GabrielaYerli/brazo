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
            *{
                margin:0px;
                padding:0px;
            }
            .body-login{
                overflow: hidden; 
            }
            .container-form{
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

            /* enbellecimiento del formulario */
            .form{
                margin-top:5%;
                width: 50%;
                margin-left:25%;
                height: auto;
            }
            .form .welcome-form{
                display: flex;
                justify-content: center;
                margin-top: 40px;
            }
            .form .welcome-form h1{
                font-weight: 300;
                font-size: 39px;
                color: black;
            }
            .form .welcome-form .titulo_span{
                width: 100%;
                font-size: 39px;
                font-weight: bold;
                color: black;
            }
            .line-input{
                max-width: 100%;
                display: flex;
                border-bottom: 1px solid #868282;
                margin: auto;
                margin-top: 40px;
                padding: 6px;
                position: relative;
            }
            .user{
                padding-top:3%;
                width:60%;
            }
            .line-input input{
                background:#f7e9f5;
                border-style: none;
                outline: 0px;
                margin-left: 10px;
                font-size: 30px;
                width: 100%;
                height: 100%;
                font-weight: 300;
            }
            .line-input label{
                font-size: 40px;
                position: relative;
                top: -4px;
                color: black;
            }
            .icono{
                text-align: center;
                height: 20px;
                width: 20px;
                color: black;
                font-weight: bold;
                cursor: pointer;
            }
            .icono:hover{
                color: white;
            }
            .form button{
                width: 400px;
                height: 60px;
                display: block;
                margin: auto;
                text-align: center;
                margin-top: 70px;
                color: black;
                background: rgb(247, 56, 111);
                outline: 0px;
                border:none;
                border-radius: 50px;
                font-size: 25px;
                font-weight: bold;
                cursor: pointer;
            }
            .iconButton{
                height: 30px;
                width: 30px;
            }
            .form button:hover{
                opacity: .9;
                border-bottom: 2px solid;
                border-radius:5px;
                background: rgb(0, 0, 0);
                color: rgb(255, 255, 255);
                border-radius: 50px;
            }
            .form button label{
                position: relative;
                left: 50px;
                font-size: 10px;
                cursor: pointer;
            }

            
            @media (max-width: 700px) {
            .logo-title{
                display: flex;
                font-size:15px;
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
                font-size:18px;
                color: black;
            }
            .menu li{
                list-style: none;
                text-decoration: none;
                padding: 30px;
                padding-bottom: 20px;
                font-weight: 800;
            }

            /* enbellecimiento del formulario */
            .form{
                width: 60%;
            }
            .form .welcome-form h1{
                font-weight: 300;
                font-size: 30px;
                color: black;
            }
            .form .welcome-form .titulo_span{
                font-size: 39px;
            }
            .line-input{
                max-width: 100%;
                margin-top: 30px;
            }
            .line-input input{
                margin-left: 5px;
                font-size: 20px;
            }
            .line-input label{
                font-size: 30px;
            }
            .form button{
                width: 200px;
                height: 60px;
                font-size: 25px;
            }
            }
            
            @media (max-width: 560px) {
            .logo-title{
                display: flex;
                font-size:12px;
                margin-top: 15px;
                margin-left:40px;
                font-weight: none;
            }
            .logo-title img{
                width: 65px;
                height: 65px;
            }
            .logo-title h2{		
                margin-left: 15px;
                margin-top: 18px;
            }
            .menu{
                display: flex;
                position: absolute;
                right: 75px;
                font-size:17px;
                color: black;
                right: 40px;
            }
            .menu li{
                list-style: none;
                text-decoration: none;
                padding: 30px;
                padding-bottom: 20px;
                font-weight: 800;
            }

            /* enbellecimiento del formulario */
            .form{
                width: 80%;
                margin-top:15%;
                margin-left:20%;
            }
            .form .welcome-form h1{
                font-weight: 300;
                font-size: 25px;
                color: black;
            }
            .form .welcome-form .titulo_span{
                font-size: 25px;
            }
            .line-input{
                max-width: 100%;
                margin-top: 30px;
            }
            .line-input input{
                margin-left: 1px;
                font-size: 20px;
            }
            .line-input label{
                font-size: 30px;
            }
            .form button{
                width: 200px;
                height: 60px;
                font-size: 25px;
            }
            }
            @media (min-width: 493px) {
            
            .logo-title{
                margin-left:15px;
                font-weight: none;
            }
            .logo-title h2{		
                margin-left: 10px;
                margin-top: 18px;
            }
            .menu{
                right: 20px;
            }

            /* enbellecimiento del formulario */
            .form{
                width: 100%;
                margin-top:15%;
                margin-left:10%;
            }
            .line-input{
                max-width: 100%;
                margin-top: 30px;
            }
            .line-input input{
                margin-left: 1px;
                font-size: 20px;
            }
            .line-input label{
                font-size: 30px;
            }
            .form button{
                width: 200px;
                height: 60px;
                font-size: 25px;
            }
            .user{
                padding-top:3%;
                width:60%;
            }
            }

            
        </style>
    </body>