function alert(txt) {
        var $modal = $('#waziAlert');
        $("#waziAlert .am-modal-bd").text(txt);
        $modal.modal('toggle');
    }