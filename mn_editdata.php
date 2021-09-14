<!doctype html>
<html>
<head>
<meta charset="utf-8">


<title>ข้อมูลส่วนตัว</title>
</head>
<body>
	<?php
    session_start();
    include('aa/connect.php'); 

?>
	
		<div class="row">
			<div class="col-md-12">
				<div><?php include('menu_user2.php');?></div>
				</div>
			</div>
	
		
	<div class="col-md-12">
				<div><?php include('menu_mn.php');?></div>
		
		<div class="col-md-9">	
					<?php
			include('aa/connect.php'); 
	$username = $_SESSION['username'];
			
	
	$strSQL="SELECT * from tb_users WHERE username ='$username'";
	$objResult=$conn->query($strSQL);
			
	
			
		
	while($num_rows=mysqli_fetch_assoc($objResult)){
?>
		
 <form class="form" id="model" action="mn_saveedit.php" method="post" enctype="multipart/form-data">
  
							<h1><b>แก้ไขข้อมูลส่วนตัว</b></h1> <br>
  
   

	
<div class="form-group">
		 <label for="psw">อายุ : </label>
      <input type="text" id="box1"  name="age_user" required value="<?php echo $num_rows["age_user"];?>">
	</div>
		
	 <div class="form-group">
		  <label for="country">เพศ : </label>
			<select id="box1" name="sex_user">
			  <option value="1" <?php if($num_rows["sex_user"]=="1"){echo"selected";}?>>ชาย</option>
			  <option value="2" <?php if($num_rows["sex_user"]=="2"){echo"selected";}?>>หญิง</option>
			</select>
					</div>
	 <div class="form-group">
      <label for="uname">น้ำหนัก (กก.) : </label>
      <input type="text" id="box1"  name="weight_user" value="<?php echo $num_rows["weight_user"];?>" required>
			</div>

<div class="form-group" >
      <label for="psw">ส่วนสูง (ซม.) : </label>
      <input type="text" id="box1"  name="height_user" required value="<?php echo $num_rows["height_user"];?>">
				</div>
	 
	<div class="form-group">
	  		 <label for="">โรคประจำตัว : <b>โรคเหนือจากนี้ควรรับคำแนะนำจากแพทย์หรือผู้เชี่ยวชาญ*</b> </label> 
		 <br><br>

					  <?php  
                    if($num_rows["disease1"]==1){
                        echo "<input type='checkbox' style='margin: 4px;' name='disease_1' value='1' checked> ไม่มีโรคประจำตัว";
                    }else{
                        echo "<input type='checkbox' style='margin: 4px;' name='disease_1' value='1'> ไม่มีโรคประจำตัว";
                    }
						?> &nbsp;&nbsp;
				  <?php  
                    if($num_rows["disease2"]==1){
                        echo "<input type='checkbox' style='margin: 4px;' name='disease_2' value='1' checked> โรคความดันโลหิตสูง";
                    }else{
                        echo "<input type='checkbox' style='margin: 4px;' name='disease_2' value='1'> โรคความดันโลหิตสูง";
                    }
						?> &nbsp;&nbsp;
				  <?php  
                    if($num_rows["disease3"]==1){
                        echo "<input type='checkbox' style='margin: 4px;' name='disease_3' value='1' checked> โรคหัวใจ";
                    }else{
                        echo "<input type='checkbox' style='margin: 4px;' name='disease_3' value='1'> โรคหัวใจ";
                    }
						?> &nbsp;&nbsp;
			
				  <?php  
                    if($num_rows["disease4"]==1){
                        echo "<input type='checkbox' style='margin: 4px;' name='disease_4' value='1' checked> โรคเบาหวาน";
                    }else{
                        echo "<input type='checkbox' style='margin: 4px;' name='disease_4' value='1'> โรคเบาหวาน";
                    }
						?> 

							
							</div> 
		 <br>
	<div class="form-group">
		  <label for="country">กิจกรรมที่ทำ : </label>
			<select id="box1" name="activity_user">
			  <option value="1.2" <?php if($num_rows["activity_user"]=="1.2"){echo"selected";}?>>ไม่ออกกำลังกายหรือทำงานนั่งโต๊ะ</option>
			  <option value="1.375" <?php if($num_rows["activity_user"]=="1.375"){echo"selected";}?>>ออกกำลังกายเบาๆ (1-2 ครั้งต่อสัปดาห์)</option>
			<option value="1.55" <?php if($num_rows["activity_user"]=="1.55"){echo"selected";}?>>ออกกำลังกายปานกลาง (3-5 ครั้งต่อสัปดาห์)</option>
				<option value="1.725" <?php if($num_rows["activity_user"]=="1.725"){echo"selected";}?>>ออกกำลังกายหนัก (6-7 ครั้งต่อสัปดาห์)</option>
				<option value="1.9" <?php if($num_rows["activity_user"]=="1.9"){echo"selected";}?>>ออกกำลังกายหรือเล่นกีฬาอย่างหนักทุกวันเช้าเย็น </option>
			</select>
					</div>				
		
	  
        
     <center> <button type="submit" class="btlogin" onclick="return confirm('คุณต้องการบันทึกข้อมูล ใช่หรือไม่?')">บันทึก</button>  &nbsp;
		<button type="submit" class="btlogin2" onclick="window.location.href='home1.php'">ยกเลิก</button></center>
		
		
		
		
	
   

   
  </form>
		<?php 
				 }
			?>
		</div>
		
		
				</div>
			
</body>
</html>
