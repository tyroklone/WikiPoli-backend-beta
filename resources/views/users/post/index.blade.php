@section('title')
<title>WikiPoli | Welcome</title>
@endsection
@extends('layouts.post')
@section('content')
<section id="editor-section">
    <h1 class="text-center" id="intro">Create Post</h1>
    @if(session()->has('message.alert'))
    <div class="text-center">
        <button class="alert alert-{{ session('message.alert') }}"> 
            {!! session('message.content') !!}
        </button>
    </div>
    @endif
    <form id="addpost">
        @csrf
        <div id="editor-wrapper">

            <input type="text"  name="title" id="post-title" placeholder="Post Title">
            <div id="editor" style="height: 350px; background-color: #fff!important">



            </div>

        </div>
        <div id="btns-wrapper">
            <button type="submit"  value="draft"  class="save-draft">Save as Draft</button>
            <button type="submit" value="post" class="create-post">Create Post</button>
  
</div>
</section>
@section('script')
<script src="{{asset('admin/assets/js/vendor/quill.min.js')}}"></script>

<script src="{{asset('admin/assets/js/image-resize.min.js')}}"></script>


<script>

var quill = new Quill('#editor', {
    theme: 'snow',
    modules: {

        syntax: true,
        imageResize: {
            displaySize: true


        },

        toolbar: [
            [{'header': [1, 2, 3, 4, 5, 6, false]}],
            ['bold', 'italic', 'underline'],
            [{'color': []}, {'background': []}],
            [{'align': []}],
            ['link', 'image', 'video'],
            ['clean']
        ]
    }
});
</script>
<script>
$(document).ready(function(){
      $("#addpost button").click(function (ev) {
      ev.preventDefault()
      if ($(this).attr("value") == "draft") {             
        var myEditor = document.querySelector('#editor');
        var html = myEditor.children[0].innerHTML;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function () {
                $(".modal").show();
            },
            complete: function () {
                $(".modal").hide();
            }
        });
        jQuery.ajax({
            url: "{{url('/draf-post')}}",
            type: 'POST',
            data: {
                title: jQuery('#post_title').val(),
                body: html


            },
            success: function (data) {
                if (data.status === 401) {
                    jQuery.each(data.message, function (key, value) {
                        var message = ('' + value + '');
                        toastr.error(message, {timeOut: 50000});
                    });
                    return false;
                }

                if (data.status === 422) {
                    var message = data.message;
                    toastr.info(message, {timeOut: 50000});
                    return false;
                }
                if (data.status === 200) {
                    var message = data.message;
                    toastr.success(message, {timeOut: 50000});
                    return false;
                }
            }

        });
        
      }
      if ($(this).attr("value") == "post") {
      var myEditor = document.querySelector('#editor');
        var html = myEditor.children[0].innerHTML;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function () {
                $(".modal").show();
            },
            complete: function () {
                $(".modal").hide();
            }
        });
        jQuery.ajax({
            url: "{{url('/create-post')}}",
            type: 'POST',
            data: {
                title: jQuery('#post-title').val(),
                body: html


            },
            success: function (data) {
                if (data.status === 401) {
                    jQuery.each(data.message, function (key, value) {
                        var message = ('' + value + '');
                        toastr.error(message, {timeOut: 50000});
                    });
                    return false;
                }

                if (data.status === 422) {
                    var message = data.message;
                    toastr.info(message, {timeOut: 50000});
                    return false;
                }
                if (data.status === 200) {
                    var message = data.message;
                    toastr.success(message, {timeOut: 50000});
                    return false;
                }
            }

        });
      }
    });
});
</script> 

@endsection
@endsection