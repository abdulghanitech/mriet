<?php
$category = "Departments";
$sub_category= "Electronics & Communication Engineering";
$sub_sub_category = "Faculty List";

$pagename = $sub_sub_category." - ".$sub_category;

include('active-class-adder-v2.php');


?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $pagename; ?> - MRIET</title>
<?php include('header.php'); ?>

<div class="container-fluid">
<div class="row custom-row-grey-color">
	<div class="col-md-4">
	<h3><?php echo $sub_category; ?></h3>
	</div>
	<div class="col-md-8 breadcrumb-fix">
		<ul class="breadcrumb" style="margin-bottom: 5px;">
			You are here:
		  <li><a href="index.php">Home</a></li>
		  <li><a href="javascript:void(0)"><?php echo $category; ?></a></li>
		  <li class="active"><?php echo $sub_category; ?></li>
		</ul>
	</div>
</div>
	<div class="row">
		<div class="col-md-4">
		<div class="panel panel-info">
			<div class="panel-heading">
				<b><div class="text-center">ECE Department</div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">
						
		
		<center><h3 class="page-header">Faculty Details</h3></center>                 
              <div class="table-responsive">
												  
													<table class="table table-striped table-hover">
													<tr>
														<th>S.No</th>
														<th>Name</th>
														<th>Qualification</th>
														<th>Designation</th>
														
													</tr>
													<tr class="info">
														<td>1.</td>
														<td>Dr.M.NARSING YADAV</td>
														<td>Ph.d</td>
														<td>Professor & HOD</td>
													</tr>
													<tr class="warning">
														<td>2.</td>
														<td>Dr.RAJESHA.N</td>
														<td>Ph.d</td>
														<td>Professor</td>
													</tr>
													<tr class="success">
														<td>3</td>
														<td>DR.OMPRAKASH</td>
														<td>Ph.d</td>
														<td>Professor</td>
														</tr>
														
														<tr class="success">
														<td>4</td>
														<td>DR. ZEESHAN VAKIL</td>
														<td>Ph.d</td>
														<td>Professor</td>
														</tr>
													
														<tr class="info">
														<td>5</td>
														<td>Mrs.K.SATYAVATHI</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													
														<tr class="danger">
														<td>6</td>
														<td>Mr.REPURI RAJA KISHORE</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													
														<tr class="success">
														<td>7</td>
														<td>Mr.POTARAJU YUGENDER</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													
</tr>	
													
<tr class="info">
														<td>8</td>
														<td>Mr.VAMSHI KOLLIPARA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													
</tr>	
													
<tr class="danger">
														<td>9</td>
														<td>Mr.B.ANANTH KUMAR</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													
</tr>	
													
<tr class="success">
														<td>10</td>
														<td>Mr.M.NARESH</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													
														</tr>	
													
														<tr class="info">
														<td>11</td>
														<td>Mr.MIRZA KHALEELULLAH BAIG</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													
</tr>	
													
<tr class="danger">
														<td>12</td>
														<td>Mr.DUDEKULA MAGBUL BASHA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													
</tr>	
													
<tr class="success">
														<td>13</td>
														<td>Mr.SRAVAN KUMAR UNNAM</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="info">
														<td>14</td>
														<td>Mrs.PRASHANTHI MANDALA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="danger">
														<td>15</td>
														<td>Mr.SIRISADHULA MALLESH</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="success">
														<td>16</td>
														<td>Mr.PATTABHI SURESHBABU</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="info">
														<td>17</td>
														<td>Mr.DAVVURU HAZINAYAB</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="danger">
														<td>18</td>
														<td>Mrs.SHAIK MOHAMMADINIGAR</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="success">
														<td>19</td>
														<td>Mr.P CHANDRA RAO KOLAKALURI</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="info">
														<td>20</td>
														<td>Mr.PONNAPULA SRIHARI</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="danger">
														<td>21</td>
														<td>Mrs.DAMERA SIRISHA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="success">
														<td>22</td>
														<td>Mr.B PRABHU KUMAR</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="info">
														<td>23</td>
														<td>Ms.UPPALA GEETHA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="danger">
														<td>24</td>
														<td>Mrs.SANTOSHI BHAVANI K</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="success">
														<td>25</td>
														<td>Ms.THARRA VIMALA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													
													<tr class="danger">
														<td>26</td>
														<td>Mr.THUDI VISHNU</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="success">
														<td>27</td>
														<td>MR.SIKENDER POTLA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="info">
														<td>28</td>
														<td>MR.KADIYALA SUDHAKAR </td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="danger">
														<td>29</td>
														<td>MR.T.VIJAYA BHASKAR REDDY</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="success">
														<td>30</td>
														<td>MR.GANESH MIRIYALA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="info">
														<td>31</td>
														<td>MRS.SREEVANI MENDA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="danger">
														<td>32</td>
														<td>Mrs.PRATHYUSHA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="success">
														<td>33</td>
														<td>Mrs.P.DEEPTHI PAKIRU</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="info">
														<td>34</td>
														<td>Ms.G.SWATHI</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="danger">
														<td>35</td>
														<td>Mr. KOMMOJU  LOVA RAJU</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="success">
														<td>36</td>
														<td>Mr.MIRIYALA SHARATH CHANDRA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="info">
														<td>37</td>
														<td>MS. DANDU NASREEN SULTANA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="danger">
														<td>38</td>
														<td>MR.B.ANIL KUMAR</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="success">
														<td>39</td>
														<td>MR.MUNIPALLE VAMSHI KRISHNA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="info">
														<td>40</td>
														<td>MS.DIDDI SARITHA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="danger">
														<td>41</td>
														<td>MR.EMMADI CHANDRA KUMAR</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="success">
														<td>42</td>
														<td>MR.S.ABDUL RAHAMAN</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="info">
														<td>43</td>
														<td>MR.M.AJAY KUMAR</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="danger">
														<td>44</td>
														<td>MS.GURRALA SPANDANA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="success">
														<td>45</td>
														<td>MR.BONALA SHARAN KUMAR</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="info">
														<td>46</td>
														<td>MR.PATIL SRIRAM</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="danger">
														<td>47</td>
														<td>MR.P.DILIP YADAV</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="success">
														<td>48</td>
														<td>MS.CHEGU SIREESHA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="info">
														<td>49</td>
														<td>MR.BHOGADI VENKATA SAMBASIVA RAO</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="danger">
														<td>50</td>
														<td>MS.GOVENOLLA VIGNATHA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="success">
														<td>51</td>
														<td>MS.NANNAPURAJU SINDHUJA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="info">
														<td>52</td>
														<td>MS.VUDDANDA NAGARANI</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="danger">
														<td>53</td>
														<td>MR.VENKAT REDDY MENDU</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="success">
														<td>54</td>
														<td>MR.GANDE BALAGANGADHAR TILAK</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="info">
														<td>55</td>
														<td>MS.BOINI CHANDANA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="danger">
														<td>56</td>
														<td>MR.SAI KRISHNA TIRUPATHI</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="success">
														<td>57</td>
														<td>MR.K.NIKHIL CHAKRAVARTHY</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
													</tr>	
													<tr class="info">
														<td>58</td>
														<td>MS.PARSANABOINA SRAVANI</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														</tr>
														
														<tr class="info">
														<td>59</td>
														<td>MR.P.VINOD KUMAR</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														</tr>
														<tr class="info">
														<td>60</td>
														<td>DUGYALA MOUNIKA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														</tr>
														<tr class="info">
														<td>61</td>
														<td>PANGA SRILATHA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														</tr>
														<tr class="info">
														<td>62</td>
														<td>VEENA BESTHA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														</tr>
														<tr class="info">
														<td>63</td>
														<td>MS.M.K.PRAVEENA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														</tr>
														<tr class="info">
														<td>64</td>
														<td>MR.NARRA ANUDEEP</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														</tr>
														<tr class="info">
														<td>65</td>
														<td>MR.KOTHAPALLI AJAY</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														</tr>
														<tr class="info">
														<td>66</td>
														<td>MS.ERUVA APARNA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														</tr>
													
												</table>              
			
		</div>
		</div>




<?php include('footer.php'); ?>