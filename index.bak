<!DOCTYPE html>
<html lang="en">
<?php include('head_flat.php')?>
<body>
    
<form name="sendin" action="http://192.168.1.1/login" method="post">
			<input type="hidden" name="username">
			<input type="hidden" name="password">
			<input type="hidden" name="dst" value="">
			<input type="hidden" name="popup" value="true">
	    </form>		

        <script type="text/javascript" src="md5.js"></script>
        



    <div class="container"><!-- Start Container Div-->

        <div class="row" style="margin-top:20px; text-align:center"> <!-- Div Logo -->
            <div class="col-md-4"></div> 
            <div class="col-md-4" class="logo">       
                <img src="img/logo_desktop.png" class="desktop" width="80%" />
                <img src="img/logo_mobile.png" class="mobile" width="80%" />
            </div>
            <div class="col-md-4"></div>
        </div><!--End Div Logo-->

        <div class="row" style="margin-top:20px"><!-- Div form-->
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form name="login" action="http://192.168.1.1/login" method="post" onsubmit="return doLogin()"  class="form-group"><!--form-->
                   
                   <input type="hidden" name="dst" value="">
                   <input type="hidden" name="popup" value="true">

                    <script type="text/javascript">
                    function doLogin() {
                        document.sendin.username.value = document.login.username.value;
                        document.sendin.password.value = hexMD5('\214' + document.login.password.value + '\321\275\247\343\242\346\252\212\222\163\152\065\022\213\331\246');
                        document.sendin.submit();
                        return false;
                    }
                    </script>

                    <fieldset>
                            <legend><h4>บริษัทสหกลอิควิปเมนท์จำกัด(มหาชน)</h4><h4><strong>OFFICE PHASE 8</strong></h4></legend>
                            <p>กรุณา Login เพื่อเข้าใช้งานระบบ Internet & Network</p> 
                                <div class="form-group"style="padding: 0px 10px">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input class="form-control" name="username" type="text" placeholder="Username" required autofocus />
                                    </div>
                                </div>
                                <div class="form-group" style="padding: 0px 10px">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input class="form-control" name="password" type="password" placeholder="Password" required />
                                    </div>
                                </div>   
                                <div class="form-group">
                                    <div class="text-center">
                                         <button type="submit" class="btn"><span class="glyphicon glyphicon-log-in"><i> Login</i></span></button>
                                    </div>
                                </div>                                          
                    </fieldset>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div><!-- End Div form -->

        <div class="row"> <!-- div footer-->
            <div class="footer"> 
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h5>
                        <p>ต้องการใช้งานระบบ Internet & Network ติดต่อ </p>
                        <p>แผนกสารสนเทศ(สนง.แม่เมาะ)<strong> เบอร์โทรศัพท์ภายใน 118</strong></p>
                        <p>###* กรุณาอ่านกฏระเบียบข้อบังคับก่อนการใช้งานระบบสารสนเทศได้ที่ link คำสั่ง <a href="http://192.168.1.1/doc/SQ005_2558.pdf">SQ005_2558</a> *### </p>
                    </h5>
                </div>
                <div class="col-md-4"></div>
            </div>       
        </div><!--end div footer-->
        
    </div> <!--End Container Div-->
</body>
</html>