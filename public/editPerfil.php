<?php

    session_start();
    require("conection.php");

    if(!isset($_SESSION["users"])){
        echo "No estas autorizado";
        require("index.php");
        die();
    }

    $id = $_SESSION["users"]["id"];
    $nombre = $_SESSION["users"]["nombre"];
    $query = "SELECT * FROM users WHERE id=$id";
    $resultado = $mysqli->query($query);
    $datosImg = null;

    while ($fila = $resultado->fetch_assoc()) {
        if ($fila["image"] != "") {
            $datosImg = base64_encode($fila["image"]);
        }
    }
    $mysqli->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/tailwind.css" rel="stylesheet">
    <title>Change info</title>
    <script src="./cambio.js" defer></script>
</head>
<body>
    <div class="flex flex-col px-6 pt-6 gap-3">
    <div class="flex flex-raw justify-between items-center bg-white">
            <div id="miBoton">
                <div class="fixed top-8">
                    <img src="./recursos/devcha.svg" alt="">
                </div>
                <div class="flex flex-row gap-3 items-center fixed top-6 right-8 ">
                <?php echo $datosImg != null ? '<img src="data:image/jpg;base64,' . $datosImg . '" alt="" class="object-cover w-12 h-13">' : '<img src="./recursos/fotovacia.jpg" alt="" class="object-cover w-12 h-13">'; ?>    
                    <div class="flex-row hidden md:flex ">
                        <div class="font-bold text-sm"><?= $nombre ?> </div>
                        <img src="./recursos/flecha.svg" alt="">
                    </div>
                </div>
            </div>
            <div id="miElemento" class="flex flex-col bg-white fixed right-8 top-20 gap-3 rounded-xl border p-3 w-36">
                <a href="./perfil.php" class="flex flex-row gap-2">
                    <img src="./recursos/myprofile.svg" alt="">
                    <div class="font-medium text-sm">My Profile</div>
                </a>
                <a href="./groupchat.php" class="flex flex-row gap-2">
                    <img src="./recursos/groupchat.svg" alt="">
                    <div class="font-medium text-sm">Group Chat</div>
                </a>
                <hr>
                <a href="./logout.php" class="flex flex-row gap-2">
                    <img src="./recursos/logout.svg" alt="">
                    <div class="text-red-600 font-medium text-sm">Logout</div>
                </a>
            </div>
        </div>
        <a href="./perfil.php" class="pt-8">
            <div class="flex flex-raw">
                <img src="./recursos/flechIzq.svg" alt="">
                <span>Back</span>
            </div>
        </a>
        <div class="flex flex-col w-full justify-center items-center pt-3 ">
            <div class="flex flex-col gap-6 md:w-4/6 md:border md:rounded-lg md:p-6">
                <div class="flex flex-col gap-1">
                    <div class="text-2xl font-normal">Change Info</div>
                    <div class="text-[#828282] text-sm font-medium">Change will be reflected to every services</div>
                </div>
                
                <form action="subirimg.php" method="post" enctype="multipart/form-data" class="flex flex-col gap-3">
                    
                    
                    <label for="img" class="p-3 flex flex-raw items-center cursor-pointer gap-7">
                        <div class="relative w-14 h-13  rounded-lg justify-center items-center">
                            <img src="./recursos/camara.svg" alt="" class="absolute top-4 left-4">
                            <?php echo $datosImg != null ? '<img src="data:image/jpg;base64,' . $datosImg . '" alt="" class="object-cover">' : '<img src="./recursos/fotovacia.jpg" alt="" class="object-cover">'; ?> 
                        </div>
                        <p class="text-[#BDBDBD] text-sm">CHANGE PHOTO</p>
                        <input type="file" name="img" id="img" class="hidden invisible" accept="image/png, .jpeg, .jpg, image/gif" />
                    </label>
                        
                    

                    <div class="flex flex-col">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name..." class="border border-stone-400 rounded-lg h-9 p-1" />
                    </div>

                    <div class="flex flex-col">
                        <label for="bio">Bio</label>
                        <input type="text" id="bio" name="bio" placeholder="Enter your bio..." class="border border-stone-400 rounded-lg h-20 p-1" />
                    </div>

                    <div class="flex flex-col">
                        <label for="phone">Phone</label>
                        <input type="numeric" id="phone" name="phone" placeholder="Enter your phone..." class="border border-stone-400 rounded-lg h-9 p-1" />
                    </div>

                    <div class="flex flex-col">
                        <label for="email">Email</label>
                        <input type="email" id="email" required name="email" placeholder="Enter your email..." class="border border-stone-400 rounded-lg h-9 p-1" />
                    </div>

                    <div class="flex flex-col">
                        <label for="pasword">Password</label>
                        <input type="password" id="pasword" required name="pasword" placeholder="Enter your password..." class="border border-stone-400 rounded-lg h-9 p-1" />
                    </div>

                    <input type="submit" value="Save" class="bg-blue-600 rounded-lg text-white h-9 w-24" />
                </form>
            </div>
            <div class="flex flex-row justify-between font-normal text-sm w-full text-[#BDBDBD] py-4">
                <div>Milton Procel</div>
                <div>devchallenges.io</div>
            </div>
        </div>
        
    </div>
    

</body>
</html>