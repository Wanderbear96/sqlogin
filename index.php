<!DOCTYPE html>
<html lang="en">
<?php include('header.php') ?>

<body " data-new-gr-c-s-check-loaded="14.988.0" data-gr-ext-installed="">

    <form name="sendin" action="http://192.168.1.1/login" method="post">
			<input type="hidden" name="username">
			<input type="hidden" name="password">
			<input type="hidden" name="dst" value="">
			<input type="hidden" name="popup" value="true">
	    </form>		

		<script type="text/javascript" src="md5.js"></script>
        <script type="text/javascript">
            function doLogin() {
                document.sendin.username.value = document.login.username.value;
                document.sendin.password.value = hexMD5('\214' + document.login.password.value + '\321\275\247\343\242\346\252\212\222\163\152\065\022\213\331\246');
                document.sendin.submit();
                return false;
                }
        </script>
        
    <div class="container" style="padding-top:50px"> <!--div container-->

        <div class="row"> <!--logo-->
            <div class="col-md-4"><h3></h3></div>
            <div class="col-md-4" style="text-align:center;"><img src="https://www.sahakol.com/wp-content/uploads/2019/08/logo_02-retina.png" width="80%" 
            style="webkit-filter: drop-shadow(1px 1px 0 black)drop-shadow(-1px -1px 0 black);filter: drop-shadow(1px 1px 0 black)drop-shadow(-1px -1px 0 black);"></div>
            <div class="col-md-4"></div>
          </div><!--End logo-->

      <div class="row" ><!--text title-->
        <div class="col-md-4"></div>
        <div class="col-md-4"  style="background-color:rgba(1, 6, 77, 1); margin-top: 20px; border-top-left-radius: 10px; border-top-right-radius: 10px; height: auto;">
            <h3>            
               <p class="txtitle" style="font-size: 20px;">บริษัทสหกลอิควิปเมนท์จำกัด(มหาชน)</p>
               <p class="txtitle" style="font-size: 15px;"><strong>OFFICE  PHASE 8</strong></p> 
            </h3>
        </div>
        <div class="col-md-4"></div>
      </div><!--End texttitle-->

      <div class="row"><!-- row form-->        
            <div class="col-md-4"></div>
            <div class="col-md-4" style="background-color:rgba(204, 204, 204, 0.808); padding-top: 25px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; border-style: solid; border-width: 1px; height: auto; border-color: LightSlateGrey;"><!--div contents-->

                <form name="login" action="http://192.168.1.1/login" method="post" onsubmit="return doLogin()"  class="form-group"><!--form-->
                   
                    <input type="hidden" name="dst" value="">
                    <input type="hidden" name="popup" value="true">

                    <div class="input-group"><p style="font-size: 15px; white-space: inherit; color:black">กรุณา Login เพื่อเข้าใช้งานระบบ Internet & Network</p>  </div>                
                    <div class="col-sm-12"><!-- div username-->
                        <div class="input-group" style="margin: 5px;">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user" ></i></span>
                            <input  name="username" type="text" value="" class="form-control" placeholder="Username" autofocus style=" border-style: solid; border-width: 1px; border-color:LightSlateGrey;">
                        </div>
                    </div><!--end div username-->
        
                    <div class="col-sm-12"><!-- div password-->
                        <div class="input-group" style="margin: 5px;">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input  name="password" type="password" value="" class="form-control" placeholder="Password" style="border-style: solid; border-width: 1px; border-color:LightSlateGrey;">
                        </div>
                    </div><!--end div password-->
        
                    <div class="col-sm-12" style="text-align: center; margin: 5px;"><!-- div buttonlogin-->
                        <div class="form-group">
                            <input type="submit" value="Login" style="width: 80px;" class="btn">
                        </div>
                    </div><!--end div buttonlogin-->

                </form><!--end form-->

            </div> <!--end div content-->

        </div><!--End row form-->
        <div class="col-md-4"></div>

        <div class="row"> <!-- div footer-->
            <div class="footer"> 
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h5>
                        <p>ต้องการใช้งานระบบ Internet & Network ติดต่อ แผนกสารสนเทศ(สนง.แม่เมาะ)</p>
                        <p>E-mail : poramate@sahakol.com ,singha@sahakol.com</p>
                        <p>###* กรุณาอ่านกฏระเบียบข้อบังคับก่อนการใช้งานระบบสารสนเทศได้ที่ link คำสั่ง <a href="http://192.168.1.1/doc/SQ005_2558.pdf">SQ005_2558</a> *### </p>
                    </h5>
                </div>
                <div class="col-md-4"></div>
            </div>       
        </div><!--end div footer-->
    </div> <!--end div contrainer -->
  </body>
</html>





  
  