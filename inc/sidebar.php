<?php
$query1 = $conn->query("SELECT * FROM users WHERE id = '$id' order by 'id' DESC");
$fetch1 = $query1->fetchAll(PDO::FETCH_OBJ);
$count1 = $query1->rowCount();
if ($count1 > 0) {
foreach ($fetch1 as $value1) {
$name1 = $value1->name;
$mail1 = $value1->mail;
}
}
?>
<div class="sidebar" id="sidebar">
					<div class="container">
						<div class="col-md-12">
							<div class="tab-content">
								<!-- Start of Discussions -->
								<div id="discussions" class="tab-pane fade active show">
									<div class="search">
										<form class="form-inline position-relative">
											<input type="search" class="form-control" id="conversations" placeholder="Search for conversations...">
											<button type="button" class="btn btn-link loop"><i class="material-icons">search</i></button>
										</form>
										<button class="btn create" data-toggle="modal" data-target="#startnewchat"><i class="material-icons">create</i></button>
									</div>
									<div class="list-group sort">
										<button class="btn filterDiscussionsBtn active show" data-toggle="list" data-filter="all">All</button>
									</div>						
									<div class="discussions">
										<h1>Discussions</h1>
										<div class="list-group" id="chats" role="tablist">
											<a href="#list-chat" class="filterDiscussions all unread single active" id="list-chat-list" data-toggle="list" role="tab">
												<img class="avatar-md" src="dist/img/avatars/user.png" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
												<div class="status">
													<i class="material-icons online">fiber_manual_record</i>
												</div>
												<div class="new bg-yellow">
													<span>+</span>
												</div>
												<div class="data">
													<h5>AI Dietitian</h5>
													<span>Last</span>
													<p id="aimessage"> </p>
												</div>
											</a>									
										</div>
									</div>
								</div>
								<!-- End of Discussions -->

								<!-- Start of Settings -->
								<div class="tab-pane fade" id="settings">			
									<div class="settings">
										<div class="profile">
											<img class="avatar-md" src="dist/img/avatars/user.png" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
											<h1><a href="#"><?php echo $name1; ?></a></h1>
											<span><?php echo $mail1; ?></span>
											<div class="stats">
												<div class="item">
													<h3>Fellas</h3>
												</div>
												<div class="item">
													<h3>Chats</h3>
												</div>
												<div class="item">
													<h3>Diet</h3>
												</div>
											</div>
										</div>
										<div class="categories" id="accordionSettings">
											<h1>Settings</h1>
											<!-- Start of My Account -->
											<div class="category">
												<a href="#" class="title collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													<i class="material-icons md-30 online">person_outline</i>
													<div class="data">
														<h5>My Account</h5>
														<p>Update your profile details</p>
													</div>
													<i class="material-icons">keyboard_arrow_right</i>
												</a>
												<div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionSettings">
													<div class="content">
														<div class="upload">
															<div class="data">
																<img class="avatar-md" src="dist/img/avatars/user.png" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
															</div>
														</div>
														<form method="post">
															<div class="parent">
																<div class="field">
																	<label for="firstName">First name <span>*</span></label>
																	<input type="text" class="form-control" id="firstName" placeholder="First name" required value="<?php echo $name1; ?>">
																</div>
															</div>
															<div class="field">
																<label for="email">Email <span>*</span></label>
																<input type="email" class="form-control" id="email" placeholder="Enter your email address" value="<?php echo $mail1; ?>" required>
															</div>
															<div class="field">
																<label for="password">Password</label>
																<input type="password" class="form-control" id="password" placeholder="Enter a new password" value="password" required>
															</div>
														</form>
														<button class="btn btn-link w-100">Delete Account</button>
													</div>
												</div>
											</div>
											<!-- End of My Account -->

											<!-- Start of Logout -->
											<div class="category">
												<a href="sign-in.html" class="title collapsed">
													<i class="material-icons md-30 online">power_settings_new</i>
													<div class="data">
														<h5>Power Off</h5>
														<p>Log out of your account</p>
													</div>
													<i class="material-icons">keyboard_arrow_right</i>
												</a>
											</div>
											<!-- End of Logout -->
										</div>
									</div>
								</div>
								<!-- End of Settings -->
							</div>
						</div>
					</div>
				</div>