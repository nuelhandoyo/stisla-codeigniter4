<!DOCTYPE html>
<html lang="en">
<head>
	<?=$this->include('base/head')?>
</head>
<body>
	<div id="app">
    	<div class="main-wrapper">
    		<?=$this->include('base/barnav')?>
    		<?=$this->include('base/barside')?>
    		<?= $this->renderSection('content')?>
    		<?=$this->include('base/footer')?>
    	</div>
    </div>
	<?=$this->include('base/js')?>
</body>
</html>