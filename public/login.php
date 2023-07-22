<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/tailwind.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<div class="flex flex-col border rounded-lg w-screen h-screen pt-6 px-6 gap-5 items-center">
        <div class="flex flex-col gap-4 justify-start w-full">
            <div><img src="./recursos/devcha.svg" alt=""></div>
            <h3 class="text-lg font-semibold">Login</h3>
        </div>
        <form class="flex flex-col w-full gap-3 pt-5" action="loginbd.php" method="post">
            <div class="flex flex-raw border rounded-md h-11">
                <img src="./recursos/sobre.svg" alt="">
                <input type="email" id="correo" name="email" placeholder="Email" />
            </div>

            <div class="flex flex-raw border rounded-md h-11">
                <img src="./recursos/candado.svg" alt="">
                <input type="password" id="pasword" name="pasword" placeholder="Password" />
            </div>
            
            <input type="submit" value="Start coding now" class="bg-blue-600 font-semibold text-lg rounded-md text-white mt-4 h-11"/>
        </form>
        <div class="flex flex-col items-center w-3/4 gap-6 pt-3">
            <span class="text-[#828282] text-sm font-normal">or continue with these social profile</span>
            <div class="flex flex-row gap-2 justify-center">
                <a class="border-zinc-500 border rounded-full p-2">
                    <img src="./recursos/google.svg" alt="">
                </a>
                <a class="border-zinc-500 border rounded-full p-2">
                    <img src="./recursos/face.svg" alt="">
                </a>
                <a class="border-zinc-500 border rounded-full p-2">
                    <img src="./recursos/twit.svg" alt="">
                </a>
                <a class="border-zinc-500 border rounded-full p-2">
                    <img src="./recursos/github.svg" alt="">
                </a>
            </div>
            <span class="text-[#828282] text-sm font-normal">Don't have an account yet? <a href="index.php">Register</a> </span>
        </div>
        <div class="flex flex-row justify-between font-normal text-sm w-full text-[#BDBDBD] pt-10">
            <div>Milton Procel</div>
            <div>devchallenges.io</div>
        </div>


</body>
</html>