<html>
    <head>
        <title>Main Data </title>
        <link rel="stylesheet" href="mystyle.css" >
    </head>

    <body>
            <form method="post" action="" name="myform">
                <table >
                    <tr>
                        <td>Select Gender </td>
                        <td><select name="gender" >
                        <option>Select gender</option>
                        <option>Male </option>
                        <option>Female </option>                    
                        </Select>                  
                       </td>             
                        </tr>

                    <tr>
                    <td>Select any Fight :</td>
                    <td><select name="fight">
                    <option>Kata</option>
                    <option>Kumite</option>
                    <option>Both</option>                    
                    </select></td>
                    </tr>         

                    <tr>
                    <td>Select Belt :</td>
                    <td><select name="belt">
                    <option>Black</option>
                    <option>Brown</option>
                    <option>Colour</option>
                    </select></td>                
                    </tr>      

                    <tr>
                    <td>Age :</td>
                    <td><input type="text" name="age"/></td>
                    </tr>

                    <tr>
                    <td>Weight :</td>
                    <td><input type="text" name="weight"/></td>
                    </tr>

                    <tr>
                    <td>Coach/District/State :</td>
                    <td><input type="text" name="gen"></td>
                    </tr>

                    <tr>
                    <td>Star Player :</td>
                    <td><input type="radio" name="player" value="yes">Yes 
                    <input type="radio" name="player" value="no">NO
                    </td>
                    </tr>

                    <tr>
                    <td colspan="2"><input type="submit" name="display" value="Display"></td>
                    </tr>
                </table>

            </form>
    
    </body>
  
</html>