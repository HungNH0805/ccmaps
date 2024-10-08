<?php

/**
 * @file
 * Customize confirmation screen after successful submission.
 *
 * This file may be renamed "webform-confirmation-[nid].tpl.php" to target a
 * specific webform e-mail on your site. Or you can leave it
 * "webform-confirmation.tpl.php" to affect all webform confirmations on your
 * site.
 *
 * Available variables:
 * - $node: The node object for this webform.
 * - $confirmation_message: The confirmation message input by the webform author.
 * - $sid: The unique submission ID of this submission.
 */
?>

<div class="webform-confirmation"><p>Cảm ơn bạn đã gửi liên hệ. Chúng tôi sẽ phản hồi lại bạn trong thời gian sớm nhất.</p></div>

<div class="links">
    <a href="<?php print url('//kachi.edu.vn') ?>"><?php print t('Quay lại form liên hệ') ?></a>
</div>
