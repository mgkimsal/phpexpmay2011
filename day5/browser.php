<pre>
<?php
print_r($_SERVER['HTTP_USER_AGENT']);
print_r(get_browser($_SERVER['HTTP_USER_AGENT']));