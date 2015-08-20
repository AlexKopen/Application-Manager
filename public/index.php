<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Reiser Relief Application</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div class="container">

		<div class="row" id="header">
			<div class="col-xs-6">
				<img src="logo.png" alt="Reiser Relief" />
			</div>
			<div class="col-xs-6">
				<h3 class="no-touch">Haiti Mission Trip Application</h3>
			</div>			
		</div>

		<div class="row">
			<div class="col-xs-12">
				<p id = "payment">
					Thank you for your interest in missions with Reiser Relief, Inc.  Submit completed application to your Team Leader with a non-refundable $125 deposit.  Final payment of $725 due 30 days prior to departure.  Total for room and board is $850.
				</p>
			</div>
		</div>

		<form id="applicant-form">
			<!-- Personal Profile -->
			<div class="section-block">
				<div class="row">
					<div class="col-xs-12">
						<h3>
							Personal Profile
						</h3>
					</div>
				</div>
				<div class="row item">
					<div class="col-xs-12">
						<p>
							Name <span class = "gray">(as it appears on your passport)</span>
						</p>
					</div>
				</div>
				<div class="row item indent">
					<div class="col-xs-4">
						<input type="text" name = "first-name" /><br>
						<p>First</p>
					</div>
					<div class="col-xs-4">
						<input type="text" name = "middle-name" /><br>
						<p>Middle</p>
					</div>
					<div class="col-xs-4">
						<input type="text" name = "last-name" /><br>
						<p>Last</p>
					</div>										
				</div>
				<div class="row item">
					<div class="col-xs-12">
						<p>
							Address
						</p>
					</div>
				</div>
				<div class="row item indent">
					<div class="col-xs-12">
						<input type="text" name = "address" /><br>
						<p>Street Address</p>
					</div>									
				</div>
				<div class="row item indent">
					<div class="col-xs-12">
						<input type="text" name = "address-two" /><br>
						<p>Address Line 2</p>
					</div>									
				</div>
				<div class="row item indent">
					<div class="col-xs-4">
						<input type="text" name = "city" /><br>
						<p>City</p>
					</div>
					<div class="col-xs-4">
						<input type="text" name = "state" /><br>
						<p>State / Province / Region</p>
					</div>
					<div class="col-xs-4">
						<input type="text" name = "zip" /><br>
						<p>Zip / Postal Code</p>
					</div>													
				</div>
				<div class="row item">
					<div class="col-xs-12">
						<p>
							Phone
						</p>
					</div>
				</div>
				<div class="row item indent">
					<div class="col-xs-3">
						<input type="text" name = "home-phone-1" class = "phone" /> -
						<input type="text" name = "home-phone-2" class = "phone" /> -
						<input type="text" name = "home-phone-3" class = "phone" /><br>
						<p>Home</p>
					</div>
					<div class="col-xs-3">
						<input type="text" name = "cell-phone-1" class = "phone" /> -
						<input type="text" name = "cell-phone-2" class = "phone" /> -
						<input type="text" name = "cell-phone-3" class = "phone" /><br>
						<p>Cell</p>
					</div>												
				</div>
				<div class="row item">
					<div class="col-xs-12">
						<p>
							Email
						</p>
					</div>
				</div>
				<div class="row item indent">
					<div class="col-xs-6">
						<input type="text" name = "email" /><br>
					</div>													
				</div>
				<div class="row item">
					<div class="col-xs-3">
						<p>
							Age
						</p>
					</div>
					<div class="col-xs-3">
						<p>
							Birthdate
						</p>
					</div>
					<div class="col-xs-3">
						<p>
							Nationality
						</p>
					</div>
					<div class="col-xs-3">
						<p>
							Birthplace
						</p>
					</div>
				<div class="row item indent">
					<div class="col-xs-3">
						<input type="text" name = "age" /><br>
					</div>	
					<div class="col-xs-3">
						<input type="text" name = "birthdate" placeholder = "MM/DD/YYYY" /><br>
					</div>
					<div class="col-xs-3">
						<input type="text" name = "nationality" /><br>
					</div>
					<div class="col-xs-3">
						<input type="text" name = "birthplace" /><br>
					</div>															
				</div>											
				<div class="row item">
					<div class="col-xs-12">
						<p>
							Passport
						</p>
					</div>
				</div>
				<div class="row item indent">
					<div class="col-xs-4">
						<input type="text" name = "passport-number" /><br>
						<p>Passport Number</p>
					</div>	
					<div class="col-xs-4">
						<input type="text" name = "passport-issue-date" /><br>
						<p>Issue Date</p>
					</div>
					<div class="col-xs-4">
						<input type="text" name = "passport-expiration-date" /><br>
						<p>Expiration Date</p>
					</div>															
				</div>
				<div class="row item">
					<div class="col-xs-12">
						<p>
							Marital Status
						</p>
					</div>
				</div>
				<div class="row item indent">
					<div class="col-xs-4">
						<select name="marital">
						  <option value="Single">Single</option>
						  <option value="Engaged">Engaged</option>
						  <option value="Married">Married</option>
						  <option value="Separated">Separated</option>
						  <option value="Divoriced">Divoriced</option>
						</select>
					</div>													
				</div>
				<div class="row item">
					<div class="col-xs-12">
						<p>
							What gifts or strengths do you have that would add to the mission experience?
						</p>
					</div>
				</div>
				<div class="row item indent">
					<div class="col-xs-12">
						<textarea name="gifts"></textarea>
					</div>													
				</div>
				<div class="row item">
					<div class="col-xs-12">
						<p>
							Please list three expectations for your mission experience:
						</p>
					</div>
				</div>
				<div class="row item indent">
					<div class="col-xs-12">
						<textarea name="expectations"></textarea>
					</div>													
				</div>
				<div class="row item">
					<div class="col-xs-12">
						<p>
							Do you have any concerns or fears about this experience?  Please explain.
						</p>
					</div>
				</div>
				<div class="row item indent">
					<div class="col-xs-12">
						<textarea name="concerns"></textarea>
					</div>													
				</div>	
				<div class="row item">
					<div class="col-xs-12">
						<p>
							Do you have any health issues that the team should know?
						</p>
					</div>
				</div>
				<div class="row item indent">
					<div class="col-xs-12">
						<textarea name="health-issues"></textarea>
					</div>													
				</div>	
				<div class="row item">
					<div class="col-xs-12">
						<p>
							Is your family supportive of you seeking a mission experience?  Explain:
						</p>
					</div>
				</div>
				<div class="row item indent">
					<div class="col-xs-12">
						<textarea name="supportive"></textarea>
					</div>													
				</div>
			</div>

			</div> <!-- fuck this div -->

			<!-- References -->
			<div class = "section-block">
				<div class="row">
					<div class="col-xs-12">
						<h3>
							References
						</h3>
					</div>
				</div>
				<div class="row item">
					<div class="col-xs-12">
						<p>
							Please provide the contact information of two people who know about your values and character.
						</p>
					</div>
				</div>
				<div class="row item">
					<div class="col-xs-12">
						<p>
							Person 1
						</p>
					</div>
				</div>		
				<div class="row item indent">
					<div class="col-xs-4">
						<input type="text" name = "reference1-name" /><br>
						<p>Name</p>
					</div>	
					<div class="col-xs-4">
						<input type="text" name = "reference1-relationship" /><br>
						<p>Relationship</p>
					</div>
					<div class="col-xs-4">
						<input type="text" name = "reference1-phone" /><br>
						<p>Phone</p>
					</div>													
				</div>
				<div class="row item indent">
					<div class="col-xs-6">
						<input type="text" name = "reference1-email" /><br>
						<p>Email</p>
					</div>													
				</div>
				<div class="row item">
					<div class="col-xs-12">
						<p>
							Person 2
						</p>
					</div>
				</div>		
				<div class="row item indent">
					<div class="col-xs-4">
						<input type="text" name = "reference1-name" /><br>
						<p>Name</p>
					</div>	
					<div class="col-xs-4">
						<input type="text" name = "reference1-relationship" /><br>
						<p>Relationship</p>
					</div>
					<div class="col-xs-4">
						<input type="text" name = "reference1-phone" /><br>
						<p>Phone</p>
					</div>													
				</div>
				<div class="row item indent">
					<div class="col-xs-6">
						<input type="text" name = "reference1-email" /><br>
						<p>Email</p>
					</div>													
				</div>
			</div>

			<div class = "section-block">
				<div class="row">
					<div class="col-xs-12">
						<h3>
							Expectations
						</h3>
					</div>
				</div>
				<div class="row item indent">
					<div class="col-xs-12">
						<p>
							You are willing to be uncomfortable.  You seek meaning and significance for your life.  You want to serve others and are open to God using this trip to shape you.  You agree that this trip is not about you or your purpose but God’s purpose for your life.  You are willing to hold babies, play with children, visit with elderly, go deep into the poorest reaches of Haiti and put others first.  You will be hot and dirty at the end of each day.  You understand that what you see and what you experience can change your life.  You agree to respect your team members and extend the Grace God has extended us when there are differences between us.
						</p>
					</div>													
				</div>
			</div>

			<!-- Legal -->
			<div class = "section-block">
				<div class="row">
					<div class="col-xs-12">
						<h3>
							Agreement / Waiver and Release of Liability
						</h3>
					</div>
				</div>
				<div class="row item indent">
					<div class="col-xs-12">
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
							<br>B.	The undersigned acknowledges that Reiser Relief has recommended that the undersigned purchase trip, health, accident and baggage insurance in connection with the missions trip, and that the undersigned obtain a physical examination and proper inoculations prior to going on the mission trip.
						</p>
						<p>
							<br>C.	The undersigned acknowledges that he/she has been informed that United States citizens traveling outside of the United States are required to carry documentation of United States citizenship, which may include a valid passport or notarized copy of the citizen’s birth certificate with a raised seal, and a valid picture I.D. (such as a driver’s license).
						</p>
						<p>
							<br>If you have any questions or cannot comply with any of the Expectations or Release, please explain or contact us.  We are excited at the possibility of having you with us!
						</p>
						<p>
							<br>I, <input type="text" name = "legal-signature-first" placeholder = "Full legal name" id = "first-legal" /> plan to participate in a short-term mission trip to Haiti and the planned activities and understand the actual itinerary and the actual activities that I participate in during the short-term mission trip may vary. I recognize the participation in the short-term mission trip and its activities may be hazardous and dangerous, and I willingly assume all risks associated with the short-term mission trip.<br><br>

							I acknowledge that I have been advised to seek my medical professional to understand the potential for contracting disease or parasites or suffering other adverse health consequences during my participation the short-term mission trip.  I understand that such diseases, parasites or health conditions may cause or result in serious health problems and may be fatal. I also realize that I will be serving in a country less developed than the United States, one that may report cases of diseases more frequently than in the United States such as malaria, yellow fever, typhoid, Hepatitis A, Hepatitis B and/or other diseases or illnesses.<br><br>

							I am aware that Reiser Relief, strongly advises me to obtain Tetanus Vaccinations and any other vaccinations, inoculations, or immunizations recommended by the Center for Disease Control or federal or Minnesota state health authorities. After careful consideration of these risks, I have either received all recommended vaccinations, inoculations, or immunizations from medical professionals or I have declined to receive them due to my religious beliefs, personal convictions, or medical contradictions. I agree that my decision to decline receipt of any or all of the recommended precautionary measures increases my risk of contracting disease.<br><br>

							Therefore, in consideration of the privilege to participate extended to me by Reiser Relief, and on behalf of myself, executors, administrators, successors and assigns, I do hereby waive, release and forever discharge Reiser Relief,  employees, directors, officers, agents, representatives, and volunteers, from any and all actions, omissions, causes, claims and/or damages arising from , relating to, or resulting from my participation in the mission trip, including but not limited to, injury, expense, cost, damage, loss, illness, or death. I acknowledge that I have received good and valuable consideration for signing this waiver and release. I expressly agree that this release and waiver is intended to be as broad and inclusive as permitted by the laws of the state of Minnesota and that I intend this waiver to be binding on my family, estate, heirs, successors, assigns, insurers, medical providers and personal representatives. If any of this waiver and release is held invalid, it is agreed that the balance shall continue in legal force and effect.<br><br>						

						</p>

						<input type="submit" value="Submit Application">

					</div>													
				</div>	
			</div>			

		</form>
	</div>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="app.submit.js"></script>

</body>	
</html>
