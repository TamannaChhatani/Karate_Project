<html>

<head>
  <title>Karate Fight Form </title>
  <style>
    /*  .btn-primary2 {
    border-radius: 26px;
    color:black;
    background-color: #f0ad4e;
    border: 1px solid #fff;
    border-color: #f0ad4e;
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.428571429;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
}
a {
    color:black;
    text-decoration: none;
}
   /* Css for input style */
    /*  @import "compass/css3";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300,800);
* {
  box-sizing: border-box;
}
html, body {
  overflow-x: hidden;
  font-family: "Open Sans", sans-serif;
  font-weight: 300;
  color: #fff;
  background: #efefef;
}
.row {
  max-width: 800px;
  margin: 0 auto;
  padding: 60px 30px;
  background: #032429;
  position: relative;
  z-index: 1;
  text-align: left;
}
.row:before {
  position: absolute;
  content: "";
  display: block;
  top: 0;
  left: -5000px;
  height: 100%;
  width: 15000px;
  z-index: -1;
  background: inherit;
}
.row:first-child {
  padding: 40px 30px;
}
.row:nth-child(2), .row:nth-child(8), .row:nth-child(10) {
  background: #134A46;
}
.row:nth-child(3), .row:nth-child(7) {
  background: #377D6A;
}
.row:nth-child(4), .row:nth-child(6) {
  background: #7AB893;
}
.row:nth-child(5) {
  background: #B2E3AF;
}
.row span {
  position: relative;
  display: inline-block;
  margin: 30px 10px;
}
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
}
*/
    *,
    *:before,
    *:after {
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      margin: 0px;
    }

    body {
      /* font-family: 'Nunito', sans-serif; */
      color: #384047;
    }

    form {

      margin: 10px auto;
      padding: 10px 20px;
      background: #f4f7f8;
      margin-top: 0px;
      margin-bottom: 0px;
    }

    h1 {
      margin: 0 0 30px 0;
      text-align: center;
    }

    input[type="text"],
    input[type="date"],
    input[type="number"],


    select {
      background: rgba(255, 255, 255, 0.1);
      border: none;
      font-size: 16px;
      height: 40px;
      margin: 0;
      outline: 0;
      padding: 15px;
      width: 50%;
      background-color: #e8eeef;
      color: #8a97a0;
      box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
      margin-bottom: 30px;
    }

    input[type="radio"],
    input[type="checkbox"] {
      margin: 0 6px 30px 0;
    }

    select {
      padding: 6px;
      height: 40px;
      border-radius: 2px;
    }

    button {
      padding: 19px 39px 18px 39px;
      color: #FFF;
      background-color: #4bc970;
      font-size: 18px;
      text-align: center;
      font-style: normal;
      border-radius: 5px;
      width: 100%;
      border: 1px solid #3ac162;
      border-width: 1px 1px 3px;
      box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.1) inset;
      margin-bottom: 10px;
    }



    label {
      display: block;
      margin-bottom: 8px;
      font-size: 20px;
    }

    label.light {
      font-weight: 300;
      display: inline;
    }

    .number {
      background-color: #5fcf80;
      color: #fff;
      height: 30px;
      width: 30px;
      display: inline-block;
      font-size: 0.8em;
      margin-right: 4px;
      line-height: 30px;
      text-align: center;
      text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
      border-radius: 100%;
    }

    #submit{

      height: 50px;background: black;color: white;width: 12%;
    }

    @media (max-width:470px){
/* 
      h1{
        font-size: 50px;
      } */
    p{
      font-size:9px;
    }

      #belt{
        color: red;
      }
      #dob {
        min-width: 174px;
      }

      #competitiondate {
        min-width: 174px;
      }

      input[type="text"],
      select,
      input[type="number"] {
        min-width: 174px;
    }

    #submit{
      width: 100px;
    }

  }
  </style>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>

</head>
<?php include('header.php'); ?>

<body>
  <form name="form" onsubmit="return validate();" method="POST" id="form" style="font-family: 'Courier New';font-weight:bold;    background-image: linear-gradient(
118deg
,Red, black,blue);color:white">
    <!--  <table>
            <tr>
                <td colspan="2" style="text-align: center;font-family:'Courier New';font-size: 18px;font-weight:800;">Karate Fight Bouts</td>
            </tr> 

           <tr>
                <td>Name of player: </td>
                <td><input type="text" name="pname" id="pname" />
            </tr>

            <tr>
                <td>Gender: </td>
                <td> <input type="radio" name="gender" value="Male" id="gender1"/>Male
                    <input type="radio" name="gender" value="Female" id="gender2" />Female
            </tr>

            <tr>
                <td>Date of Birth: </td>
                <td><input type="date" name="dob" id="dob" onselect="check()" ></td>
            </tr>

            <tr>
                <td>Competition Date:</td>
                <td><input type="date" name="competitiondate" id="competitiondate" min="2021-01-01" disabled  ></td>
            </tr>

            <tr>
                <td> Age: </td>
                <td><input type="text" name="age" id="age" readonly="readonly"></td>
            </tr>

            <tr>
                <td>Belt: </td>
                 <td><select name="belt">
                        <option>Select Belt </option>
                        <option>Brown/Black Belt </option>
                                               <option> Colour Belt </option>
                    </select></td>
            </tr>

          
            <tr>
                <td>Weight:</td>
                <td><input type="text" name="weight" size="2" id="weight">Kg
            </tr>

            <tr>
                <td>Kata: </td>
                <td><input type="radio" name="kata" value="yes" id="kata1">Yes
                    <input type="radio" name="kata" value="no" id="kata2">No
                </td>
            </tr>

            <tr>
                <td> Kumite: </td>
                <td><input type="radio" name="kumite" value="yes" id="kumite1" >Yes
                    <input type="radio" name="kumite" value="no" id="kumite2" >No
                </td>
            </tr>

            <tr>
                <td>Coach/District/State: </td>
                <td><input type="text" name="coach" id="coach"></td>
            </tr>

           

            <tr>
                <td colspan="2"><input class="btn btn-primary2" type="submit" name="submit" value="Submit" ></td>

            </tr>
       </table>
    
      <div class="row">
        <span>
            <label class="label"> Name of player: </label>    &nbsp;   
            
           
          <input class="basic-slide" id="pname"  style="width:300px;" name="pname" type="text" placeholder="Your best name" /> <label for="name">Name</label>
        </span> <br>
        <span>
        <label class="label">Gender:</label>   &nbsp; &nbsp;
            <input type="radio" name="gender"  id="gender1" value="Male" >Male
            <input type="radio" name="gender" id="gender2" value="Female" >Female
          
       
          <input class="basic-slide" id="name" type="text" placeholder="Your best name" /><label for="name">Name</label>-->
    <!-- </span> <br>
        <span>
           <label class="label"> Name of player: </label>    &nbsp;   
            
           
          <input class="basic-slide" id="dob" name="dob" onselect="check()" type="date"  /> <label for="dob">Date of Birth:</label>
        </span> <br>
        <span>
           <label class="label"> Name of player: </label>    &nbsp;   
            
           
          <input class="basic-slide"  name="competitiondate" id="competitiondate" min="2021-01-01"  type="date" disabled /> <label for="competitiondate">Competition Date:</label>
        </span> <br>

        <span>       
          <input class="basic-slide" id="age" name="age" type="text" placeholder="Enter your age" /> <label for="age">Age</label>
        </span> <br>
       
        <span>
            <label class="label"> Select Belt: </label>    &nbsp;  
            <select name="belt" class="basic-slide">
                            <option value="">Select Belt </option>
                            <option value="Brown/Black Belt" > Brown/Black Belt </option>
                            <option value="Colour Belt" >Colour Belt </option>
                        </Select>
       
           <input class="basic-slide" id="phone" type="text" placeholder="You can trust us" /><label for="phone">Phone</label>
          </span>
          <br>
          <span>       
          <input class="basic-slide" id="weight" name="weight" type="text" placeholder="Enter your Weight" /> <label for="weight">Weight</label> Kg
        </span> <br>
       
       
        <span>
            <label class="label">Kata:</label>   &nbsp; &nbsp;
            <input type="radio" name="kata" value="yes" >Yes
            <input type="radio" name="kata" value="no" >No
          
          <input class="basic-slide" id="email" type="text" placeholder="Your favorite email" /><label for="email">Email</label>
        </span> 
        <br>
        <span>
            <label class="label">Kumite:</label> &nbsp;
            <input type="radio" name="kumite" value="yes" >Yes
                    <input type="radio" name="kumite" value="no" >No
           <input class="basic-slide" id="phone" type="text" placeholder="You can trust us" /><label for="phone">Phone</label>
        </span> 
        <br>
                <span>
             
            <input class="basic-slide"  style="width:300px;"id="coach" type="text" name="coach"  /><label for="coach">Coach/DIstrict/State:</label>
          </span> <br>
          <br>
          <span>
            <input class="label" type="submit" name="submit" value="Submit" style="border-radius: 20px 5px 20px 0px" />
          </span>
          <br> 
      </div>


-->

    <label for="name">Name:</label>
    <input type="text" id="pname" name="pname">

    <label>Gender:</label>
    <input type="radio" value="Male" name="gender" id="gender1" onclick="bold()"><label for="Male" class="light yes">Male</label>
    <input type="radio" value="Female" name="gender" id="gender2" onclick="bold()"><label for="Female" class="light no">Female</label>

    <label>Date of Birth: </label>
    <input type="date" name="dob" id="dob" onselect="check()">



    <label>Competition Date: </label>
    <input type="date" name="competitiondate" id="competitiondate" min="2021-01-01">


    <label>Age:</label>
    <input type="text" id="age" name="age">

    <label for="belt">Belt:</label>
    <select id="belt" name="belt">
      <option value="">Select Belt </option>
      <option value=" Brown/Black Belt"> Brown/Black Belt </option>
      <option value="Colour Belt">Colour Belt </option>
    </Select>
    <label>Kata:</label>
    <input type="radio" id="kata1" value="Yes" name="kata" onclick="bold2()"><label for="Yes" class="light kata1">Yes</label>
    <input type="radio" id="kata2" value="No" name="kata" onclick="bold2()"><label for="No" class="light kata2">No</label>

    <label>Kumite:</label>
    <input type="radio" id="kumite1" value="Yes" name="kumite" onclick="bold3()"><label for="Yes" class="light kumite1">Yes</label>
    <input type="radio" id="kumite2" value="No" name="kumite" onclick="bold3()"><label for="No" class="light kumite2">No</label>




    <label>Weight:</label>
    <input id="weight" name="weight" type="number" placeholder="Enter in Digits">


    <label>Coach/District/State:</label>
    <input type="text" id="coach" name="coach"> <br>

    <input id="submit"  class="label" type="submit" name="submit" value="Submit"  />


  </form>


  <script type="text/javascript">
    var playername = document.getElementById("pname");
    var age;
    var weight = document.getElementById("weight");
    var coach = document.getElementById("coach");
    var gender = document.getElementById("gender");
    var kata = document.getElementById("kata");
    var kumite = document.getElementById("kumite");
    var userinput;
    var d;
    var compititiondate;
    var c;



    document.getElementById("dob").addEventListener("change", function() {
      var c;
      userinput = this.value;
      d = new Date(userinput);
      console.log(d.getFullYear());
      document.getElementById("competitiondate").disabled = false;
      var comp = document.getElementById("competitiondate").value
      c = new Date(comp)
      if (c.getFullYear() != "") {
        age = c.getFullYear() - d.getFullYear();
        month = c.getMonth() - d.getMonth();
        dit = c.getDate() - d.getDate();

        console.log("d" + dit);
        console.log(month);
        if (month == 0 && dit >= 0) {
          document.getElementById("age").value = age;
        } else if (month == 0 && dit < 0) {
          document.getElementById("age").value = age - 1;
        } else if (month > 0) {
          document.getElementById("age").value = age;
        } else if (month < 0) {
          document.getElementById("age").value = age - 1;
        }
        console("im here");
      }

    });



    document.getElementById("competitiondate").addEventListener("change", function() {
      compititiondate = this.value;
      c = new Date(compititiondate);
      age = c.getFullYear() - d.getFullYear();
      month = c.getMonth() - d.getMonth();
      dit = c.getDate() - d.getDate();

      console.log("hvhwhv");
      console.log("c" + c.getFullYear());
      console.log(month);
      if (month == 0 && dit >= 0) {
        document.getElementById("age").value = age;
      } else if (month == 0 && dit < 0) {
        document.getElementById("age").value = age - 1;
      } else if (month > 0) {
        document.getElementById("age").value = age;
      } else if (month < 0) {
        document.getElementById("age").value = age - 1;
      }
      // document.getElementById("age").value = age ;   

      return c;
    });


    function bold() {

      if ($("#gender1").is(":checked") == true && $("#gender2").is(":checked") == false) {
        $(".yes").css("font-weight", "800");
        $(".no").css("font-weight", "normal");
        $("#gender1").is(":checked") = false
      } else if ($("#gender1").is(":checked") == false && $("#gender2").is(":checked") == true) {
        $(".yes").css("font-weight", "normal");
        $(".no").css("font-weight", "800");


      }

    }

    function bold2() {

      if ($("#kata1").is(":checked") == true && $("#kata2").is(":checked") == false) {
        $(".kata1").css("font-weight", "800");
        $(".kata2").css("font-weight", "normal");
        $("#kata1").is(":checked") = false
      } else if ($("#kata1").is(":checked") == false && $("#kata2").is(":checked") == true) {
        $(".kata1").css("font-weight", "normal");
        $(".kata2").css("font-weight", "800");
      }

    }


    function bold3() {

      if ($("#kumite1").is(":checked") == true && $("#kumite2").is(":checked") == false) {
        $(".kumite1").css("font-weight", "800");
        $(".kumite2").css("font-weight", "normal");
        $("#kumite1").is(":checked") = false;
      } else if ($("#kumite1").is(":checked") == false && $("#kumite2").is(":checked") == true) {
        $(".kumite1").css("font-weight", "normal");
        $(".kumite2").css("font-weight", "800");
      }

    }


    // function bold3() {

    //   if ($("#kumite1").is(":checked") == true && $("#kumite2").is(":checked") == false) {
    //     alert("in if");
    //     $(".kumite1").css("font-weight", "800");
    //     $(".kumite2").css("font-weight", "normal");
    //     $("#kumite1").is(":checked") = false
    //   } else if ($("#kumite1").is(":checked") == false && $("#kumite2").is(":checked") == true) {
    //     $(".kumite1").css("font-weight", "normal");
    //     $(".kumite2").css("font-weight", "800");
    //   }

    // }

    function validate() {


      if (playername.value.trim() == "") {
        alert("Enter name");
        return false;
      }
      // else if( gender.value !== "male" && gender.value !== "female" )
      // {
      //     alert("Enter gender");
      //     console.log(gender.value);
      //     return false;
      // }
      else if ($("#gender1").is(":checked") == false && $("#gender2").is(":checked") == false) {
        alert("Choose Gender");
        return false;
      } else if (document.getElementById("dob").value == "") {
        alert("Choose date of birth");
        return false;
      } else if (document.getElementById("competitiondate").value == "") {
        alert("Choose date of competition");
        return false;
      }

      // else if (age.value.trim() == "") 
      // {
      //     alert("Enter age");
      //     return false;
      // } 
      else if (document.form.belt.selectedIndex == "") {
        alert("Select belt value");
        console.log(typeof(userinput));
        return false;
      } else if (weight.value.trim() == "") {
        alert("Enter weight");
        return false;
      } else if ($("#kata1").is(":checked") == false && $("#kata2").is(":checked") == false) {
        alert("Enter Field Name Kata ");
        return false;
      } else if ($("#kumite1").is(":checked") == false && $("#kumite2").is(":checked") == false) {
        alert("Enter Field Name Kumite ");
        return false;
      } else if (coach.value.trim() == "") {

        alert("Enter Coach Name");
        return false;
      } else {
        return true;
      }



    }
    /*function check()
    {
        if(document.getElementById("dob").value == "")
                    {
                        compititiondate.disabled=true;
                        
                    }
                    else
                    {
                        compititiondate.disabled=false;
                    }
    }*/
  </script>


  <script>
    $(".sub-btn").on("click", function() {

      <?php


      include_once("connection.php");


      if (isset($_POST['submit'])) {




        $playername  =  $_POST["pname"];
        $gender  =  $_POST["gender"];
        $dob  =  $_POST["dob"];
        $belt  =  $_POST["belt"];
        $age  =  $_POST["age"];
        $weight  =  $_POST["weight"];
        $kata  =  $_POST["kata"];
        $kumite  =  $_POST["kumite"];
        $coach  =  $_POST["coach"];
        $competitiondate = $_POST["competitiondate"];



        $sql = "INSERT INTO `karate_form_data` (`id`,`competitiondate`, `player_name`, `gender`, `dob`, `belt`, `age`, `weight`, `kata`, `kumite`, `coach`) VALUES (NULL,'$competitiondate','$playername','$gender' ,'$dob' ,'$belt' ,'$age','$weight' ,'$kata' ,'$kumite', '$coach' )";

        $result = mysqli_query($mysqli, $sql);

        if ($result) {
          header("Location:index.php");
          echo "User added successfully. ";
          //<a href='index.php'>View Users</a>";

        } else {
          echo "Insertion failed.";
        }
      }

      ?>

    })
  </script>

  <?php include('footer.php'); ?>

</body>

</html>