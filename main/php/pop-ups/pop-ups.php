<?php

    if (isset($_GET['FAIL!'])) {
        $wrong_fail = $_GET['FAIL!'];

        echo '
        <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">';  

        echo '
            <svg class="bi flex-shrink-0 me-2" width="24" height="30" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill"/>
            </svg>';

        echo '<div>Check your <strong>no. ic</strong> & <strong>password </strong>again.</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }

    if (isset($_GET['DUPLICATE-KEY'])) {
        $wrong_duplicatekey = $_GET['DUPLICATE-KEY'];

        echo '
        <div class="alert alert-warning alert-dismissible fade show d-flex align-items-center" role="alert">';  

        echo '
            <svg class="bi flex-shrink-0 me-2" width="24" height="30" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill"/>
            </svg>';

        echo '<div>Their maybe a <strong>duplicate key</strong>. Please check again.</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }