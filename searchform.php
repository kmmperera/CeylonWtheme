<?php

?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <i class="bi bi-search"></i>
    <label class="search-lable">
        <span class="screen-reader-text"><?php echo 'Search for'; ?></span>
        <input type="search" class="search-field searchinput" placeholder="<?php echo 'Search for anything'; ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <input type="submit" class="search-submit searchbtn" value="<?php echo 'Search'; ?>" />
</form>
