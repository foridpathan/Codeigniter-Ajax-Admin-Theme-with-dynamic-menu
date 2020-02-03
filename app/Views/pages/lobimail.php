<!--Author          : @arboshiki-->
<div class="lobimail fadeInDown animated" data-view-email-url="<?= base_url() ?>mail/message_view">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3 col-menu-search">
            <div class="col-search">
                <form>
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-default">OK</button>
                        </span>
                    </div><!-- /input-group -->
                </form>
            </div>
            <div class="col-menu">
                <a href="<?= base_url() ?>mail/compose" class="btn btn-info btn-block btn-lg btn-compose btn-pretty">Compose</a>
                <ul class="nav nav-stacked nav-menu">
                    <li>
                        <a href="<?= base_url() ?>mail/inbox" data-type="inbox">
                            <i class="fa fa-inbox"></i> 
                            Inbox 
                            <span class="badge bg-info pull-right badge-unread"></span>
                        </a>
                    </li>
                    <li><a href="<?= base_url() ?>mail/sent" data-type="sent"><i class="fa fa-envelope"></i> Sent</a></li>
                    <li><a href="#"><i class="fa fa-file" data-type="draft"></i> Draft</a></li>
                    <li><a href="#"><i class="fa fa-trash-o" data-type="trash"></i> Spam</a></li>
                    <li><a href="#"><i class="fa fa-archive" data-type="archive"></i> Archive</a></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-9 col-content">
            
        </div>
    </div>
    <script type="text/javascript">
        LobiAdmin.loadScript([
            'assets/js/lobi-plugins/lobimail.min.js',
            'assets/js/plugin/summernote/summernote.min.js',
            'assets/js/plugin/select2/select2.min.js'
        ], function(){
            $('.lobimail').lobiMail();
        });
    </script>
</div>