<html>

<head>
    <title>Main Data </title>
    <style>
   /* .btn-primary2 {
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
.footer {
      padding: 20px;
      text-align: center;
      background: #ddd;
    }

    /* Css for input style */
 /*   @import "compass/css3";
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
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: whitesmoke;
}

form {
 
  margin: 10px auto;
  padding: 10px 20px;
  background-image: linear-gradient(
118deg
,Red, black,blue);
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="date"],

select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 50%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
  transition: 180ms box-shadow ease-in-out;
  
}
.input:focus {
  outline: 3px solid transparent;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 6px 10px 0;
}

select {
  padding: 6px;
  height: 50px;
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
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}



label {
  display: block;
  margin-bottom: 8px;
 
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
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

#submit{

height: 50px;background: black;color: white;width: 12%;
}
@media screen and (min-width: 480px) {

 /* form {
    max-width: 480px;
  } */

}

</style>

    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>

</head>

<?php include('header.php'); ?>
<body>
    <form method="post" action="hard_final_set.php" name="myform">
      <!--  <table>
            <tr>
                <th colspan="2" style="text-align: center;">Karate Fight Bout</th>
            </tr>
            <tr>
                <td>Select Gender : </td>
                <td><select name="gender">
                        <option value="">Select gender</option>
                        <option value="Male" > Male </option>
                        <option value="Female" >Female </option>
                    </Select>
                </td>
            </tr>


            <tr>
                <td >Kata: </td>
                <td><input type="radio" name="kata" value="yes" >Yes
                    <input type="radio" name="kata" value="no" >No
                </td>
            </tr>

            <tr>
                <td> Kumite: </td>
                <td><input type="radio" name="kumite" value="yes" >Yes
                    <input type="radio" name="kumite" value="no">No
                </td>
            </tr>
            <tr>
                <td>Select Belt :</td>
                <td><select name="belt">
                        <option value="">Select Belt</option>
                        <option>Brown/Black Belt</option>
                        <option>Brown</option> 
                        <option>Colour Belt</option>
                    </select></td>
            </tr>

            <tr>
                <td>Age :</td>
                <td>


               <input type="text" name="minage" placeholder=" From " size="10"> 
               <input type="text" name="maxage" size="10" placeholder=" To ">

                </td>
            </tr>

            <tr>
                <td>Weight :</td>
                <td>
               <input type="text" name="minweight" placeholder=" From " size="10"> 
               <input type="text" name="maxweight" size="10" placeholder=" To ">

                </td>
            </tr>

            <tr>
                <td>Coach/District/State :</td>
                <td><select name="coach">
                        <option value="">Select</option>
-->
                         <!-- </select> </td>
            </tr>


            <tr>
                <td colspan="2"><input type="submit" name="display" class="btn btn-primary2" value="Display"></td>
            </tr> 

        </table> -->

      <!--  <div class="row">
        <span>
            <label class="label"> Gender : </label>    &nbsp;  
            <select name="gender" class="basic-slide">
                            <option value="">Select gender</option>
                            <option value="Male" > Male </option>
                            <option value="Female" >Female </option>
                        </Select>
       
          <!--<input class="basic-slide" id="name" type="text" placeholder="Your best name" /><label for="name">Name</label>-->
       <!-- </span> <br>
        <span>
            <label class="label">Kata:</label>   &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;
            <input type="radio" name="kata" value="yes" >Yes
            <input type="radio" name="kata" value="no" >No
          
          <!--<input class="basic-slide" id="email" type="text" placeholder="Your favorite email" /><label for="email">Email</label>-->
     <!--   </span> 
        <br>
        <span>
            <label class="label">Kumite:</label>  &nbsp;  &nbsp; &nbsp; &nbsp;
            <input type="radio" name="kumite" value="yes" >Yes
                    <input type="radio" name="kumite" value="no" >No
           <!--<input class="basic-slide" id="phone" type="text" placeholder="You can trust us" /><label for="phone">Phone</label>-->
     <!--   </span> 
        <br>
        <span>
            <label class="label"> Select Belt: </label>    &nbsp;  
            <select name="belt" class="basic-slide">
                            <option value="">Select Belt </option>
                            <option value="" > Brown/Black Belt </option>
                            <option value="" >Colour Belt </option>
                        </Select>
       
           <!-- <input class="basic-slide" id="phone" type="text" placeholder="You can trust us" /><label for="phone">Phone</label>-->
         <!-- </span>
          <br>
          <span>
            <label  name="age"class="label"style="position: relative;"> Age: </label> &nbsp;&nbsp;     &nbsp; &nbsp;&nbsp; 
            </span> <span>  
            <input name="minage" class="basic-slide" id="from" type="text" /><label for="from">From</label>
          </span> <span>
            <input class="basic-slide" name="maxage" id="to" type="text" /><label for="TO">To</label>
          </span>
          <br>
          <span>
            <label class="label" style="position: relative;">Weight: </label> &nbsp; &nbsp; 
            </span> <span>  
            <input class="basic-slide" name="minweight" type="text" /><label for="from">From</label>
          </span> <span>
            <input class="basic-slide" name="maxweight" type="text" /><label for="TO">To</label>
          </span>
          <br>
          <span>
            <label class="label"> Coach/District/State: </label>    &nbsp;  
            <select name="coach" class="basic-slide">
            <option value="">Select</option> -->
<!-- 
                      -->
                
                           <!-- <option value="">Select Belt </option>
                            <option value="" > Brown/Black Belt </option>
                            <option value="" >Colour Belt </option> -->
                   <!--     </Select> -->
       
           <!-- <input class="basic-slide" id="phone" type="text" placeholder="You can trust us" /><label for="phone">Phone</label>-->
        <!--  </span> <br>
          <br>
          <span>
            <input class="label" id="submit" type="submit" value="Display" name="display"  style="border-radius: 20px 5px 20px 0px"  />
          </span>
          <br> 
      </div>-->
        <div >
      <label> Gender : </label>    &nbsp;  
            <select name="gender">
                            <option value="">Select gender</option>
                            <option value="Male" > Male </option>
                            <option value="Female" >Female </option>
                        </Select>
                        <label >Kata:</label>  
            <input type="radio" name="kata" value="yes"  class="light" >Yes
            <input type="radio" name="kata" value="no"  class="light" >No
          
                        
                        <label >Kumite:</label> 
            <input type="radio" name="kumite" value="yes"  class="light" >Yes
                    <input type="radio" name="kumite" value="no"   class="light">No
                        <label for="belt">Belt:</label>
	<select id="belt" name="belt">
		<option value="">Select Belt </option>
                            <option value=" Brown/Black Belt" > Brown/Black Belt </option>
                            <option value="Colour Belt" >Colour Belt </option>
                        </Select>

                        <label  name="age"style="position: relative;"> Age: </label> &nbsp;&nbsp;     &nbsp; &nbsp;&nbsp; 
                        <label for="from">From</label>
            <input name="minage"  id="from" type="text" />
            <label for="TO">To</label>
            <input  name="maxage" id="to" type="text" />

            <label >Weight: </label> &nbsp; &nbsp; 
            <label for="from">From</label>
            <input  name="minweight" type="text" />
            <label for="TO">To</label>

            <input  name="maxweight" type="text" />

            <label > Coach/District/State: </label>      
            <select name="coach" >
            <option value="">Select</option>
            <?php

include_once("connection.php");


$sql = "SELECT DISTINCT coach FROM `karate_form_data`";
$result = mysqli_query($mysqli, $sql);

while ($c_name = mysqli_fetch_array($result)) {
    echo "<option value=' " . $c_name['coach'] . "'>" . $c_name['coach'] . "</option>";
}

?>
            <?php

include_once("connection.php");


$sql = "SELECT DISTINCT coach FROM `karate_form_data`";
$result = mysqli_query($mysqli, $sql);

while ($c_name = mysqli_fetch_array($result)) {
    echo "<option value=' " . $c_name['coach'] . "'>" . $c_name['coach'] . "</option>";
}

?> 
            </select>
            <br>

<input  id="submit" type="submit" value="Display" name="display"   />
</div>
</form>
     
        <?php

        include_once("connection.php");
       if (isset($_POST['display'])) {

            $gen =  $_POST['gender'];
            $kata = $_POST['kata'];
            $kumite = $_POST['kumite'];
            $belt = $_POST['belt'];
            $minage = $_POST['minage'];
            $maxage = $_POST['maxage'];
            $age = $minage." ".$maxage." ";
            $minweight = $_POST['minweight'];
            $maxweight = $_POST['maxweight'];
            $weight = $minweight." ".$maxweight." ";
            
            $coach = $_POST['coach'];

            $cond = [];

            if (isset($gen) && !empty($gen)) {
                $cond[] = "gender='" . $gen . "'  ";
            }

            if (isset($kata) && !empty($kata)) {
                $cond[] .= "kata='" . $kata . "' ";
            }

            if (isset($kumite) && !empty($kumite)) {
                $cond[] .= "kumite='" . $kumite . "'";
            }

            if (isset($belt) && !empty($belt)) {
                $cond[] .= "belt='" . trim($belt) . "'";
            }
            if (isset($minage) && !empty($minage) && isset($maxage) && !empty($maxage) ) {
                $cond[] .= "(age between " . $minage . "  and " . $maxage . ")";
            }

            if (isset($minweight) && !empty($minweight) && isset($maxweight) && !empty($maxweight)) {
                $cond[] .= "(weight between " . $minweight . " and " . $maxweight . ")";
            }

            if (isset($coach) && !empty($coach)) {
                $cond[] .= "coach='" . trim($coach) . "'";
            }
            $query = implode(" and ", $cond);

            $sql = "select * from karate_form_data where $query";
           // $sql="SELECT * FROM `karate_form_data` WHERE $query ";

            $result = mysqli_query($mysqli, $sql);
            

            echo "<table >";
            echo " <tr>
            <th>No.<th>Player_Name</th> <th>Gender</th> <th>Date Of Birth</th>   <th>Belt</th> <th>Age</th> <th>Weight</th> 
            <th>Kata</th> <th> Kumite</th>  <th> Coach</th> 
            </tr>";
            while ($user_data = mysqli_fetch_assoc($result)) {

                $user_data['dob'] = date('d-m-y', strtotime($user_data['dob']));


                echo "<tr>";
                echo "<td>" . $user_data['id'] . "</td>";
                echo "<td>" . $user_data['player_name'] . "</td>";
                echo "<td>" . $user_data['gender'] . "</td>";
                echo "<td>" . $user_data['dob'] . "</td>";
                echo "<td>" . $user_data['belt'] . "</td>";
                echo "<td>" . $user_data['age'] . "</td>";
                echo "<td>" . $user_data['weight'] . "</td>";
                echo "<td>" . $user_data['kata'] . "</td>";
                echo "<td>" . $user_data['kumite'] . "</td>";
                echo "<td>" . $user_data['coach'] . "</td>";
            }
            echo "</table>";

            die;
        }

        ?>
  

    </form>
   <?php include('footer.php'); ?>
</body>
</html>

