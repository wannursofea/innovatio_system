<div id="kt_app_content" class="app-content pt-10">
	<div id="kt_app_content_container" class="app-container container-xxl">
		<div class="row g-5 g-xl-10">
			<div class="col-md-12">
				<button class="btn btn-sm btn-info" onclick="window.print()">
					Download
				</button><br /><br />
			<?php
				// print_r($s);
			?>
			
				<div class="row">
					<div class="col-8">
						<h4><?= $s->name ?></h4>
						
						<p>
							<?= $s->gender ?> | <?= $s->race ?> | <?= $s->city ?> | <?= $s->country ?>
						</p>
						
						<table class="table table-hover table-bordered">
							<tbody>
								<tr>
									<td>Full Name</td>
									<td><?= $s->name ?></td>
								</tr>
								
								<tr>
									<td>Email</td>
									<td><?= $s->email ?></td>
								</tr>
								
								<tr>
									<td>Phone No.:</td>
									<td><?= $s->phoneNum ?></td>
								</tr>
								
								<tr>
									<td>Institution:</td>
									<td><?= $s->education ?></td>
								</tr>

								<tr>
									<td>Course:</td>
									<td><?= $s->course ?></td>
								</tr>

							</tbody>
						</table>
						
						
					</div>
					
					<div class="col-4 text-center">
					<img src="<?php echo URLROOT . "/public/" . $s->image; ?>" class="img img-fluid" style="max-width: 50%; height: 50;" />

					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<h2>Basic Information</h2>
						
						<br />
						
						<h2>Skill</h2>
						<ul>
						<?php						
							foreach($skills as $skill){
							?>
							<li>
								<?= $skill->skillName ?>
							</li>
							<?php
							}
						?>
						</ul>
						
						<br /><br />
						
						<h2>Certification</h2>
						<table class="table table-hover table-bordered dataTable">
							<thead>
								<tr>
									<th>Certification Name</th>
									<th>Validation</th>
								</tr>
							</thead>
							
							<tbody>
							<?php
								foreach($certs as $cert){
								?>
								<tr>
									<td><?= $cert->certName ?></td>
									<td><?= $cert->validity ?></td>
									<td></td>
								</tr>
								<?php
								}
							?>
							</tbody>
						</table>

						<h2>Experiences</h2>
						<table class="table table-hover table-bordered dataTable">
							<thead>
								<tr>
									<th>Job Title</th>
									<th>Company</th>
									<th>From</th>
									<th>To</th>
								</tr>
							</thead>
							
							<tbody>
							<?php
								foreach($exp as $exp){
								?>
								<tr>
									<td><?= $exp->jobtitle ?></td>
									<td><?= $exp->company ?></td>
									<td><?= $exp->from_date ?></td>
									<td><?= $exp->to_date ?></td>
									<td></td>
								</tr>
								<?php
								}
							?>
							</tbody>
						</table>
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>