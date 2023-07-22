<?php
    require("conection.php");
    $query = "SELECT * FROM users";
    $resultado = $mysqli->query($query);

    
    while($fila = $resultado->fetch_assoc()){
        if($fila["image"]!= ""){
            $datosImg = base64_encode($fila["image"]);
        }
        if($fila["nombre"]){}
        if($fila["email"]){}
        if($fila["pasword"]){}
        if($fila["phone"]){}
        if($fila["bio"]){}
        
    }
    $mysqli->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/tailwind.css" rel="stylesheet">
    <title>Personal Info</title>
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
                    <div class="text-2xl font-normal">Personal Info</div>
                    <div class="text-[#828282] text-sm font-medium">Basic Info, like your name and photo</div>
                </div>
                <div class="flex flex-raw">
                    <div class="flex fle-col">
                        <div class="text-2xl font-normal">Profile</div>
                        <div class="text-[#828282] text-sm font-medium">Some info may be visible to other people</div>
                    </div>
                    <div class="border rounded-lg">Edit</div>
                </div>
            </div>
            <div class="flex flex-col">
                <div>
                    <div>PHOTO</div>
                </div>
                <div>
                    <div>NAME</div>
                    <div></div>
                </div>
                <div>
                    <div>BIO</div>
                    <div></div>
                </div>
                <div>
                    <div>EMAIL</div>
                    <div></div>
                </div>
                <div>
                    <div>PASSWORD</div>
                    <div></div>
                </div>
            <div>
            <div class="flex flex-row justify-between font-normal text-sm w-full text-[#BDBDBD] py-4">
                <div>Milton Procel</div>
                <div>devchallenges.io</div>
            </div>
        </div>
        
    </div>
    

</body>
</html>