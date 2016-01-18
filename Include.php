<?php
//git comments 10
abstract  class Form {   
public $conn;
public $data;
 function __construct($db,$data){
	 $this->conn=$db;
	 $this->data=$data;
 }
    abstract  function getFormHtml();
}
//////////////////////////////////////
//////////////
//////////////   This class will select all the courses and put it in blocks.
//////////////
//////////////////////////////////////
class firstForm extends Form{
    public function getFormHtml() {
	 		  ?>
         
              
             
<div align="center"><!-- Start The Body -->
  <div class="clident-course">
    <div class="col-md-12">
      <div class="choose-item">
        <div class="row"><!-- first section start -->
            اختر تصنيف الدورة : 
              <!-- list items for all collages to be selected from user to sort the courses -->
              <select name=""  id="collage" class="select">
                <option <?php if($this->data['id'] == 0) echo "selected"?> value="0">---- أختر من القائمة ----</option>
                <?php 
			  //// Select statment for all collages from DB
					$sql = "SELECT * FROM collage";
					$result = $this->conn->query($sql);
					if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
					echo "<option value=".$row{'ID'}." ";
					if($this->data['id']==$row['ID']) echo "selected";
					echo ">".$row{'name'}."</option>";}}
?>
              </select>
              <!-- end of list items of collages --> 
              <a style="color:#FFF" target="_self" onclick="getContent({'className':'updateForm','id':'<?php $row['ID']?>','process':'insert','action':'course'})"
              class="btn">اضافة تقرير جديد</a>
                <a style="color:#FFF" target="_self" onclick="getContent({'className':'updateForm','id':'','process':'insert','action':'comunity_program'})"
              class="btn">اضافة البرامج المجتمعية</a>   <!-- link to insert a new course report --> 
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end of first section -->
<div id="ctl00_ContentPlaceHolder1_UpdatePanel1"> <span id="ctl00_ContentPlaceHolder1_lblMessage" class="info"></span><!-- start of second secton -->
  <div class="clearfix"> </div>
  <div class="row">
    <div class="col-md-12">
      <?php	 
////Select a small view for courses to displayed as blocks
$id=$this->data['id'];
$collage_id=$id;
if ($id == 0){$sql = "SELECT * FROM documentation";} //// 0 = اختر من القائمة ////Will display all courses without sort
else {$sql = "SELECT * FROM documentation where c_collage_index =$id";} ////Display courses for specific collage
$result = $this->conn->query($sql);
if ($result->num_rows > 0) { ////IF result of query > 0 will enter the "while loop" , Else no more result
while($row = $result->fetch_assoc()) {
					?>
      <div class='col-md-3 col-sm-6 avaliable'><!-- start the block -->
        <div class="custom-item">
          <ul class='ul-panel'>
            <li>
              <h3><?php echo $row['c_name']?></h3>
              <!-- course name as header -->
              <h5></h5>
            </li>
            <li>
              <p><i class='fa fa-calendar'></i>&nbsp;&nbsp;بداية الدورة : <?php echo $row['c_reg_time']?></p>
              <!-- course time --> 
            </li>
            <li>
              <p><i class='fa fa-clock-o'></i>&nbsp;&nbsp;مدة الدورة : <?php echo $row['c_duration']?></p>
              <!-- course duration --> 
            </li>
            <li>
              <p><i class='fa  fa-user'></i>&nbsp;&nbsp;عدد المسجلين : <?php echo $row['c_req_num']?></p>
              <!-- how many registers --> 
            </li>
            <li style='height: 55px; overflow: hidden'>
              <p><i class='fa fa-location-arrow'></i>&nbsp;&nbsp;<?php echo $row['c_location']?></p>
              <!-- course location --> 
            </li>
            <li>
              <button target="_self" name="test2" style="color:#FFF" 
             onclick="getContent({'className':'updateForm','id':'<?php echo $row['c_id']?>','collage_id':'<?php echo $collage_id;?>','process':'details'})" 
             class="btn-blue">تفاصيل</button>
              <button target="_self" name="test2" style="color:#FFF" 
             onclick="getContent({'className':'updateForm','id':'<?php echo $row['c_id']?>','collage_id':'<?php echo $collage_id;?>','process':'change'})"class="btn-green">تعديل</button>
              <button target="_self" name="test3" 
             onclick="confirmDelete(<?php echo $row['c_id']?>)"  class="btn-red">حذف</button>
            </li>
            <!-- For more Information -->
          </ul>
        </div>
      </div>
      <!-- End of Block -->
      <?php ;}} 
      ?>
      <!-- End of loop --> 
    </div>
    <!-- End section start --> 
  </div>
</div>
</div>
<!-- End The Body -->
<script>
function confirmDelete(x) {
    var txt;
    var r = confirm("هل تريد بالتاكيد الحذف ");
    if (r == true)
	 {
      getContent({'className':'deleteForm','id':x,'process':'delete'});
	 }
}
</script>
<script>
$( "#collage" ).change(function() {
getContent({'className':'firstForm', 'id': $("#collage").val()});
});
</script>
<?php
    }
}
//////////////////////////////////////
//////////////in this class (secondForm) print the html form 
//////////////and make the insert to the database
//////////////and make the photo slider
//////////////////////////////////////
class updateForm extends Form{
   public function photoSliderTopDivs()//this function for printing the top html div tags for making photo slider 
	{
		echo'<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 960px; height: 480px; overflow: hidden; visibility: hidden; background-color: #24262e;">
<!-- Loading Screen -->
<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
<div style="position:absolute;display:block;background:url("img/loading.gif") no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
</div>
<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 240px; width: 720px; height: 480px; overflow: hidden;">
';
	}
	//in betwen this to methods photoSliderTopDivs() and photosSliderDownDivs() printing loop:
	//select the image location from the database and print this 2 lins inside the loop:
 	//<div data-p='150.00' style='display: none;'>       <-------this div for css style to make photo slider (MUST BE EXACTLY  THE SAME)
	//<img data-u='image' src='".$image_location."' />  <-------this img tag contains image location from the database
	public function photosSliderDownDivs()//this function for printing the down html div tags for making photo slider (MUST BE EXACTLY  THE SAME)
	{
		echo'</div>
<!-- Thumbnail Navigator -->
<div data-u="thumbnavigator" class="jssort01-99-66" style="position:absolute;left:0px;top:0px;width:240px;height:480px;" data-autocenter="2">
<!-- Thumbnail Item Skin Begin -->
<div data-u="slides" style="cursor: default;">
<div data-u="prototype" class="p">
<div class="w">
<div data-u="thumbnailtemplate" class="t"></div>
</div>
<div class="c"></div>
</div>
</div>
<!-- Thumbnail Item Skin End -->
</div>
<!-- Arrow Navigator -->
<span data-u="arrowleft" class="jssora05l" style="top:158px;left:248px;width:40px;height:40px;" data-autocenter="2"></span>
<span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
</div>
<script>
jssor_1_slider_init();
</script>
';}
public function getFormHtml() {
	
	
	
$submet='onClick=submitForm("inserted.php","POST",""); ';
if(isset($this->data['action']))
{$action=$this->data['action'];echo $action."/";}
$process=$this->data['process'];
echo $process;
	if($process=='details' || $process=='change' )
	{	echo $process;
		$id=$this->data['id'];
		$sql = "SELECT * FROM documentation WHERE  c_id =$id ";
		$result = $this->conn->query($sql);
		$row= $result->fetch_object();
	}      
?>
<!-- Start Body -->
<form id="form" name="form" method="post" action="database_jobs.php"   enctype="multipart/form-data">
<?php if($process=="insert"){echo' <h3>بيانات توثيق الدورة :</h3>';echo'<input type="hidden" name="insert"';} ?>
<?php if($process=="details"){echo' <h3>معلومات توثيق الدورة :</h3>';echo'<input type="hidden" name="details"';} ?>
<?php if($process=="change"){echo' <h3>تحديث بيانات توثيق الدورة :</h3>';echo'<input type="hidden" name="change"';} ?>
<div align="center">
<div id="output"></div>
<table width="500" align="center">
<tr>
<td width="250" height="50"></td>
<td width="250" height="50"><button style="color:#FFF" class="btn" type="button" onclick="goBack()">&nbsp;&nbsp;رجوع&nbsp;&nbsp;</button>
</td>
</tr>
<tr>
  <input type="text" name="action"<?php if(isset($this->data['action'])){echo'value="'.$action.'"';} ?> id="course_or_event" hidden />
  <input type="text" name="process"<?php if($process=='change'){echo 'value="change"';} else if($process=='details'){echo 'value="details"';} 
  								else if($process=='insert'){echo 'value="insert"';} ?> hidden />
  <td width="250" height="50">اسم الدورة :</td>
  <td width="250" height="50" ><?php   if($process=="insert"||$process=="change")
										{ 
										echo'<input class="css-input"'; 
										if($process=="change"){echo 'value="'.$row->c_name.'"';}
									    echo 'type="text" size="20" name="course_name" id="course_name" />';
										}
									    if($process=="details"){echo $row->c_name;}  ?>
    </td>
</tr>
<tr>
  <td width="250" height="50">رقم الدورة :</td>
  <td width="250" height="50"><?php  if($process=="insert"||$process=="change")
								{
									echo'<input class="css-input"';
									if($process=="change"){echo 'value="'.$row->c_num.'"';echo' readonly="readonly"';}
									echo'type="text" size="20" name="course_id" id="course_id"  />';
														 
								}if($process=="details"){echo $row->c_num;}  ?></td>
</tr>
<tr>
  <td width="250" height="50">مقر الدورة :</td>
  <td width="250" height="50"><?php  if($process=="insert"||$process=="change")
							{
								echo'<input class="css-input"';
								if($process=="change"){echo 'value="'.$row->c_location.'"';}
								echo' type="text" size="20" name="pleace" id="pleace"  />';
							}  if($process=="details"){echo $row->c_location;}  ?></td></tr>
<tr>
  <td width="250" height="50">الكلية :</td>
  <td>
    <?php
					$sql2 = "SELECT * FROM collage";
					$result2 = $this->conn->query($sql2);
				if($process=="details")
				{
					if ($result2->num_rows > 0) 
					{
						while($row2 = $result2->fetch_assoc()) 
						{
							if($row2{'ID'}==$row->c_collage_index){echo $row2{'name'};}
						}//end of while loop
					}//end of if statament
				 }//end of if statament
				 
				 if($process=="insert"||$process=="change")
				 {
					  echo'<select name="collage"  id="collage" class="css-input">
      				  <option value="0">---- أختر من القائمة ----</option>';
    
				 //echo $row->c_collage_index;
					$sql2 = "SELECT * FROM collage";
					$result2 = $this->conn->query($sql2);
					echo $sql2;
					if ($result2->num_rows > 0) 
					{
					while($row2 = $result2->fetch_assoc()) 
					{
					echo '<option  value="'.$row2['ID'].'" ';
					if($process=='change'||$process=='details'){if($row2{'ID'}==$row->c_collage_index){echo "selected";}}


					echo ">".$row2{'name'}."</option>";
					}//end of while loop
					}//end of if statament
				   echo'</select>';
					 }
?></td></tr>
<tr>
  <td width="250" height="50">القسم :</td>
  <td width="250" height="50"><?php  if($process=="insert"||$process=="change")
								{
									echo '<input class="css-input"';
									 if($process=="change"){echo 'value="'.$row->c_dept.'"';}
									echo'type="text" size="20" name="dept" id="dept" />';
								}if($process=="details"){echo $row->c_dept;}  ?></td>
</tr>
<tr>
  <td width="250" height="50">حالة الدورة :</td>
  <td width="250" height="50">منتهيه</td>
</tr>
<tr>
  <td width="250" height="50">سعر الدورة :</td>
  <td width="250" height="50"><?php  if($process=="insert"||$process=="change")
								{
									echo'<input class="css-input"';
									 if($process=="change"){echo 'value="'.$row->c_price.'"';}
									echo'type="text" size="20" name="price" id="price" />';
								} if($process=="details"){echo $row->c_price;}  ?></td>
</tr>
<tr>
  <td>نوع الملتحقين :</td>
  <td><?php if($process=="insert"||$process=="change")
							{
								echo' <select id="collage" name="type"  class="css-input">
                                 <option id="c_gender" name="c_gender"';
                                if($process=='change'&& $row->c_gender==0)echo'selected="selected"'; echo' value="0">رجال / نساء</option>'; 
                                echo'<option id="c_gender" name="c_gender"'; 
                                if($process=='change'&& $row->c_gender==1)echo'selected="selected"'; echo'value="1">رجال</option>';   
                                echo' <option id="c_gender" name="c_gender"';
                                if($process=='change'&& $row->c_gender==2)echo'selected="selected"'; echo'value="2">نساء</option></select>';
							}
                                 if($process=="details" && $row->c_gender==0){echo'رجال / نساء';}
                                 if($process=="details" && $row->c_gender==1){echo'رجال';}
                                 if($process=="details" && $row->c_gender==2){echo'نساء';}  ?></td>
</tr>
<tr>
  <td width="250" height="50">الفئات المستهدفه :</td>
  <td width="250" height="50"><?php  if($process=="insert"||$process=="change")
									{
										echo'<input class="css-input"';
										 if($process=="change"){echo'value="'.$row->c_target_group.'"';}
										echo'type="text" size="20" name="target" id="target" />';
									}if($process=="details"){echo $row->c_target_group;} ?></td>
</tr>
<tr>
  <td width="250" height="50">مدة الدورة (يوم) :</td>
  <td width="250" height="50"><?php   if($process=="insert"||$process=="change")
									{
										echo'<input class="css-input"';
										 if($process=="change"){echo 'value="'.$row->c_duration.'"';}
										echo'type="text" size="20" name="how_long" id="how_long" />';
									} if($process=="details"){echo $row->c_duration;} ?></td>
</tr>
<tr>
  <td width="250" height="50">العدد المطلوب لبداية الدورة :</td>
  <td width="250" height="50"><?php  if($process=="insert"||$process=="change")
									{
										echo'<input class="css-input"';
										 if($process=="change"){echo 'value="'.$row->c_req_num.'"';}
										echo'type="text" size="20" name="at_least" id="at_least" />';
									}   if($process=="details"){echo $row->c_req_num;}?></td>
</tr>
<tr>
  <td width="250" height="50">تاريخ بداية التسجيل :</td>
  <td width="250" height="50"><?php  if($process=="insert"||$process=="change")
									{
										echo'<input class="css-input"';
										 if($process=="change"){echo 'value="'.$row->c_reg_time.'"';}
										echo'type="date" size="20" name="start_date" id="start_date" />';
									}   if($process=="details"){echo $row->c_reg_time;}?></td>
</tr>
<tr>
  <td width="250" height="50">الطاقة الاستيعابية :</td>
  <td width="250" height="50"><?php if($process=="insert"||$process=="change")
									{
										echo'<input class="css-input"';
										 if($process=="change"){echo 'value="'.$row->c_max_num.'"';}
										echo'type="text" size="20" name="at_most" id="at_most" /> ';		
									}   if($process=="details"){echo $row->c_max_num;}?></td>
</tr>
<tr>
  <td width="250" height="50">وقت الدوام (من الساعة) :</td>
  <td width="250" height="50"><?php  if($process=="insert"||$process=="change")
									{
										echo'<input class="css-input"';
										 if($process=="change"){echo 'value="'.$row->c_time_from.'"';}
										echo'type="text" size="20" name="start_time" id="start_time" />';
									}   if($process=="details"){echo $row->c_time_from;}?></td>
</tr>
<tr>
  <td width="250" height="50">وقت الدوام (إلى الساعة) :</td>
  <td width="250" height="50"><?php  if($process=="insert"||$process=="change")
									{
										echo'<input class="css-input" ';
										 if($process=="change"){echo 'value="'.$row->c_time_to.'"';}
										echo'type="text" size="20" name="end_time" id="end_time" />';
									}   if($process=="details"){echo $row->c_time_to;}?></td>
</tr>
<tr>
  <td width="250" height="50">مجال الدورة :</td>
  <td width="250" height="50"><?php  if($process=="insert"||$process=="change")
									{
										echo'<input class="css-input"';
										 if($process=="change"){echo 'value="'.$row->c_major.'"';}
										echo'type="text" size="20" name="course_about" id="course_about" />';
									}	if($process=="details"){echo $row->c_major;}?></td>
</tr>
<tr>
  <td width="250" height="50">لغة الدورة :</td>
  <td width="250" height="50"><?php  if($process=="insert"||$process=="change")
									{
										echo'<input class="css-input" ';
										 if($process=="change"){echo 'value="'.$row->c_languate.'"';}
										echo'type="text" size="20" name="language" id="language" />';
									}   if($process=="details"){echo $row->c_languate;}?></td>
</tr>
<tr>
  <td width="250" height="50">الأهداف :</td>
  <td width="250" height="50"><?php  if($process=="insert"||$process=="change")
									{
										echo'<textarea class="css-input"  cols="19" rows="6" name="goals" id="goals">';
										 if($process=="change"){echo $row->c_goals;}
										echo'</textarea>';
									}	 if($process=="details"){echo $row->c_goals;}?></td>
</tr>
<tr>
  <td width="250" height="50">الوصف :</td>
  <td width="250" height="50"><?php  if($process=="insert"||$process=="change")
									{
										echo'<textarea class="css-input"  cols="19" rows="6" name="disctiption" id="goals">';
										 if($process=="change"){echo $row->c_doc_desc;}
										echo'</textarea>';
									}	 if($process=="details"){echo $row->c_doc_desc;}?></td>
</tr>
<tr>
  <td width="250" height="50">ملاحظات :</td>
  <td width="250" height="50"><?php  if($process=="insert"||$process=="change")
									{
										echo'<textarea class="css-input"  cols="19" rows="6" name="note" id="goals">';
										 if($process=="change"){echo $row->c_notes;}
										echo'</textarea>';
									}	 if($process=="details"){echo $row->c_notes;}?></td>
</tr></table>
  <?php
if($process=='change' ||$process=='details')
{echo'
<table width="500" align="center">
<tr>
  <td width="250" height="50"> الصور :</td>
  <td></td>
  <tr>
  <td width="250" height="50">';
$sql2 = "SELECT img_loc FROM doc_imgs where doc_imgs.doc_id='".$row->c_id."' ";//select the image location from the batabase for this event
$result2 = $this->conn->query($sql2);//do the sql2 query
if ($result2->num_rows > 0)//cehck is there image location saved in the database? 
{//open for if statament 
	$this->photoSliderTopDivs();//call this function to print the reqired HTML  tags for photo slider
	while($row2 = $result2->fetch_assoc())//go throught this loop for printing all image which is related to this event 
		{//start loop 
			echo"<div data-p='150.00' style='display: none;'>
			<img data-u='image' src='".$row2["img_loc"]."' />
			</div> ";
		 } //end loop
	 $this->photosSliderDownDivs();//call this function to print the reqired HTML tags for photo slider 
if($process=='change')
{
 echo'<div align="left"> <button style="color:#FFF" class="btn" type="button" onclick="goBack()">&nbsp;&nbsp;رجوع&nbsp;&nbsp;</button>
 <button style="color:#FFF" class="btn" type="button" '.$submet.' name="update" >&nbsp;&nbsp;1تحديث&nbsp;&nbsp;</button> </form></div>
';}
if($process=='details')
{
echo'<div align="left"> <tr>  <td width="250" height="50" colspan="2" align="center"> <button style="color:#FFF" class="btn" type="button" onclick="goBack()">&nbsp;&nbsp;جوع&nbsp;&nbsp;</button> </td></tr></div>
';}
} //end of if statement
else {echo'</tr><tr><td> <div align="center">لا يوجد صور</div></td>';
	if($process=='change'){echo'<td><div align="left">
  <button style="color:#FFF" class="btn" type="button" onclick="goBack()">&nbsp;&nbsp;رجوع&nbsp;&nbsp;</button>
  <button style="color:#FFF" class="btn" type="button" '.$submet.'  name="update" >&nbsp;&nbsp;تحديث&nbsp;&nbsp;</button>
</div></td>
';}
if($process=='details'){echo'<div align="left">
 <tr> <td width="250" height="50"></td>
  <td width="250" height="50" > <button style="color:#FFF" class="btn" type="button" onclick="goBack()">&nbsp;&nbsp;جوع&nbsp;&nbsp;</button>
  </td></tr>
</div>
';}
}//if there are no image saved in the database write the error massage here  
} if($process=="insert")
{echo'<div align="center">
<table width="500" align="center"> <tr>
        <td width="250" height="50">تحميل الصور :</td>
        <td width="250" height="50"><input class="css-input" type="file" size="20" value="" name="upload" id="files" accept="image/*" onChange="loadFile(event)" ></td>
      </tr>
      <tr>
        <td width="250" height="50"></td>
        <td width="250" height="50"><div id = "FileUploadContainer"> </div></td>
      </tr>
      <tr>
        <td width="250" height="50"></td>
        <td width="250" height="50"><input class="btn" id="Button1" style="color:#FFF" type="button" value="إضافة صوره" accept="image/*"  onclick = "AddFileUpload()" /></td>
      </tr>
      <img id="output1"/>
      <tr>
        <td width="250" height="50">&nbsp;</td>
        <td width="250" height="50">&nbsp;</td>
      </tr>
      <tr>
        <td width="250" height="50">&nbsp;</td>
        <td width="250" height="50"><div align="left"><button style="color:#FFF" class="btn" type="button" onclick="goBack()">&nbsp;&nbsp;رجوع&nbsp;&nbsp;</button>
            <button class="btn"  style="color:#FFF" type="submet"  '.$submet.' name="submet"  >&nbsp;&nbsp;حفظ&nbsp;&nbsp;</button>
          </div></td>
      </tr>
    </table></div>
';}?>
   <script>
function goBack() {
     getContent({'className':'firstForm','id':0})
//onclick="submitForm('inserted.php','POST','');"
}
</script>
  <?php
    }
}
//////////////////////////////////////
//////////////in this class (secondForm) print the html form 
//////////////and make the insert to the database
//////////////and make the photo slider
//////////////////////////////////////
class deleteForm extends Form
	{
        public function getFormHtml()
		 {
			 $id=$this->data['id'];
			require_once 'database_jobs.php';
			$con=new DataBase();//creating opject
			$con->connect();
			$sql="DELETE FROM doc_imgs WHERE doc_id ='".$id."'";
			mysql_query($sql);
			$sql="DELETE FROM documentation WHERE c_id ='".$id."'";
			//echo $sql;
			mysql_query($sql); 
			echo '<h2 align="center" style="color:green">تم الحذف بنجاح</h2>';
			echo '<div align="center" ><h2 style="color:green">جاري الرجوع الى الصفحة الرئيسية<img src="img/ajax-loader.gif" /></h2></div>';
?>
 <script>
setTimeout(function(){goBack()}, 3000);
function goBack() {
     getContent({'className':'firstForm','id':0})
		}//end of getFormHtml()
</script>
<?php
    }
}
?>
