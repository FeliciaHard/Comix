<?php

    if (isset($_GET['FAIL!'])) {
        $wrong_fail = $_GET['FAIL!'];

        echo '
        <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">';  

        echo '
            <svg class="bi flex-shrink-0 me-2" width="24" height="30" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill"/>
            </svg>';

        echo '<div>Check your <strong>username</strong> & <strong>password </strong>again.</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }

    if (isset($_GET['DUPLICATE-KEY'])) {
        $wrong_duplicatekey = $_GET['DUPLICATE-KEY'];

        echo '
        <div class="alert alert-warning alert-dismissible fade show d-flex align-items-center rounded-pill" role="alert">';  

        echo '
            <svg class="bi flex-shrink-0 me-2" width="24" height="30" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill"/>
            </svg>';

        echo '<div>Their maybe a <strong>duplicate key</strong>. Please check again.</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }

    if (isset($_GET['SUCCESS'])) {
        $wrong_duplicatekey = $_GET['SUCCESS'];

        echo '
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center rounded-pill" role="alert">';  

        echo '
            <svg class="bi flex-shrink-0 me-2" width="24" height="30" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill"/>
            </svg>';

        echo '<div>New Comix Created <strong>Successfully!</strong></div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }

    if (isset($_GET['UPDATED'])) {
        $wrong_duplicatekey = $_GET['UPDATED'];

        echo '
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center rounded-pill" role="alert">';  

        echo '
            <svg class="bi flex-shrink-0 me-2" width="24" height="30" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill"/>
            </svg>';

        echo '<div>A Data Has Been Updated <strong>Successfully!</strong></div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }

    if (isset($_GET['DELETED'])) {
        $wrong_duplicatekey = $_GET['DELETED'];

        echo '
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center rounded-pill" role="alert">';  

        echo '
            <svg class="bi flex-shrink-0 me-2" width="24" height="30" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill"/>
            </svg>';

        echo '<div>A Data Has Been Deleted <strong>Successfully!</strong></div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }