<?php require("header.php");

?>

<script type="text/javascript">
	document.getElementById("auhome").className="active";
</script>

                <div class="art-contentLayout">
                    <div class="art-content">
                        <div class="art-Post">
                            <div class="art-Post-tl"></div>
                            <div class="art-Post-tr"></div>
                            <div class="art-Post-bl"></div>
                            <div class="art-Post-br"></div>
                            <div class="art-Post-tc"></div>
                            <div class="art-Post-bc"></div>
                            <div class="art-Post-cl"></div>
                            <div class="art-Post-cr"></div>
                            <div class="art-Post-cc"></div>
                            <div class="art-Post-body">
                        <div class="art-Post-inner">
`                           
                            <div class="art-PostContent">
                                
           
                            <p> Mark Your Symptomps </p>		
                            <form action="#" method="post">
							<input type="checkbox" name="Head" value="Male">Headache</input><br>
							<input type="checkbox" name="Fever" value="Female">Fever</input><br>
							<input type="checkbox" name="eye" value="Female">Eye Pain</input><br>
							<input type="checkbox" name="nose" value="Female">Nose Pain</input><br>
							<input type="checkbox" name="ear" value="Female">Ear Pain</input><br>
							<input type="checkbox" name="nosebleed" value="Female">Nose Bleed</input><br>
							<input type="checkbox" name="lchest" value="Female">Left Chest Pain</input><br>
							<input type="checkbox" name="rchest" value="Female">Right Chest Pain</input><br>
							<input type="checkbox" name="cough" value="Female">Cough</input><br>
							<input type="checkbox" name="cold" value="Female">Cold</input><br>
							<input type="checkbox" name="sneze" value="Female">Sneeze</input><br>
							<input type="checkbox" name="abdpain" value="Female">Abdominal Pain</input><br>
							<input type="checkbox" name="dizzy" value="Female">Dizziness</input><br>
							<input type="checkbox" name="gas" value="Female">Gas</input><br>
							<input type="checkbox" name="nausea" value="Female">Nausea</input><br>
							<input type="checkbox" name="rash" value="Female">Rash</input><br>
							<input type="checkbox" name="coldsore" value="Female">Cold Sores</input><br>
							<input type="checkbox" name="throat" value="Female">Throat Pain</input><br>
							<input type="checkbox" name="vomit" value="Female">Vomiting</input><br><br>
							<input type="submit" name="submit" value="Submit"/>
							</form>
							<br>
							<br>
							<p> Our Predicted Disease </p>
							<?php
							if (isset($_POST['Head'])){
								if (isset($_POST['Fever'])){
									if (isset($_POST['throat'])){
										echo "You Might Have Seasonal Fever.";
									}
									else{
										echo "Its a regular Fever . You Don't Need To Worry about it";
									}
								}
								else if (isset($_POST['throat'])){
									
								}
								else{
									echo"Male";
								}
							}
							else if(isset($_POST['lchest'])){
								if(isset($_POST['rchest'])){
									echo " You Have Some Heart Condition. Please See A Dpctpr As Sppm As upi can";
								}else{
									echo "Try taking some Gastric Tablets ( Losectil , Neotek) . It might be some gastric problem";
								}
							}
							else if(isset($_POST['rchest'])){
									echo "Try taking some Gastric Tablets ( Losectil , Neotek) . It might be some gastric problem";
							}
							else if(isset($_POST['dizzy'])){
									if(isset($_POST['vomit'])){
									echo "If your problem lasts for too long please see a doctor. Eat hyginc foods.";
								}
								else{
									echo"Its nothing serious . Have some rest . It will be alright";
								}
							}
							else if(isset($_POST['cold'])){
									if(isset($_POST['sneze'])){
										echo "Drink More Fluids. Its nothing Serious ";
									}
							}
							else{
								echo "You Might Have Seasonal Sickness,Please See A Doctor if it Lasts for too long and Drink More Fluids ";
							}

							?>
                                
                                   
                            </div>
                            <div class="cleared"></div>
                        </div>
                        
                            </div>
                        </div>
                        <div class="art-Post">
                            <div class="art-Post-tl"></div>
                            <div class="art-Post-tr"></div>
                            <div class="art-Post-bl"></div>
                            <div class="art-Post-br"></div>
                            <div class="art-Post-tc"></div>
                            <div class="art-Post-bc"></div>
                            <div class="art-Post-cl"></div>
                            <div class="art-Post-cr"></div>
                            <div class="art-Post-cc"></div>
                            <div class="art-Post-body">
                        <div class="art-Post-inner">
                       
                            <div class="art-PostContent">
                                
                                    
                                  
                                    
                            </div>
                            <div class="cleared"></div>
                        </div>
                        
                            </div>
                        </div>
                    </div>
                    <div class="art-sidebar1">
                        
                        <div class="art-Block">
                            <div class="art-Block-body">
                                <div class="art-BlockHeader">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="art-header-tag-icon">
                                        <div class="t">Log In</div>
                                    </div>
                                </div><div class="art-BlockContent">
                                    <div class="art-BlockContent-tl"></div>
                                    <div class="art-BlockContent-tr"></div>
                                    <div class="art-BlockContent-bl"></div>
                                    <div class="art-BlockContent-br"></div>
                                    <div class="art-BlockContent-tc"></div>
                                    <div class="art-BlockContent-bc"></div>
                                    <div class="art-BlockContent-cl"></div>
                                    <div class="art-BlockContent-cr"></div>
                                    <div class="art-BlockContent-cc"></div>
                                    <div class="art-BlockContent-body">
                                        <div>
                                        
                                        
                                        <script type="text/javascript">
										function check(f)
										{
											if(f.uid.value=="")	
											{
												document.getElementById("spuid").innerHTML="Please,Enter the user id ";
												//alert("Please,Enter Your User Id")
												f.uid.focus()
												return false;
												}
											else if(f.pwd.value=="")
												{
													document.getElementById("a").innerHTML="Please,Enter the password";
													//alert("Please,Enter Your Password")
													f.pwd.focus()
													return false;
													
													}	
												
												else
												return true;
											}
										
										
										</script>
                                        <form action="loginH.php" method="POST" onsubmit="return check(this)">
<table>
<tr><td>User Id:</td></tr><tr><td><input type="text" name="uid"><span id='spuid' style="color: red;"></span></td></tr>
<tr><td>Password:</td></tr><tr><td><input type="password" name="pwd"><span id='spuid' style="color: red;"></span></td></tr>
<tr><td><input type="submit" value="login"><input type="reset" value="cancel"></td></tr>
<tr><td><a href="register.php"><input type="button" value="Sign Up"></a></td></tr>
</table>

<?php
			if (isset ($_GET["act"]))
				if ($_GET["act"] == "invalid")
					echo "Invalid User Id / password";
				
?>

</form>

                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="cleared"></div><div class="art-Footer">
                    
                    <?php require("footer.php")?>