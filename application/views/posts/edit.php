<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
	<input type="hidden" name="id" value="<?php echo $post['id'] ?>">
	<div class="form-group">
		<label>Title</label>
		<input type="test" name="title" class="form-control" placeholder="Add Title" value="<?php echo $post['title']; ?>">
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea class="form-control" id="editor1" name="body" placeholder="Add Body"><?php echo $post['body']; ?>
		</textarea>
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>