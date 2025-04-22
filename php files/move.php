<?php
$apikey = "a78f8377";


$pass = 1;
$date3 = '';

$filename = "date.txt";
$lines = file($filename, FILE_IGNORE_NEW_LINES);
foreach ($lines as $lineNumber => $lineContent) {
    $date3 =$lineContent; 
$date4 = (int)$date3; 
$date4+=1;

}


if (isset($_POST["button4"]) || isset($_POST["button2"]) || isset($_POST["button3"])) {

$numbar2=0;
$filename = "times.txt";
$lines = file($filename, FILE_IGNORE_NEW_LINES);
$time = "";
foreach ($lines as $lineNumber => $lineContent) {
$numbar2+=1;
    $time .=$lineContent . "\n"; 
$time+=1;
}
if(isset($_POST["button2"]) || isset($_POST["button3"])){
$movename = $_POST["button2"];
$movename2 = $movename;
$moveseson = '';
}else{
$movename = $_POST["button4"];
$movename2 = preg_replace('/\/\/.*/', '', $movename);
$moveseson = str_replace($movename2, '', $movename);
$moveseson = str_replace('//', '', $moveseson);
}
$file=fopen("times.txt", "w");
fwrite($file,$time);
fclose($file);


$file = $movename;
$file_extension = pathinfo($file, PATHINFO_EXTENSION);
$nottype = basename($movename, ".".$file_extension); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ihsan flix</title>
<link rel="icon" type="image/png" href="m.png"/>
</head>
<style>
.hide{
width:0px;
}
html{
    overflow-x: hidden;
 width:100vw;
background-color:black;
}
.back{
    position: relative;
    background-color: grey;
    height: 10vw;
    width: 10vw;
    margin-right: 80vw;
    margin-bottom: 2vw;
}
.backimg{
    position: relative;
    width: 9vw;
}
form,body{
height: fit-content;
    width:fit-content;
    margin: 0px;
    border: 0px;
    padding: 0px;
}

*{z-index:2;
transition-timing-function: ease-in-out;
  transition-duration: 1s;
}
.img{
    margin: 0px;
position: relative;
z-index:1;
    height: 25vw;
object-fit: cover;
width:45vw;
bottom:0vw;
}
.buttont{
border:0vw;
margin-bottom:3vw;
margin-left: 3vw;
    color: #bac5ff;
    background-color: #2b00ff;
   /* Prevents text  #6d0000e8 #00ffda from wrapping */
          overflow-x: hidden;
    overflow-y:hidden ;

 /* Adds ellipsis (...) for overflow text */
white-space: nowrap;

    padding: 0px;
    height: fit-content;
    z-index: 1;
       position: relative;
    width: fit-content;
max-height: calc(25vw);

}

.text , .text3{
min-width: 100%;
max-width: fit-content;
transition-duration: 1s;
    margin: 0px;
    font-size: 0vw;
bottom:8vw;
    position: absolute;
    
height: 0.8vw;

  animation-name: text;
animation-iteration-count: infinite;
  animation-duration: 10s;
animation-timing-function:cubic-bezier(0, 1.02, 0.18, -0.12);
}
.text2{
font-size: 0px;
    width: 0px;
    position: absolute;
}
@media (hover: none) {
.text2{
max-width: fit-content;
min-width: 100%;
transition-duration: 0s;
    margin: 0px;
    font-size: 5vw;
bottom:0vw;
    position: absolute;
max-height: 5vw;

  animation-name: text;
animation-iteration-count: infinite;
  animation-duration: 15s;
animation-timing-function:cubic-bezier(0, 1.02, 0.18, -0.12);
}

}



@keyframes text {
0%{transform: translateX(105vw);}
100%{transform: translateX(-105vw);}
}
@media (hover: hover) {
.buttont:hover{
padding-top:6vw;
}
.buttont:hover .text{
        font-size: 5vw;
        bottom: 95%;
        position: absolute;
}
.buttont:hover  .text3{
        font-size: 5vw;
        bottom: 95vw;
        position: relative;
}
.buttont:hover  .img{
margin:0px;
height: 20vw;
}
}

.sandep{
    position: relative;
    width: -webkit-fill-available;
    height: 10vh;
    color: white;
    font-size: 5vh;
    margin: 0px;
    text-align: center;
}
</style>
<body>
<?php






?><form method="post">
<button type="submit" name="back" class="back" ><img class="backimg" alt="back" src="back.svg" ></button>
<div class="sandep"><h3 style="margin:0px;">sessions</h3></div>
<?php

//here it start
$shows = $movename2;
$smn2 = 0;
$smn3 = 0;
$numberoffiles2 = 1;
while (file_exists(__DIR__ . DIRECTORY_SEPARATOR . $shows . DIRECTORY_SEPARATOR . $numberoffiles2 . DIRECTORY_SEPARATOR."1.mp4")){
$numberoffiles2 += 1;
}
$numberoffiles2 -= 1;
$shown = $numberoffiles2;
while ($shown > $smn3){



$smn2 += 1;

$h2 = $shows.$smn2;
$h = $shows."//".$smn2;

$smn3+=1;
$bn = preg_replace("/<$/",'', "$shows");

?>

<canvas id="canvas<?php echo $smn2; ?>" style="display:none;"></canvas>

<button type="submit" name="button4" value="<?php echo $h;?>" class="buttont" >


<?php 

$file_extension = pathinfo($bn, PATHINFO_EXTENSION);
$nottype2 = basename($bn, ".".$file_extension); 
//don't over wright nottype2
$nottype3 = $nottype2." S".$smn2 ;
$bng = $nottype3.'.jpeg'; 
?><h3 class="text3"></h3><h3 class="text">session <?php echo $smn2;?></h3><h3 class="text2">session <?php echo $smn2;?></h3><?php
if(!file_exists($bng)){
?>
<img id="screenshot<?php echo $smn2; ?>" class="img" alt="<?php echo $nottype2;?>" src="wait plese.gif" ><?php
}if(!file_exists($bng)){?>
</button>

<video id="hideVideo<?php echo $smn2; ?>" class="hide">
    <source src="http://192.168.1.109/1/vid/moves/<?php echo $h ; ?>/1.mp4" type="video/mp4">
</video>
<script>
//time = 0;
console.log(0);
    document.addEventListener("DOMContentLoaded", function() {
        var video = document.getElementById("hideVideo<?php echo $smn2; ?>");
        video.src = "http://192.168.1.109/1/vid/moves//<?php echo $h ; ?>/1.mp4";
        video.onloadedmetadata = function() {
            var x = video.duration;
            console.log(parseInt(x));
            //if (x > 0){
time = parseInt(video.duration) / 2;
//}
console.log(1);
        };

        video.crossOrigin = "Ihsan"; // If the video is from a different origin
        video.addEventListener("loadeddata", () => {
//            if (time > 0){
            video.currentTime = time;
//}else{
//            video.currentTime = 160;
//}
console.log(2);
        });

        video.addEventListener("seeked", () => {
console.log(3);
            const canvas = document.getElementById("canvas<?php echo $smn2; ?>");
            const context = canvas.getContext("2d");
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
console.log(4);
            const dataURL = canvas.toDataURL("image/jepg");
            // Lower the image quality and then send it to the server
            lowerQualityImage(dataURL).then((lowQualityDataURL) => {
console.log(5);
                document.getElementById("screenshot<?php echo $smn2; ?>").src = lowQualityDataURL;
                // Save the image to the server using an AJAX request
                fetch(window.location.href, {
                    method: "POST",
                    body: JSON.stringify({ image: lowQualityDataURL, name: "<?php echo $nottype3; ?>" }),
                    headers: { "Content-Type": "application/json" }
                })

                .then(response => response.json())
                .then(data => console.log(data))
                .catch(error => console.error("Error:", error));
            });
console.log(8);
        });
console.log(9);

        video.load();

        // Function to lower the image quality
        function lowerQualityImage(dataURL) {
            // Create a new image
            const img = new Image();
            img.src = dataURL;
            // Return a promise that resolves with the lower-quality image
            return new Promise((resolve) => {
                img.onload = () => {
                    // Create a canvas element
                    const canvas = document.createElement('canvas');
                    const ctx = canvas.getContext('2d');
                    // Set canvas dimensions to match the image
                    canvas.width = img.width;
                    canvas.height = img.height;
                    // Draw the image onto the canvas
                    ctx.drawImage(img, 0, 0);
                    // Get the lower-quality image data URL (JPEG format, quality = 0.5)
                    const lowQualityDataURL = canvas.toDataURL('image/jpeg', 0.45); // 0.2 = 20% quality
                    resolve(lowQualityDataURL);
                };
            });
        }
    });
</script>
<?php
}else{
?>
<img class="img" alt="ERROR" src="<?php echo $bng ; ?>" ></button>
<?php

}

}
//here it ends
?>
<div class="sandep"><h3 style="margin:0px;">episodes</h3></div>



<?php

$shownumber = 0;
$showplace = "C:\\xampp\\htdocs\\1\\vid\\moves\\".$movename."\\".$shownumber.".mp4";
$shownloop=1;
$showwhileloop = "C:\\xampp\\htdocs\\1\\vid\\moves\\".$movename."\\".$shownloop.".mp4";

while (file_exists($showwhileloop)){

$shownloop+=1;
$showwhileloop = "C:\\xampp\\htdocs\\1\\vid\\moves\\".$movename."\\".$shownloop.".mp4";

$shownumber += 1;

$showplace = "C:\\xampp\\htdocs\\1\\vid\\moves\\".$movename."\\".$shownumber.".mp4";
//echo $shownumber;
?>

<canvas id="canvas<?php echo $shownumber; ?>" style="display:none;"></canvas>

<button type="submit" name="button3" value="<?php echo $movename."\\".$shownumber.".mp4";?>" class="buttont" >


<?php 

$file_extension = pathinfo($showplace, PATHINFO_EXTENSION);
//$nottype55 = basename($showplace, ".".$file_extension); 
$nottype3 = $nottype2." S".$moveseson." ep".$shownumber ;
//$nottype4 = $shownumber ;
$bng = $nottype3.'.jpeg'; 
?><h3 class="text3"></h3><h3 class="text">episode <?php echo $shownumber.' session '.$moveseson ;?></h3><h3 class="text2">episode <?php echo $shownumber.' session '.$moveseson ;?></h3><?php
if(!file_exists($bng)){
?>
<img id="screenshot<?php echo $shownumber; ?>" class="img" alt="<?php echo $nottype2;?>" src="wait plese.gif" ><?php
}if(!file_exists($bng)){?>
</button>

<video id="hideVideo<?php echo $shownumber; ?>" class="hide">
    <source src="http://192.168.1.109/1/vid/moves/<?php echo $movename; ?>/<?php echo $shownumber; ?>.mp4" type="video/mp4">
</video>
<script>
//time = 0;
console.log(0);
    document.addEventListener("DOMContentLoaded", function() {
        var video = document.getElementById("hideVideo<?php echo $shownumber; ?>");
        video.src = "http://192.168.1.109/1/vid/moves/<?php echo $movename; ?>/<?php echo $shownumber; ?>.mp4";
        video.onloadedmetadata = function() {
            var x = video.duration;
            console.log(parseInt(x));
            //if (x > 0){
time = parseInt(video.duration) / 2;
//}
console.log(1);
        };

        video.crossOrigin = "anonymous"; // If the video is from a different origin
        video.addEventListener("loadeddata", () => {
//            if (time > 0){
            video.currentTime = time;
//}else{
//            video.currentTime = 160;
//}
console.log(2);
        });

        video.addEventListener("seeked", () => {
console.log(3);
            const canvas = document.getElementById("canvas<?php echo $shownumber; ?>");
            const context = canvas.getContext("2d");
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
console.log(4);
            const dataURL = canvas.toDataURL("image/jepg");
            // Lower the image quality and then send it to the server
            lowerQualityImage(dataURL).then((lowQualityDataURL) => {
console.log(5);
                document.getElementById("screenshot<?php echo $shownumber; ?>").src = lowQualityDataURL;
                // Save the image to the server using an AJAX request
                fetch(window.location.href, {
                    method: "POST",
                    body: JSON.stringify({ image: lowQualityDataURL, name: "<?php echo $nottype3.'.mp4'; ?>" }),
                    headers: { "Content-Type": "application/json" }
                })

                .then(response => response.json())
                .then(data => console.log(data))
                .catch(error => console.error("Error:", error));
            });
console.log(8);
        });
console.log(9);

        video.load();

        // Function to lower the image quality
        function lowerQualityImage(dataURL) {
            // Create a new image
            const img = new Image();
            img.src = dataURL;
            // Return a promise that resolves with the lower-quality image
            return new Promise((resolve) => {
                img.onload = () => {
                    // Create a canvas element
                    const canvas = document.createElement('canvas');
                    const ctx = canvas.getContext('2d');
                    // Set canvas dimensions to match the image
                    canvas.width = img.width;
                    canvas.height = img.height;
                    // Draw the image onto the canvas
                    ctx.drawImage(img, 0, 0);
                    // Get the lower-quality image data URL (JPEG format, quality = 0.5)
                    const lowQualityDataURL = canvas.toDataURL('image/jpeg', 0.45); // 0.2 = 20% quality
                    resolve(lowQualityDataURL);
                };
            });
        }
    });
</script>
<?php
}else{?>
<img class="img" alt="ERROR" src="<?php echo $bng ; ?>" ></button>
<?php
}

}

?></form><?php



if(isset($_POST["button3"])) {
$theshowisdone = $_POST["button3"];
$theshowname = str_replace("\\", " episode ", "$theshowisdone"); echo $theshowname;
$theshowname = str_replace(".mp4","", "$theshowname"); echo $theshowname;
$movewatch ='
<?php
$pos = "mov";
if (isset($_POST["button1"])) {
$pos = "mov";
}
if (isset($_POST["button2"])) {
$pos = "nmov";
}

$times = date("d");
$timee = '.$date4.';
$timeleft = ($timee - $times);
if($timeleft <= 0){
if (file_exists("move-room-number'.$time.'.php")) {
unlink("move-room-number'.$time.'.php");}
}
?>
<!DOCTYPE html>
<html lang="en" style="background-color: black;">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" type="image/png" href="m.png"/>
</head>

<style>
body,html{
    width: 100%;
overflow-x: hidden;
    overflow-y: visible;
    }
.mov , .nmov{
    object-fit: cover;
    background-color: #00e7ff4d;

    width: 100vw;
}
.h1{
    height: min-content;
    width: max-content;
color:#bac5ff;
  animation-name: text;
animation-iteration-count: infinite;
  animation-duration: 15s;
animation-timing-function:linear;
}


@keyframes text {
0%{transform: translateX(100vw);}
100%{transform: translateX(-100%);}
}
.nmov{
object-fit: contain;
}
.button{
color:#bac5ff;
    background-color:#2b00ff;
    height: 12vw;
    width: 100vw;
    border: 0px;
    padding: 0px;
font-size:8vw;

}
#h3{
    margin: 0px;
    font-size: 8vw;
    position: relative;

}.button{
color:#bac5ff;
    background-color:#2b00ff;
    height: 12vw;
    width: 100vw;
    border: 0px;
    padding: 0px;
font-size:8vw;

}
#h3{
    margin: 0px;
    font-size: 8vw;
    position: relative;

}
</style>
<body>
<title>watch '.$theshowname.' in room '.$time.'</title>
<h1 class="h1">'.$nottype.'</h1>
<video controls id="videoPlayer"  class="<?php echo $pos ; ?>">
<source src="http://192.168.1.109/1/vid/moves/'. $theshowisdone .'" type="video/mp4">
<track src="http://192.168.1.109/1/vid/moves/'.str_replace('.mp4','',$theshowisdone).'.vtt" kind="subtitles" srclang="ar" label="AR">
</video>
<button type="button" name="button1" class="button" onclick="chenge()"><h3 id="h3" >scale-down/fit video size</h3></button>
<h1><?php echo $timeleft ; ?></h1>
<script>
function chenge(){
	  //console.log(Element.classList.contains("mov"))
	  //element = document.getElementsByClassName("mov");
	  //	  element2 = document.getElementsByClassName("h3");
	  element = document.getElementById("videoPlayer");
	  element2 = document.getElementById("h3");
	  console.log(element);
	  console.log(element2);
	  if(element.classList == "mov"){
		element2.innerHTML = "scale-up/fit screen";
	  element.classList.remove("mov"); // Remove mystyle class from DIV
      element.classList.add("nmov"); // Add newone class to DIV
	  }else{
		element2.innerHTML = "scale-down/fit video size";
	  element.classList.remove("nmov"); // Remove mystyle class from DIV
      element.classList.add("mov"); // Add newone class to DIV
	  }
}
</script>
</body>
';

$file=fopen("C:\\xampp\\htdocs\\1\\vid\\moves\\movie\\move-room-number".$time.".php", "w");
fwrite($file,$movewatch);
fclose($file);



?>
<script>window.location="http://192.168.1.109/1/vid/moves/movie/move-room-number<?php echo $time; ?>.php"</script><?php
//put the } in here when done {done}
}
}else{

if (isset($_POST["button"])) {

$numbar2=0;
$filename = "times.txt";
$lines = file($filename, FILE_IGNORE_NEW_LINES);
$time = "";
foreach ($lines as $lineNumber => $lineContent) {
$numbar2+=1;
    $time .=$lineContent . "\n"; 
$time+=1;
}
$movename = $_POST["button"];
$file=fopen("times.txt", "w");
fwrite($file,$time);
fclose($file);


$file = $movename;
$file_extension = pathinfo($file, PATHINFO_EXTENSION);
$nottype = basename($movename, ".".$file_extension); 


$movewatch ='
<?php
$pos = "mov";
if (isset($_POST["button1"])) {
$pos = "mov";
}
if (isset($_POST["button2"])) {
$pos = "nmov";
}

$times = date("d");
$timee = '.$date4.';
$timeleft = ($timee - $times);
if($timeleft <= 0){
if (file_exists("move-room-number'.$time.'.php")) {
unlink("move-room-number'.$time.'.php");}
}
?>
<!DOCTYPE html>
<html lang="en" style="background-color: black;">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" type="image/png" href="m.png"/>
</head>

<style>
body,html{
    width: 100%;
overflow-x: hidden;
    overflow-y: visible;
    }
.mov , .nmov{
    object-fit: cover;
    background-color: #00e7ff4d;

    width: 100vw;
}
.h1{
    height: min-content;
    width: max-content;
color:#bac5ff;
  animation-name: text;
animation-iteration-count: infinite;
  animation-duration: 15s;
animation-timing-function:linear;
}


@keyframes text {
0%{transform: translateX(100vw);}
100%{transform: translateX(-100%);}
}
.nmov{
object-fit: contain;
}
.button{
color:#bac5ff;
    background-color:#2b00ff;
    height: 12vw;
    width: 100vw;
    border: 0px;
    padding: 0px;
font-size:8vw;

}
#h3{
    margin: 0px;
    font-size: 8vw;
    position: relative;

}
</style>
<body>
<title>watch '.$nottype.' in room '.$time.'</title>
<h1 class="h1">'.$nottype.'</h1>
<video id="videoPlayer"  class="<?php echo $pos ; ?>" controls controlsList="nodownload">
<source src="http://192.168.1.109/1/vid/moves/' . $movename .'" type="video/mp4">
<track src="http://192.168.1.109/1/vid/moves/'.$nottype.'-EN.vtt" kind="subtitles" srclang="en" label="En">
<track src="http://192.168.1.109/1/vid/moves/'.$nottype.'-AR.vtt" kind="subtitles" srclang="ar" label="AR">
</video>
<button type="button" name="button1" class="button" onclick="chenge()"><h3 id="h3">scale-down/fit video size</h3></button>
<h1><?php echo $timeleft ; ?></h1>
<script>
function chenge(){
	  //console.log(Element.classList.contains("mov"))
	  //element = document.getElementsByClassName("mov");
	  //	  element2 = document.getElementsByClassName("h3");
	  element = document.getElementById("videoPlayer");
	  element2 = document.getElementById("h3");
	  console.log(element);
	  console.log(element2);
	  if(element.classList == "mov"){
		element2.innerHTML = "scale-up/fit screen";
	  element.classList.remove("mov"); // Remove mystyle class from DIV
      element.classList.add("nmov"); // Add newone class to DIV
	  }else{
		element2.innerHTML = "scale-down/fit video size";
	  element.classList.remove("nmov"); // Remove mystyle class from DIV
      element.classList.add("mov"); // Add newone class to DIV
	  }
}
</script>
</body>
';

$file=fopen("C:\\xampp\\htdocs\\1\\vid\\moves\\movie\\move-room-number".$time.".php", "w");
fwrite($file,$movewatch);
fclose($file);



?>
<script>window.location="http://192.168.1.109/1/vid/moves/movie/move-room-number<?php echo $time; ?>.php"</script><?php
}










// Check if the request is a POST request and if the request contains raw POST data

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty(file_get_contents('php://input'))) {
    // Get the raw POST data
    $data = json_decode(file_get_contents('php://input'), true);

    // Check if the image data is set
    if (isset($data['image']) && isset($data['name'])) {
        // Extract the base64 encoded data
        $base64String = $data['image'];
        // Remove the prefix "data:image/jpeg;base64,"
        $base64String = preg_replace('#^data:image/\w+;base64,#i', '', $base64String);
        // Decode the base64 string
        $imageData = base64_decode($base64String);

        // Set a file name for the image


        $fileName =  basename($data['name'], ".mp4") . '.jpeg';

        // Save the image to the server
        if (file_put_contents($fileName, $imageData)) {
            // Respond with success
            echo json_encode(['status' => 'success', 'file' => $fileName]);
        } else {
             //Respond with error
            echo json_encode(['status' => 'error', 'message' => 'Could not save the image.']);
        }
    }
     // Stop further execution if it's an image request
}

//width:-webkit-fill-available;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ihsan flix</title>
<link rel="icon" type="image/png" href="m.png"/>
</head>
<style>
html{
background-color:black;
    overflow-x: hidden;
 width:100vw;
}
form,body{
height: fit-content;
    width: fit-content;
    margin: 0px;
    border: 0px;
    padding: 0px;
}
.button{
 height: 50px;
width:100px;
}
.imgbutton{
height: fit-content;
    width: fit-content;
    margin: 0px;
    border: 0px;
    padding: 0px;
}
*{z-index:2;
transition-timing-function: ease-in-out;
  transition-duration: 1s;
}
.img{
    margin: 0px;
position: relative;
z-index:1;
    height: 25vw;
object-fit: cover;
width:45vw;
bottom:0vw;
}
.buttont{
    backface-visibility: hidden;
border:0vw;
margin-bottom:3vw;
margin-left: 3vw;
    color: #bac5ff;
    background-color: #2b00ff;
   /* Prevents text  #6d0000e8 #00ffda from wrapping */
          overflow-x: hidden;
    overflow-y:hidden ;

 /* Adds ellipsis (...) for overflow text */
white-space: nowrap;

    padding: 0px;
    height: fit-content;
    z-index: 1;
       position: relative;
    width: fit-content;
max-height: calc(25vw);

}

#button ,#t{
width: 95vw;
margin-left:2vw;
}



.text , .text3{
min-width: 100%;
max-width: fit-content;
transition-duration: 1s;
    margin: 0px;
    font-size: 0vw;
bottom:8vw;
    position: absolute;
    
height: 0.8vw;

  animation-name: text;
animation-iteration-count: infinite;
  animation-duration: 10s;
animation-timing-function:cubic-bezier(0, 1.02, 0.18, -0.12);
}
.text2{
font-size: 0px;
    width: 0px;
    position: absolute;
}
@media (hover: none) {
.text2{
max-width: fit-content;
min-width: 100%;
transition-duration: 0s;
    margin: 0px;
    font-size: 5vw;
bottom:0vw;
    position: absolute;
max-height: 5vw;

  animation-name: text;
animation-iteration-count: infinite;
  animation-duration: 15s;
animation-timing-function:cubic-bezier(0, 1.02, 0.18, -0.12);
}

}

#img{
width:-webkit-fill-available;
}

@keyframes text {
0%{transform: translateX(105vw);}
100%{transform: translateX(-105vw);}
}
@media (hover: hover) {
/*this is for when you wan't to tern off the 3d*/
/*.buttont:hover{
padding-top:6vw;
}
.buttont:hover .text{
        font-size: 5vw;
        bottom: 95%;
        position: absolute;
}
.buttont:hover  .text3{
        font-size: 5vw;
        bottom: 95vw;
        position: relative;
}
.buttont:hover  .img{
margin:0px;
height: 20vw;
}
*/
}
/* what is this?? */
.check{

    font-size: medium;
    width: fit-content;
    color: white;
    position: absolute;
}
.space{
height: 20px;
    width: 100vw;

}
.hide{
width:0px;
}
</style>
<body>
<div class="space"></div>
<?php

//cubic-bezier(0, 1.3, 1, -0.21)

//    if ($lineContent == 0) {
//        break; 
//}


$numbar=0;
$filename = "move.txt";
$lines = file($filename, FILE_IGNORE_NEW_LINES);
$allprodact3 = "";
foreach ($lines as $lineNumber => $lineContent) {
$numbar+=1;

    $allprodact3 .= $lineContent . "\\n"; 
}

//$notnow = date("Y-m-d H:i:s");

$date = date("Ymd");

$numbar2=0;
$filename = "times.txt";
$lines = file($filename, FILE_IGNORE_NEW_LINES);
$time = "";
foreach ($lines as $lineNumber => $lineContent) {
$numbar2+=1;
    $time .=$lineContent . "\n"; 
$time+=1;

}

$mn=0;//movename?>
<form method="post"><?php
while ($numbar > $mn){


$lines = explode("\\n", $allprodact3);
$bn1 = $lines[$mn];
$mn+=1;

//bn is 2 and bn1 is 1

$bn = preg_replace("/<$/",'', "$bn1",);

$filename = "date.txt";
$lines = file($filename, FILE_IGNORE_NEW_LINES);
$date2 = "";
foreach ($lines as $lineNumber => $lineContent) {
$numbar2+=1;
    $date2 .=$lineContent . "\n"; 
$date2+=1;
}

//$timeleft = $date2 - $date;

if($date2 <= $date){
$time += 100;
echo "<h6 id='wait'>";
while($time >= 0){
$file=__dir__."\\movie\\move-room-number".$time.".php";
$time-=1;
echo "<br> trying to unlink ".$file;
if(file_exists($file)){
	echo "<br>unlink ".$file." work";
}
@unlink($file);
}
echo "</h6>
<script>
element2 = document.getElementById('wait');
element2.innerHTML = '';
</script>";
$file=fopen("times.txt", "w");
fwrite($file,1);
fclose($file);

$day=date("Ymd");

$file=fopen("date.txt", "w");
fwrite($file,$day);
fclose($file);
}


?>

<canvas id="canvas<?php echo $mn; ?>" style="display:none;"></canvas>
<div class="td">
<?php
if ($mn <= 1){
$id = "img";
?>
<button type="submit" name="button" value="<?php echo $bn1;?>" class="buttont" id="button" >
<?php
}else{
$id = "noid";
$id2 = "noid";
?>
<button type="submit" name="button" value="<?php echo $bn1;?>" class="buttont" ><?php } ?>


<?php 

$file_extension = pathinfo($bn, PATHINFO_EXTENSION);
$nottype2 = basename($bn, ".".$file_extension); 
$bng = $nottype2.'.jpeg'; 
?><h3 class="text3"></h3><h3 class="text"><?php echo $nottype2;?></h3><h3 class="text2"><?php echo $nottype2;?></h3><?php
if(!file_exists($bng)){
?>
<img id="screenshot<?php echo $mn; ?>" class="img" alt="<?php echo $nottype2;?>" src="wait plese.gif" >

<video id="hideVideo<?php echo $mn; ?>" class="hide">
    <source src="<?php echo $bn;?>" type="video/mp4">
    <source src="<?php echo $nottype2;?>" type="video/ogg">
</video>
<script>
//time = 0;
console.log(0);
    document.addEventListener("DOMContentLoaded", function() {
        var video = document.getElementById("hideVideo<?php echo $mn; ?>");
        video.src = "<?php echo $bn; ?>";
        video.onloadedmetadata = function() {
            var x = video.duration;
            console.log(parseInt(x));
            //if (x > 0){
time = parseInt(video.duration) / 2;
//}
console.log(1);
        };

        video.crossOrigin = "anonymous"; // If the video is from a different origin
        video.addEventListener("loadeddata", () => {
//            if (time > 0){
            video.currentTime = time;

//}else{
//            video.currentTime = 160;
//}
console.log(2);
        });

        video.addEventListener("seeked", () => {
console.log(3);
            const canvas = document.getElementById("canvas<?php echo $mn; ?>");
            const context = canvas.getContext("2d");
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
console.log(4);
            const dataURL = canvas.toDataURL("image/jepg");
            // Lower the image quality and then send it to the server
            lowerQualityImage(dataURL).then((lowQualityDataURL) => {
console.log(5);
                document.getElementById("screenshot<?php echo $mn; ?>").src = lowQualityDataURL;


                // Save the image to the server using an AJAX request
                fetch(window.location.href, {
                    method: "POST",
                    body: JSON.stringify({ image: lowQualityDataURL, name: "<?php echo $bn; ?>" }),
                    headers: { "Content-Type": "application/json" }
                })

                .then(response => response.json())
                .then(data => console.log(data))
                .catch(error => console.error("Error:", error));
            });
console.log(8);
        });
console.log(9);

        video.load();

        // Function to lower the image quality
        function lowerQualityImage(dataURL) {
            // Create a new image
            const img = new Image();
            img.src = dataURL;
            // Return a promise that resolves with the lower-quality image
            return new Promise((resolve) => {
                img.onload = () => {
                    // Create a canvas element
                    const canvas = document.createElement('canvas');
                    const ctx = canvas.getContext('2d');
                    // Set canvas dimensions to match the image
                    canvas.width = img.width;
                    canvas.height = img.height;
                    // Draw the image onto the canvas
                    ctx.drawImage(img, 0, 0);
                    // Get the lower-quality image data URL (JPEG format, quality = 0.5)
                    const lowQualityDataURL = canvas.toDataURL('image/jpeg', 0.45); // 0.2 = 20% quality
                    resolve(lowQualityDataURL);
                };
            });
        }
    });

        document.getElementById("screenshot<?php echo $mn; ?>").addEventListener('change', function(event) {
            const file = event.target.files[0];
            const img = new Image();
            img.src = URL.createObjectURL(file);
            img.onload = function() {
                const canvas = document.getElementById('canvas<?php echo $mn; ?>');
                const ctx = canvas.getContext('2d');
                canvas.width = img.width;
                canvas.height = img.height;
                ctx.drawImage(img, 0, 0);
                const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
                const data = imageData.data;
                let isBlack = true;
                for (let i = 0; i < data.length; i += 4) {
                    if (data[i] !== 0 || data[i + 1] !== 0 || data[i + 2] !== 0) {
                        isBlack = false;
                        break;
                    }
                }
                while (isBlack) {
//time = 0;
console.log(0);
    document.addEventListener("DOMContentLoaded", function() {
        var video = document.getElementById("hideVideo<?php echo $mn; ?>");
        video.src = "<?php echo $bn; ?>";
        video.onloadedmetadata = function() {
            var x = video.duration;
            console.log(parseInt(x));
            //if (x > 0){
time = parseInt(video.duration) / 2;
//}
console.log(1);
        };

        video.crossOrigin = "anonymous"; // If the video is from a different origin
        video.addEventListener("loadeddata", () => {
//            if (time > 0){
            video.currentTime = time;

//}else{
//            video.currentTime = 160;
//}
console.log(2);
        });

        video.addEventListener("seeked", () => {
console.log(3);
            const canvas = document.getElementById("canvas<?php echo $mn; ?>");
            const context = canvas.getContext("2d");
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
console.log(4);
            const dataURL = canvas.toDataURL("image/jepg");
            // Lower the image quality and then send it to the server
            lowerQualityImage(dataURL).then((lowQualityDataURL) => {
console.log(5);
                document.getElementById("screenshot<?php echo $mn; ?>").src = lowQualityDataURL;


                // Save the image to the server using an AJAX request
                fetch(window.location.href, {
                    method: "POST",
                    body: JSON.stringify({ image: lowQualityDataURL, name: "<?php echo $bn; ?>" }),
                    headers: { "Content-Type": "application/json" }
                })

                .then(response => response.json())
                .then(data => console.log(data))
                .catch(error => console.error("Error:", error));
            });
console.log(8);
        });
console.log(9);

        video.load();

        // Function to lower the image quality
        function lowerQualityImage(dataURL) {
            // Create a new image
            const img = new Image();
            img.src = dataURL;
            // Return a promise that resolves with the lower-quality image
            return new Promise((resolve) => {
                img.onload = () => {
                    // Create a canvas element
                    const canvas = document.createElement('canvas');
                    const ctx = canvas.getContext('2d');
                    // Set canvas dimensions to match the image
                    canvas.width = img.width;
                    canvas.height = img.height;
                    // Draw the image onto the canvas
                    ctx.drawImage(img, 0, 0);
                    // Get the lower-quality image data URL (JPEG format, quality = 0.5)
                    const lowQualityDataURL = canvas.toDataURL('image/jpeg', 0.45); // 0.2 = 20% quality
                    resolve(lowQualityDataURL);
                };
            });
        }
    })
                    alert('The image is completely black.');
video.currentTime += 10;
console.log("add 10");
                    console.log(<?php echo $mn; ?>);
                }
            };
        });
</script>



<?php
}else{
?><img id="<?php echo $id;?>" class="img" alt="<?php echo $nottype2;?>" src="<?php echo $bng; ?>">
<?php
}
?>
</button>
<button type="submit" name="button" value="<?php echo $bn1;?>" class="backf" <?php if ($mn <= 1){ echo "id='t'"; }?> >
<?php

// The URL of the XML file
$url = "https://www.omdbapi.com/?t=".urlencode($nottype2)."&r=xml&apikey=".$apikey;


if (@file_get_contents($url,false,NULL,0,1)){
$xml = simplexml_load_file($url);
}else{
$xml = false;
}

//$work = $xml->root['response'];

if ($xml === false) {
if(file_exists($nottype2.'.xml')){
$xml = simplexml_load_file($nottype2.'.xml');
}else{
$xml = new SimpleXMLElement('<root response="True"/>');
$movie = $xml->addChild('movie');
$movie->addAttribute('title', $nottype2);
$movie->addAttribute('type','show');
$movie->addAttribute('Genre', 'more info are not unavailable for an error in the api');


$if = fopen($nottype2.'.xml' , 'w');
fwrite($if,$movie->asXML());
fclose($if);
}
}else{
$if = fopen($nottype2.'.xml' , 'w');
fwrite($if,$xml->asXML());
fclose($if);
}

// Check if the XML was loaded successfully


// Display the movie information
$title = "Title: " . $xml->movie['title'] . "\n";
$year = "Year: " . $xml->movie['year'] . "\n";
//not neded $= "Rated: " . $xml->movie['rated'] . "\n"
//$Released= "Released: " . $xml->movie['released'] . "\n";
//$Runtime= "Runtime: " . $xml->movie['runtime'] . "\n";
$Genre= "Genre: " . $xml->movie['genre'] . "\n";
//$Director= "Director: " . $xml->movie['director'] . "\n";
//$Writer= "Writer: " . $xml->movie['writer'] . "\n";
$Actors= "Actors: " . $xml->movie['actors'] . "\n";
$Plot = "Plot: " . $xml->movie['plot'] . "\n";
//$= "Language: " . $xml->movie['language'] . "\n";
$count= "Country: " . $xml->movie['country'] . "\n";
//$= "Awards: " . $xml->movie['awards'] . "\n";
//not neded $= "Poster: " . $xml->movie['poster'] . "\n"
// what is this ?? $= "Metascore: " . $xml->movie['metascore'] . "\n";
$Rating= "Rating: " . $xml->movie['imdbRating'] . "\n";
//no $= "IMDB Votes: " . $xml->movie['imdbVotes'] . "\n";
//not neded $= "IMDB ID: " . $xml->movie['imdbID'] . "\n"
$type= "Type: " . $xml->movie['type'] . "\n";



?>

<!-- <img src="<?php echo $bng; ?>" alt="Reflected Image" class="reflected"> -->
<img class="tdimg" alt="<?php echo $nottype2;?>" src="<?php echo $bng; ?>" <?php if ($mn <= 1){ echo "id='timg'"; }?> > 
<h1 style="margin: 1vh;" class="f"><?php echo $title ; ?></h1><br>
<p class="f"><?php echo $type.'<br>'.$Rating.'<br>'.$year.'<br>'.$Genre.'<br>'.$count.'<br>'.$Actors.'<br>'.$Plot ; ?></p>
</button>

</div>


<!-- <div class="d3">
</div>
<div class="td">
</div>

 -->
</div>
<?php
}
//api key is a78f8377
//https://www.omdbapi.com/?t=wall-e&apikey=a78f8377
?>
<style>
/*this enteire ting is for when you whant 3d*/
.tdimg {
    height: 4.5vw;
    width: auto;
    position: absolute;
    left: 5vw;
    top: 3.5vw;
    transform: rotateY(0deg) translateZ(0vw);
    z-index: 1;
    -webkit-box-reflect: below 1px linear-gradient(to bottom, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0));
    animation-duration: 10s;
    animation-delay: 0s;
/*    animation-name: hover; */
    animation-timing-function: ease-in-out;
backface-visibility: hidden;
}
@media (hover: hover) {
.td:hover .tdimg{
    animation-name: hover;
}
.td:hover #timg{
/* shover special hover */
    animation-name: shover;
}
@keyframes shover{
0%{
    backface-visibility: visible;
    transform: rotateY(180deg) translateZ(10vw);
    height: 0vw;
    -webkit-box-reflect: below 1px linear-gradient(to bottom, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.9));
    left: 110vw;
}
25%{
    backface-visibility: visible;
    transform: rotateY(180deg) translateZ(10vw);
    height: 11vw;
    -webkit-box-reflect: below 1px linear-gradient(to bottom, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.9));
    left: 88vw;
}
40%{
transform: rotateY(120deg) translateZ(10vw);
    height: 11vw;
    left: 87vw;
}
/*40%{
    left: 32vw;
    transform: rotateY(120deg) translateZ(0vw);
    height: 11vw;
}*/
60%{
transform: rotateY(45deg) translateZ(10vw);
    height: 11vw;
    -webkit-box-reflect: below 1px linear-gradient(to bottom, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.9));
    left: 87vw;
}
80%{
transform: rotateY(45deg) translateZ(10vw);
    height: 11vw;
    -webkit-box-reflect: below 1px linear-gradient(to bottom, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.9));
    left: 40vw;
}
90%{
    transform: rotateY(45deg) translateZ(10vw);
    height: 11vw;
    -webkit-box-reflect: below 1px linear-gradient(to bottom, rgba(0, 0, 0, 0.0), rgb(0 0 0 / 0%));
    left: 40vw;
}
100%{transform: rotateY(0deg) translateZ(0vw); height: 13.5vw;     -webkit-box-reflect: below 1px linear-gradient(to bottom, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0));}
}
@keyframes hover{
0%{
    backface-visibility: visible;
    transform: rotateY(180deg) translateZ(10vw);
    height: 0vw;
    -webkit-box-reflect: below 1px linear-gradient(to bottom, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.9));
    left: 0vw;
}
25%{
    backface-visibility: visible;
    transform: rotateY(180deg) translateZ(10vw);
    height: 11vw;
    -webkit-box-reflect: below 1px linear-gradient(to bottom, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.9));
    left: 13vw;
}
40%{
transform: rotateY(120deg) translateZ(0vw);
    height: 11vw;
    left: 33vw;
}
/*40%{
    left: 32vw;
    transform: rotateY(100deg) translateZ(0vw);
    height: 11vw;
}*/
60%{
transform: rotateY(45deg) translateZ(20vw);
    height: 11vw;
    -webkit-box-reflect: below 1px linear-gradient(to bottom, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.9));
    left: 10vw;
}
80%{
transform: rotateY(45deg) translateZ(20vw);
    height: 11vw;
    -webkit-box-reflect: below 1px linear-gradient(to bottom, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.9));
    left: 10vw;
}
90%{
    transform: rotateY(45deg) translateZ(20vw);
    height: 11vw;
    -webkit-box-reflect: below 1px linear-gradient(to bottom, rgba(0, 0, 0, 0.0), rgb(0 0 0 / 0%));
    left: 30vw;
}
100%{transform: rotateY(0deg) translateZ(0vw); height: 4.5vw;     -webkit-box-reflect: below 1px linear-gradient(to bottom, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0));}
}
}
#timg{
    height: 13.5vw;
    left: 1vw;
    top: 7.5vw;
}
.reflected {
    position: absolute;
    left: 2vw;
    display: block;
    height: auto;
    width: 10vw;
    transform: rotateZ(-2deg) rotateY(45deg) translatez(10vw) rotateX(67deg) translatex(3vw);
    top: 5.5vw;
    opacity: 0.9;
}

*{
transition-duration: 2s;
    perspective: 600vw;
    transform-style: preserve-3d;
}
.td{
display: inline-block;
    position: relative;
    height: fit-content;
    width: fit-content;
}
@media (hover: hover) {
.td:hover .buttont{
    transform: rotateX(180deg);
}
.td:hover .backf{
    transform: rotateX(0deg);
}
}
.backf{
    height: 25vw;
    width: 45vw;
    backface-visibility: hidden;
    transform: rotateX(-180deg);
    background: aliceblue;
    position: absolute;
    left: 0px;
    top: 0px;
margin-bottom: 3vw;
    margin-left: 3vw;

    font-size: 1.5vw;
    padding: 0px;
    border: 0px;
}
.f{
    backface-visibility: hidden;
}

</style>

<?php


$shown=0;
$filename = "show.txt";
$lines = file($filename, FILE_IGNORE_NEW_LINES);
$shows = "";
foreach ($lines as $lineNumber => $lineContent) {
$shown+=1;
    $shows .= $lineContent . "\n"; 
}


$smn = 0;
while ($shown > $smn){


$lines = explode("\n", $shows);
$bn1 = $lines[$smn];

$smn+=1;
$mn+=1;


$bn = preg_replace("/<$/",'', "$bn1",);

?>
<canvas id="canvas<?php echo $mn; ?>" style="display:none;"></canvas>
<div class="td">
<button type="submit" name="button2" value="<?php echo $bn1;?>" class="buttont" >


<?php 

$file_extension = pathinfo($bn, PATHINFO_EXTENSION);
$nottype2 = basename($bn, ".".$file_extension); 
$bng = $nottype2.'.jpeg'; 
?><h3 class="text3"></h3><h3 class="text"><?php echo $nottype2;?></h3><h3 class="text2"><?php echo $nottype2;?></h3><?php
if(!file_exists($bng)){
?>
<img id="screenshot<?php echo $mn; ?>" class="img" alt="<?php echo $nottype2;?>" src="wait plese.gif" >
</button>

<video id="hideVideo<?php echo $mn; ?>" class="hide">
    <source src="http://192.168.1.109/1/vid/moves/<?php echo $bn1 ; ?>/1/1.mp4" type="video/mp4">
</video>
<script>
//time = 0;
console.log(0);
    document.addEventListener("DOMContentLoaded", function() {
        var video = document.getElementById("hideVideo<?php echo $mn; ?>");
        video.src = "http://192.168.1.109/1/vid/moves//<?php echo $bn1 ; ?>/1/1.mp4";
        video.onloadedmetadata = function() {
            var x = video.duration;
            console.log(parseInt(x));
            //if (x > 0){
time = parseInt(video.duration) / 2;
//}
console.log(1);
        };

        video.crossOrigin = "anonymous"; // If the video is from a different origin
        video.addEventListener("loadeddata", () => {
//            if (time > 0){
            video.currentTime = time;
//}else{
//            video.currentTime = 160;
//}
console.log(2);
        });

        video.addEventListener("seeked", () => {
console.log(3);
            const canvas = document.getElementById("canvas<?php echo $mn; ?>");
            const context = canvas.getContext("2d");
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
console.log(4);
            const dataURL = canvas.toDataURL("image/jepg");
            // Lower the image quality and then send it to the server
            lowerQualityImage(dataURL).then((lowQualityDataURL) => {
console.log(5);
                document.getElementById("screenshot<?php echo $mn; ?>").src = lowQualityDataURL;
                // Save the image to the server using an AJAX request
                fetch(window.location.href, {
                    method: "POST",
                    body: JSON.stringify({ image: lowQualityDataURL, name: "<?php echo $bn; ?>" }),
                    headers: { "Content-Type": "application/json" }
                })

                .then(response => response.json())
                .then(data => console.log(data))
                .catch(error => console.error("Error:", error));
            });
console.log(8);
        });
console.log(9);

        video.load();

        // Function to lower the image quality
        function lowerQualityImage(dataURL) {
            // Create a new image
            const img = new Image();
            img.src = dataURL;
            // Return a promise that resolves with the lower-quality image
            return new Promise((resolve) => {
                img.onload = () => {
                    // Create a canvas element
                    const canvas = document.createElement('canvas');
                    const ctx = canvas.getContext('2d');
                    // Set canvas dimensions to match the image
                    canvas.width = img.width;
                    canvas.height = img.height;
                    // Draw the image onto the canvas
                    ctx.drawImage(img, 0, 0);
                    // Get the lower-quality image data URL (JPEG format, quality = 0.5)
                    const lowQualityDataURL = canvas.toDataURL('image/jpeg', 0.45); // 0.2 = 20% quality
                    resolve(lowQualityDataURL);
                };
            });
        }
    });
</script>
<?php
}else{
?>
<img class="img" alt="ERROR" src="<?php echo $bng ; ?>" ></button>
<?php
}


?>
<button type="submit" name="button2" value="<?php echo $bn1;?>" class="backf" >
<?php

// The URL of the XML file
$url = "https://www.omdbapi.com/?t=".urlencode($nottype2)."&r=xml&apikey=".$apikey;

if (@file_get_contents($url,false,NULL,0,1)){
$xml = simplexml_load_file($url);
}else{
$xml = false;
}

//$work = $xml->root['response'];

if ($xml === false) {

if(file_exists($nottype2.'.xml')){
$xml = simplexml_load_file($nottype2.'.xml');
}else{
$xml = new SimpleXMLElement('<root response="True"/>');
$movie = $xml->addChild('movie');
$movie->addAttribute('title', $nottype2);
$movie->addAttribute('type','show');
$movie->addAttribute('Genre', 'more info are not unavailable for an error in the api');


$if = fopen($nottype2.'.xml' , 'w');
fwrite($if,$movie->asXML());
fclose($if);
}
}else{
$if = fopen($nottype2.'.xml' , 'w');
fwrite($if,$xml->asXML());
fclose($if);
}

// Check if the XML was loaded successfully

// Display the movie information
$title = "Title: " . $xml->movie['title'] . "\n";
$year = "Year: " . $xml->movie['year'] . "\n";
//not neded $= "Rated: " . $xml->movie['rated'] . "\n"
//$Released= "Released: " . $xml->movie['released'] . "\n";
//$Runtime= "Runtime: " . $xml->movie['runtime'] . "\n";
$Genre= "Genre: " . $xml->movie['genre'] . "\n";
//$Director= "Director: " . $xml->movie['director'] . "\n";
//$Writer= "Writer: " . $xml->movie['writer'] . "\n";
$Actors= "Actors: " . $xml->movie['actors'] . "\n";
$Plot = "Plot: " . $xml->movie['plot'] . "\n";
//$= "Language: " . $xml->movie['language'] . "\n";
$count= "Country: " . $xml->movie['country'] . "\n";
//$= "Awards: " . $xml->movie['awards'] . "\n";
//not neded $= "Poster: " . $xml->movie['poster'] . "\n"
// what is this ?? $= "Metascore: " . $xml->movie['metascore'] . "\n";
$Rating= "IMDB Rating: " . $xml->movie['imdbRating'] . "\n";
//no $= "IMDB Votes: " . $xml->movie['imdbVotes'] . "\n";
//not neded $= "IMDB ID: " . $xml->movie['imdbID'] . "\n"
$type= "Type: " . $xml->movie['type'] . "\n";



?>
<img class="tdimg" alt="<?php echo $nottype2;?>" src="<?php echo $bng; ?>"  > 
<h1 style="margin: 1vh;" class="f"><?php echo $title ; ?></h1><br>
<p class="f"><?php echo $type.'<br>'.$Rating.'<br>'.$year.'<br>'.$Genre.'<br>'.$count.'<br>'.$Actors.'<br>'.$Plot ; ?></p>
<!-- <?php // echo $url ; ?> -->
</button>
</div>
<?php

}
}

?></form>
<!--<script>
if (!CSS.supports('width', 'fit-content')) { 
    let elements = document.getElementsByClassName('buttont');
    for (let i = 0; i < elements.length; i++) {
        elements[i].style.width = '450vw';
        elements[i].style.height = '450vw';
    }
}
</script> -->
</body></html>
