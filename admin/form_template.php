<div class="container" id = "app">

	<!--Details-->
	<div class="pure-g">
		<div class="pure-u-1-1">
			<h1>Haiti Mission Trip Application</h1>
			<table class="pure-table apart">
				<thead>
					<tr>
						<th>Trip Date</th>
						<th>Non-refundable Deposit</th>
						<th>Additional Payment</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo ($tripDateFormatted); ?></td>
						<td>$125.00</td>
						<td>$725.00</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="pure-u-1-1 apart-bottom">
			<h2>Application Details</h2>
			<p>Thank you for your interest in missions with Reiser Relief, Inc.  Once your application is approved, a team leader will be contacting you requesting a non-refundable $125 deposit. A final payment of $725 is due 30 days prior to departure. The total for room and board is $850.</p>
		</div>
		<div class="pure-u-1-1 apart-bottom">
			<h2>Expectations</h2>
			<p>You are willing to be uncomfortable.  You seek meaning and significance for your life.  You want to serve others and are open to God using this trip to shape you.  You agree that this trip is not about you or your purpose but God's purpose for your life.  You are willing to hold babies, play with children, visit with elderly, go deep into the poorest reaches of Haiti and put others first.  You will be hot and dirty at the end of each day.  You understand that what you see and what you experience can change your life.  You agree to respect your team members and extend the Grace God has extended us when there are differences between us.</p>
	</div>

	<!-- Personal Profile -->
	<form class="pure-form pure-form-stacked" id ="applicant-form">
		<div class="pure-g apart-bottom">
			<div class="pure-u-1-1">
				<h2>Personal Information</h2>
			</div>
			<div class="pure-u-1-2">
				<fieldset class="pure-group">
					<legend>Passport Information</legend>
					<input type="text" name="first-name" placeholder="First" />
					<input type="text" name="middle-name" placeholder="Middle"/>
					<input type="text" name="last-name" placeholder="Last" />
					<input type="text" name = "passport-number" placeholder = "Passport Number" />					
					<input type="text" name = "passport-issue-date" placeholder = "Issue Date - MM/DD/YYYY" />					
					<input type="text" name = "passport-expiration-date" placeholder = "Expiration Date - MM/DD/YYYY" />
					<input type="text" name = "age" placeholder = "Age" />	
					<input type="text" name = "birthdate" placeholder = "Birthdate - MM/DD/YYYY" />
					<input type="text" name = "nationality" placeholder = "Nationality" />
					<input type="text" name = "birthplace" placeholder = "Birthplace" />
					<input type="text" name = "alternate-name" placeholder = "Maiden, Alias or Former Name" />
					<select name="marital">
						<option value="Single">Single</option>
						<option value="Engaged">Engaged</option>
						<option value="Married">Married</option>
						<option value="Separated">Separated</option>
						<option value="Divoriced">Divoriced</option>
					</select>
					<select name="gender">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>					
				</fieldset>
			</div>
			<div class="pure-u-1-2">
				<legend>Address</legend>
				<fieldset class="pure-group">
					<input type="text" name = "address" placeholder="Street Address"/>
					<input type="text" name = "address-two" placeholder="Address Line 2"/>
					<input type="text" name = "city" placeholder="City" />
					<input type="text" name = "zip" placeholder="ZIP" />
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
				</fieldset>
				<legend>Contact</legend>
				<fieldset class="pure-group">
					<input type="text" name = "home-phone" placeholder = "Home Phone"/>
					<input type="text" name = "cell-phone" placeholder = "Cell Phone"/>
					<input type="text" name = "email" placeholder="Email" />
				</fieldset>
			</div>
		</div>

		<!--Questions-->
		<div class="pure-g apart-bottom">
			<div class="pure-u-1-1">
				<h2>Questions</h2>
			</div>
			<div class="pure-u-1-1">
				<fieldset class="pure-group">
					<label>What gifts or strengths do you have that would add to the mission experience?</label>
					<textarea placeholder="Please respond in a few paragraphs at most." name = "gifts"></textarea>
					<label>Please list three expectations for your mission experience.</label>
					<textarea placeholder="Please respond in a few paragraphs at most." name = "expectations"></textarea>
					<label>Is your family supportive of you seeking a mission experience? Please explain.</label>
					<textarea placeholder="Please respond in a few paragraphs at most." name = "supportive"></textarea>
					<label>Do you have any concerns or fears about this experience? Please explain.</label>
					<textarea placeholder="Please respond in a few paragraphs at most." name = "concerns"></textarea>
					<label>Do you have any health issues that the team should know about?</label>
					<textarea placeholder="Please respond in a few paragraphs at most." name = "health"></textarea>
				</fieldset>
			</div>
		</div>

		<!-- References -->
		<div class="pure-g apart-bottom">	
			<div class="pure-u-1-1">
				<h2>References</h2>
			</div>
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

		<!-- Criminal History -->
		<div class="pure-g apart-bottom">
			<div class="pure-u-1-1">
				<h2>Criminal History</h2>
			</div>
			<div class="pure-u-1-1">
				<p>
					I authorize the Minnesota (or state of my residence) Bureau of Criminal Apprehension to disclose all criminal history record information to Reiser Relief, Inc for the purpose of  volunteering  with this agency.
				</p>
				<p>
					The expiration of this authorization shall be one year from the date of my signature.
				</p>
				<p id = "italic">
					Please sign below using your mouse or touch screen.
				</p>
			</div>
			<div class="pure-u-1-2">
				<?php echo ($signature); ?>
			</div>
			<div class="pure-u-1-2">
				<p id="criminal-date">
					Signed On: <?php echo ($applyDateFormatted); ?>
				</p>
			</div>			
		</div>	

		<!-- Legal -->
		<div class="pure-g apart-bottom">
			<div class="pure-u-1-1">
				<h2>Agreement / Waiver and Release of Liability</h2>
			</div>
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
						Agrees not to sue or otherwise hold Reiser Relief responsible for any injury, damage, or loss resulting to the undersigned or the undersigned's property in connection with the undersigned's participation in the missions trip to the Country;
					</li>
					<li>
						Accepts full responsibility for luggage and other belongings brought on the missions trip by the undersigned;
					</li>
					<li>
						Agrees to submit any dispute, claim or cause of action arising out of the undersigned's participation in the mission trip to Haiti solely to a Christian arbitration panel, agreeing that lawsuits among and between Christians is prohibited by Scriptures; and
					</li>
					<li>
						Agrees to be responsible for any injuries, damages or losses caused by the undersigned while the undersigned is traveling with representatives of Reiser Relief or while the undersigned is in the Country.
					</li>
				</ul>
				<p>
					B.	The undersigned acknowledges that Reiser Relief has recommended that the undersigned purchase trip, health, accident and baggage insurance in connection with the missions trip, and that the undersigned obtain a physical examination and proper inoculations prior to going on the mission trip.
				</p>
				<p>
					C.	The undersigned acknowledges that he/she has been informed that United States citizens traveling outside of the United States are required to carry documentation of United States citizenship, which may include a valid passport or notarized copy of the citizen's birth certificate with a raised seal, and a valid picture I.D. (such as a driver's license).
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

		<!--Submit Application-->
		<div class="pure-g apart-bottom">
			<div class="pure-u-1-1">
				<fieldset>
					<label for="waiver-acceptance">
			            <input id="waiver-acceptance" name = "waiver-acceptance" type="checkbox" class="pure-checkbox"> I have read, understood, and executed this waiver and release on <?php echo ($applyDateFormatted); ?>.
					</label>
				</fieldset>
			</div>	
		</div>
	</form>	
</div>
