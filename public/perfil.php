<?php
        require("conection.php");
        $query = "SELECT * FROM users";
        $resultado = $mysqli->query($query);

       
            while($fila = $resultado->fetch_assoc()){
                if($fila["image"]!= ""){
                    $datosImg = base64_encode($fila["image"]);
                }
                
               
            }
        
        
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/tailwind.css" rel="stylesheet">
    <title>Change info</title>
</head>
<body>
    <div class="flex flex-col px-6 pt-6 gap-3">
        <div class="flex flex-raw justify-between items-center">
            <div>
                <img src="./recursos/devcha.svg" alt="">
            </div>
            <div class="w-12 h-13">
                <img src="data:image/jpg;base64,<?php echo $datosImg ?>" alt="" class="object-cover">
            </div>
        </div>
        <div class="flex flex-raw">
            <img src="./recursos/flechIzq.svg" alt="">
            <span>Back</span>
        </div>
        <div>
            <div class="flex flex-col gap-3  md:w-4/6 md:border md:rounded-lg md:p-6">
                <div class="flex flex-col gap-1">
                    <div class="text-2xl font-normal">Change Info</div>
                    <div class="text-[#828282] text-sm font-medium">Change will be reflected to every services</div>
                </div>
                
                <form action="subirimg.php" method="post" enctype="multipart/form-data" class="flex flex-col gap-3">
                    
                    <div class="flex flex-raw gap-3 items-center ">
                        <label for="img" class="border border-stone-400 rounded-lg p-3 bg-center bg-no-repeat flex items-center justify-center w-20 h-20 cursor-pointer" style="background-image: url(data:image/jpg;base64,<?php echo $datosImg ?>)"><img src="./recursos/camara.svg" alt=""></label>
                        <input type="file" name="img" id="img" class="hidden invisible" accept="image/png, .jpeg, .jpg, image/gif" />
                        <p class="text-[#BDBDBD] text-sm">CHANGE PHOTO</p>
                    </div>

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