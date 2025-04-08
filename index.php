<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
    <style>
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: rgb(239, 238, 238);
}

.box{
    position: relative;
    width: 380px;
    height: 420px;
    border-radius: 8px;
    overflow: hidden;
}

.box::before{
    content: '';
    position: absolute;
    top: -50px;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg, transparent, 
    transparent, #45f3ff, #45f3ff, #45f3ff);
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
}

.box::after{
    content: '';
    position: absolute;
    top: -50px;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg, transparent, 
    transparent, #45f3ff, #45f3ff, #45f3ff);
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -3s;
}
@keyframes animate {
    0%
    {
        transform: rotate(0deg);
    }
    100%
    {
        transform: rotate(360deg);
    }
    
}

.box form{
    position: absolute;
    inset: 4px;
    background: rgb(255, 255, 255);
    padding: 50px 40px;
    border-radius: 8px;
    z-index: 2;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.box form h2{
    font-size: 28px;
    font-weight: bold;
    color: #2b2b2b;
    font-weight: 700;
    text-align: center;
    letter-spacing: 0.1em;
}

.box form .inputBox{
    position: relative;
    width: 300px;
    margin-top: 35px;
    align-items: center;
    display: flex;
}

.box form .inputBox input{
    position: relative;
    width: 100%;
    padding: 20px 10px 10px; 
    background: transparent;
    outline: none;
    border: none;
    box-shadow: none;
    color: #23242a;
    font-size: 1em;
    letter-spacing: 0.05em;
    transition: 0.5s;
    z-index: 10;
}

.box form .inputBox .inputs
{
    position: absolute;
    left: 0;
    padding: 20px 0px 10px;
    pointer-events: none;
    color: #000000;
    font-size: 1em;
    letter-spacing: 0.05em;
    transition: 0.5s;
    z-index: 5;
}

.box form .inputBox input:valid ~ .inputs,
.box form .inputBox input:focus ~ .inputs
{
    color: #000000;
    font-size: 0.75em;
    transform: translateY(-34px);
}

.password-toggle {
    position: absolute;
    top: 40%;
    right: 20px;
    transform: translateY(-8%);
    background: none;
    border: none;
    cursor: pointer;
    color: #6b7280;
    z-index: 10;
}

.password-toggle:hover {
    animation: iconBounce 0.4s ease-in-out;
}

.box form .inputBox i
{
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: #e8e0e0;
    border-radius: 4px;
    overflow: hidden;
    transition: 0.5s;
    pointer-events: none;
}

.box form .inputBox input:valid ~ i,
.box form .inputBox input:focus ~ i
{
    height: 44px;

}

.box form .inputBox button[type="submit"]
{
    border: none;
    outline: none;
    padding: 9px 25px;
    background: #338fe0;
    cursor: pointer;
    border-radius: 600px;
    width: 200px;
    margin-top: -10px;
    color:rgb(255, 255, 255);
    margin-left: 50px;
    margin-right: 50px;
}

.box form .inputBox button[type="submit"]:active
{
    opacity: 0.8;
}


@keyframes shake 
{
    0%, 100% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    50% { transform: translateX(5px); }
    75% { transform: translateX(-5px); }
}
.shake {
    animation: shake 0.3s ease-in-out;
}

@keyframes iconBounce {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.2); }
}
.icon-animate {
    transition: transform 0.2s ease-in-out;
}
.icon-animate:hover {
    animation: iconBounce 0.4s ease-in-out;
}
</style>
</head>

<?php 
    include 'conexao.php';
    include 'views/login.php';

?>  
<body>
</body>
</html>

