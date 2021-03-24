<div class="row">
	<div class="col-xs-12">
	<!-- PAGE CONTENT BEGINS -->
	<?php
		$user 		= hadekelompok('tuser','ID',$this->session->userdata('iduser'),'ID')->row_array();
		$avatarku	= ($user['avatar'] == '')?'avatar2.png':$user['avatar'];
	?>
		<input type="hidden" id="ms1" name="ms1" value="<?php echo $this->uri->segment(1);?>">
		<input type="hidden" id="ms2" name="ms2" value="<?php echo $this->uri->segment(2);?>">
		<div id="user-profile-2" class="user-profile">
										<div class="tabbable">
											<ul class="nav nav-tabs padding-18">
												<li class="active"><a data-toggle="tab" href="#home"><i class="green ace-icon fa fa-user bigger-120"></i> Profile</a></li>

												<li><a data-toggle="tab" href="#aktifitas"><i class="yellow ace-icon fa fa-table bigger-120"></i> Aktifitas</a></li>

												<li><a data-toggle="tab" href="#ubah"><i class="red ace-icon fa fa-edit bigger-120"></i> Ubah Profil</a></li>

												<li><a data-toggle="tab" href="#friends"><i class="blue ace-icon fa fa-users bigger-120"></i> Friends</a></li>
											</ul>

											<div class="tab-content no-border padding-24">
												<div id="home" class="tab-pane in active">
													<div class="row">
														<div class="col-xs-12 col-sm-3 center">
															<span class="profile-picture">
																<img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="<?php echo base_url().'template/backend2/images/avatars/'.$avatarku;?>" width="250px" hight="250px"/>
															</span>
														</div><!-- /.col -->

														<div class="col-xs-12 col-sm-9">
															<h4 class="blue">
																<span class="middle"><?php echo $user['nama'];?></span>

																<span class="label label-purple arrowed-in-right">
																	<i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
																	online
																</span>
															</h4>

															<div class="profile-user-info">
																<div class="profile-info-row">
																	<div class="profile-info-name"> Username </div>

																	<div class="profile-info-value">
																		<span><?php echo $user['username'];?></span>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> Level </div>

																	<div class="profile-info-value">
																		<i class="fa fa-map-marker light-orange bigger-110"></i>
																		<span><?php echo hadepilih('tlevel','kd_level','nm_level',$user['level']);?></span>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> Unit Kerja </div>

																	<div class="profile-info-value">
																		<span><?php echo hadepilih('tunit','kd_unit','nm_unit',$user['kd_unit']);?></span>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> Sub Unit Kerja </div>

																	<div class="profile-info-value">
																		<span><?php echo hadepilih('tunitsub','kd_unit_sub','nm_unit_sub',$user['kd_unit_sub']);?></span>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> Online Terakhir </div>

																	<div class="profile-info-value">
																		<span><?php echo $user['last_login'];?></span>
																	</div>
																</div>
															</div>

															<div class="hr hr-8 dotted"></div>

															<div class="profile-user-info">
																<div class="profile-info-row">
																	<div class="profile-info-name"> Nomor HP </div>

																	<div class="profile-info-value">
																		<a href="#" target="_blank"><?php echo $user['nohp'];?></a>
																	</div>
																</div>
															</div>
														</div><!-- /.col -->
													</div><!-- /.row -->
												</div><!-- /#home -->

												<div id="friends" class="tab-pane">
													<div class="profile-users clearfix">
														<?php 
														$unitk = hadekelompok('tuser','kd_unit',$user['kd_unit'],'username');
														foreach ($unitk->result() as $row) {
															$avat	= ($row->avatar == '')?'avatar2.png':$row->avatar;
															echo '<div class="itemdiv memberdiv">
															<div class="inline pos-rel">
																<div class="user">
																	<a href="#">
																		<img src="'.base_url().'template/backend2/images/avatars/'.$avat.'" alt="Bob Does avatar" />
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-online"></span>
																			'.$row->nama.' ('.$row->level.')
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">Content Editor</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
																			<span class="green"> 20 mins ago </span>
																		</div>

																		<div class="hr dotted hr-8"></div>

																		<div class="tools action-buttons">
																			<a href="#">
																				<i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>';
														}
														?>
													</div>													

													<div class="hr hr10 hr-double"></div>

													<ul class="pager pull-right">
														<li class="previous disabled">
															<a href="#">&larr; Prev</a>
														</li>

														<li class="next">
															<a href="#">Next &rarr;</a>
														</li>
													</ul>
												</div><!-- /#friends -->

												<div id="aktifitas" class="tab-pane">
													<div class="profile-table clearfix">
														<?php 
														$unitk = hadekelompok('tuser','kd_unit',$user['kd_unit'],'username');
														foreach ($unitk->result() as $row) {
															$avat	= ($row->avatar == '')?'avatar2.png':$row->avatar;
															
														}
														?>

														<div>
															<table id="dynamic-table" class="table table-striped table-bordered table-hover">
																<thead>
																	<tr>
																		<th class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</th>
																		<th>Domain</th>
																		<th>Price</th>
																		<th class="hidden-480">Clicks</th>

																		<th>
																			<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
																			Update
																		</th>
																		<th class="hidden-480">Status</th>

																		<th></th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">app.com</a>
																		</td>
																		<td>$45</td>
																		<td class="hidden-480">3,330</td>
																		<td>Feb 12</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-warning">Expiring</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">base.com</a>
																		</td>
																		<td>$35</td>
																		<td class="hidden-480">2,595</td>
																		<td>Feb 18</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-success">Registered</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">max.com</a>
																		</td>
																		<td>$60</td>
																		<td class="hidden-480">4,400</td>
																		<td>Mar 11</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-warning">Expiring</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">best.com</a>
																		</td>
																		<td>$75</td>
																		<td class="hidden-480">6,500</td>
																		<td>Apr 03</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-inverse arrowed-in">Flagged</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">pro.com</a>
																		</td>
																		<td>$55</td>
																		<td class="hidden-480">4,250</td>
																		<td>Jan 21</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-success">Registered</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">team.com</a>
																		</td>
																		<td>$40</td>
																		<td class="hidden-480">3,200</td>
																		<td>Feb 09</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-inverse arrowed-in">Flagged</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">up.com</a>
																		</td>
																		<td>$95</td>
																		<td class="hidden-480">8,520</td>
																		<td>Feb 22</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">view.com</a>
																		</td>
																		<td>$45</td>
																		<td class="hidden-480">4,100</td>
																		<td>Mar 12</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-success">Registered</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">nice.com</a>
																		</td>
																		<td>$38</td>
																		<td class="hidden-480">3,940</td>
																		<td>Feb 12</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">fine.com</a>
																		</td>
																		<td>$25</td>
																		<td class="hidden-480">2,983</td>
																		<td>Apr 01</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-warning">Expiring</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">good.com</a>
																		</td>
																		<td>$50</td>
																		<td class="hidden-480">6,500</td>
																		<td>Feb 02</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-inverse arrowed-in">Flagged</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">great.com</a>
																		</td>
																		<td>$55</td>
																		<td class="hidden-480">6,400</td>
																		<td>Feb 24</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-success">Registered</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">shine.com</a>
																		</td>
																		<td>$25</td>
																		<td class="hidden-480">2,200</td>
																		<td>Apr 01</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-inverse arrowed-in">Flagged</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">rise.com</a>
																		</td>
																		<td>$42</td>
																		<td class="hidden-480">3,900</td>
																		<td>Feb 01</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">above.com</a>
																		</td>
																		<td>$35</td>
																		<td class="hidden-480">3,420</td>
																		<td>Mar 12</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-warning">Expiring</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">share.com</a>
																		</td>
																		<td>$30</td>
																		<td class="hidden-480">3,200</td>
																		<td>Feb 11</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">fair.com</a>
																		</td>
																		<td>$35</td>
																		<td class="hidden-480">3,900</td>
																		<td>Mar 26</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-inverse arrowed-in">Flagged</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">year.com</a>
																		</td>
																		<td>$48</td>
																		<td class="hidden-480">3,990</td>
																		<td>Feb 15</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-warning">Expiring</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">day.com</a>
																		</td>
																		<td>$55</td>
																		<td class="hidden-480">5,600</td>
																		<td>Jan 29</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">light.com</a>
																		</td>
																		<td>$40</td>
																		<td class="hidden-480">3,100</td>
																		<td>Feb 17</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-success">Registered</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">sight.com</a>
																		</td>
																		<td>$58</td>
																		<td class="hidden-480">6,100</td>
																		<td>Feb 19</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-inverse arrowed-in">Flagged</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">right.com</a>
																		</td>
																		<td>$50</td>
																		<td class="hidden-480">4,400</td>
																		<td>Apr 01</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-warning">Expiring</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>

																		<td>
																			<a href="#">once.com</a>
																		</td>
																		<td>$20</td>
																		<td class="hidden-480">1,400</td>
																		<td>Apr 04</td>

																		<td class="hidden-480">
																			<span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
																		</td>

																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-search-plus bigger-130"></i>
																				</a>

																				<a class="green" href="#">
																					<i class="ace-icon fa fa-pencil bigger-130"></i>
																				</a>

																				<a class="red" href="#">
																					<i class="ace-icon fa fa-trash-o bigger-130"></i>
																				</a>
																			</div>

																			<div class="hidden-md hidden-lg">
																				<div class="inline pos-rel">
																					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																						<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																					</button>

																					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																						<li>
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-search-plus bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																								<span class="green">
																									<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																								<span class="red">
																									<i class="ace-icon fa fa-trash-o bigger-120"></i>
																								</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>	
												</div><!-- /#friends -->

												<div id="ubah" class="tab-pane">
													<div class="profile-edit clearfix">
														<div class="col-xs-12 col-sm-12">
															<div class="widget-box">
																<div class="widget-header">
																	<h4 class="widget-title">Perubahan Data</h4>

																	<div class="widget-toolbar">
																		<a href="#" data-action="collapse">
																			<i class="ace-icon fa fa-chevron-up"></i>
																		</a>

																		<a href="#" data-action="close">
																			<i class="ace-icon fa fa-times"></i>
																		</a>
																	</div>
																</div>

																<div class="widget-body">
																	<div class="widget-main">
																		<div>
																			<label for="form-field-8">Nama</label>
																			<input type="text" id="form-field-1-1" placeholder="Text Field" class="form-control" />
																		</div>

																		<br />
																		<div>
																			<label for="form-field-9">Nomor Handphone</label>
																			<input type="text" id="form-field-1-1" placeholder="Text Field" class="form-control" />
																		</div>

																		<br />
																		<div>
																			<label for="form-field-11">Password Lama</label>
																			<input type="password" id="form-field-1-1" placeholder="Text Field" class="form-control" />
																		</div>
																	</div>
																</div>

																<div class="form-actions center">
																	<button type="button" class="btn btn-sm btn-success">
																		Submit
																		<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
																	</button>
																</div>
															</div>
														</div><!-- /.span -->
													</div>	
												</div><!-- /#friends -->
											</div>
										</div>
									</div>
								</div>

	<!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div><!-- /.row -->