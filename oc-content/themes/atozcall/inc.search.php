        <!-- search bar -->
        <div class="container mt-5">
            <div class="row inc-search">
                <div class="col-md-12">
                    <form action="<?php echo osc_base_url(true) ; ?>" method="get" >
                        <input type="hidden" name="page" value="search" />
                        <div class="row">
                            <div class="form-group col-md-4">
                            <input class="xlarge" type="text" name="sPattern" value="" plaseholder="Search">
                            </div>
                            <?php chosen_select_standard() ; ?>
                            <?php chosen_region_select() ; ?>
                            <div class="form-group col-md-2">
                            <button type="submit" class="btn btn-primary btm-sm"><?php _e('Search', 'twitter') ; ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="search-line"></div>
        <!-- search bar end -->