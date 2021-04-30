<!-- <html>

<head>
    <title>Main Data </title>
    <style>
    .btn-primary2 {
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
</style>

    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>

</head>
-->

<!--<body>
    <form method="post" action="hard_code_2.php" name="myform">
        <table>
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

                    </select> </td>
            </tr>


            <tr>
                <td colspan="2"><input type="submit" name="display" class="btn btn-primary2" value="Display"></td>
            </tr>

        </table>
     
</body>
</html> -->


<html>
    <head>
        <style>
                        @import "compass/css3";
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
.label
{
    display: inline-block;
    position: absolute;
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
/* Radio button CSS */
.switch {
    position:relative; 
    top: 70%;
    left: 20%;
    width: 150px;
    height: 50px;
    text-align: center;
    margin: -30px 0 0 -75px;
    background: #00bc9c;
    transition: all 0.2s ease;
    border-radius: 25px; 
    float: left;
  }
  .switch span {
    position: absolute; 
    width: 20px;
    height: 4px;
    top: 50%;
    left: 50%;
    margin: -2px 0px 0px -4px;
    background: #fff;
    display: block;
    transform: rotate(-45deg);
    transition: all 0.2s ease;
  }
  .switch span:after {
    content: "";
    display: block;
    position: absolute;
    width: 4px;
    height: 12px;
    margin-top: -8px;
    background: #fff;
    transition: all 0.2s ease;
  }
  input[type=radio] {
    display: none;
  }
  .switch label {
    cursor: pointer;
    color: rgba(0,0,0,0.2);
    width: 60px;
    line-height: 50px;
    transition: all 0.2s ease;
  }
  label[for=yes] {
    position: absolute;
    left: 0px;
    height: 20px;
  }
  label[for=no] {
    position: absolute;
    right: 0px;
  }
  #no:checked ~ .switch {
    background: #eb4f37;
  }
  #no:checked ~ .switch span {
    background: #fff;
    margin-left: -8px;
  }
  #no:checked ~ .switch span:after {
    background: #fff;
    height: 20px;
    margin-top: -8px;
    margin-left: 8px;
  }
  #yes:checked ~ .switch label[for=yes] {
    color: #fff;
  }
  #no:checked ~ .switch label[for=no] {
    color: #fff;
  }
.clean-slide {
  position: relative;
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
  text-indent: 60px;
  transition: all 0.3s ease-in-out;
}
.clean-slide::-webkit-input-placeholder {
  color: #efefef;
  text-indent: 0;
  font-weight: 300;
}
.clean-slide + label {
  display: inline-block;
  position: absolute;
  transform: translateX(0);
  top: 0;
  left: 0;
  bottom: 0;
  padding: 13px 15px;
  font-size: 11px;
  font-weight: 700;
  text-transform: uppercase;
  color: #032429;
  text-align: left;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.4);
  transition: all 0.3s ease-in-out, color 0.3s ease-out;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  overflow: hidden;
}
.clean-slide + label:after {
  content: "";
  position: absolute;
  top: 0;
  right: 100%;
  bottom: 0;
  width: 100%;
  background: #7AB893;
  z-index: -1;
  transform: translate(0);
  transition: all 0.3s ease-in-out;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
.clean-slide:focus, .clean-slide:active {
  color: #377D6A;
  text-indent: 0;
  background: #fff;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.clean-slide:focus::-webkit-input-placeholder, .clean-slide:active::-webkit-input-placeholder {
  color: #aaa;
}
.clean-slide:focus + label, .clean-slide:active + label {
  color: #fff;
  text-shadow: 0 1px 0 rgba(19, 74, 70, 0.4);
  transform: translateX(-100%);
}
.clean-slide:focus + label:after, .clean-slide:active + label:after {
  transform: translate(100%);
}

</style>
    </head>
    <body>
    <div class="row">
        <span>
    <label class="label"> Gender : </label>    &nbsp;  
        <select name="gender" class="basic-slide">
                        <option value="">Select gender</option>
                        <option value="Male" > Male </option>
                        <option value="Female" >Female </option>
                    </Select>
        </span> <br/> 
    
   <div class="row" style=" background: #032429;">
        <span >
        <label class="label"> Kata : </label>   
        <input type="radio" name="kata" value="yes">Yes
                    <input type="radio" name="kata" value="no"  >No
        
        </span>
        <br/>  
        <br/>
        <br/>
        <!-- <div class="toggle-radio">
            <label class="label" style="top:155px; left:45px;" > Kata :</label>
            <input type="radio" name="kata">
            <input type="radio" name="kata" >
            <div class="switch">
              <label for="yes">Yes</label>
              <label for="no">No</label>
              <span></span>
            </div>
          </div>
          <br/>
        <br/>
-->
 

       
        <div class="toggle-radio">
             <label class="label" style="top:265px; left:30px;" > Kumite :</label> <br>
            <br><br>
            <input type="radio" name="kumite"  value="kumite">
            <input type="radio" name="kumite"  value="kumite">
            <div class="switch">
              <label for="yes">Yes</label>
              <label for="no">No</label>
              <span></span>
            </div>
          </div>
        <br/>
        <span>
          <input class="basic-slide" id="phone" type="text" placeholder="You can trust us" /><label for="phone">Phone</label>
        </span>  <br/>
        <span>
          <input class="basic-slide" id="phone" type="text" placeholder="You can trust us" /><label for="phone">Phone</label>
        </span>  <br/>
        <span>
          <input class="basic-slide" id="phone" type="text" placeholder="You can trust us" /><label for="phone">Phone</label>
        </span>  <br/>
        <span>
          <input class="basic-slide" id="phone" type="text" placeholder="You can trust us" /><label for="phone">Phone</label>
        </span>  <br/>
        <span>
          <input class="basic-slide" id="phone" type="text" placeholder="You can trust us" /><label for="phone">Phone</label>
        </span>  <br/>
      </div>
     
    </body>

</html>


