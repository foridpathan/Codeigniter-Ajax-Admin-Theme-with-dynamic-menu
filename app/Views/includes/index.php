<?php 
    include_once 'header.php'
?>

<div id="main">
        <div id="ribbon" class="hidden-print">
            <a href="#dashboard" class="btn-ribbon" data-container="#main" data-toggle="tooltip" data-title="Show dashboard"><i class="fa fa-home"></i></a>
            <span class="vertical-devider">&nbsp;</span>
            <button class="btn-ribbon" data-container="#main" data-action="reload" data-toggle="tooltip" data-title="Reload content by ajax"><i class="fa fa-refresh"></i></button>
            <ol class="breadcrumb">
            </ol>
        </div>
        <div id="content">

        </div>
    </div>

<?php 
    include_once 'footer.php'
?>