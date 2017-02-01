<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
	<div class="form-group">
		<label>Title</label>
		<input type="test" name="title" class="form-control" placeholder="Add Title">
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea class="form-control" id="editor1" name="body" placeholder="Add Body"></textarea>
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>