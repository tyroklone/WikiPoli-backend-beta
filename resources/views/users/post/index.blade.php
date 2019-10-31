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
    <form action="{{url('create-post')}}" method="Post">
        @csrf
        <div id="editor-wrapper">

            <input type="text"  name="title" id="post-title" placeholder="Post Title">
            <div id="editor">
                <div id="editor-header">
                    <section class="option-group">
                        <span class="option" title="Bolden text" id="bold"><strong>B</strong></span>
                        <span class="option" title="Italicize text" id="italics"><em>I</em></span>
                        <span class="option active-option" title="Underline text" id="underline">U</span>
                    </section>
                    <section class="option-group">
                        <span class="option" title="Post link"><img src="images/link-icon.png" height="20px"></span>
                        <span class="option" title="Add quotes"><img src="images/quotes-icon.jpg" height="20px"></span>
                        <span class="option" title="Add image"><img src="images/image-icon.png" height="20px"></span>
                    </section>
                    <section class="option-group">
                        <span class="option" title="Add bullet list item"><img src="images/bullet-list-icon.png" height="20px"></span>
                        <span class="option" title="Add numbered list item"><img src="images/numbered-list-icon.png" height="20px"></span>
                        <span class="option" title="Add horizontal divider"><img src="images/hr-icon.png" height="20px"></span>
                        <span class="option" title="Add heading/sub-heading"><img src="images/heading-icon.png" height="20px"></span>
                    </section>
                    <section class="option-group">
                        <span class="option" title="Undo recent changes"><img src="images/undo-icon.png" height="20px"></span>
                        <span class="option" title="Redo recent changes"><img src="images/redo-icon.png" height="20px"></span>
                    </section>
                </div>
                <textarea id="post-body" name='body' placeholder="Write a post. . ."></textarea>
            </div>

        </div>
        <div id="btns-wrapper">
            <button id="save-draft">Save as Draft</button>
            <button type="submit" id="create-post">Create Post</button>
    </form>
</div>
</section>

@endsection