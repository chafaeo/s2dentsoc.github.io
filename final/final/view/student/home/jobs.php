<br>
<div class="col-lg-12">
	<div class="col-lg-3" style="text-align:right">
		<h2>Find Work</h2>
	</div>
	<div class="col-lg-6">
		<div class="col-md-12">
            <div class="input-group" id="adv-search" style="margin-top:5px;">	
                <input type="text" class="form-control" placeholder="Search for jobs" style="height:40px; font-size: 15px;" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true" style="height:20px;"></span></button>
                    </div>
                </div>
            </div>
            <span style="color:#305ca0; font-size:12px">Advanced Search</span>
        </div>
    </div>
    <div class="col-lg-3"></div>
</div>

<div class="col-lg-12" style="margin-top:20px;">
	<div class="col-lg-3" style="text-align:right">
		<div class="col-lg-6"></div>
		<div class="col-lg-6" style="text-align:left">
			<table>
				<thead>
					<tr>
						<th style="font-size:14px; margin-bottom:5px;">
							<b>My Categories</b>
						</th>
					</tr>
				</thead>
				<tbody style="font-size:12px; color:#305ca0; font-weight:bold">
				
				<?php
					session_start();
					include '../../../include/connect.php';
					$userID = $_SESSION['userID'];

					$q=mysql_query("SELECT c.`category` as category
										FROM `skill_detail` sd, `skill` s, `category` c
										WHERE sd.`skill_id` = s.`skill_id`
										AND s.`category_id` = c.`category_id`
										AND sd.`account_id` = $userID
										GROUP BY s.`category_id`")
										or die(mysql_query());
					
					while($row=mysql_fetch_array($q)){
						
						echo '<tr style="float:left; margin:5px 0px 5px 0px">
								<td>
									<a href="#">'.$row['category'].'</a>
								</td>
							</tr>';

					}
				?>

					<tr align="right" style="float:right; margin:5px 0px 5px 0px">
						<td>
							<button type="button" class="btn btn-primary btn-circle">
							<i class="glyphicon glyphicon-pencil"></i></button>
						</td>
					</tr>	
				</tbody>
				
			</table>
		</div>
	</div>

	<!-- Job Feeds -->
	<div class="col-lg-6">
		<div class="col-md-12 w3-white" id="job-feed">
		<br>
            <div style="color:#494949;">
            	<h4>My Job Feeds<span class="glyphicon glyphicon-signal pull-right"></span></h4>
            </div>
            <hr>
            <table>
            	<tr>
            		<td>
	            		<div id="job-container">
							<a href="javascript:alert('ok')">
								<div class="title">
									<h3><b>OJT for Web Dev Department</b></h3>
								</div>
							</a>
								<div>
									<div id="address"><b>Dumaguete City, Negros Oriental</b></div>
									<div id="description">The On The Job Trainee will be exposed in developing websites. The On The Job Trainee will be exposed in developing websites. The On The Job Trainee will be exposed in developing websites.</div>
									<div id="time">6 minutes ago - <b>Entheos IT</b></div>

									<div id="slots" class="pull-right">Slots Remaining: <b>13</b></div>
									<br>
									
								</div>
						</div>
						<hr>
					</td>
            	</tr>
            	<tr>
            		<td>
	            		<div id="job-container">
							<a href="javascript:alert('ok')">
								<div class="title">
									<h3><b>Internship Business Or It Related</b></h3>
								</div>
							</a>
								<div>
									<div id="address"><b>Valencia, Negros Oriental</b></div>
									<div id="description">We are looking for OJT (On-the-Job Trainee) or Interns (for Internship) to fulfill requirements on your course. Preferrable Business / IT / Marketing Related courses. 200 hours above. Willing to wor...</div>
									<div id="time">2 days ago - <b>Qualfon Dgte</b></div>

									<div id="slots" class="pull-right">Slots Remaining: <b>25</b></div>
									<br>
									
								</div>
						</div>
						<hr>
					</td>
            	</tr>
            </table>
        </div>
    </div>
    <div class="col-lg-3"></div>
</div>