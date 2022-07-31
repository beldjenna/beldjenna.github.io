<?php 
include "header.php";
?>
<style>
<?php include 'style.css'; ?>
</style>
        <section class="formulaire">
            <h2>Sign Up</h2>
            <form action="db.php" method="post"> 
            <fieldset>
                <legend><h4>Principle Informations</h4></legend>
                <table>
                    <tr>
                        <td>Username </td>
                        <td><input type="text" name="username"></td>
                    </tr>
                        
                    <tr>
                        <td>Address </td>
                        <td><input type="text" name="address"></td>
                    </tr>
                    
                    <tr>
                        <td>E-mail </td>
                        <td><input type="email" placeholder="example@gmail.com" name="email"></td>
                    </tr>
                    <tr>
                        <td>Password </td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td>Gender </td>
                        <td><select class="genre" name="gender">
                                <option value="o">Gender</option>
                                <option value="m">Male</option>
                                <option value="f">Female</option>
                        </select>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <fieldset>
                <legend><h4>Card Informations</h4></legend>
                <table>
                    <tr>
                        <td>Full Name </td>
                        <td><input type="text" name="fullname"></td>
                    </tr>
                    <tr>
                        <td>Card Number</td>
                        <td><input type="number" name="cardnumber"></td>
                    </tr>
                    <tr>
                        <td>Expiration</td>
                        <td><input type="date" name="expiration"></td>
                    </tr>
                    <tr>
                        <td><label>CVC</label></td>
                        <td><input type="number" name="cvc"></td>
                    </tr>
            </table>
            </fieldset>
            <input type="submit" name="submit" value="Sign up">
            <a href="signIn.php" target="_blank">
                <input type="button" value="You already have an account ?"></a>
        </form>
        </section>
        </header>
    </body>
    
<?php 
include "footer.php";
?>