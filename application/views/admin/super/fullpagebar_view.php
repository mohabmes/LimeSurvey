<?php

/**
 * Menu Bar show for full pages (without sidemenu, inside configuration menus)
 */

?>

<!-- Full page menu bar -->
<div class='menubar surveybar' id="fullpagebar">
    <div class='row'>

        <!-- Left actions -->
        <div class="col-md-6 text-left">
            <!-- Plugin Manager -->
            <?php if (isset($fullpagebar['pluginManager'])) : ?>
                <!-- Install Plugin Zip -->
                <?php if (!empty($fullpagebar['pluginManager']['buttons']['showUpload'])) : ?>
                    <a
                        href=''
                        class='btn btn-outline-secondary'
                        data-toggle='modal'
                        data-target='#installPluginZipModal'
                        data-tooltip='true'
                        title='<?php eT('Install plugin by ZIP archive'); ?>'
                    >
                        <i class='icon-import'></i>&nbsp;
                        <?php eT('Upload & install'); ?>
                    </a>
                <?php endif; ?>

                 <!-- Scan Files -->
                <?php if (isset($fullpagebar['pluginManager']['buttons']['scanFiles'])) : ?>
                    <a
                        href='<?php echo $fullpagebar["pluginManager"]["buttons"]["scanFiles"]["url"]; ?>'
                        class='btn btn-outline-secondary'
                        data-toggle='tooltip'
                        title='<?php eT('Scan files for available plugins'); ?>'
                    >
                        <i class='fa fa-file '></i>
                        <i class='fa fa-search '></i>&nbsp;
                        <?php eT('Scan files'); ?>
                    </a>
                <?php endif; ?>
            <?php endif; ?>

            <!-- Add new Menu -->
            <?php if(isset($fullpagebar['menus'])): ?>
                <?php if(isset($fullpagebar['menus']['buttons']['addMenu']) && $fullpagebar['menus']['buttons']['addMenu']): ?>
                    <a class="btn btn-outline-secondary tab-dependent-button"
                       id="createnewmenu"
                       data-tab="#surveymenues"
                       title="<?php eT('Add new menu'); ?>"
                    >
                        <i class="icon-add text-success"></i>&nbsp;<?php eT('New menu') ?>
                    </a>
                <?php endif; ?>
            <?php endif; ?>

            <!-- Add new Menu entry -->
            <?php if (isset($fullpagebar['menus'])) : ?>
                <?php if (isset($fullpagebar['menus']['buttons']['addMenuEntry']) && $fullpagebar['menus']['buttons']['addMenuEntry']) : ?>
                    <a class="btn btn-outline-secondary tab-dependent-button"
                       id="createnewmenuentry"
                       data-tab="#surveymenuentries"
                       style="display:none;"
                       title="<?php eT('Add new menu entry'); ?>"
                    >
                        <i class="icon-add text-success"></i>&nbsp;<?php eT('New menu entry') ?>
                    </a>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <!-- Right actions -->
        <div class="col-md-6 text-right">

            <!-- White Close button -->
            <?php if (isset($fullpagebar['white_closebutton']['url'])) :?>
                <a class="btn btn-outline-secondary" href="<?php echo $fullpagebar['white_closebutton']['url']; ?>" role="button">
                     <span class="fa fa-close"></span>
                    <?php eT("Close");?>
                </a>
            <?php endif;?>

            <!-- Return -->
            <?php if (isset($fullpagebar['returnbutton']['url'])) :?>
                <a class="btn btn-outline-secondary" href="<?php echo $this->createUrl($fullpagebar['returnbutton']['url']); ?>" role="button">
                    <span class="fa fa-backward"></span>
                    &nbsp;&nbsp;
                    <?php echo $fullpagebar['returnbutton']['text']; ?>
                </a>
            <?php endif;?>

            <!-- Reset -->
            <?php if (isset($fullpagebar['menus']['buttons']['reset']) && $fullpagebar['menus']['buttons']['reset']) :?>
                <button
                    type="button"
                    class="btn btn-warning"
                    id="restoreBtn"
                    href="#">
                    <i class="fa fa-refresh"></i>
                    &nbsp;
                    <?php eT('Reset') ?>
                </button>
            <?php endif; ?>

            <!-- Reorder -->
            <?php if (isset($fullpagebar['menus']['buttons']['reorder']) && $fullpagebar['menus']['buttons']['reorder']) : ?>
                <button
                    type="button"
                    class="btn btn-warning"
                    id="reorderentries">
                    <i class="fa fa-sort"></i>
                    &nbsp;
                    <?php eT('Reorder') ?>
                </button>
            <?php endif; ?>

            <!-- Save and Close -->
            <?php if (isset($fullpagebar['saveandclosebutton']['form'])) :?>
                <button 
                    class="btn btn-outline-secondary" 
                    href="#" 
                    type="button" 
                    id="save-and-close-form-button" 
                    onclick="$(this).addClass('disabled').attr('onclick', 'return false;');" 
                    data-form-id="<?php echo $fullpagebar['saveandclosebutton']['form']; ?>">
                    <span class="fa fa-saved"></span>
                    <?php eT("Save and close");?>
                </button>
            <?php endif; ?>

            <!-- Save -->
            <?php if (isset($fullpagebar['savebutton']['form'])) :?>
                <button 
                    class="btn btn-success"
                    href="#"
                    type="button"
                    id="save-form-button" 
                    onclick="$(this).addClass('disabled').attr('onclick', 'return false;');" 
                    data-form-id="<?php echo $fullpagebar['savebutton']['form']; ?>">
                    <span class="fa fa-check"></span>
                    <?php eT("Save");?>
                </button>
            <?php endif;?>

            <!-- Close -->
            <?php if (isset($fullpagebar['closebutton']['url'])) :?>
                <button 
                    class="btn btn-danger"
                    href="<?php echo $fullpagebar['closebutton']['url']; ?>"
                    type="button" 
                    style="box-shadow: 3px 3px 3px;">
                    <span class="fa fa-close"></span>
                    <?php eT("Close");?>
                </button>
            <?php endif;?>

            <!-- Manage your Key -->
            <?php if (isset($fullpagebar['update'])) :?>
                <button 
                    href="<?php echo $this->createUrl('admin/update/sa/managekey/');?>" 
                    class="btn btn-outline-secondary" 
                    style="margin-top:10px;">
                    <span class="fa fa-key text-success"></span>
                    <?php eT("Manage your key");?>
                </button>
            <?php endif;?>
        </div>
    </div>
</div>
