<?php 
namespace sts;
use sts as core;

if (!defined(__NAMESPACE__ . '\ROOT')) exit;

?>
		<div class="clearfix"></div>
		<hr>
		<div class="modal fade" id="custom_modal_anchor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
        <footer class="no_print">
			<div class="pull-left">
				<p class="text-muted">
					<small>
						<?php echo safe_output($language->get('تمامی حقوق برای شرکت یکتا دیتا محفوظ است')); ?> <span class="glyphicon glyphicon-copyright-mark"></span> <a href="http://yektadata.ir/"> شرکت یکتا دیتا</a> <?php echo date('Y'); ?>
					</small>
				</p>
			</div>
			<div class="pull-right">
				<p class="text-muted">
					<small>
						<?php echo safe_output(stop_timer()); ?>
					</small>
				</p>
			</div>
			<div class="clearfix"></div>
		</footer> 
	</div><!--/.container-->
		

	<script type="text/javascript"> 
		$('.dropdown-toggle').dropdown();
	</script>
	
</body>
</html>
