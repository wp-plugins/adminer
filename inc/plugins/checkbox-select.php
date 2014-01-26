<?php

/**
 * Adds ability to select/deselect several checkboxes with Shift.
 * @uses jQuery
 * @author Alexander Shabunevich, http://www.aether.ru/
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
 */
class AdminerCheckboxSelect {
  var $jquery_path; // jQuery URL

  /**
   * Constructor.
   *
   * @param string Default URL for jQuery library.
   */
  function __construct($jquery_path = '//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js') {
    $this->jquery_path = $jquery_path;
  }

  function head() { ?>
    <script type="text/javascript">window.jQuery || document.write('<script src="<?php echo $this->jquery_path ?>"><\/script>')</script>
    <script type="text/javascript">
      $(function() {
        var lastCheckedChk;
        $('body').delegate('input[type="checkbox"]', 'click', function(event) {
          if (!lastCheckedChk) {
            lastCheckedChk = this;
            return;
          }

          var lastCheckedChkName = $(lastCheckedChk).attr('name'),
              thisChkName = $(this).attr('name');

          if (event.shiftKey && (lastCheckedChkName == thisChkName)) {
            var chkboxes = $(':checkbox[name="'+ thisChkName +'"]'),
                start = chkboxes.index(this),
                end = chkboxes.index(lastCheckedChk),
                checkable = $(this).parents('table').hasClass('checkable');

            chkboxes.slice(Math.min(start,end), Math.max(start,end)+ 1).each(function() {
              if (lastCheckedChk.checked) {
                $(this).attr('checked', true);
                if (checkable) $(this).parents('tr').addClass('checked');
              } else {
                $(this).attr('checked', false);
                if (checkable) $(this).parents('tr').removeClass('checked');
              }
            });
          }
          lastCheckedChk = this;
        });
      })
    </script>
    <?php
  }
}
