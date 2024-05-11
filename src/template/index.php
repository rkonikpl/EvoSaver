<?php

/**
 * @copyright   (C) 2024 rKonik Rafał Kobyliński <https://rkonik.com>
 * @license     https://www.gnu.org/licenses/agpl-3.0.txt GNU Affero General Public License, version 3 or later
 */

defined('_JEXEC') or die;

if (file_exists(__DIR__ . "/helper.php")) {
    require_once __DIR__ . "/helper.php";
}

$this->setMetaData('viewport', 'width=device-width, initial-scale=1.0');

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
        <jdoc:include type="metas" />
        <jdoc:include type="styles" />
        <jdoc:include type="scripts" />
	</head>
	<body class="">
        <jdoc:include type="message" />
        <jdoc:include type="component" />
	</body>
</html>