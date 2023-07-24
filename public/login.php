<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/tailwind.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<div class="flex flex-col w-screen h-screen pt-6 px-6 gap-5 items-center">
    <div class="sm:border sm:rounded-xl sm:w-[27rem] sm:h-[33.5rem] sm:flex sm:justify-between sm:flex-col sm:px-8 sm:py-6 sm:mt-14">
        <div class="flex flex-col gap-4 justify-start w-full">
            <div><img src="./recursos/devcha.svg" alt=""></div>
            <h3 class="text-lg font-semibold">Login</h3>
        </div>
        <form class="flex flex-col w-full gap-3 pt-5" action="loginbd.php" method="post">
            <div class="flex flex-raw border rounded-md h-11 focus-within:border-2">
                <img src="./recursos/sobre.svg" alt="">
                <input type="email" id="correo" name="email" placeholder="Email" class="border-none outline-none w-full" />
            </div>

            <div class="flex flex-raw border rounded-md h-11 focus-within:border-2">
                <img src="./recursos/candado.svg" alt="">
                <input type="password" id="pasword" name="pasword" placeholder="Password" class="border-none outline-none w-full" />
            </div>
            
            <input type="submit" value="Start coding now" class="bg-blue-600 font-semibold text-lg rounded-md text-white mt-4 h-11"/>
        </form>
        <div class="flex flex-col items-center gap-6 pt-3 w-full">
            <span class="text-[#828282] text-sm font-normal">or continue with these social profile</span>
            <div class="flex flex-row gap-2 justify-center">
                <a href="https://www.google.com" class="border-zinc-500 border rounded-full p-2">
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
            <span class="text-[#828282] text-sm font-normal">Don't have an account yet? <a href="index.php" class="text-blue-600">Register</a> </span>
        </div>
    </div>
    <div class="flex flex-row justify-between font-normal text-sm w-full text-[#BDBDBD] pt-10 sm:pt-0 sm:w-2/6">
        <div>Milton Procel</div>
        <div>devchallenges.io</div>
    </div>


</body>
</html>