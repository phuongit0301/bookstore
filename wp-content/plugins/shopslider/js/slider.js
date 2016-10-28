jQuery.noConflict();

jQuery(document).ready(function() {
    sliders.run();
});

var sliders = {
	processUploadAndShowMultiFile: function() {
        jQuery(document).on('change', '#file-upload', function() {
            if (this.files) {
                jQuery.each(this.files, function(index, file) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        jQuery('#files-display').append('<div class="fixed-image-upload"><a href="#" class="display-image" data-toggle="modal"><img src="'+e.target.result+'"></a></div>');
                    }

                    reader.readAsDataURL(file);
                });
            }
        });
    },

    setup: function() {        
        this.processUploadAndShowMultiFile();
    },
    run: function() {
        // Need to setup view first
        this.setup();
        // Other initialization 
    }
}