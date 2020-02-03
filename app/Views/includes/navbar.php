<div class="menu">
        <div class="menu-heading">
            <div class="menu-header-buttons-wrapper clearfix">
                <button type="button" class="btn btn-info btn-menu-header-collapse">
                        <i class="fa fa-cogs"></i>
                    </button>
                <!--Put your favourite pages here-->
                <div class="menu-header-buttons">
                    <a href="#profile" class="btn btn-info btn-outline" data-title="Profile">
                        <i class="fa fa-user"></i>
                    </a>
                    <a href="#invoice" class="btn btn-info btn-outline" data-title="Invoice">
                        <i class="fa fa-file-pdf-o"></i>
                    </a>
                    <a href="#lobimail" class="btn btn-info btn-outline" data-title="Inbox">
                        <i class="fa fa-envelope"></i>
                    </a>
                    <a href="#calendar" class="btn btn-info btn-outline" data-title="Calendar">
                        <i class="fa fa-calendar"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <nav>
            <?php echo $menus; ?>
        </nav>
        <div class="menu-collapse-line">
            <!--Menu collapse/expand icon is put and control from LobiAdmin.js file-->
            <div class="menu-toggle-btn" data-action="collapse-expand-sidebar"></div>
        </div>
    </div>