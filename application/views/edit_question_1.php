<div class="container">
	<?php
	$lang = $this->config->item('question_lang');
	?>
	<h3><?php
		echo $title; ?></h3>
	<div class="row">
		<form method="post" action="<?php
		echo site_url('qbank/edit_question_1/' . $question['qid']); ?>">
			<div class="col-md-12">
				<br>
				<div class="login-panel panel panel-default">
					<div class="panel-body">
						<?php
						if ($this->session->flashdata('message')) {
							echo $this->session->flashdata('message');
						}
						?>
						<div class="form-group">
							<h4 style="font-weight:700;margin-left:0px;"><?php echo $this->lang->line('multiple_choice_single_answer'); ?></h4>
						</div>
						<div class="form-group">
							<label><b><?php echo $this->lang->line('select_category'); ?></b></label>
							<select class="form-control" name="cid" style="margin-left:20px;">
								<?php
								foreach ($category_list as $key => $val) {
									?>
									<option value="<?php
									echo $val['cid']; ?>" <?php
									if ($question['cid'] == $val['cid']) {
										echo 'selected';
									} ?> ><?php
										echo $val['category_name']; ?></option>
									<?php
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<label><b><?php echo $this->lang->line('select_level'); ?></b></label>
							<select class="form-control" name="lid" style="margin-left:20px;">
								<?php
								foreach ($level_list as $key => $val) {
									?>
									<option value="<?php
									echo $val['lid']; ?>" <?php
									if ($question['lid'] == $val['lid']) {
										echo 'selected';
									} ?> ><?php
										echo $val['level_name']; ?></option>
									<?php
								}
								?>
							</select>
						</div>
						<?php
						if (strip_tags($question['paragraph']) != "") {
							foreach ($lang as $lkey => $val) {
								$lno = $lkey;
								if ($lkey == 0) {
									$lno = "";
								}
								?>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="inputEmail"><?php
											echo $this->lang->line('paragraph') . ' : ' . $val; ?></label>
										<textarea name="paragraph<?php
										echo $lno; ?>" class="form-control"><?php
											echo $question['paragraph' . $lno]; ?></textarea>
									</div>
								</div>
								<?php
							}
						}
						?>

						<?php
						foreach ($lang as $lkey => $val) {
							$lno = $lkey;
							if ($lkey == 0) {
								$lno = "";
							}
							?>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="inputEmail"><?php
										echo $this->lang->line('question'); ?></label>
									<textarea name="question<?php
									echo $lno; ?>" class="form-control"><?php
										echo $question['question' . $lno]; ?></textarea>
								</div>
							</div>
							<?php
						}
						foreach ($lang as $lkey => $val) {
							$lno = $lkey;
							if ($lkey == 0) {
								$lno = "";
							}
							?>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="inputEmail"><?php
										echo $this->lang->line('description'); ?></label>
									<textarea name="description<?php
									echo $lno; ?>" class="form-control"><?php
										echo $question['description' . $lno]; ?></textarea>
								</div>
							</div>
							<?php
						}
						?>
						<?php
						foreach ($options as $key => $val) {
							?>
							<div class="row">
								<?php
								foreach ($lang as $lkey => $la) {
									$lno = $lkey;
									if ($lkey == 0) {
										$lno = "";
									}
									?>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="inputEmail"><?php
												echo $this->lang->line('options'); ?> <?php
												echo($key + 1); ?>)</label> <br>
											<?php
											if ($lkey == 0) {
												?><input type="radio" name="score" value="<?php
												echo $key; ?>" <?php
												if ($val['score'] == 1) {
													echo 'checked';
												} ?> > <?echo $this->lang->line('correct'); ?>
											<?php
											} ?><br> <textarea name="option<?php
											echo $lno; ?>[]" class="form-control"><?php
												echo $val['q_option' . $lno]; ?></textarea>
										</div>
									</div>
									<?php
								}
								?></div>
							<?php
						}
						?>
						<button class="btn btn-default" type="submit" style="margin-bottom:40px;"><?php
							echo $this->lang->line('submit'); ?></button>
					</div>
				</div>
			</div>
		</form>
		<div class="col-md-3">
			<div class="form-group">
				<table class="table table-bordered">
					<tr>
						<td><?php
							echo $this->lang->line('no_times_corrected'); ?></td>
						<td><?php
							echo $question['no_time_corrected']; ?></td>
					</tr>
					<tr>
						<td><?php
							echo $this->lang->line('no_times_incorrected'); ?></td>
						<td><?php
							echo $question['no_time_incorrected']; ?></td>
					</tr>
					<tr>
						<td><?php
							echo $this->lang->line('no_times_unattempted'); ?></td>
						<td><?php
							echo $question['no_time_unattempted']; ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>