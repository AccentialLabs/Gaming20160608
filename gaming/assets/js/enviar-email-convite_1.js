
$('.summernote').summernote({
  airMode: true
});

$(document).ready(function() {
  $('.summernote').summernote();
});

$('.summernote').summernote({
  height: 150,   //set editable area's height
  codemirror: { // codemirror options
    theme: 'monokai'
  }
});