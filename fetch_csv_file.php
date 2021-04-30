<style>
.label
{
    display: inline-block;
    position: relative;
    top: 0;
    left: 0;
    padding: 10px 15px;
    text-shadow: 0 1px 0 rgb(19 74 70 / 40%);
    background: #7AB893;
    transition: all 0.3s ease-in-out;
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
    background: #7AB893;
    border-radius: 20px 5px 20px 0px;
}
/*
.basic-slide {
  display: inline-block;
  width: 215px;
  padding: 10px 0 10px 15px;
  font-family: "Open Sans", sans;
  font-weight: 400;
  color: #377D6A;
  background: #efefef;
  border: 0;
  border-radius: 3px;
  outline: 0;
  text-indent: 70px;
  transition: all 0.3s ease-in-out;
}
.basic-slide::-webkit-input-placeholder {
  color: #efefef;
  text-indent: 0;
  font-weight: 300;
}
.basic-slide + label {
  display: inline-block;
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 15px;
  text-shadow: 0 1px 0 rgba(19, 74, 70, 0.4);
  background: #7AB893;
  transition: all 0.3s ease-in-out;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
.basic-slide:focus, .basic-slide:active {
  color: #377D6A;
  text-indent: 0;
  background: #fff;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.basic-slide:focus::-webkit-input-placeholder, .basic-slide:active::-webkit-input-placeholder {
  color: #aaa;
}
.basic-slide:focus + label, .basic-slide:active + label {
  transform: translateX(-100%);
}
*/
/*html, body {
	 height: 100%;
	 margin: 0;
	 padding: 0;
} 
 body {
	 font-family: 'Roboto', sans-serif;
	 background: linear-gradient(to top, #4f6072, #8699aa);
	 display: flex;
	 justify-content: center;
	 align-items: center;
} */
.upload {
    font-family: 'Roboto', sans-serif;
	 background: linear-gradient(to top, #4f6072, #8699aa);
	 position: relative;
	 width: 400px;
	 min-height: 445px;
	 box-sizing: border-box;
	 border-radius: 5px;
	 box-shadow: 0 2px 5px rgba(0, 0, 0, .2);
	 padding-bottom: 20px;
	 background:#4db6ac;
	 animation: fadeup 0.5s 0.5s ease both;
	 transform: translateY(20px);
	 opacity: 0;
}
.header{

    background: #032429;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    text-align: center;
}


/*.upload .upload-files header {
	 background: #4db6ac;
	 border-top-left-radius: 5px;
	 border-top-right-radius: 5px;
	 text-align: center;
}
 .upload .upload-files header p {
	 color: #fff;
	 font-size: 40px;
	 margin: 0;
	 padding: 50px 0;
}
 .upload .upload-files header p i {
	 transform: translateY(20px);
	 opacity: 0;
	 font-size: 30px;
	 animation: fadeup 0.5s 1s ease both;
}
 .upload .upload-files header p .up {
	 font-weight: bold;
	 transform: translateX(-20px);
	 display: inline-block;
	 opacity: 0;
	 animation: faderight 0.5s 1.5s ease both;
}
 .upload .upload-files header p .load {
	 display: inline-block;
	 font-weight: 100;
	 margin-left: -8px;
	 transform: translateX(-20px);
	 opacity: 0;
	 animation: faderight 1s 1.5s ease both;
}
 .upload .upload-files .body {
	 text-align: center;
	 padding: 50px 0;
	 padding-bottom: 30px;
}
.body p b, .upload .upload-files .body p a {
    color: #4db6ac
}
 .upload .upload-files .body.hidden {
	 display: none;
}
 .upload .upload-files .body input {
	 visibility: hidden;
}
 .upload .upload-files .body i {
	 font-size: 65px;
	 color: lightgray;
}
 .upload .upload-files .body p {
	 font-size: 14px;
	 padding-top: 15px;
	 line-height: 1.4;
}
 .upload .upload-files .body p b, .upload .upload-files .body p a {
	 color: #4db6ac;
}
 .upload .upload-files .body.active {
	 border: dashed 2px #4db6ac;
}
 .upload .upload-files .body.active i {
	 box-shadow: 0 0 0 -3px #fff, 0 0 0 lightgray, 0 0 0 -3px #fff, 0 0 0 lightgray;
	 animation: file 0.5s ease both;
}
 @keyframes file {
	 50% {
		 box-shadow: -8px 8px 0 -3px #fff, -8px 8px 0 lightgray, -8px 8px 0 -3px #fff, -8px 8px 0 lightgray;
	}
	 75%, 100% {
		 box-shadow: -8px 8px 0 -3px #fff, -8px 8px 0 lightgray, -16px 16px 0 -3px #fff, -16px 16px 0 lightgray;
	}
}
 .upload .upload-files .body.active .pointer-none {
	 pointer-events: none;
}
 .upload .upload-files footer {
	 width: 100%;
	 margin: 0 auto;
	 height: 0;
}
 .upload .upload-files footer .divider {
	 margin: 0 auto;
	 width: 0;
	 border-top: solid 4px #46aba1;
	 text-align: center;
	 overflow: hidden;
	 transition: width 0.5s ease;
}
 .upload .upload-files footer .divider span {
	 display: inline-block;
	 transform: translateY(-25px);
	 font-size: 12px;
	 padding-top: 8px;
}
 .upload .upload-files footer.hasFiles {
	 height: auto;
}
 .upload .upload-files footer.hasFiles .divider {
	 width: 100%;
}
 .upload .upload-files footer.hasFiles .divider span {
	 transform: translateY(0);
	 transition: transform 0.5s 0.5s ease;
}
 .upload .upload-files footer .list-files {
	 width: 320px;
	 margin: 0 auto;
	 margin-top: 15px;
	 padding-left: 5px;
	 text-align: center;
	 overflow-x: hidden;
	 overflow-y: auto;
	 max-height: 210px;
}
 .upload .upload-files footer .list-files::-webkit-scrollbar-track {
	 background-color: rgba(211, 211, 211, .25);
}
 .upload .upload-files footer .list-files::-webkit-scrollbar {
	 width: 4px;
	 background-color: rgba(211, 211, 211, .25);
}
 .upload .upload-files footer .list-files::-webkit-scrollbar-thumb {
	 background-color: rgba(77, 182, 172, .5);
}
 .upload .upload-files footer .list-files .file {
	 width: 300px;
	 min-height: 50px;
	 display: flex;
	 justify-content: space-between;
	 align-items: center;
	 opacity: 0;
	 animation: fade 0.35s ease both;
}
 .upload .upload-files footer .list-files .file .name {
	 font-size: 12px;
	 white-space: nowrap;
	 text-overflow: ellipsis;
	 overflow: hidden;
	 width: 80px;
	 text-align: left;
}
 .upload .upload-files footer .list-files .file .progress {
	 width: 175px;
	 height: 5px;
	 border: solid 1px lightgray;
	 border-radius: 2px;
	 background: linear-gradient(to left, rgba(77, 182, 172, .2), rgba(77, 182, 172, .8)) no-repeat;
	 background-size: 100% 100%;
}
 .upload .upload-files footer .list-files .file .progress.active {
	 animation: progress 30s linear;
}
 @keyframes progress {
	 from {
		 background-size: 0 100%;
	}
	 to {
		 background-size: 100% 100%;
	}
}
 .upload .upload-files footer .list-files .file .done {
	 cursor: pointer;
	 width: 40px;
	 height: 40px;
	 background: #4db6ac;
	 border-radius: 50%;
	 margin-left: -10px;
	 transform: scale(0);
	 position: relative;
}
 .upload .upload-files footer .list-files .file .done:before {
	 content: "View";
	 position: absolute;
	 top: 0;
	 left: -5px;
	 font-size: 24px;
	 opacity: 0;
}
 .upload .upload-files footer .list-files .file .done:hover:before {
	 transition: all 0.25s ease;
	 top: -30px;
	 opacity: 1;
}
 .upload .upload-files footer .list-files .file .done.anim {
	 animation: done1 0.5s ease forwards;
}
 .upload .upload-files footer .list-files .file .done.anim #path {
	 animation: done2 2.5s 0.5s ease forwards;
}
 .upload .upload-files footer .list-files .file .done #path {
	 stroke-dashoffset: 7387.5942382813;
	 stroke-dasharray: 7387.5942382813 7387.5942382813;
	 stroke: #fff;
	 fill: transparent;
	 stroke-width: 50px;
}
 @keyframes done2 {
	 to {
		 stroke-dashoffset: 0;
	}
}
 @keyframes done1 {
	 50% {
		 transform: scale(0.5);
		 opacity: 1;
	}
	 80% {
		 transform: scale(0.25);
		 opacity: 1;
	}
	 100% {
		 transform: scale(0.5);
		 opacity: 1;
	}
}
 .upload .upload-files footer .importar {
	 outline: none;
	 position: absolute;
	 left: 0;
	 right: 0;
	 bottom: 20px;
	 margin: auto;
	 border: solid 1px #4db6ac;
	 color: #4db6ac;
	 background: transparent;
	 padding: 8px 15px;
	 font-size: 12px;
	 border-radius: 4px;
	 font-family: Roboto;
	 line-height: 1;
	 cursor: pointer;
	 transform: translateY(15px);
	 opacity: 0;
	 visibility: hidden;
	 margin-left: calc(50% - 40px);
}
 .upload .upload-files footer .importar.active {
	 transition: transform 0.5s 1.5s ease, opacity 0.5s 1.5s ease, background;
	 transform: translateY(0);
	 opacity: 1;
	 visibility: visible;
}
 .upload .upload-files footer .importar:hover {
	 background: #4db6ac;
	 color: #fff;
}*/
 @keyframes fadeup {
	 to {
		 transform: translateY(0);
		 opacity: 1;
	}
}
 @keyframes faderight {
	 to {
		 transform: translateX(0);
		 opacity: 1;
	}
}
 @keyframes fade {
	 to {
		 opacity: 1;
	}
}
 @media (max-width: 400px) {
	 .upload {
		 width: 100%;
		 height: 100%;
	}
}
.txt
{
    font-family: 'Roboto', sans-serif;
    font-weight: bold;
    color:black;
    background: #7AB893;

} 


</style>
<?php include('header.php'); ?>
    <div id="response"
        class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>">
        <?php if(!empty($message)) { echo $message; } ?>
        </div>  
   
        <div class="row">

            <form  action="" method="post"
                name="frmCSVImport" id="frmCSVImport"
                enctype="multipart/form-data">
                <div class="header">
                    <label class="label" >Choose CSV
                        File ::</label>  <input type="file" name="file"
                        id="file" accept=".csv" class="upload">
                    <button type="submit" id="submit" name="import"
                        class="label">Import</button>

                  

                </div>
            </div>
                  </form>

<?php

if(isset($_POST["import"])){

include_once("connection.php");

$log_file = "C:\xampp\htdocs\karate_project\log_error-file.txt";
$i = 1;
$fileName = $_FILES["file"]["tmp_name"];

//    $file = ".csv";

if (($handle = fopen($fileName , "r")) !== false) {

    while (($data = fgetcsv($handle, 10000, ',')) !== false) {

        if ($i !== 1) {

            // echo "<br>".$data[0]."||".$data[1]."||".$data[2]."||".$data[3]."||".$data[4]."||".$data[5]."||".$data[6]."||".$data[7]."||".$data[8];
          
            
            if (!empty($data[0]) && !empty($data[1]) && !empty($data[2]) && !empty($data[3]) && !empty($data[4]) && !empty($data[5]) &&  !empty($data[6])   && !empty($data[7]) && !empty($data[8])) {
                    

                try{
                    $query = "INSERT INTO `karate_form_data` (`id`,`competitiondate`, `GENDER`,`PLAYER_NAME`, `DOB`, `BELT`, `AGE`, `WEIGHT`, `KATA`, `KUMITE`, `COACH`) VALUES (NULL ,NOW(),'$data[1]','$data[0]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]' )";
                      $result = mysqli_query($mysqli, $query);
                     // echo "<br>Query::".$query;
                      If($result)
                      {
                        echo '<script>alert("Data Inserted Sucessfully")</script>';
                      }
                  }catch (Exception $x) {
                    echo '<script>alert("Query Failed")</script>';
                  }
                    
             }
             
          
           else {
                
                $error_message ;
                $error_message = "At line ". $i ."    "." person named ".$data[0]."  record is not inserted into database.<br>";

                echo"$error_message";

                ini_set("log_errors", true);

                ini_set('error_log', dirname(__FILE__) . '/error_log.txt'); 

                error_log($error_message);
            }
        }

        $i++;
    }
    fclose($handle);
}

}
?>
<?php
include('footer.php'); ?>