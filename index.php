<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Immediate Joiner's, A job site with a goal</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="css/smoothness/jquery-ui-1.10.2.custom.min.css" type="text/css"/>
        <script type="text/javascript" src="js/libs/jquery-1.9.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/libs/jquery-1.9.0/jquery-ui-1.10.2.custom.min.js"></script>
        <script type="text/javascript" src="js/jsComponents/HandlerMethodDefs.js"></script>
        <script type="text/javascript" src="js/jsComponents/listeners.js"></script>
        <script type="text/javascript" src="js/applogic.js"></script>



    </head>
    <body>
        <div id="header">
            <?php 
                 require './pages/fragments/header.php';
            ?>
        </div>
        <div id="body" class="home">
            <div class='BigText'>
                Serving Notice? Can join Immediately? <br/>
                We want you !
            </div>

            <div class="blog">
                <img src="images/envelope2_png.png" alt="">
                <div>
                    <h3>Register Now !</h3>
                    <p>
                        We are a firm that caters specifically to people who are serving notice,
                        or are available to join another Company in a short span of time. You may want to
                        <br/>
                        <a href="readmore.html">Read More</a><br/>
                        <input type="button" class="button" value="Register Now !" id="registerNow"/> 


                    </p>
                </div>
            </div>
            <div class="article">
                <div>
                    <h3>Already have an Account ?</h3>
                    <p>
                        Log In to see the Exciting Offers awaiting you.
                        <br/>

                        <input type="button" class="button" value="Log In" id="logIn"  />
                    </p>

                </div>

                <img src="images/login-img.png" alt="">

            </div>

        </div>
        <div id="footer">
            <div>
                <p>
                    &#169; 2013 Hire Better. All Rights Reserved.
                </p>
                <div class="connect">
                    <a href="http://immediatejoiners.com/go/googleplus/" id="googleplus">google+</a> <a href="http://www.immediateJoiners.com/misc/contact" id="contact">contact</a> <a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a> <a href="http://immediateJoiners.com/go/twitter/" id="twitter">twitter</a>
                </div>
            </div>
        </div>
        <!---- DOM for Login Page... -->
        <div class="popup" id="loginPopup">
            <form method="post" action="index.html" class="login">
                <p>
                    <label for="login">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="login" id="login" value="name@example.com">
                </p>

                <p>
                    <label for="password">Password:&nbsp;</label>
                    <input type="password" name="password" id="password" value="4815162342">
                </p>
                <p class="forgot-password"><a href="index.html">Forgot your password?</a></p>
            </form>
        </div>
        <div class="popup" id="registrationForm">
            <table class="formContainer">
                <tr>
                    <td>Email:</td>
                    <td><input type="email" placeholder="your email please" name="email"/></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="newPass1"/></td>
                </tr>
                <tr>
                    <td>Confirm Password:</td>
                    <td><input type="password" name="newPass2"/></td>
                </tr>
            </table>
        </div>

        <!-- Social Bar -->
        <div class="buttonsWrap">

            <!-- Facebook button -->
            <div class="facebookBtn">
                <iframe src="http://www.facebook.com/plugins/like.php?href=www.facebook.com/ccsCoder&layout=box_count&show_faces=true&width=450&action=like&font&colorscheme=light&height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:50px; height:65px;" allowTransparency="true"></iframe>
            </div>
            <br/>
            <!-- StumbleUpon button -->
            <div class="stumbleUponBtn">
                <script src="http://www.stumbleupon.com/hostedbadge.php?s=5&r=www.google.com"></script>
            </div>
            <br/>
            <div class="tweetmemeBtn">
                <a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical">Tweet</a>
                <script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
            </div>
        </div>


    </body>
</html>