<div class="container">
	<?php
	$lang = $this->config->item('question_lang');
	?>
	<h3><?php
		echo $title; ?></h3>
	<div class="row">
		<form method="post" id="qf" action="<?php
		echo site_url('qbank/new_question_4/' . $nop . '/' . $para); ?>">
			<div class="col-md-8">
				<br>
				<div class="login-panel panel panel-default">
					<div class="panel-body">
						<?php
						if ($this->session->flashdata('message')) {
							echo $this->session->flashdata('message');
						}
						?>
						<div class="form-group">
							<h4 style="font-weight:700;margin-left:0px;"><?php echo $this->lang->line('short_answer'); ?></h4>
						</div>
						<div class="form-group">
							<label><b><?php echo $this->lang->line('select_category'); ?></b></label>
							<select class="form-control" name="cid">
								<?php
								foreach ($category_list as $key => $val) {
									?>
									<option value="<?php
									echo $val['cid']; ?>"><?php
										echo $val['category_name']; ?></option>
									<?php
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<label><b><?php echo $this->lang->line('select_level'); ?></b></label>
							<select class="form-control" name="lid">
								<?php
								foreach ($level_list as $key => $val) {
									?>
									<option value="<?php
									echo $val['lid']; ?>"><?php
										echo $val['level_name']; ?></option>
									<?php
								}
								?>
							</select>
						</div>
						<?php
						if ($para == 1) {
							?>
							<div class="form-group">
								<label for="inputEmail"><b><?php echo $this->lang->line('paragraph'); ?></b></label>
								<textarea name="paragraph" class="form-control"><?php
									if (isset($qp)) {
										echo $qp['paragraph'];
									} ?></textarea>
							</div>
							<?php
						}
						?>
						<div class="form-group">
							<label for="inputEmail"><b><?php echo $this->lang->line('question'); ?></b></label>
							<textarea name="question" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label for="inputEmail"><b><?php echo $this->lang->line('description'); ?></b></label>
							<textarea name="description" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label for="inputEmail"><b><?php echo $this->lang->line('answer_in_one_or_two_word'); ?></b></label> <br>
							<input type="text" name="option[]" class="form-control" value="">
						</div>
						<input type="hidden" name="parag" id="parag" value="0">
						<button class="btn btn-default" type="submit" style="margin-top:30px;margin-bottom:30px;"><?php
							echo $this->lang->line('submit'); ?></button>
						<?php
						if ($para == 1) {
							?>
							<button class="btn btn-default" type="button" onClick="javascript:parag();"><?php
								echo $this->lang->line('submit&add'); ?></button>
						<?php
						} ?>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<script>
	function parags() {
		$('#parag').val('1');
		$('#qf').submit();
	}
</script>
