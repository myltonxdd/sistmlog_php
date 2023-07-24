<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>Miniproyecto 3</title>
</head>
<body>
    <div class="flex flex-col w-screen h-screen pt-6 px-6 gap-5 items-center">
        <div class="md:border md:rounded-xl md:w-[27rem] sm:px-8 sm:py-6 sm:mt-14">
            <div class="flex flex-col gap-4 ">
                <div><img src="./recursos/devcha.svg" alt=""></div>
                <h3 class="text-lg font-semibold">join thousands of learners from around the world</h3>
                <p class="text-base">Master web development by making real-life projects. There are multiple paths for you to choose</p>
            </div>
            <form class="flex flex-col w-full gap-3 pt-5 sm:pt-3" action="metodo_get.php" method="post">
                <?php if(isset($_SESSION["error_correo"])){
                print("<p class='text-red-600 text-sm'>".$_SESSION["error_correo"]."</p>");
                unset($_SESSION["error_correo"]);}?>
                <div class="flex flex-raw border rounded-md h-11 focus-within:border-2">
                    <img src="./recursos/sobre.svg" alt="">
                    <input type="email" id="correo" name="email" placeholder="Email" class="border-none outline-none w-full" />
                </div>

                <div class="flex flex-raw border rounded-md h-11 focus-within:border-2">
                    <img src="./recursos/candado.svg" alt="">
                    <input type="password" id="pasword" name="pasword" placeholder="Password" class="border-none outline-none" />
                </div>
                
                <input type="submit" value="Start coding now" class="bg-blue-600 font-semibold text-lg rounded-md text-white mt-4 sm:mt-2 h-11"/>
            </form>
            <div class="flex flex-col items-center w-full gap-6 pt-3">
                <span class="text-[#828282] text-sm font-normal">or continue with these social profile</span>
                <div class="flex flex-row gap-2 justify-center">
                    <a href="https://www.google.com/" class="border-zinc-500 border rounded-full p-2">
                        <img src="./recursos/google.svg" alt="">
                    </a>
                    <a href="https://www.facebook.com" class="border-zinc-500 border rounded-full p-2">
                        <img src="./recursos/face.svg" alt="">
                    </a>
                    <a href="https://www.twiter.com" class="border-zinc-500 border rounded-full p-2">
                        <img src="./recursos/twit.svg" alt="">
                    </a>
                    <a href="https://github.com/myltonxdd/sistmlog_php" class="border-zinc-500 border rounded-full p-2">
                        <img src="./recursos/github.svg" alt="">
                    </a>
                    
                </div>
                <span class="text-[#828282] text-sm font-normal ">Adready a member? <a href="login.php" class="text-blue-600">Login</a></span>
            </div>
        </div>
        <div class="flex flex-row justify-between font-normal text-sm w-full text-[#BDBDBD] pt-10 sm:pt-0 sm:w-2/6">
            <div>Milton Procel</div>
            <div>devchallenges.io</div>
        </div>
        

    </div>
    


</body>
</html>



