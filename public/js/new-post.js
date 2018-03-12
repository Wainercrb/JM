$("#input-pa").fileinput({
    uploadUrl: '#', // you must set a valid URL here else you will get an error
       allowedFileTypes: ['image', 'video'],
        maxFileSize: 1000,
        maxFilesNum: 3,
    theme: 'fa',
    language: 'es',
    minFileCount: 2,
    maxFileCount: 5,
    showUpload:false,  
    showUploadIcon:false,
    initialPreview: [
    ],
    initialPreviewConfig: [
    ],
}).on('filesorted', function(e, params) {
    console.log('File sorted params', params);
}).on('fileuploaded', function(e, params) {
    console.log('File uploaded params', params);
});