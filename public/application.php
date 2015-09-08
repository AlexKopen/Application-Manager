<?php 
	require ('header.php');
 ?>
<body>

<div class="container" id = "app">

	<!-- Trip Details -->
	<div class="section-block">
		<div class="pure-g">
			<div class="pure-u-1-1">
				<h3>
					Trip Details
				</h3>
			</div>
		</div>
		<div class="pure-g">
			<div class="pure-u-1-1">
				<p>
					<span class = "bold">Trip Date:</span>
					<?php 

						$tripDate = new DateTime($_GET['trip']);
						$tripDateFormatted = $tripDate->format('l\, F jS\, Y');
						echo ($tripDateFormatted);

					?>
				</p>		
				<p>
					<span class = "bold">Additional Information:</span>
					Thank you for your interest in missions with Reiser Relief, Inc.  Once your application is approved, a team leader will be contacting you requesting a non-refundable $125 deposit. A final payment of $725 is due 30 days prior to departure. The total for room and board is $850.


				</p>
			</div>
		</div>		
	</div>

	<form class="pure-form">
		<legend>Personal Information</legend>
		<div class="pure-g">
			<div class="pure-u-1-3">
				<fieldset class="pure-group">
					<legend>Name <span class="gray">(as it appears on your passport.)</span></legend>
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
					<input type="text" name = "city" placeholder="City" class="pure-input-1-3" />
					<input type="text" name = "state" class="pure-input-1-3" placeholder="State" />
					<input type="text" name = "zip" class="pure-input-1-3" placeholder="ZIP" />
				</fieldset>
			</div>
			<div class="pure-u-1-3">
				<legend>Contact</legend>
				<fieldset class="">
					<label>Home Phone</label>
					<input type="text" name = "home-phone-1" class = "pure-input-1-3" /> -
					<input type="text" name = "home-phone-2" class = "pure-input-1-3" /> -
					<input type="text" name = "home-phone-3" class = "pure-input-1-3" />
					<label>Cell Phone</label>
					<input type="text" name = "cell-phone-1" class = "pure-input-1-3" /> -
					<input type="text" name = "cell-phone-2" class = "pure-input-1-3" /> -
					<input type="text" name = "cell-phone-3" class = "pure-input-1-3" />
					<input type="text" name = "email" placeholder="Email" class="pure-input-1-1" />
				</fieldset>
			</div>
		</div>
	</form>

	<form id ="applicant-form">

		<!-- Personal Profile -->
		<div class="section-block">
			<div class="pure-g">
				<div class="pure-u-1-1">
					<h3>
						Personal Profile
					</h3>
				</div>
			</div>
			<div class="pure-g">
				<div class="pure-u-1-1">
					<p>
						Name <span class = "gray">(as it appears on your passport)</span>
					</p>
				</div>
			</div>
			<div class="pure-g indent">
				<div class="pure-u-1-3">
					<input type="text" name="first-name" class="third-input" />
					<p>First</p>
				</div>
				<div class="pure-u-1-3">
					<input type="text" name="middle-name" class="third-input" />
					<p>Middle</p>
				</div>
				<div class="pure-u-1-3">
					<input type="text" name="last-name" class="third-input" />
					<p>Last</p>
				</div>										
			</div>
			<div class="pure-g">
				<div class="pure-u-1-1">
					<p>
						Address
					</p>
				</div>
			</div>
			<div class="pure-g indent">
				<div class="pure-u-1-1">
					<input type="text" name = "address" />
					<p>Street Address</p>
				</div>									
			</div>
			<div class="pure-g indent">
				<div class="pure-u-1-1">
					<input type="text" name = "address-two" />
					<p>Address Line 2</p>
				</div>									
			</div>
			<div class="pure-g indent">
				<div class="pure-u-1-3">
					<input type="text" name = "city" class="third-input" />
					<p>City</p>
				</div>
				<div class="pure-u-1-3">
					<input type="text" name = "state" class="third-input" />
					<p>State / Province / Region</p>
				</div>
				<div class="pure-u-1-3">
					<input type="text" name = "zip" class="third-input" />
					<p>Zip / Postal Code</p>
				</div>													
			</div>
			<div class="pure-g">
				<div class="pure-u-1-1">
					<p>
						Phone
					</p>
				</div>
			</div>
			<div class="pure-g indent">
				<div class="pure-u-1-1">
					<input type="text" name = "home-phone-1" class = "phone" /> -
					<input type="text" name = "city" name = "home-phone-2" class = "phone" /> -
					<input type="text" name = "home-phone-3" class = "phone" />
					<p>Home</p>
				</div>												
			</div>
			<div class="pure-g indent">
				<div class="pure-u-1-1">
					<input type="text" name = "cell-phone-1" class = "phone" /> -
					<input type="text" name = "cell-phone-2" class = "phone" /> -
					<input type="text" name = "cell-phone-3" class = "phone" />
					<p>Cell</p>			
				</div>												
			</div>	
			<div class="pure-g">
				<div class="pure-u-1-1">
					<p>
						Email
					</p>
				</div>
			</div>
			<div class="pure-g indent">
				<div class="pure-u-1-2">
					<input type="text" name = "email" />
				</div>													
			</div>
			<div class="pure-g">
				<div class="pure-u-1-4">
					<p>
						Age
					</p>
				</div>
				<div class="pure-u-1-4">
					<p>
						Birthdate
					</p>
				</div>
				<div class="pure-u-1-4">
					<p>
						Nationality
					</p>
				</div>
				<div class="pure-u-1-4">
					<p>
						Birthplace
					</p>
				</div>
			</div>
			<div class="pure-g indent">
				<div class="pure-u-1-4">
					<input type="text" name = "age" class = "fourth-input" />
				</div>	
				<div class="pure-u-1-4">
					<input type="text" name = "birthdate" placeholder = "MM/DD/YYYY" class = "fourth-input" />
				</div>
				<div class="pure-u-1-4">
					<input type="text" name = "nationality" class = "fourth-input" />
				</div>
				<div class="pure-u-1-4">
					<input type="text" name = "birthplace" class = "fourth-input" />
				</div>															
			</div>											
			<div class="pure-g">
				<div class="pure-u-1-1">
					<p>
						Passport
					</p>
				</div>
			</div>
			<div class="pure-g indent">
				<div class="pure-u-1-3">
					<input type="text" name = "passport-number" class = "third-input" />
					<p>Passport Number</p>
				</div>	
				<div class="pure-u-1-3">
					<input type="text" name = "passport-issue-date" class = "third-input" />
					<p>Issue Date</p>
				</div>
				<div class="pure-u-1-3">
					<input type="text" name = "passport-expiration-date" class = "third-input" />
					<p>Expiration Date</p>
				</div>															
			</div>
			<div class="pure-g">
				<div class="pure-u-1-1">
					<p>
						Marital Status
					</p>
				</div>
			</div>
			<div class="pure-g indent">
				<div class="pure-u-1-3">
					<select name="marital">
					  <option value="Single">Single</option>
					  <option value="Engaged">Engaged</option>
					  <option value="Married">Married</option>
					  <option value="Separated">Separated</option>
					  <option value="Divoriced">Divoriced</option>
					</select>
				</div>													
			</div>
			<div class="pure-g">
				<div class="pure-u-1-1">
					<p>
						What gifts or strengths do you have that would add to the mission experience?
					</p>
				</div>
			</div>
			<div class="pure-g indent">
				<div class="pure-u-1-1">
					<textarea></textarea>
				</div>													
			</div>
			<div class="pure-g">
				<div class="pure-u-1-1">
					<p>
						Please list three expectations for your mission experience:
					</p>
				</div>
			</div>
			<div class="pure-g indent">
				<div class="pure-u-1-1">
					<textarea></textarea>
				</div>													
			</div>
			<div class="pure-g">
				<div class="pure-u-1-1">
					<p>
						Do you have any concerns or fears about this experience?  Please explain.
					</p>
				</div>
			</div>
			<div class="pure-g indent">
				<div class="pure-u-1-1">
					<textarea></textarea>
				</div>													
			</div>	
			<div class="pure-g">
				<div class="pure-u-1-1">
					<p>
						Do you have any health issues that the team should know?
					</p>
				</div>
			</div>
			<div class="pure-g indent">
				<div class="pure-u-1-1">
					<textarea></textarea>
				</div>													
			</div>	
			<div class="pure-g">
				<div class="pure-u-1-1">
					<p>
						Is your family supportive of you seeking a mission experience?  Explain:
					</p>
				</div>
			</div>
			<div class="pure-g indent">
				<div class="pure-u-1-1">
					<textarea></textarea>
				</div>													
			</div>
		</div>

		<!-- References -->
		<div class = "section-block">
			<div class="pure-g">
				<div class="pure-u-1-1">
					<h3>
						References
					</h3>
				</div>
			</div>
			<div class="pure-g">
				<div class="pure-u-1-1">
					<p>
						Please provide the contact information of two people who know about your values and character.
					</p>
				</div>
			</div>
			<div class="pure-g">
				<div class="pure-u-1-1">
					<p>
						Person 1
					</p>
				</div>
			</div>		
			<div class="pure-g indent">
				<div class="pure-u-1-3">
					<input type="text" name = "reference1-name" class = "third-input" />
					<p>Name</p>
				</div>	
				<div class="pure-u-1-3">
					<input type="text" name = "reference1-relationship" class = "third-input" />
					<p>Relationship</p>
				</div>
				<div class="pure-u-1-3">
					<input type="text" name = "reference1-phone" class = "third-input" />
					<p>Phone</p>
				</div>													
			</div>
			<div class="pure-g indent">
				<div class="pure-u-1-2">
					<input type="text" name = "reference1-email" />
					<p>Email</p>
				</div>													
			</div>
			<div class="pure-g">
				<div class="pure-u-1-1">
					<p>
						Person 2
					</p>
				</div>
			</div>		
			<div class="pure-g indent">
				<div class="pure-u-1-3">
					<input type="text" name = "reference1-name" class = "third-input" />
					<p>Name</p>
				</div>	
				<div class="pure-u-1-3">
					<input type="text" name = "reference1-relationship" class = "third-input" />
					<p>Relationship</p>
				</div>
				<div class="pure-u-1-3">
					<input type="text" name = "reference1-phone" class = "third-input" />
					<p>Phone</p>
				</div>													
			</div>
			<div class="pure-g indent">
				<div class="pure-u-1-2">
					<input type="text" name = "reference1-email" />
					<p>Email</p>
				</div>													
			</div>
		</div>

		<!-- Expectations -->
		<div class = "section-block">
			<div class="pure-g">
				<div class="pure-u-1-1">
					<h3>
						Expectations
					</h3>
				</div>
			</div>
			<div class="pure-g indent">
				<div class="pure-u-1-1">
					<p>
						You are willing to be uncomfortable.  You seek meaning and significance for your life.  You want to serve others and are open to God using this trip to shape you.  You agree that this trip is not about you or your purpose but God’s purpose for your life.  You are willing to hold babies, play with children, visit with elderly, go deep into the poorest reaches of Haiti and put others first.  You will be hot and dirty at the end of each day.  You understand that what you see and what you experience can change your life.  You agree to respect your team members and extend the Grace God has extended us when there are differences between us.
					</p>
				</div>													
			</div>
		</div>

		<!-- Legal -->
		<div class = "section-block">
			<div class="pure-g">
				<div class="pure-u-1-1">
					<h3>
						Agreement / Waiver and Release of Liability
					</h3>
				</div>
			</div>
			<div class="pure-g indent">
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
						I, <input type="text" name = "legal-signature-first" placeholder = "Full legal name" id = "legal-name" /> plan to participate in a short-term mission trip to Haiti and the planned activities and understand the actual itinerary and the actual activities that I participate in during the short-term mission trip may vary. I recognize the participation in the short-term mission trip and its activities may be hazardous and dangerous, and I willingly assume all risks associated with the short-term mission trip.

						I acknowledge that I have been advised to seek my medical professional to understand the potential for contracting disease or parasites or suffering other adverse health consequences during my participation the short-term mission trip.  I understand that such diseases, parasites or health conditions may cause or result in serious health problems and may be fatal. I also realize that I will be serving in a country less developed than the United States, one that may report cases of diseases more frequently than in the United States such as malaria, yellow fever, typhoid, Hepatitis A, Hepatitis B and/or other diseases or illnesses.

						I am aware that Reiser Relief, strongly advises me to obtain Tetanus Vaccinations and any other vaccinations, inoculations, or immunizations recommended by the Center for Disease Control or federal or Minnesota state health authorities. After careful consideration of these risks, I have either received all recommended vaccinations, inoculations, or immunizations from medical professionals or I have declined to receive them due to my religious beliefs, personal convictions, or medical contradictions. I agree that my decision to decline receipt of any or all of the recommended precautionary measures increases my risk of contracting disease.

						Therefore, in consideration of the privilege to participate extended to me by Reiser Relief, and on behalf of myself, executors, administrators, successors and assigns, I do hereby waive, release and forever discharge Reiser Relief,  employees, directors, officers, agents, representatives, and volunteers, from any and all actions, omissions, causes, claims and/or damages arising from , relating to, or resulting from my participation in the mission trip, including but not limited to, injury, expense, cost, damage, loss, illness, or death. I acknowledge that I have received good and valuable consideration for signing this waiver and release. I expressly agree that this release and waiver is intended to be as broad and inclusive as permitted by the laws of the state of Minnesota and that I intend this waiver to be binding on my family, estate, heirs, successors, assigns, insurers, medical providers and personal representatives. If any of this waiver and release is held invalid, it is agreed that the balance shall continue in legal force and effect.
					</p>
				</div>													
			</div>

			<div class="pure-g indent">
				<div class="pure-u-1-2" id = "waiver-checkbox-left">
					<input type = "checkbox" name = "waiver-acceptance" />
				</div>
				<div class="pure-u-1-2" id = "waiver-checkbox-right">
					I have read, understood, and executed this waiver and release on 
					<?php 
						echo(date("D M d, Y")); 
					?>.	
				</div>			
			</div>		

			<div class = "pure-g" id = "submit-g-container">
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
