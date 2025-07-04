<?php
/**
 * SPDX-FileCopyrightText: 2021 Nextcloud GmbH and Nextcloud contributors
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */
/** @var array $_ */
/** @var \OCP\IL10N $l */
/** @var \OCP\Defaults $theme */
?>

<div class="guest-box">
	<h2><?php p($_['title']) ?></h2>
	<p><?php p($_['message']) ?></p>
	<p><a class="button primary" href="<?php p(\OCP\Server::get(\OCP\IURLGenerator::class)->linkTo('', 'index.php')) ?>">
		<?php p($l->t('Go to %s', [$theme->getName()])); ?>
	</a></p>
</div>
