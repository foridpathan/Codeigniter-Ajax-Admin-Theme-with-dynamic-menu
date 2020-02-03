<!--Setting box-->
<div class="setting-box hidden-print">
        <div class="btn-toggle">
            <span class="glyphicon glyphicon-cog"></span>
        </div>
        <form action class="lobi-form">
            <fieldset>
                <header>LobiAdmin Settings</header>
                <div class="form-group">
                    <label class="checkbox-inline lobicheck lobicheck-rounded">
                            Header fixed
                            <input type="checkbox" class="fix-header" value="1"> 
                            <i></i> 
                        </label>
                </div>
                <div class="form-group">
                    <label class="checkbox-inline lobicheck lobicheck-rounded">
                            Menu fixed
                            <input type="checkbox" class="fix-menu"> 
                            <i></i> 
                        </label>
                </div>
                <div class="form-group">
                    <label class="checkbox-inline lobicheck lobicheck-rounded">
                            Ribbon fixed
                            <input type="checkbox" class="fix-ribbon"> 
                            <i></i> 
                        </label>
                </div>
                <div class="row row-skin-options">
                    <h4>Skins</h4>
                    <div class="col-xs-3">
                        <label class="radio">
                                <input type="radio" name="header-skin" value="0" checked>
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                    </div>
                    <div class="col-xs-3">
                        <label class="radio">
                                <input type="radio" name="header-skin" value="header-cyan">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                    </div>
                    <div class="col-xs-3">
                        <label class="radio">
                                <input type="radio" name="header-skin" value="header-green">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                    </div>
                    <div class="col-xs-3">
                        <label class="radio">
                                <input type="radio" name="header-skin" value="header-brown">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                    </div>
                </div>
                                  <div class="row row-skin-options">
                        <h4>Skins</h4>
                        <div class="btn-group display-block" data-toggle="buttons">
                            <label class="radio-inline">
                                <input type="radio" name="header-skin" value="0">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="header-skin" value="header-cyan">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="header-skin" value="header-green">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="header-skin" value="header-brown">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                        </div>
                    </div>
                <div class="row row-bg-options">
                    <h4>Background</h4>
                    <div class="col-xs-3">
                        <label class="radio" style="background-color: #f2f2f2">
                                <input type="radio" name="body-bg" data-is-color="true" value="#f2f2f2" checked>
                                <i class="fa fa-check-square"></i>
                            </label>
                    </div>
                    <div class="col-xs-3">
                        <label class="radio" style="background-color: #edf1f4">
                                <input type="radio" name="body-bg" data-is-color="true" value="#edf1f4">
                                <i class="fa fa-check-square"></i>
                            </label>
                    </div>
                    <div class="col-xs-3">
                        <label class="radio" style="background-image: url('img/bg/bg1.png')">
                                <input type="radio" name="body-bg" value="img/bg/bg1.png">
                                <i class="fa fa-check-square"></i>
                            </label>
                    </div>
                    <div class="col-xs-3">
                        <label class="radio" style="background-image: url('img/bg/bg4.png')">
                                <input type="radio" name="body-bg" value="img/bg/bg4.png">
                                <i class="fa fa-check-square"></i>
                            </label>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-pretty" data-action="clear-storage"><i class="fa fa-refresh"></i> Clear local storage</button>
            </fieldset>
        </form>
    </div>

    <!--Loading indicator for ajax page loading-->
    <div class="spinner spinner-horizontal hide">
        <span class="spinner-text">Loading...</span>
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>

    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/lib/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/lobi-plugins/lobibox.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/lobi-plugins/lobipanel.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!--Make sure that config.js file is loaded before LobiAdmin.js-->
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/config.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/LobiAdmin.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/app.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/autologout.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/demo.js"></script>
</body>

</html>