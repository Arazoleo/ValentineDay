<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://img.freepik.com/vetores-gratis/coracao_53876-25531.jpg">
    <title>Love</title>
    <style>
        body{
            overflow: hidden; 
            background: url('https://lh3.googleusercontent.com/proxy/xWS_Gcghm_VLuCSh9_cYNsjGfnS9YdoXpCMz4yxwljwtZN3b6fNOz2BV6iJl8D5rUOH65_6aw-ubGM6z2cjS1t5D1Z_VUeUp00Rz3gXBQZLGg4c')
        }
        img{
            width: 250px;
            height: 300px;
            border-radius: 20%;
            filter: blur(2px);
            transition: all 0.3s;
            position: relative;
            top: 6em;
            margin: 23px;
        }
        img:hover{
            filter: blur(0px);
            box-shadow: 0px 0px 20px purple;
        }
        #title{
            font-size: 45px;
            color: white;
            text-align: center;
            text-shadow: 0px 0px 10px white;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            animation: PiscaTexto 2s infinite ease-in-out;
        }
        @keyframes PiscaTexto{
            0%{
                text-shadow: 0px 0px 10px white;
            }
            25%{
                text-shadow: 0px 0px 20px white;
            }
            50%{
                text-shadow: 0px 0px 40px white;
            }
            75%{
                text-shadow: 0px 0px 20px white;
            }
            100%{
                text-shadow: 0px 0px 10px white;
            }

        }
        
        #sub{
            text-align: center;
            color: white;
            font-size: 30px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .im1{
            animation: ShowCont 2s ease-in-out;
        }
        .im2{
            animation: ShowCont 1.7s ease-in-out;
        }
        .im3{
            animation: ShowCont 1.4s ease-in-out;
        }
        .im4{
            animation: ShowCont 1.0s ease-in-out;
        }
        .im5{
            animation: ShowCont 0.7s ease-in-out;
        }

    @keyframes ShowCont {
    from{
        transform: translateY(100%);
        opacity: 0;
        }
    
    
    
    to{
        opacity: 1;
        transform: translateY(0%);
    }
    
    
}

#text{
    font-size: 30px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    text-align: center;
    color: fuchsia;
    text-shadow: 0px 0px 10px fuchsia;
    animation: PiscaTexto2 2s infinite ease-in-out;
}

@keyframes PiscaTexto2{
            0%{
                text-shadow: 0px 0px 10px fuchsia;
            }
            25%{
                text-shadow: 0px 0px 20px fuchsia;
            }
            50%{
                text-shadow: 0px 0px 40px fuchsia;
            }
            75%{
                text-shadow: 0px 0px 20px fuchsia;
            }
            100%{
                text-shadow: 0px 0px 10px fuchsia;
            }

        }
    </style>
</head>
<body>
    <p id ="title">Feliz dia dos namorados !</p>
    <p id = "sub">Meu amor, por toda a eternidade...</p>
    <p id = "text">Te amo muito!</p>
    <img class = "im1" src="imagens/imagem1.jpg" alt="">
    <img class = "im2"  src="imagens/imagem2.jpg" alt="">
    <img class = "im3"  src="imagens/imagem3.jpg" alt="">
    <img class = "im4"  src="imagens/imagem4.jpg" alt="">
    <img class = "im5"  src="imagens/imagem5.jpg" alt="">

    
</body>
</html>