<div class="wrap">
<?php if(isset($_GET['settings-updated'])){?>
  <div class="notice notice-success is-dismissible">
        <p><?php _e( 'Done! Setting Has Been Saved Successfully', 'quixchat-button'); ?></p>
    </div>
    <br>
<?php } ?>
        <div class="box">

                <img src="<?php echo esc_url(QUIXCHAT_URL,'quixchat-button');?>/assets/img/quxchat_logo.png" height="40" width="150">
                <a href="https://quixchat.com/#quix-pricing" target="_blank" class="button is-right is-link is-rounded peach-gradient-button" style="float:right;"><?php _e('Get Pro Version','quixchat-button');?></a>
                <hr>
                <div class="columns">
                    <div class="column is-half">
                        <div class="box">
                            <h4><?php _e('Fill Below Details to Activate Your QuixChat Account','quixchat-button');?></h4>
                            <hr>
                            <form class="QuixChatSettingForm" name="QuixChatSettingForm" id="QuixChatSettingForm" method="post" action="options.php" autocomplet="off">
                                <?php settings_fields( 'QuixChat-settings' ); ?>	
                                <?php do_settings_sections( 'QuixChat-settings' );?>
                                <div class="field">
                                <label class="label"><?php _e('Show In', 'quixchat-button');?></label>
                                <div class="select select" style="width:100%;">
                                    <select class="is-info"  style="width:100%;" name="QuixChat_showIn" required>
                                        <option value="all"<?php if(get_option('QuixChat_showIn') == 'all') echo esc_attr(' selected','quixchat-button');?>><?php _e('Everywhere','quixchat-button');?></option>
                                        <option value="none"<?php if(get_option('QuixChat_showIn') == 'none') echo esc_attr(' selected','quixchat-button');?>><?php _e('Specific Page','quixchat-button');?></option>
                                    </select>
                                </div>
                                </div>

                                <div class="field">
                                <label class="label"><?php _e('Email', 'quixchat-button');?></label>
                                <div class="control has-icons-left">
                                    <input class="input is-info" type="email" name="QuixChat_email" value="<?php if(get_option('QuixChat_email')) echo esc_attr(get_option('QuixChat_email'),'quixchat-button'); else echo esc_attr(get_bloginfo('admin_email'),'quixchat-button');?>" placeholder="<?php _e('Your Email Address','quixchat-button');?>" required/>
                                    <span class="icon is-small is-left">
                                        <i class="dashicons dashicons-email"></i>
                                    </span>
                                </div>
                                </div>
                                
                                <label class="label"><?php _e('Base ID', 'quixchat-button');?></label>
                                <div class="field  has-addons">
                                <div class="control has-icons-left" style="width:100%">
                                    <input class="input is-info" type="text" name="QuixChat_Base_id" placeholder="<?php _e('QuixChat Base ID','quixchat-button');?>" value="<?php echo esc_attr(get_option('QuixChat_Base_id'),'quixchat-button');?>"/>
                                    
                                    <span class="icon is-small is-left">
                                        <i class="dashicons dashicons-lock"></i>
                                    </span>
                                </div>
                                <div class="control">
                                    <a class="button is-info" style="height:auto; padding:4px 8px; box-shadow:none;" target="_blank" href="https://builder.quixchat.com/?domain=<?php echo esc_url(site_url().'&email='.get_bloginfo('admin_email'),'quixchat-button');?>">
                                    <?php _e('Get It Now', 'quixchat-button');?>
                                    </a>
                                </div>
                                </div>
                                
                                <label class="label"><?php _e('License Key', 'quixchat-button');?></label>
                                
                                <div class="field has-addons">
                                <div class="control has-icons-left" style="width:100%">
                                    <input class="input is-info" type="text" name="QuixChat_license_key" placeholder="<?php _e('QuixChat License Key','quixchat-button');?>" value="<?php echo esc_attr(get_option('QuixChat_license_key'),'quixchat-button');?>"/>
                                    
                                    <span class="icon is-small is-left">
                                        <i class="dashicons dashicons-admin-network"></i>
                                    </span>
                                </div>
                                <a class="button is-info"  style="height:auto; padding:4px 8px;box-shadow:none;" target="_blank" href="https://builder.quixchat.com/?domain=<?php echo esc_url(site_url().'&email='.get_bloginfo('admin_email'),'quixchat-button');?>">
                                    <?php _e('Get It Now','quixchat-button');?>
                                </a>
                                </div>

                                <hr>
                                <input class="button is-link peach-gradient-button" type="submit" value="<?php _e('Save Changes','quixchat-button');?>" style="height:auto; padding:4px 8px;"/>
                        </form>
                    </div>
                </div>
                <div class="column" style="text-align: center;">
                    <div class="QuixFlex">
                        <div>
                            <img src="<?php echo esc_url(QUIXCHAT_URL,'quixchat-button');?>/assets/img/brand_logo.png" width="64"/>
                            <hr>
                            <p><?php _e('If you need any assistant regarding plugin, you can connect with us over','quixchat-button');?></p><br>
                                <p><a href="https://admin.quixchat.com" target="_blank" class="button is-link"><?php _e('Chat History & Edit Chat Button','quixchat-button');?></a>
                                <a href="https://tickets.infotheme.net" target="_blank" class="button is-link"><?php _e('Get Plugin Support','quixchat-button');?></a> 
                                <a href="https://forum.infotheme.net" class="button is-primary" target="_blank"><?php _e('Ask A Question','quixchat-button');?></a> 
                                <a href="https://quixchat.com/#quix-pricing" class="button is-info" target="_blank"><?php _e('Buy Pro / Chat Support','quixchat-button');?></a>
                            </p>
                               <br>
                                <article class="message is-warning">
                                    <div class="message-header">
                                        <p><?php _e('Need Shortcode for Specific Page','quixchat-button');?></p>
                                    </div>
                                    <div class="message-body">
                                            <p><?php _e('Please choose specific page from "Show In" option and paste it anywhere in your website where you want to show it.','quixchat-button');?></p>
                                            <br>
                                            <pre><strong>[IT_QUIXCHAT]</strong></pre>
                                    </div>
                                    </article>
                            </div>
                    </div>
                </div>
                <div class="clear"></div>
          </div>
        </div>
        <div class="clear"></div>
</div>
<div class="clear"></div>