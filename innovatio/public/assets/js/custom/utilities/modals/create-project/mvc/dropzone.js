new Dropzone("#kt_modal_create_project_settings_logo", {
    url: "https://sandkas.com/Innovatio/scripts/upload.php",
    paramName: "file",
    maxFiles: 10,
    maxFilesize: 10,
    addRemoveLinks: true,
    accept: function (file, done) {
        const acceptedFormats = ["jpeg", "jpg", "png", "gif"];
        const extension = file.name.split(".").pop().toLowerCase();
        if (acceptedFormats.includes(extension)) {
            done();
        } else {
            done("Only JPEG, JPG, PNG, or GIF images are allowed");
        }
    },
});
