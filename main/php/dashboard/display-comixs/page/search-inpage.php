<?php

    require_once '../../../config.php';

?>

<input type="number" class="d-none" value="<?php echo $num_of_dir; ?>" id="num_of_dir">

<!-- Area Chart -->
<div class="card shadow mb-4 overflow-hidden" style="background-color: #240046; border: none;" id="modal-form">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: #3c096c; border: solid #3c096c;" id="modal-form">
        <h6 class="m-0 font-weight-bold text-light">Search For Comix</h6>
        <div class="dropdown no-arrow">

            <!-- <button type="button" class="btn btn-secondary dropdown-toggle rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false">
                Filter
                <i class="fa-solid fa-angle-down fa-xs"></i>
            </button> -->
    
        </div>
    </div>
    <!-- Card Body -->
    <div class="card-body overflow-x-auto overflow-y-hidden">
        <nav class="mt-1 mb-5" aria-label="Page navigation example">
            <div class="d-flex justify-content-center">
            
            <input type="text" class="form-control w-75 bg-light border border-light text-black fw-semibold border-1 rounded-pill mb-2 mr-3" placeholder="Search by Comix" id="name-comix">

            </div>
        </nav>
        
        <div class="row row-cols-2 row-cols-md-4 g-4" style="max-height: 1000px; overflow-y: auto;" id="listComix">

            <div class="col">
            </div>

        </div>

    </div>
</div>

<script>

    var path = "list_filter.php";

    $(document).ready(function() {

        // When any of the specified elements change
        $("#name-comix").on('input', function() {
            // Get values from input fields
            var input_filter1 = $("#name-comix").val();

            // Check if any of the input fields have a value
            if (input_filter1 != "") {
                // Make an AJAX request to the specified URL
                $.ajax({
                    url: path,
                    method: "POST",
                    // Send data to the server
                    data: {
                        input_filter1: input_filter1,
                    },
                    // Handle the successful response from the server
                    success:function(data) {
                        // Update the content of the element with id "listDeliveryStatus"
                        $("#listComix").html(data);
                    }
                });
            } 
            // If the input field is empty, return to original view
            else {
                $.ajax({
                    url: path,
                    method: "POST",
                    // Send data to the server (empty input field)
                    data: {
                        input_filter1: "",
                    },
                    // Handle the successful response from the server
                    success:function(data) {
                        // Update the content of the element with id "listDeliveryStatus"
                        $("#listComix").html(data);
                    }
                });
            }
        });
    });

</script>