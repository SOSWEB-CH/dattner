// closure to avoid namespace collision
(function(){
    // creates the plugin
    tinymce.create('tinymce.plugins.adgallery', {
        // creates control instances based on the control's id.
        // our button's id is "adgallery_button"
        createControl : function(id, controlManager) {
            if (id == 'adgallery_button') {
                // creates the button
                var button = controlManager.createButton('adgallery_button', {
                    title : 'WP AD Gallery Shortcode', // title of the button
                    image : '../wp-content/plugins/wp-ad-gallery/tinymce/images/button.png',  // path to the button's image
                    onclick : function() {
                        // triggers the thickbox
                        var width = jQuery(window).width(), height = jQuery(window).height(), H = ( 650 < height ) ? 650 : height, W = ( 720 < width ) ? 720 : width;
                        W = W - 80;
                        H = H - 84;
                        tb_show( 'WP AD Gallery Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=adgallery-form' );
                    }
                });
                return button;
            }
            return null;
        },
         getInfo : function() {
            return {
                longname : 'WP AD Gallery',
                author : 'Wiellyam Roberto',
                authorurl : 'http://www.grazhya.com',
                infourl : 'http://www.grazhya.com/work/wp-ad-gallery/',
                version : tinymce.majorVersion + "." + tinymce.minorVersion
            };
        }
    });
    
    // registers the plugin. DON'T MISS THIS STEP!!!
    tinymce.PluginManager.add('adgallery', tinymce.plugins.adgallery);
    
    // executes this when the DOM is ready
    jQuery(function(){
        // creates a form to be displayed everytime the button is clicked
        // you should achieve this using AJAX instead of direct html code like this
        var form = jQuery('<div id="adgallery-form"><table id="adgallery-table" class="form-table">\
            <tr>\
                <th><label for="adgallery-id">Post ID</label></th>\
                <td><input type="text" id="adgallery-id" name="id" value="" /><br />\
                    <small>Specify the post ID. Leave blank if you want to use the current post.</small>\
                </td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-order">Order</label></th>\
                <td><select name="order" id="adgallery-order">\
                    <option value="ASC">Ascending</option>\
                    <option value="DESC">Descending</option>\
                </select><br />\
                <small>Specify the sort order used to display thumbnails.</small></td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-orderby">Order By</label></th>\
                <td><select name="orderby" id="adgallery-orderby">\
                    <option value="menu_order">Menu order</option>\
                    <option value="ID">ID</option>\
                    <option value="title">Title</option>\
                    <option value="date">Date/Time</option>\
                    <option value="rand">Random</option>\
                </select><br />\
                <small>Specify the item used to sort the display thumbnails..</small></td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-include">Include Attachment IDs</label></th>\
                <td><input type="text" name="include" id="adgallery-include" value="" /><br />\
                    <small>Comma separated attachment IDs</small>\
                </td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-exclude">Exclude Attachment IDs</label></th>\
                <td><input type="text" id="adgallery-exclude" name="exclude" value="" /><br />\
                    <small>Comma separated attachment IDs</small>\
                </td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-width">Width</label></th>\
                <td><input type="text" id="adgallery-width" name="width" value="600px" /><br />\
                    <small>Width of gallery</small>\
                </td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-height">Height</label></th>\
                <td><input type="text" id="adgallery-height" name="height" value="400px" /><br />\
                    <small>Height of gallery</small>\
                </td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-startindex">Start Index</label></th>\
                <td><input type="text" name="startindex" id="adgallery-startindex" value="0" /><br />\
                    <small>Which image should be displayed at first? 0 is the first image.</small></td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-windowhash">Window Hash</label></th>\
                <td><select name="windowhash" id="adgallery-windowhash">\
                    <option value="true">Yes</option>\
                    <option value="false">No</option>\
                </select><br />\
                <small>Whether or not the url hash should be updated to the current image.</small></td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-thumbopacity">Thumbnail Opacity</label></th>\
                <td><select name="thumbopacity" id="adgallery-thumbopacity">\
                    <option value="1">1</option>\
                    <option value="0.9">0.9</option>\
                    <option value="0.8">0.8</option>\
                    <option value="0.7">0.7</option>\
                    <option value="0.6">0.6</option>\
                    <option value="0.5">0.5</option>\
                    <option value="0.4">0.4</option>\
                    <option value="0.3">0.3</option>\
                    <option value="0.2">0.2</option>\
                    <option value="0.1">0.1</option>\
                </select><br />\
                <small>1 is no opacity.</small></td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-animatefirst">Animate First</label></th>\
                <td><select name="animatefirst" id="adgallery-animatefirst">\
                    <option value="true">Yes</option>\
                    <option value="false">No</option>\
                </select><br />\
                <small>Should first image just be displayed, or animated in.</small></td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-animationspeed">Animation Speed</label></th>\
                <td><input type="text" id="adgallery-animationspeed" name="animationspeed" value="400" /><br />\
                    <small>Which ever effect is used to switch images, how long should it take?</small>\
                </td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-nextprev">Next & Prev</label></th>\
                <td><select name="nextprev" id="adgallery-nextprev">\
                    <option value="true">Show</option>\
                    <option value="false">None</option>\
                </select><br />\
                <small>Can you navigate by clicking on the left/right on the image?</small></td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-backforward">Back & Forward</label></th>\
                <td><select name="backforward" id="adgallery-backforward">\
                    <option value="true">Show</option>\
                    <option value="false">None</option>\
                </select><br />\
                <small>Are you allowed to scroll the thumb list?</small></td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-scrolljump">Scroll Jump</label></th>\
                <td><input type="text" id="adgallery-scrolljump" name="scrolljump" value="0" /><br />\
                    <small>If 0, it jumps the width of the container</small>\
                </td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-slideshow">Enable Slideshow</label></th>\
                <td><select name="slideshow" id="adgallery-slideshow">\
                    <option value="true">Yes</option>\
                    <option value="false">No</option>\
                </select><br /></td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-autostart">Autostart</label></th>\
                <td><select name="autostart" id="adgallery-autostart">\
                    <option value="true">Yes</option>\
                    <option value="false">No</option>\
                </select><br /></td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-slidespeed">Slide Speed</label></th>\
                <td><input type="text" id="adgallery-slidespeed" name="slidespeed" value="4000" /><br /></td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-startlabel">Start Label</label></th>\
                <td><input type="text" id="adgallery-startlabel" name="startlabel" value="Start" /><br /></td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-stoplabel">Stop Label</label></th>\
                <td><input type="text" id="adgallery-stoplabel" name="stoplabel" value="Stop" /><br /></td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-stopscroll">Stop on Scroll</label></th>\
                <td><select name="stopscroll" id="adgallery-stopscroll">\
                    <option value="true">Yes</option>\
                    <option value="false">No</option>\
                </select><br />\
                <small>Should the slideshow stop if the user scrolls the thumb list?</small></td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-coutprefix">Count Prefix</label></th>\
                <td><input type="text" id="adgallery-countprefix" name="countprefix" value="( " /><br /></td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-countsufix">Count Sufix</label></th>\
                <td><input type="text" id="adgallery-countsufix" name="countsufix" value=" )" /><br /></td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-imagecount">Shop Image Count</label></th>\
                <td><select name="imagecount" id="adgallery-imagecount">\
                    <option value="block">Yes</option>\
                    <option value="none">No</option>\
                </select><br /></td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-imagedesc">Show Image Description</label></th>\
                <td><select name="imagedesc" id="adgallery-imagedesc">\
                    <option value="block">Yes</option>\
                    <option value="none">No</option>\
                </select><br /></td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-effect">Effect</label></th>\
                <td><select name="effect" id="adgallery-effect">\
                    <option value="fade">Fade</option>\
                    <option value="slide-vert">Slide Vertikal</option>\
                    <option value="slide-hort">Slide Horizontal</option>\
                    <option value="resize">Resize</option>\
                    <option value="none">None</option>\
                </select><br />\
                </td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-keyboardmove">Keyboard Move</label></th>\
                <td><select name="keyboardmove" id="adgallery-keyboardmove">\
                    <option value="true">Yes</option>\
                    <option value="false">No</option>\
                </select><br />\
                <small>Move to next/previous image with keyboard arrows?</small></td>\
            </tr>\
            <tr>\
                <th><label for="adgallery-cycle">Cycle</label></th>\
                <td><select name="cycle" id="adgallery-cycle">\
                    <option value="true">Yes</option>\
                    <option value="false">No</option>\
                </select><br />\
                <small>If set to <strong>No</strong>, you can\'t go from the last image to the first, and vice versa</small></td>\
            </tr>\
        </table>\
        <p class="submit">\
            <input type="button" id="adgallery-submit" class="button-primary" value="Insert AD Gallery" name="submit" />\
        </p>\
        </div>');
        
        var table = form.find('table');
        form.appendTo('body').hide();
        
        // handles the click event of the submit button
        form.find('#adgallery-submit').click(function(){
            // defines the options and their default values
            // again, this is not the most elegant way to do this
            // but well, this gets the job done nonetheless
            var options = { 
                'id'              : '',
                'order'           : 'ASC',
                'orderby'         : 'menu_order ID',
                'include'         : '',
                'exclude'         : '',

                // style
                'width'           : '600px',
                'height'          : '400px',

                // script
                'startindex'      : '0',
                'windowhash'      : 'true',
                'thumbopacity'    : '1',
                'animatefirst'    : 'true',
                'animationspeed'  : '400',
                'nextprev'        : 'true',
                'backforward'     : 'true',
                'scrolljump'      : '0',

                // slideshow
                'slideshow'       : 'true',
                'autostart'       : 'true',
                'slidespeed'      : '4000',
                'startlabel'      : 'Start',
                'stoplabel'       : 'Stop',
                'stopscroll'      : 'true',
                'countprefix'     : '( ',
                'countsufix'      : ' )',
                'imagecount'      : 'block',
                'imagedesc'       : 'block',
                'effect'          : 'fade',
                'keyboardmove'    : 'true',
                'cycle'           : 'true'
                };
            var shortcode = '[ad-gallery';
            
            for( var index in options) {
                var value = table.find('#adgallery-' + index).val();
                
                // attaches the attribute to the shortcode only if it's different from the default value
                if ( value !== options[index] )
                    shortcode += ' ' + index + '="' + value + '"';
            }
            
            shortcode += ']';
            
            // inserts the shortcode into the active editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, shortcode);
            
            // closes Thickbox
            tb_remove();
        });
    });
})()