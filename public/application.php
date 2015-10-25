<?php 
	require ('header.php');
 ?>
<body>

<div class="container" id = "app">

	<!-- Trip Details -->
	<div class="section-block">
		<div class="pure-g">
			<div class="pure-u-1-1">
				<h1>
					Haiti Mission Trip Application
				</h1>
			</div>
		</div>
		<div class="pure-g">
			<div class="pure-u-1-1">
				<p>
					<strong>Trip Date:</strong>
					<?php
						
						// Check for an invalid date being entered in the URL
						if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $_GET['trip'])) {
							header("Location: index.php"); 
							die("Redirecting to: index.php"); 	
						}

						$tripDate = new DateTime($_GET['trip']);
						$tripDateFormatted = $tripDate->format('l\, F jS\, Y');
						echo ($tripDateFormatted);
					?>
				</p>
				<p>
					<strong>Additional Information:</strong>
					Thank you for your interest in missions with Reiser Relief, Inc.  Once your application is approved, a team leader will be contacting you requesting a non-refundable $125 deposit. A final payment of $725 is due 30 days prior to departure. The total for room and board is $850.
				</p>

				<p>
					<strong>Expectations:</strong>
					You are willing to be uncomfortable.  You seek meaning and significance for your life.  You want to serve others and are open to God using this trip to shape you.  You agree that this trip is not about you or your purpose but God’s purpose for your life.  You are willing to hold babies, play with children, visit with elderly, go deep into the poorest reaches of Haiti and put others first.  You will be hot and dirty at the end of each day.  You understand that what you see and what you experience can change your life.  You agree to respect your team members and extend the Grace God has extended us when there are differences between us.
				</p>				
			</div>
		</div>		
	</div>

	<!-- Personal Profile -->

	<form class="pure-form" id ="applicant-form">
		<legend>Personal Information</legend>
		<div class="pure-g">
			<div class="pure-u-1-3">
				<fieldset class="pure-group">
					<legend>Name <span class="gray">(as it appears on your passport)</span></legend>
					<input type="text" name="first-name" placeholder="First" />
					<input type="text" name="middle-name" placeholder="Middle"/>
					<input type="text" name="last-name" placeholder="Last" />
				</fieldset>
			</div>
			<div class="pure-u-1-3">
				<legend>Address</legend>
				<fieldset class="pure-group">
					<input type="text" name = "address" placeholder="Street Address"/>
					<input type="text" name = "address-two" placeholder="Address Line 2"/>
					<input type="text" name = "city" placeholder="City" />
					<div class="label-container">
						<label class = "gray">State</label>
					</div>
					<select name = "state">
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District Of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN" selected>Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>
					<input type="text" name = "zip" placeholder="ZIP" />
				</fieldset>
			</div>
			<div class="pure-u-1-3">
				<legend>Contact</legend>
				<fieldset class="pure-group">
					<input type="text" name = "home-phone" placeholder = "Home Phone"/>
					<input type="text" name = "cell-phone" placeholder = "Cell Phone"/>
					<input type="text" name = "email" placeholder="Email" />
				</fieldset>
			</div>
		</div>

		<div class="pure-g">
			<div class="pure-u-1-2">
				<fieldset class="pure-group">
					<legend>Citizenship</legend>
					<input type="text" name = "age" placeholder = "Age" />	
					<input type="text" name = "birthdate" placeholder = "Birthdate - MM/DD/YYYY" />
					<input type="text" name = "nationality" placeholder = "Nationality" />
					<input type="text" name = "birthplace" placeholder = "Birthplace" />
				</fieldset>
			</div>
			<div class="pure-u-1-2">
				<legend>Passport Info</legend>
				<fieldset class="pure-group">					
					<input type="text" name = "passport-number" placeholder = "Passport Number" />					
					<input type="text" name = "passport-issue-date" placeholder = "Issue Date - MM/DD/YYYY" />					
					<input type="text" name = "passport-expiration-date" placeholder = "Expiration Date - MM/DD/YYYY" />
					<div class="label-container">
						<label class = "gray">Marital Status</label>
					</div>
					<select name="marital">
						<option value="Single">Single</option>
						<option value="Engaged">Engaged</option>
						<option value="Married">Married</option>
						<option value="Separated">Separated</option>
						<option value="Divoriced">Divoriced</option>
					</select>
				</fieldset>
			</div>
		</div>

		<div class="pure-g">
			<div class="pure-u-1-1">
				<fieldset class="pure-group">
					<legend>Questions</legend>					
					<label>What gifts or strengths do you have that would add to the mission experience?</label>
					<div class = "textarea-container">
						<textarea name = "gifts"></textarea>					
					</div>
					<label>Please list three expectations for your mission experience:</label>
					<div class = "textarea-container">
						<textarea name = "expections"></textarea>
					</div>
					<label>Do you have any concerns or fears about this experience?  Please explain.</label>
					<div class = "textarea-container">
						<textarea name = "concerns"></textarea>
					</div>
					<label>Do you have any health issues that the team should know?</label>
					<div class = "textarea-container">
						<textarea name = "health"></textarea>
					</div>
					<label>Is your family supportive of you seeking a mission experience?  Explain:</label>
					<div class = "textarea-container">
						<textarea name = "supportive"></textarea>
					</div>
				</fieldset>
			</div>
		</div>

		<!-- References -->
		<legend>References</legend>
		<div class="pure-g">	
			<div class="pure-u-1-2">
				<fieldset class="pure-group">
					<legend>Person 1</legend>
					<input type="text" name = "reference1-name" placeholder = "Name"/>
					<input type="text" name = "reference1-relationship" placeholder = "Relationship"/>
					<input type="text" name = "reference1-phone" placeholder="Phone Number" />
					<input type="text" name = "reference1-email" placeholder="Email Address" />					
				</fieldset>
			</div>
			<div class="pure-u-1-2">
				<fieldset class="pure-group">
					<legend>Person 2</legend>
					<input type="text" name = "reference2-name" placeholder = "Name"/>
					<input type="text" name = "reference2-relationship" placeholder = "Relationship"/>
					<input type="text" name = "reference2-phone" placeholder="Phone Number" />
					<input type="text" name = "reference2-email" placeholder="Email Address" />					
				</fieldset>
			</div>			
		</div>

		<!-- Legal -->
		<div>
			<div class="pure-g">
				<div class="pure-u-1-1">
					<legend>
						Agreement / Waiver and Release of Liability
					</legend>
				</div>
			</div>
			<div class="pure-g">
				<div class="pure-u-1-1">
					<p>
						A. As a condition of being permitted to travel with Reiser Relief on, and participate in, a mission trip to Haiti, the undersigned hereby:
					</p>
						<ul>
							<li>
								Agrees to assume all normal and foreseeable risks associated with travel to, from and within the Country (including but not limited to natural disasters, terrorism, political unrest, and contraction of illness) and releases Reiser Relief from any responsibility of such risks;
							</li>
							<li>
								Acknowledges that the carriers, hotels and other suppliers (the “suppliers”) providing services in connection with the missions trip are independent contractors and are not agents, employees or representatives of, or joint ventures with, Reiser Relief or its affiliates and releases Reiser Relief from any responsibility for the actions or omissions of such suppliers;
							</li>
							<li>
								Agrees that Reiser Relief shall have no liability for any personal injury, property damage or other loss, accident, delay, inconvenience, or irregularity which may be caused by (a) any wrongful, negligent or unauthorized acts or omissions on the part of any of the suppliers or their agents, (b) any defect in or failure of any vehicle, equipment or instrument owned, operated or otherwise used by any supplier, or (c) any wrongful or negligent acts or omissions on the part of any other party not under the control of Reiser Relief;
							</li>
							<li>
								Releases Reiser Relief, its officers, directors, employees, agents or representatives from any claims whatsoever relating to the mission trip to Haiti;
							</li>
							<li>
								Agrees not to sue or otherwise hold Reiser Relief responsible for any injury, damage, or loss resulting to the undersigned or the undersigned’s property in connection with the undersigned’s participation in the missions trip to the Country;
							</li>
							<li>
								Accepts full responsibility for luggage and other belongings brought on the missions trip by the undersigned;
							</li>
							<li>
								Agrees to submit any dispute, claim or cause of action arising out of the undersigned’s participation in the mission trip to Haiti solely to a Christian arbitration panel, agreeing that lawsuits among and between Christians is prohibited by Scriptures; and
							</li>
							<li>
								Agrees to be responsible for any injuries, damages or losses caused by the undersigned while the undersigned is traveling with representatives of Reiser Relief or while the undersigned is in the Country.
							</li>
						</ul>
					<p>
						B.	The undersigned acknowledges that Reiser Relief has recommended that the undersigned purchase trip, health, accident and baggage insurance in connection with the missions trip, and that the undersigned obtain a physical examination and proper inoculations prior to going on the mission trip.
					</p>
					<p>
						C.	The undersigned acknowledges that he/she has been informed that United States citizens traveling outside of the United States are required to carry documentation of United States citizenship, which may include a valid passport or notarized copy of the citizen’s birth certificate with a raised seal, and a valid picture I.D. (such as a driver’s license).
					</p>
					<p>
						If you have any questions or cannot comply with any of the Expectations or Release, please explain or contact us.  We are excited at the possibility of having you with us!
					</p>
					<p>
						I, <input type="text" name = "legal-signature-first" placeholder = "Full legal name" id = "legal-name" />, plan to participate in a short-term mission trip to Haiti and the planned activities and understand the actual itinerary and the actual activities that I participate in during the short-term mission trip may vary. I recognize the participation in the short-term mission trip and its activities may be hazardous and dangerous, and I willingly assume all risks associated with the short-term mission trip.

						I acknowledge that I have been advised to seek my medical professional to understand the potential for contracting disease or parasites or suffering other adverse health consequences during my participation the short-term mission trip.  I understand that such diseases, parasites or health conditions may cause or result in serious health problems and may be fatal. I also realize that I will be serving in a country less developed than the United States, one that may report cases of diseases more frequently than in the United States such as malaria, yellow fever, typhoid, Hepatitis A, Hepatitis B and/or other diseases or illnesses.

						I am aware that Reiser Relief, strongly advises me to obtain Tetanus Vaccinations and any other vaccinations, inoculations, or immunizations recommended by the Center for Disease Control or federal or Minnesota state health authorities. After careful consideration of these risks, I have either received all recommended vaccinations, inoculations, or immunizations from medical professionals or I have declined to receive them due to my religious beliefs, personal convictions, or medical contradictions. I agree that my decision to decline receipt of any or all of the recommended precautionary measures increases my risk of contracting disease.

						Therefore, in consideration of the privilege to participate extended to me by Reiser Relief, and on behalf of myself, executors, administrators, successors and assigns, I do hereby waive, release and forever discharge Reiser Relief,  employees, directors, officers, agents, representatives, and volunteers, from any and all actions, omissions, causes, claims and/or damages arising from , relating to, or resulting from my participation in the mission trip, including but not limited to, injury, expense, cost, damage, loss, illness, or death. I acknowledge that I have received good and valuable consideration for signing this waiver and release. I expressly agree that this release and waiver is intended to be as broad and inclusive as permitted by the laws of the state of Minnesota and that I intend this waiver to be binding on my family, estate, heirs, successors, assigns, insurers, medical providers and personal representatives. If any of this waiver and release is held invalid, it is agreed that the balance shall continue in legal force and effect.
					</p>
				</div>													
			</div>

			<div class="pure-g">
				<div class="pure-u-1-2" id = "waiver-checkbox-left">
					<input type = "checkbox" name = "waiver-acceptance" />
				</div>
				<div class="pure-u-1-2" id = "waiver-checkbox-right">
					<p>
						I have read, understood, and executed this waiver and release on 
						<?php 
							echo(date('l\, F jS\, Y'));
						?>.
					</p>
				</div>			
			</div>		

			<div class = "pure-g">
				<div class="pure-u-1-1" id = "submit-container">
					<input type = "submit" value = "Submit Application" disabled="true" />
				</div>
			</div>	
		</div>			

	</form>

	
</div>

<script type="text/javascript">
	<?php
		echo('var tripData = \'' . $_GET['trip'] . '\';');
	 ?>
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="app.submit.js"></script>

</body>	
</html>
