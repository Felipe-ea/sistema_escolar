<?php

    session_start();

    require_once 'controller/verificaAutenticacao.php';
    require_once 'controller/carregaTela.php';
    //require_once 'controller/cadastrarProfessor.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Sistema Escolar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        *
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root
{
    --blue: #287bff;
    --white: #fff;
    --grey: #f5f5f5;
    --black1: #222;
    --black2: #999;
}

body
{
    min-height: 100vh;
    overflow-x: hidden;
}

.container
{
    position: relative;
    width: 100%;
}

.navigation
{
    position: fixed;
    width: 300px;
    height: 100%;
    background: var(--blue);
    border-left: 10px solid var(--blue);
    transition: 0.5s;
    overflow: hidden;
}

.navigation.active
{
    width: 80px;
}


.navigation ul
{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
}


.navigation ul li
{
    position: relative;
    width: 100%;
    list-style: none;
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
}

.navigation ul li:hover ,
.navigation ul li.hovered
{
    background: var(--white);
    position: relative;
    width: 200%;
    list-style: none;
}


.navigation ul li:nth-child(1)
{
    color: var(--white);
    margin-bottom: 40px;
    pointer-events: none;
}

.navigation ul li .buttonstyle
{
    cursor: pointer;
    position: relative;
    display: block;
    width: 100%;
    height: 60px;
    display: flex;
    text-decoration: none;
    color: var(--white);
}

.navigation ul li:hover .buttonstyle ,
.navigation ul li.hovered .buttonstyle
{
    color: var(--blue);
}

.navigation ul li .icon
{
    position: relative;
    display: block;
    min-width: 60px;
    height: 60px;
    line-height: 70px;
    text-align: center;
}


.navigation ul li .icon ion-icon
{
    font-size: 1.75em;
}

.navigation ul li .title
{
    all: unset;
    position: relative;
    display: block;
    padding: 0 10px;
    height: 60px;
    inset: 0;
    line-height: 60px;
    text-align: start;
    white-space: nowrap;
}

.navigation ul li:hover .buttonstyle::before ,
.navigation ul li.hovered .buttonstyle::before
{
    content: '';
    position: absolute;
    right: 0;
    top: -50px;
    width: 50px;
    height: 50px;
    background: transparent;
    border-radius: 50%;
    box-shadow: 35px 35px 0 10px var(--white);
    pointer-events: none;
}

.navigation ul li:hover .buttonstyle::after ,
.navigation ul li.hovered .buttonstyle::after
{
    content: '';
    position: absolute;
    right: 0;
    bottom: -50px;
    width: 50px;
    height: 50px;
    background: transparent;
    border-radius: 50%;
    box-shadow: 35px -35px 0 10px var(--white);
    pointer-events: none;
}

.main
{
    position: absolute;
    width: calc(100% - 300px);
    left: 300px;
    min-height: 100vh;
    background: var(--white);
    transition: 0.5s;
}

.main.active
{
    width: calc(100% - 80px);
    left: 80px;
}

.topbar
{
    width: 100%;
    height: 60px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 10px;
}

.toggle
{
    position: relative;
    width: 60px;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 2.5em;
    cursor: pointer;
}

@media (max-width: 991px)
{
    .navigation
    {
        left: -300px;
    }
    
    .navigation.active
    {
        width: 300px;
        left: 0;
    }
    .main
    {
        width: 300px;
        left: 0;
    }
    .main.active
    {
        left: 300px;
    }
}

    </style>
</head>
<body>
    <div class="container">
        <div class="navigation">
        <form method="POST" id="sendbutton" class="space-y-2">
                <ul>
                    <li>
                        <div class="buttonstyle">
                            <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                            <span class="title">Sistema Escolar</span>
                        </div>
                    </li>

                    <?php
                    include 'controller/verificaGrupoUsuario.php' 
                    ?>

                    <!-- Botão Sair fixo no final -->
                    <li>
                        <button class="buttonstyle" onclick="window.location.href='controller/logout.php'">
                            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>            
                            <span class="title" >Sair</span>
                        </button>
                    <li>
                </ul>
            </form>
        </div>
    </div>

    <!-- Conteúdo Principal -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
        </div>
        <?php
        if ($tela_em_exibicao != null) {
            include 'views/' . $tela_em_exibicao;
        } else {
            include 'views/inicio.php';
        }
        ?>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');

        toggle.onclick = function(){
            navigation.classList.toggle('active');
            main.classList.toggle('active')
        }

        let list = document.querySelectorAll('.navigation li');
        function activeLink(){
            list.forEach((item) =>
            item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) =>
        item.addEventListener('mouseover',activeLink));
    </script>
</body>
</html>
