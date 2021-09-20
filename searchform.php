<form role="search" method="get"  action="<?php echo esc_url( home_url( '/' ) ) ?>">
    <div class="well">
        <h4>Buscar..</h4>
        <div class="input-group">
            <input type="text" class="input-lg form-control" value="<?php echo get_search_query() ?>" name="s">
            <span class="input-group-btn">
            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
            </span>
        </div>
        <!-- /.input-group -->
    </div>
</form>
